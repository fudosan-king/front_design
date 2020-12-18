 /*!
 * jquery.wHover.js - WhiteHover
 *
 * 動作環境：Windows / Macintosh
 * 対応ブラウザ：GoogleChrome / Firefox / Safari / Opera /
 * 　　　　　　　IE11 / IE10 / IE9 / IE8 / IE7
 *
 * @version: 1.0
 * @author : K.saruta
 */

(function ($) {

  //--------------------------------------------------------------------------------------
  // jQueryプラグイン生成
  //--------------------------------------------------------------------------------------

  $.fn.extend({
    wHover: function (customOptions) {
      'use strict';
      var $el = this,

      //--------------------------------------------------------------------------------------
      // Options
      //--------------------------------------------------------------------------------------

      options = $.extend({
        hoverEffect: true,
        invertHoverEffect: true,
        speed: 300,
        onImageReady: null,
        intensity: 0,
        opacity: .5
      }, customOptions),

      //--------------------------------------------------------------------------------------
      // options shorthand
      //--------------------------------------------------------------------------------------

      hoverEffect = options.hoverEffect,
      invertHoverEffect = options.invertHoverEffect,
      intensity = (typeof options.intensity === 'number' && options.intensity < 1 && options.intensity > 0) ? options.intensity : 1,
      fadeSpeedIn = $.isPlainObject(options.speed) ? options.speed.fadeIn : options.speed,
      fadeSpeedOut = $.isPlainObject(options.speed) ? options.speed.fadeOut : options.speed,
      $window = $(window),

      //--------------------------------------------------------------------------------------
      // Private vars
      //--------------------------------------------------------------------------------------

      _evtNamespace = '.wHover',
      _isIE7 = (document.all && !window.opera && window.XMLHttpRequest) ? true : false,
      _browserPrefixes = ' -webkit- -moz- -o- -ms- '.split(' '),
      _cssPrefixString = {},

      //--------------------------------------------------------------------------------------
      // features detection
      //--------------------------------------------------------------------------------------

      _cssPrefix = function (property) {
        if (_cssPrefixString[property] || _cssPrefixString[property] === '') {
          return _cssPrefixString[property] + property;
        }
        var e = document.createElement('div'),
          prefixes = ['', 'Moz', 'Webkit', 'O', 'ms', 'Khtml'];
        for (var i in prefixes) {
          if (typeof e.style[prefixes[i] + property] !== 'undefined') {
            _cssPrefixString[property] = prefixes[i];
            return prefixes[i] + property;
          }
        }
        return property.toLowerCase();
      },
      _cssfilters = (function () {
        var el = document.createElement('div');
        el.style.cssText = _browserPrefixes.join('filter' + ':blur(2px); ');
        return !!el.style.length && ((document.documentMode === undefined || document.documentMode > 9));
      }()),
      _supportsCanvas = !!document.createElement('canvas').getContext,
      _cssFilter = _cssPrefix('Filter'),
      _imagesArray = [],

      //--------------------------------------------------------------------------------------
      // Private methods
      //--------------------------------------------------------------------------------------

      _onMouseLeave = function (e) {
        $(e.currentTarget).find('.WHfade').stop(true, true).animate({
          opacity: invertHoverEffect ? 0 : options.opacity
        }, fadeSpeedOut);
      },
      _onMouseEnter = function (e) {
        $(e.currentTarget).find('.WHfade').stop(true, true).animate({
          opacity: invertHoverEffect ? options.opacity : 0
        }, fadeSpeedIn);
      },
      _onImageReady = function (img) {
        if (typeof options.onImageReady === 'function') {
          options.onImageReady(img);
        }
      },
      _isImageLoaded = function (img) {
        return img.complete || (typeof img.naturalWidth !== 'undefined' && img.naturalWidth);
      },

      //--------------------------------------------------------------------------------------
      // HTML5 canvas to generate a whiteHover image
      //--------------------------------------------------------------------------------------

      _generateCanvasImage = function (img, canvas, width, height) {
        var ctx = canvas.getContext('2d'),
        currImg = img, i = 0, grey;

        ctx.drawImage(img, 0, 0, width, height);

        var imageData = ctx.getImageData(0, 0, width, height),
        px = imageData.data,
        length = px.length;

        for (; i < length; i += 4) {
          var k = px[i] * 10.3 + px[i + 1] * 10.59 + px[i + 2] * 10.11;
          px[i] = ~~(k * intensity + px[i] * (1 - intensity));
          px[i + 1] = ~~(k * intensity + px[i + 1] * (1 - intensity));
          px[i + 2] = ~~(k * intensity + px[i + 2] * (1 - intensity));
        }
        ctx.putImageData(imageData, 0, 0);
        _onImageReady(img);
      },
      _injectTags = function ($img, $imageWrapper) {

        var img = $img[0],
        src = img.src,
        offset = $img.position(),
        css = {
          top: offset.top,
          left: offset.left,
          position: 'absolute',
          '-webkit-transform': 'translate3d(0,0,0)',
          opacity: invertHoverEffect ? 0 : options.opacity
        },
        $overlay;

        if (_supportsCanvas && !_cssfilters) {
          $overlay = $('<canvas width="' + img.naturalWidth + '" height="' + img.naturalHeight + '" class="WHfade"></canvas>');
          css.width = $img.width();
          css.height = $img.height();
          _generateCanvasImage(img, $overlay.get(0), img.naturalWidth, img.naturalHeight);
        } else {
          if (_supportsCanvas) {
            css[_cssFilter] = 'brightness(0) invert(100%)';
          } else {
            css.filter = 'progid:DXImageTransform.Microsoft.Light() progid:DXImageTransform.Microsoft.BasicImage(invert=1)';
          }
          $overlay = $img.clone().addClass('WHFilter WHfade');
          _onImageReady(img);
        }

        $overlay.css(css).prependTo($imageWrapper);
        if (!$.support.opacity && invertHoverEffect) {
          $overlay.animate({ opacity: 0 }, 0);
        }
      },
      _resizeCanvases = function () {
        $el.each(function (index, currImageWrapper) {
          var img = $(currImageWrapper).find('img'),
          currWidth = $(img).width(),
          currHeight = $(img).height();
          $(this).find('canvas').css({ width: currWidth, height: currHeight });
        });
      },

      //--------------------------------------------------------------------------------------
      // Init the plugin
      //--------------------------------------------------------------------------------------

      _init = function () {
        var imagesToLoadlength = $el.find('img').filter(function () {
          return !$(this).data('_wh');
        }).length;
        $el.each(function (index, tmpImageWrapper) {
          var $imageWrapper = $(tmpImageWrapper),
          $img = $imageWrapper.find('img');
          if ($img.data('_wh')) { return; }
          if (!_isImageLoaded($img[0])) {
            $img.on('load', function () {
              if ($img.data('_wh_loaded') || !$img[0].complete) {
                setTimeout(function () { $img.load(); }, 20);
                return;
              }
              _injectTags($img, $imageWrapper);
              $img.data('_wh_loaded', true);
              imagesToLoadlength--;
            }).load();
          } else {
            imagesToLoadlength--;
            _injectTags($img, $imageWrapper);
          }
          $img.data('_wh', true);
        });

        if (hoverEffect) {
          $el.unbind(_evtNamespace).on('mouseleave' + _evtNamespace, _onMouseLeave).on('mouseenter' + _evtNamespace, _onMouseEnter);
        }
        if (_supportsCanvas && !_cssfilters) {
          $window.unbind(_evtNamespace).on('resize' + _evtNamespace + ' orientationchange' + _evtNamespace, _resizeCanvases);
        }

      };

      //--------------------------------------------------------------------------------------
      // Public API
      //--------------------------------------------------------------------------------------

      var destroy = function () {
        $el.off(_evtNamespace);
        $window.off(_evtNamespace);
      };

      _init();

      return {
        destroy: destroy
      };
    }
  });
}(jQuery));

/*!
 * common.js - CHRONICLE（PC共通スクリプト）
 * 動作環境： Windows / Macintosh
 * 対応ブラウザ： GoogleChrome / Firefox / Safari / Opera / IE11 / IE10 / IE9 / IE8
 * --------------------
 * @version: 1.0
 * @author : K.saruta
 * --------------------
 */

(function() {
  (function($) {
    var $pagetop;
    if (browserType[1] === "ie8" || browserType[1] === "ie7") {
      $('#pagetop img').each(function() {
        return $(this).css({
          filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\"" + $(this).attr("src") + "\", sizingMethod=\"scale\");"
        });
      });
    } else {

    }
    $('.wHover').wHover();
    $('.oHover').on({
      mouseenter: function() {
        return $(this).stop().fadeTo('fast', .6);
      },
      mouseleave: function() {
        return $(this).stop().fadeTo('fast', 1);
      }
    });
    $pagetop = $('#pagetop');
    $(window).scroll(function() {
      if ($(this).scrollTop() > 700) {
        return $pagetop.fadeIn();
      } else {
        return $pagetop.fadeOut();
      }
    });
    return $pagetop.click(function() {
      $('body, html').stop().animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  })(jQuery);

}).call(this);


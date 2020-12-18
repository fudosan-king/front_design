$(function($) {

    window.onload = function() {
      setTimeout(function() {
        $('.js-loading-mask').addClass('on');
      }, 3000);
    };

    // $(".loading_content").delay(1000).animate({ opacity: 1 }, 700);​


	$('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });

    if ($('#accommodations').length) {
        $("#accommodations .accommodation-type").each(function (i) {

            var _this = $(this);
            var _allVillaBackground = $('.accommodation-bg-change');
            var _villaBackground = _this.find('.accommodation-bg-change');

            $(window).resize(function () {

                if ($(window).width() < 900) {

                    _villaBackground.css({
                        'background-image': "url(" + _villaBackground.attr('data-src') + ")",
                    });

                }
            });

            _villaBackground.css({
                'background-repeat': "no-repeat",
                'background-size': _this.closest('.column').width() + "px " +  _this.closest('.column').height() + "px "
            });


            _this.hover(function () {

                if ($(window).width() > 900) {
                    _allVillaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
                } else {
                    _villaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
                }
                return false;
            });

        });
    }



    var masterslider = new MasterSlider();

    // slider controls
    // masterslider.control('arrows'     ,{ autohide:true, overVideo:true  });
    masterslider.control('bullets'    ,{ autohide:true, overVideo:true, dir:'h', align:'bottom', space:6 , margin:10  });
    // masterslider.control('timebar'    ,{ autohide:false, overVideo:true, align:'bottom', color:'#FFFFFF'  , width:4 });
    // slider setup
    masterslider.setup("masterslider", {
        width           : 1300,
        height          : 768,
        minHeight       : 0,
        space           : 0,
        start           : 1,
        grabCursor      : true,
        swipe           : true,
        mouse           : true,
        keyboard        : false,
        layout          : "fullscreen",
        wheel           : false,
        autoplay        : true,
        instantStartLayers:true,
        loop            : true,
        shuffle         : false,
        preload         : 0,
        heightLimit     : true,
        autoHeight      : false,
        smoothHeight    : true,
        endPause        : false,
        overPause       : true,
        fillMode        : "fill",
        centerControls  : false,
        startOnAppear   : false,
        layersMode      : "center",
        autofillTarget  : "",
        hideLayers      : false,
        fullscreenMargin: 0,
        speed           : 20,
        dir             : "h",
        parallaxMode    : 'swipe',
        view            : "basic"
    });


    
});
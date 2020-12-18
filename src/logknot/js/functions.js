$(function($) {
    AOS.init();

    // var masterslider = new MasterSlider();
    // masterslider.setup("masterslider", {
    //     width           : 1366,
    //     height          : 768,
    //     minHeight       : 0,
    //     space           : 0,
    //     start           : 1,
    //     grabCursor      : false,
    //     swipe           : false,
    //     mouse           : false,
    //     keyboard        : true,
    //     layout          : "fullscreen",
    //     wheel           : false,
    //     autoplay        : false,
    //     instantStartLayers:true,
    //     loop            : false,
    //     shuffle         : false,
    //     preload         : 0,
    //     heightLimit     : true,
    //     autoHeight      : false,
    //     smoothHeight    : true,
    //     endPause        : false,
    //     overPause       : false,
    //     fillMode        : "fill",
    //     centerControls  : true,
    //     startOnAppear   : false,
    //     layersMode      : "center",
    //     autofillTarget  : "",
    //     hideLayers      : false,
    //     fullscreenMargin: 80,
    //     speed           : 20,
    //     dir             : "v",
    //     parallaxMode    : 'swipe',
    //     view            : "basic"
    // });

    // masterslider.api.addEventListener(MSSliderEvent.INIT, function(event){
    //     var api = event.target;
      
    //     var $close = jQuery('.ms-burger-close');
        
    //     jQuery('.ms-burger').click(function(){
    //         jQuery(this).hide();
    //         $close.show();
    //     });
      
    //     $close.click(function(){
    //         jQuery(this).hide();
    //         jQuery('.ms-burger').show();
    //     });
      
    // } );

    $('.navbar-nav .nav-link[href^="#"]').on('click', function (e) {
        e.preventDefault();
      
        var targetEle = this.hash;
        var $targetEle = $(targetEle);
      
        $('html, body').stop().animate({
            'scrollTop': $targetEle.offset().top
        }, 800, 'swing', function () {
            window.location.hash = targetEle;
        });
    });

    $('.navbar-nav .nav-link[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var offset = 0;
        if ($(this).data('offset') != undefined) offset = $(this).data('offset');
        $.scrollTo(target, 800, { offset: - 93 });
    });


});

$(function($) {

	$(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
});

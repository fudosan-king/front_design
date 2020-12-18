jQuery(function($) {
	$('.owl_slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: false,
        // autoplayTimeout: 5000,
        // autoplayHoverPause: false,
        nav: true,
    });

    $('.slick_slider').slick({
        slidesToShow: 1,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<button class="PrevArrow"></button>',
        nextArrow: '<button class="NextArrow"></button>',
    });

    $('.owl_viewed').owlCarousel({
        loop: false,
        margin: 5,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1

            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('.owl_images').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
    });

     
    $('.owl_selectPlan').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
    });

    $('.aside_right').hide();

    $(window).scroll(function() {
        var scrolltop = $(window).scrollTop();
        var hiLimit = $(".images").position().top - $(".header_nav").height();
        var lowLimit = $(".viewed").position().top - $(".header_nav").height() * 2;

        if (scrolltop >= hiLimit && scrolltop < lowLimit) { 
            $('.aside_right').fadeIn('slow/400/fast', function() {});        
        }
        else {
            $('.aside_right').fadeOut('slow/400/fast', function() {});
        }    
    });



});
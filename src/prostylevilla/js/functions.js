$(function($) {

    $('.slider').owlCarousel({
        items:1,
        loop:false,
        center:true,
        dots: false,
        margin:10,
        // URLhashListener:true,
        autoplay:false,
        autoplayHoverPause:true,
        startPosition: 'URLHash'
    });

    $('.bxslider').bxSlider({
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 350,
        slideMargin: 13
    });

    
	$('.owl_pickup').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: true,
	    dots: false,
	    items: 1
	});

    $('.owl_reference').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });

    $('.owl_plan').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        }
    });

	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

    $('.slider_photo_for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slider-nav'
    });
    $('.slider_photo_nav').slick({
        column: 2,
        slidesToShow: 6,
        slidesToScroll: 6,
        asNavFor: '.slider-for',
        arrows: true,
        dots: true,
        focusOnSelect: true,
        // vertical: true,
    });

    $('.around_text').moreLines({
        linecount: 10,                       // force moreLines after a certain number of lines. Default is 'auto' auto = 1
        baseclass: 'b-category_page',       // define your custom first part of class name for your CSS, for example 'b-category_page'
        basejsclass: 'js-category_page',    // define your custom first part of class name for js manipulation if needed
        classspecific: '-description',      // specify you class name, for example '-description' - it will combine with baseclass and transform to 'b-category_page-description'
        buttontxtmore: "もっとみる",         // Add your inner text for button
        buttontxtless: "Read less",         // Add your inner text for button
        animationspeed: 250                 // Type your custom speed animation, by defaul is 'auto' auto = 1
    });


    $('.owl_thumnails').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        items: 2
    });

    



});



$(function() {
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
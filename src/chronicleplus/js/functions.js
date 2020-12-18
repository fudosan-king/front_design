$(function($) {
    // $(".boxmH").matchHeight();

    $('.btnProfit').click(function(event) {
        event.preventDefault();
        $('.w_4section').slideToggle("fast");
        $(".btnProfit i").toggleClass("fa-plus-circle fa-minus");
    });

	$('.owl_banner').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: true,
	    dots: true,
	    items: 1,
        navText : ["<i class='fas fa-chevron-left fa-3x'></i>","<i class='fas fa-chevron-right fa-3x'></i>"]
	});
    $('.owl_purchase').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 3
    });
	$('.owl_recommendapartment').owlCarousel({
	    loop: true,
	    margin: 30,
	    nav: false,
	    dots: false,
	    responsive:{
	        0:{
	            items: 2,
                margin: 15
	        },
	        600:{
	            items: 3,
                margin: 15
	        },
	        1000:{
	            items: 4
	        }
	    }
	});

    $('.slider-for').each(function(key, item) {

      var sliderIdName = 'slider' + key;
      var sliderNavIdName = 'sliderNav' + key;

      this.id = sliderIdName;
      $('.slider-nav')[key].id = sliderNavIdName;

      var sliderId = '#' + sliderIdName;
      var sliderNavId = '#' + sliderNavIdName;

      $(sliderId).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: sliderNavId
      });

      $(sliderNavId).slick({
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: sliderId,
        dots: false,
        arrows: false,
        // centerMode: true,
        focusOnSelect: true
      });

    });

    $('.btn_Requestinformation').on('click', function (e) {
      e.preventDefault()
      $('#pills-tab a[href="#document_request"]').tab('show')
    })
    $('.btn_Makereservation').on('click', function (e) {
      e.preventDefault()
      $('#pills-tab a[href="#visit_reservation"]').tab('show')
    })

    $('.btn_Requestinformation').click(function(e){
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top - 150 }, 500);
        e.preventDefault();
    });


	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

	$(".back_top").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 400);
    });

    $(".wrap_option input[type='checkbox'], .active_option::before").change(function(){
        if($(this).is(":checked")){
            $(this).parent().addClass("active_option"); 
        }else{
            $(this).parent().removeClass("active_option");
        }
    });

    //status radio button
    $('ul.list_option li .form-check').click(function() {
        if($(this).is(":checked")) {
            $(this).parent().parent().parent().addClass("active_option");
        } else {
            $(this).parent().parent().parent().removeClass("active_option");
        }

    });

    $('ul.list_button li .radio label').click(function() {
        $('ul.list_button li .radio label').removeClass('bg_active');
        $(this).addClass('bg_active');
    });

    $('.btn_ContactPhone').click(function(e){
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top - 120 }, 500);
        e.preventDefault();
    });

    $('.nav_search').on( 'click', function(ev) {
        ev.preventDefault();
        // get the scroll-to target
        var targetSection = $(this).attr('href');
        // get vertical offset of target
        var targetOffset = $(targetSection).offset().top - 100;
        // scroll to the starget section
        TweenMax.to( window, 1, { scrollTo:{ y:targetOffset }, ease:Power3.easeOut } );
    });

    


    




    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
          $('.scroll-to-top').fadeOut();
        }
    });

    $('.scroll-to-top').on('click', function(e) {
      e.preventDefault();
        $('html, body').animate({scrollTop : 0}, 800);
    });

    $(window).scroll(function() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if(top == 0) {
            $(".bottom_searchCondition").fadeOut();
        } else {
            $(".bottom_searchCondition").fadeIn();
        }

        $(".bottom_searchCondition").removeClass("no_fixed");
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            $(".bottom_searchCondition").addClass("no_fixed");
        }
    });

});

$(document).ready(function() {
	//tokyo
    $('.show_listCity_tokyo').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs').show('slow/400/fast', function() {});
        $('.area_Kanto, .area_kanto_xs').hide('slow/400/fast', function() {});
    });
    $('.btn_show_listCityDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs').hide('slow/400/fast', function() {});
    });
    $('.back_kanto').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs').hide('slow/400/fast', function() {});
        $('.area_Kanto, .area_kanto_xs').show('slow/400/fast', function() {});
    });

    //tokyoDepartment
    $('.show_listCity_tokyoDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_kanto_xs, .area_Kanto2_xs').hide('slow/400/fast', function() {});
        $('.area_Kanto').show('slow/400/fast', function() {});
    });
    $('.btn_back_tokyoDepartment').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_kanto_xs').show('slow/400/fast', function() {});
        $('.area_Kanto').hide('slow/400/fast', function() {});
    });

    //tokyoDepartment
    $('.show_listCity_tokyo23wards').click(function(event) {
        event.preventDefault();
        $('.area_Kanto, .area_Kanto2, .area_kanto_xs, .area_Kanto2_xs').hide('slow/400/fast', function() {});
        $('.area_Kanto').show('slow/400/fast', function() {});
    });
    $('.btn_back_tokyo23wards').click(function(event) {
        event.preventDefault();
        $('.area_Kanto2, .area_Kanto2_xs').show('slow/400/fast', function() {});
        $('.area_Kanto').hide('slow/400/fast', function() {});
    });

    

    $('[data-check-pattern]').checkAll();


});

;(function($) {
    'use strict';
    
    $.fn.checkAll = function(options) {
        return this.each(function() {
            var mainCheckbox = $(this);
            var selector = mainCheckbox.attr('data-check-pattern');
            var onChangeHandler = function(e) {
                var $currentCheckbox = $(e.currentTarget);
                var $subCheckboxes;
                
                if ($currentCheckbox.is(mainCheckbox)) {
                    $subCheckboxes = $(selector);
                    $subCheckboxes.prop('checked', mainCheckbox.prop('checked'));
                } else if ($currentCheckbox.is(selector)) {
                    $subCheckboxes = $(selector);
                    mainCheckbox.prop('checked', $subCheckboxes.filter(':checked').length === $subCheckboxes.length);
                }
            };
            
            $(document).on('change', 'input[type="checkbox"]', onChangeHandler);
        });
    };
}(jQuery));
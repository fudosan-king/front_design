$(function($) {
	$(window).on("scroll", function() {
	    if ($(window).scrollTop() >= 20) {
	      	$("header").addClass("compressed");
	    } else {
	      	$("header").removeClass("compressed");
	    }
	});

	jQuery(document).ready(function($) {
	  	function scrollToSection(event) {
		    event.preventDefault();
		    var $section = $($(this).attr('href')); 
		    $('html, body').animate({
		      scrollTop: $section.offset().top 
		    }, 500);
	  	}
	  	$('[data-scroll]').on('click', scrollToSection);

	}(jQuery));
});

jQuery(function($) {
  $('a.nav_link[href*="#"]:not([href="#"])').click(function() {
    var target = $(this.hash);
    $('html,body').stop().animate({
      scrollTop: target.offset().top - 76
    }, 1450, 'easeInOutExpo');

  });

  // $('.navbar-collapse ul li a').click(function() {
  //   $('.navbar-toggle:visible').click();
  // });

	if (location.hash){
    var id = $(location.hash);
	}
	$(window).on('load', function() {
  	if (location.hash){
    	$('html,body').animate({scrollTop: id.offset().top -78}, 600)
  	};
	});

	$('.navbar-toggler').click(function(){
    $('.nav_link').on('click', function() {
		if(!$('.navbar-toggler').hasClass('collapsed'))
      $('.navbar-toggler').click();
    });
	})
	
    
});

$('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
 	let dropdown=$(e.target).closest('.dropdown-hover');
  	dropdown.addClass('show');
  
	setTimeout(function(){
      	dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
  	},300);
});


jQuery(document).ready( function($){
	var lastScrollTop = 0;
	window.addEventListener("scroll", function(event){
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
			jQuery('header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
		} else {
			jQuery('header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
		}
		lastScrollTop = st;
	});
});

$(function($) {
	jQuery(document).ready(function() {
	  	function scrollToSection(event) {
		    event.preventDefault();
		    var $section = $($(this).attr('href')); 
		    $('html, body').animate({
		      scrollTop: $section.offset().top
		    }, 500);
	  	}
	  	$('[data-scroll]').on('click', scrollToSection);

	}(jQuery));
});


$(function($) {
    const run_rimawaru = new rimawaru($);
    $(document).ready(function() {
        run_rimawaru.ready();
    });
});


function rimawaru() {

    this.ready = function() {
        const _this = this;
        _this.navigation();
        _this.widthSideBarRight ();
    } 

    //Calculator sidebar right width
    this.widthSideBarRight = function()
    {
        $(window).on('load resize',function(){
            if( $(window).outerWidth() >= 992 ){
                const wContent = $('.js-single-sidebar-right .col-12.col-lg-8').outerWidth();
                $('.js-single-sidebar-right .col-12.col-lg-4').css('max-width','calc(100% - '+wContent+'px)');
            } else {
                $('.js-single-sidebar-right .col-12.col-lg-4').removeAttr('style');
            }
        });
        
    }
    

    //Js Navigation
    this.navigation = function() {
       const _this = this;
       
        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $('.bg-overflow').on('click',function(){
        		if( $('.nav_menu-list').hasClass('show') ){
                _this.menu_close_all();
            } 
        });

        //Click on/off menu
        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;
            if( $('.nav_menu-list').hasClass('show') ){
                _this.menu_close_all();
            } else {
                $(currentTarget).addClass('open');
                $('.nav_menu-list').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
        });

        //Hidden menu sp open on PC
        $(window).resize(function(e){
        	const currentTarget = e.currentTarget; 
        	if( $(currentTarget).outerWidth() >= 992 ){
        		_this.menu_close_all();
        	}
        });

        //Hidden click without
        $('body,html').on('click',function(e){
			const currentTarget = e.currentTarget;
			const target = e.target
			if(  $(target).is('.nav_menu') || $(target).is('.navbar-expand-lg') ){
 				_this.menu_close_all();
 			}
		});

    }

    this.menu_close_all = function()
    {
    	const _this = this;
    	$('body').removeClass('menu-opening');
        $('body').addClass('menu-closing');
        setTimeout(function(){
            $('.nav_menu-list').removeClass('show');
            $('body').removeClass('menu-opened');
            $('body').removeClass('menu-closing');
            _this.menu_animation_scroll();
            $('.js-menu').removeClass('open');
        },300);  
    }

    this.menu_animation_scroll = function()
    {
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        if( $('body').hasClass('menu-opened') ) return;
        if( win.height() + 2*headerHeight >= doc.height() ) return;
        if( win.scrollTop() > headerHeight ){
            _header.addClass('menu-animation-scroll');    
        } else {
            _header.removeClass('menu-animation-scroll');    
        }
    }

}



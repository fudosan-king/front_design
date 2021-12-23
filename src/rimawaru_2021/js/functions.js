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


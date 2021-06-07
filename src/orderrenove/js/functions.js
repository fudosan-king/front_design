$(function($) {
	$(window).on("scroll", function() {
	    if ($(window).scrollTop() >= 20) {
	      	$("header").addClass("compressed");
	    } else {
	      	$("header").removeClass("compressed");
	    }
	 });

	$(".btn_wishlist").click(function(event){
		 event.preventDefault();
		$(this).toggleClass("on");
	});

	$("#dropdown_user").click(function(event) {
  		event.preventDefault();
	  	$(".dropdown_user_content").slideToggle("fast");
	});

	$("#dropdown_search").click(function(event) {
  		event.preventDefault();
	  	$(".dropdown_search_content").slideToggle("fast");
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

	  	$(".btn_call").click(function(event) {
	  		event.preventDefault();
		  	$(".btn_call span").slideToggle("fast");
		});

	}(jQuery));
});


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
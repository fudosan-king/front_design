$(function($){
	$('[data-fancybox="gallery"]').fancybox({ 
		'loop': true
	});
  // scroll ro access part
  $('.anchor-link .access-action, .anchor-link .contact-action').click(function() {
    $('html, body').animate({
      scrollTop: $(".ac-section").offset().top
    }, 1000)
  }); 
});




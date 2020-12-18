$(function($) {
	$('.datepicker').datepicker({
		language: 'ja',
	});

	var $carousel = $('.carousel').flickity();

	// previous
	$('.button--next').on( 'click', function() {
	  $carousel.flickity('next');
	});
	// previous wrapped
	$('.button--next-wrapped').on( 'click', function() {
	  $carousel.flickity( 'next', true );
	});

	var flkty = new Flickity('.carousel', {});
	var carouselStatus = document.querySelector('.carousel-status');

	function updateStatus() {
	  var slideNumber = flkty.selectedIndex + 1;
	  carouselStatus.textContent = slideNumber + ' / ' + flkty.slides.length;
	}
	updateStatus();

	flkty.on( 'select', updateStatus );


	$(".btn_contactus").click(function() {
	    $('html,body').animate({
	        scrollTop: $(".section_bookonlineconsultation").offset().top},
	        'slow');
	});

});
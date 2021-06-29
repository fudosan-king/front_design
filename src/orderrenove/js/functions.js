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

	$(".btn_del").click(function(event){
		event.preventDefault();
		// $('.box_notice_item').hide();
	});

	$("#dropdown_user").click(function(event) {
  		event.preventDefault();
	  	$(".dropdown_user_content").slideToggle("fast");
	  	$(".dropdown_search_content").hide();
	});

	$("#dropdown_search").click(function(event) {
  		event.preventDefault();
	  	$(".dropdown_search_content").slideToggle("fast");
	  	$(".dropdown_user_content").hide();
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

		$(".btnshowhide").click(function(event) {
	  		event.preventDefault();
	  		$(this).toggleClass('show');
		  	$(".w_box_simulation_result").slideToggle("fast");
		});

	}(jQuery));
});

$(".js-range-slider").ionRangeSlider({
	min: 1,
    max: 35,
    from: 10
});

$(".js-range-slider1").ionRangeSlider({
	min: 0,
    max: 35,
    postfix: "年"
});

$(".js-range-slider2").ionRangeSlider({
	min: 0,
    max: 3,
    step: .1,
    postfix: "%"
});


$('.datepicker_year').datetimepicker({
	format: 'YYYY',
	locale: 'ja'
});
$('.datepicker_month').datetimepicker({
	format: 'MM',
	locale: 'ja'
});

$('.datepicker_day').datetimepicker({
	format: 'DD',
    locale: 'ja'
});

$('.datepicker_time').datetimepicker({
	format: 'LT',
	locale: 'ja'
});



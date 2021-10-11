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

	$(".btn_wishlist2").click(function(event){
		 event.preventDefault();
		$(this).toggleClass("on");
	});

	$(".btn_del").click(function(event){
		event.preventDefault();
		// $('.box_notice_item').hide();
	});

	$("#dropdown_user").click(function(event) {
  		event.preventDefault();
	  	// $(".dropdown_user_content").slideToggle("fast");
	  	$(".dropdown_search_content").hide();
	});

	$("#dropdown_search").click(function(event) {
  		event.preventDefault();
	  	// $(".dropdown_search_content").slideToggle("fast");
	  	$(".dropdown_user_content").hide();
	});


	$(".btn_map").click(function(event) {
  		event.preventDefault();
	  	$(".section_searh").show();
	  	$(".section_searh .box_searchby.area").show();
	  	$(".box_searchby.line").hide();
	});

	$(".btn_stations").click(function(event) {
  		event.preventDefault();
	  	$(".section_searh").show();
	  	$(".section_searh .box_searchby.line").show();
	  	$(".box_searchby.area").hide();
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


$('.datepicker_year').datepicker({
	format: 'yyyy',
	viewMode: "years", 
    minViewMode: "years",
	language: 'ja'
});
$('.datepicker_month').datepicker({
	format: 'mm',
	viewMode: "months", 
    minViewMode: "months",
	language: 'ja'
});
$('.datepicker_day').datepicker({
	format: 'dd',
	viewMode: "days", 
    minViewMode: "days",
	language: 'ja'
});


$(document).ready(function(){
    $(".dropdown").click(function(){
        $(this).find(".dropdown_user_content").slideToggle("fast");
        $(this).find(".dropdown_search_content").slideToggle("fast");
    });
});

$(document).on("click", function(event){
    var $trigger = $(".dropdown");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropdown_user_content").slideUp("fast");
        $(".dropdown_search_content").slideUp("fast");
    }
});

$("#ck_01").click(function() {
	$("#collapseOne input[type=checkbox]").prop("checked", $(this).prop("checked"));
});

$("#collapseOne input[type=checkbox]").click(function() {
	if (!$(this).prop("checked")) {
		$("#ck_01").prop("checked", false);
	}
});


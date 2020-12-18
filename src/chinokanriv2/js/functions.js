$(function($) {
	$.ajax({
		url: 'assets/data/jp_national_holidays_min.json',
		dataType: 'json',
	})
	.always(function(data) {
		var holidays = data[(new Date()).getFullYear()];
		$('.datepicker').datepicker({
			language: 'ja',
			disableTouchKeyboard: true,
	        autoclose:true,
	        todayHighlight: true,
	        ignoreReadonly: true,
	        beforeShowDay: function (date) {

	            if(date.getTime() <= (new Date()).getTime() )
	                return false;

	            if (date.getDay() == 3 || date.getDay() == 0)
	                return false;

	            if(data &&  data[date.getFullYear()][(date.getMonth() + 1)]){
	            	if(data[date.getFullYear()][(date.getMonth() + 1)].indexOf(date.getDate()) != -1)
	            		return false;
	            }
	            
	            return true;
	        },
		});
	})
	.fail(function(e) {
		console.log(e);
	})

});

$(".footer_top_content .footer_top_item h4").click(function(){
    $(this).parent(".footer_top_item").toggleClass("open"); 
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
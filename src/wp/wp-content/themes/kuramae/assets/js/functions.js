jQuery(document).ready(function($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top - 100
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

  $('.datepicker').datepicker({
    language: 'ja',
    autoclose: true,
    todayHighlight: true,
    beforeShowDay: function (date) {

      if (date.getDate() == (new Date()).getDate())
        return false;

      if (date.getTime() < (new Date()).getTime())
        return false;

      if (date.getDay() == 2 || date.getDay() == 3)
        return false;

      return true;
    },
  }); 



  $('.menu').on('click',function(e){
    if ($('.menu').hasClass('active')) {
      $('.bsnav-sticky-slide').find('h1 img:first-of-type').hide();
      $('.bsnav-sticky-slide').find('h1 img:last-of-type').show();
    } else {
      $('.bsnav-sticky-slide').find('h1 img:first-of-type').hide();
      $('.bsnav-sticky-slide').find('h1 img:last-of-type').show();
    }
  });

  Fancybox.bind(".kachikura_gallerys a", {
    // Your options
  });

}(jQuery));


$(function($) {
	 AOS.init();

	$(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
});


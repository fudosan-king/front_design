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


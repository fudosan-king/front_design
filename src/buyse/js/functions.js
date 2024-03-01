jQuery(document).ready(function ($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: $section.offset().top - 50
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

}(jQuery));


$(function ($) {
  AOS.init();

  $(document).ready(function () {
    return $(window).scroll(function () {
      return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
    }), $("#back-to-top").click(function () {
      return $("html,body").animate({
        scrollTop: "0"
      })
    })
  })
});

$(".btn_showdetail").on("click", function () {
  $(this).toggle('fast');
  $('.box_detail').show();
  $('.btn_close').show();
  $('.btn_inquiry.btn_inquiry2').hide();
});

$(".btn_close").on("click", function (event) {
  event.preventDefault();
  $('.w_salesconsultation').toggle('fast');
});

$(window).on('scroll', function () {
  if ($(window).scrollTop()) {
    $('header').addClass('bgwhite');
  }
  else {
    $('header').removeClass('bgwhite');
  }
})


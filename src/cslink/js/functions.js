jQuery(document).ready(function ($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: $section.offset().top - 0
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

$(".btn_close").on("click", function () {
  $(this).toggle('fast');
  $('.btn_showdetail').show();
  $('.box_detail').hide();
  $('.btn_inquiry.btn_inquiry2').show();
});

$(".btn_change").click(function (event) {
  event.preventDefault()
  $("header, .btn_inquiry").css({
    backgroundColor: $("#color").val()
  });

  $(".btn_addlink_theme svg path").css({
    stroke: $("#color").val(),
  });

  $(".standard_article h2 span").css({
    backgroundColor: $("#color").val(),
  });

  $(".btn_addlink_theme").css({
    borderColor: $("#color").val(),
    color: $("#color").val(),
    fill: $("#color").val(),
  });
});

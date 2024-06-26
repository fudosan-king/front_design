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
  AOS.init({
    disable: function () {
      var maxWidth = 800;
      return window.innerWidth < maxWidth;
    }
  });
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 200) {
    $("#back-to-top").addClass("show");
  } else {
    $("#back-to-top").removeClass("show");
  }
});

$("#back-to-top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 600);
});

document.addEventListener('DOMContentLoaded', () => {
  let lastScrollTop = 0;
  const header = document.querySelector('header');

  window.addEventListener('scroll', () => {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScrollTop > lastScrollTop) {
      // Cuộn xuống
      header.classList.add('header-hidden');
    } else {
      // Cuộn lên
      header.classList.remove('header-hidden');
    }
    lastScrollTop = currentScrollTop;
  });
});

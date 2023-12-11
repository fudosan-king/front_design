jQuery(document).ready(function ($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: $section.offset().top - 80
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

$(window).on('scroll', function () {
  if ($(window).scrollTop()) {
    $('header').addClass('bgwhite');
  }
  else {
    $('header').removeClass('bgwhite');
  }
})

// collect all your nav links
let navLinks = document.querySelectorAll(".nav-link");

// variable to store the size of the window
let size = window.innerWidth;

// function to toggle the data-bs attributes depending on the breakpoint set
function setAttr() {

  // 992 is the md breakpoint
  if (size > 992) {
    navLinks.forEach((link) => {
      link.removeAttribute("data-bs-toggle");
      link.removeAttribute("data-bs-target");
    });
  } else {
    navLinks.forEach((link) => {
      link.setAttribute("data-bs-toggle", "collapse");
      // #navbarSupportedContent is the id of the navbar collapse
      link.setAttribute("data-bs-target", "#navbarSupportedContent");
    });
  }
}

//function to update the size variable 
const updateWindowDimensions = () => {
  size = window.innerWidth;
};

// event listener to call the function to update the size variable and check the breakpoint
window.addEventListener("resize", () => {
  updateWindowDimensions();
  setAttr();
});

// call the function to set the attributes
setAttr();

// call on the document on load just for good measure
document.onload = () => {
  setAttr();
};
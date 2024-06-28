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

/* */
/* K-Processing script */
/* */
let radGroups = document.querySelectorAll('[data-group]')

radGroups.forEach( (g, order) => {
  g.querySelectorAll('[name="assessment"]').forEach( (p, index) => {
    p.addEventListener('change', () => {

      let selectedValue = g.querySelector('[name="assessment"]:checked').value

      radGroups.forEach( ge => { ge.querySelector('[name="assessment"][value="' + selectedValue + '"]').checked = true } );
      
    });
  });
});

const elems = ['pref', 'city', 'aza', 'post']

elems.forEach(e => {
  let eName = '[name="' + e + '"]'

  document.querySelectorAll(eName).forEach( (p, index) => {
    p.addEventListener('keyup', () => {
      document.querySelectorAll(eName).forEach( e => { e.value = p.value } );

      if(e == 'post'){
        AjaxZip3.zip2addr(p, '', 'pref', 'city', 'aza');
      }

    });
    p.addEventListener('change', () => {
      document.querySelectorAll(eName).forEach( e => { e.value = p.value } );

      if(e == 'post'){
        document.querySelectorAll('[name="pref"]')[index].dispatchEvent(new Event('change'))
        document.querySelectorAll('[name="city"]')[index].dispatchEvent(new Event('change'))
        document.querySelectorAll('[name="aza"]')[index].dispatchEvent(new Event('change'))
      }
    });
  });
  
})


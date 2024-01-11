jQuery(document).ready(function ($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: $section.offset().top - 0
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

  $('.record_table tr').click(function (event) {
    if (event.target.type !== 'checkbox') {
      $(':checkbox', this).trigger('click');
    }
  });

  $(".record_table input[type='checkbox']").change(function (e) {
    if ($(this).is(":checked")) {
      $(this).closest('tr').addClass("highlight_row");
    } else {
      $(this).closest('tr').removeClass("highlight_row");
    }
  });


  // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
  $('.table-responsive-stack').each(function (i) {
    var id = $(this).attr('id');
    //alert(id);
    $(this).find("th").each(function (i) {
      $('#' + id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">' + $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();

    });

  });

  $('.table-responsive-stack').each(function () {
    var thCount = $(this).find("th").length;
    var rowGrow = 100 / thCount + '%';
    //console.log(rowGrow);
    $(this).find("th, td").css('flex-basis', rowGrow);
  });

  function flexTable() {
    if ($(window).width() < 1280) {

      $(".table-responsive-stack").each(function (i) {
        $(this).find(".table-responsive-stack-thead").show();
        $(this).find('thead').hide();
      });


      // window is less than 768px   
    } else {


      $(".table-responsive-stack").each(function (i) {
        $(this).find(".table-responsive-stack-thead").hide();
        $(this).find('thead').show();
      });



    }
    // flextable   
  }

  flexTable();

  window.onresize = function (event) {
    flexTable();
  };

  $(".load-more").click(function (e) {
    $(this).addClass("load-more--loading");
    setTimeout(function (e) {
      $(".load-more--loading").removeClass("load-more--loading");
    }, 3000);
  });

  $('.datepicker').datepicker({
    format: 'yyyy/mm/dd',
    startDate: '-3d',
    language: 'ja',
  });

  $('.attachment input[type="file"]')
    .on('change', (event) => {
      let el = $(event.target).closest('.attachment').find('.btn-file');

      el
        .find('.btn-file__actions__item')
        .css({
          'padding': '135px'
        });

      el
        .find('.btn-file__preview')
        .css({
          'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) + ')'
        });
    });


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

document.addEventListener("DOMContentLoaded", function (event) {

  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener('click', () => {
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
      })
    }
  }

  showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll('.nav_link')

  function colorLink() {
    if (linkColor) {
      linkColor.forEach(l => l.classList.remove('active'))
      this.classList.add('active')
    }
  }
  linkColor.forEach(l => l.addEventListener('click', colorLink))

  // Your code to run since DOM is loaded and ready




});








jQuery(function($) {
    $(".navbar-toggle").on('click', function() {
      $(this).toggleClass("on");
    });

    $(".btn_scrolldown").click(function() {
        $('html, body').animate({
          scrollTop: $('.section_information').offset().top - 80
        },1000);
      });

    // fade in .back_top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back_top').fadeIn();
        } else {
            $('.back_top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('.back_top').on('click', function(e) {
      e.preventDefault();
        $('html, body').animate({scrollTop : 0}, '800', 'swing');
    });

    // gallery picture
    $('.owl_search_result_detail').owlCarousel({
        loop: true,
        margin: 5,
        nav: true,
        dots: false,
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    // $('.owl_showroom').owlCarousel({
    //     items: 1,
    //     loop: false,
    //     center: true,
    //     margin: 0,
    //     nav: false,
    //     dots: false,
    // });

    //show room
    $('.list_featuredProperty_owl_tokyo').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x aria-hidden='true'></i>"
      ],
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    $('.list_featuredProperty_owl_kanagawa').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x aria-hidden='true'></i>"
      ],
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    $('.list_featuredProperty_owl_nagoya').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x aria-hidden='true'></i>"
      ],
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    $('.list_featuredProperty_owl_osaka_hyogo_kyoto').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x aria-hidden='true'></i>"
      ],
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    $('.list_featuredProperty_owl_fukuoka').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x aria-hidden='true'></i>"
      ],
        responsive: {
           0: {
               items: 2

           },
           667: {
               items: 2
           },
           1024: {
               items: 4
           }
       }
    });

    // scroll to top
    $('.btn_pageTop').click(function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 400);
    });

    //matchHeight columm
    $('.boxmH').matchHeight();

});

//---------------------------------------------------

function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(this).closest('.collapse').collapse('toggle');
});
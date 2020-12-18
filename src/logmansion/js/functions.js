jQuery(function($) {
    
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });

    //menu
    $(".navbar-toggle").on('click', function() {
      $(this).toggleClass("on");
    });

    $(".btn_scrolldown").click(function() {
        $('html, body').animate({
          scrollTop: $('.section_find').offset().top - 120
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
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    //show room
    $('.list_featuredProperty_owl_tokyo').owlCarousel({
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-4x' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-4x' aria-hidden='true'></i>"
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
        
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-lg' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-lg' aria-hidden='true'></i>"
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
        
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-lg' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-lg' aria-hidden='true'></i>"
      ],
        responsive: {
            0: {
                items: 2

            },
            667: {
                items: 2
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            }
        }
    });

    $('.list_featuredProperty_owl_osaka_hyogo_kyoto').owlCarousel({
       
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-lg' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-lg' aria-hidden='true'></i>"
      ],
        responsive: {
            0: {
                items: 2

            },
            600: {
                items: 4
            },
            768: {
                items: 2
            },
            1280: {
                items: 4
            }
        }
    });

    $('.list_featuredProperty_owl_fukuoka').owlCarousel({        
        margin: 0,
        nav: true,
        dots: false,
        navText: [
      "<i class='fa fa-angle-left fa-lg' aria-hidden='true'></i>",
      "<i class='fa fa-angle-right fa-lg' aria-hidden='true'></i>"
      ],
        responsive: {
            0: {
                items: 2

            },
            600: {
                items: 4
            },
            768: {
                items: 2
            },
            1280: {
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
$(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 100){
            $('.header').css({
                background: 'rgba(255, 255, 255, 0.7)',
                'box-shadow': '0 3px 3px 0 rgba(0,0,0,.1)',
                // 'height': '101px',
            });
            // $(".menu_top_scroll").addClass("container", 1000);
            // $('.box_top_right .btn, .btn_showroom').css({
            //     display: 'inline-block',
            // });
            // $('.navbar-nav').css({
            //     float: 'left',
            // });
            // $('.navbar-custom.top-nav-collapse .navbar-nav ').css({
            //     'margin-top': '46px',
            //     'margin-bottom': '0',
            // });
            // $('.navbar-brand').css({
            //     top: '17px',
            //     left: '30px'
            // });
            // $('.navbar-custom.top-nav-collapse .navbar-nav').css({
            //     right: '195px',
            // });
        }
    else
    {
        $('.header').css({
            background: 'rgba(255, 255, 255, 1)',
            // 'height': '77px',
        });

        // $(".menu_top_scroll").removeClass("container", 1000);
        // $('.box_top_right .btn, .btn_showroom').css({
        //     display: 'none',
        // });
        // $('.navbar-nav').css({
        //     float: 'right',
        // });
        // $('.navbar-custom.top-nav-collapse .navbar-nav ').css({
        //     'margin-top': '19px',
        //     'margin-bottom': '18px',
        // });
        // $('.navbar-brand').css({
        //     top: '5px',
        //     left: '15px'
        // });
        // $('.navbar-custom.top-nav-collapse .navbar-nav').css({
        //     right: '15px',
        // });
    }
});

//---------------------------------------------------

// function collapseNavbar() {
//     if ($(".navbar").offset().top > 50) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// }

// $(window).scroll(collapseNavbar);
// $(document).ready(collapseNavbar);

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(this).closest('.collapse').collapse('toggle');
});

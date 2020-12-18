$(function($) {

    $(function() {
        $(document).ready(function() {
            return $(window).scroll(function() {
                return $(window).scrollTop() > 200 ? $("#side-dock").addClass("show") : $("#side-dock").removeClass("show")
            }), $("#side-dock").click(function() {
                return $("html,body").animate({
                    scrollTop: "0"
                })
            })
        })
    });

    var wrapperMenu = document.querySelector('.wrapper-menu');
    wrapperMenu.addEventListener('click', function(){
        wrapperMenu.classList.toggle('open');  
    });

    $('.btnShowlist').click(function(event) {
        event.preventDefault();
        $('.list_action').fadeToggle( "fast", function() {});
    });

    $('.btnClose_xs').click(function(event) {
        event.preventDefault();
        $('.box_notify').hide('slow/400/fast', function() {});
    });

    var swiper = new Swiper('.swiper_banner.swiper-container', {
        direction: 'vertical',
        // effect: 'fade',
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        mousewheel: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
      
    });

    //matchHeight columm
    $('.mh').matchHeight();
    
    //CENTERED MODALS
    $(function() {
        function reposition() {
            var modal = $(this),
                dialog = modal.find('.modal-dialog');
            modal.css('display', 'block');

            // Dividing by two centers the modal exactly, but dividing by three 
            // or four works better for larger screens.
            dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
        }
        // Reposition when a modal is shown
        $('.modal').on('show.bs.modal', reposition);
        // Reposition when the window is resized
        $(window).on('resize', function() {
            $('.modal:visible').each(reposition);
        });
    });


    $('.owl_banner_info').owlCarousel({
        loop:true,
        margin:10,
        items: 1,
    });

    $('.owl_trySearch').owlCarousel({
        loop:true,
        margin:30,
        items: 3,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        },
    });

    $('.owl_latestProfiles').owlCarousel({
        loop:true,
        margin:30,
        items: 4,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        },
    });

    $('.owl_mostvisitedProfiles').owlCarousel({
        loop:true,
        margin:20,
        items: 5,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        },
    });

    $('.owl_gallerys').owlCarousel({
        loop:true,
        margin:10,
        items: 7,
        nav: true,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:7,
                nav:true,
                loop:false
            }
        },
    });

    

    


});

/* ScrollTrigger */
window.counter = function() {
    var span = this.querySelector('span');
    var current = parseInt(span.textContent);

    span.textContent = current + 1;
  };

  document.addEventListener('DOMContentLoaded', function(){
    var trigger = new ScrollTrigger({
      addHeight: true
    });
  });




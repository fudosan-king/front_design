$(function($) {
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

    // Loading section
    AOS.init({
        duration: 1200,
    });

    // Variables
    var viewport = $(window),
        root = $('html'),
        maxScroll;

    // Bind events to window
    viewport.on({
        scroll: function() {
            // Grab scroll position
            var scrolled = viewport.scrollTop();

            /**
             * Calculate our factor, setting it as the root `font-size`.
             *
             * Our factor is calculated by multiplying the ratio of the page scrolled by our base factor. The higher the base factor, the larger the parallax effect.
             */
            root.css({ fontSize: (scrolled / maxScroll) * 50 });
        },
        resize: function() {
            // Calculate the maximum scroll position
            maxScroll = root.height() - viewport.height();
        }
    }).trigger('resize');


    /* Main menu */
    // console.clear();

    var app = function() {
        var body = void 0;
        var menu = void 0;
        var menuItems = void 0;

        var init = function init() {
            body = document.querySelector('body');
            menu = document.querySelector('.menu-icon');
            menuItems = document.querySelectorAll('.nav__list-item');

            applyListeners();
        };

        var applyListeners = function applyListeners() {
            menu.addEventListener('click', function() {
                return toggleClass(body, 'nav-active');
            });
        };

        var toggleClass = function toggleClass(element, stringClass) {
            if (element.classList.contains(stringClass)) element.classList.remove(stringClass);
            else element.classList.add(stringClass);
        };

        init();
    }();

    // Carousel top page
    var $item = $('.carousel-item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');
    $(window).on('resize', function() {
        $wHeight = $(window).height();
        $item.height($wHeight);
    });

    // Logo
    if ($('body').scrollTop() > $('.section_top').position.top) {
        $('.menu_controller').addClass('no_height');
    } else {
        $('.menu_controller').removeClass('no_height');
    }

    /* Booking */
    function slideBooking() {
        var activeState = $(".box_booking").hasClass("active");
        $(".box_booking").animate({
                left: activeState ? "0%" : "-100%"
            },
            400
        );
    }

    $(".btnBooking").click(function(event) {
        // event.preventDefault();
        event.stopPropagation();
        $(this).toggleClass("open");
        $(".box_booking").toggleClass("active");
        slideBooking();

        $("body").toggleClass("overflow-hidden");
    });

    // Datepicker
    $('.datepicker').datepicker($.datepicker.regional["ja"]);

    $("#picker_monthyear").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });

    $('#picker_day').datepicker({
        changeMonth: true,
        dateFormat: 'dd'
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
            $(".vertical_top").addClass("no_height");
            $('.no_height').css({
                opacity: '1',
            });
        } else {
            $(".vertical_top").removeClass("no_height");
            $('.no_height').css({
                opacity: '0',
            });
        }
    });

    // Parallax
    // $('.jarallax').jarallax({
    //     speed: 0.2,

    // });

    // jarallax(document.querySelectorAll('.jarallax'), {
    //     onScroll: function(calculations) {
    //         console.log(calculations);
    //     }
    // });

    // jarallax(document.querySelectorAll('.jarallax'), {
    //     disableParallax: /iPad|iPhone|iPod|Android/,
    //     disableVideo: /iPad|iPhone|iPod|Android/
    // });

    /* Effects of reveal_img */
    // init
    var controller = new ScrollMagic.Controller();

    // loop 
    $('.reveal_main').each(function() {
        var loaderInit = new TimelineMax();

        // tween variables
        if ($(this).hasClass('left')) {
            var imgSet = 5,
                imgBlockFrom = -101,
                imgBlockTo = 101,
                contTextSet = -30,
                textBlockStaggerFrom = 101,
                textBlockStaggerTo = -101;
        } else {
            var imgSet = -5,
                imgBlockFrom = 101,
                imgBlockTo = -101,
                contTextSet = 30,
                textBlockStaggerFrom = -101,
                textBlockStaggerTo = 101;
        }

        // build a tween
        loaderInit
            .set($(this).find('.reveal_cont-img'), { autoAlpha: 1, xPercent: imgSet }, 0)
            .from($(this).find('.reveal_block-img'), 0.325, { xPercent: imgBlockFrom, ease: Power1.easeOut })
            .set($(this).find('.reveal_img'), { autoAlpha: 1 })
            .to($(this).find('.reveal_block-img'), 0.425, { xPercent: imgBlockTo, ease: Sine.easeOut })
            .set($(this).find('.reveal_cont-text'), { autoAlpha: 1, xPercent: contTextSet }, 0.3)

            // stagger text blocks and text
            .staggerFromTo($(this).find('.reveal_block'), 0.7, { xPercent: textBlockStaggerFrom, ease: Power1.easeOut }, { xPercent: textBlockStaggerTo, ease: Power1.easeOut }, 0.35)
            .add('blocksEnd')
            .staggerTo($(this).find('.reveal_text'), 0.1, { autoAlpha: 1 }, 0.25, 'blocksEnd-=0.75')

        //  build a scene
        var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                offset: 100

            })
            .setTween(loaderInit)
            .addTo(controller)
    });



    // Hero block init
    var ctrl = new ScrollMagic.Controller();

    // loop 
    var heroBlockfx = new TimelineMax();

    // build a tween
    heroBlockfx
        .fromTo('.reveal_hero_block', 0.6, { yPercent: 100, ease: Power0.easeOut }, { yPercent: 300, ease: Elastic.easeOut })
        .to('.reveal_hero_block', 0.25, { rotation: 180, ease: Sine.easeOut })

    //  build a scene
    var scene = new ScrollMagic.Scene({
            triggerElement: $('.hero'),
            triggerHook: 'onEnter',
            offset: -10
        })
        .setTween(heroBlockfx)
        .addTo(ctrl)


    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            $('.btnBooking').addClass('btnBooking_footer');
        } else {
            $('.btnBooking').removeClass('btnBooking_footer');
        }
    });

    if ($('.section_accomodation_detail').length) {
        $picNum = $('.gallery-thumbs .swiper-slide').length;
        $attrCenteredSlides = $picNum > 4 ? false : true;

        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,            
            slidesPerView: 'auto',
            centeredSlides: true,
            slideToClickedSlide: true,
            loop: true
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: $attrCenteredSlides,
            slidesPerView: 'auto',
            touchRatio: 0.25,
            slideToClickedSlide: true,
            loop: true
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }




});
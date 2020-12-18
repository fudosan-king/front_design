$(function($) {

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




    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            $('.btnBooking').addClass('btnBooking_footer');
        } else {
            $('.btnBooking').removeClass('btnBooking_footer');
        }
    });
    

    // Parallax
    $('.jarallax').jarallax({
        speed: 0.2,
    });

    jarallax(document.querySelectorAll('.jarallax'), {
        onScroll: function(calculations) {
            console.log(calculations);
        }
    });

    jarallax(document.querySelectorAll('.jarallax'), {
        disableParallax: /iPad|iPhone|iPod|Android/,
        disableVideo: /iPad|iPhone|iPod|Android/
    });


        var $window = $(window);        //Window object
        
        var scrollTime = 1.2;           //Scroll time
        var scrollDistance = 170;       //Distance. Use smaller value for shorter scroll and greater value for longer scroll
            
        $window.on("mousewheel DOMMouseScroll", function(event){            
            event.preventDefault();                                             
            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);
                
            TweenMax.to($window, scrollTime, {
                scrollTo : { y: finalScroll, autoKill:true },
                    ease: Power1.easeOut,   //For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
                    autoKill: true,
                    overwrite: 5                            
                });                        
        });

        var s = $(".section_viewport");
        var pos = s.position();
        $(window).scroll(function() {
            var windowpos = $(window).scrollTop();
            if (windowpos >= pos.top - 500) {
                $('.section_viewport .d_cover').addClass('show');
                $('.has_transition_3500').removeClass('top_translated');
            }
        });

        var s2 = $(".section_viewport2");
        var pos2 = s2.position();
        $(window).scroll(function() {
            var windowpos = $(window).scrollTop();
            if (windowpos >= pos2.top - 500) {
                $('.section_viewport2 .d_cover').addClass('show');
            }
        });

        
        
});






$(function($) {

    const splide = new Splide('.slideshow-splide', {
        type  : 'fade',
        rewind: true,
        autoplay: true,
        speed:3000,
        interval: 5000,
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: false,
        classes: {
            pagination: 'splide__pagination hide-panigation',
            page: 'splide__pagination__page hide-panigation',
        },
    }).mount();

    const splide_ct = new Splide('.top-page-ct', {
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: false,
        classes: {
            pagination: 'splide__pagination hide-panigation',
            page: 'splide__pagination__page hide-panigation',
        },
    }).mount();

    const splide_product_list = new Splide('.splide-products', {
        rewind: true,
        perPage: 3,
        perMove: 1,
        arrows: false,
        pagination: false,
        padding: {
            left: 0,
            right: '1.6%',
        },
        breakpoints: {
            991: {
                perPage: 2,
                fixedWidth: '24.6875rem',
            },
            680: {
                perPage: 1,
                fixedWidth: '24.6875rem',
            },
            375: {
                perPage: 1,
                fixedWidth: '17.1875rem',
                padding: {
                    left: 0,
                    right: '5.6%',
                },
            },
        },
    }).mount();

});



$(function($) {
    const run_logmansion = new log_mainsion($);
    $(document).ready(function() {
        run_logmansion.ready();
    });
});


function log_mainsion() {

    this.ready = function() {
        const _this = this;
        _this.navigation();
    }

    this.navigation = function() {
       const _this = this;

        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;
            if ( $(currentTarget).hasClass('open') ){
                $(currentTarget).removeClass('open');
            } else{
                $(currentTarget).addClass('open');
            }
            if( $('.nav_menu-list').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.nav_menu-list').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    _this.menu_animation_scroll();
                },500);    
            } else {
                $('.nav_menu-list').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
        });

    }

    this.menu_animation_scroll = function(){
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        if( $('body').hasClass('menu-opened') ) return;
        if( win.height() + 2*headerHeight >= doc.height() ) return;
        if( win.scrollTop() > headerHeight ){
            _header.addClass('menu-animation-scroll');    
        } else {
            _header.removeClass('menu-animation-scroll');    
        }
    }

}
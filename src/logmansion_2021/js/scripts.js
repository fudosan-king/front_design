$(function($) {
    $(document).ready(function() {

        if( $('.slideshow-splide').length > 0 ){
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
        }

        if( $('.top-page-ct').length > 0 ){
            const splide_ct = new Splide('.top-page-ct', {
                pauseOnHover: false,
                pauseOnFocus: false,
                arrows: false,
                classes: {
                    pagination: 'splide__pagination hide-panigation',
                    page: 'splide__pagination__page hide-panigation',
                },
            }).mount();
        }

        if( $('.splide-products').length > 0 ){
            const splide_product_list = new Splide('.splide-products', {
                rewind: true,
                perPage: 3,
                perMove: 1,
                arrows: false,
                pagination: false,
                fixedWidth: '23.125rem',
                gap:25,
                padding: {
                    left: 0,
                    right: '1.6%',
                },
                breakpoints: {
                    991: {
                        perPage: 2,
                        fixedWidth: '23.125rem',
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
        }

        if( $('.splide-detail-product').length > 0 ){
            const splide_product_list = new Splide('.splide-detail-product', {
                type:'loop',
                perPage: 3,
                perMove: 1,
                arrows: false,
                pagination: false,
                fixedWidth: '23.125rem',
                gap:25,
                padding: {
                    left: '6rem',
                    right: 0,
                },
                breakpoints: {
                    991: {
                        perPage: 2,
                        fixedWidth: '23.125rem',
                    },
                    680: {
                        perPage: 1,
                        fixedWidth: '24.6875rem',
                    },
                    375: {
                        perPage: 1,
                        gap:20,
                        fixedWidth: '15.9375rem',
                        padding: {
                            left: '3.7rem',
                            right: 0,
                        },
                    },
                },
            }).mount();
        }

        if( $('.js-splide-slider').length > 0 && $('.js-primary-splide-slider').length > 0 ){
            
            // Create and mount the thumbnails slider.
            var secondarySlider = new Splide( '.js-splide-slider', {
                rewind      : true,
                fixedWidth  : 104,
                fixedHeight : 69,
                isNavigation: true,
                gap         : 12,
                pagination  : false,
                arrows      : false,
                cover       : true,
                breakpoints : {
                    767: {
                       perPage:3,
                       gap: 5,
                    }
                }
            } ).mount();

            // Create the main slider.
            var primarySlider = new Splide( '.js-primary-splide-slider', {
                type       : 'fade',
                heightRatio: 0.5,
                pagination : false,
                arrows     : true,
                cover      : true,
                fixedHeight : '66.31%',
                breakpoints : {
                    767: {
                       arrows: false,
                    }
                }
            } );

            // Set the thumbnails slider as a sync target and then call mount.
            primarySlider.sync( secondarySlider ).mount();

        }

    });

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
        _this.showCategoiesPC();
        _this.txtShowMore();
    }  

    this.txtShowMore = function ()
    {
        var wrap = $('.detail_des');
        var current_height = wrap.height();
        var your_height = 145;

        $(window).on('resize',function() {
            if( $(window).width() <= 991 ){
                if($('.detail_des').length > 0 && $('body .view-more').length === 0 ){
                    if(current_height > your_height){
                        wrap.css({ 
                            height: your_height+'px',
                            overflow: 'hidden',
                        });
                        wrap.append(function(){
                            return '<div class="bg-gradient-ovlarticle"></div>';
                        });
                        wrap.after(function(){
                            return '<div class="view-more"><a class="i-open" title="Xem thêm" href="javascript:void(0);"></a></div>';
                        });
                        wrap.after(function(){
                            return '<div class="view-hide" style="display: none"><a class="i-close" title="Thu gọn" href="javascript:void(0);"></a></div>';
                        });
                    }
                }
            } else {
                wrap.find('.bg-gradient-ovlarticle').remove();
                wrap.removeAttr('style');
                $('body .view-more').remove();
                $('body .view-hide').remove();
            }
        });

        $(window).on('load',function(){
            if( $(window).width() <= 991 ){
                if($('.detail_des').length > 0){
                    if(current_height > your_height){
                        wrap.css({ 
                            height: your_height+'px',
                            overflow: 'hidden',
                        });
                        wrap.append(function(){
                            return '<div class="bg-gradient-ovlarticle"></div>';
                        });
                        wrap.after(function(){
                            return '<div class="view-more"><a class="i-open" title="Xem thêm" href="javascript:void(0);"></a></div>';
                        });
                        wrap.after(function(){
                            return '<div class="view-hide" style="display: none"><a class="i-close" title="Thu gọn" href="javascript:void(0);"></a></div>';
                        });
                        $('body').on('click','.view-more', function(){
                            wrap.find('.bg-gradient-ovlarticle').remove();
                            wrap.removeAttr('style');
                            $('body .view-more').hide();
                            $('body .view-hide').show();
                        });
                        $('body').on('click','.view-hide', function(){
                            wrap.append(function(){
                                return '<div class="bg-gradient-ovlarticle"></div>';
                            });
                            wrap.css({ 
                                height: your_height+'px',
                                overflow: 'hidden',
                            });
                            $('body .view-more').show();
                            $('body .view-hide').hide();
                        });
                    }
                }
            } else {
                wrap.find('.bg-gradient-ovlarticle').remove();
                wrap.removeAttr('style');
                $('body .view-more').remove();
                $('body .view-hide').remove();
            }
        });
    }

    this.showCategoiesPC = function ()
    {
        $(window).on('resize load',function(e){
            if( $(window).width() >= 992 ){
                $('#collapse_cat').collapse('show');
            } else {
                $('#collapse_cat').collapse('hide');
            }
        });
    }

    this.navigation = function() {
       const _this = this;

        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;

            if( $('.nav_menu-list').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.nav_menu-list').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    _this.menu_animation_scroll();
                    $(currentTarget).removeClass('open');
                },300);  

            } else {
                $(currentTarget).addClass('open');
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
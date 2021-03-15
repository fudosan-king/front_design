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

        if( $('.js-detail-furniture').length > 0 && $('.js-primary-detail-furniture').length > 0 ){
            
            // Create and mount the thumbnails slider.
            var secondarySlider = new Splide( '.js-detail-furniture', {
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
                       gap: 5,
                    },
                    320: {
                        fixedWidth  : 90,
                        fixedHeight : 55,
                        gap: 0,
                    },
                }
            } ).mount();

            // Create the main slider.
            var primarySlider = new Splide( '.js-primary-detail-furniture', {
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
        _this.jsCssLogmansion();
        _this.scrollToEle();
    }  

    this.scrollToEle = function() {
        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            const  currentTarget  = e.currentTarget;

            const elem = $(currentTarget).attr("rel");
            const eleID = elem.replace('#', '');
          
            const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0;

            const targetHeight = target.outerHeight();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();
            const navHight = ($('.navbar').outerHeight() != undefined)?$('.navbar').outerHeight():0;
            $('html, body').animate({
                scrollTop: targetToTop - navHight
            }, 1000);
        });
    }
    //JS edit Logmansion layout and CSS element
    this.jsCssLogmansion = function()
    {
        const _this = this;
        _this.calcPromotionH4Arrows();
        _this.footerMarginBottomForContactFixed();
        _this.topPagetxtNewsMore();
        _this.detailPagetxtShowMore();
        _this.showCategoiesPC();
        _this.replaceTxtCategoryScrollTo();
    }

    

    this.replaceTxtCategoryScrollTo = function()
    {
        if( $('.collapse_ct').length > 0 ) {
            $('.collapse_ct a.btn').on('click',function(e){
                const  currentTarget  = e.currentTarget;
                const _$currentTarget = $(currentTarget);
                $('.collapse_ct a.btn').removeClass('active');
                _$currentTarget.addClass('active');
                const  txtCategory = _$currentTarget.parents('.collapse_ct').prev().find('button span');
                const txt = _$currentTarget.text();
                txtCategory.text(txt);
                if( $(window).outerWidth()  <= 991 ){                    
                    $('#collapse_cat').collapse('hide');
                }
            });
        }
    }

    this.footerMarginBottomForContactFixed = function()
    {
        $(window).on('load resize', function(){
            if( $('.js-contact').length > 0 ){
                const contactH = $('.js-contact').outerHeight();
                $('footer').css('margin-bottom',contactH);
            }    
        });
    }

    this.calcPromotionH4Arrows = function()
    {
        const parent = $('.section-top-page-content .promotion .col-md-6:nth-child(even)');
        $(window).on('load resize',function(){
            const bodyW = $('body').outerWidth();
            const rightW = bodyW*0.118;
            const promotionW = $('.promotion').outerWidth();
            const promotionW_and_rightW = (bodyW - promotionW)/2;
            let promotion_title_minus = rightW - promotionW_and_rightW;
            const promotion_title = $('.promotion-item_title',parent);
            const promotion_des = $('.promotion-item_des',parent);
            if( $(window).width() >= 768 ){
                if( promotionW_and_rightW > rightW ){
                    promotion_title_minus = promotionW_and_rightW - rightW;
                    promotion_title.css('width','calc(100% + '+promotion_title_minus+'px)');
                    promotion_des.css('width','calc(100% + '+promotion_title_minus+'px)');
                    return;
                }
                promotion_title.css('width','calc(100% - '+promotion_title_minus+'px)');
                promotion_des.css('width','calc(100% - '+promotion_title_minus+'px)');
            }  else{
                promotion_title.removeAttr('style');
                promotion_des.removeAttr('style');
            }
        });
    }

    this.topPagetxtNewsMore = function ()
    {
        $('.js-view-more-news').on('click',function(e){
            const currentTarget = e.currentTarget;
            $('.news-box').find('tr').removeAttr('class');
            $(currentTarget).remove();
        });
    }

    this.detailPagetxtShowMore = function ()
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
                            return '<div class="view-more"><span class="i-open" title="Xem thêm" ></span></div>';
                        });
                        //wrap.after(function(){
                            //return '<div class="view-hide" style="display: none"><span class="i-close" title="Thu gọn"></span></div>';
                        //});
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
                            return '<div class="view-more"><span class="i-open" title="Xem thêm" ></span></div>';
                        });
                        //wrap.after(function(){
                            //return '<div class="view-hide" style="display: none"><span class="i-close" title="Thu gọn"></span></div>';
                        //});
                        $('body').on('click','.view-more', function(){
                            wrap.find('.bg-gradient-ovlarticle').remove();
                            wrap.removeAttr('style');
                            $('body .view-more').hide();
                            $('body .view-hide').show();
                        });
                        // $('body').on('click','.view-hide', function(){
                        //     wrap.append(function(){
                        //         return '<div class="bg-gradient-ovlarticle"></div>';
                        //     });
                        //     wrap.css({ 
                        //         height: your_height+'px',
                        //         overflow: 'hidden',
                        //     });
                        //     $('body .view-more').show();
                        //     $('body .view-hide').hide();
                        // });
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

    //Js Navigation
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
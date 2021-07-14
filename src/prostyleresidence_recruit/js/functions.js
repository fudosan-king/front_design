$(function($) {
    isMobile = false; //initiate as false
    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
        isMobile = true;
    }

    if (isMobile) {
        $('a.nav-link.dropdown-toggle').on('click touch touchstart', function(event) {
            event.preventDefault();

            if (!$(this).hasClass('show')) {
                $(this).addClass('show');
                $(this).closest('.nav-item').find('.dropdown-menu').slideDown(300);
            } else {
                $(this).removeClass('show');
                $(this).closest('.nav-item').find('.dropdown-menu').slideUp(300);
            }
        });
    }

    $('.nav-link').click(function(event) {
        /* Act on the event */
        $target = $(this).attr('target') == '_blank' ? '_blank' : '_self';
        window.open($(this).attr('href'), $target);
    });

    $('.nav-item.dropdown').mouseover(function(event) {
        /* Act on the event */
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    });

    $('.nav-item.dropdown').mouseleave(function(event) {
        /* Act on the event */
        if ($(this).hasClass('show')) {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        }

    });

    $('.owl_gallerys').owlCarousel({
        loop: false,
        rewind: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });

    $('.nav a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    /* khanhnp - Customize Fancybox3 Layout */
    $('[data-fancybox="gallery-pc"]').fancybox({
        idleTime: false,

        // Base template for layout
        baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-infobar">Image <span data-fancybox-index></span>&nbsp;of&nbsp;<span data-fancybox-count></span></div>' +
            '<div class="fancybox-toolbar">{{buttons}}</div>' +
            '<div class="fancybox-navigation">{{arrows}}</div>' +
            '<div class="fancybox-stage customize"></div>' +
            '<div class="fancybox-caption"></div>' +
            "</div>" +
            "</div>",

        afterLoad: function(instance, current) {
            // console.log(instance);
            // console.log( current);
            if (instance.group.length > 1 && current.$content) {
                current.$content.append('<div class="fancybox-infobar">Image ' + (current.index + 1) + '&nbsp;of&nbsp;' + instance.group.length + '</div>');
                current.$content.append('<div class="fancybox-navigation"><button data-fancybox-prev="" class="fancybox-button fancybox-button--arrow_left" title="Previous"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"></path></svg></div></button><button data-fancybox-next="" class="fancybox-button fancybox-button--arrow_right" title="Next"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"></path></svg></div></button></div>');
                current.$content.append('<div class="fancybox-caption fancybox-caption--separate"><div class="fancybox-caption__body">' + current.opts.caption + '</div></div>');
            }
        }
    });

    $('[data-fancybox="gallery-sp"]').fancybox({
        idleTime: false,

        // Base template for layout
        baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-infobar">Image <span data-fancybox-index></span>&nbsp;of&nbsp;<span data-fancybox-count></span></div>' +
            '<div class="fancybox-toolbar">{{buttons}}</div>' +
            '<div class="fancybox-navigation">{{arrows}}</div>' +
            '<div class="fancybox-stage customize"></div>' +
            '<div class="fancybox-caption"></div>' +
            "</div>" +
            "</div>",
        afterLoad: function(instance, current) {
            // console.log(instance);
            // console.log(current);
            if (instance.group.length > 1 && current.$content) {
                current.$content.append('<div class="fancybox-infobar">Image ' + (current.index + 1) + '&nbsp;of&nbsp;' + instance.group.length + '</div>');
                current.$content.append('<div class="fancybox-caption fancybox-caption--separate"><div class="fancybox-caption__body">' + current.opts.caption + '</div></div>');
            }
        }
    });

    $('#footer .naviUl li:has(ul) p').click(function(e) {
        if ($(window).width() < 768) {
            $(this).children('a').toggleClass('on');
            $(this).next('ul').slideToggle();
            return false;
        }
    });

    $('a.none-href, a.box_cate_img').click(function(event) {
        /* Act on the event */
        event.preventDefault();
    });


});

$(document).ready(function() {
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $(".btnVideo").attr('data-src');

    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#video").attr('src', '');

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#modal_video").on('shown.bs.modal', function() {
        $("#video").attr('src', url);
    });

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#modal_video").on('hide.bs.modal', function() {
        $("#video").attr('src', '');
    });

    // AJAX CHECK LOGIN SECURE AUTH
    if ($('form[name="infoAuth"]').length) {
        $('form[name="infoAuth"]').on('submit', function(e) {
            var values = {};
            $.each($(this).serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });

            $('.loginRequire .txt').html('処理要求。');

            $.ajax({
                    url: '/api',
                    type: 'POST',
                    dataType: 'json',
                    data: { type: 'secure', _name: 'checkInfoLogin', urpass: values['passcode_secret_info'], },
                })
                .done(function(response) {

                    if (response.data.iscorrect == 'true') {
                        $('.loginRequire .txt').html('お待ちください。');
                        $('.loginRequire .txt').css({ color: '#A5753F' });
                        location.reload();
                    } else {
                        $('input[name="passcode_secret_info"]').val('');
                        $('.loginRequire .txt').html('パスワードが間違っています。');
                        $('.loginRequire .txt').css({ color: 'red' });
                    }

                })
                .fail(function() {
                    $('.loginRequire .txt').html('error');
                    $('.loginRequire .txt').css({ color: 'red' });
                })


            return false;
        })
    }

});

$(function() {
    $(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
    if ($('.section_statusselling').length > 0) {
        $.each($('.statusselling_pro.bg_common'), function(index, val) {
            /* iterate through array or object */
            var statusselling_pro_item = $(val).find('.statusselling_pro_item');

            var box_infoproducts = $(val).find('.box_infoproducts');
            var box_infoproductsTop = parseInt(box_infoproducts.css('top'));
            var box_infoproductsHeight = box_infoproducts.outerHeight();

            if (!isMobile) {
                var totalElemHeight = parseInt(box_infoproductsHeight + box_infoproductsTop);
                $(statusselling_pro_item).css({ 'height': totalElemHeight + 'px' });
                $(val).css({ 'padding': '60px 0' });
            }

        });
    }
    // console.log(isMobile);
});

document.addEventListener('DOMContentLoaded', function() {
    $anchorElements = document.getElementsByTagName('a')
    Array.from($anchorElements).forEach(function(anchorElement) {
        if (anchorElement.host !== location.host) {
            anchorElement.target = '_blank';
            anchorElement.rel = 'noopener noreferrer';
        }
    })
}, false);


/**************
SCRIPTS 
*****/
$(function($) {
    const prostyleResidenceMain = new prostyle_residence_main($);
    $(document).ready(function() {
        prostyleResidenceMain.ready();
    });
});

function prostyle_residence_main() {

    let heightArray = void 0;
    let currentNavHeight = 0;
    let currentNavIndex = null;

    this.html = {
        _$header: $('header'),
        _$body: $('body'),
        _$nav_sub_section: $('.nav-sub_section'),
        _$nav_sub: $('.nav-sub_block'),
    }

    this.viewClass = {
        gnav: 'view-submenu',
        nav: 'view-nav',
        categoryTopAnimation: 'view-categoryTopAnimation'
    };

    this.ready = function() {

        const _this = this;
        // _this.data_toc_jquery();
        _this.init();
        _this.scrollToEle();
        _this.sub_navigation();
        _this.navigation();
    }

    //Star sub navigation
    this.init = function() {

        heightArray = [];
        const _this = this;

        _this.html._$nav_sub_section.each(function(i, ele) {

            var $megamenuList = $(ele).find('.nav-sub_box_items');

            TweenMax.set($megamenuList, {
                y: 15,
                opacity: 0
            });

            heightArray.push($(ele).innerHeight());
        });
    }

    this.sub_navigation = function() {
        const _this = this;
        $('.nav-main a[aria-haspopup="true"]').each(function(i, ele) {
            $(ele).on('mouseenter', function(e) {
                const _$currentTarget = $(e.currentTarget);

                if (_this.html.currentNavIndex === i || _this.html._$body.hasClass(_this.viewClass.categoryTopAnimation)) {
                    return;
                }

                _this.html._$nav_sub_section.removeAttr('style');


                _this.html._$header.find('[aria-expanded="true"]').attr('aria-expanded', 'false');

                _$currentTarget.attr('aria-expanded', 'true');

                if (_this.html.currentNavIndex !== null) {
                    _this.hideItems(_this.html.currentNavIndex);
                }

                currentNavIndex = i;
                _this.html._$nav_sub.addClass('-collapsed');

                TweenMax.fromTo(_this.html._$nav_sub, 0.4, {
                    height: currentNavHeight
                }, {
                    height: heightArray[i],
                    ease: Power4.easeOut,
                    onComplete: function onComplete() {}
                });

                currentNavHeight = heightArray[i];

                _this.showItems(i);
            });
        });


        // $('.nav-main a[aria-haspopup="false"]').each(function() {
        //     $(this).on('mouseenter', function() {
        //         _this.close_sub_menu();
        //     });
        // });

        $('.nav-main a[aria-haspopup="false"]').on('mouseenter', function() {
            _this.close_sub_menu();
        });

        $('.nav-main .navbar-brand').on('mouseenter', function() {
            _this.close_sub_menu();
        });

        _this.html._$header.on('mouseleave', function() {
            _this.close_sub_menu();
        });
    }

    this.showItems = function(i) {
        const _this = this;
        _this.html._$body.addClass(_this.viewClass.gnav);

        var $megamenuList = _this.html._$nav_sub_section.eq(i).find('.nav-sub_box_items');

        TweenMax.killTweensOf(_this.html._$nav_sub_section.eq(i));
        _this.html._$nav_sub_section.eq(i).css({
            visibility: 'visible',
            opacity: 1
        });

        TweenMax.killTweensOf($megamenuList);
        TweenMax.fromTo($megamenuList, 0.4, {
            y: 25,
            opacity: 0
        }, {
            delay: 0.25,
            y: 0,
            opacity: 1,
            ease: Power4.easeOut
        });
    };

    this.close_sub_menu = function() {
        const _this = this;
        if (currentNavIndex === null) {
            return;
        }

        _this.html._$header.find('[aria-expanded="true"]').attr('aria-expanded', 'false');
        _this.html._$nav_sub.removeClass('-collapsed');

        TweenMax.fromTo(_this.html._$nav_sub, 0.2, {
            height: heightArray[currentNavIndex]
        }, {
            height: 0,
            ease: Power4.easeOut
        });


        _this.hideItems(currentNavIndex);
        currentNavIndex = null;
        currentNavHeight = 0;
    };

    this.hideItems = function(i) {
        const _this = this;

        _this.html._$body.removeClass(_this.viewClass.gnav);
        TweenMax.fromTo(_this.html._$nav_sub_section.eq(i), 0.2, {
            opacity: 1
        }, {
            opacity: 0,
            ease: Power4.easeOut,
            onComplete: function onComplete() {
                _this.html._$nav_sub_section.eq(i).css({
                    visibility: 'hidden',
                    opacity: 1
                });
            }
        });
    };
    //End sub navigation

    //Js Navigation
    this.navigation = function() {
        const _this = this;
        let lastScrollTop = 0;
        const _header = $('header');

        $(window).on('scroll',function(e) { 
            const headerHeight = $('header').outerHeight();
            const win = $(window);
            let st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop) {
                // downscroll code
                if( _header.hasClass('menu-animation-scroll') && win.scrollTop() > headerHeight ){
                    _header.css('opacity',0).removeClass('animation-scroll').css('visibility','hidden');
                }
            } else {
                // upscroll code
                _this.menu_animation_scroll();
                _header.addClass('animation-scroll').removeAttr('style');
            }
            lastScrollTop = st <= 0 ? 0 : st; 
        });

        window.onload = function() {
            setTimeout(function(){
                _this.menu_animation_scroll();
                _header.removeAttr('style');
            }, 1000);
        };

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;

            if( $('.menu-sp').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.menu-sp').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    _this.menu_animation_scroll();
                    $(currentTarget).removeClass('open');
                },300);  

            } else {
                $(currentTarget).addClass('open');
                $('.menu-sp').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
            
        });
        
    }

    this.menu_animation_scroll = function() {
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        if ($('body').hasClass('menu-opened')) return;
        if (win.height() + 2 * headerHeight >= doc.height()) return;
        if (win.scrollTop() > headerHeight) {
            _header.addClass('menu-animation-scroll');
        } else {
            _header.removeClass('menu-animation-scroll');
        }
    }

    this.data_toc_jquery = function() {
        $("#toc").toc({ content: ".brochure .section-brochure-ct", headings: "h2,h3,h4" });
    }

    this.scrollToEle = function() {
        const _this = this;
        $(window).on("load resize", function(e) {
            const navHight = ($('.bsnav.bsnav-sticky').outerHeight() != undefined) ? $('.bsnav.bsnav-sticky').outerHeight() : 0;
            $('.brochure_appendix h3').css('margin-top', navHight);
        });
        $("body").on("click", 'a[href^="#"], a[href^="."]', function(e) {
            const currentTarget = e.currentTarget;
            const elem = $(currentTarget).attr("href");
            const eleID = elem.replace('#', '');
            const target = $($(currentTarget).attr("href")),
                targetToTop = target.offset().top ? target.offset().top : 0;

            const navHight = ($('.bsnav.bsnav-sticky').outerHeight() != undefined) ? $('.bsnav.bsnav-sticky').outerHeight() : 0;

            const targetHeight = target.outerHeight();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();

            $('html, body').animate({
                scrollTop: targetToTop - navHight
            }, 1000);
        });
    }

}
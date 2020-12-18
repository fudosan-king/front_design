(function($) {
    var scroll = true
    var scroll_offset = 30
    var scroll_delay = 800
    var scroll_to_top = false
    var scroll_element = null
    var parseTocSlug = function(slug) {
        if (!slug) { return slug; }
        var parsedSlug = slug.toString().toLowerCase().replace(/&(amp;)/g, '').replace(/&(mdash;)/g, '').replace(/\u2013|\u2014/g, '').replace(/[&]nbsp[;]/gi, '-').replace(/\s+/g, '-').replace(/[&\/\\#,^!+()$~%.'":*?<>{}@‘’”“]/g, '').replace(/\-\-+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
        return decodeURI(encodeURIComponent(parsedSlug));
    };
    UAGBTableOfContents = {
        init: function() {
            $(document).delegate(".uagb-toc__list a", "click", UAGBTableOfContents._scroll)
            $(document).delegate(".uagb-toc__scroll-top", "click", UAGBTableOfContents._scrollTop)
            $(document).delegate('.uagb-toc__title-wrap', 'click', UAGBTableOfContents._toggleCollapse)
            $(document).on("scroll", UAGBTableOfContents._showHideScroll)
        },
        _toggleCollapse: function(e) {
            if ($(this).find('.uag-toc__collapsible-wrap').length > 0) {
                let $root = $(this).closest('.wp-block-uagb-table-of-contents')
                if ($root.hasClass('uagb-toc__collapse')) { $root.removeClass('uagb-toc__collapse'); } else { $root.addClass('uagb-toc__collapse'); }
            }
        },
        _showHideScroll: function(e) { if (null != scroll_element) { if (jQuery(window).scrollTop() > 300) { if (scroll_to_top) { scroll_element.addClass("uagb-toc__show-scroll") } else { scroll_element.removeClass("uagb-toc__show-scroll") } } else { scroll_element.removeClass("uagb-toc__show-scroll") } } },
        _scrollTop: function(e) { $("html, body").animate({ scrollTop: 0 }, scroll_delay) },
        _scroll: function(e) {
            if (this.hash !== "") {
                var hash = this.hash
                var node = $(this).closest('.wp-block-uagb-table-of-contents')
                scroll = node.data('scroll')
                scroll_offset = node.data('offset')
                scroll_delay = node.data('delay')
                if (scroll) {
                    var offset = $(decodeURIComponent(hash)).offset()
                    if ("undefined" != typeof offset) { $("html, body").animate({ scrollTop: (offset.top - scroll_offset) }, scroll_delay) }
                }
            }
        },
        _run: function(attr, id) {
            var $this_scope = $(id);
            if ($this_scope.find('.uag-toc__collapsible-wrap').length > 0) { $this_scope.find('.uagb-toc__title-wrap').addClass('uagb-toc__is-collapsible'); }
            var $headers = JSON.parse(attr.headerLinks);
            var allowed_h_tags = [];
            if (undefined !== attr.mappingHeaders) { attr.mappingHeaders.forEach((h_tag, index) => h_tag === true ? allowed_h_tags.push('h' + (index + 1)) : null); var allowed_h_tags_str = (null !== allowed_h_tags) ? allowed_h_tags.join(',') : ''; }
            var all_header = (undefined !== allowed_h_tags_str && '' !== allowed_h_tags_str) ? $('body').find(allowed_h_tags_str) : $('body').find('h1, h2, h3, h4, h5, h6');
            if (undefined !== $headers && 0 !== all_header.length) { $headers.forEach(function(element, i) { let element_text = parseTocSlug(element.text);
                    all_header.each(function() { let header = $(this); let header_text = parseTocSlug(header.text()); if (element_text.localeCompare(header_text) === 0) { header.before('<span id="' + header_text + '" class="uag-toc__heading-anchor"></span>'); } }); }); }
            scroll_to_top = attr.scrollToTop
            scroll_element = $(".uagb-toc__scroll-top")
            if (0 == scroll_element.length) {
                $("body").append("<div class=\"uagb-toc__scroll-top dashicons dashicons-arrow-up-alt2\"></div>")
                scroll_element = $(".uagb-toc__scroll-top")
            }
            if (scroll_to_top) { scroll_element.addClass("uagb-toc__show-scroll") } else { scroll_element.removeClass("uagb-toc__show-scroll") }
            UAGBTableOfContents._showHideScroll()
        },
    }
    $(document).ready(function() { UAGBTableOfContents.init() })
})(jQuery);
(function() {
    var isIe = /(trident|msie)/i.test(navigator.userAgent);
    if (isIe && document.getElementById && window.addEventListener) {
        window.addEventListener('hashchange', function() {
            var id = location.hash.substring(1),
                element;
            if (!(/^[A-z0-9_-]+$/.test(id))) { return; }
            element = document.getElementById(id);
            if (element) {
                if (!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))) { element.tabIndex = -1; }
                element.focus();
            }
        }, false);
    }
})();;
/*!
 * jQuery.scrollTo
 * Copyright (c) 2007-2015 Ariel Flesler - aflesler<a>gmail<d>com | http://flesler.blogspot.com
 * Licensed under MIT
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 * @projectDescription Lightweight, cross-browser and highly customizable animated scrolling with jQuery
 * @author Ariel Flesler
 * @version 2.1.2
 */
(function(factory) { 'use strict'; if (typeof define === 'function' && define.amd) { define(['jquery'], factory); } else if (typeof module !== 'undefined' && module.exports) { module.exports = factory(require('jquery')); } else { factory(jQuery); } })(function($) {
    'use strict';
    var $scrollTo = $.scrollTo = function(target, duration, settings) { return $(window).scrollTo(target, duration, settings); };
    $scrollTo.defaults = { axis: 'xy', duration: 0, limit: true };

    function isWin(elem) { return !elem.nodeName || $.inArray(elem.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) !== -1; }
    $.fn.scrollTo = function(target, duration, settings) {
        if (typeof duration === 'object') { settings = duration;
            duration = 0; }
        if (typeof settings === 'function') { settings = { onAfter: settings }; }
        if (target === 'max') { target = 9e9; }
        settings = $.extend({}, $scrollTo.defaults, settings);
        duration = duration || settings.duration;
        var queue = settings.queue && settings.axis.length > 1;
        if (queue) { duration /= 2; }
        settings.offset = both(settings.offset);
        settings.over = both(settings.over);
        return this.each(function() {
            if (target === null) { return; }
            var win = isWin(this),
                elem = win ? this.contentWindow || window : this,
                $elem = $(elem),
                targ = target,
                attr = {},
                toff;
            switch (typeof targ) {
                case 'number':
                case 'string':
                    if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)) { targ = both(targ); break; }
                    targ = win ? $(targ) : $(targ, elem);
                case 'object':
                    if (targ.length === 0) { return; }
                    if (targ.is || targ.style) { toff = (targ = $(targ)).offset(); }
            }
            var offset = $.isFunction(settings.offset) && settings.offset(elem, targ) || settings.offset;
            $.each(settings.axis.split(''), function(i, axis) {
                var Pos = axis === 'x' ? 'Left' : 'Top',
                    pos = Pos.toLowerCase(),
                    key = 'scroll' + Pos,
                    prev = $elem[key](),
                    max = $scrollTo.max(elem, axis);
                if (toff) {
                    attr[key] = toff[pos] + (win ? 0 : prev - $elem.offset()[pos]);
                    if (settings.margin) { attr[key] -= parseInt(targ.css('margin' + Pos), 10) || 0;
                        attr[key] -= parseInt(targ.css('border' + Pos + 'Width'), 10) || 0; }
                    attr[key] += offset[pos] || 0;
                    if (settings.over[pos]) { attr[key] += targ[axis === 'x' ? 'width' : 'height']() * settings.over[pos]; }
                } else { var val = targ[pos];
                    attr[key] = val.slice && val.slice(-1) === '%' ? parseFloat(val) / 100 * max : val; }
                if (settings.limit && /^\d+$/.test(attr[key])) { attr[key] = attr[key] <= 0 ? 0 : Math.min(attr[key], max); }
                if (!i && settings.axis.length > 1) { if (prev === attr[key]) { attr = {}; } else if (queue) { animate(settings.onAfterFirst);
                        attr = {}; } }
            });
            animate(settings.onAfter);

            function animate(callback) { var opts = $.extend({}, settings, { queue: true, duration: duration, complete: callback && function() { callback.call(elem, targ, settings); } });
                $elem.animate(attr, opts); }
        });
    };
    $scrollTo.max = function(elem, axis) {
        var Dim = axis === 'x' ? 'Width' : 'Height',
            scroll = 'scroll' + Dim;
        if (!isWin(elem)) { return elem[scroll] - $(elem)[Dim.toLowerCase()](); }
        var size = 'client' + Dim,
            doc = elem.ownerDocument || elem.document,
            html = doc.documentElement,
            body = doc.body;
        return Math.max(html[scroll], body[scroll]) - Math.min(html[size], body[size]);
    };

    function both(val) { return $.isFunction(val) || $.isPlainObject(val) ? val : { top: val, left: val }; }
    $.Tween.propHooks.scrollLeft = $.Tween.propHooks.scrollTop = {
        get: function(t) { return $(t.elem)[t.prop](); },
        set: function(t) {
            var curr = this.get(t);
            if (t.options.interrupt && t._last && t._last !== curr) { return $(t.elem).stop(); }
            var next = Math.round(t.now);
            if (curr !== next) { $(t.elem)[t.prop](next);
                t._last = this.get(t); }
        }
    };
    return $scrollTo;
});
/*! This file is auto-generated */
! function(d, l) { "use strict"; var e = !1,
        o = !1; if (l.querySelector)
        if (d.addEventListener) e = !0; if (d.wp = d.wp || {}, !d.wp.receiveEmbedMessage)
        if (d.wp.receiveEmbedMessage = function(e) { var t = e.data; if (t)
                    if (t.secret || t.message || t.value)
                        if (!/[^a-zA-Z0-9]/.test(t.secret)) { var r, a, i, s, n, o = l.querySelectorAll('iframe[data-secret="' + t.secret + '"]'),
                                c = l.querySelectorAll('blockquote[data-secret="' + t.secret + '"]'); for (r = 0; r < c.length; r++) c[r].style.display = "none"; for (r = 0; r < o.length; r++)
                                if (a = o[r], e.source === a.contentWindow) { if (a.removeAttribute("style"), "height" === t.message) { if (1e3 < (i = parseInt(t.value, 10))) i = 1e3;
                                        else if (~~i < 200) i = 200;
                                        a.height = i } if ("link" === t.message)
                                        if (s = l.createElement("a"), n = l.createElement("a"), s.href = a.getAttribute("src"), n.href = t.value, n.host === s.host)
                                            if (l.activeElement === a) d.top.location.href = t.value } } }, e) d.addEventListener("message", d.wp.receiveEmbedMessage, !1), l.addEventListener("DOMContentLoaded", t, !1), d.addEventListener("load", t, !1);

    function t() { if (!o) { o = !0; var e, t, r, a, i = -1 !== navigator.appVersion.indexOf("MSIE 10"),
                s = !!navigator.userAgent.match(/Trident.*rv:11\./),
                n = l.querySelectorAll("iframe.wp-embedded-content"); for (t = 0; t < n.length; t++) { if (!(r = n[t]).getAttribute("data-secret")) a = Math.random().toString(36).substr(2, 10), r.src += "#?secret=" + a, r.setAttribute("data-secret", a); if (i || s)(e = r.cloneNode(!0)).removeAttribute("security"), r.parentNode.replaceChild(e, r) } } } }(window, document);
! function(n) { "use strict"; var a = { initialize: function() { this.event(), this.toggler(), this.dropdown(), this.mobileMenu(), this.sideMenu(), this.navbarSticky(), this.scrollspy() }, event: function() {}, toggler: function() { n(".navbar-toggler").each(function() { var a = n(this);
                a.on("click", function() { a.toggleClass("active") }), n(window).resize(function() { n(".navbar-toggler").removeClass("active") }) }) }, dropdown: function() { n(".bsnav .nav-item.dropdown").on("mouseenter", function() { n(this).find("> .navbar-nav").addClass("in") }).on("mouseleave", function() { n(this).find("> .navbar-nav").removeClass("in") }) }, mobileMenu: function() { n(".bsnav .navbar-mobile")[0] && n(".bsnav-mobile")[0] && (n(".bsnav .navbar-mobile").closest(".bsnav-dark")[0] && n(".bsnav-mobile .navbar").addClass("bsnav-dark"), n(".bsnav .navbar-mobile").closest(".bsnav-light")[0] && n(".bsnav-mobile .navbar").addClass("bsnav-dark"), n(".bsnav .navbar-mobile").each(function() { var a = n(this).clone();
                a.find(".dropdown").removeClass("dropdown"), a.appendTo(".bsnav-mobile .navbar") }), n(".navbar-toggler").attr("data-target") || n(".navbar-toggler").on("click", function() { n(".bsnav-mobile").toggleClass("in") }), n(".bsnav-mobile .bsnav-mobile-overlay").on("click", function() { n(".bsnav-mobile").removeClass("in"), n(".navbar-toggler").removeClass("active") }), this.sideMenuNavigation(n(".bsnav-mobile")), n(window).resize(function() { n(".bsnav-mobile").removeClass("in") })) }, sideMenu: function() { n(".bsnav-sidebar")[0] && (this.sideMenuNavigation(n(".bsnav-sidebar")), n(".bsnav-sidebar-left")[0] && n("body").addClass("bsnav-has-left-sidebar"), n(".bsnav-sidebar-right")[0] && n("body").addClass("bsnav-has-right-sidebar"), n(".bsnav-sidebar-condensed")[0] && n("body").addClass("bsnav-has-condensed-sidebar"), n(".bsnav-sidebar .nav-item > .navbar-nav").parent().addClass("menu-item-has-children")) }, sideMenuNavigation: function(a) { a.find(".nav-link").on("click", function(s) { var i = n(this);
                i.siblings(".navbar-nav")[0] && (s.preventDefault(), i.parent().hasClass("in") ? (i.parent().removeClass("in"), i.parent().find(".in").removeClass("in"), i.parent().find(".navbar-nav").stop(!0).slideUp(300)) : (i.closest(".in")[0] || (a.find(".nav-item.in .navbar-nav").stop(!0).slideUp(300), a.find(".nav-item.in").removeClass("in")), i.parent().addClass("in"), i.parent().siblings(".in").find(".navbar-nav").stop(!0).slideUp(300), i.parent().siblings(".in").removeClass("in"), i.siblings(".navbar-nav").stop(!0).slideDown(300))) }) }, navbarSticky: function() { var a = function(n, a, s) { s > a && n.addClass("sticked"), s > a + 30 && n.addClass("in"), 0 == s && n.removeClass("sticked").removeClass("in") }; if (n(".bsnav-sticky")[0]) { var s = n(".bsnav-sticky").outerHeight(),
                    i = n(window).scrollTop();
                a(n(".bsnav-sticky"), s, i), n(window).on("scroll", function() { i = n(window).scrollTop(), a(n(".bsnav-sticky"), s, i) }) } }, scrollspy: function() { var a = n(".bsnav-scrollspy"),
                s = a.outerHeight(),
                i = []; if (a.length) { a.find("[data-scrollspy]").each(function(a) { i.push(n(this).data("scrollspy")) });

                function e() { if (!a.hasClass("spying")) { var e = n(window).scrollTop();
                        i.map(function(i, o) { var t = n("#" + i).offset().top - s,
                                l = t + n("#" + i).outerHeight();
                            e >= t && e <= l && (a.find(".nav-item").removeClass("active"), n("[data-scrollspy=" + i + "]").parent().addClass("active")) }) } } n(window).scroll(function() { e() }), a.find("[data-scrollspy]").click(function(i) { i.preventDefault(), a.addClass("spying"); var e = n(this).data("scrollspy");
                    a.find(".nav-item").removeClass("active"), n(this).parent().addClass("active"), n("html,body").animate({ scrollTop: n("#" + e).offset().top - s }, 800, function() { a.removeClass("spying") }) }) } } };
    n(document).ready(function() { a.initialize() }) }(jQuery);
$(function() {
    if ($('.init-overload').hasClass('active')) { $('.init-overload').removeClass('active'); }
    isMobile = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) { isMobile = true; }
    if ($('.list_location li').length > 0) { $('.list_location li a').click(function(event) { event.preventDefault(); });
        $('.list_location li').click(function(event) { $('.list_location li.active').removeClass('active');
            $(this).addClass('active'); var args = {};
            args['showroom_id'] = $(this).data('showroom-id');
            callback_api_get_showroom(args); }); }
    if ($('.box_search_serminar .pagination').length > 0) {
        $('.box_search_serminar .pagination').on('click', '.page-link', function(event) { event.preventDefault(); var args = {};
            args['showroom_id'] = $('.list_location li.active').data('showroom-id');;
            args['paged'] = $(this).data('paged');
            callback_api_get_showroom(args); });

        function callback_api_get_showroom(args) {
            args['callback'] = 'api';
            args['function'] = 'get_ajax_post_by_showroom_id';
            $.ajax({ dataType: 'json', data: { args: args }, }).done(function(data) {
                console.log(data);
                var htmlPost = '';
                if (data.posts) { data.posts.forEach(function(post, index) { htmlPost += '<div class="box_location_items">\
                                    <div class="row no-gutters">\
                                        <div class="col-5 col-md-3 align-self-center">\
                                            <a href="' + post.customize_permalink + '" class="box_location_items_img"><img class="img-fluid" src="' + post.customize_img + '" alt=""></a>\
                                        </div>\
                                        <div class="col-7 col-md-9 align-self-center">\
                                            <div class="box_location_items_content">\
                                                <p class="badge-secondary badge badge_cate"><i class="fal fa-map-marker-alt"></i> ' + post.customize_are_obj.name + '</p>\
                                                <p class="date">' + post.customize_date + ' <span>' + post.customize_stringTime + '</span></p>\
                                                <h4><a href="' + post.customize_permalink + '">' + post.post_title + '</a></h4>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>'; }) }
                $('.w_box_location_items').html(htmlPost);
                var htmlPagination = '';
                if (data.posts_max_num_pages > 1) { for (var i = 1; i <= data.posts_max_num_pages; i++) { if (i == data.posts_paged) { htmlPagination += '<li class="page-item active" data-paged="' + i + '"><span aria-current="page" class="page-numbers current">' + i + '</span></li>'; } else { htmlPagination += '<li class="page-item"><a class="page-link" href data-paged="' + i + '">' + i + '</a></li>'; } } }
                $('.box_search_serminar .pagination').html(htmlPagination);
            }).fail(function(e) { console.log('Error');
                console.log(e); });
        }
    }
    if ($('.card-wrapper button').length) { $.each($('.card-wrapper button'), function(index, el) { if (!$(el).hasClass('collapsed') && $(el).data('child')) { $(el).siblings('a').addClass('selected'); } else { $(el).siblings('a').removeClass('selected'); } });
        $('.card-wrapper button').click(function(event) { if (!$(this).hasClass('collapsed') && $(this).data('child')) { console.log('A');
                $(this).siblings('a').removeClass('selected'); } else { console.log('B');
                $(this).siblings('a').addClass('selected'); } }); }
    if (!isMobile) {
        if ($('.owl_banner').length > 0) { $('.owl_banner').owlCarousel({ items: 1, loop: true, margin: 0, nav: false, smartSpeed: 900 }); }
        // var $carousel = $('.carousel.carousel_banner').flickity({ "wrapAround": true, "pageDots": false });
        // $carousel.on('staticClick.flickity', function(event, pointer, cellElement, cellIndex) {
        //     if (!cellElement) { return; }
        //     if (!$(cellElement).hasClass('is-selected')) { $link = $(cellElement).find('a');
        //         window.open($link.attr('href'), '_self'); }
        // });
        $(window).on('load', function() {
            if ($('.js-sidebar-fixed').length > 0) {
                var main = $('.main_left');
                var side = $('.main_right');
                var wrappers = $('.js-sidebar-fixed');
                var wrapperHeight = 0;
                var wSidebarFixed = $('.js-sidebar-fixed').outerWidth();
                wrappers.each(function(index, ele) { wrapperHeight += parseInt($(ele).height()); });
                var w = $(window);
                var sideLeft = side.offset().left;
                var wrapperTop = wrappers.eq(0).offset().top;
                var sideMargin = { top: side.css('margin-top') ? side.css('margin-top') : 0, right: side.css('margin-right') ? side.css('margin-right') : 0, bottom: side.css('margin-bottom') ? side.css('margin-bottom') : 0, left: side.css('margin-left') ? side.css('margin-left') : 0 };
                var winLeft;
                var pos;
                var bottomHeight = 0;
                var scrollAdjust = function() {
                    sideHeight = side.outerHeight();
                    mainHeight = main.outerHeight();
                    mainAbs = main.offset().top + mainHeight;
                    var winTop = w.scrollTop();
                    winLeft = w.scrollLeft();
                    var winHeight = w.height();
                    var nf = (winTop > wrapperTop) && (mainHeight > sideHeight) ? true : false;
                    pos = !nf ? 'static' : 'fixed';
                    bottom_count = $('#wpadminbar').length > 0 ? 0 : 26;
                    var scrollOverMainAbs = 0;
                    if ((winTop + wrapperHeight) > mainAbs) { scrollOverMainAbs = (winTop + wrapperHeight) - mainAbs; }
                    bottomHeight = 100 + scrollOverMainAbs;
                    if (pos === 'fixed') { side.css({ width: wSidebarFixed, position: pos, top: '', bottom: bottomHeight, left: sideLeft - winLeft, margin: 0 });
                        $('.each_boxright').css } else { side.removeAttr('style'); }
                };
                w.on('scroll', scrollAdjust);
            }
        });
    }
    $(".btn_close").click(function(event) { event.preventDefault();
        $(".section_cookie").toggle('fast'); });
});
jQuery(function($) {
    $('a.goto_frm_services[href*="#"]:not([href="#"], .btn_eventdetail)').click(function() { var target = $(this.hash);
        $('html,body').stop().animate({ scrollTop: target.offset().top - 100 }, 1100); });
    if (location.hash) { var id = $(location.hash); }
    $(window).on('load', function() { if (location.hash) { $('html,body').animate({ scrollTop: id.offset().top - 100 }, 600) }; });
    if ($('.datepicker').length > 0) { $('.datepicker').datepicker({ language: 'ja', }); }
});
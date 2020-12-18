var AODAI = function() {};
var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
var language = { 'JP': { 'quan_1': '1åŒº', 'quan_3': '3åŒº', 'quan_binhthanh': 'ãƒ“ãƒ³ã‚¿ãƒ³åŒº', 'quan_tanbinh': 'ã‚¿ãƒ³ãƒ“ãƒ³åŒº', 'quan_phunhuan': 'ãƒ•ãƒ¼ãƒ‹ãƒ£ãƒ³åŒº', 'quan_7': '7åŒº', 'quan_7_H': '7åŒºãƒ•ãƒ¼ãƒŸãƒ³ãƒ•ãƒ³', 'quan_khac': 'ãã®ä»–ã®åŒº', 'le_thanh_ton': '1åŒºãƒ¬ã‚¿ãƒ³ãƒˆãƒ³æ—¥æœ¬äººè¡—è¿‘éš£', 'quan_2': '2åŒº', 'quan_4': '4åŒº', 'quan_tanphu': 'ã‚¿ãƒ³ãƒ•ãƒ¼åŒº', 'quan_govap': 'ã‚´ãƒ¼ãƒãƒƒãƒ—åŒº', 'quan_binhtan': 'BINH TANåŒº', 'quan_5': '5åŒº', 'quan_6': '6åŒº', 'quan_8': '8åŒº', 'quan_9': '9åŒº', 'quan_10': '10åŒº', 'quan_11': '11åŒº', 'quan_12': '12åŒº' }, 'VN': { 'quan_1': '1åŒº', 'quan_3': '3åŒº', 'quan_binhthanh': 'ãƒ“ãƒ³ã‚¿ãƒ³åŒº', 'quan_tanbinh': 'ã‚¿ãƒ³ãƒ“ãƒ³åŒº', 'quan_phunhuan': 'ãƒ•ãƒ¼ãƒ‹ãƒ£ãƒ³åŒº', 'quan_7': '7åŒº', 'quan_7_H': '7åŒºãƒ•ãƒ¼ãƒŸãƒ³ãƒ•ãƒ³', 'quan_khac': 'ãã®ä»–ã®åŒº', 'le_thanh_ton': '1åŒºãƒ¬ã‚¿ãƒ³ãƒˆãƒ³æ—¥æœ¬äººè¡—è¿‘éš£', 'quan_2': '2åŒº', 'quan_4': '4åŒº', 'quan_tanphu': 'ã‚¿ãƒ³ãƒ•ãƒ¼åŒº', 'quan_govap': 'ã‚´ãƒ¼ãƒãƒƒãƒ—åŒº', 'quan_binhtan': 'BINH TANåŒº', 'quan_5': '5åŒº', 'quan_6': '6åŒº', 'quan_8': '8åŒº', 'quan_9': '9åŒº', 'quan_10': '10åŒº', 'quan_11': '11åŒº', 'quan_12': '12åŒº' } };
var langSelected = language.JP;
AODAI.prototype.typeSearchActive = function() {
    var elementActive = $(".search-box .type-search-box li.active");
    $('.type-search-box li').on('click', function() {
        $('.type-search-box li').removeClass('active');
        $(this).addClass('active');
        if (is_safari) { elementActive.trigger('click'); }
    });
    $('.type-search-box li a').on('click touchend', function(e) {
        var el = $(this);
        var link = el.attr('href');
        window.location = link;
    });
}
AODAI.prototype.menuHeaderClick = function() {
    $(".btn-menu").click(function(e) {
        if ($(this).hasClass('btn-close-menu')) {
            $(this).removeClass('btn-close-menu');
            $(this).children().remove();
            $(this).append('<a href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a>');
            $('.sub-menu-list-header').slideToggle('slow');
        } else {
            $(this).children().remove();
            $(this).addClass("btn-close-menu");
            $(this).append('<a href="javascript:void(0)">&#10006;</a>');
            $('.sub-menu-list-header').slideToggle('slow');
        }
        e.stopPropagation();
    });
    $(".sub-menu-list-header a").click(function(e) { if (!$(this).hasClass('popUp')) { e.stopPropagation(); } });
    $('.sub-menu-list-header a').on("click", function(e) {
        var dropdown = $(this).parent().find('.dropdown-submenu-list');
        if (!$(dropdown).hasClass('show')) {
            $('.sub-menu-list-header li').removeClass('active');
            $('.dropdown-submenu-list').removeClass('show');
            $(dropdown).addClass('show');
            $(this).parent().addClass('active');
        } else {
            $('.dropdown-submenu-list').removeClass('show');
            $('.sub-menu-list-header li').removeClass('active');
        }
    });
}
AODAI.prototype.faqPage = function() {
    $(".answer-content").addClass("hidden");
    $('.ques-ans-group li .question-content').click(function() {
        var element = $(this).parent().find(".answer-content");
        var hidden = element.hasClass('hidden');
        $(".answer-content").addClass("hidden");
        if (hidden) {
            element.removeClass('hidden');
            $(".question-content").find('i').removeClass('fa-minus');
            $(this).find('i').addClass('fa-minus');
        } else {
            element.addClass('hidden');
            $(".question-content").find('i').removeClass('fa-minus');
        }
    });
}
AODAI.prototype.scrollbar = function(callback) {
    $(".style-3").mCustomScrollbar({ theme: "dark-3" });
    setTimeout(function() { $(".lSPager.lSGallery").mCustomScrollbar({ theme: "dark-3" }); }, 10);
    $('.dropdown-selected').select2();
    $('.dropdown-selected-cnt').select2();
    var Defaults = $.fn.select2.amd.require('select2/defaults');
    $.extend(Defaults.defaults, {
        dropdownPosition: 'below'
    });
    var AttachBody = $.fn.select2.amd.require('select2/dropdown/attachBody');
    var _positionDropdown = AttachBody.prototype._positionDropdown;
    AttachBody.prototype._positionDropdown = function() {
        var $window = $(window);
        var isCurrentlyAbove = this.$dropdown.hasClass('select2-dropdown--above');
        var isCurrentlyBelow = this.$dropdown.hasClass('select2-dropdown--below');
        var newDirection = null;
        var offset = this.$container.offset();
        offset.bottom = offset.top + this.$container.outerHeight(false);
        var container = {
            height: this.$container.outerHeight(false)
        };
        container.top = offset.top;
        container.bottom = offset.top + container.height;
        var dropdown = {
            height: this.$dropdown.outerHeight(false)
        };
        var viewport = {
            top: $window.scrollTop(),
            bottom: $window.scrollTop() + $window.height()
        };
        var enoughRoomAbove = viewport.top < (offset.top - dropdown.height);
        var enoughRoomBelow = viewport.bottom > (offset.bottom + dropdown.height);
        var css = {
            left: offset.left,
            top: container.bottom
        };
        // Determine what the parent element is to use for calciulating the offset
        var $offsetParent = this.$dropdownParent;
        // For statically positoned elements, we need to get the element
        // that is determining the offset
        if ($offsetParent.css('position') === 'static') {
            $offsetParent = $offsetParent.offsetParent();
        }
        var parentOffset = $offsetParent.offset();
        css.top -= parentOffset.top
        css.left -= parentOffset.left;
        var dropdownPositionOption = this.options.get('dropdownPosition');
        if (dropdownPositionOption === 'above' || dropdownPositionOption === 'below') {
            newDirection = dropdownPositionOption;
        } else {
            if (!isCurrentlyAbove && !isCurrentlyBelow) {
                newDirection = 'below';
            }
            if (!enoughRoomBelow && enoughRoomAbove && !isCurrentlyAbove) {
                newDirection = 'above';
            } else if (!enoughRoomAbove && enoughRoomBelow && isCurrentlyAbove) {
                newDirection = 'below';
            }
        }
        if (newDirection == 'above' ||
            (isCurrentlyAbove && newDirection !== 'below')) {
            css.top = container.top - parentOffset.top - dropdown.height;
        }
        if (newDirection != null) {
            this.$dropdown
                .removeClass('select2-dropdown--below select2-dropdown--above')
                .addClass('select2-dropdown--' + newDirection);
            this.$container
                .removeClass('select2-container--below select2-container--above')
                .addClass('select2-container--' + newDirection);
        }
        this.$dropdownContainer.css(css);
    };
    $("#areadf").select2({
        dropdownPosition: 'below'
    });
    $("#layoutdf").select2({
        dropdownPosition: 'below'
    });
    $("#typedf").select2({
        dropdownPosition: 'below'
    });
    $("#rentdf").select2({
        dropdownPosition: 'below'
    });
    $("#sizedf").select2({
        dropdownPosition: 'below'
    });
    $("#sizeRentdf").select2({
        dropdownPosition: 'below'
    });
    $("#summitCondo").select2({
        dropdownPosition: 'below'
    });
    $("#summitService").select2({
        dropdownPosition: 'below'
    });
}
AODAI.prototype.searchClick = function() {
    $('.dropdown-menu-area div').on('click', function(e) {
        $('.sub-menu').addClass('hidden');
        var dropdown = $(this).parent().find('.sub-menu');
        var hidden = dropdown.hasClass('hidden');
        $('.dropdown-menu-area div').removeClass('active');
        if (hidden) {
            dropdown.removeClass('hidden');
            $(this).addClass('active');
        } else {
            dropdown.addClass('hidden');
            $('.dropdown-menu-area div').removeClass('active');
        }
        e.stopPropagation();
        e.preventDefault();
    });
    $('html, body').on('click', function() { $('.sub-menu').addClass('hidden'); });
    $('.container').on('click', function() { $('.sub-menu').addClass('hidden'); });
    $('.sub-menu li').on('click', function() {
        var valueSelected1 = $(this).data('id');
        var valueSelected = $(this).attr('title');
        var element1 = $(this).parent().parent().parent().prev().find('input');
        var element = $(this).parent().parent().parent().parent().find('span:first-child');
        element.text(valueSelected);
        element1.val(valueSelected1);
    });
}
AODAI.prototype.changerangePrice = function() {
    var rangebar = $('.range-bar'),
        position_min_price = $('.price-numbers'),
        position_max_price = $('.price-numbers-max'),
        buttonStart = null,
        inputMin = $('#inputMin').val(),
        inputMax = $('#inputMax').val(),
        total_price = null,
        arr_price = null,
        min_price = null,
        max_price = null,
        min_button = null,
        max_button = null,
        min_price_tooltip = 0,
        max_price_tooltip = 6000,
        min_max_string = null,
        num_first_position_button = 25.609375;
    $('.search-reset a').click(function() {
        min_price = min_price_tooltip;
        max_price = max_price_tooltip;
        position_min_price.text(min_price + " $");
        position_max_price.text(max_price + " $");
        $('#inputMin').val(min_price);
        $('#inputMax').val(max_price);
        choosePrice(position_min_price, position_max_price, min_price, max_price);
    });
    if (rangebar.length === 1) {
        buttonStart = $(".range-bar").offset().left + num_first_position_button;
        if (inputMax === null) { inputMax = max_price_tooltip; }
        var arrValues = [inputMin, inputMax];
        choosePrice(position_min_price, position_max_price, inputMin, inputMax);
    }

    var price_sub_menu = $(".price-sub-menu").select2();
    price_sub_menu.on("select2:select", function(event) {
        total_price = $(this).val();
        if (total_price.indexOf('-') > 0) {
            arr_price = total_price.split('-');
            min_price = arr_price[0];
            max_price = arr_price[1];
        }
        if (total_price <= 1000) {
            min_price = min_price_tooltip;
            max_price = total_price;
        }
        if (total_price > 3500) {
            min_price = total_price;
            max_price = max_price_tooltip;
        }
        if (total_price == '') {
            min_price = min_price_tooltip;
            max_price = max_price_tooltip;
        }
        position_min_price.text(min_price + " $");
        position_max_price.text(max_price + " $");
        $('#inputMin').val(min_price);
        $('#inputMax').val(max_price);
        choosePrice(position_min_price, position_max_price, min_price, max_price);
    });

    function choosePrice(position_min_price, position_max_price, inputMin, inputMax) {
        $(".range-bar").slider({
            range: true,
            min: 0,
            max: 6000,
            step: 50,
            values: [inputMin, inputMax],
            slide: function(event, ui) {
                min_price = ui.values[0];
                max_price = ui.values[1];
                position_min_price.text(min_price + " $");
                position_max_price.text(max_price + " $");
                min_button = $(".range-bar .ui-slider-handle").eq(0).offset().left;
                max_button = $(".range-bar .ui-slider-handle").eq(1).offset().left;
                var getButtonStart = $(".range-bar").offset().left + num_first_position_button;
                var left_min = min_button - getButtonStart;
                var left_max = max_button - getButtonStart;
                window.addEventListener("resize", function() {
                    if (is_landscape_screen()) {
                        left_min = (left_min - num_first_position_button) - getButtonStart;
                        left_max = (left_max - num_first_position_button) - getButtonStart;
                    } else {
                        left_min = left_min + num_first_position_button;
                        left_max = left_max + num_first_position_button;
                    }
                }, false);
                position_min_price.css("left", left_min);
                position_max_price.css("left", left_max);
            },
            change: function(event, ui) {
                min_price = ui.values[0];
                max_price = ui.values[1];
                position_min_price.text(min_price + " $");
                position_max_price.text(max_price + " $");
                min_button = $(".range-bar .ui-slider-handle").eq(0).offset().left;
                max_button = $(".range-bar .ui-slider-handle").eq(1).offset().left;
                var getButtonStart = $(".range-bar").offset().left + num_first_position_button;
                var left_min = min_button - getButtonStart;
                var left_max = max_button - getButtonStart;
                window.addEventListener("resize", function() {
                    if (is_landscape_screen()) {
                        left_min = (left_min - num_first_position_button) - getButtonStart;
                        left_max = (left_max - num_first_position_button) - getButtonStart;
                    } else {
                        left_min = left_min + num_first_position_button;
                        left_max = left_max + num_first_position_button;
                    }
                }, false);
                position_min_price.css("left", left_min);
                position_max_price.css("left", left_max);
                $('#inputMin').val(min_price);
                $('#inputMax').val(max_price);
            },
            create: function(event, ui) {
                ui.values = arrValues;
                min_price = ui.values[0];
                max_price = ui.values[1];
                position_min_price.text(min_price + " $");
                position_max_price.text(max_price + " $");
                min_button = $(".range-bar .ui-slider-handle").eq(0).offset().left;
                max_button = $(".range-bar .ui-slider-handle").eq(1).offset().left;
                position_min_price.css("left", min_button - buttonStart);
                position_max_price.css("left", max_button - buttonStart);
            }
        });
    }
}
AODAI.prototype.chooseLanguage = function() {
    $('.block-menu-language li a').click(function() {
        $('.block-menu-language li').removeClass('active');
        $(this).parent().addClass('active');
        if ($(this).find('font font').text() == "VN") { langSelected = language.VN; } else { langSelected = language.JP; }
    });
}
AODAI.prototype.confirmInfoClick = function() {
    $('#myModal').on('show.bs.modal', function(e) {
        $('.list li').remove();
        $(".data-field input").each(function() {
            textTitle = $(this).parent().prev('p').text();
            textInput = $(this).val();
            $('.list').append('<li>' + textTitle + ':' + textInput + '</li>');
        });
        $('select').each(function() {
            var label_select = $(this).parent().prev('p').text();
            var name_selected = $(this).find('option:selected').text();
            var id_selected = $(this).find('option:selected').attr('value');
            $('.list').append('<li>' + label_select + ': ' + name_selected + '</li>');
        });

        var lable_area = $('#scroll-position-area').text();
        var name_area = $('.dropdown-menu .active').text();
        $('.list').append('<li>' + lable_area + ':' + name_area + '</li>');

        var name_checked_first = [];
        $(".checkbox-block-first input:checked").each(function() { name_checked_first.push($(this).next().text()); });
        $('.list').append('<li>' + $('.checkbox-label-block-first').text() + ': ' + name_checked_first.join(',\t') + '</li>');
        var name_checked_second = [];
        $(".checkbox-block-second input:checked").each(function() { name_checked_second.push($(this).next().text()); });
        $('.list').append('<li>' + $('.checkbox-label-block-second').text() + ': ' + name_checked_second.join(',\t') + '</li>');
        var textIntroction = $('.data-field-large textarea').val();
        var textTitleIntroction = $('.data-field-large').prev().text();
        $('.list').append('<li>' + textTitleIntroction + ':' + textIntroction + '</li>');
        var referArr = [];
        var textRefer = $('.upload-reference .data-text').text();
        var textValFile;
        $('.data-upload').each(function() {
            textValFile = $(this).find('input[type="text"]').attr('value');
            referArr.push(textValFile);
        });
        $('.list').append('<li>' + textRefer + ':' + referArr.join(',\t') + '</li>');
    });
}
AODAI.prototype.validateConfirmInfoClick = function(e) { $('#myModal').modal(); }
AODAI.prototype.validateEstateOwners = function() {
    var please_enter = $('#please_enter').val();
    var please_select = $('#please_select').val();
    var number = $('#number').val();
    var invalid = $('#invalid').val();
    $('.errorInputRequire').remove();
    $('.errorSelectRequire').remove();
    $('.inputRequire, .selectRequire').removeClass('error');
    $('.inputRequire, .selectRequire').removeClass('error-border-input');
    $('.limited-view').removeClass('error-border-input');
    var isErrorNumber = false;
    var isErrorInput = false;
    $('.info-input .inputRequire').each(function(i, element) {
        var value = $(element).val();
        var label_title = $(element).data('title');
        var errorMessages = label_title + please_enter;
        var errorNumbers = label_title + number + please_enter;
        if (!value.trim() && i != 7) {
            $(element).after('<span class="errorInputRequire error">' + errorMessages + '</span>');
            $(element).addClass('error-border-input');
            isErrorInput = true;
        } else {
            if (i && (i == 2 || i == 6 || i == 8)) {
                if (isNaN(value)) {
                    $(element).after('<span class="errorInputRequire error">' + errorNumbers + '</span>');
                    $(element).addClass('error-border-input');
                    isErrorNumber = true;
                }
            }
        }
    });
    $('.info-input .selectRequire').each(function(i, element) {
        var value = $(element).val();
        var label_title = $(element).data('title');
        var errorSelectMessages = label_title + please_select;
        if (!value) {
            $(element).after('<span class="errorSelectRequire error">' + errorSelectMessages + '</span>');
            $(element).addClass('error-border-input');
            isErrorInput = true;
        }
    });
    if ($('#selArea').val() == null || $('#selArea').val() == 0) {
        var errorErea = "ã‚¨ãƒªã‚¢ã‚’é¸æŠžã—ã¦ãã ã•ã„";
        $('.limited-view').after('<span class="errorSelectRequire error">' + errorErea + '</span>');
        $('.limited-view').addClass('error-border-input');
        // Have error
        isErrorInput = true;
    }
    var email = $('#txtEmail').val();
    var isEmail = validateEmail(email);
    if (!isEmail && email != '') {
        var label_title = $('#txtEmail').data('title');
        var errorEmailMessages = label_title + invalid;
        $('#txtEmail').after('<span class="errorSelectRequire error">' + errorEmailMessages + '</span>');
        $('#txtEmail').addClass('error-border-input');
    }
    result = false;
    if (!isErrorInput && !isErrorNumber && isEmail) { result = true; } else { $('.info-input .error').each(function(i, element) { var a = $(element).parent().prev().attr('id'); if ($(element).parent().prev().attr('id') === 'scroll-position-username') { scrollToElement('scroll-position-username'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-email') { scrollToElement('scroll-position-email'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-phone') { scrollToElement('scroll-position-phone'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-address') { scrollToElement('scroll-position-address'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-name-en') { scrollToElement('scroll-position-name-en'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-name-jp') { scrollToElement('scroll-position-name-jp'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-rent') { scrollToElement('scroll-position-rent'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-bedroom') { scrollToElement('scroll-position-bedroom'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-deposit') { scrollToElement('scroll-position-deposit'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-bathroom') { scrollToElement('scroll-position-bathroom'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-area') { scrollToElement('scroll-position-area'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-reach') { scrollToElement('scroll-position-reach'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-type') { scrollToElement('scroll-position-type'); return false; } if ($(element).parent().prev().attr('id') === 'scroll-position-size') { scrollToElement('scroll-position-size'); return false; } }) }
    return result;
}

function validateEmail(email) { var regexEmail = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm; if (regexEmail.test(email)) { return true; } return false; }

function scrollToElement(elementId) { $('html, body').animate({ scrollTop: $("#" + elementId).offset().top }, 1000); } AODAI.prototype.showtextUpload = function() {
    $('.data-upload input[type="file"]').change(function(e) {
        var i = $(this).find('label').clone();
        var file = e.target.files[0].name;
        var settextInput = $(this).parent().find('input[type="text"]');
        settextInput.val(file);
        settextInput.attr('value', file);
    });
}
AODAI.prototype.backtoTop = function() {
    if ($('.btn-to-top, .link-to-top').length) {
        var scrollTrigger = 100,
            backToTop = function() { var scrollTop = $(window).scrollTop(); if (scrollTop > scrollTrigger) { $('.btn-to-top, .link-to-top').addClass('showTop'); } else { $('.btn-to-top, .link-to-top').removeClass('showTop'); } };
        backToTop();
        $(window).on('scroll', function() { backToTop(); });
        $('.btn-to-top, .link-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({ scrollTop: 0 }, 700);
        });
    }
}
$(window).click(function() {
    $(".sub-menu").addClass("hidden");
    $(".dropdown-menu-class div").removeClass('active');
    if ($('.btn-menu').hasClass('btn-close-menu')) { $('.btn-menu').trigger('click'); }
});
AODAI.prototype.sliderPrimary = function() {
    $('.slider-top-menu').bxSlider({ hideControlOnEnd: true, auto: true, mode: 'fade', speed: 1000, pager: false });
    $('.bx-prev').remove();
    $('.bx-next').remove();
}
AODAI.prototype.listSlider = function() {
    $('.items-list-apartment').owlCarousel({ loop: true, margin: 15, responsiveClass: true, responsive: { 0: { items: 1, nav: true, loop: false }, 568: { items: 2, nav: true, loop: false }, 768: { items: 2, nav: true, loop: false }, 992: { items: 4, nav: true, loop: false } } });
    $('.three-feature-appartment .container .row').owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        responsive: {
            0: { items: 1, nav: true, loop: false },
            568: { items: 2, nav: true, loop: false },
            992: { items: 3, nav: true, loop: false }
        }
    });
}
AODAI.prototype.staffList = function() { $('.staff-list').owlCarousel({ loop: true, responsiveClass: true, responsive: { 0: { items: 1, nav: true }, 320: { items: 1, nav: true }, 375: { items: 1, nav: true }, 568: { margin: 10, items: 1, nav: true }, 640: { autoWidth: true, items: 1, nav: true }, 667: { autoWidth: true, items: 1, nav: true }, 768: { items: 1, nav: true }, 812: { autoWidth: true, margin: 30, items: 1, nav: true }, 992: { items: 2, nav: true }, 1024: { margin: 10, items: 2, nav: true, loop: false }, 1200: { margin: 10, items: 2, nav: true, loop: false } } }); }
AODAI.prototype.slideDetailProduct = function() { $('#imageGallery').lightSlider({ gallery: true, item: 1, responsive: [{ breakpoint: 1024, settings: { item: 1, thumbItem: 10, slideWidth: 674, slideMargin: 0, enableDrag: false, currentPagerPosition: 'right', animateThumb: true, thumbnail: true, loop: false }, breakpoint: 736, settings: { item: 1, gallery: false, pager: false, loop: false } }] }); }
AODAI.prototype.fullscreenImg = function() {
    toggleFullscreen = function(elem) { elem = elem || document.documentElement; if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) { if (elem.requestFullscreen) { elem.requestFullscreen(); } else if (elem.msRequestFullscreen) { elem.msRequestFullscreen(); } else if (elem.mozRequestFullScreen) { elem.mozRequestFullScreen(); } else if (elem.webkitRequestFullscreen) { elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT); } } else { if (document.exitFullscreen) { document.exitFullscreen(); } else if (document.msExitFullscreen) { document.msExitFullscreen(); } else if (document.mozCancelFullScreen) { document.mozCancelFullScreen(); } else if (document.webkitExitFullscreen) { document.webkitExitFullscreen(); } } }
    $('.images-thumb-list .btn-zoom-in a').click(function() {
        var element = $('.lSSlideOuter .lSSlideWrapper .lslide img');
        element.each(function() { if ($(this).parent().hasClass('active')) { toggleFullscreen(this); } });
    });
}
AODAI.prototype.sliderSearchResult = function() { $('.img-product-item').owlCarousel({ items: 1, nav: true, loop: false }); }
AODAI.prototype.sliderSearchResult2 = function() { $('.img-product').owlCarousel({ items: 1, nav: true, loop: false }); }
AODAI.prototype.drawMap = function() {
    active = function(element) {
        element.children()[0].attr('fill', '#84292D');
        element.children()[0].style('cursor', 'pointer');
        element.addClass('active');
        if (element.children()[1]) {
            element.children()[1].style('cursor', 'pointer');
            element.children()[1].fill('#fff');
        }
        $(".product-item-area8").addClass("active");
        $(".product-images-area8").addClass("active");
    }
    hover = function(polygon) {
        polygon.mouseover(function() {
            this.children()[0].attr('fill', '#84292D');
            this.children()[0].style('cursor', 'pointer');
            if (this.children()[1]) {
                this.children()[1].style('cursor', 'pointer');
                this.children()[1].fill('#fff');
            }
        })
        polygon.mouseout(function() { if (this.hasClass('active')) { this.children()[0].attr('fill', '#84292D'); if (this.children()[1]) this.children()[1].fill('#fff'); } else { this.children()[0].attr('fill', '#E8E8E8'); if (this.children()[1]) this.children()[1].fill('#84292D'); } })
        polygon.click(function() {
            var elem = $('#drawing g');
            elem.each(function() {
                elem.removeClass('active');
                elem.find('polygon').attr('fill', '#E8E8E8');
                elem.find('text').attr('fill', '#84292D')
            });
            this.addClass('active');
            this.children()[0].attr('fill', '#84292D');
            var district = $(this.node).find('tspan').text();
            $(".heading-product.heading-map").text(district);
            if (this.children()[1]) this.children()[1].fill('#fff');
        })
    }
    var draw = SVG('drawing').size(1200, 500);
    var polygon1 = draw.polygon('11.87 193.4 60.56 210.19 79.06 187.8 113.14 187.8 164.75 210.19 225.12 231.65 261.15 195.27 177.9 127.63 136.51 128.84 85.88 117.83 28.43 157.02 11.87 193.4');
    var polygon2 = draw.polygon('226.1 231.65 42.06 289.49 1.65 242.38 11.87 204.59 14.31 195.27 60.56 211.13 78.09 186.87 114.12 186.87 164.75 210.19 226.1 231.65');
    var polygon3 = draw.polygon('92.71 301.71 200.36 282.48 234.08 297.31 243.63 274.56 228.82 227.92 62.84 282.96 92.71 301.71');
    var polygon4 = draw.polygon('150.15 403.3 203.7 370.65 60.56 282.96 44.01 288.56 81.58 365.99 129.7 380.91 150.15 403.3');
    var polygon5 = draw.polygon('200.36 282.48 248.05 304.46 203.7 370.65 92.71 301.71 200.36 282.48');
    var polygon6 = draw.polygon('298.16 299.75 401.04 299.75 384.82 254.97 402.35 237.25 426.69 245.64 443.25 268.03 469.54 273.63 496.8 238.18 487.06 195.27 447.14 178.47 388.72 214.86 345.87 224.19 321.37 186.87 294.26 176.61 260.18 195.27 229.99 227.92 243.63 274.56 298.16 299.75');
    var polygon7 = draw.polygon('243.63 444.35 197.86 462.08 163.78 450.88 144.3 423.83 151.12 403.3 203.7 369.72 259.21 409.83 243.63 444.35');
    var polygon8 = draw.polygon('316.88 377.18 335.16 351.06 383.85 330.54 401.04 300.51 298.16 299.75 243.63 274.56 234.08 297.31 248.05 304.46 203.7 369.72 259.21 409.83 316.88 377.18');
    var polygon9 = draw.polygon('260.18 409.83 243.63 444.35 363.4 440.62 363.4 410.77 316.88 377.18 260.18 409.83');
    var polygon10 = draw.polygon('494.86 240.98 540.62 264.3 582.49 266.17 619.5 329.49 619.5 355.26 694.96 381.38 668.05 424.76 563.02 468.61 511.41 450.88 478.3 461.14 476.35 448.08 494.86 415.43 496.8 381.04 456.88 356.66 426.69 358.52 423.77 388.38 400.4 407.97 363.4 409.83 316.88 377.18 334.19 350.13 383.85 330.54 401.04 299.75 384.82 254.97 403.32 237.58 426.69 245.64 441.3 268.03 469.54 273.63 494.86 240.98');
    var polygon11 = draw.polygon('361.45 440.62 446.17 584.29 496.8 560.03 554.25 480.73 563.02 468.61 511.41 450.88 478.3 461.14 476.35 448.08 494.86 415.43 496.8 381.04 456.88 356.66 426.69 358.52 423.77 388.38 400.4 407.97 363.4 409.83 361.45 440.62');
    var x = 230;
    var y = -15;
    polygon1.fill('#E8E8E8').move(55 + x, 30 + y);
    polygon2.fill('#E8E8E8').move(45 + x, 100 + y);
    polygon3.fill('#E8E8E8').move(105 + x, 142 + y);
    polygon4.fill('#E8E8E8').move(87 + x, 198 + y);
    polygon5.fill('#E8E8E8').move(135 + x, 196 + y);
    polygon6.fill('#E8E8E8').move(273 + x, 89 + y);
    polygon7.fill('#E8E8E8').move(185 + x, 282 + y);
    polygon8.fill('#E8E8E8').move(245 + x, 188 + y);
    polygon9.fill('#E8E8E8').move(285 + x, 290 + y);
    polygon10.fill('#E8E8E8').move(360 + x, 151 + y);
    polygon11.fill('#E8E8E8').move(405 + x, 270 + y);
    polygon1.stroke({ color: '#fff', width: 2 });
    polygon2.stroke({ color: '#fff', width: 2 });
    polygon3.stroke({ color: '#fff', width: 2 });
    polygon4.stroke({ color: '#fff', width: 2 });
    polygon5.stroke({ color: '#fff', width: 2 });
    polygon6.stroke({ color: '#fff', width: 2 });
    polygon7.stroke({ color: '#fff', width: 2 });
    polygon8.stroke({ color: '#fff', width: 2 });
    polygon9.stroke({ color: '#fff', width: 2 });
    polygon10.stroke({ color: '#fff', width: 2 });
    polygon11.stroke({ color: '#fff', width: 2 });
    polygon3.text = draw.text(langSelected.quan_phunhuan).fill('#84292D').move(180 + x, 175 + y);
    polygon5.text = draw.text(langSelected.quan_3).fill('#84292D').move(220 + x, 230 + y);
    polygon6.text = draw.text(langSelected.quan_binhthanh).fill('#84292D').move(320 + x, 160 + y);
    polygon9.text = draw.text(langSelected.quan_4).fill('#84292D').move(335 + x, 320 + y);
    polygon8.text = draw.text(langSelected.quan_1).fill('#84292D').move(310 + x, 250 + y);
    polygon10.text = draw.text(langSelected.quan_2).fill('#84292D').move(550 + x, 240 + y);
    polygon11.text = draw.text(langSelected.quan_7).fill('#84292D').move(460 + x, 360 + y);
    var group1 = draw.group();
    var group2 = draw.group();
    var group3 = draw.group();
    var group4 = draw.group();
    var group5 = draw.group();
    var group6 = draw.group();
    var group7 = draw.group();
    var group8 = draw.group();
    var group9 = draw.group();
    var group10 = draw.group();
    var group11 = draw.group();
    group1.add(polygon1);
    group2.add(polygon2);
    group3.add(polygon3);
    group3.add(polygon3.text);
    group4.add(polygon4);
    group5.add(polygon5);
    group5.add(polygon5.text);
    group6.add(polygon6);
    group6.add(polygon6.text);
    group7.add(polygon7);
    group8.add(polygon8);
    group8.add(polygon8.text);
    group9.add(polygon9);
    group9.add(polygon9.text);
    group10.add(polygon10);
    group10.add(polygon10.text);
    group11.add(polygon11);
    group11.add(polygon11.text);
    group1.addClass('polygon1');
    group2.addClass('polygon2');
    group3.addClass('polygon3');
    group4.addClass('polygon4');
    group5.addClass('polygon5');
    group6.addClass('polygon6');
    group7.addClass('polygon7');
    group8.addClass('polygon8');
    group9.addClass('polygon9');
    group10.addClass('polygon10');
    group11.addClass('polygon11');
    hover(group1);
    hover(group2);
    hover(group3);
    hover(group4);
    hover(group5);
    hover(group6);
    hover(group7);
    hover(group8);
    active(group8);
    hover(group9);
    hover(group10);
    hover(group11);
}
AODAI.prototype.switchMap = function() {
    var target = $('#drawing g');
    var content = $('.product-area-map div');
    target.click(function() {
        var i = $(this).index();
        content.each(function(index) { if ($(this).hasClass('active')) $(this).removeClass('active'); });
        $('.product-area-map .product-item' + i).addClass('active');
    });
}
AODAI.prototype.InformactionArea = function() {
    var targer = $('#drawing g');
    var content = $('.type-map-des p');
    var contentImagesArea = $('.map-image p');
    targer.click(function() {
        var i = $(this).index();
        content.each(function(index) { if ($(this).hasClass('active')) { $(this).removeClass('active'); } });
        contentImagesArea.each(function(index) { if ($(this).hasClass('active')) { $(this).removeClass('active'); } });
        $('.type-map-des .product-item-area' + i).addClass('active');
        $('.map-image .product-images-area' + i).addClass('active');
    });
}
AODAI.prototype.activeDefaultProduct = function(element) { $(element).addClass('active'); }
AODAI.prototype.tabs = function() {
    var id_building_detail = $('input[name="id_building"]').val();
    var name_building_detail = $('input[name="name_building"]').val();
    var tab = $('.tab-area');
    var tabContent = $('.tab-content');
    if (tab.length === 1) {
        tab.find('ul li').click(function() {
            var data_id_building_detail = $(this).attr('data-id');
            var pathname = window.location.pathname;
            var arr_pathname = pathname.split('?');
            window.location.href = arr_pathname[0] + '?type=' + data_id_building_detail;
        });
    }
}
AODAI.prototype.popupEmail = function() {
    var errorClass = $('.modal-content html>body>#contact .modal-body .wrapper-error')
    $('#contactModal').on('hidden.bs.modal', function() { $(this).find(errorClass).remove(); });
}
AODAI.prototype.wowAnimate = function() {
    wowActive = function(wow, classUse) {
        wow = new WOW({ boxClass: classUse, animateClass: 'animated', offset: 0, animationDelay: 0, mobile: true, live: true, callback: function(box) {}, scrollContainer: null });
        wow.init();
    }
    var arivalBlock = null,
        classArivalBlock = $('.arrival-block');
    if (classArivalBlock.length === 1) wowActive(arivalBlock, 'arrival-block');
    var benefitBlock = null,
        classBenefitBlock = $('.benefit-block');
    if (classBenefitBlock.length === 1) wowActive(benefitBlock, 'benefit-block');
    var featureBlock = null,
        classFeatureBlock = $('.feature-block');
    if (classFeatureBlock.length === 1) wowActive(featureBlock, 'feature-block');
    var supportBlock = null,
        classSupportBlock = $('.support-block');
    if (classSupportBlock.length === 1) wowActive(supportBlock, 'support-block');
    var subIntroduce = null,
        classSubIntroduce = $('.sub-introduce-staff');
    if (classSubIntroduce.length === 1) wowActive(subIntroduce, 'sub-introduce-staff');
    var operationCompany = null,
        classOperationCompany = $('.operation-company');
    if (classOperationCompany.length === 1) wowActive(operationCompany, 'operation-company');
    var webInfo = null,
        classWebInfo = $('.website-information');
    if (classWebInfo.length === 1) wowActive(webInfo, 'website-information');
    var productFeatures = null,
        classProductFeatures = $('.product-features');
    if (classProductFeatures) wowActive(productFeatures, 'product-features');
    var productBlock = null,
        classProductBlock = $('.product-block');
    if (classProductBlock) wowActive(productBlock, 'product-block');
    var economyItem = null,
        classEconomyItem = $('.economical-items');
    if (classEconomyItem) wowActive(economyItem, 'economical-items');
    var ecoStep = null,
        classEcoStep = $('.eco-steps-block');
    if (classEcoStep) wowActive(ecoStep, 'eco-steps-block');
    var introStaff = null,
        classIntroStaff = $('.intro-staff-eco');
    if (classIntroStaff) wowActive(introStaff, 'intro-staff-eco');
    var mapContent = null,
        classMapContent = $('.map-content');
    if (classMapContent) wowActive(mapContent, 'map-content');
    var apartmentFeature = null,
        classAparment = $('.three-feature-appartment-home');
    if (classAparment) wowActive(apartmentFeature, 'three-feature-appartment-home');
    // var introduceDist = null,
    //     classIntroDist = $('.introduce-district-wrapper');
    // if (classIntroDist) wowActive(introduceDist, 'introduce-district-wrapper');
    var apartmentRedirect = null,
        classRedirect = $('.three-redirect-appartment-banner');
    if (classRedirect) wowActive(apartmentRedirect, 'three-redirect-appartment-banner');
}
AODAI.prototype.lazyLoad = function() {
    $('img.lazyload').lazyload();
}

AODAI.prototype.init = function() {
    this.typeSearchActive();
    var checksliderTop = $('.slider-top-menu');
    if (checksliderTop.length === 1) { this.sliderPrimary(); } this.listSlider();
    this.staffList();
    this.slideDetailProduct();
    this.menuHeaderClick();
    this.searchClick();
    this.changerangePrice();
    this.fullscreenImg();
    this.backtoTop();
    this.sliderSearchResult();
    this.sliderSearchResult2();
    var map = $('#drawing');
    if (map.length === 1) {
        this.drawMap();
        this.switchMap();
        this.InformactionArea();
        this.activeDefaultProduct('.product-item8');
    }
    this.faqPage();
    this.tabs();
    this.chooseLanguage();
    this.wowAnimate();
    this.confirmInfoClick();
    this.showtextUpload();
    this.scrollbar();
    this.popupEmail();
    this.lazyLoad();
}
$(document).ready(function() {
    var aodai = new AODAI();
    aodai.init();
});

function resize_change(is_first, e) {
    is_first = typeof is_first !== 'underfined' ? is_first : false;
    var $width = $(window).width();
    if ($width <= 1024) {
        $('.three-redirect-appartment-banner').insertBefore('.benefit-block').css('display', 'block');
        $('.three-feature-appartment-home').insertAfter('.three-redirect-appartment-banner').css('display', 'block');
        // $('.introduce-district-wrapper').insertAfter('.three-feature-appartment-home').css('display', 'block');
        $('.wrap-search-box').insertBefore('.arrival-block').css('display', 'block');
    } else {
        $('.wrap-search-box').insertBefore('voucher-block').css('display', '');
        $('body').css({ 'min-width': '1200px' });
    }
    if ($width <= 1024) {
        $('.rented-real-estate').click(function() {
            $('.feature-block').appendTo('.collapse-item .rented-real-estate').insertAfter('.rented-real-estate').css('display', '');
            $('.feature-block').collapse('toggle');
            $('.feature-block .heading-title').css('display', 'none');
        });
        $('.support-advanced').click(function() {
            $('.support-block').appendTo('.collapse-item .support-advanced').insertAfter('.support-advanced').css('display', '');
            $('.support-block').collapse('toggle');
            $('.support-block .heading-title').css('display', 'none');
        });
        $('.staff-introduce-firm').click(function() {
            $('.introduction-staff-company').appendTo('.collapse-item .staff-introduce-firm').insertAfter('.staff-introduce-firm').css('display', '');
            $('.introduction-staff-company').collapse('toggle');
        });
        if ($('.wrapper-content-block').hasClass('page-home')) {
            $('.website-information').insertAfter('.collapse-item');
            $('.voucher-block-interior').insertAfter('.website-information');
            $('.image-banner-block').insertAfter('.voucher-block-interior');
            // $('.image-banner-block').insertAfter('.website-information');
            $('.tags-seo-block').insertAfter('.image-banner-block');
        }
        $('.product-features-left').insertAfter('.product-features-right');
    } else {
        $('main .collapse-item').css('display', 'none');
        $('.footer-contact').css('display', 'none');
        $('.btn-detail-product').css('display', 'none');
    }
    if ($width <= 1024) {
        $('.product-item').find('.overlay-fix').removeClass('clearfix');
        $('.detail-product-right').find('.list-condition').removeClass('clearfix');
        $('.detail-product-right').find('.list-utilities').removeClass('clearfix');
        $('.arrival-items').slice(3).css('display', 'none');
        $('.arrival-items_back').css('display', 'block');
        if ($('.content-search-block').find('div').hasClass('clearfix')) { $('div').removeClass('clearfix'); }
    }
    if ($width <= 1024) {
        $('.block-contact-phone.block-contact-phone-common').css('display', 'block');
        $('.block-contact-phone.block-contact-phone-layout').css('display', 'block');
    } else {
        $('.block-contact-phone.block-contact-phone-common').css('display', 'none');
        $('.block-contact-phone.block-contact-phone-layout').css('display', 'none');
    }
    if ($width < 768) {
        $('.map-image').insertBefore('.type-map-des').css('display', 'block');
        $('.des-and-image').addClass('clearfix');
    } else {
        $('.map-image').insertAfter('.type-map-des').css('display', 'block');
        $('.des-and-image').addClass('clearfix');
    }
    if ($width <= 1024) {
        $(window).resize(function() {
            // var container_width = $('#pageContainer').width();
            // var container_height = $('#info-website-block').height();
            var container_width = Math.ceil($('#pageContainer').width());
            var container_height = Math.ceil($('#info-website-block').height());
            setTimeout(function() {
                $('#pageContainer').html('<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=' + container_width + '&height=' + container_height + '&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949" width="' + container_width + '" height="' + container_height + '" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"><blockquote cite="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=' + container_width + '&height=' + container_width + '&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=' + container_width + '&height=' + container_width + '&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949">Aodaihousing</a></blockquote></iframe>');
            }, 6000);
        });
    } else {
        // var container_height = $('#info-website-block').height();
        var container_height = Math.ceil($('#info-website-block').height());
        setTimeout(function() {
            $('#pageContainer').html('<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=500&height=' + container_height + '&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949" width="500" height="' + container_height + '" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"><blockquote cite="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faodaihousing%2Fposts%2F184755988388923&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1022639317783949">Aodaihousing</a></blockquote></iframe>');
        }, 6000);
    }

}
resize_change();

function toggleContent() { if ($('.wrapper-content-block').hasClass('page-home')) { $('.toggle-dropdown').click(function() { $(this).toggleClass('active'); }); } } toggleContent();
window.addEventListener("resize", function() { AODAI.prototype.changerangePrice(); }, false);

function is_landscape_screen() { var w = $(window).width(); var h = $(window).height(); if (w > h) { return true; } return false; }

function is_portrait_screen() { var w = $(window).width(); var h = $(window).height(); if (w < h) { return true; } return false; }

function focusFormContact() {
    $(document).on('touchstart', function(e) {
        if (!$(e.target).is('.input-text') && $('.input-text').is(':focus')) { document.activeElement.blur(); }
        if (!$(e.target).is('.input-textarea') && $('.input-textarea').is(':focus')) { document.activeElement.blur(); }
        if ($(e.target).is('#close')) { document.activeElement.blur(); }
        if ($(e.target).is('#contactModal')) { document.activeElement.blur(); } $('.block-contact-mail a').click(function() { $("html, body").animate({ scrollTop: 0 }, 0); });
        $('.info-three-detail a').click(function() { $("html, body").animate({ scrollTop: 0 }, 0); });
        $('.contact-us-block a').click(function() { $("html, body").animate({ scrollTop: 0 }, 0); });
        $('.btn-eco a').click(function() { $("html, body").animate({ scrollTop: 0 }, 0); });
        $('.popUp').click(function() { $("html, body").animate({ scrollTop: 0 }, 0); });
    });
}
focusFormContact();

'use scrict';
var zoomLevel = document.getElementById('zoom-level');

function onresize() {
    var zoom = detectZoom.zoom();
    if (zoom > 1)
        $(".menu-header .top-menu").addClass("absolute");
    if (zoom < 1)
        $(".menu-header .top-menu").removeClass("absolute");
}
onresize();

if ('ontouchstart' in window) {
    window.onscroll = onresize;
}

$(document).ready(function() {
    $('.fadeOut').owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        margin: 10,
        autoplay: true,
        nav: false,
        dots: false
    });
});
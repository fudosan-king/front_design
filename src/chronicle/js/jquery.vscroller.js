/*
 * jQuery VScroller v1.2
 * Created by Nxeed | https://github.com/nxeed
 */

if (typeof Object.create !== "function") {
    Object.create = function (obj) {
        function F() {
        }
        F.prototype = obj;
        return new F();
    };
}

(function ($, window, document) {
    var VScroller = {
        $elem: null,
        $content: null,
        $scrollBody: null,
        $scroll: null,
        height: 0,
        contentHeight: 0,
        scrollBodyHeight: 0,
        scrollHeight: 0,
        contentPaddingBottom: 0,
        scrollPos: 0,
        contentPos: 0,
        options: {},
        redraw: function () {
            var base = this;
            var ret = true;

            if (this.scrollPos < 0) {
                this.scrollPos = 0;
                ret = false;
            }

            if (this.scrollPos > this.scrollBodyHeight - this.scrollHeight) {
                this.scrollPos = base.scrollBodyHeight - base.scrollHeight;
                ret = false;
            }

            var scrollVal = parseInt(this.scrollPos * 100 / (this.scrollBodyHeight - this.scrollHeight));
            var contentHeight = this.contentHeight - this.contentPaddingBottom - this.height;

            this.$scroll.stop(false, true).animate({top: this.scrollPos + 'px'}, {
                duration: this.options.animationDuration,
                easing: this.options.easing
            });
            this.$dummy.stop(false, true).animate({top: this.scrollPos + 'px'}, {
                duration: this.options.animationDuration,
                easing: this.options.easing
            });

            this.$content.stop(false, true).animate({top: (contentHeight * scrollVal / 100) * -1 + 'px'}, {
                duration: this.options.animationDuration,
                easing: this.options.easing
            });

            return ret;
        },
        checkVisible: function () {
            if (this.contentHeight > this.height) {
                this.$scrollBody.show();
                return true;
            }
            this.$scrollBody.hide();
            return false;
        },
        refreshContentSize: function () {
            this.contentHeight = this.$content.outerHeight();
            this.redraw();
            this.checkVisible();
        },
        init: function (options, el) {
            var base = this;
            this.options = $.extend({}, $.fn.vscroller.options, $(el).data(), options);

            this.$elem = $(el);
            this.$content = $('.vscroller-content', base.$elem);
            this.$scrollBody = $('<div class="vscroller-scroll-body"></div>');
            this.$scroll = $('<a href="#" class="vscroller-scroll"></a>');
            this.$dummy = $('<div class="vscroller-scroll"></div>');

            this.$elem.append(this.$scrollBody);
            this.$scrollBody.append(this.$scroll);
            this.$scrollBody.append(this.$dummy);

            this.$dummy.fadeTo(0, 0).hide();

            this.height = this.$elem.outerHeight();

            this.contentHeight = this.$content.outerHeight();
            this.contentPaddingBottom = parseInt(this.$content.css('paddingBottom'));
            this.scrollHeight = this.$scroll.outerHeight();

            this.$scrollBody.css('height', this.$elem.height() - parseInt(this.$scrollBody.css('top')) * 2 + 'px');
            this.scrollBodyHeight = this.$scrollBody.outerHeight();

            var scrollStart = 0;

            $(window).bind('resize.vscroller', this.refreshContentSize);
            
            setInterval(function() {
               base.refreshContentSize();
            }, 1000);

            this.$scrollBody.bind('mousedown.vscroller', function (e) {
                if (e.button !== 0) {
                    return false;
                }
                e.preventDefault();
                var pos = parseInt(e.pageY - $(this).offset().top);
                base.scrollPos = pos;
                base.redraw();
                base.$scroll.focus();
            });

            this.$scroll.bind('dragstart.vscroller', function (e, dd) {
                setTimeout(function () {
                    base.$dummy.show();
                }, 1);
                scrollStart = base.scrollPos;
                base.$elem.addClass('vscroller-drag');
            }).bind('drag.vscroller', function (e, dd) {
                base.dragDeltaY = dd.deltaY;
                var pos = scrollStart + dd.deltaY;
                base.scrollPos = pos;
                base.redraw();
            }).bind('dragend.newstape', function (e, dd) {
                base.$dummy.hide();
                base.$scroll.focus();
                base.$elem.removeClass('vscroller-drag');
            });

            this.$scroll.bind('click.vscroller', function (e) {
                $(this).focus();
                e.preventDefault();
            });

            this.$scroll.bind('keypress.vscroller', function (e) {
                if (e.keyCode < 38 && e.keyCode > 40) {
                    return;
                }

                var jump = base.options.scrollRate;
                
                if (e.keyCode === 38) {
                    base.scrollPos = base.scrollPos - jump;
                } else if (e.keyCode === 40) {
                    base.scrollPos = base.scrollPos + jump;
                }

                if (base.redraw()) {
                    e.preventDefault();
                }
                base.redraw();
            });

            this.$dummy.bind('click.vscroller', function (e) {
                base.$scroll.focus();
            });

            if (this.options.mousewheel) {
                this.$elem.bind('mousewheel.vscroller', function (e) {
                    if (!base.checkVisible()) {
                        return;
                    }
                    var jump = base.options.scrollRate;
                    base.scrollPos = (e.deltaY > 0) ? base.scrollPos - jump : base.scrollPos + jump;
                    
                    if (base.redraw()) {
                        e.preventDefault();
                    }
                });
            }

            this.checkVisible();
        }
    };

    $.fn.vscroller = function (options) {
        return this.each(function () {
            if ($(this).data("vscroller-init") === true) {
                return false;
            }

            $(this).data("vscroller-init", true);
            var vscroller = Object.create(VScroller);
            vscroller.init(options, this);
            $.data(this, "vscroller", vscroller);
        });
    };

    $.fn.vscroller.options = {
        mousewheel: true,
        easing: 'linear',
        scrollRate: 15,
        animationDuration: 400
    };

}(jQuery, window, document));

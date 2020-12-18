(function(window) {
    !window.Sctv && (window.Sctv = {});
    !window.Sctv.Util && (window.Sctv.Util = {});
    !window.Sctv.Util.Loader && (window.Sctv.Util.Loader = new (function() {
        var
            _document = document,
            _body = function(){
                if(document.getElementsByTagName("body")[0]){
                    return _document.getElementsByTagName("body")[0];
                } else if(document.getElementsByTagName("head")[0]) {
                    return _document.getElementsByTagName("head")[0];
                }
            },
            _queue = [],
            _loading = false,
            _forceDocumentWrite = /MSIE [789]/.test(navigator.userAgent),
            _history = [],
            _getElemenetAttirbute = function(targetString) {
                var matches = targetString.match(/[a-zA-Z0-9-_]+=(('(\\'|[^'])+?')|("(\\"|[^"])+?"))/ig);
                // var matches = targetString.match(/[a-zA-Z0-9-_]+="(\\"|[^"])+?"/ig);
                // var matches = targetString.match(/[a-zA-Z0-9-_]+='(\\'|[^'])+?'/ig);
                if (matches === null) {
                    return null;
                }
                var attrs = [];
                for (var i=0, l=matches.length; i<l; i++) {
                    var matche = matches[i].match(/^([a-zA-Z0-9-_]+)=['"](..*)['"]$/);
                    if (matche === null) {
                        continue;
                    }
                    attrs.push({name: matche[1].toLowerCase(), value: matche[2]});
                }
                return attrs;
            },
            _loadQueue = function() {
                _loading = true;
                var
                    el = _queue.shift(),
                    done = false;
                el.onload = el.onreadystatechange = el.onerror = function() {
                    if (!done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
                        done = true;
                        this.onload = this.onreadystatechange = this.onerror = null;
                        _history.push("loaded :" + this.src);
                        if ((_loading = _queue.length > 0)) {
                            _loadQueue();
                        }
                    }
                }
                _history.push("loading:" + el.src);
                var target = _body();
                if(target) {
                    target.appendChild(el);
                }
            };
        this.load = function(targetString) {
            if (_forceDocumentWrite) {
                _history.push("write:" + targetString);
                return void _document.write(targetString);
            }
            // _history.push("targetString:" + targetString);
            var attrs = _getElemenetAttirbute(targetString);
            if (attrs === null) {
                return null;
            }
            var el = _document.createElement("script");
            for (var i=0, l=attrs.length; i<l; i++) {
                el.setAttribute(attrs[i].name, attrs[i].value);
            }
            _queue.push(el);
            if (_loading) {
                return;
            }
            _loadQueue();
        };
        this.history = function() {
            console.log(_history);
        };
        this.forceDocumentWrite = function(targetString) {
            return _forceDocumentWrite;
        };
    })());
})(window);
/**
 * Created by Khadka.Narayan on 2017/10/11.
 * //chrome 61対応用に作成したモジュールscrollLeft、scrollTop
 */
(function(window) {
    "use strict";
    var Element = function() {
        var
            _self = this,
            _window = window,
            _isAndroidDefaultBrowser = _judgeAndroidDefaultBrowser(_window.navigator.userAgent);

        /**
         * Gets the scroll top.
         * @param      Element element DOM要素
         * @return     int  DOM要素はnullまたはbody要素のときはwindowscroll量を返す。
         *                  DOM要素がnullではないかつbody要素以外のときはy座標のスクロール量返す。
         */
        this.getScrollTop = function(element) {
            return _self.getScroll(element).y;
        };
        /**
         * Gets the scroll left.
         * @param      Element element DOM要素
         * @return     int DOM要素はnullまたはbody要素のときはwindowscroll量を返す。
         *                 DOM要素がnullではないかつbody要素以外のときはx座標のスクロール量返す。
         */
        this.getScrollLeft = function(element) {
            return _self.getScroll(element).x;
        };

        /**
         * Gets the scroll.
         * @param      {Element} element domElement
         * @return     Object  element はnullまたはbody要素のときはwindowscrollのx座標、y座標の量を返す。
         *                     element　がnullではないかつbody要素以外のときはそのelementscrollx座標、y座標の量を返す
         */
        this.getScroll = function(element) {
            if (element != null && !_isWindow(element) && !_isBody(element)) {
                return {x: element.scrollLeft, y: element.scrollTop};
            }
            var targetWindow = _window;
            if (_isWindow(element)) {
                targetWindow = element;
            }
            if ("scrollingElement" in targetWindow.document) {
                return {x: targetWindow.document.scrollingElement.scrollLeft, y: targetWindow.document.scrollingElement.scrollTop}
            }else if (targetWindow.pageYOffset !== undefined) {
                return {x: targetWindow.pageXOffset, y: targetWindow.pageYOffset};
            }
            var target = (targetWindow.document.documentElement || targetWindow.document.body.parentNode || targetWindow.document.body)
            if (target != null) {
                return {x: target.scrollLeft, y: target.scrollTop};
            }
            return {x: 0, y: 0};
        };

        /**
         * Sets the scroll top.
         * @param      int      y       y座標のスクロール量
         * @param      Element  element DOM要素
         */
        this.setScrollTop = function (y, element) {
            if (!_isAndroidDefaultBrowser) {
                return void (_getTargetElement(element).scrollTop = y);
            }
            if (element != null && !_isWindow(element) && !_isBody(element)) {
                return void (element.scrollTop = y);
            }
            var targetWindow = _window;
            if (_isWindow(element)) {
                targetWindow = element;
            }
            (targetWindow.document.scrollingElement || targetWindow.document.documentElement || targetWindow.document.body.parentNode).scrollTop = y;
            targetWindow.document.body.scrollTop = y;
        };

        /**
         * Sets the scroll left.
         * @param      int      x       x座標のスクロール量
         * @param      Element  element DOM要素
         */
        this.setScrollLeft = function (x, element) {
            if (!_isAndroidDefaultBrowser) {
                return void (_getTargetElement(element).scrollLeft = x);
            }
            if (element != null && !_isWindow(element) && !_isBody(element)) {
                return void (element.scrollLeft = x);
            }
            var targetWindow = _window;
            if (_isWindow(element)) {
                targetWindow = element;
            }
            (targetWindow.document.scrollingElement || targetWindow.document.documentElement || targetWindow.document.body.parentNode).scrollLeft = x;
            targetWindow.document.body.scrollLeft = x;
        };

        /**
         * Gets the target element.
         * @param      Element  element  DOM要素
         * @return     Element  DOM要素を返す
         */
        function _getTargetElement (element){
            if (element != null && !_isWindow(element) && !_isBody(element)) {
                return element;
            }
            var targetWindow = _window;
            if (_isWindow(element)) {
                targetWindow = element;
            }
            return targetWindow.document.scrollingElement || targetWindow.document.documentElement || targetWindow.document.body.parentNode || targetWindow.document.body;
        }
        /**
         * Is window object
         */
        function _isWindow(element) {
            return (element != null && "window" in element);
        }
        /**
         * Is body element
         * @param  {Element} element domElement
         * @return bool
         */
        function _isBody(element) {
            return (element != null && "tagName" in element && element.tagName.toLowerCase() === "body");
        }

        /**
         * Is android default browser
         * @param  string ua useragent
         * @return bool
         */
        function _judgeAndroidDefaultBrowser(ua) {
            ua = ua.toLowerCase();
            if (!/android/.test(ua)) {
                return false;
            }
            // var webkitVersion = parseInt(/WebKit\/([0-9]+)|$/.exec(navigator.appVersion)[1], 10);
            return (/linux; u;/.test(ua) && !/chrome/.test(ua)) || (/chrome/.test(ua) && /version/.test(ua)) || (/chrome/.test(ua) && /samsungbrowser/.test(ua));
        }
    };
    !window.Sctv && (window.Sctv = {});
    !window.Sctv.Util && (window.Sctv.Util = {});
    !window.Sctv.Util.Element && (window.Sctv.Util.Element = new Element(window));
})(window);
var FormAssist_1tag = {
    data: {},
    set: {},
    query: function(url) {
        var data = new Array();
        if (document.URL.indexOf("FormAssist[mode]") != -1) {
            var q1 = document.URL.split("?");
            var q2 = q1[1].split("&");
            for (var i = 0; i < q2.length; i++) {
                var q3 = q2[i].split("=");
                if (q3[0].match(/^FormAssist\[(.*?)\]/)) {
                    data[RegExp.$1] = FormAssist_1tag.zei(q3[1]);
                }
            }
        } else if (url.src.match(/\?/)) {
            var q1 = url.src.split("?");
            var q2 = q1[1].split("&");
            for (var i = 0; i < q2.length; i++) {
                var q3 = q2[i].split("=");
                data[q3[0]] = FormAssist_1tag.zei(q3[1]);
            }
        } else if (!data['user'] || !data['page']) {
            var q1 = url.id.split("/");
            data['user'] = FormAssist_1tag.zei(q1[0]);
            data['page'] = FormAssist_1tag.zei(q1[1]);
            data['cv'] = FormAssist_1tag.zei(q1[2]);
        }
        return data;
    },
    browser_check: function() {
        if (navigator.userAgent.indexOf("Safari/85") != -1) {
            return true;
        } else if (navigator.userAgent.indexOf("Safari/1") != -1) {
            return true;
        } else if (navigator.userAgent.indexOf("Safari/2") != -1) {
            return true;
        } else if (navigator.userAgent.indexOf("Safari/3") != -1) {
            return true;
        } else if (navigator.userAgent.indexOf("Safari/4") != -1) {
            return true;
        }
    },
    cookie: {
        name: 'FormAssist_1tag',
        day: 0,
        hour: 6,
        min: 0,
        sec: 0,
        date: function() {
            var exp = new Date();
            exp.setTime(exp.getTime() + (FormAssist_1tag.cookie.day * 1000 * 60 * 60 * 24) + (FormAssist_1tag.cookie.hour * 1000 * 60 * 60) + (FormAssist_1tag.cookie.min * 1000 * 60) + (FormAssist_1tag.cookie.sec * 1000));
            return exp.toGMTString();
        },
        secure: function() {
            if (document.location.toString().match(/^https/)) {
                return 'secure';
            } else {
                return '';
            }
        },
        set: function(nm, val) {
            document.cookie = nm + "\=" + val + ";path=/;expires\=" + FormAssist_1tag.cookie.date();
            return;
        },
        val: function(nm) {
            var ck0 = document.cookie.split(" ").join("");
            var ck1 = ck0.split(";");
            for (var i = 0; i < ck1.length; i++) {
                var ck2 = ck1[i].split("=");
                if (ck2[0] == nm) {
                    return ck2[1];
                }
            }
            return '';
        },
        read: function() {
            var ck0 = document.cookie.split(" ").join("");
            var ck1 = ck0.split(";");
            for (var i = 0; i < ck1.length; i++) {
                var ck2 = ck1[i].split("=");
                if (ck2[0] == FormAssist_1tag.cookie.name) {
                    ck2[1] = FormAssist_1tag.zei(ck2[1]);
                    return ck2[1];
                }
            }
            return '';
        },
        domain: function() {
            var url = location.hostname.split(".");
            var num = 2;
            if (location.hostname.match(/[.co.jp|.ed.jp|.ac.jp|.go.jp|.or.jp|.co.uk|.me.uk|.org.uk]$/)) {
                num = 3;
                return "." + url.splice((url.length - num), num).join(".");
            } else if (location.hostname.match(/[.com|.net|.jp|.org|.biz|.info|.mobi|.us|.bz|.tv|.cc|.me|.in|.asia|.tel|.cx|.cz|.am|.fm|.ac|.sc|.vc|.vg|.cn|.tw|.mu|.ms|.mn|.hn|.la|.gs|.ws|.be]$/)) {
                num = 2;
                return "." + url.splice((url.length - num), num).join(".");
            } else {
                return location.hostname;
            }
        }
    },
    zei: function(val) {
        if (!val) {
            return val;
        }
        val = val.split("\r").join("");
        val = val.split("\n").join("");
        val = val.split("<").join("-");
        val = val.split("%3c").join("-");
        val = val.split("%3C").join("-");
        val = val.split(">").join("-");
        val = val.split("%3e").join("-");
        val = val.split("%3E").join("-");
        return val;
    },
    tagSelect: function() {
        var cookie_value = FormAssist_1tag.cookie.read();
        if (cookie_value == 'view') {
            FormAssist_1tag.tag_view();
        } else if (cookie_value == 'log') {
            FormAssist_1tag.tag_log();
        } else {
            FormAssist_1tag.tag_nomal();
        }
    },
    tag_nomal: function() {
        var rand = Math.floor(Math.random() * 100 + 1);
        var cookie = 'view';
        var cumulo = 0;
        for (var num in FormAssist_1tag.tags) {
            if (FormAssist_1tag.tags[num]['rate'] > 0) {
                cumulo += (FormAssist_1tag.tags[num]['rate'] * 1);
                if (rand <= cumulo) {
                    if (FormAssist_1tag.tags[num]['log'] == 1) {
                        cookie = 'log';
                    }
                    FormAssist_1tag.tagView(query['user'], FormAssist_1tag.tags[num]['page'], cookie);
                    return;
                }
            }
        }
    },
    tag_view: function() {
        var log_rate = 0;
        for (var num in FormAssist_1tag.tags) {
            if (FormAssist_1tag.tags[num]['log'] == 1) {
                log_rate = FormAssist_1tag.tags[num]['rate'];
            }
        }
        var rand = Math.floor(Math.random() * (100 - log_rate) + 1);
        var cookie = 'view';
        var cumulo = 0;
        for (var num in FormAssist_1tag.tags) {
            if ((FormAssist_1tag.tags[num]['rate'] > 0 && FormAssist_1tag.tags[num]['log'] != 1) || (FormAssist_1tag.tags[num]['rate'] == 100)) {
                cumulo += (FormAssist_1tag.tags[num]['rate'] * 1);
                if (rand <= cumulo) {
                    FormAssist_1tag.tagView(query['user'], FormAssist_1tag.tags[num]['page'], cookie);
                    return;
                }
            }
        }
    },
    tag_log: function() {
        var rand = Math.floor(Math.random() * 100 + 1);
        var cookie = 'log';
        var cumulo = 0;
        var flg = 0;
        for (var num in FormAssist_1tag.tags) {
            if (FormAssist_1tag.tags[num]['rate'] > 0) {
                cumulo += (FormAssist_1tag.tags[num]['rate'] * 1);
                if (FormAssist_1tag.tags[num]['log'] == 1) {
                    FormAssist_1tag.tagView(query['user'], FormAssist_1tag.tags[num]['page'], cookie);
                    return;
                }
            }
        }
        if (flg == 0) {
            FormAssist_1tag.tagView(query['user'], FormAssist_1tag.tags[num]['page'], 'view');
        }
    },
    tagView: function(user, page, cookie) {
        FormAssist_1tag.cookie.set(FormAssist_1tag.cookie.name, cookie);

        //todo 削除テスト
        if(query['user'] == 'nta' || query['user'] == 'hokusen'  || FormAssist_1tag.cookie.val('FormAssist_AppendTEST')) {
            Sctv.Util.Loader.load("<script type='text/javascript' charset='Shift_jis' src='" + FormAssist_1tag.uri + "FormAssistOneTag.php?user=" + user + "&page=" + page + "&tmp=" + FormAssist_1tag.Bench_Start + "'></script>");
        }
        else {
            document.write("<script type='text/javascript' charset='Shift_jis' src='" + FormAssist_1tag.uri + "user/" + user + "/tag/" + page + ".js?tmp=" + FormAssist_1tag.Bench_Start + "' ></script>");
        }
    },
    bench: {
        start: (new Date()).getTime()
    },
    log_mode: '',
    src: document.getElementsByTagName("script"),
    program: 'FormAssist_tag',
    charset: 'SJIS',
    Bench_Start: (new Date()).getTime()
};
for (var i = FormAssist_1tag.src.length - 1; i >= 0; i--) {
    if (FormAssist_1tag.src[i].src.match("(.*)" + FormAssist_1tag.program + ".js")) {
        FormAssist_1tag.uri = RegExp.$1;
        var query = FormAssist_1tag.query(FormAssist_1tag.src[i]);

        //todo 削除テスト
        if(query['user'] == 'nta' || query['user'] == 'hokusen' || FormAssist_1tag.cookie.val('FormAssist_AppendTEST')){
            Sctv.Util.Loader.load("<script type='text/javascript' charset='Shift_jis' src='" + FormAssist_1tag.uri + "user/" + query['user'] + "/data/" + query['num'] + ".js?tmp=" + FormAssist_1tag.Bench_Start + "'></script>");
        }
        else {
            document.write("<script type='text/javascript' charset='Shift_jis' src='" + FormAssist_1tag.uri + "user/" + query['user'] + "/data/" + query['num'] + ".js?tmp=" + FormAssist_1tag.Bench_Start + "'></script>");
        }
        break;
    }
}
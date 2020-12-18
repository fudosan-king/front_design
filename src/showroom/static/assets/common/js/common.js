
/*!
 * common.js - CHRONICLE（共通スクリプト）
 * 動作環境： Windows / Macintosh / iPad / iPhone / Android
 * 対応ブラウザ： 標準ブラウザ / GoogleChrome / Firefox / Safari / Opera / IE11 / IE10 / IE9 / IE8
 * --------------------
 * @version: 1.0
 * @author : K.saruta
 * --------------------
 */

(function() {
  var _isMobile, _sp, _u, _ua, dataUriInfo, screenInfo, selector, selector_n, userAgent;

  window.SITE_URL = location.protocol + '//' + location.host + '/';

  window.ASSETS_DIR = SITE_URL + 'assets/';

  window.COMMON_DIR = ASSETS_DIR + 'common/';

  window.COMMON_IMG_DIR = COMMON_DIR + 'images/';

  window.COMMON_JS_DIR = COMMON_DIR + 'js/';

  window.PC_DIR = ASSETS_DIR + 'pc/';

  window.SP_DIR = ASSETS_DIR + 'sp/';

  window.PC_IMG_DIR = PC_DIR + 'images/';

  window.SP_IMG_DIR = SP_DIR + 'images/';

  window.PC_JS_DIR = PC_DIR + 'js/';

  window.SP_JS_DIR = SP_DIR + 'js/';

  window.PC_CSS_DIR = PC_DIR + 'css/';

  window.SP_CSS_DIR = SP_DIR + 'css/';

  _u = navigator.userAgent.toUpperCase();

  _isMobile = -1 !== _u.indexOf("IPHONE") || -1 !== _u.indexOf("ANDROID") && -1 !== _u.indexOf("MOBILE");

  window.redirectPC = function(url) {
    return _isMobile || (location.href = url);
  };

  window.redirectSP = function(url) {
    return _isMobile && (location.href = url);
  };

  selector = function(u, n) {
    var data, e, l, updateScreen;
    e = document.documentElement;
    l = [];
    n = (n ? n : "");
    userAgent.ua = u.toLowerCase();
    l = l.concat(userAgent.getPlatform());
    l = l.concat(userAgent.getMobile());
    l = l.concat(userAgent.getBrowser());
    l = l.concat(userAgent.getIpadApp());
    l = l.concat(userAgent.getLang());
    l = l.concat(screenInfo.getPixelRatio());
    l = l.concat(screenInfo.getInfo());
    l = l.concat(["js"]);
    updateScreen = function() {
      e.className = e.className.replace(RegExp(" ?orientation_\\w+", "g"), "").replace(RegExp(" [min|max|cl]+[w|h]_\\d+", "g"), "");
      return e.className = e.className + " " + screenInfo.getInfo().join(" ");
    };
    if (window.addEventListener) {
      window.addEventListener("resize", updateScreen);
      window.addEventListener("orientationchange", updateScreen);
    } else {
      window.attachEvent("resize", updateScreen);
      window.attachEvent("orientationchange", updateScreen);
    }
    data = dataUriInfo.getImg();
    data.onload = data.onerror = function() {
      return e.className += " " + dataUriInfo.checkSupport().join(" ");
    };
    if (!Array.prototype.filter) {
      Array.prototype.filter = function(fun) {
        "use strict";
        var i, len, res, t, thisp, val;
        if (this === void 0 || this === null) {
          throw new TypeError();
        }
        t = Object(this);
        len = t.length >>> 0;
        if (typeof fun !== "function") {
          throw new TypeError();
        }
        res = [];
        thisp = arguments[1];
        i = 0;
        while (i < len) {
          if (i in t) {
            val = t[i];
            if (fun.call(thisp, val, i, t)) {
              res.push(val);
            }
          }
          i++;
        }
        return res;
      };
    }
    l = l.filter(function(e) {
      return e;
    });
    l[0] = (n ? n + l[0] : l[0]);
    e.className = l.join(" " + n);
    return e.className;
  };

  userAgent = {
    ua: "",
    is: function(t) {
      return RegExp(t, "i").test(userAgent.ua);
    },
    version: function(p, n) {
      var i, v;
      n = n.replace(".", "_");
      i = n.indexOf("_");
      v = "";
      while (i > 0) {
        v += " " + p + n.substring(0, i);
        i = n.indexOf("_", i + 1);
      }
      v += " " + p + n;
      return v;
    },
    getPlatform: function() {
      var is_, ua, ver;
      ua = userAgent.ua;
      ver = userAgent.version;
      is_ = userAgent.is;
      return [(is_("ipad|ipod|iphone") ? (/CPU( iPhone)? OS (\d+[_|\.]\d+([_|\.]\d+)*)/i.test(ua) ? "ios" + ver("ios", RegExp.$2) : "") + " " + (/(ip(ad|od|hone))/g.test(ua) ? RegExp.$1 : "") : (is_("mac") ? "mac" + (/mac os x ((\d+)[.|_](\d+))/.test(ua) ? " mac" + RegExp.$2 + " mac" + RegExp.$1.replace(".", "_") : "") : (is_("win") ? "win" + (is_("windows nt 6.3") ? " win8_1" : (is_("windows nt 6.2") ? " win8" : (is_("windows nt 6.1") ? " win7" : (is_("windows nt 6.0") ? " vista" : (is_("windows nt 5.2") || is_("windows nt 5.1") ? " win_xp" : (is_("windows nt 5.0") ? " win_2k" : (is_("windows nt 4.0") || is_("WinNT4.0") ? " win_nt" : ""))))))) : (is_("freebsd") ? "freebsd" : (is_("x11|linux") ? "linux" : (is_("playbook") ? "playbook" : (is_("kindle|silk") ? "kindle" : (is_("playbook") ? "playbook" : (is_("j2me") ? "j2me" : "")))))))))];
    },
    getMobile: function() {
      var is_;
      is_ = userAgent.is;
      return [(is_("android|iphone|ipod|ipad|mobi|mobile|j2me|blackberry|playbook|kindle|silk") ? "mobile" : "")];
    },
    getBrowser: function() {
      var a, b, c, d, f, g, is_, o, s, ua, w;
      g = "gecko";
      w = "webkit";
      c = "chrome";
      f = "firefox";
      s = "safari";
      o = "opera";
      a = "android";
      b = "blackberry";
      d = "device_";
      ua = userAgent.ua;
      is_ = userAgent.is;
      return [(!(/opera|webtv|firefox/i.test(ua)) && /trident|msie/i.test(ua) && /(msie\s|rv\:)(\d+)/.test(ua) ? "ie ie" + (/trident\/4\.0/.test(ua) ? "8" : RegExp.$2) : (is_("firefox/") ? g + " " + f + (/firefox\/((\d+)(\.(\d+))(\.\d+)*)/.test(ua) ? " " + f + RegExp.$2 + " " + f + RegExp.$2 + "_" + RegExp.$4 : "") : (is_("gecko/") ? g : (is_("opera") ? o + (/version\/((\d+)(\.(\d+))(\.\d+)*)/.test(ua) ? " " + o + RegExp.$2 + " " + o + RegExp.$2 + "_" + RegExp.$4 : (/opera(\s|\/)(\d+)\.(\d+)/.test(ua) ? " " + o + RegExp.$2 + " " + o + RegExp.$2 + "_" + RegExp.$3 : "")) : (is_("konqueror") ? "konqueror" : (is_("blackberry") ? b + (/Version\/(\d+)(\.(\d+)+)/i.test(ua) ? " " + b + RegExp.$1 + " " + b + RegExp.$1 + RegExp.$2.replace(".", "_") : (/Blackberry ?(([0-9]+)([a-z]?))[\/|;]/g.test(ua) ? " " + b + RegExp.$2 + (RegExp.$3 ? " " + b + RegExp.$2 + RegExp.$3 : "") : "")) : (is_("android") ? a + (/Version\/(\d+)(\.(\d+))+/i.test(ua) ? " " + a + RegExp.$1 + " " + a + RegExp.$1 + RegExp.$2.replace(".", "_") : "") + (/Android (.+); (.+) Build/i.test(ua) ? " " + d + (RegExp.$2.replace(RegExp(" ", "g"), "_")).replace(/-/g, "_") : "") : (is_("chrome") ? w + " " + c + (/chrome\/((\d+)(\.(\d+))(\.\d+)*)/.test(ua) ? " " + c + RegExp.$2 + (RegExp.$4 > 0 ? " " + c + RegExp.$2 + "_" + RegExp.$4 : "") : "") : (is_("iron") ? w + " iron" : (is_("applewebkit/") ? w + " " + s + (/version\/((\d+)(\.(\d+))(\.\d+)*)/.test(ua) ? " " + s + RegExp.$2 + " " + s + RegExp.$2 + RegExp.$3.replace(".", "_") : (RegExp(" Safari\\/(\\d+)", "i").test(ua) ? (RegExp.$1 === "419" || RegExp.$1 === "417" || RegExp.$1 === "416" || RegExp.$1 === "412" ? " " + s + "2_0" : (RegExp.$1 === "312" ? " " + s + "1_3" : (RegExp.$1 === "125" ? " " + s + "1_2" : (RegExp.$1 === "85" ? " " + s + "1_0" : "")))) : "")) : (is_("mozilla/") ? g : "")))))))))))];
    },
    getIpadApp: function() {
      var is_;
      is_ = userAgent.is;
      return [(is_("ipad|iphone|ipod") && !is_("safari") ? "ipad_app" : "")];
    },
    getLang: function() {
      var ua;
      ua = userAgent.ua;
      return [(/[; |\[](([a-z]{2})(\-[a-z]{2})?)[)|;|\]]/i.test(ua) ? ("lang_" + RegExp.$2).replace("-", "_") + (RegExp.$3 !== "" ? (" " + "lang_" + RegExp.$1).replace("-", "_") : "") : "")];
    }
  };

  screenInfo = {
    width: (window.outerWidth || document.documentElement.clientWidth) - 15,
    height: window.outerHeight || document.documentElement.clientHeight,
    screens: [0, 768, 980, 1200],
    screenSize: function() {
      var array, i, maxw, minw, screens;
      screenInfo.width = (window.outerWidth || document.documentElement.clientWidth) - 15;
      screenInfo.height = window.outerHeight || document.documentElement.clientHeight;
      screens = screenInfo.screens;
      i = screens.length;
      array = [];
      maxw = void 0;
      minw = void 0;
      while (i--) {
        if (screenInfo.width >= screens[i]) {
          if (i) {
            array.push("minw_" + screens[i]);
          }
          if (i <= 2) {
            array.push("maxw_" + (screens[i + 1] - 1));
          }
          break;
        }
      }
      return array;
    },
    getOrientation: function() {
      if (screenInfo.width < screenInfo.height) {
        return ["orientation_portrait"];
      } else {
        return ["orientation_landscape"];
      }
    },
    getInfo: function() {
      var array;
      array = [];
      array = array.concat(screenInfo.screenSize());
      array = array.concat(screenInfo.getOrientation());
      return array;
    },
    getPixelRatio: function() {
      var array, pixelRatio;
      array = [];
      pixelRatio = (window.devicePixelRatio ? window.devicePixelRatio : 1);
      if (pixelRatio > 1) {
        array.push("retina_" + parseInt(pixelRatio) + "x");
        array.push("hidpi");
      } else {
        array.push("no-hidpi");
      }
      return array;
    }
  };

  dataUriInfo = {
    data: new Image(),
    div: document.createElement("div"),
    isIeLessThan9: false,
    getImg: function() {
      dataUriInfo.data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
      dataUriInfo.div.innerHTML = "<!--[if lt IE 9]><i></i><![endif]-->";
      dataUriInfo.isIeLessThan9 = dataUriInfo.div.getElementsByTagName("i").length === 1;
      return dataUriInfo.data;
    },
    checkSupport: function() {
      if (dataUriInfo.data.width !== 1 || dataUriInfo.data.height !== 1 || dataUriInfo.isIeLessThan9) {
        return ["no-datauri"];
      } else {
        return ["datauri"];
      }
    }
  };

  selector_n = selector_n || "";

  selector(navigator.userAgent, selector_n);

  _ua = userAgent.getBrowser().join(" ");

  window.browserType = _ua.split(/\s/);

  _sp = userAgent.getPlatform().join(" ");

  window.smartphoneType = _sp.split(/\s/);

}).call(this);


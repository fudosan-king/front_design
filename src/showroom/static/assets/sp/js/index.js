
/*!
 * index.js - CHRONICLE（ショールームページスクリプト）
 * 動作環境： iPad / iPhone / Android
 * 対応ブラウザ： 標準ブラウザ / GoogleChrome
 * --------------------
 * @version: 1.0
 * @author : K.saruta
 * --------------------
 */

(function() {
  (function($) {
    $("#slider").responsiveSlides({
      auto: true,
      pager: true,
      speed: 800,
      namespace: "slider-btn"
    });
    if (smartphoneType[3] === "iphone") {

    } else {

    }
  })(jQuery);

}).call(this);


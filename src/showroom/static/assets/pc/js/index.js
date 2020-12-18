
/*!
 * index.js - CHRONICLE（ショールームページスクリプト）
 * 動作環境： Windows / Macintosh
 * 対応ブラウザ： GoogleChrome / Firefox / Safari / Opera / IE11 / IE10 / IE9 / IE8
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
    if (browserType[1] === "ie8" || browserType[1] === "ie7") {

    } else {

    }
  })(jQuery);

}).call(this);


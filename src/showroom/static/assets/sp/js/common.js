
/*!
 * common.js - CHRONICLE（SP共通スクリプト）
 * 動作環境： iPad / iPhone / Android
 * 対応ブラウザ： 標準ブラウザ / GoogleChrome
 * --------------------
 * @version: 1.0
 * @author : K.saruta
 * --------------------
 */

(function() {
  (function($) {
    var $pagetop;
    $pagetop = $('#pagetop');
    $pagetop.click(function() {
      $('body, html').stop().animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    $('#gNav .menu').on('click', function() {
      $(this).next('ul').stop().slideToggle();
      return $(this).children('span').toggleClass('open');
    });
    if (smartphoneType[3] === "iphone") {

    } else {

    }
  })(jQuery);

}).call(this);


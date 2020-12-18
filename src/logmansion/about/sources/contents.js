//----------------------------------------------------
//
// CONTENTS -contents共通JS (トップページ以外)-
// (contents.js)
//
// ----------------------------------------------------


// 01.サイド・スクロール追従
// ----------------------------------------------------

jQuery(function($){
$('#boxPageNav').exFlexFixed({
container : '#division'
});
});


// 02.アコーディオンメニュー
// ----------------------------------------------------

$(function(){
  $("#boxAccMenu > dt").on("click", function() {
      $(this).next().slideToggle();
      $(this).toggleClass("active");
  });
});


// 02-2.スマホ画面・アコーディオンメニュー
// ----------------------------------------------------

//アコーディオンメニュー
// $(function(){
//     $(".lt640 .btnAcc").live("click", function() {
//       $(this).toggleClass("active");
//       var targetBtn = $(this).parent();
//       var targetContentWrap = $(targetBtn).next(".boxAccCont");
//       $(targetContentWrap).slideToggle();
//     });
// });


// 03.チェックボックスすべて選択
// ----------------------------------------------------

$(function() {
  $('#allcheck').on("click",function(){
    $('.resultcheck').prop("checked", $(this).prop("checked"));
  });
});

// *** editor by dev ***
$(function() {
  $('#allcheck_header').on("click",function(){
    $('.resultcheck').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_center').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_footer').prop("checked", $(this).prop("checked")).end();
  });

  $('#allcheck_center').on("click",function(){
    $('.resultcheck').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_header').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_footer').prop("checked", $(this).prop("checked")).end();
  });

  $('#allcheck_footer').on("click",function(){
    $('.resultcheck').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_header').prop("checked", $(this).prop("checked")).end();
    $('#allcheck_center').prop("checked", $(this).prop("checked")).end();
  });
});

$(function() {
  $('.bulk-order-header').on('click', function(e) {
    var ids = $('[name=resultcheck]:checked').map(function() { return $(this).val(); }).get();
    if(ids.length === 0)
      return;
    var $anchor = $('#thick-bulk-order');
    var href = $anchor.attr('href').replace(/e=[^&]*/, 'material=1&e=' + ids.join(','));
    $anchor.attr('href', href);
    setTimeout(function() {
      window.location.href = $anchor.attr('href');
    });
  });
  $('.bulk-order-center').on('click', function(e) {
    var ids = $('[name=resultcheck]:checked').map(function() { return $(this).val(); }).get();
    if(ids.length === 0)
      return;
    var $anchor = $('#thick-bulk-order');
    var href = $anchor.attr('href').replace(/e=[^&]*/, 'e=' + ids.join(','));
    $anchor.attr('href', href);
    setTimeout(function() {
      window.location.href = $anchor.attr('href');
    });
  });
  $('.bulk-order-footer').on('click', function(e) {
    var ids = $('[name=resultcheck]:checked').map(function() { return $(this).val(); }).get();
    if(ids.length === 0)
      return;
    var $anchor = $('#thick-bulk-order');
    var href = $anchor.attr('href').replace(/e=[^&]*/, 'e=' + ids.join(','));
    $anchor.attr('href', href);
    setTimeout(function() {
      window.location.href = $anchor.attr('href');
    });
  });
});

$(function(){
  $('.limit-changer').on('change', function() {
    location.href = $(this).find(':selected').data('href');
  });
});
// *** end ***

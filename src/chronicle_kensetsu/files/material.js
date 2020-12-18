
/* -------- MATERIAL PC・メインビジュアル　画像切り替え -------- */
/* TAB */
$(function(){
  $("#topmainMaterial .boxSlidetabs").tabs("#topmainMaterial .boxItem", {effect: 'fade'});
});

/* SlideShow */
$(function() {
  $("#topmainMaterial .boxSlidetabs").tabs("#topmainMaterial .boxContWrap > .boxItem", {
    // enable "cross-fading" effect
    effect: 'fade',
    fadeInSpeed: "slow",
    fadeOutSpeed: "slow",

    // start from the beginning after the last tab
    rotate: true

  // use the slideshow plugin. It accepts its own configuration
  }).slideshow({
    // スライドショープラグインの追加
    next: ".forward",           // 前ボタンのクラス名
    prev: ".backward",          // 次ボタンのクラス名
    disabledClass: "disabled",  // 無効化した時のクラス名
    autoplay: true,            // 自動再生の初期値
    autopause: true,            // ロールオーバーで自動再生を停止するか
    interval: 4000,             // 自動再生速度（ミリ秒）
    clickable: false,           // パネル自身をクリック可能にするか
    api: false
  });
});


/* -------- MATERIAL スマホ・メインビジュアル　画像切り替え -------- */
$(function() {
    $("#topmainMaterialSmp .boxSelectBtn li").click(function() {
        var num = $("#topmainMaterialSmp .boxSelectBtn li").index(this);
        $("#topmainMaterialSmp .boxContWrap").hide();
        $("#topmainMaterialSmp .boxContWrap").eq(num).fadeIn('slow');
        $("#topmainMaterialSmp .boxSelectBtn > li").removeClass('on');
        $(this).addClass('on')
    });
});
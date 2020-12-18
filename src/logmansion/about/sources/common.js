//----------------------------------------------------
//
// COMMON -全ページ共通JS-
// (commoon.js)
//
// ----------------------------------------------------


// 01.boxリンクホバー
// ----------------------------------------------------

$(document).ready(function() {
  var linkboxes = $(".boxLinkHvr");
    for (var i=0; i<linkboxes.length; i++){
    var readmores = $("p.boxMore");
    for (var j=0; j<readmores.length; j++){
      $(".boxLinkHvr").click(function() {
        var anchorTags = this.getElementsByTagName("a");
        window.location = anchorTags[0].href;
      });
    }
  }
  $("p.boxMore").addClass("disnon");
  $(".boxLinkHvr").hover(function(){
    $(this).addClass("boxHover");
    },
    function(){
    $(this).removeClass("boxHover");
    });
});


// 02.フォーム（フォーカスを当てるとデフォルト文字列が消えるinput）設定
// ----------------------------------------------------

$(function(){
$('textarea,input[type="text"]').focus(function(){
if($(this).val() == this.defaultValue){
$(this).css('color', '#3f200c').val('');
};
})
.blur(function(){
if($(this).val() == this.defaultValue | $(this).val() == ''){
$(this).css('color', '#3f200c').val(this.defaultValue);
};
});
});


// 03-1.スマホ画面・hover効果
// ----------------------------------------------------

jQuery(function($){
    $( 'a, input[type="button"], input[type="submit"], button,#boxGlobalNav .btnOpen' )
      .bind( 'touchstart', function(){
        $( this ).addClass( 'hover' );
    }).bind( 'touchend', function(){
        $( this ).removeClass( 'hover' );
    });
});


// 03-2.スマホ画面・メニュー
// ----------------------------------------------------

$(function(){
	$("#boxGlobalNav .btnOpen").click(function(){
		$("#boxGlobalNav dd").toggleClass("boxMenu");
		});
	$("#boxGlobalNav .btnClose").click(function() {
		$("#boxGlobalNav dd").toggleClass("boxMenu");
		});
});


// 03-3.スマホ画面・電話番号リンク
// ----------------------------------------------------

function smtel(telno){
if((navigator.userAgent.indexOf('iPhone') > 0 ) || navigator.userAgent.indexOf('Android') > 0 ){
document.write('<a class="txtLinkTel" href="tel:'+telno+'" onclick="javascript:goog_report_conversion("tel:'+telno+'"");yahoo_report_conversion(undefined);return false;">'+telno+'</a>');
}else{
document.write('<span class="txtLinkTel">'+telno+'</span>');
}
}


// 03-4.スマホ画面・label
// ----------------------------------------------------

[].forEach.call(document.getElementsByTagName("label"),function(ele){
  ele.addEventListener("click",function(){},false);
});


// 04.スムーススクロール
// ----------------------------------------------------

// $(function(){
//    // #で始まるアンカーをクリックした場合に処理
//    $('a[href^=#]').click(function() {
//       // スクロールの速度
//       var speed = 400; // ミリ秒
//       // アンカーの値取得
//       var href= $(this).attr("href");
//       // 移動先を取得
//       var target = $(href == "#" || href == "" ? 'html' : href);
//       // 移動先を数値で取得
//       var position = target.offset().top;
//       // スムーススクロール
//       $('body,html').animate({scrollTop:position}, speed, 'swing');
//       return false;
//    });
// });


// 05.ページトップへもどるボタン
// ----------------------------------------------------

$(document).ready(function(){

    $("#btnPageTop").hide();
     // ↑ページトップボタンを非表示にする
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
            // ↑ スクロール位置が100よりも小さい場合に以下の処理をする
                $('#btnPageTop').fadeIn(500);
                // ↑ (100より小さい時は)ページトップボタンをスライドダウン
            } else {
                $('#btnPageTop').fadeOut(500);
                // ↑ それ以外の場合の場合はスライドアップする
            }
        });

// フッター固定

    $(window).bind("scroll", function() {

        scrollHeight = $(document).height();
        // ドキュメントの高さ
        scrollPosition = $(window).height() + $(window).scrollTop();
        //　ウィンドウの高さ+スクロールした高さ→　現在のトップからの位置
        footHeight = $("#footerBtm").height();
        // フッターの高さ

        if ( scrollHeight - scrollPosition  <= footHeight ) {
        // 現在の下からの位置が、フッターの高さの位置にはいったら
          $("#btnPageTop").addClass("btm").css({
            "position":"fixed",
            "right": "20px",
            "bottom": "20px"
          });
          //  ".btn-pagetop"のpositionをabsoluteに変更し、フッターの高さの位置にする
          // "bottom"の指定は場合により親要素からみた数値にかえて下さい
        } else {
        // それ以外の場合は元のcssスタイルを指定
          $("#btnPageTop").removeClass("btm").css({
            "position":"fixed",
            "right": "20px",
            "bottom": "20px"
          });
        }
    });

// トップへスムーススクロール

    $('#btnPageTop a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        // ページのトップへ 500 のスピードでスクロールする
        return false;
         });
    });

});

$(function () {
  $('.group').on('change', 'input:checkbox', function () {
    var target = $(this).closest('.group').data('target');
    to_checked = $(target).find('input:checkbox:checked').length ? false : true;
    if (!to_checked) {
      $(this).prop('checked', false);
      alert('地域と路線は同時にお選びいただけません。');
    }
    else {
      if ($(this).hasClass('check-all-subs')) {
        to_checked = $(this).is(':checked');
        $container = $(this).closest('section').find('ul');
        $container.find('input:checkbox').prop('checked', to_checked);
      }
    }
  });
});

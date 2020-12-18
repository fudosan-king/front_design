
/* -------- WORKS PICKUP01　画像切り替え -------- */
$(function() {
    $("#pickup01 .boxSelectBtn li").click(function() {
        var num = $("#pickup01 .boxSelectBtn li").index(this);
        $("#pickup01 .boxContWrap").hide();
        $("#pickup01 .boxContWrap").eq(num).fadeIn('slow');
        $("#pickup01 .boxSelectBtn > li").removeClass('on');
        $(this).addClass('on')
    });
});


/* -------- WORKS PICKUP02　画像切り替え -------- */
$(function() {
    $("#pickup02 .boxSelectBtn li").click(function() {
        var num = $("#pickup02 .boxSelectBtn li").index(this);
        $("#pickup02 .boxContWrap").hide();
        $("#pickup02 .boxContWrap").eq(num).fadeIn('slow');
        $("#pickup02 .boxSelectBtn > li").removeClass('on');
        $(this).addClass('on')
    });
});

/* -------- WORKS タブ切り替え -------- */
(function($) {
$(function() {

    $('ul.boxTabs').each(function() {
        $(this).find('li').each(function(i) {
            $(this).click(function(){
                $(this).addClass('on').siblings().removeClass('on')
                    .parents('div.boxTabsWrap').find('div.boxTab').eq(i).fadeIn('slow').siblings('div.boxTab').hide();
            });
        });
    });

})
})(jQuery)


/* -------- 画像スライド・フェード -------- */
$(function(){
    $(window).load(function(){
        var delaySpeed = 1;
        var fadeSpeed = 500;
        $('.boxImgChange,.boxImgChange02,.boxImgChangePC,.boxImgChangeSmp').each(function(i){
            $(this).delay(i*(delaySpeed)).css({opacity:'0.8'}).animate({opacity:'1'},fadeSpeed);
        });
    });
});


/* -------- TOP ブログタイトル文字数制限 -------- */

$(function(){
    var $setElm = $('.page-top .boxBlog .ttlBlog');
    var cutFigure = '30'; // カットする文字数
    var afterTxt = ' ...'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))

        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});

/* -------- TOP メディアタイトル文字数制限 -------- */

$(function(){
    var $setElm = $('.page-top .boxMedia .ttlMedia');
    var cutFigure = '73'; // カットする文字数
    var afterTxt = ' ...'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))

        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});


/* -------- POST 投稿一覧・投稿タイトルリンク -------- */
 $(function(){
        $(".boxPostList li").hover(function() {
            $(this).toggleClass("btnLinkHover");
        });
    });

/* -------- POST 投稿メニュースマホ用 -------- */
$(function(){
        $("#side .ttlSmp").on("click", function() {
            $(this).next().slideToggle("fast");
            $(this).toggleClass("on");
        });
});



/* -------- フォーム（フォーカスを当てるとデフォルト文字列が消えるinput）設定 -------- */
$(function(){
$('textarea,input[type="text"]').focus(function(){
if($(this).val() == this.defaultValue){
$(this).css('color', '#333').val('');
};
})
.blur(function(){
if($(this).val() == this.defaultValue | $(this).val() == ''){
$(this).css('color', '#888').val(this.defaultValue);
};
});
});
 

/* -------- :hover効果 -------- */
jQuery(function($){
    $( 'a, input[type="button"], input[type="submit"], button,#box-gnav dt.btn-open,#box-gnav p.btn-close' )
      .bind( 'touchstart', function(){
        $( this ).addClass( 'hover' );
    }).bind( 'touchend', function(){
        $( this ).removeClass( 'hover' );
    });
});	


/* -------- スマホ画面メニュー -------- */
$(function(){
	$("#boxGlobalNav dt.btnOpen").click(function(){
		$("#boxGlobalNav dd").toggleClass("boxMenu");
		}); 
	$("#boxGlobalNav dd p.btnClose").click(function() {
		$("#boxGlobalNav dd").toggleClass("boxMenu");
		});
});


/* -------- スマホ用電話番号リンク -------- */
function smtel(telno){
if((navigator.userAgent.indexOf('iPhone') > 0 ) || navigator.userAgent.indexOf('Android') > 0 ){
document.write('<a class="txtLinkTel" href="tel:'+telno+'">'+telno+'</a>');
}else{
document.write('<span class="txtLinkTel">'+telno+'</span>');
}
}


/* -------- スムーススクロール -------- */
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


/* -------- ページトップへもどる -------- */

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

        })
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

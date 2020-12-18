$(function () {
    //初期は非表示
    $("#btnPageTop").hide();
    $(window).scroll(function () {
        //100pxスクロールしたら
        if ($(this).scrollTop() > 100) {
            //フェードインで表示
            $('#btnPageTop').fadeIn();
        } else {
            $('#btnPageTop').fadeOut();
        }
    });
    //ボタン(id:move-page-top)のクリックイベント
   $('#btnPageTop').click(function(){
      //ページトップへ移動する
      $('html,body').animate({scrollTop:0},'slow');
   });
});

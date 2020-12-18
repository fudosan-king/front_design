/**
 * @name main.js
 * @fileOverview
 * @version 1.0
 * @description

 */
//他ライブラリと共存する場合、下の一行削除($無効化)
//jQuery.noConflict();
(function($){
	var config = function () {
	//easyOverのターゲット設定
		$("img.ahover, .ahoverArea img").easyOver();
	//Flash
		//$("object, embed").enableFlash();
	//ポップアップリンクに置換
		$(".commonPop").easyPop();
	//他ドメインリンク時にpageTracker有効化
		//$("a,area").blankLogToGoogle();
	//アンカーリンクをスムージング
		$("a[href^=#]").smoothScroll();
	//対象の要素をスクロールに追従するようにする
		//$("#fixBox").fixPosition("stopperID","normal");
	}
	//onload
	$(function() {
		config();
		switch (jQuery("body").attr("id")) {
			case "pageID":
				//eachPageFunction
			break;
			case "pageID":
				//eachPageFunction
			break;
		}
		
		$('#pNav .menu a').click(function(e){
			e.preventDefault();
			$('#gNav ul').slideToggle(400, function(){
			});
		});
		$('#gNav .close a').click(function(e){
			e.preventDefault();
			$('#gNav ul').slideUp(400);
		});
		
		$(window).scroll(function(){
			if ($(window).scrollTop() > 100) {
				$('#btPagetop').stop().fadeTo(400, 1);
			} else {
				$('#btPagetop').stop().fadeTo(400, 0, function(){
					$('#btPagetop').hide();
				});
			}
		}).scroll();
	});
})(jQuery);
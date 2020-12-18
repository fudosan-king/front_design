
//----------------------------------------------------
//
// ページ内ナビ・カレント表示
//
// ----------------------------------------------------

$(function() {


	// ----------------------------------------------------
	// navカレント表示
	// ----------------------------------------------------

	var box = new Array;
	var current = -1;

	// カレント表示の変更
	function changeBox(secNum) {
		if (secNum != current) {
			current = secNum;
			secNum2 = secNum + 1;
			$("#boxPageNav li a").removeClass("on");
			$("#boxPageNav li:nth-child(" + secNum2 +") a").addClass('on');
		}
	};

	// scroll量での判定
	function scrollCheck() {
		st = $(window).scrollTop()+30;
		if (box.length <= 0) {
			$(".boxPageNav").each(function(i) {
				box[i] = $(this).offset().top;
			});
		};
		for (var i = box.length - 1 ; i >= 0; i--) {
			if (st > box[i]) {
				changeBox(i);
				break;
			}
		};
	}

	// scrollでのカレント表示をon
	$(window).on("load scroll", scrollCheck);


	// ----------------------------------------------------
	// スムーススクロール
	// ----------------------------------------------------

	// ua判定
	var userAgent = window.navigator.userAgent.toLowerCase();
	var webkit = userAgent.indexOf("safari") > -1;

	$("#boxPageNav a").click( function() {

		// scrollでのカレント表示を無効にする
		$(window).off("load scroll", scrollCheck);

		// カレントclassを変更
		$("#boxPageNav li a").removeClass("on");
		$(this).addClass("on");

		// スクロール処理
		var target = $(this).attr("href");
		var targetTop = $(target).offset().top;
		$(webkit ? 'body' : 'html').animate({scrollTop: targetTop}, function() {

			// scrollでのカレント表示を再度有効にする
			$(window).on("load scroll", scrollCheck);

		});

		return false;
	});


});

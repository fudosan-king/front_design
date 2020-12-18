 $(function(){

	$(window).load(function(){
		$("body").css("display","block");

/* ============================
	renewal in 2016/04/15

	01.expand image
	02.global menu	
	03.header
	04.information
	05.swiper slide
	06.accordion menu
	07.footer menu
	08.to page top
	09.inquiry
	10.blog
	99.header height
============================ */


/*　基本、変更するところは↓と、etc swiper slide option　*/
/*　表示件数を変更した場合sp_plus.cssの「.infoBox ul li:nth-child(n + 4) 」も変更　*/

		var info_cnt = '3'; //お知らせのデフォルト表示数（全件表示なら'0'か''）
		var info_more = 'お知らせ'; //お知らせパーツのボタン表記


/* お知らせパーツ風アコーディオンパーツ */

		var g_toggle_cnt = '1'; //お知らせパーツ風のデフォルト表示数（全件表示なら'0'か''）
		var g_toggle_more = '当院の特徴'; //お知らせパーツ風のボタン表記
		

/* 1ページ内に複数スライドショーを入れる場合は↓をコピーしてクラスを変更（cssも追加）*/
		swiper_option('.swiper-container','.swiper-pagination');
		swiper_option('.swiper-container2','.swiper-pagination2');
		swiper_option('.swiper-container3','.swiper-pagination3');


/* アコーディオンの<h3>を次の<h3>とぴったりくっつけたかったら使用する↓ */
		//$(".toggle").css('margin-bottom','0').parent(".box").css('margin-bottom','0');


/* ==============================================================================================
	01.expand image
============================================================================================== */

		$('img.expand').each(function(){
			var image_link = $(this).attr("src");
			$(this).wrap('<a href="' + image_link + '" target="_blank">');
		});



/* ==============================================================================================
	02.global menu	
============================================================================================== */

		if($('.spHoverMenuBtn').length > 0)
		{
			$('.spHoverMenuBtn').html('<img src="http://m3583943.xaas.jp/images/material/s_gnavi_01.png" alt="MENU" class="img100">');
			$('.spHoverMenuCloseBtnArea').remove();
			$('.spHoverMenuBtn').on("click",function(){
				$('.box_fixed, .pgtop, .spHoverMenu').css({'position':"absolute"});
			});
			$('.spMenuBackground, .spHoverMenuCloseBtn, .black_bg').on("click",function(){
				$('.box_fixed, .pgtop, .spHoverMenu').css({'position':"fixed"});
			});
			$(".spMenuTapDisp a").on("click",function(){$(".spMenuTapDisp, .spMenuBackground").hide();});
		}


/* ==============================================================================================
	03.header
============================================================================================== */

		var menu_position = $(".spHoverMenu").css("top");
		var headerHight = $("#fixed").height();
	
		if($(".header_a").length > 0)
		{
			$("#page_block1").css('padding-top',headerHight);
		}
		else if($(".header_b").length > 0)
		{
			var posi = $(".header_b").offset().top;
	
			if ($(window).scrollTop() >= posi)
			{
				$(".header_b").css({
					'position':'fixed',
					'top':0,
					'left':0,
					'width':'100%',
					'z-index':100,
				});
				$("#page_block3").css({
					'padding-top':headerHight,
				});
				$(".spHoverMenu").css({
					'position':'fixed',
					'top':0,
					'left':0,
				});
			}
			else
			{
				$(".header_b").css({
					'position':'relative',
				});
				$("#page_block3").css({
					'padding-top':0,
				});
				$(".spHoverMenu").css({
					'position':'absolute',
					'top':menu_position,
				});
			}
	
			$(window).scroll(function() {
				if ($(window).scrollTop() >= posi)
				{
					$(".header_b").css({
						'position':'fixed',
						'top':0,
						'left':0,
						'width':'100%',
						'z-index':100,
					});
					$("#page_block3").css({
						'padding-top':headerHight,
					});
					$(".spHoverMenu").css({
						'position':'fixed',
						'top':0,
						'left':0,
					});
				}
				else
				{
					$(".header_b").css({
						'position':'relative',
					});
					$("#page_block3").css({
						'padding-top':0,
					});
					$(".spHoverMenu").css({
						'position':'absolute',
						'top':menu_position,
					});
				}
			});
		}
		else if($(".header_c").length > 0)
		{
			$("#page_block5").css('padding-bottom',headerHight);
			$("#page_block5 .pgtop").css('bottom',headerHight + 10);
		}
	
	
	
/* ==============================================================================================
	04.information
============================================================================================== */

		if(info_cnt >= 1 && $(".sp_info_1").length > 0) 
		{
			startTimer();

			var truth_cnt = 0;
			setTimeout(function(){
				$(".infoBox ul li").each(function() {
					++ truth_cnt;
				});

				if(info_cnt < truth_cnt)
				{
					info_cnt ++;

					/*
					var info_title = $(".spInfo h1").text();
					$(".spInfo h1").remove();
					$(".spInfo").prepend('<h3>' + info_title + '</h3>');
					*/
					$(".sp_info_1").append('<div class="text"><p class="info_more info_open">' + info_more + 'をもっと見る</p></div>');
					if($(".info_more").length > 0)
					{
						var flg_info = "close_info";
						
						$(".info_more").on("click",function() {
			
							$(".infoBox ul li:nth-child(n + " + info_cnt + ")").stop().slideToggle(200);
			
							if(flg_info == "close_info")
							{
								$(".info_more").text(info_more + "を閉じる");
								$(".info_more").removeClass("info_open").addClass("info_close");
								flg_info = "open_info";
							}
							else
							{
								$(".info_more").text(info_more + "をもっと見る");
								$(".info_more").removeClass("info_close").addClass("info_open");
								flg_info = "close_info";
							}
							
						});
					}
				}

			},2000);			
		}



/* ==============================================================================================
	05.swiper slide オプション変更は最下部　⇒　etc swiper slide option
============================================================================================== */

		$("[class*='container']").each(function(){
			var mh = 0;
			$(this).find(".swiper-slide").each(function(){
				if($(this).height() < mh || mh == 0){ mh = $(this).height() }
			}).css({
				'height':mh,
			});
		});


/*
		//画像の自動サイズ調整（基本使用しない）
		var mh = 0;
		$('img:last-child').on('load',function(){ 
			$(".swiper-wrapper p img").each(function(){
				if($(this).height() < mh || mh == 0){ mh = $(this).height() }
			});
			$(".swiper-wrapper p img").css({
				'height':mh,
				'width':'auto',
			});
		});
		var timer = false;
		$(window).resize(function() {
			if (timer !== false) {
				clearTimeout(timer);
			}
			timer = setTimeout(function() {
				var mh = 0;
				$(".swiper-wrapper p img").each(function(){
					if($(this).height() < mh || mh == 0){ mh = $(this).height() }
				});
				$(".swiper-wrapper p img").css({
					'height':mh,
					'width':'auto',
				});
			}, 200);
		});
*/


/* ==============================================================================================
	06.accordion menu	
============================================================================================== */

		$(".toggle").parent().wrapInner('<div class="hide">');
		$(".hide").each(function(){
			var tag_h = $(this).html().replace(/\n/g,'').replace(/^<(.*?) (.*?)$/g,'$1');
			var arr = new RegExp("^(.*?)toggle(.*?)>(.*?)<\\/" + tag_h + ">(.*?)$");
			var tag = $(this).html().replace(/\n/g,'').replace(arr,'$1toggle$2>$3</' + tag_h + '>');
			$(".toggle",this).remove();
			$(this).before(tag);
		});
		$(".open").next(".hide").removeClass("hide").addClass("show").removeAttr('style');
		$(".hide").each(function(){
			if($(this).find("[class*=container]").length > 0)
			{
				var data = $(this).html();
				$(this).children().remove();
				$(this).append(data);
			}
		});

		$(".toggle").on("click",function() {
			var _this = $(this);
			_this.next().slideToggle(200,function(){
				if(_this.hasClass("open"))
				{
					var data = _this.next().html();
					_this.removeClass("open");
					_this.next().remove();
					_this.after('<div class="hide">' + data + '</div>');
				}
				else
				{
					_this.addClass("open");
					_this.next().removeClass("hide").addClass("show").removeAttr('style');
					_this.parent().find("[class*=container]").each(function(){
						var option1 = $(this)[0].className.split(" ")[0]; 
						var option2 = $(this).find("[class*=pagination]")[0].className.split(" ")[0];
						swiper_option("." + option1, "." + option2);
					});
				}					
			});
		});

		//汎用アコーディオン
		if($(".g_toggle").length > 0) 
		{
			var flag = "close";
			g_toggle_cnt ++;
			$(".g_toggle_more").on("click",function() {
				$(".g_toggle :nth-child(n + " + g_toggle_cnt + ")").slideToggle(200);
				if(flag == "close")
				{
					$(".g_toggle_more").text(g_toggle_more + "を閉じる");
					$(".g_toggle_more").removeClass("g_toggle_open").addClass("g_toggle_close").removeAttr('style');
					flag = "open";
				}
				else
				{
					$(".g_toggle_more").text(g_toggle_more + "をもっと見る");
					$(".g_toggle_more").removeClass("g_toggle_close").addClass("g_toggle_open").removeAttr('style');
					flag = "close";
				}
			});
		}

		//dlアコーディオン
		$(".dl_toggle dt").on("click",function() {
			var _this = $(this);
			_this.next("dd").slideToggle(200,function(){ 
				if(_this.hasClass("dl_open"))
				{
					_this.removeClass("dl_open").addClass("dl_close").removeAttr('style');
				}
				else
				{
					_this.addClass("dl_open").removeClass("dl_close").removeAttr('style');
				}					
			});
		});



/* ==============================================================================================
	07.footer menu	
============================================================================================== */

		$("[class^='nav_menu'] dd").on("click",function(){
			var href = $(this).find("a").attr("href");
			var target = $(this).find("a").attr("target");
			var host = href.replace(/^(.*?)\/\/(.*?)#(.*?)$/,'$2');
			var path = href.replace(/^(.*?)\/\/(.*?)#(.*?)$/,'$3');
			
			if(target != null){
				window.open(href);
				return false;
			}
			else if (location.hostname + location.pathname == host || host == '')
			{
				var target2 = "#" + path;
				auto_toggle(target2);
				var targetOffset = $(target2).offset().top - headerHight - 10;
				$("html, body").animate({scrollTop:targetOffset}, 550, "swing");
				return false;
			}
			else
			{
				window.location = href;
				return false;
			}
		});



/* ==============================================================================================
	08.to page top
============================================================================================== */

		$('.pgtop').on("click",function() {
			$('html,body').animate({scrollTop:0}, 500);
			return false;
		});
		
		if($("#page_block5 .pgtop").length > 0)
		{
			var timer = false;
			$(window).scroll(function() {
				if (timer !== false) {
					$(".pgtop").fadeOut(500);
					clearTimeout(timer);
				}
				timer = setTimeout(function() {
					if ($(window).scrollTop() > 100)
					{
						$(".pgtop").css('display', 'none').fadeIn(500);
					}
					else
					{
						$(".pgtop").fadeOut(500);
					}	
				}, 200);
			});
		}



/* ==============================================================================================
	09.inquiry
============================================================================================== */

		if($(".spDynamicInputPage").length > 0)
		{
			if($("#inquiryEdit").length > 0)
			{
				$("#inquiryEdit h1").after('<h2 class="mb0"><span>お問い合わせ内容の入力</span></h2>').remove();
			}
			else if($("#inquiryConfirm").length > 0)
			{
				$("#inquiryConfirm h1").after('<h2 class="mb0"><span>お問い合わせ入力の確認</span></h2>').remove();
			}
			else
			{
				if($(".sp_enquete_1").length < 1 && $(".sp_blogList_1").length < 1)
				{
					$(".spDynamicInputPage h1").after('<h3>お問い合わせの送信結果</h3>').remove();
				}
			}
			var ttl = $(".spPageTitle span").text();
			$(".spDynamicInputPage").prepend('<h3 class="mb0">' + ttl + '</h3>');
			$(".spDynamicInputPage .spTopTitle").remove();
		}


/* ==============================================================================================
	10.blog
============================================================================================== */

		if($(".sp_blogList_1").length > 0)
		{
			var title = $(".spDynamicInputPage h1").text();
			$(".spDynamicInputPage h1").after('<h3>' + title + '</h3>').remove();
			$(".spDynamicInputPage h2").remove();
		}
			




/* ==============================================================================================
	99.header height	アンカーリンクでの高さ調整 *** このscriptは自動処理の一番最後に記述
============================================================================================== */

		//$('img:last-child').on('load',function(){ 
			if(location.hash.length > 0){
				auto_toggle(location.hash);
				var target = $(location.hash);
				if($(".header_c").length > 0)
				{
					var position = target.offset().top - 10;
				}
				else
				{
					var position = target.offset().top - headerHight - 10;
				}
				$("html, body").animate({scrollTop:position},10);
				target.parent().find("[class*=container]").each(function(){
					var option1 = $(this)[0].className.split(" ")[0]; 
					var option2 = $(this).find("[class*=pagination]")[0].className.split(" ")[0];
					swiper_option("." + option1, "." + option2);
				});
			} 
		//});

		$('a[href*="#"]').on("click",function(){
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname)
			{
				var target = $(this.hash);
				if(target.length == 0){
					target = $("#page_block1");
				}
				else
				{
					auto_toggle(this.hash);
					if($(".header_c").length > 0)
					{
						var targetOffset = target.offset().top - 10;
					}
					else
					{
						var targetOffset = target.offset().top - headerHight - 10;
					}
					$("html, body").animate({scrollTop:targetOffset}, 550, "swing");
					return false;
				}
			}
		});


	});

});



/* ==============================================================================================
	etc アンカーリンクによるアコーディオン処理
============================================================================================== */

function auto_toggle(id){

	$("#page_block3 .toggle").each(function(){
		$(this).removeClass("open");
		if($(this).next(".show").length > 0 || $(this).next(".hide").length > 0)
		{
			$(this).next().removeClass("show").addClass("hide").removeAttr('style');
		}
		else
		{
			$(this).parents(".show").removeClass("show").addClass("hide").removeAttr('style');
			$(this).parents(".hide").removeClass("hide").addClass("hide").removeAttr('style');
		}
	});

	if($(id).next(".hide").length > 0)
	{
		$(id).addClass("open");
		$(id).next().removeClass("hide").addClass("show").removeAttr('style'); 	
	}
	else
	{
		$(id).parents(".box").find("h3.toggle").addClass("open"); 
		$(id).parents(".hide").removeClass("hide").addClass("show").removeAttr('style'); 
	}
}

/* ==============================================================================================
	etc swiper slide option
============================================================================================== */

function swiper_option(container,pagenation){
	if($(".swiper-wrapper").length > 0)
	{
		var swiper = new Swiper(container, {
			pagination: pagenation,
        	nextButton: '.swiper-button-next',
        	prevButton: '.swiper-button-prev',
			slidesPerView: 1, //ウィンドウ内の画像表示個数
			paginationClickable: true,
			speed: 600,
			autoplay: 3000,
			autoplayDisableOnInteraction: false, //一度触ったらオートプレイを止めるかどうか
			spaceBetween: 0, //画像の隙間
			loop: true,
			autoplayStopOnLast:false  
		});	
	}
}

var testTimer;
function startTimer(){
	testTimer=setInterval(function(){
		if($(".infoBox ul li").text().length > 0)
		{
			console.log("finish");
			stopTimer();
		}
		else
		{
			console.log("try");
		}
	} , 10);
}

function stopTimer(){
	clearInterval(testTimer);
}
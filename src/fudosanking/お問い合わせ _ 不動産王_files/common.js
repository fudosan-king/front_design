// JavaScript Document

var isAndroid = navigator.userAgent.indexOf('Android');
var isPhone = navigator.userAgent.indexOf('iPhone');
var isPod = navigator.userAgent.indexOf('iPod');

$(document).ready(function(){
	//ページの読み込みが完了したら100ミリ秒後に縦に1px移動させる
	setTimeout(scrollTo, 100, 0, 1);

	//android横幅が様々なのでzoomの処理を行う
	if((isAndroid>0 && navigator.userAgent.indexOf('Mobile')==-1) || navigator.userAgent.indexOf('iPad')>0){
		$("meta[name=viewport]").attr("content","width=device-width,maximum-scale=1.0, user-scalable=no");
	}else if(isAndroid>0){		
		$("html").css("zoom",$(window).width()/320);
	}

});


$(function(){
/*------------------------------------------------------
 ▼sp/menu展開
-------------------------------------------------------*/
	$("#spMenubtn").click(function(){
		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$("#spMenuList").fadeOut(300);
		}else{
			$(this).addClass("active");
			$("#spMenuList").fadeIn(300);
		}		
	});

/*------------------------------------------------------
 ▼スクロール時　
-------------------------------------------------------*/
	//追従nav
	var nav = $('#naviset');
	var offset = nav.offset();
	if(nav.size()>0){	
		$(window).scroll(function () {
			if($(window).scrollTop() > offset.top){
				nav.addClass('fixed');
				$("#snav-mini").fadeIn();
			}else{
				nav.removeClass('fixed');
				$("#snav-mini").fadeOut();
			}	
		});
	}
	
	$(window).scroll(function () {	
		//sp/menu閉じる
		$("#spMenuList").fadeOut();

	});

/*------------------------------------------------------
 ▼smooth scrool(#のアンカーリンク対応)
-------------------------------------------------------*/
	$('a[href^=#]').click(function(){
		var speed = 1000;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 125;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});


/*------------------------------------------------------
 ▼slideshow 
-------------------------------------------------------*/
	var setId = '#slideshow';
	var fadeTime = 1000;
	var delayTime = 5000;

	$(setId + ' div div').each(function(i){
		$(this).attr('id','view' + (i + 1).toString());
		$(setId + ' div div').css({zIndex:'98',opacity:'0'});
		$(setId + ' div div:first').css({zIndex:'99'}).stop().animate({opacity:'1'},fadeTime);
	});

	$(setId + ' ul li').click(function(){
		clearInterval(setTimer);

		var connectCont = $(setId + ' ul li').index(this);
		var showCont = connectCont+1;

		$(setId + ' div div#view' + (showCont)).siblings().stop().animate({opacity:'0'},fadeTime,function(){$(this).css({zIndex:'98'})});
		$(setId + ' div div#view' + (showCont)).stop().animate({opacity:'1'},fadeTime,function(){$(this).css({zIndex:'99'})});

		$(this).addClass('active');
		$(this).siblings().removeClass('active');

		timer();

	});

	$(setId + ' ul li:not(.active)').hover(function(){
		$(this).stop().animate({opacity:'0.5'},200);
	},function(){
		$(this).stop().animate({opacity:'1'},200);
	});

	$(setId + ' ul li').css({opacity:'1'});
	$(setId + ' ul li:first').addClass('active');

	timer();

	function timer() {
		setTimer = setInterval(function(){
			$('li.active').each(function(){
				var listLengh = $(setId + ' ul li').length;
				var listIndex = $(setId + ' ul li').index(this);
				var listCount = listIndex+1;

				if(listLengh == listCount){
					$(setId + ' ul li:first').click()
				} else {
					$(this).next('li').click();
				};
			});
		},delayTime);
	};
	
	
});


/*------------------------------------------------------
 ▼タブレット以外でリサイズ時
-------------------------------------------------------*/
var portraitWidth;
var landscapeWidth;

$(window).bind("resize", function(){
	if((isAndroid>0 && navigator.userAgent.indexOf('Mobile')==-1) || navigator.userAgent.indexOf('iPad')>0){
	}else if(isAndroid>0 || isPhone >0 || isPod>0){		
		if(Math.abs(window.orientation) === 0){
			if(isAndroid>0){
				if(!portraitWidth) portraitWidth = $(window).width();
			}else{
				portraitWidth = $(window).width();
			}
			$("html").css("zoom" , portraitWidth/320 );
		}else{
			if(isAndroid>0){
				if(!landscapeWidth) landscapeWidth = $(window).width();
			}else{
				landscapeWidth = $(window).width();
			}
			$("html").css("zoom" , landscapeWidth/320 );
		}
	}
}).trigger("resize");

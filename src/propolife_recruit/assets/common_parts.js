
// pagetop

$(function () {
	var showFlag = false;
	var sideDock = $('#side-dock');
	sideDock.css('bottom', '-300px');
	var showFlag = false;
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			if (showFlag == false) {
				showFlag = true;
				sideDock.stop().animate({'bottom' : '20px'}, 700);
			}
		} else {
			if (showFlag) {
				showFlag = false;
				sideDock.stop().animate({'bottom' : '-300px'}, 700);
			}
		}
	});
sideDock.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});


/* スマートロールオーバー */
function smartRollover(){if(document.getElementsByTagName)for(var b=document.getElementsByTagName("img"),a=0;a<b.length;a++)b[a].getAttribute("src").match("_out.")&&(b[a].onmouseover=function(){this.setAttribute("src",this.getAttribute("src").replace("_out.","_over."))},b[a].onmouseout=function(){this.setAttribute("src",this.getAttribute("src").replace("_over.","_out."))})}window.addEventListener?window.addEventListener("load",smartRollover,!1):window.attachEvent&&window.attachEvent("onload",smartRollover);
new function(){function f(a){function d(a,c,b){setTimeout(function(){"up"==b&&a>=c?(a=a-(a-c)/20-1,window.scrollTo(0,a),d(a,c,b)):"down"==b&&a<=c?(a=a+(c-a)/20+1,window.scrollTo(0,a),d(a,c,b)):scrollTo(0,c)},10)}if(b.getElementById(a.href.replace(/.*\#/,""))){a=b.getElementById(a.href.replace(/.*\#/,"")).offsetTop;var c=b.documentElement.scrollHeight,e=window.innerHeight||b.documentElement.clientHeight;c-e<a&&(a=c-e);c=window.pageYOffset||b.documentElement.scrollTop||b.body.scrollTop||0;d(c,a,a<c?
"up":"down")}}var g=/noSmooth/,b=document;(function(a,d,c){try{a.addEventListener(d,c,!1)}catch(b){a.attachEvent("on"+d,function(){c.apply(a,arguments)})}})(window,"load",function(){for(var a=$("a[href*='#']").not(".noscrl"),b=0,c=a.length;b<c;b++)g.test(a[b].getAttribute("data-tor-smoothScroll"))||a[b].href.replace(/\#[a-zA-Z0-9_]+/,"")!=location.href.replace(/\#[a-zA-Z0-9_]+/,"")||(a[b].onclick=function(){f(this);return!1})})};
// noscrlというクラスを付けることでスムーススクロールの対象外にできます。（<a href="#header" class="noscrl">hoge</a>）

if(((navigator.userAgent.indexOf('iPhone') > 0) || (navigator.userAgent.indexOf('Android') > 0) && (navigator.userAgent.indexOf('Mobile') > 0) && (navigator.userAgent.indexOf('SC-01C') == -1))){
document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">');
} 

//menu => open the door :)
$(function(){
	
	$('#header .menu').click(function(){
		$('.menuBox').toggleClass('on');
		$('.menuBg').toggle();
	});
	
	$('.menuBox .close').click(function(){
		$('.menuBox').removeClass('on');
		$('.menuBg').hide();
	});
	
	$('.menuBg').click(function(){
		$('.menuBox').removeClass('on');
		$('.menuBg').hide();
	});
	
	$('.menuBox li:has(ul) p').click(function(){
		$(this).children('a').toggleClass('on');
		$(this).next('ul').slideToggle();
	});
	
	$('#footer .naviUl li:has(ul) p').click(function(){
		if($(window).width() < 641){
			$(this).children('a').toggleClass('on');
			$(this).next('ul').slideToggle();
			return false;
		}
	});
	
	
	
	//header scroll
    
	$(window).scroll(function(){
		if($(window).scrollTop() > 80){
			$('#header .header').fadeIn();
		}else{
			$('#header .header').fadeOut();
		}
	});
    
	

	//hover subNavi
	$("#header .sub01").hover(function(){
		$("#header .sub01 a").addClass('on');
		$(".hBox01").addClass('on');
	},function(){
		$(".hBox01").removeClass('on');
		$("#header .sub01 a").removeClass('on');
	});
	
	$(".hBox01").hover(function(){
		$("#header .sub01 a").addClass('on');
		$(".hBox01").addClass('on');
	},function(){
		$(".hBox01").removeClass('on');
		$("#header .sub01 a").removeClass('on');
	}); 
	
	$("#header .sub02").hover(function(){
		$("#header .sub02 a").addClass('on');
		$(".hBox02").addClass('on');
	},function(){
		$(".hBox02").removeClass('on');
		$("#header .sub02 a").removeClass('on');
	});
	
	$(".hBox02").hover(function(){
		$("#header .sub02 a").addClass('on');
		$(".hBox02").addClass('on');
	},function(){
		$(".hBox02").removeClass('on');
		$("#header .sub02 a").removeClass('on');
	});
    
    $("#header .sub03").hover(function(){
        $("#header .sub03 a").addClass('on');
        $(".hBox03").addClass('on');
    },function(){
        $(".hBox03").removeClass('on');
        $("#header .sub03 a").removeClass('on');
    });

    $(".hBox03").hover(function(){
        $("#header .sub03 a").addClass('on');
        $(".hBox03").addClass('on');
    },function(){
        $(".hBox03").removeClass('on');
        $("#header .sub03 a").removeClass('on');
    }); 	
	
});
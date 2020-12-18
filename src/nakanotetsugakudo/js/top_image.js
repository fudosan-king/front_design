$(function(){
    var scrollSpeed = 1;//px 移動する量
    var posX = 0;//背景のスタート位置（この後の記述でこの変数posXの数値が増加する事で背景画像の移動が可能となります）
    setInterval(function(){
        posX += scrollSpeed;//posXの値に、scrollSpeedの値を足していく
        $("#TOPPIC04").css("background-position" , posX + "px bottom")} , 80);//移動スピードを変更したい時はこの「50」の数値を増減させる
});

$(function(){
    var scrollSpeed = 1;//px 移動する量
    var posX = 0;//背景のスタート位置（この後の記述でこの変数posXの数値が増加する事で背景画像の移動が可能となります）
    setInterval(function(){
        posX += scrollSpeed;//posXの値に、scrollSpeedの値を足していく
        $("#TOPPIC03").css("background-position" , posX + "px bottom")} , 20);//移動スピードを変更したい時はこの「50」の数値を増減させる
});

//ユーザーエージェントの取得(バージョンの取得)
var ua = window.navigator.appVersion.toLowerCase();

$(function(){
  //IE7,8の時だけ処理
  if(ua.indexOf("msie 7.") != -1 || ua.indexOf("msie 8.") != -1){
    $('img').each(function(){
      var src = $(this).attr('src');

      if(src.indexOf('.png') != -1){
        $(this).css({
          'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+src+'", sizingMethod="scale");'
        });
      }

    });
  }
});


$(function(){
    movieSet01();
	startMovie();
	
	$(".skip").click(function(){
	$(".top_img00").html("<div id=\"TOPPIC04\"></div><div id=\"TOPPIC03\"></div><div class=\"top_img21\"></div><div class=\"top_img22\"></div><div class=\"top_img19\"></div><div class=\"top_img20\"></div>");
	$('.replay').css('display', 'block');
	});
	
	$(".replay").click(function(){
	location.reload();
	});
});

function movieSet01(){	$('.replay,#TOPPIC03,#TOPPIC04,.top_img10,.top_img10_2,.top_img11,.top_img12,.top_img13,.top_img15,.top_img17,.top_img19,.top_img21,.top_img22').css('display', 'none');
$('.top_img09,.top_img14,.top_img16,.top_img18,.top_img20').css({opacity:'0'});
}

function startMovie(){
	$('.top_img09').delay(100).animate({backgroundPosition:'0 0', opacity:'1'}, 2000, function () {
  $('.top_img08,.top_img09').fadeOut(1000);
      });
	$('.top_img10').delay(2100).fadeIn(1000);
	$('.top_img10_2').delay(3100).fadeIn(1000);
	$('.top_img17').delay(4500).fadeIn(2000);
	$('.top_img18').delay(5500).animate({backgroundPosition:'0 0', opacity:'1'}, 2000);
	$('.top_img15').delay(9000).fadeIn(1000);
	$('.top_img16').delay(9500).animate({backgroundPosition:'0 0', opacity:'1'}, 2000);
	$('.top_img13').delay(12500).fadeIn(2000);
	$('.top_img14').delay(13000).animate({backgroundPosition:'0 0', opacity:'1'}, 2000);
	$('.top_img12').delay(16000).fadeIn(2000, function () {
  $('.top_img07,.top_img08,.top_img09,.top_img10,.top_img10_2,.top_img17,.top_img18,.top_img15,.top_img16,.top_img13,.top_img14,.top_img12').delay(3000).fadeOut();
    });
	$('.top_img11').delay(19000).fadeIn(1000, function () {
  $('.top_img11').delay(1500).fadeOut(2000);
    });
	$('.top_img21').delay(20500).fadeIn(1000);
	$('.top_img22').delay(20500).fadeIn(1000);
	$('#TOPPIC03').delay(20500).fadeIn(1000);
	$('#TOPPIC04').delay(20500).fadeIn(1000);
	$('.top_img19').delay(21500).fadeIn(1000);
	$('.top_img20').delay(23500).animate({backgroundPosition:'0 0', opacity:'1'}, 2000);
	setTimeout(function(){
			$('.replay').css('display', 'block');
		},25500);
		
		
}
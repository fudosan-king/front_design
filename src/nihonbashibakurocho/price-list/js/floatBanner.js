$(function() {
	// 途中からナビゲーションを固定
	if (window.matchMedia('(min-width:737px)').matches) {
		var box = $(".floatBanner");
		var boxTop = box.offset().top;
		$(window).scroll(function(){
			if($(window).scrollTop() >= boxTop){
				box.addClass("fixed");
			}else{
				box.removeClass("fixed");;
			}
		});
	}
});
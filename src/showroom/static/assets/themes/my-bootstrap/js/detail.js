$(document).ready(function(){

	$('.thumb').each(function(){
		$(this).css({'width': Math.ceil(($(this).find('li').length*70)-2) +'px'});
	});
	$('.thumb li').click(function(){
		$('#'+$(this).find('span').attr('class')).find('.photos li').css({'display':'none'});
		$('#'+$(this).find('span').attr('class')).find('.photos li').eq($('#'+$(this).find('span').attr('class')+' .thumb li').index(this)).css({'display':'block'});
	});
	$('#style li span').click(function(){
		$('#photo>div').css({'display':'none'});
		$('#'+$(this).parent('li').attr('class')).css({'display':'block'});
		$('#style li').removeAttr('id');
		$(this).parent('li').attr('id','active_style');
	});
	$('#slider li').click(function(){
		$('#madori ul li').css({'display':'none'});
		$('#madori ul li').eq($(this).find('span').attr('class').substr(5)).css({'display':'block'});
	});

	$('#slider').bxSlider({
		auto:true,
		speed:1000,
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 68,
		slideMargin:2,
		pager: false,
		nextText:' ',
		prevText:' ',
		hideControlOnEnd:true,
		infiniteLoop: false,
		buildPager: function(slideIndex){
			switch(slideIndex){
				case slideIndex:return $('#photo li').eq(slideIndex).find('a').html();
			}
		}
	});

	$('.madori').colorbox({
		rel:'madori',
		transition:'none',
		width:'75%',
		height:'75%'
	});

	$('.basic_photo').colorbox({
		rel:'basic_photo',
		transition:'none',
		width:'75%',
		height:'75%'
	});

	$('.italian_photo').colorbox({
		rel:'italian_photo',
		transition:'none',
		width:'75%',
		height:'75%'
	});

	$('.japanese_photo').colorbox({
		rel:'japanese_photo',
		transition:'none',
		width:'75%',
		height:'75%'
	});

	$('.vintage_photo').colorbox({
		rel:'vintage_photo',
		transition:'none',
		width:'75%',
		height:'75%'
	});

	$('.natural_photo').colorbox({
		rel:'natural_photo',
		transition:'none',
		width:'75%',
		height:'75%'
	});
});
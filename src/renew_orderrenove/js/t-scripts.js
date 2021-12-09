function renew_orderrenove_scripts()
{

	this.ready = function()
	{
		const _this = this;
		_this._DetailSlideSwiper();
		_this._InputRangeSlider();
		_this._CollapseShowHide();
		_this._Navigation();
		_this._FixedFooterBottom();
	}

	this._FixedFooterBottom = function () 
	{
	    $(window).on('load resize',function(){
	      if($('.fixed-bottom').length > 0){
	        const height = $('.fixed-bottom').outerHeight();
	        $('footer').css('padding-bottom',height+'px');
	      }
	    });
	}

	this._CollapseShowHide = function()
	{

		$('.js-collapse').on('click',function(e){

			const currentTarget = e.currentTarget;
			

			if ( $(currentTarget).find('i').hasClass('i-open') ){

				$(currentTarget).find('i')
				.removeClass('i-open').addClass('i-close');
				$('.detail-price-calculator')
				.css('display','block');
				setTimeout(function(){
					$('.detail-price-calculator').addClass('collapse-animation');
				},100);
				
			} else{

				$(currentTarget).find('i')
				.removeClass('i-close').addClass('i-open');
				$('.detail-price-calculator')
					.removeClass('collapse-animation');
				setTimeout(function(){
					$('.detail-price-calculator').removeAttr('style');
				},300);

			}
		});
	}


	this._DetailSlideSwiper = function ()
	{
		var swiper = new Swiper(".detail-slide_swiper_thumbnail", {
	        spaceBetween: 30,
	        slidesPerView: 3,
	        breakpoints: {
			    320: {
			      slidesPerView: 2.5,
			      spaceBetween: 5,
			    },
			    767: {
			      slidesPerView: 3,
			    }
			},
	        freeMode: true,
	        watchSlidesProgress: true,
      	});

      	var swiper2 = new Swiper(".detail-slide_swiper", {
	        spaceBetween: 30,
	        slidesPerView: 1,
	        thumbs: {
	          swiper: swiper,
	        },
      	});

	}




	this._InputRangeSlider = function()
	{
		const _this = this;
		const rangeInputs = document.querySelectorAll('.range-slide input[type="range"]')
		const numberInput = document.querySelector('.range-slide input[type="text"]')
		
		if( rangeInputs.length > 0 && numberInput ){
			rangeInputs.forEach(input => {
			  input.addEventListener('input', _this._HandleInputChange);
			})
			numberInput.addEventListener('input', _this._HandleInputChange);
		}

	}

	this._HandleInputChange = function(e) 
	{
	  let target = e.target
	  if (e.target.type !== 'range') {
	    target = document.getElementById('range')
	  } 
	  const min = target.min
	  const max = target.max
	  const val = target.value
	  
	  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
	}

	 //Js Navigation
	this._Navigation = function() {
	    const _this = this;
	    
	    $('.js-menu').on('click',function(e){
           _this._NavAddRemoveClass();
        });

        $('body').on('click', function(e) {
        	const target = e.target;
        	
        	if( $(target).closest('header').length === 0 && 
        		$('.nav_menu-list').hasClass('show') ) {

	            $('body').removeClass('menu-opening');
	            $('body').addClass('menu-closing');
	            setTimeout(function(){
	                $('.nav_menu-list').removeClass('show');
	                $('body').removeClass('menu-opened');
	                $('body').removeClass('menu-closing');
	                _this.nav_animation_scroll();
	                $('.js-menu').removeClass('open');
	            },300);  

        	}
        });

	    $(window).on('load resize',function(){
	      // On/Off fixed
	      	if( $(window).width() <= 767 ){
	      		//SP fixed
	      		if( $('.navigation').hasClass('sp-fixed') ) return;
		    	$('.navigation').removeClass('nav-fixed nav-white');
			    $('.navigation').addClass('nav-black');
	      	} else{
		        if( !$('header').hasClass('nav-animation-scroll') ){
		          $('.navigation').removeClass('nav-black');
		          $('.navigation').addClass('nav-fixed nav-white');
		        }
		    }
    	});


	    $(window).scroll(function(e){
	      _this.nav_animation_scroll();
	    });

  	}


  	this._NavAddRemoveClass = function ()
  	{
  		const _this = this;
	   	if( $('.nav_menu-list').hasClass('show') ){
            $('body').removeClass('menu-opening');
            $('body').addClass('menu-closing');
            setTimeout(function(){
                $('.nav_menu-list').removeClass('show');
                $('body').removeClass('menu-opened');
                $('body').removeClass('menu-closing');
                _this.nav_animation_scroll();
                $('.js-menu').removeClass('open');
            },300);  
        } else {
            $('.js-menu').addClass('open');
            $('.nav_menu-list').addClass('show'); 
            $('body').addClass('menu-opened menu-opening');
        }  
  	}

  	this.nav_animation_scroll = function(){
	    const headerHeight = $('header').outerHeight();
	    const win = $(window);
	    const doc = $(document);
	    let winHeight;
	    const _header = $('header');
	    
	    if( $('body').hasClass('menu-opened') ) return;
	    if( win.height() + 4*headerHeight >= doc.height() ) return;
	    if( win.scrollTop() + 2 > headerHeight ) {
	        _header.addClass('nav-animation-scroll');
	        $('.navigation').removeClass('nav-fixed nav-white');
	        $('.navigation').addClass('nav-black');    
	    } else {
	        _header.removeClass('nav-animation-scroll');

	        //SP fixed
	        if( $('.navigation').hasClass('sp-fixed') ){
	        	$('.navigation').removeClass('nav-black');
	          	$('.navigation').addClass('nav-fixed nav-white');
	          	return;   
	        }

	        if ( $(window).width() >= 768 ) {
	          $('.navigation').removeClass('nav-black');
	          $('.navigation').addClass('nav-fixed nav-white');    
	        } 

	    }
  	}

}


const run_renew_orderrenove_scripts = new renew_orderrenove_scripts();
$(document).ready(function(){
	run_renew_orderrenove_scripts.ready();
});
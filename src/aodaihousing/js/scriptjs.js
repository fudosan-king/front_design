function scriptJs(){

	this.ready = () => {
		const _this = this;
		$(document).ready(()=>{
			console.log(123);
			_this.swiper();
		});

	}

	this.swiper = () => {
		console.log('swiper');
		const _this = this;
	    const swiper = new Swiper('.banner .swiper-container', {
		    speed: 600,
		    parallax: true,
		    pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		    },
		    navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		    },
		     autoplay: {
		        delay: 2500,
		        disableOnInteraction: false,
		    },
		});

	    const swiper2 = new Swiper('.banner_sub .swiper-container', {
	        speed: 600,
	        parallax: true,
	    });

	    const swiper3 = new Swiper('.swiper_staff .swiper-container', {
	      slidesPerView: 5,
	      spaceBetween: 15,
	      slidesPerGroup: 5,
	      loop: true,
	      loopFillGroupWithBlank: true,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
	}



}
const run = new scriptJs();
run.ready();
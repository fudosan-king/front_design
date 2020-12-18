<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-element.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="https://unpkg.com/scrollmonitor@1.2.2"></script>
<script src="https://unpkg.com/doorman-effect/umd/doorman.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/ScrollToPlugin.min.js"></script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/functions.js"></script>
<script>
  	new WOW().init();

  	// carousel
	var $carousel = $('.carousel_bambooFeed').flickity({
	  imagesLoaded: true,
	  percentPosition: true,
	  pageDots: false,
	  arrowShape: {
	    x0: 10,
	  	x1: 60, y1: 50,
	  	x2: 60, y2: 50,
	  	x3: 30
	  },
	  autoPlay: true

	});

	var $imgs = $carousel.find('.carousel-cell img');
	// get transform property
	var docStyle = document.documentElement.style;
	var transformProp = typeof docStyle.transform == 'string' ?
	  'transform' : 'WebkitTransform';
	// get Flickity instance
	var flkty = $carousel.data('flickity');

	$carousel.on( 'scroll.flickity', function() {
	  flkty.slides.forEach( function( slide, i ) {
	    var img = $imgs[i];
	    var x = ( slide.target + flkty.x ) * -1/3;
	    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
	  });
	});

</script>

<script type="text/javascript">

	// banner full screen
	$('.slick').slick({
		draggable: true,
	    autoplay: true,
	    pauseOnHover:false,
	    autoplaySpeed: 7000,
	    fade: true,
	    arrows: false,
        infinite: true,
	    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    touchThreshold: 100
	});

	// paroller
	$('.img_technology').paroller();



</script>



    




<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="js/jquery.ui.datepicker-ja.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.0/anime.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.0/smooth-scrollbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-element.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.2/aos.js"></script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

<!-- <script src="js/gcalendar-holidays.js"></script>
<script src="js/smart_form.js"></script> -->
<script src="js/functions.js"></script>
<script type="text/javascript">
 	window.sr = ScrollReveal({
	    duration: 2000,
	    scale: 1,
	    distance: '50px',
	    easeInOutBack: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
  	});
  
  // sr.reveal('.section_concept');
  sr.reveal('.section_services');

  sr.reveal('.box_horizontal', {
  	origin: 'left',
  });
  sr.reveal('.box_horizontal_2', {
  	origin: 'right',
  });  
</script>

<script>
  $( document ).ready(function() {
    new WOW().init();

  imagesLoaded('.js-images-loaded', () => {
      new Masonry(document.querySelector('.js-masonry'), {
        itemSelector: '.js-masonry-item'
      });
  });

  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    });

});
</script>





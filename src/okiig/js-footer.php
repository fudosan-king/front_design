<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>


<script src="js/functions.js"></script>

<script type="text/javascript">
	$(window).on('load', function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});

	

	//header scroll
	// $(window).scroll(function(){
	// 	if($(window).scrollTop() > 80){
	// 		$('#header .header').fadeIn();
	// 	}else{
	// 		$('#header .header').fadeOut();
	// 	}
	// });

	// SmartMenus init
	$(function() {
	  $('#main-menu').smartmenus({
	    subMenusSubOffsetX: 1,
	    subMenusSubOffsetY: -8
	  });
	});

	// SmartMenus mobile menu toggle button
	$(function() {
	  var $mainMenuState = $('#main-menu-state');
	  if ($mainMenuState.length) {
	    // animate mobile menu
	    $mainMenuState.change(function(e) {
	      var $menu = $('#main-menu');
	      if (this.checked) {
	        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
	      } else {
	        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
	      }
	    });
	    // hide mobile menu beforeunload
	    $(window).bind('beforeunload unload', function() {
	      if ($mainMenuState[0].checked) {
	        $mainMenuState[0].click();
	      }
	    });
	  }
	});
</script>
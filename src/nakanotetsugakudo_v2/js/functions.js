$(function($) {

	$('.owl_gallerys').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: true,
	    dots: false,
	    items: 1
	});

  $('.owl_topbanner').owlCarousel({
      loop: false,
      margin: 10,
      nav: false,
      dots: false,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      animateOut: 'fadeOut'
  });

	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

	AOS.init();

    $('#scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 400);
        return false;
    });

    $(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    });

    var $carousel = $('.carousel_topbanner').flickity({
      autoPlay: 8000,
      pauseAutoPlayOnHover: true,
      prevNextButtons: false,
      fade: true,
      pageDots: false,
      contain: true,
    });

    var flkty = Flickity.data( $('.carousel_topbanner')[0] );

    $carousel.on( 'settle.flickity', function() {
      if(flkty.selectedIndex === 2){
         // console.log("last!") 
         $carousel.flickity('stopPlayer');
      }
    });

    

});



(function(d) {
var config = {
    kitId: 'asf7xon',
    scriptTimeout: 3000,
    async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);





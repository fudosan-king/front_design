$(function($) {
	$(window).on("scroll", function() {
	    if ($(window).scrollTop() >= 20) {
	      	$("header").addClass("compressed");
	    } else {
	      	$("header").removeClass("compressed");
	    }
	});

	jQuery(document).ready(function($) {
	  	function scrollToSection(event) {
		    event.preventDefault();
		    var $section = $($(this).attr('href')); 
		    $('html, body').animate({
		      scrollTop: $section.offset().top 
		    }, 500);
	  	}
	  	$('[data-scroll]').on('click', scrollToSection);

	}(jQuery));
});

jQuery(function($) {
  $('a.nav_link[href*="#"]:not([href="#"])').click(function() {
      var target = $(this.hash);
        $('html,body').stop().animate({
          scrollTop: target.offset().top - 76
        }, 1100);   
  });    
	if (location.hash){
    var id = $(location.hash);
	}
	$(window).load(function() {
  	if (location.hash){
    	$('html,body').animate({scrollTop: id.offset().top -78}, 600)
  	};
 	});
});

$('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
 	let dropdown=$(e.target).closest('.dropdown-hover');
  	dropdown.addClass('show');
  
	setTimeout(function(){
      	dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
  	},300);
});


$(function () {
  $(document).ready(function () {
    return $(window).scroll(function () {
      return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
    }), $("#back-to-top").click(function () {
      return $("html,body").animate({
        scrollTop: "0"
      })
    })
  })
});



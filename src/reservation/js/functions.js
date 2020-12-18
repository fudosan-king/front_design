$(function($) {
	$('.owl_banner').owlCarousel({
		items: 1,
	    loop:true,
	    margin:0,
	    nav: false,
	    smartSpeed :900
	});

	// $('.box_gallery_detail_content').hide();

	// $('#slide01_tag_1').click(function() {
 //    $('#box_slider01_tab01').toggle();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();

 //    // close to all another box
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider02_tab03').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //    $('#box_slider04_tab01').hide();

 //  });
 // 	$('#slide01_tag_2').click(function() {
 //  	$('#box_slider01_tab02').toggle();
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab03').hide();

 //    // close to all another box
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider02_tab03').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //    $('#box_slider04_tab01').hide();
 //  });
 //  $('#slide01_tag_3').click(function() {
 //    $('#box_slider01_tab03').toggle();
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();

 //    // close to all another box
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider02_tab03').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //    $('#box_slider04_tab01').hide();
 //  });

 //  $('#slide02_tag_1').click(function() {
 //    $('#box_slider02_tab01').toggle();
 //    $('#box_slider02_tab02').hide();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //    $('#box_slider04_tab01').hide();
 //  });
 //  $('#slide02_tag_2').click(function() {
 //    $('#box_slider02_tab02').toggle();
 //    $('#box_slider02_tab01').hide();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //    $('#box_slider04_tab01').hide();
 //  });

 //  $('#slide03_tag_1').click(function() {
 //    $('#box_slider03_tab03').toggle();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider04_tab01').hide();
 //  });
 //  $('#slide03_tag_2').click(function() {
 //    $('#box_slider03_tab01').toggle();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider04_tab01').hide();
 //  });
 //  $('#slide03_tag_3').click(function() {
 //    $('#box_slider03_tab02').toggle();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab03').hide();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider04_tab01').hide();
 //  });

 //  $('#slide04_tag_1').click(function() {
 //    $('#box_slider04_tab01').toggle();

 //    // close to all another box
 //    $('#box_slider01_tab01').hide();
 //    $('#box_slider01_tab02').hide();
 //    $('#box_slider01_tab03').hide();
 //    $('#box_slider02_tab01').hide();
 //    $('#box_slider02_tab02').hide();
 //    $('#box_slider03_tab01').hide();
 //    $('#box_slider03_tab02').hide();
 //    $('#box_slider03_tab03').hide();
 //  });


    // $('.i_tag').click(function(event) {
    //   event.preventDefault();
    //   $('html, body').animate({
	   //   scrollTop: $( $(this).attr('href') ).offset().top - 15
	   //  }, 2000);
	   //  return false;
    // });




    $('.btnStart').click(function() {
        $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 50
	    }, 2000);
	    return false;
    });

    $('.btnStart').on('click', function (e) {
	    e.preventDefault();
	
	    var targetEle = this.hash;
	    var $targetEle = $(targetEle);
	 
	    $('html, body').stop().animate({
	        'scrollTop': $targetEle.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = targetEle;
	    });
	});

});
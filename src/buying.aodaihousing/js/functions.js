$(function($) {

	$('.owl_gallerys').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: true,
	    dots: false,
	    items: 1
	});

	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

	AOS.init();

    $('.link_pro').click(function() {
      $('html, body').animate({
        scrollTop: $(".section_projects").offset().top
      }, 1000)
    });


});

$(document).ready(function() {
	/* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#video").attr('src');
    
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#video").attr('src', '');
	
	/* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#modal_video").on('shown.bs.modal', function(){
        $("#video").attr('src', url);
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#modal_video").on('hide.bs.modal', function(){
        $("#video").attr('src', '');
    });
});

$(function() {
    $(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
});
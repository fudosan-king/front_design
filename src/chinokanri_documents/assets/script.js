$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $(".footer_top_content .footer_top_item h4").click(function(){
        $(this).parent(".footer_top_item").toggleClass("open"); 
    });
});
$(document).ready(function () {
    $('.numbersOnly').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });

    $('[data-scroll]').on('click', function(e){
        e.preventDefault();
        var $hash = $(this.hash);
        $('html, body').animate({
            scrollTop: $hash.offset().top
        }, 500);
    });
});

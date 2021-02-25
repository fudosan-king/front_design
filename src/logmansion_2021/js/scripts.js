$(function($) {

    $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
        const  currentTarget  = e.currentTarget;
        const elem = $(currentTarget).attr("rel");
        const eleID = elem.replace('#', '');
        const target = $($(currentTarget).attr("rel"));
        const targetToTop = target.offset().top ? target.offset().top : 0;
        $('html, body').animate({
            scrollTop: targetToTop
        }, 1000);
        return;
    });

});

    
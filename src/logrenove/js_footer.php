<div class="bsnav-mobile">
        <div class="bsnav-mobile-overlay"></div>
        <div class="navbar"></div>
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="assets/bootstrap.min.js"></script>
<script src="assets/all.js" defer=""></script>
<script src="assets/flickity.pkgd.min.js"></script>
<script src="assets/SmoothScroll.min.js"></script>
<div class="uagb-toc__scroll-top dashicons dashicons-arrow-up-alt2"></div>
<script defer src="assets/autoptimize_974210beeaeb3eacdb5000025d7d9cbd.js"></script>

<script>
        $(document).ready(function() {
                $(".btn_viewmember").click(function() {
                        $("body,html").animate({
                                scrollTop: $("#detail").offset().top - 98
                        }, 800);
                });

                $(".btn_registermember").click(function() {
                        $("body,html").animate({
                                scrollTop: $("#frm_signup").offset().top - 190
                        }, 800);
                });
         });

</script>
<script src="./index_files/modernizr.min.js"></script>
<script src="./index_files/jquery.min.js"></script>
<script src="./index_files/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="./index_files/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./index_files/flickity.pkgd.min.js"></script>
<script src="./index_files/jquery.fancybox.min.js"></script>
<script src="./index_files/owl.carousel.min.js"></script>
<script src="./index_files/tablesaw.stackonly.js"></script>
<script src="./index_files/bootstrap-datepicker.min.js"></script>
<script src="./index_files/bootstrap-datepicker.ja.min.js"></script>
<script src="./index_files/jquery.toc.min.js"></script>
<script src="./index_files/bsnav.min.js"></script>
<script src="./index_files/functions.js"></script>
<script>
(function(d) {
    var config = {
            kitId: 'gih2che',
            scriptTimeout: 3000,
            async: true
        },
        h = d.documentElement,
        t = setTimeout(function() { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try { Typekit.load(config) } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
})(document);

var userAgent, ieReg, ie;
userAgent = window.navigator.userAgent;
ieReg = /msie|Trident.*rv[ :]*11\./gi;
ie = ieReg.test(userAgent);

if (ie) {
    $(".photo").each(function() {
        var $container = $(this),
            imgUrl = $container.find("img").prop("src");
        if (imgUrl) {
            $container.css("backgroundImage", 'url(' + imgUrl + ')').addClass("custom-object-fit");
        }
    });
}
</script>
<script type="text/javascript" src="./index_files/wp-embed.min.js" id="wp-embed-js"></script>
<div style="display: none; visibility: hidden;">
    <script>
    ! function(b, e, f, g, a, c, d) { b.fbq || (a = b.fbq = function() { a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments) }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d)) }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "1843178859275961");
    fbq("track", "PageView");
    </script>
    <noscript></noscript>
</div>
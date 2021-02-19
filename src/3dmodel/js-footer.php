<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/bsnav.min.js"></script>
<script src="js/jquery.mhead.js"></script>
<script src="js/playground.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/sticksy.min.js"></script>
<script src="js/functions.js"></script>
<script>

    $(function() {
        new Mmenu("#contruction", {
        extensions      : [ "theme-white", "pagedim-black" ],
        dropdown        : true,
        counters        : false,
        dividers        : {
            add             : true,
            addTo           : "[id*='contacts-']",
            fixed           : true
        },
        searchfield     : {
            panel           : true
        },
        navbar          : {
            title           : "Contruction"
        },
        navbars     : [{
            content: [ "searchfield" ]
        }, true]}, {
        searchfield: {
            clear: true
        },
        dropdown: {
            offset: {
                button: {
                    y: 30,
                    x: -10
                }
            }
        }});

        $(".mh-head.Sticky").mhead({
            scroll: {
                hide: 200
            }
        });


        new Mmenu("#room", {
        extensions      : [ "theme-white", "pagedim-black" ],
        dropdown        : true,
        counters        : false,
        dividers        : {
            add             : true,
            addTo           : "[id*='contacts-']",
            fixed           : true
        },
        searchfield     : {
            panel           : true
        },
        navbar          : {
            title           : "Room"
        },
        navbars     : [{
            content: [ "searchfield" ]
        }, true]}, {
        searchfield: {
            clear: true
        },
        dropdown: {
            offset: {
                button: {
                    y: 30,
                    x: -10
                }
            }
        }});


        new Mmenu("#interior", {
        extensions      : [ "theme-white", "pagedim-black" ],
        dropdown        : true,
        counters        : false,
        dividers        : {
            add             : true,
            addTo           : "[id*='contacts-']",
            fixed           : true
        },
        searchfield     : {
            panel           : true
        },
        navbar          : {
            title           : "Interior"
        },
        navbars     : [{
            content: [ "searchfield" ]
        }, true]}, {
        searchfield: {
            clear: true
        },
        dropdown: {
            offset: {
                button: {
                    y: 30,
                    x: -10
                }
            }
        }});



        
    });
</script>
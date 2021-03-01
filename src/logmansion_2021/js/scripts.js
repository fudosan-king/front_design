$(function($) {

    const splide = new Splide('.slideshow-splide', {
        type  : 'fade',
        rewind: true,
        autoplay: true,
        speed:3000,
        interval: 5000,
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: false,
        classes: {
            pagination: 'splide__pagination hide-panigation',
            page: 'splide__pagination__page hide-panigation',
        },
    }).mount();


    const splide_ct = new Splide('.top-page-ct', {
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: false,
        classes: {
            pagination: 'splide__pagination hide-panigation',
            page: 'splide__pagination__page hide-panigation',
        },
    }).mount();

    const splide_product_list = new Splide('.splide-products', {
        rewind: true,
        perPage: 3,
        perMove: 1,
        arrows: false,
        pagination: false,
        padding: {
            left: 0,
            right: '1.6%',
        },
        breakpoints: {
            991: {
                perPage: 2,
                fixedWidth: '24.6875rem',
            },
            680: {
                perPage: 1,
                fixedWidth: '24.6875rem',
            },
            375: {
                perPage: 1,
                fixedWidth: '17.1875rem',
                padding: {
                    left: 0,
                    right: '5.6%',
                },
            },
        },

    }).mount();

});



$(function($) {
    const run_logmansion = new log_mainsion($);
    $(document).ready(function() {
        run_logmansion.ready();
    });
});


function log_mainsion() {

    this.ready = function() {
        const _this = this;
        _this.slideshow();
    }

    this.slideshow = function() {

    }

}
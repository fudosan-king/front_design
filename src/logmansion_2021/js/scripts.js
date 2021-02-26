$(function($) {

    const splide = new Splide( '.splide',{
        type: 'loop',
        autoplay:true,
        interval:2000,
        pauseOnHover:false,
        pauseOnFocus:false,
        arrows:false,
        classes: {
            pagination:'splide__pagination hide-panigation',
            page: 'splide__pagination__page hide-panigation',
        },
    }).mount();
        

});




$(function($) {

    const run_logmansion = new log_mainsion($);
    $(document).ready(function(){
        run_logmansion.ready();
    });


    

});


function log_mainsion()
{
    
    this.ready = function()
    {
        const _this = this;
        _this.slideshow();
    }

    this.slideshow = function()
    {

    }

}

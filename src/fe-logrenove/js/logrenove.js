function logrenoveScripts() {

	this.ready = function() {
		const _this = this;
		$(document).ready(function(){
			_this.scrollToEle();
			_this.bootstrapDatepicker();
			_this.jsSelectCss();
            _this.setPaddingFooterNotscrollhome();
            _this.showScollHome();
		});
	}

    this.showScollHome = function (){
        const target = $('.service-lp_slides .btn-lp-turquoise');
        const targetToTop = ( target.length > 0 ) ? target.offset().top : 0;
        const targetHeight = target.outerHeight();
        let scrollTop = $(window).scrollTop();
        if( scrollTop > (targetToTop+targetHeight)  ){
            $('.scroll-home').css('display','block');
        } else {
            $('.scroll-home').css('display','none');
        }
        $(window).scroll(function(e){
            scrollTop = $(window).scrollTop();
            if( scrollTop > (targetToTop+targetHeight)  ){
                $('.scroll-home').css('display','block');
            } else {
                $('.scroll-home').css('display','none');
            }
        });
    
    }

    this.setPaddingFooterNotscrollhome = function(){
        if( $('.scroll-home').length == 0 ){
            $('footer').css('padding-bottom',30);
        }
    }

    this.jsSelectCss = function () {
        $('.form-lp select').on('change',function(e){
        	console.log(123);
            const currentTarget = e.currentTarget;
            if ( $(currentTarget).val() == ''){
                $(currentTarget).removeClass('active');
            } else {
                $(currentTarget).addClass('active');
            }
        });  
    }

	this.bootstrapDatepicker = function (){
		const _this = this;
		$('.datepicker').datepicker({
			language: 'ja',
		});
	}

	this.scrollToEle = function() {

        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            $('img').each(function(i,ele){
                const link = $(ele).data('src');
                if( link !== '' && link !== undefined ){
                    $(ele).attr('src',link);
                }
            });
            setTimeout(function(){
                const currentTarget = e.currentTarget;
                const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0;

                $('html, body').animate({
                    scrollTop: targetToTop
                }, 1000);
                
            },300)
        });
    
    }
    
}


const run = new logrenoveScripts();
run.ready();
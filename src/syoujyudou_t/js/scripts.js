$(function($) {
    const run_syoujyudou = new syoujyudou($);
    const run_syoujyudou_inquiry = new syoujyudou_inquiry($);
    $(document).ready(function() {
        run_syoujyudou.ready();
        run_syoujyudou_inquiry.ready();
    });
});


function syoujyudou() {

    this.ready = function() {
        const _this = this;
        _this.navigation();
        _this._CSSJS();
    }  

    this._CSSJS = function()
    {
        $(window).on('load resize',function(){
            const height = $('.home_top_info').outerHeight();
            const heightTop = $('.home_top').outerHeight();
            const heightCus = heightTop - (height + 80 + 120);
            $('.home_ct_block').css('top', '-'+heightCus+'px');
        });
        
    }


    //Js Navigation
    this.navigation = function() {
        const _this = this;
            

        _this.menu_animation_scroll();

        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;

            if( $('.nav_menu-list').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.nav_menu-list').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    _this.menu_animation_scroll();
                    $(currentTarget).removeClass('open');
                },300);  

            } else {
                $(currentTarget).addClass('open');
                $('.nav_menu-list').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
            
        });

    }

    this.menu_animation_scroll = function(){
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        if( $('.navigation').hasClass('nav-form') ) return;
        if( $('body').hasClass('menu-opened') ) return;
        if( win.height() + 2*headerHeight >= doc.height() ) return;
        if( win.scrollTop() > headerHeight ){
            _header.addClass('menu-animation-scroll');    
        } else {
            _header.removeClass('menu-animation-scroll');    
        }
    }
}

function syoujyudou_inquiry(){

    this.ready = function() {
        const _this = this;
        _this._ClickSubmit();
        _this._ClickConfirm();
        _this._CleanFrom();
    }  

    this._CleanFrom = function()
    {
        $('#inquiry_clean').on('click',function(e){
            e.preventDefault();
            $('.frm_inquiry input,.frm_inquiry select,.frm_inquiry textarea').each(function(index,ele){
                const currentTarget = ele;
                $(currentTarget).val('');
            });
            $('input[type=checkbox]').prop('checked',false);
            const targetToTop = $('.js_frm_inquiry').offset().top ? $('.js_frm_inquiry').offset().top : 0;
            const navHight = ($('header').outerHeight() != undefined)?$('header').outerHeight():0;
            $('html, body').animate({
                scrollTop: targetToTop - navHight
            }, 1000);
        });
    }

    this._ViewConfirm = function()
    {
        $('.frm_inquiry input,.frm_inquiry select,.frm_inquiry textarea').each(function(index,ele){
            const currentTarget = ele;
            const name = $(currentTarget).attr('name');
            const isType = $(currentTarget).attr('type');
            let val = $(currentTarget).val();
            if( $(currentTarget).attr('type') === 'checkbox' && !$(currentTarget).prop('checked')  ){
               val = '';
            }
            if( isType == 'number' ){
                val = val.replace(/[^0-9\.]/g,'');
            }
            if(val === ''){
                $('.view_'+name).parent().css('display','none');
            } else{
                $('.view_'+name).parent().removeAttr('style');
            }
            $(currentTarget).val(val);
            $('.view_'+name).text(val);
        });
    }

    this._ClickSubmit = function()
    {
        $('#inquiry_back').on('click',function(e){
            e.preventDefault();
            $('.js_frm_confirm').fadeOut();
            $('.js_frm_inquiry').fadeIn();
        });

        $('#inquiry_submit').on('click',function(e){
            e.preventDefault();
            const currentTarget = e.currentTarget;
            $(currentTarget).prop('disabled', true);
            $('form.js_frm_inquiry').submit();
        });

    }

 

    this._ClickConfirm = function()
    {
        const _this = this;
        $('.js_frm_inquiry_to_confirm').on('click',function(e){
            let isValid = true;
            const currentTarget = e.currentTarget;

            //Check required
            const required_box_error = _this.ele_required();
            if( required_box_error.indexOf(false) !== -1 ){
                isValid = false;
            }
           
            //Check phone
            const phonenumber_box_error = _this.ele_isPhoneNumberJapanese();
            
            if( phonenumber_box_error.indexOf(false) !== -1 || phonenumber_box_error.indexOf('inquiry_telephone:false') !== -1 || phonenumber_box_error.indexOf('buyer_mobilephone:false') !== -1  ){
                isValid = false;
            } 

            if(phonenumber_box_error.indexOf('inquiry_telephone:true') !== -1 ){
                //Remove Error by name has val false
                $.each(phonenumber_box_error,function(i,ele){
                    if(ele === true || ele === false) {
                        return;
                    }
                    const posColon = ele.indexOf(':');
                    if( posColon !== -1 ){
                        const name =ele.substr(0, posColon);
                        const posCheck = ele.length - posColon;
                        const isCheck = ele.substr(posColon+1,posCheck);
                        if( isCheck == 'false' ){
                            const elem_rm_error = $('input[name='+name+']');
                            _this.removeErrorMessage(elem_rm_error);
                        } 
                    }
                });
            }

            //Check postal code
            const postalcode_box_error = _this.ele_isPostalCode();
            if( postalcode_box_error.indexOf(false) !== -1 ){
                isValid = false;
            }
          

            //Check email
            const email_box_error = _this.ele_isEmail();
            if( email_box_error.indexOf(false) !== -1 ){
                isValid = false;
            }

           
            //Only Special
            if( !$('form #cb_agree').is(':checked') ){
                var ERROR_NO_INPUT = '個人情報の取り扱いに関してご確認をお願いいたします';
                var htmlError = '<span class="error-required" style="color: red">' +  ERROR_NO_INPUT + '</span>';
                $('form #cb_agree').closest('.custom-control').find('.error-required').remove();
                $('form #cb_agree').closest('.custom-control').append(htmlError);
                isValid = false;
            } else {
                $('form #cb_agree').closest('.custom-control').find('.error-required').remove();
            }

        
            if (!isValid) {
                event.preventDefault();
                const targetToTop = $('.js_frm_inquiry').offset().top ? $('.js_frm_inquiry').offset().top : 0;
                const navHight = ($('header').outerHeight() != undefined)?$('header').outerHeight():0;
                $('html, body').animate({
                    scrollTop: targetToTop - navHight
                }, 1000);
            }

            if (isValid) {
                $('.js_frm_confirm').fadeIn();
                $('.js_frm_inquiry').fadeOut();
                setTimeout(function(){
                    $('html, body').animate({
                        scrollTop: 0
                    }, 1000);
                },500)
                _this._ViewConfirm();
            }

        });

    }
 
    //Element is email 
    this.ele_isEmail = function()
    {
        const _this = this;
        const email = '[data-valid=email]'; //Condition
        const email_box_error = [];
        $(email).each(function(i,elem){
            const _$elem = $(elem);
            //Check
            email_box_error.push( _this.invalidCheckEmail(_$elem) );
        });
        return email_box_error;
    }

    //Element is postalcode
    this.ele_isPostalCode = function()
    {
        const _this = this;
        const phonenumber= '[data-valid=postalcode]'; //Condition
        const postalcode_box_error = [];
        $(phonenumber).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Function check
            postalcode_box_error.push( _this.invalidCheckPostalCode(_$elem) );
        });
        return postalcode_box_error;
    }

    //Element Is Phonenumber Japanese
    this.ele_isPhoneNumberJapanese = function()
    {
        const _this = this;
        const phonenumber= '[data-valid=telephone]'; //Condition
        const phonenumber_box_error = [];
        const name_specital = ['inquiry_telephone'];
        $(phonenumber).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Function check
            if( name_specital.indexOf(name) !== -1 ){
                phonenumber_box_error.push( name+':'+_this.valid_phonenumber(_$elem) );
            } else { 
                phonenumber_box_error.push( _this.valid_phonenumber(_$elem) );
            }

        });

        return phonenumber_box_error;
    }

    //Element Required
    this.ele_required = function()
    {   
        const _this = this;
        const required = '[data-valid=required]'; //Condition
        const required_box_error = [];
        $(required).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Function check
            required_box_error.push(  _this.required(_$elem) );
        });
        return required_box_error;
    }

    //Add And Remove Message Error
    this.addErrorMessage = function(elem, message)
    {
        var htmlError = '<span class="error-required" style="color: red">' + message + '</span>';
        var formGroup = elem.parents('.form-group');

        if(formGroup.find('.error-required').length)
        {
            formGroup.find('.error-required').html(message);
        }else{
            formGroup.find('.label_required').append(htmlError);
        } 
    }

    this.removeErrorMessage = function(elem)
    {
        var formGroup = elem.closest('.form-group');
        formGroup.find('.error-required').remove();
    }

    //This take message error by name setting
    this.takeMessageRequired = function (elem)
    {
        const name = elem.attr('name');
        let message = '';
        switch(true){
            case name === 'buyer_homephone' || name === 'buyer_mobilephone':
                message = miyanomori_validate_msg.homephone_mobilephone;
                break;
            default:
                message = miyanomori_validate_msg.register_apartment_code;
        }
        return message;
    }
    

    // Function check valid
    this.required = function(elem)
    {
        const _this = this;
        var ERROR_NO_INPUT = 'こちらは必須項目です';
        var isValid = true;
        if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
          _this.addErrorMessage(elem, ERROR_NO_INPUT);
          isValid = false;
        }else{
          _this.removeErrorMessage(elem);
        }
        return isValid;
    }

    this.valid_phonenumber = function(elem)
    {
        const _this = this;
        const ERROR_NO_INPUT = '未記入でエラー';
        const ERROR_FORMAT = '電話番号を正しくご記入ください';
        let isValid = true;
        switch (true) {
            case elem.val() == '':
                break;
            case !_this.check_telephone(elem):
                _this.addErrorMessage(elem, ERROR_FORMAT);
                isValid = false;
                break;
            default:
                _this.removeErrorMessage(elem);
        }
        return isValid;
    }

    this.check_telephone = function(elem)
    {
        const phoneReg = /^0([0-9]{9,10}$)/;
        const phone = elem.val();
        return phoneReg.test(phone.replace(/\-/g, '')); 
    }

    this.invalidCheckPostalCode = function(elem)
    {
        const _this = this;
        const ERROR_NO_INPUT = '未記入でエラー';
        const ERROR_FORMAT = '郵便番号を正しくご記入ください';
        let isValid = true;
        switch (true) {
            case elem.val() == '':
                break;
            case !_this.check_postalcode(elem):
                _this.addErrorMessage(elem, ERROR_FORMAT);
                isValid = false;
                break;
            default:
                _this.removeErrorMessage(elem);
        }
        return isValid;
    }
    this.check_postalcode = function(elem)
    {
        const codeReg = /^[0-9]{7}$/;
        const code = elem.val();
        return codeReg.test(code.replace(/\-/g, '')); 
    }

    this.invalidCheckEmail = function(elem)
    {
        const _this = this;
        const ERROR_NO_INPUT = 'こちらは必須項目です';
        const ERROR_FORMAT = 'メールアドレスを正しくご記入ください';
        let isValid = true;
        switch (true) {
            case elem.val() == '':
                _this.addErrorMessage(elem, ERROR_NO_INPUT);
                isValid = false;
                break;
            case elem.val().match(/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/) == null:
                _this.addErrorMessage(elem, ERROR_FORMAT);
                isValid = false;
                break;
            default:
                _this.removeErrorMessage(elem);
        }
        return isValid;
    }



}
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
        _this.click_submit();
        _this.click_confirm();
        _this.phone_by_nation();
        _this.check_validate_if_fill();
        // _this.datePickerBirth();
        _this.checkYesNo();
        _this._CleanFrom();
        $('select[name="app_room"]').trigger('change');
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

    this.click_submit = function()
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

 

    this.click_confirm = function()
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
            //buyer_mobilephone:false is name:value
            
            if( phonenumber_box_error.indexOf(false) !== -1 || phonenumber_box_error.indexOf('inquiry_telephone:false') !== -1 || phonenumber_box_error.indexOf('buyer_mobilephone:false') !== -1  ){
                isValid = false;
            } 

            if(phonenumber_box_error.indexOf('inquiry_telephone:true') !== -1 || phonenumber_box_error.indexOf('buyer_mobilephone:true') !== -1 ){
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
                            // $(elem_rm_error).removeClass('border-danger');
                            _this.removeErrorMessage(elem_rm_error);
                        } 
                    }
                });
            }

            //Check postal code
            const postalcode_box_error = _this.ele_isPostalCode();
            
            // if( postalcode_box_error.indexOf(false) !== -1 ){
            //     isValid = false;
            // }
          

            //Check email
            const email_box_error = _this.ele_isEmail();
           
            // if( email_box_error.indexOf(false) !== -1 ){
            //     isValid = false;
            // }
            
            // //Check radio
            // const radio_box_error = _this.ele_isRadio();
            
            // if( radio_box_error.indexOf(false) !== -1 ){
            //     isValid = false;
            // }
           
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
                _this._ViewConfirm();
            }

        });

    }

    //Add Yes/No
    this.checkYesNo = function()
    {
        const _this = this;



        //Replacement
        $('.replacement-schedule').find('select').removeClass('required');
        //Replacement
        $('input[name=buyer_replace_method]').on('click change',function(e){
            const currentTarget = e.currentTarget;
            const val = $(currentTarget).val();
            const elemTarget = $('.replacement-schedule');
            
            const yn = $(currentTarget).data('yn');
           

            if ( $(currentTarget).is(':checked') && yn === 'yes'  ){
                elemTarget.fadeIn();
                elemTarget.find('select').parents('.form-group').each(function(i,ele){
                    if( $(ele).find('.red:not([style])').length > 0 ){
                       $(ele).find('select').addClass('required');
                    }
                });
            } else {
                elemTarget.fadeOut();
                elemTarget.find('select').removeClass('required active').val('');
                elemTarget.find('.error-required').remove();
            }
        });

       
    }


    //Add Company
    this.check_validate_if_fill = function()
    {
        let val = $('input[name=buyer_company_name]').val();
        const parents = ['buyer_company_phone','buyer_company_location']
        //Input val view
        $.each(parents,function(i,ele){
            const parent = $('input[name='+ele+']').closest('.form-group');
            if( typeof(val) === 'undefined' || val == "" || val == "null" ){
                //Phone
                if( ele.search('phone') !== -1 ){
                    $('input[name='+ele+']').removeClass('js_valid-phonenumber');
                    
                }  else{
                    $('input[name='+ele+']').removeClass('required');
                }
                parent.find('.label_required .red').css('display','none');
            }
        });


        //Confirm Load
        let val_cf = $('.view_buyer_company_name').text();
        const view_parents = ['view_buyer_company_phone','view_buyer_company_location','view_buyer_department_name'];
        $.each(view_parents,function(i,ele){
            const parent = $('.'+ele).closest('.form-group');
            if( typeof(val_cf) === 'undefined' || val_cf == "" || val_cf == "null" ){
                parent.find('.label_required .red').css('display','none');
            } else {
                parent.find('.label_required .red').css('display','block');
            }
        });

        $('input[name=buyer_company_name]').on('change',function(e){
            //Confirm change
            val_cf = $('.view_buyer_company_name').text();
            $.each(view_parents,function(i,ele){
                const parent = $('.'+ele).closest('.form-group');
                if( typeof(val_cf) === 'undefined' || val_cf == "" || val_cf == "null" ){
                    parent.find('.label_required .red').css('display','none');
                } else {
                    parent.find('.label_required .red').css('display','block');
                }  
            });

            const currentTarget = e.currentTarget;
            val = $(currentTarget).val();

            if( typeof(val) === 'undefined' || val == "" || val == "null" ){
                //Input val view
                $.each(parents,function(i,ele){
                    const parent = $('input[name='+ele+']').closest('.form-group');
                    if( ele.search('phone') !== -1 ){
                        $('input[name='+ele+']').removeClass('js_valid-phonenumber');
                    }  else{
                        $('input[name='+ele+']').removeClass('required');
                    }
                    $('input[name='+ele+']').val('');
                    parent.find('.label_required .red').css('display','none');
                    parent.find('.label_required .error-required').remove();
                });
                
                $('input[name=buyer_department_name]').val('');

                //Confirm val view
                $.each(view_parents,function(i,ele){
                    const parent = $('.'+ele).closest('.form-group');
                    parent.find('.label_required .red').css('display','none');
                    $('.'+ele).text('');
                });

            } else {
                //Input val view
                $.each(parents,function(i,ele){
                    const parent = $('input[name='+ele+']').closest('.form-group');
                    if( ele.search('phone') !== -1 ){
                        $('input[name='+ele+']').addClass('js_valid-phonenumber');
                    }  else{
                        $('input[name='+ele+']').addClass('required');
                    }
                    parent.find('.label_required .red').css('display','block');
                });

                //Confirm val view
                $.each(view_parents,function(i,ele){
                    const parent = $('.'+ele).closest('.form-group');
                    parent.find('.label_required .red').css('display','block');
                });
            }
        });
        



            
    }
    //Element is radio
    this.ele_isRadio = function ()
    {
        const _this = this;
        const radio = '.js_valid-radio';//Change name if class name change
        const radio_box_error = [];
        $(radio).each(function(i,elem){
            const _$elem = $(elem);
            //Check
            radio_box_error.push( _this.checkRadio(_$elem) );
        });
        return radio_box_error;
    }

    //Element is email 
    this.ele_isEmail = function()
    {
        const _this = this;
        const email = '[data-valid=email]'; //Change name if class name change
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
        const phonenumber= '[data-valid=postalcode]'; //Change name if class name change
        const postalcode_box_error = [];
        $(phonenumber).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Check
            postalcode_box_error.push( _this.invalidCheckPostalCode(_$elem) );
        });
        return postalcode_box_error;
    }

    //Element Is Phonenumber Japanese
    this.ele_isPhoneNumberJapanese = function()
    {
        const _this = this;
        const phonenumber= '[data-valid=telephone]'; //Change name if class name change
        const phonenumber_box_error = [];
        const name_specital = ['inquiry_telephone'];
        $(phonenumber).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Check
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
        const required = '[data-valid=required]'; //Change name if class name change
        const required_box_error = [];
        $(required).each(function(i,elem){
            const _$elem = $(elem);
            const name = _$elem.attr('name');
            //Check
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
        // $(elem).removeClass('border-danger');
    }

    //This take message error by name setting
    this.takeMessageRequired = function (elem)
    {
        const name = elem.attr('name');
        let message = '';
        switch(true){
            case name === 'buyer_homephone' || name === 'buyer_mobilephone':
                message = miyanomori_validate_msg.homephone_mobilephone;
                // message = '';
                break;
            default:
                message = miyanomori_validate_msg.register_apartment_code;
        }
        return message;
    }
    


    // VALIDATE FORM DATA
    this.checkRadio = function(elem)
    {
        const _this = this;
        var ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        const check = [];
        var isValid = true;
        const index = elem.find('input[type=radio]').length;
        elem.find('input[type=radio]').each(function(i,ele){
            if( !$(ele).is(":checked") ){
                check.push(false);
            }
        });
        
        if( check.length === index){
            _this.addErrorMessage(elem, ERROR_NO_INPUT);
            isValid = false;
        } else {
           _this.removeErrorMessage(elem);
        }



        return isValid;
    } 
    
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
            //     _this.addErrorMessage(elem, ERROR_NO_INPUT);
            //     // $(elem).not('[name=buyer_company_phone]').addClass('border-danger');
            //     isValid = false;
                break;
            case !_this.check_telephone(elem):
                _this.addErrorMessage(elem, ERROR_FORMAT);
                // $(elem).not('[name=buyer_company_phone]').addClass('border-danger');
                isValid = false;
                break;
            // case elem.val().match(/^[0-9]{10,11}$/) == null:
            //     _this.addErrorMessage(elem, ERROR_FORMAT);
            //     isValid = false;
            //     break;
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
            //     _this.addErrorMessage(elem, ERROR_NO_INPUT);
            //     isValid = false;
                break;
            // case elem.val().match(/^[0-9]+$/) == null:
            //     _this.addErrorMessage(elem, ERROR_FORMAT);
            //     isValid = false;
            //     break;
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



    this.phone_by_nation = function()
    {
        const _this = this;
        // AOS.init();
        if( $('#js_buyer_homephone_nation').length > 0 ){

            const defautCode = $('#js_buyer_homephone_nation').val();
            let boxCheckAutoNation = [];

            $("#js_buyer_homephone").intlTelInput({
                nationalMode: true,
                initialCountry: defautCode,
                preferredCountries: ["jp","us","tw","cn", "my"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
            });


            $("#js_buyer_mobilephone").intlTelInput({
                nationalMode: true,
                initialCountry: defautCode,
                preferredCountries: ["jp","us","tw","cn", "my"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
            });

            $("#js_buyer_company_phone").intlTelInput({
                nationalMode: true,
                initialCountry: defautCode,
                preferredCountries: ["jp","us","tw","cn", "my"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
            });


            //Check initial
            const auto_homephone = $("#js_buyer_homephone").intlTelInput("getSelectedCountryData").iso2;
            $('#js_buyer_homephone_nation').val(auto_homephone);
            if(auto_homephone == 'jp'){
                //Remove class validate change language
                $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').each(function(i,ele){
                    const name  = $(ele).attr('name');
                    if( name.search('postalcode') !== -1 ) {
                        $(ele).removeClass('js_valid-postalcode');
                    } else {
                        $(ele).removeClass('required');
                    }
                });

                $('.phone-domestic select,.phone-domestic input, .phone-domestic textarea').each(function(i,ele){
                    const name  = $(ele).attr('name');
                    if( name.search('postalcode') !== -1 ) {
                        $(ele).addClass('js_valid-postalcode');
                    } else {
                        $(ele).addClass('required');
                    }
                });
                //End
                
                $('.phone-domestic').fadeIn();
                $('.phone-foreign').fadeOut();
                $('.phone-foreign select').removeClass('active');
                $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').val('');
                $('input[name=buyer_postalcode_foreign]').removeClass('js_valid-postalcode');
                _this.isJapanese();
            }else{
                //Remove class validate change language
                $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').each(function(i,ele){
                    const name  = $(ele).attr('name');
                    if( name.search('postalcode') !== -1 ) {
                        $(ele).addClass('js_valid-postalcode');
                    } else {
                        $(ele).addClass('required');
                    }
                });
                $('.phone-domestic select,.phone-domestic input, .phone-domestic textarea').each(function(i,ele){
                    const name  = $(ele).attr('name');
                    if( name.search('postalcode') !== -1 ) {
                        $(ele).removeClass('js_valid-postalcode');
                    } else {
                        $(ele).removeClass('required');
                    }
                });
                //End
                
                $('input[name=buyer_postalcode_foreign]').addClass('js_valid-postalcode');
                $('.phone-foreign').fadeIn();
                $('.phone-domestic').fadeOut();
                $('.phone-domestic select').removeClass('active');
                $('.phone-domestic select,.phone-domestic input').val('');
                _this.notJapanese();
            }


            //Check has change
            $("#js_buyer_homephone").on("countrychange", function(e) {
                const countryData_phone = $("#js_buyer_homephone").intlTelInput("getSelectedCountryData");
                let formLang = countryData_phone.iso2;
                $('#js_buyer_homephone_nation').val(formLang);


                if(formLang == 'jp'){
                   //Remove class validate change language
                    $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').each(function(i,ele){
                        const name  = $(ele).attr('name');
                        if( name.search('postalcode') !== -1) {
                            $(ele).removeClass('js_valid-postalcode');
                        } else {
                            $(ele).removeClass('required');
                        }
                    });

                    $('.phone-domestic select,.phone-domestic input, .phone-domestic textarea').each(function(i,ele){
                        const name  = $(ele).attr('name');
                        if( name.search('postalcode') !== -1) {
                            $(ele).addClass('js_valid-postalcode');
                        } else {
                            $(ele).addClass('required');
                        }
                    });
                    //End

                    $('.phone-domestic').fadeIn();
                    $('.phone-foreign').fadeOut();
                    $('.phone-foreign select').removeClass('active');
                    $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').val('');
                    $('input[name=buyer_postalcode_foreign]').removeClass('js_valid-postalcode');
                    _this.isJapanese();
                }else{
                    //Remove class validate change language
                    $('.phone-foreign select,.phone-foreign input, .phone-foreign textarea').each(function(i,ele){
                        const name  = $(ele).attr('name');
                        if( name.search('postalcode') !== -1 ) {
                            $(ele).addClass('js_valid-postalcode');
                        } else {
                            $(ele).addClass('required');
                        }
                    });
                    $('.phone-domestic select,.phone-domestic input, .phone-domestic textarea').each(function(i,ele){
                        const name  = $(ele).attr('name');
                        if( name.search('postalcode') !== -1 ) {
                            $(ele).removeClass('js_valid-postalcode');
                        } else {
                            $(ele).removeClass('required');
                        }
                    });
                    //End
                    
                    
                    $('input[name=buyer_postalcode_foreign]').addClass('js_valid-postalcode');
                    $('.phone-foreign').fadeIn();
                    $('.phone-domestic').fadeOut();
                    $('.phone-domestic select').removeClass('active');
                    $('.phone-domestic select,.phone-domestic input').val('');
                    _this.notJapanese();
                }
             
            });
       
           
        }
    }


    this.notJapanese = function()
    {
        const _this = this;

        const names = ['buyer_districts']; //'buyer_share_1_districts','buyer_share_2_districts'

        $.each(names,function(i,name){
            $('select[name='+name+']').val('');
            $('select[name='+name+']').closest('.form-group').fadeOut();
            $('select[name='+name+']').removeClass('required');
        });

        $('.js_is-japanese').css('display','none');

        // $('.currence-unit').text('USD');

        //Check name share 2 has exist
        // _this.check_validate_if_fill_2();
    }

    this.isJapanese = function()
    {
        const _this = this;

        const names = ['buyer_districts']; //,'buyer_share_2_districts','buyer_share_1_districts',
 
        $.each(names,function(i,name){
            $('select[name='+name+']').val('');
            $('select[name='+name+']').closest('.form-group').fadeIn();

            $('select[name='+name+']').addClass('required');

        });
        $('.js_is-japanese').css('display','block');

        // $('.currence-unit').text('万円');

    }

    this.datePickerBirth = function()
    {
        $('.datePickerBirth').datepicker({
            language: 'ja',
            disableTouchKeyboard: true,
            autoclose:true,
            todayHighlight: true,
            ignoreReadonly: true,
            defaultViewDate: new Date(1980, 1, 1),
        });
    }

}
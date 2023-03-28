$(function($) {
    const run_contact_submit = new contact_submit($);
    $(document).ready(function() {
        run_contact_submit.ready();
    });
});


function contact_submit($) {

	this.ready = function() {
        const _this = this;
        _this.click_submit();
        _this.cleanValueInput();
        _this.click_confirm();
        _this.phone_by_nation();
        _this.check_validate_if_fill();
        _this.datePickerBirth();
        _this.checkYesNo();
        
        $('select[name="app_room"]').trigger('change');
    }  

    this.cleanValueInput = function()
    {
    	$('.frm input,.frm select,.frm textarea').on('keyup change',function(e){
    		const currentTarget = e.currentTarget;
            const name = $(currentTarget).attr('name');
            const isType = $(currentTarget).attr('type');
    		let val_clean = $(currentTarget).val();
            if( isType == 'number' ){
                val_clean = val_clean.replace(/[^0-9\.]/g,'');
            }
    		$(currentTarget).val(val_clean);
            $('.view_'+name).text(val_clean);

            //Callback - Add text to confirm when use auto fill postcode
            const names = ['buyer_districts']; 
            $.each(names,function(i,name){
                const hasVal = $('select[name='+name+']').val();
                if( hasVal !== null && hasVal !== undefined && hasVal !== '' ){
                    $('select[name='+name+']').addClass('active');
                    $('.view_'+name).text(hasVal);
                }
            });
            //Callback - Add text to confirm when use auto fill postcode
            const name_adds = ['buyer_address']; 
            $.each(name_adds,function(i,name){
                const hasVal = $('input[name='+name+']').val();
                if( hasVal !== null && hasVal !== undefined && hasVal !== '' ){
                    $('.view_'+name).text(hasVal);
                }
            });
    	});


    }

    this.click_submit = function()
    {
        $('#buyerBack').on('click',function(e){
            $('.js_contact-buyer-confirm').fadeOut();
            $('.js_frm-contact-buyer').fadeIn();
        });

        $('#buyerSubmit').on('click',function(e){
            const currentTarget = e.currentTarget;
            $(currentTarget).prop('disabled', true);
            $('form.js_frm-contact-buyer').submit();
        });

    }

 

    this.click_confirm = function()
    {
    	const _this = this;
    	$('.js_submit-ct-buyer').on('click',function(e){
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
    		if( phonenumber_box_error.indexOf(false) !== -1 || phonenumber_box_error.indexOf('buyer_homephone:false') !== -1 && phonenumber_box_error.indexOf('buyer_mobilephone:false') !== -1  ){
    			isValid = false;
    		} 
            if(phonenumber_box_error.indexOf('buyer_homephone:true') !== -1 || phonenumber_box_error.indexOf('buyer_mobilephone:true') !== -1 ){
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
            
    		if( postalcode_box_error.indexOf(false) !== -1 ){
    			isValid = false;
    		}
          

    		//Check email
    		const email_box_error = _this.ele_isEmail();
           
    		if( email_box_error.indexOf(false) !== -1 ){
    			isValid = false;
    		}
            
    		//Check radio
    		const radio_box_error = _this.ele_isRadio();
            
    		if( radio_box_error.indexOf(false) !== -1 ){
    			isValid = false;
    		}
           
            //Only Special
            if( !$('form #ck_agree').is(':checked') ){
                var ERROR_NO_INPUT = miyanomori_validate_msg.field_required;
                var htmlError = '<span class="error-required" style="color: red">' +  ERROR_NO_INPUT + '</span>';
                $('form #ck_agree').closest('.custom-control').append(htmlError);
                isValid = false;
            } else {
                $('form #ck_agree').closest('.custom-control').find('.error-required').remove();
            }

        
    		if (!isValid) {
                event.preventDefault();
                const targetToTop = $('.js_frm-contact-buyer').offset().top ? $('.js_frm-contact-buyer').offset().top : 0;
                const navHight = ($('header').outerHeight() != undefined)?$('header').outerHeight():0;
                $('html, body').animate({
                    scrollTop: targetToTop - navHight
                }, 1000);
            }

            if (isValid) {
                $('.js_contact-buyer-confirm').fadeIn();
                $('.js_frm-contact-buyer').fadeOut();
                $('title').text(miyanomori_validate_msg.title_confirm);
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
    	const email = '.js_valid-email'; //Change name if class name change
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
    	const phonenumber= '.js_valid-postalcode'; //Change name if class name change
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
    	const phonenumber= '.js_valid-phonenumber'; //Change name if class name change
    	const phonenumber_box_error = [];
        const name_specital = ['buyer_mobilephone','buyer_homephone'];
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
    	const required = '.required'; //Change name if class name change
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
	    var ERROR_NO_INPUT = _this.takeMessageRequired(elem);;
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
        const ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
        let isValid = true;
        switch (true) {
            case elem.val() == '':
                _this.addErrorMessage(elem, ERROR_NO_INPUT);
                // $(elem).not('[name=buyer_company_phone]').addClass('border-danger');
                isValid = false;
                break;
            case !elem.intlTelInput('isValidNumber'):
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

    this.invalidCheckPostalCode = function(elem)
	{
		const _this = this;
		const ERROR_NO_INPUT = _this.takeMessageRequired(elem);;
	    const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
	    let isValid = true;
	    switch (true) {
            case elem.val() == '':
 				_this.addErrorMessage(elem, ERROR_NO_INPUT);
                isValid = false;
                break;
            case elem.val().match(/^[0-9]+$/) == null:
              	_this.addErrorMessage(elem, ERROR_FORMAT);
                isValid = false;
                break;
            case elem.val().match(/^[0-9]{0,7}$/) == null:
                _this.addErrorMessage(elem, ERROR_FORMAT);
                isValid = false;
                break;
            default:
             	_this.removeErrorMessage(elem);
        }
        return isValid;
	}

	this.invalidCheckEmail = function(elem)
	{
	    const _this = this;
	    const ERROR_NO_INPUT = _this.takeMessageRequired(elem);;
	    const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
	    let isValid = true;
        switch (true) {
            case elem.val() == '':
                _this.addErrorMessage(elem, ERROR_NO_INPUT);
                isValid = false;
                break;
            case elem.val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/) == null:
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
        AOS.init();
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

$.fn.changeVal = function (v) {
    return this.val(v).trigger("change");
}

function demo_buyer()
{


    var form = $('.js_frm-contact-buyer');

    // form.find('select[name="app_room"]').changeVal('test1');

    form.find('input[name="buyer_fullname"]').changeVal('Khanh Nguyen');
    form.find('input[name="buyer_figananame"]').changeVal('官グエーン');

    form.find('input[name="buyer_birth"]').changeVal('2021/04/16');

    form.find('input[name="buyer_homephone"]').changeVal('0974226333');
    form.find('input[name="buyer_mobilephone"]').changeVal('0974226333');

    form.find('input[name="buyer_postalcode"]').changeVal('1234567');
  


    form.find('select[name="buyer_districts"]').changeVal('test1');

    form.find('input[name="buyer_address"]').changeVal('Tokyo Japan');

    form.find('input[name="buyer_contact_method"][value="あり"]').prop('checked',true);


    form.find('select[name="buyer_current_residence"]').changeVal('test1');


    form.find('input[name="buyer_email"]').changeVal('khanh@propolife.co.jp');

    form.find('input[name="buyer_company_name"]').changeVal('7');
    form.find('input[name="buyer_department_name"]').changeVal('1');
    form.find('input[name="buyer_company_phone"]').changeVal('0974226333');
    form.find('input[name="buyer_company_location"]').changeVal('3');


    form.find('input[name="buyer_share_1_contact_method"][value="あり"]').prop('checked',true);

    form.find('input[name="buyer_share_1_fullname"]').changeVal('5');
    form.find('input[name="buyer_share_1_figananame"]').changeVal('000000000');
    form.find('input[name="buyer_share_1_birth"]').changeVal('2021/04/16');
    form.find('input[name="buyer_share_1_relationship"]').changeVal('6');
    form.find('input[name="buyer_share_1_postalcode"]').changeVal('1234567');
    form.find('select[name="buyer_share_1_districts"]').changeVal('test1');
    form.find('input[name="buyer_share_1_address"]').changeVal('khanh@propolife.co.jp');
    form.find('input[name="buyer_share_1_company_name"]').changeVal('7');
    form.find('input[name="buyer_share_1_company_location"]').changeVal('3');
    

    form.find('input[name="buyer_share_2_fullname"]').changeVal('5');
    form.find('input[name="buyer_share_2_figananame"]').changeVal('000000000');
    form.find('input[name="buyer_share_2_birth"]').changeVal('2021/04/16');
    form.find('input[name="buyer_share_2_relationship"]').changeVal('6');
    form.find('input[name="buyer_share_2_postalcode"]').changeVal('1234567');
    form.find('select[name="buyer_share_2_districts"]').changeVal('test1');
    form.find('input[name="buyer_share_2_address"]').changeVal('khanh@propolife.co.jp');
    form.find('input[name="buyer_share_2_company_name"]').changeVal('7');
    form.find('input[name="buyer_share_2_company_location"]').changeVal('3');
   
    form.find('input[name="buyer_financial_annual_income"]').changeVal('8');
    form.find('input[name="buyer_financial_own_funds"]').changeVal('9');
    form.find('input[name="buyer_financial_own_funds_preventive"]').changeVal('10');
    form.find('input[name="buyer_financial_loan"]').changeVal('11');
    form.find('input[name="buyer_financial_loan_bankname"]').changeVal('12');
    form.find('input[name="buyer_financial_borrow"]').changeVal('13');
    form.find('textarea[name="buyer_financial_borrow_detail"]').changeVal('14');


    form.find('input[name="buyer_income_schedule_method"][value="あり"]').prop('checked',true);
    form.find('input[name="buyer_income_fullname"]').changeVal('16');
    form.find('input[name="buyer_income_age"]').changeVal('17');
    form.find('input[name="buyer_income_work_place"]').changeVal('16');
    form.find('input[name="buyer_income_replactionship"]').changeVal('17');
    form.find('input[name="buyer_income_pre_years"]').changeVal('17');
    form.find('input[name="buyer_income_work_place"]').changeVal('16');
    form.find('input[name="buyer_income_replactionship"]').changeVal('17');
    form.find('input[name="buyer_income_pre_years"]').changeVal('17');


    form.find('input[name="buyer_replace_method"][value="あり"]').prop('checked',true);
    form.find('select[name="buyer_replace_property_type"]').changeVal('test1');
    form.find('select[name="buyer_replace_current_situation"]').changeVal('test1');

    form.find('textarea[name="buyer_inquiry"]').changeVal('1731231231');

  
}







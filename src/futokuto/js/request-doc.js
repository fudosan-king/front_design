$(function($) {
    const run_contact_submit = new contact_submit($);
    $(document).ready(function() {

        run_contact_submit.ready();
    });
});


function contact_submit($) {

    this.html = {
        parent_frm: '.frm',
        submit_cfr_form: '.js-submit-cfr',
        cfr_form: '.js-cfr-form',
        agree_privacy: '#ck_agree',
        action_back: '#action_back',
        action_submit: '#action_submit',
    }

	this.ready = function() {
        const _this = this;
        _this.click_submit();
        _this.cleanValueInput();
        _this.click_confirm();
        // _this.check_validate_if_fill();
        // _this.datePickerBirth();
        // _this.checkYesNo();
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
    	});


    }

    this.click_submit = function()
    {
        const _this = this;
        $(_this.html.action_back).on('click',function(e){
            $(_this.html.cfr_form).fadeOut();
            $(_this.html.parent_frm).fadeIn();
        });

        $(_this.html.action_submit).on('click',function(e){
            const currentTarget = e.currentTarget;
            // $(currentTarget).prop('disabled', true);
            $(_this.html.parent_frm).submit();
        });

    }

 

    this.click_confirm = function()
    {
    	const _this = this;
    	$(_this.html.submit_cfr_form).on('click',function(e){
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
    		if( phonenumber_box_error.indexOf(false) !== -1  ){
    			isValid = false;
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
            if( !$(_this.html.agree_privacy,_this.html.parent_frm).is(':checked') ){
                // var ERROR_NO_INPUT = miyanomori_validate_msg.field_required;
                var ERROR_NO_INPUT = 'この項目は必須です';
                var htmlError = '<span class="error-required" style="color: red">' +  ERROR_NO_INPUT + '</span>';
                $(_this.html.agree_privacy,_this.html.parent_frm).next().addClass('validate-error');
                $(_this.html.agree_privacy,_this.html.parent_frm).closest('.agree-privacy').find('.label_required').append(htmlError);
                isValid = false;
            } else {
                $(_this.html.agree_privacy,_this.html.parent_frm).next().removeClass('validate-error');
                $(_this.html.agree_privacy,_this.html.parent_frm).closest('.agree-privacy').find('.error-required').remove();
            }

        
    		if (!isValid) {
                event.preventDefault();
                const targetToTop = $(_this.html.parent_frm).offset().top ? $(_this.html.parent_frm).offset().top : 0;
                const navHight = ($('header').outerHeight() != undefined)?$('header').outerHeight():0;
                $('html, body').animate({
                    scrollTop: targetToTop - navHight
                }, 1000);
            }

            if (isValid) {
                $(_this.html.cfr_form).fadeIn();
                $(_this.html.parent_frm).fadeOut();
                $('title').text('');
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
        // $(elem).removeClass('validate-error');
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
    	// var ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        var ERROR_NO_INPUT = 'この項目は必須です';
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
	    // var ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        var ERROR_NO_INPUT = 'この項目は必須です';
	    var isValid = true;
	    if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
	      _this.addErrorMessage(elem, ERROR_NO_INPUT);
          elem.addClass('validate-error');
	      isValid = false;
	    }else{
	      _this.removeErrorMessage(elem);
          elem.removeClass('validate-error');
	    }
	    return isValid;
    }

    this.valid_phonenumber = function(elem)
    {
        const _this = this;
        // const ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        var ERROR_NO_INPUT = 'この項目は必須です';
        // const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
        const ERROR_FORMAT = '無効な形式です';
        let isValid = true;
        switch (true) {
            case elem.val() == '':
                _this.addErrorMessage(elem, ERROR_NO_INPUT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            // case !elem.intlTelInput('isValidNumber'):
            //     _this.addErrorMessage(elem, ERROR_FORMAT);
            //     elem.addClass('validate-error');
            //     isValid = false;
            //     break;
            case elem.val().match(/^[0-9]{10,11}$/) == null:
                _this.addErrorMessage(elem, ERROR_FORMAT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            default:
                _this.removeErrorMessage(elem);
                elem.removeClass('validate-error');
        }
        return isValid;
    }

    this.invalidCheckPostalCode = function(elem)
	{
		const _this = this;
		// const ERROR_NO_INPUT = _this.takeMessageRequired(elem);
        var ERROR_NO_INPUT = 'この項目は必須です';
	    // const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
        const ERROR_FORMAT = '無効な形式です';
	    let isValid = true;
	    switch (true) {
            case elem.val() == '':
 				_this.addErrorMessage(elem, ERROR_NO_INPUT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            case elem.val().match(/^[0-9]+$/) == null:
              	_this.addErrorMessage(elem, ERROR_FORMAT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            case elem.val().match(/^[0-9]{0,7}$/) == null:
                _this.addErrorMessage(elem, ERROR_FORMAT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            default:
             	_this.removeErrorMessage(elem);
                elem.removeClass('validate-error');
        }
        return isValid;
	}

	this.invalidCheckEmail = function(elem)
	{
	    const _this = this;
	    // const ERROR_NO_INPUT = _this.takeMessageRequired(elem);;
	    // const ERROR_FORMAT = miyanomori_validate_msg.invalid_format;
        var ERROR_NO_INPUT = 'この項目は必須です';
        const ERROR_FORMAT = '無効な形式です';
	    let isValid = true;
        switch (true) {
            case elem.val() == '':
                _this.addErrorMessage(elem, ERROR_NO_INPUT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            case elem.val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/) == null:
                _this.addErrorMessage(elem, ERROR_FORMAT);
                elem.addClass('validate-error');
                isValid = false;
                break;
            default:
                _this.removeErrorMessage(elem);
                elem.removeClass('validate-error');
        }
	    return isValid;
	}



}

$.fn.changeVal = function (v) {
    return this.val(v).trigger("change");
}

function demo_buyer()
{
    var form = $('.js-request-doc');

    form.find('input[name="name_customer"]').changeVal('Nguyen Huynh Anh Thi');
    form.find('input[name="postal"]').changeVal('5400002');
    form.find('select[name="postal"]').changeVal('大阪府');
    form.find('input[name="city"]').changeVal('大阪市中央区大阪城');
    form.find('input[name="number_room"]').changeVal('1001');
    form.find('input[name="phonenumber"]').changeVal('0943980279');
    form.find('input[name="email"]').changeVal('anhthi92@propolife.co.jp');
    form.find('textarea[name="inquiry"]').changeVal('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

  
}







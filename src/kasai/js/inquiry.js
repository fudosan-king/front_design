var onloadCallback_Kasai_Inquiry = function () {
    if(document.querySelector('#reCAPTCHAv2')){
        inquiryFormRecaptchaKasai = grecaptcha.render('reCAPTCHAv2', {
            'sitekey': '6LdPxMoZAAAAAC3loiP1zl9r44blp-QySkmbiLoG',
            'callback': validateReCaptchaKasaiIn,
            'expired-callback': expiredReCaptchaKasaiIn
        });
    }
};

var validateReCaptchaKasaiIn = function (token) {
    if (token.length != 0) {
        document.querySelector('#token-recaptcha').value = token;
        document.querySelector('#btn_send').removeAttribute('disabled');
    }
};

var expiredReCaptchaKasaiIn = function () {
    document.querySelector('#token-recaptcha').value = '';
    document.querySelector('#btn_send').setAttribute('disabled', true);
    grecaptcha.reset();
}

$(function($) {

    $(document).ready(function(){
        $('.section_inquiry .lk-zip-code').off('keyup').on('keyup', function(e){

            AjaxZip3.zip2addr(this, '', 'pref','address')

            AjaxZip3.onFailure = function() {
                AjaxZip3.fpref.value = null;
                AjaxZip3.faddr.value = '';
            }
        });

    });
    
    var queryString = function(){

        var search = window.location.search;
        var res = {};
        var str = search.substr(1);
        var params = str.split("&");
        params.forEach(function(data){
            var obj = data.split("=");
            res[obj[0]] = obj[1];
        });
        return res;
    }

    if (typeof queryString()['finish'] !== 'undefined' && queryString()['finish'] == '1'){
        $('.breadcrumb_reservation .flex-fill').removeClass('active');
        $('.breadcrumb_reservation .flex-fill.finish').addClass('active');
        $('.explanation').hide();
    }

    $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}.form-control.datepicker:disabled, .form-control.datepicker[readonly] {background-color: initial;}.datepicker .datepicker-days .day.disabled:not(.today) {background: #efefef;border-radius: 0;}</style>');

    $('input[name="phone_number"]').intlTelInput({
        allowDropdown: false,
        initialCountry: 'jp',
        onlyCountries: ["jp"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"
    });


    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.breadcrumb_reservation .flex-fill').removeClass('active');
            $('.breadcrumb_reservation .flex-fill.confirm').addClass('active');
            $('.explanation').hide();
            $("html, body").animate({ scrollTop: $($('.breadcrumb_reservation')).offset().top - 250 }, 0);
            $('.data-confirm').fadeIn();

            $('.cfr_name').html($('input[name="last_name"]').val() + ' ' + $('input[name="first_name"]').val());
            $('.cfr_name_kana').html($('input[name="myouji"]').val() + $('input[name="namae"]').val());

            $('.cfr_email').html( $('input[name="email"]').val());
            $('.cfr_phone_number').html( $('input[name="phone_number"]').val());

            $('.cfr_address').html('〒' +
                $('input[name="post"]').val().substr(0, 3) + '-' + $('input[name="post"]').val().substr(3) +
                $('select[name="pref"]').val() +
                // $('input[name="city"]').val() +
                // $('input[name="aza"]').val() +
                $('input[name="address"]').val() +
                $('input[name="building"]').val()
            );

            $('.cfr_purchase_time').html($('select[name="purchase_time"]').val());

            $('.cfr_budget').html($('select[name="budget"]').val());

            var val = [];
            $('input[name="floor_plan[]"]:checked').each(function(i){
                val[i] = $(this).val();
            });

            val = val.join(', ');
            $('.cfr_floor_plan').html(val);

            $('.cfr_floor_size').html($('select[name="floor_size"]').val());
            
            $('.cfr_inquiry_content').html($('textarea[name="inquiry_content"]').val());
        }else{
            $("html, body").animate({ scrollTop: $($('#pardotFormKasai .validate-error')[0]).offset().top - 150 }, 300);
        }
    });

    $('#btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-confirm').hide();
        $('.breadcrumb_reservation .flex-fill').removeClass('active');
        $('.breadcrumb_reservation .flex-fill.input').addClass('active');
        $('.explanation').show();
        $("html, body").animate({ scrollTop: $($('.breadcrumb_reservation')).offset().top - 250 }, 0);
        $('.data-input').fadeIn();
        
        grecaptcha.reset();
        $('#token-recaptcha').val('');
        $('#btn_send').attr('disabled', true);
    });

    $('#btn_send').click(function(event) {
        /* Act on the event */
        // if(!checkValidate()){
        //     return false;
        // }

        var token = grecaptcha.getResponse(inquiryFormRecaptchaKasai);
        var form = $('form[name="pardotFormKasai"]');
        
        $.post('/kasai/includes/api.php?callback=api&name=form', 
            {'recaptcha_token': token}, function(data) {
                console.log(data);
                if (data.success == true){
                    form.attr('action', data.form_url);
                    form.submit();
                } else {
                    // Not verified - show form error
                    alert('Robot detected!')
                }
        });

    });

    function check_value_type(value, type) {
        var pattern = '';
        switch(type) {
          case 'hiragana':
            pattern = /^([ぁ-ん]+)$/;
            break;
          case 'katakana':
            pattern = /^([ァ-ヶー]+)$/;
            break;
          case 'number':
            pattern = /^([0-9]+)$/;
            break;
          default:
            pattern = /^([a-zA-Z0-9]+)$/;
        }
        return pattern.test(value);
    }

    function checkValidate(){
        var isValidate = true;
        var elemsChk = [];
        $.each($('form[name="pardotFormKasai"]').find('[data-require="true"]'), function(index, el) {
            elemsChk.push(el);
        });

        let elemCustom = [];

        $.each($('form[name="pardotFormKasai"]').find('[data-custom="true"]'), function(index, el) {
            elemCustom.push(el);
        });


        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'checkbox':{
                        if ($(elem).is(':checked') == false){
                            isValidate = false;
                            $(elem).siblings('label').css('color', '#ff0000');
                        }else{
                            $(elem).siblings('label').css('color', '#514736');
                        }
                    }break;
                    case 'select-one': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            $(elem).removeClass('validate-error');
                        }
                    }break;
                    case 'email': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val().trim() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            // EMAIL CHECK
                            var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
                            if (!emailPattern.test($(elem).val())) {
                                isValidate = false;
                                $(elem).addClass('validate-error');
                            } else {
                                $(elem).removeClass('validate-error');
                            }
                        }
                    }break;
                    case 'text': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val().trim() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            $(elem).removeClass('validate-error');
                        }
                    }break;
                }
            }

        });

        $.each(elemCustom, function(key, elem) {
            /** custom type */
            elem = $(elem);
            let dataType = elem.attr('data-type');
            if (typeof dataType !== 'undefined') {
                switch (dataType) {
                    case 'zip-code':
                        if (elem.val().length === 7) {
                            $(elem).removeClass('validate-error');
                        }else{
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }
                        break;
                    case 'lk-name':
                        if (elem.val().trim() == '') {
                            break;
                        }
                        if (/\d/.test(elem.val())) {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        } else {
                            $(elem).removeClass('validate-error');
                        }
                        break;
                    case 'lk-date-item':
                        if ($('input[name="request_document[]"]:checked').val() == '来場予約') {
                            if(elem.val() == '' || elem.val() == '時間を選択') {
                                isValidate = false;
                                $(elem).addClass('validate-error');
                            } else {
                                $(elem).removeClass('validate-error');
                            }
                        } else {
                            $(elem).removeClass('validate-error');
                        }
                        break;
                }
            }
        });

        if(!check_value_type($('input[name="myouji"]').val(), 'katakana'))
        {
            isValidate = false;
            $('input[name="myouji"]').addClass('validate-error');
        } else {
            $('input[name="myouji"]').removeClass('validate-error');
        }

        if(!check_value_type($('input[name="namae"]').val(), 'katakana'))
        {
            isValidate = false;
            $('input[name="namae"]').addClass('validate-error');
        } else {
            $('input[name="namae"]').removeClass('validate-error');
        }

        if(!$('input[name="phone_number"]').intlTelInput('isValidNumber')){
            isValidate = false;
            $('input[name="phone_number"]').addClass('validate-error');
        } else {
            $('input[name="phone_number"]').removeClass('validate-error');
        }

        return isValidate;
    }

    demoKasaiIn = (name='') => {
        switch(name){
            case 'luu': {
                $('input[name="name"]').val('Tu Tron');
                $('input[name="email"]').val('tuttc97@propolife.co.jp');
                $('input[name="phone_number"]').val('123456789');
                $('textarea[name="inquiry_content"]').val('LogKnot VN Dev Team testing form. Tu Tron');
            }break;
            case '': {

                $('input[name="last_name"]').val('Tu');
                $('input[name="first_name"]').val('Tron');
                $('input[name="myouji"]').val('グエン');
                $('input[name="namae"]').val('カン');

                $('input[name="post"]').val('1000013');
                AjaxZip3.zip2addr('post', '','pref','address');

                $('input[name="email"]').val('tuttc97@propolife.co.jp');
                $('input[name="phone_number"]').val('07041334163');
                $('select[name="budget"]').val('～6000万円');
                $('select[name="purchase_time"]').val('できるだけ早く');
                $('select[name="floor_plan[]"]').val('1LDK,2LDK');
                $('select[name="floor_size"]').val('30㎡～');

                $('textarea[name="inquiry_content"]').val('LogKnot VN Dev Team testing Tu Tron');
            }break;
        }
        
    }

});
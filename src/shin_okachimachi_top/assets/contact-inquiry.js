var onloadCallback_Inquiry = function () {
    if(document.querySelector('#reCAPTCHAv2')){
        inquiryFormRecaptchaV2 = grecaptcha.render('reCAPTCHAv2', {
            'sitekey': '6LdPxMoZAAAAAC3loiP1zl9r44blp-QySkmbiLoG',
            'callback': validateReCaptchaV2,
            'expired-callback': expiredReCaptchaV2
        });
    }
};

var validateReCaptchaV2 = function (token) {
    if (token.length != 0) {
        document.querySelector('#token-recaptcha').value = token;
        document.querySelector('#btn_send').removeAttribute('disabled');
    }
};

var expiredReCaptchaV2 = function () {
    document.querySelector('#token-recaptcha').value = '';
    document.querySelector('#btn_send').setAttribute('disabled', true);
    grecaptcha.reset();
}

const string_slip_japanese = '　';
const status_fail = '×満席';
$(function($) {

    $(document).ready(function(){
        if($('input[name="request_document[]"]').length > 0){
            if (location.search.includes('data-request')) {
                showHideDateItemField(true);
            } else {
                showHideDateItemField(false);
            }

            $('input[name="request_document[]"]').on('click', function(event) {
                $('input[name="request_document"]').val($(this).val());
                if ($(this).val() == '来場予約') {
                    showHideDateItemField(true);
                } else {
                    showHideDateItemField(false);
                }
            });
        }

        $('.section_inquiry .lk-zip-code').off('keyup').on('keyup', function(e){

            AjaxZip3.zip2addr(this, '', 'pref','address')

            AjaxZip3.onFailure = function() {
                AjaxZip3.fpref.value = null;
                AjaxZip3.faddr.value = '';
            }
        });

        change_date_time('date_time_1', 'time_1')
        change_date_time('date_time_2', 'time_2')

    });

    function change_date_time(ele_input, ele_select) {
        $('input[name=' + ele_input + ']').change('input', function () {
            $('select[name=' + ele_select + '] option').each(function (index, option) {
                var value = option.value
                if ((value.split(string_slip_japanese)[1]) == status_fail) {
                    $(this).attr('disabled', 'disabled')
                    $(this).css('background-color', '#efefef')
                }
            });
        })
    }

    const showHideDateItemField = function (show) {
        if(show) {
            document.getElementById("group_date_time").hidden = false;
            document.getElementById("cfr_date_time_1").hidden = false;
            document.getElementById("cfr_date_time_2").hidden = false;
        } else {
            document.getElementById("group_date_time").hidden = true;
            document.getElementById("cfr_date_time_1").hidden = true;
            document.getElementById("cfr_date_time_2").hidden = true;
        }
    }

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
        $('.breadcrumb_reservation .flex-fill').removeClass('current');
        $('.breadcrumb_reservation .flex-fill.finish').addClass('current');
    }

    $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}.form-control.datepicker:disabled, .form-control.datepicker[readonly] {background-color: initial;}.datepicker .datepicker-days .day.disabled:not(.today) {background: #efefef;border-radius: 0;}</style>');

    var today = new Date();
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var meetday = moment();

    switch(today.getDay()){
        case 2: meetday = moment(today).add(2, 'day'); break;
        case 3: meetday = moment(today).add(1, 'day'); break;
        default: meetday = moment(today).add(1, 'day'); break;
    }

    const checkValidDate = function (currentResult, date) {
        if(typeof LK_SHINOKACHIMACHI !== 'undefined' && LK_SHINOKACHIMACHI.custom_date.length > 0) {
            const customDate = LK_SHINOKACHIMACHI.custom_date;
            for(let i = 0; i < customDate.length; i++) {
                if (customDate[i].onoff == 'off') {
                    if(date.getTime() == (new Date(customDate[i].date)).getTime()) {
                        return false;
                    }
                } else {
                    if(date.getTime() == (new Date(customDate[i].date)).getTime() && !currentResult) {
                        return true;
                    }
                }

            }
        }
        return currentResult;
    }

    const inquiryDatePicker = $('.datepicker').datepicker({
        // todayHighlight: true,
        // format: 'yyyy年mm月dd日',
        // language: 'ja',
        autoclose:true,
        todayHighlight: true,
        beforeShowDay: function (date) {

            if(date == (new Date()) )
                return false;

            if(date.getTime() < (new Date()).getTime() )
                return false;

            if (date.getTime() < (new Date('2022/10/15')).getTime())
                return false;

            if (date.getDay() == 2 || date.getDay() == 3) {
                return checkValidDate(false, date);
            }

            return checkValidDate(true, date);
        },

    });

    inquiryDatePicker.off('changeDate').on('changeDate', function(e) {
        if(typeof LK_SHINOKACHIMACHI !== 'undefined' && LK_SHINOKACHIMACHI.custom_date.length > 0) {
            let currentDate = e.date;
            let currentDateEle = $(e.currentTarget);
            let wrapEle = currentDateEle.closest('.wrap-datetime');
            let currentTimeEle = wrapEle.find('select');
            let hasChange = false;
            let options = '';
            for(let i = 0; i < LK_SHINOKACHIMACHI.custom_date.length; i++) {
                const customDate = LK_SHINOKACHIMACHI.custom_date;
                if (customDate[i].onoff == 'on' && currentDate.getTime() == new Date(customDate[i].date).getTime()) {
                    hasChange = true;
                    options = `<option value="${LK_SHINOKACHIMACHI.default_time_text}">${LK_SHINOKACHIMACHI.default_time_text}</option>`;
                    options += customDate[i].time_options.map(opt => createOptions(opt)).join('');
                    currentTimeEle.html(options);
                    break;
                }
            }
            if (!hasChange) {
                options = LK_SHINOKACHIMACHI.default_times.map(opt => createOptions(opt)).join('');
                currentTimeEle.html(options);
            }
        }
    });

    function createOptions(option) {
        return `<option value="${option}">${option}</option>`
    }

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
            $('.breadcrumb_reservation .flex-fill').removeClass('current');
            $('.breadcrumb_reservation .flex-fill.confirm').addClass('current');
            $("html, body").animate({ scrollTop: $($('.breadcrumb_reservation')).offset().top - 250 }, 0);
            $('.data-confirm').fadeIn();

            // $('.cfr_property_name').html($('select[name="property_name"]').val());

            $('.cfr_request_document').html($('input[name="request_document[]"]:checked').val());

            $('.cfr_name').html($('input[name="last_name"]').val() + ' ' + $('input[name="first_name"]').val());
            $('.cfr_name_kana').html($('input[name="myouji"]').val() + $('input[name="namae"]').val());

            $('.cfr_address').html('〒' +
                $('input[name="post"]').val().substr(0, 3) + '-' + $('input[name="post"]').val().substr(3) +
                $('select[name="pref"]').val() +
                // $('input[name="city"]').val() +
                // $('input[name="aza"]').val() +
                $('input[name="address"]').val() +
                $('input[name="building"]').val()
            );

            $('.cfr_email').html( $('input[name="email"]').val());
            $('.cfr_phone_number').html( $('input[name="phone_number"]').val());

            $('.cfr_budget').html($('select[name="budget"]').val());

            var time_first = $('select[name="time_1"] option:selected').val();
            var time_second = $('select[name="time_2"] option:selected').val();

            $('.cfr_date_time_1').html($('input[name="date_time_1"]').val() + ' ' + time_first.split(string_slip_japanese)[0]);

            $('.cfr_date_time_2').html($('input[name="date_time_2"]').val() + ' ' + time_second.split(string_slip_japanese)[0]);
            

            $('.cfr_inquiry_content').html($('textarea[name="inquiry_content"]').val());
        }else{
            $("html, body").animate({ scrollTop: $($('#pardotForm .validate-error')[0]).offset().top - 150 }, 300);
        }
    });

    $('#btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-confirm').hide();
        $('.breadcrumb_reservation .flex-fill').removeClass('current');
        $('.breadcrumb_reservation .flex-fill.input').addClass('current');
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

        var token = grecaptcha.getResponse(inquiryFormRecaptchaV2);
        var form = $('form[name="pardotForm"]');
        console.log(form.find('select[name="time_1"]').val().split(" ")[0])
        $('select[name="time_1"]  option:selected').val(form.find('select[name="time_1"]').val().split(string_slip_japanese)[0])
        $('select[name="time_2"]  option:selected').val(form.find('select[name="time_2"]').val().split(string_slip_japanese)[0])
        let planID = form.find('#plan_id').val();
        $.post('/shinokachimachi/?callback=api&name=form&plan_id=' + planID,
            {'recaptcha_token': token}, function(data) {
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

        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        var elemsChk = [];
        $.each($('form[name="pardotForm"]').find('[data-require="true"]'), function(index, el) {
            elemsChk.push(el);
        });

        let elemCustom = [];

        $.each($('form[name="pardotForm"]').find('[data-custom="true"]'), function(index, el) {
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

    demo = (name='') => {
        switch(name){
            case 'luu': {
                $('input[name="name"]').val('Van Do');
                $('input[name="email"]').val('vandd90@propolife.co.jp');
                $('input[name="phone_number"]').val('123456789');
                $('input[name="datepicker1"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                $('select[name="time1"]').val('11:00');
                $('input[name="request_online[]"]')[1].checked = true;
                $('textarea[name="inquiry_content"]').val('LogKnot VN Dev Team testing form. Van Do');
            }break;
            case '': {
                // $('select[name="property_name"]').val('プロスタイル市ヶ尾');

                $('input[name="last_name"]').val('Do');
                $('input[name="first_name"]').val('Van');
                $('input[name="myouji"]').val('グエン');
                $('input[name="namae"]').val('カン');

                $('input[name="post"]').val('1000013');
                AjaxZip3.zip2addr('post', '','pref','address');

                $('input[name="email"]').val('vandd90@propolife.co.jp');
                $('input[name="phone_number"]').val('07041334163');
                $('select[name="budget"]').val('～6000万円');

                /* 0: Zoom, 1: Googlemeet, 2: Calling, 3: どれでも可 */
                // $('input[name="request_online[]"]')[1].checked = true;

                /* 0: する, 1: しない */
                // $('input[name="request_document[]"]')[1].checked = true;

                // $('input[name="date_time_1"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                // $('select[name="time_1"]').val('時間を選択');

                // $('input[name="date_time_2"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                // $('select[name="time_2"]').val('13:00〜');

                $('textarea[name="inquiry_content"]').val('LogKnot VN Dev Team testing form. Van Do');
            }break;
        }
        
    }

});
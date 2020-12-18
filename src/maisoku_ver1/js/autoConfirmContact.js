/*
    Author: Khanh Nguyen
    Company: Propolife Vietnam Co., Ltd
    Description: Jquery process Action for user behavior, check Validate, Change to confirm page.
*/

$(document).ready(function(){
     // $("#form_contact_submit_reservation").click(function() {
     //    submit_contact('.contact_submit_reservation');
     // });

     $("#form_contact_submit").click(function() {
        submit_contact('.frm_contact');
     });

    function submit_contact(form_contact){
        if(location.hash != "#confirm"){
            if(checkInvalid(form_contact))
                location.hash = "#confirm";
        }else{
            if(checkInvalid(form_contact)){
                var strInquiry = $.trim($(form_contact).find('#185822_4686pi_185822_4686').val());
                var strInquiryExtra = "";
                if($('#estates_hidden_info').length)
                    strInquiryExtra = $('#estates_hidden_info').val();
                var result = "";
                if(strInquiryExtra!="")
                    result = strInquiry + '<br>' + strInquiryExtra;
                else
                    result = strInquiry;

                $(form_contact).find('#185822_4686pi_185822_4686').val(result);

                // #4117 here


                if ($(form_contact).find('input[name=f185822_4724pi_185822_4724]').val() == "")
                    $(form_contact).find('input[name=f185822_4724pi_185822_4724]').val('null');

                if ($(form_contact).find('input[name=f185822_4676pi_185822_4676]').val() == "")
                    $(form_contact).find('input[name=f185822_4676pi_185822_4676]').val('null');

                if ( !$(form_contact).find('input[name=f185822_4716pi_185822_4716_21688]').prop('checked') ){
                    $(form_contact).find('input[name=f185822_4716pi_185822_4716_21688]').prop('checked', true);
                    $(form_contact).find('input[name=f185822_4716pi_185822_4716_21688]').val('false');
                }

                if ( !$(form_contact).find('input[name=f185822_4714pi_185822_4714_21686]').prop('checked') ){
                    $(form_contact).find('input[name=f185822_4714pi_185822_4714_21686]').prop('checked', true);
                    $(form_contact).find('input[name=f185822_4714pi_185822_4714_21686]').val('false');
                }

                return $(form_contact).submit();

            }else{
                location.hash = "";
            }

        }
    };

    switcherMode('.frm_contact');
    // switcherMode('.contact_submit_reservation');

    $(window).on('hashchange', function(){
        // switcherMode('.contact_submit_reservation');
        switcherMode('.frm_contact');
    });

    //FUNCTION

    function switcherMode(form_contact){
        if(location.hash == "#confirm"){
            $(form_contact).find('.normalMode').fadeOut();
            $(form_contact).find('.confirmMode').fadeIn();
            $(form_contact).find('.frm_contact_content.date').fadeOut();
            $(form_contact).find('.i_next_larg').find('span');
            if (form_contact == '.frm_contact') {
                $('#form_contact_submit_material').find('span').html('確認した内容を送信する');
            } else {
                // $('#form_contact_submit_reservation').find('span').html('確認した内容を送信する');
            }

            // Confirm Type
            var strType = "";
            if ( $(form_contact).find('#185822_4716pi_185822_4716_21688').is(':checked') ){
                strType += '見学予約 &nbsp; &nbsp;';
                $(form_contact).find('.cfrm_date_book').fadeIn();
            }
            else{
                $(form_contact).find('.cfrm_date_book').fadeOut();
            }

            if ( $(form_contact).find('#185822_4714pi_185822_4714_21686').is(':checked') ){
                strType += '資料請求';
            }

            $(form_contact).find('#cfrm_type').html(strType);

            // Confirm Date
            var strDate = "";
            if ( $(form_contact).find('#185822_4716pi_185822_4716_21688').is(':checked') ){

                strDate += $(form_contact).find('#185822_4724pi_185822_4724').val() + ' &nbsp; &nbsp;' + $(form_contact).find('#185822_4676pi_185822_4676').val();

                $(form_contact).find('#cfrm_date_book').html(strDate);
            }

            // Confirm Name
            var strName = "";
            strName = $(form_contact).find('#185822_4688pi_185822_4688').val() + $(form_contact).find('#185822_4690pi_185822_4690').val();
            $(form_contact).find('#cfrm_name').html(strName);

            // Confirm Name
            var strEmail = "";
            strEmail = $(form_contact).find('#185822_4696pi_185822_4696').val();
            $(form_contact).find('#cfrm_email').html(strEmail);


            // Confirm Name
            var strPhone = "";
            strPhone = $(form_contact).find('#185822_4698pi_185822_4698').val();
            $(form_contact).find('#cfrm_phone').html(strPhone);

            // Confirm Inquiry
            var strInquiry = $.trim($(form_contact).find('#185822_4686pi_185822_4686').val());
            var strInquiryExtra = "";
            if($('#estates_hidden_info').length)
                strInquiryExtra = $('#estates_hidden_info').val();
            var result = "";
            if(strInquiryExtra!="")
                result = strInquiry + '<br>' + strInquiryExtra;
            else
                result = strInquiry;

            $(form_contact).find('#cfrm_inquiry').html(result);

            var jump = $('.frm_contact_inquiry');
            var new_position = $(jump).offset();

            $('.step_1').removeClass('current');
            $('.step_2').addClass('current');

            $('html, body').stop().animate({ scrollTop: new_position.top - 120 }, 500);

        }else{
            $(form_contact).find('.normalMode').fadeIn();
            $(form_contact).find('.confirmMode').fadeOut();
            if($(form_contact).find('#185822_4716pi_185822_4716_21688').is(':checked')){
                $(form_contact).find('.frm_contact_content.date').fadeIn();
            }
            $(form_contact).find('#form_contact_submit').find('span').html('上記に同意して確認画面にすすむ');
        }
    }

    function checkInvalid(form_contact){

        $(form_contact).find('.errorDisplay').html('').fadeOut();

        // Validate Type
        var validType = true;
        if($(form_contact).find('#185822_4716pi_185822_4716_21688').is(':checked')){
            if( $.trim($(form_contact).find('#185822_4724pi_185822_4724').val()) == "" || $.trim($(form_contact).find('#185822_4676pi_185822_4676').val()) == ""){
                $(form_contact).find('#185822_4724pi_185822_4724').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
                validType = false;
            }
        }

        // Validate Name
        var validName = true;
        if( $.trim($(form_contact).find('#185822_4688pi_185822_4688').val()) == "" || $.trim($(form_contact).find('#185822_4690pi_185822_4690').val()) == ""){
            $(form_contact).find('#185822_4688pi_185822_4688').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validName = false;
        }

        // Validate Mail
        var validMail = true;
        if( $.trim($(form_contact).find('#185822_4696pi_185822_4696').val()) == ""){
            $(form_contact).find('#185822_4696pi_185822_4696').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validMail = false;
        }else{
            var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            validMail = pattern.test($.trim($(form_contact).find('#185822_4696pi_185822_4696').val()));
            if(!validMail)
                $(form_contact).find('#185822_4696pi_185822_4696').closest('.form-group').find('.errorDisplay').html('間違ったメールフォーマット').fadeIn();
        }

        // Validate Phone
        var validPhone = true;
        if( $.trim($(form_contact).find('#185822_4698pi_185822_4698').val()) == ""){
            $(form_contact).find('#185822_4698pi_185822_4698').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validPhone = false;
        }else{
            var pattern = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{2})[-. )]*(\d{4})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
            validPhone = pattern.test($.trim($(form_contact).find('#185822_4698pi_185822_4698').val()));
            if(!validPhone)
                $(form_contact).find('#185822_4698pi_185822_4698').closest('.form-group').find('.errorDisplay').html('間違った電話番号の形式').fadeIn();
        }

        // Validate Privacy
        // var validPrivacy = true;
        // if ( !$('#privacypolicy_confirm').is(':checked') ){
        //     validPrivacy = false;
        //     $('#privacypolicy_confirm').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
        // }

        var arrValid = [
            validType,
            validName,
            validMail,
            validPhone
        ];

        var result = true;
        $.each(arrValid, function(index, val){
            result = val == true ? result : val;
        });

        if(!result)
            $('html, body').animate({scrollTop: $('.frm_contact').offset().top}, 500);

        return result;
    }


});

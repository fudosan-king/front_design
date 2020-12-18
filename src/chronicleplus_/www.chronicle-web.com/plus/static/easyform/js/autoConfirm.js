/*
    Author: Khanh Nguyen
    Company: Propolife Vietnam Co., Ltd
    Description: Jquery process Action for user behavior, check Validate, Change to confirm page.
*/

$(document).ready(function(){

    $("#form_contact_submit").click(function() {
        if(location.hash != "#confirm"){
            if(checkInvalid())
                location.hash = "#confirm";
        }else{
            if(checkInvalid()){
                var strInquiry = $.trim($('#185822_4686pi_185822_4686').val());
                var strInquiryExtra = "";
                if($('#estates_hidden_info').length)
                    strInquiryExtra = $('#estates_hidden_info').val();
                var result = "";
                if(strInquiryExtra!="")
                    result = strInquiry + '<br>' + strInquiryExtra;
                else
                    result = strInquiry;

                $('#185822_4686pi_185822_4686').val(result);

                // #4117 here


                if ($('input[name=f185822_4724pi_185822_4724]').val() == "")
                    $('input[name=f185822_4724pi_185822_4724]').val('null');

                if ($('input[name=f185822_4676pi_185822_4676]').val() == "")
                    $('input[name=f185822_4676pi_185822_4676]').val('null');

                if ( !$('input[name=f185822_4716pi_185822_4716_21688]').prop('checked') ){
                    $('input[name=f185822_4716pi_185822_4716_21688]').prop('checked', true);
                    $('input[name=f185822_4716pi_185822_4716_21688]').val('false');
                }

                if ( !$('input[name=f185822_4714pi_185822_4714_21686]').prop('checked') ){
                    $('input[name=f185822_4714pi_185822_4714_21686]').prop('checked', true);
                    $('input[name=f185822_4714pi_185822_4714_21686]').val('false');
                }

                return $("form").submit();

            }else{
                location.hash = "";
            }

        }
    });

    switcherMode();

    $(window).on('hashchange', function(){
        switcherMode();
    });

    //FUNCTION

    function switcherMode(){
        if(location.hash == "#confirm"){
            $('.normalMode').fadeOut();
            $('.confirmMode').fadeIn();
            $('.frm_contact_content.date').fadeOut();
            $('.i_next_larg').find('span');
            $('#form_contact_submit').find('span').html('確認した内容を送信する')

            // Confirm Type
            var strType = "";
            if ( $('#185822_4716pi_185822_4716_21688').is(':checked') ){
                strType += '見学予約 &nbsp; &nbsp;';
                $('.cfrm_date_book').fadeIn();
            }
            else{
                $('.cfrm_date_book').fadeOut();
            }

            if ( $('#185822_4714pi_185822_4714_21686').is(':checked') ){
                strType += '資料請求';
            }

            $('#cfrm_type').html(strType);

            // Confirm Date
            var strDate = "";
            if ( $('#185822_4716pi_185822_4716_21688').is(':checked') ){

                strDate += $('#185822_4724pi_185822_4724').val() + ' &nbsp; &nbsp;' + $('#185822_4676pi_185822_4676').val();

                $('#cfrm_date_book').html(strDate);
            }

            // Confirm Name
            var strName = "";
            strName = $('#185822_4688pi_185822_4688').val() + $('#185822_4690pi_185822_4690').val();
            $('#cfrm_name').html(strName);

            // Confirm Name
            var strEmail = "";
            strEmail = $('#185822_4696pi_185822_4696').val();
            $('#cfrm_email').html(strEmail);


            // Confirm Name
            var strPhone = "";
            strPhone = $('#185822_4698pi_185822_4698').val();
            $('#cfrm_phone').html(strPhone);

            // Confirm Inquiry
            var strInquiry = $.trim($('#185822_4686pi_185822_4686').val());
            var strInquiryExtra = "";
            if($('#estates_hidden_info').length)
                strInquiryExtra = $('#estates_hidden_info').val();
            var result = "";
            if(strInquiryExtra!="")
                result = strInquiry + '<br>' + strInquiryExtra;
            else
                result = strInquiry;

            $('#cfrm_inquiry').html(result);



        }else{
            $('.normalMode').fadeIn();
            $('.confirmMode').fadeOut();
            if($('#185822_4716pi_185822_4716_21688').is(':checked')){
                $('.frm_contact_content.date').fadeIn();
            }
            $('#form_contact_submit').find('span').html('入力した内容を確認する');
        }
    }

    function checkInvalid(){

        $('.errorDisplay').html('').fadeOut();

        // Validate Type
        var validType = true;
        if($('#185822_4716pi_185822_4716_21688').is(':checked')){
            if( $.trim($('#185822_4724pi_185822_4724').val()) == "" || $.trim($('#185822_4676pi_185822_4676').val()) == ""){
                $('#185822_4724pi_185822_4724').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
                validType = false;
            }
        }

        // Validate Name
        var validName = true;
        if( $.trim($('#185822_4688pi_185822_4688').val()) == "" || $.trim($('#185822_4690pi_185822_4690').val()) == ""){
            $('#185822_4688pi_185822_4688').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validName = false;
        }

        // Validate Mail
        var validMail = true;
        if( $.trim($('#185822_4696pi_185822_4696').val()) == ""){
            $('#185822_4696pi_185822_4696').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validMail = false;
        }else{
            var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            validMail = pattern.test($.trim($('#185822_4696pi_185822_4696').val()));
            if(!validMail)
                $('#185822_4696pi_185822_4696').closest('.form-group').find('.errorDisplay').html('間違ったメールフォーマット').fadeIn();
        }

        // Validate Phone
        var validPhone = true;
        if( $.trim($('#185822_4698pi_185822_4698').val()) == ""){
            $('#185822_4698pi_185822_4698').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
            validPhone = false;
        }else{
            var pattern = /^\d+[-.]?\d+[-.]?\d+$/;
            validPhone = pattern.test($.trim($('#185822_4698pi_185822_4698').val()));
            if(!validPhone)
                $('#185822_4698pi_185822_4698').closest('.form-group').find('.errorDisplay').html('間違った電話番号の形式').fadeIn();
        }

        // Validate Privacy
        var validPrivacy = true;
        if ( !$('#privacypolicy_confirm').is(':checked') ){
            validPrivacy = false;
            $('#privacypolicy_confirm').closest('.form-group').find('.errorDisplay').html('値を入力してください').fadeIn();
        }

        var arrValid = [
            validType,
            validName,
            validMail,
            validPhone,
            validPrivacy
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

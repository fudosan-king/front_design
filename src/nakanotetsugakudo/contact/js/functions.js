jQuery(function($) {
    $(".navbar-toggle").on("click", function() {
        $(this).toggleClass("active");
    });

    //matchHeight columm
    $('.boxmH').matchHeight();

});

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.scroll_to_top').fadeIn();
    } else {
        $('.scroll_to_top').fadeOut();
    }
});



$('.scroll_to_top').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 800);
});

//---------------------------------------------------



//---------------------------------------------------

// KHANH NGUYEN PROCESS CODE

var ERROR_NO_INPUT = '値を入力してください';
var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

// GET QUERY STRING
function getQueryStr(){
    var res = {};
    var strSearch = window.location.search;
    strSearch = strSearch.substr(1, strSearch.length);
    var arrQParams = strSearch.split('&');

    $.each(arrQParams, function(index, el) {
        var tmp = el.split('=');
        res[tmp[0]] = tmp[1];
    });

    return res;
}
var queryString = getQueryStr();

// VALIDATE FORM DATA
function invalidCheck(){

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        $('input[name="first-name"]'),
        $('input[name="last-name"]'),

        $('input[name="myouji"]'),
        $('input[name="namae"]'),

        $('select[name="pref"]'),

        $('input[name="phone-number"]'),

        $('input[name="email"]'),
        $('input[name="email-confirm"]'),

        $('select[name="budget"]'),

        $('input[name="madori[]"]'),

        $('select[name="width"]'),

        $('input[name="relation[]"]'),

        $('input[name="secret-info"]'),


    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){
            if(!$(this).is(':checked')){
                $(this).closest('.checkbox').css('background-color', invalidColor);
                $(this).closest('.checkbox').css('padding', '2px 4px');
                isValid = false;

                // Set error text
                if(elem.prop('name') == 'madori[]'){
                    $('.error-text.madori').html(ERROR_NO_INPUT);
                    $('.error-text.madori').css('display', 'block');
                }

                if(elem.prop('name') == 'relation[]'){
                    $('.error-text.relation').html(ERROR_NO_INPUT);
                    $('.error-text.relation').css('display', 'block');
                }

                if(elem.prop('name') == 'secret-info'){
                    $('.error-text.secret-info').html(ERROR_NO_INPUT);
                    $('.error-text.secret-info').css('display', 'block');
                }

            }else{
                $(this).closest('.checkbox').css('background-color', 'initial');
                $(this).closest('.checkbox').css('padding', 'initial');
            }
        }else{
            if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
                elem.css('background-color', invalidColor);
                isValid = false;

                // Set error text
                if(elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name'){
                    $('.error-text.name').html(ERROR_NO_INPUT);
                    $('.error-text.name').css('display', 'block');
                }

                if(elem.prop('name') == 'myouji' || elem.prop('name') == 'namae'){
                    $('.error-text.phonetic').html(ERROR_NO_INPUT);
                    $('.error-text.phonetic').css('display', 'block');
                }

                if(elem.prop('name') == 'pref'){
                    $('.error-text.address').html(ERROR_NO_INPUT);
                    $('.error-text.address').css('display', 'block');
                }

                if(elem.prop('name') == 'phone-number'){
                    $('.error-text.phone-number').html(ERROR_NO_INPUT);
                    $('.error-text.phone-number').css('display', 'block');
                }

                if(elem.prop('name') == 'email' || elem.prop('name') == 'email-confirm'){
                    $('.error-text.email').html(ERROR_NO_INPUT);
                    $('.error-text.email').css('display', 'block');
                }

                if(elem.prop('name') == 'budget'){
                    $('.error-text.budget').html(ERROR_NO_INPUT);
                    $('.error-text.budget').css('display', 'block');
                }

                if(elem.prop('name') == 'width'){
                    $('.error-text.width').html(ERROR_NO_INPUT);
                    $('.error-text.width').css('display', 'block');
                }

            }else{
                elem.css('background-color', 'initial');
            }
        }

    });

    // TYPE CHECK
    if(!$('#iraijo').is(':checked') && !$('#isiryou').is(':checked')){

        $('#iraijo').closest('.checkbox').css('background-color', invalidColor);
        $('#iraijo').closest('.checkbox').css('padding', '2px 4px');

        $('#isiryou').closest('.checkbox').css('background-color', invalidColor);
        $('#isiryou').closest('.checkbox').css('padding', '2px 4px');

        $('.error-text.type').html(ERROR_NO_INPUT);
        $('.error-text.type').css('display', 'block');

        isValid = false;

    }else{

        $('#iraijo').closest('.checkbox').css('background-color', 'initial');
        $('#iraijo').closest('.checkbox').css('padding', 'initial');

        $('#isiryou').closest('.checkbox').css('background-color', 'initial');
        $('#isiryou').closest('.checkbox').css('padding', 'initial');
    }

    // DATE/TIME OF TYPE CHECK
    if($('#iraijo').is(':checked')){

        var isLocalValid = true;

        if(typeof($('input[name="raijo-date"]').val()) === 'undefined' ||  $('input[name="raijo-date"]').val() == '' || $('input[name="raijo-date"]').val() == 'null'){
            $('input[name="raijo-date"]').css('background-color', invalidColor);
            isLocalValid = isValid = false;
        }else{
            $('input[name="raijo-date"]').css('background-color', 'initial');
        }

        if(typeof($('select[name="raijo-time"]').val()) === 'undefined' ||  $('select[name="raijo-time"]').val() == '' || $('select[name="raijo-time"]').val() == 'null'){
            $('select[name="raijo-time"]').css('background-color', invalidColor);
            isLocalValid = isValid = false;
        }else{
            $('select[name="raijo-time"]').css('background-color', 'initial');
        }

        if(!isLocalValid){
            $('.error-text.raijo-datetime').html(ERROR_NO_INPUT);
            $('.error-text.raijo-datetime').css('display', 'block');
        }
    }

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    if (!emailPattern.test($('input[name="email"]').val())){
        $('input[name="email"]').css('background-color', invalidColor);
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_FORMAT);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email"]').css('background-color', 'initial');
    }


    if($('input[name="email-confirm"]').val() != $('input[name="email"]').val()){
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_NOTSAME);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email-confirm"]').css('background-color', 'initial');
    }

    return isValid;
}

$(document).ready(function(){

    var reservation = typeof(queryString['reservation'])!=='undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material'])!=='undefined' ? queryString['material'] : null;



    // Bootstrap Datepicker configuration
    $('#iraijo-date').datepicker({
        language: 'ja',
        autoclose: true,
        todayHighlight: true,
        beforeShowDay: function (date){
		var toDay = (new Date());
        toDay.setDate(toDay.getDate() - 1);
		if (date.getTime() < toDay.getTime()){
                		return false;
            	}
            // if (date.getMonth() == (new Date()).getMonth())
            //     switch (date.getDate()){
            //         case 4:
            //             return {
            //               tooltip: 'Example tooltip',
            //               classes: 'active'
            //             };
            //         case 8:
            //             return false;
            //         case 12:
            //             return "green";
            // }
        },
        // datesDisabled: ['09/06/2017', '09/21/2017']

    });
    // $('#iraijo-date').datepicker('update', 'null');


    // BUTTON SET SHOW/HIDE DATE/TIME PICKER FORM
    $('#iraijo').change(function(){
        if($(this).is(':checked')){
            $('input[name="raijo"]').val(true);
            $('.iraijo-datetime-hidden').fadeIn();
        }else{
            $('input[name="raijo"]').val(false);
            $('.iraijo-datetime-hidden').fadeOut();

            $('#iraijo-date').val('');
            $('select[name="raijo-time"]').val('null');
        }
    });

    $('#isiryou').on('change', function(){
        if($(this).is(':checked')){
            $('input[name="siryou"]').val(true);
        }else{
            $('input[name="siryou"]').val(false);
        }
    });

    // CONDITION TO DISPLAY FORM TYPE
    if(reservation == '1'){
        $('.form-title').html('来場予約');
        $('#iraijo').prop('checked', true).trigger('change');
    }
    if(material == '1'){
        $('.form-title').html('資料請求');
        $('#isiryou').prop('checked', true).trigger('change');
    }


    // BUTTON SET AJAXZIP2ADDRESS
    $('.mt5').click(function(){

        $('input[name="post"]').keyup();
    });

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function(){

        if(invalidCheck()){

            $('.table_register').fadeOut();
            $('.table_confirm').fadeIn(function(){
                 $('html').scrollTop(0);
            });

            var cfrm_type = '';
            cfrm_type += typeof($('#iraijo:checked').val()) != 'undefined' ? ($('#iraijo:checked').val() + '  ') : '';
            cfrm_type += typeof($('#isiryou:checked').val()) != 'undefined' ? ($('#isiryou:checked').val() + '  ') : '';;
            $('.cfrm_type').html(cfrm_type);

            var cfrm_name = $('input[name="first-name"]').val() + $('input[name="last-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_raijo_datetime = '';
            cfrm_raijo_datetime += typeof($('input[name="raijo-date"]').val()) != 'undefined' ? ($('input[name="raijo-date"]').val() + '  ') : 'null  ';
            cfrm_raijo_datetime += $('select[name="raijo-time"]').val();
            $('.cfrm_raijo_datetime').html(cfrm_raijo_datetime);

            var cfrm_peoplenum = $('input[name="ninzuu"]').val();
            $('.cfrm_peoplenum').html(cfrm_peoplenum);

            var cfrm_address = $('input[name="post"]').val() + '<br>' +
                $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
                $('input[name="aza"]').val() + '<br>' + $('input[name="building-roomnumber"]').val();
            $('.cfrm_address').html(cfrm_address);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_occupation = $('input[name="job-style"]:checked').val() + '<br>' + $('input[name="job-style-desc"]').val();
            $('.cfrm_occupation').html(cfrm_occupation);

            var cfrm_budget = $('select[name="budget"]').val();
            $('.cfrm_budget').html(cfrm_budget);

            var cfrm_floorplan = '';
            $('input[name="madori[]"]:checked').each(function(){
                cfrm_floorplan += $(this).val() + '<br>';
            });
            $('.cfrm_floorplan').html(cfrm_floorplan);

            var cfrm_aincome = $('select[name="nensyu"]').val();
            $('.cfrm_aincome').html(cfrm_aincome);

            var cfrm_oresources = $('select[name="shikin"]').val();
            $('.cfrm_oresources').html(cfrm_oresources);

            var cfrm_width = $('select[name="width"]').val();
            $('.cfrm_width').html(cfrm_width);

            var cfrm_livingstyle = $('input[name="living-style"]:checked').val();
            $('.cfrm_livingstyle').html(cfrm_livingstyle);

            var cfrm_firstimpression = $('input[name="first-impression"]:checked').val() + '<br>' + $('input[name="first-impression-etc"]').val();
            $('.cfrm_firstimpression').html(cfrm_firstimpression);

            var cfrm_relation = '';
            $('input[name="relation[]"]:checked').each(function(){
                cfrm_relation += $(this).val() + '<br>';
            });
            $('.cfrm_relation').html(cfrm_relation);

            var cfrm_comments = $('textarea[name="iken"]').val();
            $('.cfrm_comments').html(cfrm_comments);

            dataLayer.push({'event': 'inquiry-confirm'});

        }else{
            $('html').animate({scrollTop: 0}, 1000, function(){});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function(){
        $('.table_register').fadeIn(function(){
            $('html').scrollTop(0);
        });
        $('.table_confirm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function(){
        if(invalidCheck()){

            // RE-SET VALUE ON FINAL TURN
            $('form input[type="text"]').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            $('form textarea').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            $('.frm_contact').submit();
        }else{
            $('#goBack').click();
        }
    });

    // BUTTON TEST ACTION
    $('#goTest').click(function(){
        console.log(queryString['reservation']);
    });
});

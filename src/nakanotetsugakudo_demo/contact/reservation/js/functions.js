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
    $('html, body').animate({
        scrollTop: 0
    }, 800);
});

//---------------------------------------------------



//---------------------------------------------------

// KHANH NGUYEN PROCESS CODE

var ERROR_NO_INPUT = '値を入力してください';
var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

// GET QUERY STRING
function getQueryStr() {
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
function invalidCheck() {

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';
    var validFlagColor = '#F8B102';

    $.each($('.require-flag'), function(index, val) {
        /* iterate through array or object */
        $(val).css('background-color', validFlagColor);
    });

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        $('input[name="first-name"]'),
        $('input[name="last-name"]'),


        // $('select[name="pref"]'),

        $('input[name="phone-number"]'),

        $('input[name="email"]'),


        // $('input[name="first-impression"]'),

        $('input[name="secret-info"]'),


    ];

    $.each(elemsChk, function(key, elem) {

        if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'checkbox') {
            if (!$(this).is(':checked')) {
                $(this).closest('.checkbox').css('color', '#ff0700');

                isValid = false;

                if (elem.prop('name') == 'secret-info') {


                    $('.require-flag.secret-info').css('background-color', '#ff0700');
                }

            } else {
                $(this).closest('.checkbox').css('color', 'initial');

            }
        } else {
            if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'radio') {



                // if (elem.prop('name') == 'first-impression') {

                //     if (!$(this).is(':checked')) {
                //         $(this).closest('.radio').css('color', '#ff0700');

                //         isValid = false;



                //         $('.require-flag.first-impression').css('background-color', '#ff0700');
                //     } else {
                //         $(this).closest('.radio').css('color', 'initial');

                //     }
                // }

            } else {
                if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {


                    if (elem.prop('name') != 'first-impression-etc') {
                        elem.css({
                            'background-color': invalidColor,
                            'border-color': '#ff0700'
                        });
                        isValid = false;

                        // Set error text
                        if (elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name') {


                            $('.require-flag.name').css('background-color', '#ff0700');
                        }



                        // if (elem.prop('name') == 'pref') {


                        //     $('.require-flag.address').css('background-color', '#ff0700');
                        // }

                        if (elem.prop('name') == 'phone-number') {


                            $('.require-flag.phone-number').css('background-color', '#ff0700');
                        }


                        if (elem.prop('name') == 'email') {


                            $('.require-flag.email').css('background-color', '#ff0700');
                        }


                    }

                } else {
                    elem.css({
                        'background-color': 'initial',
                        'border-color': '#ccc'
                    });

                }
            }
        }

    });

    // DATE/TIME OF TYPE CHECK
    var isLocalValid = true;

    if (typeof($('input[name="raijo-date"]').val()) === 'undefined' || $('input[name="raijo-date"]').val() == '' || $('input[name="raijo-date"]').val() == 'null') {
        $('input[name="raijo-date"]').css({
            'background-color': invalidColor,
            'border-color': '#ff0700'
        });
        isLocalValid = isValid = false;
    } else {
        $('input[name="raijo-date"]').css({
            'background-color': 'initial',
            'border-color': '#ccc'
        });
    }

    if (typeof($('select[name="raijo-time"]').val()) === 'undefined' || $('select[name="raijo-time"]').val() == '' || $('select[name="raijo-time"]').val() == 'null') {
        $('select[name="raijo-time"]').css({
            'background-color': invalidColor,
            'border-color': '#ff0700'
        });
        isLocalValid = isValid = false;
    } else {
        $('select[name="raijo-time"]').css({
            'background-color': 'initial',
            'border-color': '#ccc'
        });
    }

    if (!isLocalValid) {


        $('.require-flag.raijo-datetime').css('background-color', '#ff0700');
    }

    // var isAgeValid = true;

    // if ($('#iage_year option:selected').val() == 'null') {
    //     $('#iage_year').css({
    //         'background-color': invalidColor,
    //         'border-color': '#ff0700'
    //     });
    //     isAgeValid = isValid = false;
    // } else {
    //     $('#iage_year').css({
    //         'background-color': 'initial',
    //         'border-color': '#ccc'
    //     });
    // }
    // if ($('#iage_month option:selected').val() == 'null') {
    //     $('#iage_month').css({
    //         'background-color': invalidColor,
    //         'border-color': '#ff0700'
    //     });
    //     isAgeValid = isValid = false;
    // } else {
    //     $('#iage_month').css({
    //         'background-color': 'initial',
    //         'border-color': '#ccc'
    //     });
    // }
    // if ($('#iage_day option:selected').val() == 'null') {
    //     $('#iage_day').css({
    //         'background-color': invalidColor,
    //         'border-color': '#ff0700'
    //     });
    //     isAgeValid = isValid = false;
    // } else {
    //     $('#iage_day').css({
    //         'background-color': 'initial',
    //         'border-color': '#ccc'
    //     });
    // }

    // if (!isAgeValid) {


    //     $('.require-flag.age').css('background-color', '#ff0700');
    // }

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    if (!emailPattern.test($('input[name="email"]').val())) {
        $('input[name="email"]').css({
            'background-color': invalidColor,
            'border-color': '#ff0700'
        });
        isValid = false;



        $('.require-flag.email').css('background-color', '#ff0700');

    } else {
        $('input[name="email"]').css({
            'background-color': 'initial',
            'border-color': '#ccc'
        });
    }

    return isValid;
}

$(document).ready(function() {

    var reservation = typeof(queryString['reservation']) !== 'undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material']) !== 'undefined' ? queryString['material'] : null;



    // Bootstrap Datepicker configuration
    $('#iraijo-date').datepicker({
        language: 'ja',
        autoclose: true,
        todayHighlight: true,
        beforeShowDay: function(date) {
            var toDay = (new Date());
            toDay.setDate(toDay.getDate() - 1);
            if (date.getTime() < toDay.getTime()) {
                return false;
            }

            // if (date.getDay() == 2 || date.getDay() == 3) {
            //     return false;
            // }

            if (date.getDay() == 2 ) {
                if((((date.getMonth()+1) ==2 && date.getDate() == 11) || ((date.getMonth()+1) ==9 && date.getDate() == 22) || ((date.getMonth()+1) ==11 && date.getDate() == 3)) && date.getFullYear() == 2020 ){
                    return true;
                }else{
                    return false;
                }
            }

            if (date.getDay() == 3) {
                if((date.getMonth()+1) ==4 && date.getDate() == 29 && date.getFullYear() == 2020 ){
                    return true;
                }else{
                    return false;
                }
            }

            if ((date.getMonth() + 1) == 12){
                if(date.getDate() >= 24 &&  date.getDate()<=31)
                    return false;
            }

            if ((date.getMonth() + 1) == 1 && date.getFullYear() == 2020){
                if(date.getDate()<=3)
                    return false;
            }

        },


    });


    // var today = new Date();
    // var currentYear = today.getFullYear();

    // for (var i = currentYear; i >= 1950; i--) {
    //     $('#iage_year').append(`<option value="${i}">${i}年</option>`);
    // }
    // for (var i = 1; i <= 12; i++) {
    //     $('#iage_month').append(`<option value="${i}">${i}月</option>`);
    // }
    // for (var i = 1; i <= 31; i++) {
    //     $('#iage_day').append(`<option value="${i}">${i}日</option>`)
    // };
    // $('#iage_year').val('1980');
    // $('#iage_year').change(function(event) {
    //     calculateDay();
    // });
    // $('#iage_month').change(function(event) {
    //     calculateDay();
    // });
    // $('#iage_day').change(function(event) {
    //     calculateDay();
    // });

    // function calculateDay() {
    //     var selectedYear = $('#iage_year option:selected').val();
    //     var selectMonth = $('#iage_month option:selected').val();
    //     var selectDay = $('#iage_day option:selected').val();


    //     $('#iage_day option').not(':first').remove();
    //     for (var i = 1; i <= 31; i++) {
    //         $('#iage_day').append(`<option value="${i}">${i}日</option>`)
    //     };
    //     if (!isNaN(selectMonth)) {
    //         switch (selectMonth) {
    //             case '4':
    //             case '6':
    //             case '9':
    //             case '11':
    //                 {
    //                     $('#iage_day option:last').remove();
    //                 }
    //                 break;
    //             case '2':
    //                 {

    //                     if (selectedYear % 4 == 0 && selectedYear % 100 != 0) {
    //                         $('#iage_day option:last').remove();
    //                         $('#iage_day option:last').remove();
    //                     } else {
    //                         $('#iage_day option:last').remove();
    //                         $('#iage_day option:last').remove();
    //                         $('#iage_day option:last').remove();
    //                     }
    //                 }
    //                 break;
    //         }
    //         $('#iage_day').val(selectDay);
    //         $('#iage').val(`${selectedYear}/${selectMonth}/${selectDay}`);
    //     }
    // }


    $('#isiryou').on('change', function() {
        if ($(this).is(':checked')) {
            $('input[name="siryou"]').val(true);
        } else {
            $('input[name="siryou"]').val(false);
        }
    });

    // CONDITION TO DISPLAY FORM TYPE
    $('.form-title').html('来場予約');



    // BUTTON SET AJAXZIP2ADDRESS
    // $('.mt5').click(function() {

    //     $('input[name="post"]').keyup();
    // });

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function() {

        if (invalidCheck()) {

            $('.form_info.input').fadeOut();
            $('.form_info.confirm').fadeIn(function() {
                $('html').scrollTop(0);
            });
            $($('.step ol li')[0]).removeClass('active');
            $($('.step ol li')[1]).addClass('active');



            var cfrm_name = $('input[name="first-name"]').val() + $('input[name="last-name"]').val();
            $('.cfrm_name').html(cfrm_name);



            var cfrm_raijo_datetime = '';
            cfrm_raijo_datetime += typeof($('input[name="raijo-date"]').val()) != 'undefined' ? ($('input[name="raijo-date"]').val() + '  ') : 'null  ';
            cfrm_raijo_datetime += $('select[name="raijo-time"]').val();
            $('.cfrm_raijo_datetime').html(cfrm_raijo_datetime);

            var cfrm_raijo_ninzu = $('input[name="raijo_ninzu"]').val() + '名';
            $('.cfrm_raijo_ninzu').html(cfrm_raijo_ninzu);



            // var cfrm_peopleage = '';
            // cfrm_peopleage += typeof($('input[name="age"]').val()) != 'undefined' ? ($('input[name="age"]').val() + '  ') : 'null  ';
            // $('.cfrm_peopleage').html(cfrm_peopleage);

            // var cfrm_address = $('input[name="post"]').val() + '<br>' +
            //     $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
            //     $('input[name="building-roomnumber"]').val();
            // $('.cfrm_address').html(cfrm_address);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);


            // var cfrm_livingstyle = $('input[name="living-style"]:checked').val();
            // $('.cfrm_livingstyle').html(cfrm_livingstyle);

            // var cfrm_firstimpression = $('input[name="first-impression"]:checked').val();
            // $('.cfrm_firstimpression').html(cfrm_firstimpression);



            // var cfrm_comments = $('textarea[name="iken"]').val();
            // $('.cfrm_comments').html(cfrm_comments);

            dataLayer.push({
                'event': 'inquiry-confirm-nakanotetsugakudo-reservation'
            });

        } else {
            $('html').animate({
                scrollTop: 0
            }, 1000, function() {});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function() {
        $('.form_info.input').fadeIn(function() {
            $('html').scrollTop(0);
        });
        $('.form_info.confirm').fadeOut();
        $($('.step ol li')[1]).removeClass('active');
        $($('.step ol li')[0]).addClass('active');
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function() {
        if (invalidCheck()) {

            // RE-SET VALUE ON FINAL TURN
            $('form input[type="text"]').each(function() {
                if ($(this).val() == '')
                    $(this).val('null');
            });

            $('form textarea').each(function() {
                if ($(this).val() == '')
                    $(this).val('null');
            });

            $('.frm_contact').submit();
        } else {
            $('#goBack').click();
        }
    });

    // BUTTON TEST ACTION
    $('#goTest').click(function() {
        console.log(queryString['reservation']);
    });
});
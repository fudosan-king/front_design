$(function($) {

    $.each($('.frm_online input'), function(index, el) {
        if($(el).val() == ""){
            $(el).siblings('.placeholder-custom').eq(0).show();
        }else{
            $(el).siblings('.placeholder-custom').eq(0).hide();
        }
    });

    $('.frm_online input').on("focus", function(){
        if(!$(this).hasClass('datepicker'))
            $(this).siblings('.placeholder-custom').eq(0).hide();
    });
    $('.frm_online input').on("blur change", function(){
         if($(this).val() == "") {
             $(this).siblings('.placeholder-custom').eq(0).show();
         }
    });

    $.each($('.frm_online textarea'), function(index, el) {
        if($(el).val() == ""){
            $(el).siblings('.placeholder-custom').eq(0).show();
        }else{
            $(el).siblings('.placeholder-custom').eq(0).hide();
        }
    });

    $('.frm_online textarea').on("focus", function(){
        if(!$(this).hasClass('datepicker'))
            $(this).siblings('.placeholder-custom').eq(0).hide();
    });
    $('.frm_online textarea').on("blur change", function(){
         if($(this).val() == "") {
             $(this).siblings('.placeholder-custom').eq(0).show();
         }
    });

    today = new Date();
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var meetday = moment();

    switch(today.getDay()){
        case 2: meetday = moment(today).add(2, 'day'); break;
        case 3: meetday = moment(today).add(1, 'day'); break;
        default: meetday = moment(today).add(1, 'day'); break;
    }

    $('#datepicker, #datepicker2, #datepicker3').datepicker({
        // todayHighlight: true,
        format: 'yyyy年mm月dd日',
        language: 'ja',
        autoclose:true,
        todayHighlight: true,
        beforeShowDay: function (date) {

            if(date.getDate() == (new Date()).getDate() )
                return false;

            if(date.getTime() < (new Date()).getTime() )
                return false;

            if (date.getDay() == 2 || date.getDay() == 3)
                return false;

            // if(moment(date).format('DD/MM/YYYY') == meetday.format('DD/MM/YYYY')){
            //     return { classes: 'can' };
            // }


            return true;
        },

    });
    $('#datepicker, #datepicker2, #datepicker3').datepicker()
    .on('changeDate', function(e) {
        // `e` here contains the extra attributes
        if($(this).val() == "") {
             $(this).siblings('.placeholder-custom').eq(0).show();
         }else{
            $(this).siblings('.placeholder-custom').eq(0).hide();
         }
    });
    // $('#datepicker').datepicker('setDate', meetday.format('YYYY/MM/DD'));

    $('select').on('change', function(event) {
        if($(this).val() != '時間を選択'){
            $(this).css("font-family", "ts-unused");
        }
        else{
            $(this).css("font-family", "A1 Gothic M");
        }
    });

    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.data-confirm').fadeIn();

            $('.cfr_name').html($('input[name="name"]').val());
            $('.cfr_email').html($('input[name="email"]').val());
            $('.cfr_date_time').html($('input[name="datepicker"]').val() + ' ' + $('select[name="time"] option:selected').val());
            $('.cfr_date_time_2').html(mapValue($('input[name="datepicker2"]').val()) + ' ' + mapValue($('select[name="time2"] option:selected').val()));
            $('.cfr_date_time_3').html(mapValue($('input[name="datepicker3"]').val()) + ' ' + mapValue($('select[name="time3"] option:selected').val()));
            $('.cfr_note').html($('textarea[name="note"]').val());

            $('input[name="pd_name"]').val($('input[name="name"]').val());
            $('input[name="pd_email"]').val($('input[name="email"]').val());

            $('input[name="pd_appointment_date"]').val($('input[name="datepicker"]').val());
            $('input[name="pd_appointment_time"]').val($('select[name="time"] option:selected').val());

            $('input[name="pd_appointment_date_2"]').val(mapValue($('input[name="datepicker2"]').val()));
            $('input[name="pd_appointment_time_2"]').val(mapValue($('select[name="time2"] option:selected').val()));

            $('input[name="pd_appointment_date_3"]').val(mapValue($('input[name="datepicker3"]').val()));
            $('input[name="pd_appointment_time_3"]').val(mapValue($('select[name="time3"] option:selected').val()));

            $('input[name="pd_note"]').val($('textarea[name="note"]').val());

            $('.box_intro').css('display', 'none');
            $('.sub_des').css('display', 'none');
        }else{
            // $('.data-input').hide();
            // $('.data-confirm').fadeOut();
            $("html, body").animate({ scrollTop: $($('.validate-error')[0]).offset().top - 50 }, 300);
        }
    });

    $('.btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-input').fadeIn();
        $('.data-confirm').hide();
    });

    $('.btn_send').click(function(event) {
        /* Act on the event */
        if(!checkValidate()){
            return false;
        }
    });


    function checkValidate(){
        var isValidate = true;

        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        if(typeof($('input[name="name"]')) === 'undefined' || $('input[name="name"]').val() == ''){
            isValidate = false;
            $('input[name="name"]').addClass('validate-error');
            $('input[name="name"]').siblings('.placeholder-custom').addClass('error');
        }else{
            $('input[name="name"]').removeClass('validate-error');
            $('input[name="name"]').siblings('.placeholder-custom').removeClass('error');
        }

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').addClass('validate-error');
            $('input[name="email"]').siblings('.placeholder-custom').addClass('error');
            isValidate = false;
        } else {
            $('input[name="email"]').removeClass('validate-error');
            $('input[name="email"]').siblings('.placeholder-custom').removeClass('error');
        }

        if(typeof($('input[name="datepicker"]')) === 'undefined' || $('input[name="datepicker"]').val() == ''){
            isValidate = false;
            $('input[name="datepicker"]').addClass('validate-error');
        }else{
            $('input[name="datepicker"]').removeClass('validate-error');
        }

        if(typeof($('select[name="time"] option:selected')) === 'undefined' || $('select[name="time"] option:selected').val() == '時間を選択'){
            isValidate = false;
            $('select[name="time"]').addClass('validate-error');
        }else{
            $('select[name="time"]').removeClass('validate-error');
        }

        return isValidate;
    }

    function mapValue(text){
        var val = text;
        switch(text){
            case '時間を選択': { val = '' } break;
        }
        return val;
    }
});
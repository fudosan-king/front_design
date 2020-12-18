// FUNCTION SETTING
$(function(){
    // お問い合せ - CONTACT
    $('.request_a_document').click(function(){  
      $('html, body').animate({
        scrollTop: $("#frm_maisoku").offset().top
      }, 2000);
      $('.at-active .make_a_tour_reservation').addClass('bg-active');
      $('.at-active .request_a_document').removeClass('bg-active');
    });
    // $('.make_a_tour_reservation').click(function(){       
    //   $('html, body').animate({
    //     scrollTop: $("#frm_maisoku").offset().top
    //   }, 2000);
    //   $('.at-active .request_a_document').addClass('bg-active');
    //   $('.at-active .make_a_tour_reservation').removeClass('bg-active');
    // });

    //datetimepicker
    $.datetimepicker.setLocale('ja');
    $('#datetimepicker').datetimepicker({value:'2019/01/01 00:00',step:10});

    $('#frm_date').datetimepicker({
        beforeShowDay: function(date) {
            var day = date.getDay();
            return [(day != 2 && day != 3)];
        },
        minDate: new Date(),
        timepicker: false,
        format: "Y/m/d",
    });
    var i = 10;
    arrTime = [];
    for(i; i<=18; i++){
        arrTime.push(i+":00");
    }
    $('#frm_time').datetimepicker({
        datepicker: false,
        format: "H:00",
        allowTimes: arrTime,
        pickerPosition: "top-left"
    });
});
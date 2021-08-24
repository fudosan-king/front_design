
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
}

$(function($) {

    $('#ifrmBooking').append(' \
        <input type="hidden" name="hi_id" value="2"> \
        <input type="hidden" name="std" value="" /> \
        <input type="hidden" name="le" value="1" /> \
        <input type="hidden" name="dt_yyyymm" value=""> \
        <input type="hidden" name="dt_dd" value=""> \
    ');
    
    //連続押下規制
    function sendtime(){
        flag = false;
    }
    flag = false;

    function send(){
        if (flag) { alert("申し訳ございませんが現在検索中です。\nもうしばらくお待ちください。"); return false; }
        timerID=setTimeout("sendtime()",7000);
        flag = true;
        return true;
    }

    function autoCalcDaysTotal(){
        var departureDate = moment($('#departure_date').val()); //todays date
        var arrivalDate = moment($('#arrival_date').val()); // another date
        var duration = moment.duration(departureDate.diff(arrivalDate));
        var days = duration.asDays();
        $('input[name="le"]').val(days);
    }

    var _today =  moment(new Date());
    var today = _today.format('YYYY-MM-DD');
    var _nextDay = _today.add(1, 'day');
    var nextDay = _nextDay.format('YYYY-MM-DD');
    var formatControl = 'yyyy年mm月dd日';

    $('#arrival_date').attr('placeholder', today);
    $('#departure_date').attr('placeholder', today);

    var locale = $('#ifrmBooking').length ? (($('#ifrmBooking').find('input[name="lang"]')).val()).toLowerCase() : '';

    var departure_config = {
        uiLibrary: 'bootstrap4',
        locale: locale,
        format: 'yyyy-mm-dd',
        value: nextDay,
        minDate: nextDay,
        close: function (e, type) {
            autoCalcDaysTotal();
        },
    }

    if($('#departure_date').length)
        $('#departure_date').datepicker(departure_config);

    var arrival_config = {
        uiLibrary: 'bootstrap4',
        locale: locale,
        format: 'yyyy-mm-dd',
        value: today,
        minDate: today,
        close: function (e, type) {
            var currentDate = moment(e.target.value);
            $('input[name="dt_yyyymm"]').val(currentDate.format('YYYY/MM'));
            $('input[name="dt_dd"]').val(currentDate.format('DD'));

            var departureDate = moment($('#departure_date').val());
            $('#departure_date').data().minDate=(currentDate.add(1, 'day')).format('YYYY-MM-DD');
            if (currentDate >= departureDate){
                $('#departure_date').val(currentDate.format('YYYY-MM-DD'));
            }
            autoCalcDaysTotal();
        },
    }

    if($('#arrival_date').length)
    $('#arrival_date').datepicker(arrival_config);

    autoCalcDaysTotal();
    

    if ($('#section_booking').length){
        var $smartForm = $(this).find('#ifrmBooking');
        if (isMobile)
            $smartForm.attr('action', 'https://advance.reservation.jp/prostyleryokan/s_sp/rsv/search.aspx?hi_id=2&lang=ja-JP&sm=opt');
        else
            $smartForm.attr('action', 'https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/index.aspx?hi_id=2&lang=ja-JP');

        $(window).on('resize', function(){
            if (isMobile || $(this).width()<=414)
                $smartForm.attr('action', 'https://advance.reservation.jp/prostyleryokan/s_sp/rsv/search.aspx?hi_id=2&lang=ja-JP&sm=opt');
            else
                $smartForm.attr('action', 'https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/index.aspx?hi_id=2&lang=ja-JP');
        })
    }

    if (isMobile){
        $('.nav-link.btnBooking').click(function(event) {
            /* Act on the event */
            $('.navbar_toggler_custom').click();
        });
    }

});

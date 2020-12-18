// JavaScript Document

$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link-kanto').wrap('<a href="tel:0120602423" onclick="javascript:goog_report_conversion("tel:0120602423");yahoo_report_conversion(undefined);return false;"></a>')
        $('.tel-link-chubu').wrap('<a href="tel:08001112758" onclick="javascript:goog_report_conversion("tel:08001112758");yahoo_report_conversion(undefined);return false;"></a>')
    }
});


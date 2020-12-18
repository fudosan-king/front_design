jQuery(document).ready(function($){

    // Perform AJAX login on form submit
    $('form#frm_login').on('submit', function(e){
        e.preventDefault();
        $('form#frm_login p.status').show().text(ajax_miyanomori_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_miyanomori_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#frm_login #username').val(), 
                'password': $('form#frm_login #password').val(), 
                'security': $('form#frm_login #security').val() },
            success: function(data){
                $('form#frm_login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_miyanomori_object.redirecturl;
                }
            }
        });
    });

    // Perform AJAX login on form submit
    $('form#frm_regiter').on('submit', function(e){
        e.preventDefault();
        $('form#frm_regiter p.status').show().text(ajax_miyanomori_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_miyanomori_object.ajaxurl,
            data: { 
                'action'   : 'ajaxregister', //calls wp_ajax_nopriv_ajaxlogin
                'userlogin': $('form#frm_regiter #userlogin').val(), 
                'useremail': $('form#frm_regiter #useremail').val(), 
                'security' : $('form#frm_regiter #security').val() },
            success: function(data){
                if (data.loggedin == true){

                    $('form#frm_regiter p.status').text(data.message);

                }else{
                    var message = "";

                    $.each( data.message, function( key, value ) {
                        message  = message + value;
                    });

                    $('form#frm_regiter p.status').html(message);
                } 
            }
        });
    });

});
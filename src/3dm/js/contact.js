$(function() {
	$('#ibtnGoSubmit').on('click', function(e) {
        e.preventDefault();
        if(invalidCheck()){
            $('.frm_contact').submit();
        }else{
        	$('html').animate({
                scrollTop: $('.error-required').first().offset().top - 100
            }, 1000, function() {});
        }
    });

    // VALIDATE FORM DATA
    function callErrorMessage(elem, message){
        var htmlError = '<span class="error-required">' + message + '</span>';
        var formGroup = $(elem).parent('.form-group');

        if(formGroup.find('.error-required').length)
        {
           formGroup.find('.error-required').html(message);

        }else{
            formGroup.find('label').append(htmlError);
        } 
    }
    function removeErrorMessage(elem){
        var formGroup = $(elem).closest('.form-group');
        formGroup.find('.error-box').remove();
    }
    function setErrorClass(elem){
        $(elem).addClass('error-required');
    }
    function removeErrorClass(elem){
        $(elem).removeClass('error-required');
    }

    function invalidCheck() {

        var ERROR_NO_INPUT = 'この項目は必須です。';
        var isValid = true;
        errorElements = []
        

        $('.error-text').css('display', 'none');

        // EMPTY CHECK
        var requireInputText = $('input.required');
        console.log(requireInputText);
        $.each(requireInputText, function(i, e){
          if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                //setErrorClass(e);
                callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }
        });

        return isValid;
    }
});
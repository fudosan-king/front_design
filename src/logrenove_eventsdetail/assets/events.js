$(function($) {

    $('#btnAgree').on('click',function(e){
        var frm_data = $('form.frm_services').serializeArray();
        var isValid = check_valid(frm_data);
        if(isValid === false) {
            $('html').animate({
                scrollTop: $('.frm_services').offset().top
            }, 1000, function() {});
        }
        else
        {
            goConfirm(frm_data);
        }
        e.preventDefault();
        return false;
    });

    $('#btnBack').on('click',function(e){
        goBack();
        return false;
    });

    function goConfirm(data)
    {
        $('.frm-input').fadeOut();
        $('.frm_confirm').fadeIn(function() {
            $('html').scrollTop($('.frm_services').offset().top);
        });

        $.each(data, function(key, value) {
            var name = value.name;
            var val = value.value;
            $("#"+name).text(val);
        })
    }

    function goBack()
    {
        $('.frm-input').fadeIn(function() {
            $('html').scrollTop($('.frm_services').offset().top);
        });
        $('.frm_confirm').fadeOut();
        $('.frm-input').find('input, select').removeClass('is-invalid');
    }

    function isEmail(email) {
      var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
      return emailPattern.test(email);
    }

    function isPhoneNumber(val) {
        var phone_number = (check_value_type(val, 'number') && val.startsWith('0') && (val.length >= 10 && val.length <= 11));
        return phone_number;
    }

    function check_value_type(value, type) {
        var pattern = '';
        switch(type) {
          case 'hiragana':
            pattern = /^([ぁ-ん]+)$/;
            break;
          case 'katakana':
            pattern = /^([ァ-ヶー]+)$/;
            break;
          case 'number':
            pattern = /^([0-9]+)$/;
            break;
          default:
            pattern = /^([a-zA-Z0-9]+)$/;
        }
        return pattern.test(value);
    }

    function check_valid() {
        var ERROR_NO_INPUT = '値を入力してください';
        var data = $('.frm-input input.required,select.required').map(function() {
            key = $(this).attr('name');
            val = $(this).val();
            type_elem = $(this).attr('type');
            if(['radio'].indexOf(type_elem) != -1) {
                checked = $('input[name='+key+']:checked');
                val = checked.length > 0 ? checked.val() : '';
            }
            else if(['checkbox'].indexOf(type_elem) != -1) {
                key = key.indexOf('[]') != -1 ? key.replace('[]','') : key;
                val = $('input[name^='+key+']:checked').map(function() {
                    return $(this).val();
                });
            }
            var obj = {};
            obj['name'] = key;
            obj['value'] = val;
            return obj;
        });
        var invalid = $();
        $.each(data, function(key, value) {
            var name = value.name;
            var val = value.value;
            var element = $('[name^='+name+']');
            var required = element.hasClass('required');
            if(required) {
                if(val == '' || val.length == 0) {
                    element.addClass('validate-error');
                    invalid.push(name);
                    if(name == 'ck_agree') {
                        $('label.ck_agree').css('color', '#ff0000');
                    }

                }
                else if(name == 'email') {
                    if(!isEmail(val))
                    {
                        element.addClass('validate-error');
                        invalid.push(name);
                    }
                    else {
                        element.removeClass('validate-error');
                        // element.addClass('is-valid');
                    }
                }
                else if(name == 'phone-number') {
                    if(!isPhoneNumber(val))
                    {
                        element.addClass('validate-error');
                        invalid.push(name);
                    }
                    else {
                        element.removeClass('validate-error');
                        // element.addClass('is-valid');
                    }
                }
                else {
                    element.removeClass('validate-error');
                    if(name == 'ck_agree') {
                        $('label.ck_agree').removeAttr('style');
                    }
                    // element.addClass('is-valid');
                }
            }
        });
        if(invalid.length > 0) return false;
        else return true;
    }
})

var demo = function() {
        $('input[name="name"]').val('test');
        $('input[name="email"]').val('test@gmail.com');
        $('textarea[name="inquiry_content"]').val('test');

        setTimeout(function(){
            // $('#btn_confirm').click();
        },2000);
}

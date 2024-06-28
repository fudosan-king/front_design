var validateRecaptcha = function(token) {
  if(token.length != 0){
        $('#token-recaptcha').val(token);
        $("#goSubmit").prop("disabled", false)
    }
};

var expiredRecaptcha = function() {
  $('#token-recaptcha').val('');
    $("#goSubmit").prop("disabled", true)
    grecaptcha.reset();
}

var onloadCallback = function() {
  if(document.querySelector('#grecaptchaV2')){
    grecaptcha.render('grecaptchaV2', {
      'sitekey' : '6Lc9eoopAAAAAL_gUB2z3urVqGVDoa-u7AVi31DC',
      'callback': validateRecaptcha,
      'expired-callback': expiredRecaptcha
    });
  }
};

function initDataFORM(){
    /* INIT FORM */
    
    /* EVENT FORM */
     $('[name="number_of_room"], [name="room_type"]').on('change', function(){
        var number = $('[name="number_of_room"]').val();
        var type = $('[name="room_type"]').val();
        $('[name="madori"]').val(number + type);
    })


    $('[name="occupied_area_text"], [name="occupied_area_unit[]"]').on('change keyup', function(){
        var txt = $('[name="occupied_area_text"]').val();
        var unit = $('[name="occupied_area_unit[]"]:checked').val();
        $('[name="shiire_exclusive_area"]').val(txt + unit);
    })
}

(() => {
  'use strict'

  initDataFORM();

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const form = document.querySelector('.frm_contact')

  let validate_email_format = (email) => {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    const _error = document.querySelector('.error_' + email.name)

    if(!re.test(email.value)){
        email.setCustomValidity("メールアドレスの形式が正しくありません");
        email.classList.add('is-invalid');
        _error.innerHTML = email.validationMessage;
    } else {
        email.classList.remove('is-invalid'); 
        email.setCustomValidity("")
        _error.innerHTML = '値を入力してください';
    }
  }

  let validate_email_confirm = (email) => {
    const _field = document.querySelector('[name="email-confirm"]')
    const _error = document.querySelector('.error_' + _field.name)

    if(_field.value !== email.value){
        _field.setCustomValidity('電子メールの確認は異なる');
        _field.classList.add('is-invalid');
        _error.innerHTML = _field.validationMessage;
    }else{
        _field.setCustomValidity('');
        _field.classList.remove('is-invalid');
        _error.innerHTML = '値を入力してください';
    }
  }

  let validate_email = () => {
    const field_Email = document.querySelector('[name="email"]')
    const field_EmailConfirm = document.querySelector('[name="email-confirm"]')

    validate_email_format(field_Email);
    validate_email_confirm(field_Email);
  }

  let validate_phone = () => {
    const _field = document.querySelector('[name="phone-number"]')

    const re = /^(0([1-9]{1}-?[1-9]\d{3}|[1-9]{2}-?\d{3}|[1-9]{2}\d{1}-?\d{2}|[1-9]{2}\d{2}-?\d{1})-?\d{4}|0[789]0-?\d{4}-?\d{4}|050-?\d{4}-?\d{4})$/;

    const _error = document.querySelector('.error_' + _field.name)

    if(!re.test(_field.value)){
        _field.setCustomValidity("電話番号の形式が正しくありません");
        _field.classList.add('is-invalid');
        _error.innerHTML = _field.validationMessage;
    } else {
        _field.classList.remove('is-invalid'); 
        _field.setCustomValidity("")
        _error.innerHTML = '値を入力してください';
    }
  }

  let fill_values = () => {

    $('.defaultForm').fadeOut();
    $('.confirmForm').fadeIn(function(){
         $('body').scrollTop(0);
    });

    // 査定方法・ご相談内容の種別
    var cfrm_satei_type = $('[name="satei_type[]"]:checked').val();
    $('.cfrm_satei_type').html(cfrm_satei_type);

    // 査定対象物件の情報をご入力ください。
    
    // var contentHTMLConfirm = $('[name="madori"]').val() +
    //         '<br>' + $('[name="shiire_exclusive_area"]').val() +
    //         '<br>' + $('[name="birthyear"]').val();
   
    // $('.cfrm_estate_type').html(contentHTMLConfirm);

    $('.cfrm_madori').html($('[name="madori"]').val());
    $('.cfrm_shiire_exclusive_area').html($('[name="shiire_exclusive_area"]').val());
    $('.cfrm_birthyear').html($('[name="birthyear"]').val());
    
    $('.cfrm_shiire_post').html($('[name="shiire_post"]').val());
    $('.cfrm_shiire_pref').html($('[name="shiire_pref"]').val());
    $('.cfrm_shiire_city').html($('[name="shiire_city"]').val());
    $('.cfrm_shiire_aza').html($('[name="shiire_aza"]').val());
    $('.cfrm_shiire_building_roomnumber').html($('[name="shiire_building_roomnumber"]').val());

    // var cfrm_shiire_address = $('[name="shiire_post"]').val() + '<br>' +
    //     $('[name="shiire_pref"]').val() + '<br>' + $('[name="shiire_city"]').val() + '<br>' +
    //     $('[name="shiire_aza"]').val() + '<br>' + $('[name="shiire_building_roomnumber"]').val();
    // $('.cfrm_shiire_address').html(cfrm_shiire_address);

    var cfrm_comments = $('[name="free_detail_contact"]').val();
    $('.cfrm_comments').html(cfrm_comments);

    
    // 連絡先をご入力ください
    var cfrm_name = $('[name="last-name"]').val() + $('[name="first-name"]').val();
    $('.cfrm_name').html(cfrm_name);

    var cfrm_name_kana = $('[name="myouji"]').val() + $('[name="namae"]').val();
    $('.cfrm_name_kana').html(cfrm_name_kana);

    $('.cfrm_post').html($('[name="post"]').val());
    $('.cfrm_pref').html($('[name="pref"]').val());
    $('.cfrm_city').html($('[name="city"]').val());
    $('.cfrm_aza').html($('[name="aza"]').val());
    $('.cfrm_building_roomnumber').html($('[name="building_roomnumber"]').val());

    // var cfrm_address = $('[name="post"]').val() + '<br>' +
    //     $('[name="pref"]').val() + '<br>' + $('[name="city"]').val() + '<br>' +
    //     $('[name="aza"]').val() + '<br>' + $('[name="building_roomnumber"]').val();
    // $('.cfrm_address').html(cfrm_address);

    var cfrm_phonenumber = $('[name="phone-number"]').val();
    $('.cfrm_phonenumber').html(cfrm_phonenumber);

    var cfrm_email = $('[name="email"]').val();
    $('.cfrm_email').html(cfrm_email);
  }

  const btn_GoConfirm = document.querySelector('#goConfirm')

  btn_GoConfirm.addEventListener('click', event => {
    validate_phone()
    validate_email()
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }else{
      fill_values()
    }

    form.classList.add('was-validated')
  });

  const btn_GoBack = document.querySelector('#goBack')

  btn_GoBack.addEventListener('click', event => {
    $('.defaultForm').fadeIn(function(){
        $('html').scrollTop(0);
    });
    $('.confirmForm').fadeOut();

    grecaptcha.reset();
    $('#token-recaptcha').val('');
    $('#goSubmit').attr('disabled', true);
  });

  const btn_GoSubmit = document.querySelector('#goSubmit')

  btn_GoSubmit.addEventListener('click', event => {
    validate_phone()
    validate_email()
    if (form.checkValidity()) {
      var token = grecaptcha.getResponse();

      $.post(
          sell_object.ajax_url,
          {'recaptcha_token': token, action: "contact_recaptcha"},
          function(data, status, xhr){
              if (data.success == true) {

                  // Filter remove elements before submit to formrun
                  document.querySelector('[name="number_of_room"]').removeAttribute('name');
                  document.querySelector('[name="room_type"]').removeAttribute('name');
                  document.querySelector('[name="occupied_area_text"]').removeAttribute('name');
                  document.querySelector('[name="occupied_area_unit[]"]').removeAttribute('name');
                  document.querySelector('[name="email-confirm"]').removeAttribute('name');
                  document.querySelector('[name="ck_agree"]').removeAttribute('name');

                  form.setAttribute('action', data.formrun_url);
                  form.submit();
              }
          }
      );
    }else{
      event.preventDefault()
      event.stopPropagation()
    }
  });

})()

let demo = () => {

  $('[name="number_of_room"]').val('3').change();
  $('[name="room_type"]').val('LDK').change();
  $('[name="occupied_area_text"]').val('999').change();
  $('[name="birthyear"]').val('2017年（平成29年）').change();
  
  $('[name="shiire_post"]').val('1020072');
  AjaxZip3.zip2addr('shiire_post','','shiire_pref','shiire_city', 'shiire_aza');
  $('[name="shiire_building_roomnumber"]').val('ABC Building');
  $('[name="free_detail_contact"]').val('TESTING DATA');

  $('[name="last-name"]').val('Khanh');
  $('[name="first-name"]').val('Nguyen');
  $('[name="myouji"]').val('グエン');
  $('[name="namae"]').val('カーン');

  $('[name="post"]').val('1240024');
  
  setTimeout(function() {
    AjaxZip3.zip2addr('post','','pref','city', 'aza');
  }, 1000);

  $('[name="building_roomnumber"]').val('XYZ House');
  $('[name="phone-number"]').val('0120936417');
  $('[name="email"]').val('khanh@propolife.co.jp');
  $('[name="email-confirm"]').val('khanh@propolife.co.jp');

  $('[name="ck_agree"]').prop('checked', true)

  $('#goConfirm').click();
}


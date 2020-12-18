jQuery(document).ready(function($) {

  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

  // $('.datepicker').datepicker({
  //   language: 'ja',
  // });
    
  $('.numbersOnly').keyup(function () {
      this.value = this.value.replace(/[^0-9\.]/g,'');
  });


  $('#ibtnGoSubmit').on('click', function(e) {
      e.preventDefault();
      
      if(invalidCheck()){
          goConfirm();
      }else{
        return $("html,body").animate({
              scrollTop: "200"
        });
      }
  });

  $('#goBack').on('click', function(e) {
      e.preventDefault();
      goBack();
  });

  $('#goSubmit').on('click', function(e) {
      e.preventDefault();
      if(!($('.contact_item_staff:checked').length > 0)){
         $('input[name="contact_method"]').val('');
         $('input[name="contact_gmt[]"]').val('');
      }else{
        var data =  $('input[name="contact_gmt[]"]');
        var val = '';

        $.each(data, function(key, value) {
          val = val + ' ' +value.value+',';
        });

        $('input[name="contact_gmt_text"]').val(val);
      }
      $('form.frm_contactus').submit();
  });


  function goConfirm()
  {
    var data = $('form.frm_contactus').serializeArray();
  
    $('.frm_contactus').fadeOut();

    $('.frm_confirm').fadeIn(function() {
          $("html,body").animate({scrollTop: "200"});
    });

    var tmpName = '';
    $.each(data, function(key, value) {
        var name = value.name;
        var val = value.value;
        if (name.indexOf('[]') == -1) 
        {
            $(".cfrm_"+name).text(val);
        }
        else 
        {
            name = name.replace('[]','');
            if(tmpName != name){
                $(".cfrm_"+name).html(escapeHtml(val) + '<br>');
                tmpName = name;
            }else{
                $(".cfrm_"+name).append(escapeHtml(val) + '<br>');
            }
            
        }
    })

    $('.section_contact_item').fadeOut();
    
    if($('.contact_item_document:checked').length > 0){
      $('.cfrm_contact_item_document').fadeIn();
    }

    if($('.contact_item_meet:checked').length > 0){
       $('.cfrm_contact_item_meet').fadeIn();
    }

    if($('.contact_item_staff:checked').length > 0){
         $('.cfrm_contact_item_staff').fadeIn();
    }

    if($('.contact_item_other:checked').length > 0){
        $('.cfrm_contact_item_other').fadeIn();
    }
  }

  function goBack()
  {
    $('.frm_contactus').fadeIn(function(){
          $("html,body").animate({scrollTop: "200"});
    });
   
    $('.frm_confirm').fadeOut();
  }

  function escapeHtml(text) {
      return text
          .replace(/&/g, "&amp;")
          .replace(/</g, "&lt;")
          .replace(/>/g, "&gt;")
          .replace(/"/g, "&quot;")
          .replace(/'/g, "&#039;");
  }
 // VALIDATE FORM DATA
  function callErrorMessage(elem, message){

      var htmlError = '<span class="error-required" style="color: red">' + message + '</span>';
      var formGroup = $(elem).parents('.form-group');

      if(formGroup.find('.error-required').length)
      {
         formGroup.find('.error-required').html(message);

      }else{
          formGroup.find('.label_required').append(htmlError);
      } 
  }

  function removeErrorMessage(elem){
      var formGroup = $(elem).closest('.form-group');
      formGroup.find('.error-required').remove();
  }

  function setErrorClass(elem){
      $(elem).addClass('error-required');
  }

  function removeErrorClass(elem){
    var formGroup = $(elem).parents('.form-group');
    formGroup.find('.error-required').remove();
  }

  function invalidCheckEmail(elem)
  {
    var ERROR_MAIL_FORMAT = '無効な形式です';
    var isValid = true;
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    if (!emailPattern.test(elem.val())) {
        callErrorMessage(elem, ERROR_MAIL_FORMAT);
        isValid = false;

    } else {
        removeErrorClass(elem);
    }

    return isValid;
  }

  function invalidCheckNumber(elem)
  {
    var ERROR_PHONE_FORMAT = '無効な形式です';
    var isValid = true;
  
    if (!$.isNumeric( elem.val() )) {
        callErrorMessage(elem, ERROR_PHONE_FORMAT);
        isValid = false;

    } else {
        removeErrorClass(elem);
    }

    return isValid;
  }

  function invalidCheckPostalCode(elem)
  {
    var ERROR_FORMAT = '無効な形式です';
    var isValid = true;
  
    if (elem.length > 7 || !$.isNumeric(elem.val()) ) {
        callErrorMessage(elem, ERROR_FORMAT);
        isValid = false;

    } else {
        removeErrorClass(elem);
    }

    return isValid;
  }



  function invalidCheckInput(elem)
  {
    var ERROR_NO_INPUT = 'この項目は必須です';
    var isValid = true;
    if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
      callErrorMessage(elem, ERROR_NO_INPUT);
      isValid = false;
    }else{
      removeErrorClass(elem);
    }
    return isValid;
  }

  function invalidCheckSelect(elem)
  {
      var ERROR_NO_INPUT = 'この項目は必須です';
      var isValid = true;

     if(typeof(elem.find('option:selected').val()) === 'undefined' || elem.find('option:selected').val() == "" || elem.find('option:selected').val() == "null"){
        callErrorMessage(elem, ERROR_NO_INPUT);
        isValid = false;
      }else{
        removeErrorClass(elem);
      }
      return isValid;
  }

  function invalidCheck() {

      var ERROR_NO_INPUT = 'この項目は必須です';
      var isValid = true;
      errorElements = []
      
      // $('.error-required').css('display', 'none');

      // EMPTY CHECK
      var requireInputText = $('input.required');
      var requireSelect    = $('select.required');
      
      $.each(requireInputText, function(i, e)
      {
        if(!invalidCheckInput($(e)))
        {
            isValid = false;
        }
      }); 

      var ischecked      = $('input[name="contact_item[]"]:checked').length > 0;

      if (ischecked == false){
          callErrorMessage('#customCheck1', ERROR_NO_INPUT);
          isValid = false;
       }else{
          removeErrorClass('#customCheck1');                  
      }

      if($('.contact_item_document:checked').length > 0)
      {
        if(!invalidCheckInput($('input[name="postal_code"]')))
        {
           isValid = false;
        }

        if(!invalidCheckInput($('input[name="city"]')))
        {
          isValid = false;
        }

        if(!invalidCheckSelect($('select[name="prefecture"]')))
        {
          isValid = false;
        }

      }

      if($('.contact_item_meet:checked').length > 0)
      {
          var ischeckedMeeting = true;

          if(!invalidCheckInput($('input[name="date_meeting_1"]')))
          {
               isValid = false;
               ischeckedMeeting = false;
          }

          if(!invalidCheckInput($('input[name="date_meeting_2"]')))
          {
               isValid = false;
               ischeckedMeeting = false;
          }

          if(!invalidCheckSelect($('select[name="time_meeting_1"]')))
          {
             isValid = false;
             ischeckedMeeting = false;
          }

          if(!invalidCheckSelect($('select[name="time_meeting_2"]')))
          {
            isValid = false;
            ischeckedMeeting = false;
          }

          if(!ischeckedMeeting)
          {
            callErrorMessage('input[name="date_meeting_1"]', ERROR_NO_INPUT);
          }
      }


      if($('.contact_item_staff:checked').length > 0)
      {
          var ischecked = $('input[name="contact_gmt[]"]:checked').length > 0;

          if (ischecked == false){
              callErrorMessage('#customCheck10', ERROR_NO_INPUT);
              isValid = false;
           }else{
              removeErrorClass('#customCheck10');                  
          }
      }

      if(!invalidCheckEmail($('input[name="email"]')))
      {
        isValid = false;
      }

      if(!invalidCheckNumber($('input[name="phone_number"]')))
      {
        isValid = false;
      }

     
      if( !$('#ck_agree:checked').length > 0)
      {
        callErrorMessage('#ck_agree', ERROR_NO_INPUT);
        isValid = false;
      }else{
        removeErrorClass('#ck_agree');        
      }

      // if(!invalidCheckPostalCode($('select[name="postal_code"]')))
      // {
      //   isValid = false;
      // }

      
      return isValid;
  }

//   $.ajax({
//     url: ajax_miyanomori_object.jp_national_holidays_min,
//     dataType: 'json',
//   })
//   .always(function(data) {
    
//     var holidays = data[(new Date()).getFullYear()];
//     $('.datepicker').datepicker({
//       language: 'ja',
//       disableTouchKeyboard: true,
//           autoclose:true,
//           todayHighlight: true,
//           ignoreReadonly: true,
//           beforeShowDay: function (date) {

//               if(date.getTime() <= (new Date()).getTime() )
//                   return false;

//               if (date.getDay() == 2 || date.getDay() == 3){
//                 if(data &&  data[date.getFullYear()][(date.getMonth() + 1)]){
//                   if(data[date.getFullYear()][(date.getMonth() + 1)].indexOf(date.getDate()) != -1){
//                     return true;
//                   }
//                   return false;
//                 }
//                 return false;
//               }
              
//               return true;
//           },
//     });
//   })
//   .fail(function(e) {
//     console.log(e);
//   })

}(jQuery));


$(function($) {
	
  AOS.init();

	$(document).ready(function() {
      $(window).scroll(function() {
          $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
      });

      $("#back-to-top").click(function() {
          $("html,body").animate({
              scrollTop: "0"
          });
      });
  });

});


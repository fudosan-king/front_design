  
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
  
  //チェックイン日プルダウン生成
  function date_dropdown_from_make(year_and_month_id, day_id, add_day, ym_change_func, d_change_func) {
    gy = new Date().getFullYear();
    gm = new Date().getMonth()+1;

    str = ""
    sgm = ""
    str = "<select id='dt_yyyymm' name='dt_yyyymm' size='1'>"

    for (i=1; i <= 7; i++ ){

    	if(gm > 12){
    		gm = 1;
    		gy = gy + 1;
    	}
    	if(gm < 10){
    		sgm="0" + gm;
    	}
    	else {
    		sgm="" + gm;
    	}
    	str=str + "<option value=" + gy + "/" + sgm + ">" + gy + "年 " + sgm + "月" + "</option>"
    	gm=gm+1;
    }
    
    str = str + "</select>　"
    document.write(str);
    
    str = ""
    str = "<select id='dt_dd' name='dt_dd' size='1'>"
    
    gd = new Date().getDate();
    for (i=1; i <= 31; i++ ){
    	sgm=""+ i
    
    	if (i<10){
      	sgm="0"+ i
    	}
    	
    	if(sgm==gd){
    		str=str + "<option value=" + sgm + " selected >" + i + "日" + "</option>";
    	}
    	else {
    		str=str + "<option value=" + sgm + " >" + i + "日" + "</option>";
    	}
    }

    str = str + "</select>"
    document.write(str);
  }

  //チェックアウト日プルダウン生成
  function date_dropdown_to_make(year_and_month_id, day_id, add_day, ym_change_func, d_change_func) {
    
    gy = new Date().getFullYear();
    gm = new Date().getMonth()+1;

    str = ""
    sgm = ""
    str = "<select id='dt_yyyymm_to' name='dt_yyyymm_to' size='1'>"

    for (i=1; i <= 8; i++ ){

    	if(gm > 12){
    		gm = 1;
    		gy = gy + 1;
    	}
    	if(gm < 10){
    		sgm="0" + gm;
    	}
    	else {
    		sgm="" + gm;
    	}
    	str=str + "<option value=" + gy + "/" + sgm + ">" + gy + "年 " + sgm + "月" + "</option>"
    	gm=gm+1;
    }

    str = str + "</select>　"
    document.write(str);

    str = ""
    str = "<select id='dt_dd_to' name='dt_dd_to' size='1'>"

    gd = new Date().getDate() + 1; //翌日
    for (i=1; i <= 31; i++ ){
    	sgm=""+ i
    	
    	if (i<10){
      	sgm="0"+ i
    	}

    	if(sgm==gd){
    		str=str + "<option value=" + sgm + " selected >" + i + "日" + "</option>";
    	}
    	else {
    		str=str + "<option value=" + sgm + " >" + i + "日" + "</option>";
    	}
    }

    str = str + "</select>"
    document.write(str);
  }
  
  //チェックイン日・チェックアウト日
  $(function() {

    //チェックイン日Datepicker
    $("#dp_from").datepicker();
    $("#dp_from").datepicker("option", "minDate", 0);
    $("#dp_from").datepicker("option", "maxDate", '+8m'); 
    $("#dp_from").datepicker("option", "dateFormat", 'yy/mm/dd'); 
    $("#dp_from").datepicker("option", "numberOfMonths", 2);
    $("#dp_from").datepicker("option", "showOn", 'button');
    $("#dp_from").datepicker("option", "showButtonPanel", false);
    $("#dp_from").datepicker("option", "buttonImageOnly", true);
    $("#dp_from").datepicker("option", "buttonImage", 'img/calendar.gif');
    $('#dp_from').bind("change", function() {
      setDpFrom($(this).val());
      setDateTo();
    });
    //チェックアウト日Datepicker
    $("#dp_to").datepicker();
    $("#dp_to").datepicker("option", "minDate", "+1d");
    $("#dp_to").datepicker("option", "maxDate", '+30d'); 
    $("#dp_to").datepicker("option", "dateFormat", 'yy/mm/dd'); 
    $("#dp_to").datepicker("option", "numberOfMonths", 2);
    $("#dp_to").datepicker("option", "showOn", 'button');
    $("#dp_to").datepicker("option", "showButtonPanel", false);
    $("#dp_to").datepicker("option", "buttonImageOnly", true);
    $("#dp_to").datepicker("option", "buttonImage", 'img/calendar.gif');
    $('#dp_to').bind("show", function() {
      alert('select');
    });
    $('#dp_to').bind("change", function() {
      setDpTo($(this).val());
      setDateFrom();
    });
    //チェックイン日プルダウン
    $('#dt_yyyymm').bind("change", function() {
      setDateTo();
    });
    $('#dt_dd').bind("change", function() {
      setDateTo();
    });
    //チェックアウト日プルダウン
    $('#dt_yyyymm_to').bind("change", function() {
      setDateFrom();
    });
    $('#dt_dd_to').bind("change", function() {
      setDateFrom();
    });
    $('#le').bind("change", function() {
      //setDateToN(Number($("select[name='le']").val()));
      setDateTo();
    });
    
    $("#dt_yyyymm").css("background-color","");
    $("#dt_dd").css("background-color","");
    $("#dt_yyyymm_to").css("background-color","");
    $("#dt_dd_to").css("background-color","");
  });
  
  //チェックイン日Datepickerの日付がクリック
  function setDpFrom(date) {
    var dates = date.split('/');
    $("#dt_yyyymm").val(dates[0]+ "/" + dates[1]);
    $("#dt_dd").val(dates[2]);
  }
  //チェックアウト日Datepickerの日付がクリック
  function setDpTo(date) {
    var dates = date.split('/');
    $("#dt_yyyymm_to").val(dates[0]+ "/" + dates[1]);
    $("#dt_dd_to").val(dates[2]);
  }
  //チェックイン日からチェックアウト日再設定
  function setDateTo() {
    var y = $("select[name='dt_yyyymm']").val().split('/')[0];
    var m = $("select[name='dt_yyyymm']").val().split('/')[1];
    var d = $("select[name='dt_dd']").val();
    if (checkDate(y, m, d)){
    
      $("#dt_yyyymm").css("background-color","");
      $("#dt_dd").css("background-color","");
      $("#dt_yyyymm_to").css("background-color","");
      $("#dt_dd_to").css("background-color","");
      var date = new Date(y + '/' + m + '/' + d);
      $("#dp_to").datepicker("option", "minDate", date);
      
      date.setDate(date.getDate() + Number($("select[name='le']").val()));
      $("#dt_yyyymm_to").val(date.getFullYear()+ "/" + toDoubleDigits(date.getMonth() + 1));
      $("#dt_dd_to").val(toDoubleDigits(date.getDate()));
      $('#le').val(getNights());
      
      var datep_min = new Date(y + '/' + m + '/' + d);
      var datep_max = new Date(y + '/' + m + '/' + d);
      datep_min.setDate(datep_min.getDate() + 1);
      datep_max.setDate(datep_max.getDate() + getMaxLe());
      $("#dp_to").datepicker("option", "minDate", datep_min);
      $("#dp_to").datepicker("option", "maxDate", datep_max);
        
    }else{
      $("#dt_yyyymm").css("background-color","#FFC0CB");
      $("#dt_dd").css("background-color","#FFC0CB");
    }
  }
  
  //泊数からチェックアウト日再設定
  function setDateToN(nights) {
    var y = $("select[name='dt_yyyymm']").val().split('/')[0];
    var m = $("select[name='dt_yyyymm']").val().split('/')[1];
    var d = $("select[name='dt_dd']").val();
    if (checkDate(y, m, d)){
      var date = new Date(y + '/' + m + '/' + d);
      date.setDate(date.getDate() + nights);
      $("#dt_yyyymm_to").val(date.getFullYear()+ "/" + toDoubleDigits(date.getMonth() + 1));
      $("#dt_dd_to").val(toDoubleDigits(date.getDate()));
    }
  }
  
  //チェックアウト日からチェックイン日再設定
  function setDateFrom() {
    var y = $("select[name='dt_yyyymm_to']").val().split('/')[0];
    var m = $("select[name='dt_yyyymm_to']").val().split('/')[1];
    var d = $("select[name='dt_dd_to']").val();
    if (checkDate(y, m, d)){
    
      $("#dt_yyyymm").css("background-color","");
      $("#dt_dd").css("background-color","");
      $("#dt_yyyymm_to").css("background-color","");
      $("#dt_dd_to").css("background-color","");
      var date = new Date(y + '/' + m + '/' + d);
      var nights = getNights();
      
      if(nights>0){
        if (nights > getMaxLe()){
          date.setDate(date.getDate() - getMaxLe());
          $("#dt_yyyymm").val(date.getFullYear()+ "/" + toDoubleDigits(date.getMonth() + 1));
          $("#dt_dd").val(toDoubleDigits(date.getDate()));
        }
        $('#le').val(getNights());
      }else{
        date.setDate(date.getDate() - 1);
        $("#dt_yyyymm").val(date.getFullYear()+ "/" + toDoubleDigits(date.getMonth() + 1));
        $("#dt_dd").val(toDoubleDigits(date.getDate()));
        $('#le').val(getNights());
      }
    }else{
      $("#dt_yyyymm_to").css("background-color","#FFC0CB");
      $("#dt_dd_to").css("background-color","#FFC0CB");
    }
  }
  //泊数計算
  function getNights() {
    
    var diff =0;
    var y1 = $("select[name='dt_yyyymm']").val().split('/')[0];
    var m1 = $("select[name='dt_yyyymm']").val().split('/')[1];
    var d1 = $("select[name='dt_dd']").val();
    var y2 = $("select[name='dt_yyyymm_to']").val().split('/')[0];
    var m2 = $("select[name='dt_yyyymm_to']").val().split('/')[1];
    var d2 = $("select[name='dt_dd_to']").val();
    
    if (checkDate(y1, m1, d1) && checkDate(y2, m2, d2)){
      var date1 = new Date(y1 + '/' + m1 + '/' + d1);
      var date2 = new Date(y2 + '/' + m2 + '/' + d2);

      var diff=(date2.getTime()-date1.getTime())/(1000*60*60*24);
    }
    return Number(diff);
  }
  //最大泊数取得
  function getMaxLe() {    
    var options = document.getElementById('le').options;
    if (options.length > 0 ){
      return Number(options[options.length - 1].value);
    }
  }
  
  //日付チェック
  function checkDate(year, month, day) {
      var dt = new Date(year, month - 1, day);
      if(dt == null || dt.getFullYear() != year || dt.getMonth() + 1 != month || dt.getDate() != day) {
          return false;
      }
      return true;
  }
  
  //1桁の数字を0埋めで2桁にする
  function toDoubleDigits(num) {
    num += "";
    if (num.length === 1) {
      num = "0" + num;
    }
   return num;
  }
  
 
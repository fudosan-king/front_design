// work today library
// SYNCKGRAPHICA

// メッセージの設定
wt_message = new Object();
wt_message.close = "本日の営業は終了しました";
wt_message.holiday = "本日は定休日です";

// 営業時間の設定
var wt_shop_hour = new Object();
wt_shop_hour.open = new Array();
wt_shop_hour.close = new Array();

// 日曜日
wt_shop_hour.open[0] = "09:30";
wt_shop_hour.close[0] = "17:00";

// 月曜日
wt_shop_hour.open[1] = "11:00";
wt_shop_hour.close[1] = "20:00";

// 火曜日(定休日)
wt_shop_hour.open[2] = false;
wt_shop_hour.close[2] = false;

// 水曜日
wt_shop_hour.open[3] = "12:00";
wt_shop_hour.close[3] = "21:00";

// 木曜日
wt_shop_hour.open[4] = "11:00";
wt_shop_hour.close[4] = "20:00";

// 金曜日
wt_shop_hour.open[5] = "11:00";
wt_shop_hour.close[5] = "20:00";

// 土曜日
wt_shop_hour.open[6] = "09:30";
wt_shop_hour.close[6] = "17:00";

var wt_weeksName = new Array('日','月','火','水','木','金','土');
var wt_optgroup = null;

var wt_today = new Date((new Date()).getTime());
var wt_year = wt_today.getYear();
var wt_month = wt_today.getMonth();
var wt_day = wt_today.getDate();
var wt_hour = wt_today.getHours();
var wt_min = wt_today.getMinutes();
if(wt_hour < 10) wt_hour = "0"+wt_hour;
if(wt_min < 10) wt_min = "0"+wt_min;
if (wt_year < 1900) wt_year += 1900;

var wt_now = wt_hour + ":" + wt_min;

if(wt_shop_hour.open[wt_today.getDay()]){
	// 営業日の場合
	if(wt_shop_hour.open[wt_today.getDay()] <= wt_now && wt_now <= wt_shop_hour.close[wt_today.getDay()])
		document.write("営業中です。本日は"+wt_shop_hour.close[wt_today.getDay()]+"まで営業しております。");
	else if(wt_shop_hour.open[wt_today.getDay()] > wt_now)
		document.write("本日は"+wt_shop_hour.open[wt_today.getDay()]+"より営業しております。");
	else
		document.write("本日の営業は終了しました。")
}
else {
	// 定休日の場合
	document.write("本日は定休日です。");
}
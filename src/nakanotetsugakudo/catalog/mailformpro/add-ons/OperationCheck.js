var mfpElementsList = new Array();
var mfpElementsListCheck = new Object();
function mfpElementsListPrompt(){
	prompt('MailformPro Elements List',mfpElementsList.join(','));
}
mfp.extend.event('ready',
	function(){
		var elm = mfp.d.createElement('div');
		elm.id = 'mfp_OperationCheck';
		mfp.Mfp.parentNode.insertBefore(elm,mfp.$('mfp_warning'));
		var src = mfp.$('mfpjs').src + '?module=check';
		if(mfp.$('mfpjs').src.indexOf('?') > -1)
			src = mfp.$('mfpjs').src + '&module=check';
		var innerHTML = '<p>mailformpro.cgi は正常に動作しています。</p>';
		var par = Math.round(mfp.Analytics.requiredQty/mfp.Analytics.qty*10000)/100;
		innerHTML += '<p><a href="'+src+'" target="_blank" style="color: #FFF;">[ CGI動作チェックモジュールを実行する ]</a></p>';
		innerHTML += '<p>この表示はconfig.cgiの設定により消すことができます。っていうか消して。</p>';
		innerHTML += '<button onclick="mfpElementsListPrompt()" type="button">エレメントリストを取得</button></p>';
		innerHTML += '<p>このフォームには'+mfp.Analytics.qty+'個のエレメントが配置されており'+mfp.Analytics.requiredQty+'個('+par+'%)が必須項目です。</p>';
		var ElementsType = new Array();
		for(var prop in mfp.Analytics.type)
			ElementsType.push(prop+"/"+mfp.Analytics.type[prop]);
		innerHTML += '<p>'+ElementsType.join('、')+'で構成されています。</p>';
		elm.innerHTML = innerHTML;
		
		mfp.css(mfp.$('mfp_OperationCheck'),{
			"borderRadius": "5px",
			"fontSize": "16px",
			"lineHeight": "1.5em",
			"color": "#FFF",
			"margin": "10px auto",
			"boxShadow": "0px 2px 10px #666",
			"textAlign": "center",
			"padding": "10px 0px",
			"backgroundColor": '#C00'
		});
	}
);
mfp.extend.event('init',
	function(e){
		if(e.name && !mfpElementsListCheck[e.name]){
			mfpElementsList.push(e.name);
			mfpElementsListCheck[e.name] = true;
		}
	}
);

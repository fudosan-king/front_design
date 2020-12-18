mfp.extend.event('ready',
	function(){
		var elm = mfp.d.createElement('div');
		elm.id = 'mfp_testsend';
		mfp.Mfp.parentNode.insertBefore(elm,mfp.$('mfp_warning'));
		mfp.call(mfp.$('mfpjs').src,'addon=testmode/testmode.js&callback=testmodeCallback');
		
		var innerHTML = '<p>現在、テストモードで動作しております。</p>';
		
		elm.innerHTML = innerHTML;
		
		mfp.css(mfp.$('mfp_testsend'),{
			"borderRadius": "5px",
			"fontSize": "16px",
			"lineHeight": "1.5em",
			"color": "#FFF",
			"margin": "10px auto",
			"boxShadow": "0px 2px 10px #666",
			"textAlign": "center",
			"padding": "5px 0px",
			"backgroundColor": '#097C25'
		});
	}
);
function testmodeCallback(mailto,testmail){
	var innerHTML = '<p>現在<strong>【テストモード】</strong>で動作しております。<br />テストモードでは'+testmail+'宛にメールが送信されます。<br />稼働モードでは'+mailto+'宛にメールが送信されます。</p>';
	mfp.$('mfp_testsend').innerHTML = innerHTML;
	mfp.addhiddenElement('testmode',1);
	//alert("test mode");
}
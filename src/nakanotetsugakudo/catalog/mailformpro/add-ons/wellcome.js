var WellcomeMessageChart = new Array(50,30,20,10,5,2);

mfpLang['WellcomeMessage'] = new Array();
mfpLang['WellcomeMessage'][0] = '$1回ってストーカーかっ！送信しろよ！！';
mfpLang['WellcomeMessage'][1] = 'もう$1回も来てるよ。いい加減、送信してけよ。';
mfpLang['WellcomeMessage'][2] = 'またきたのかい。$1回目だね。まぁゆっくりしてけよ。';
mfpLang['WellcomeMessage'][3] = 'またきてくれたんだね！$1回目だよね会うの。今回は送信してくれるのかな？';
mfpLang['WellcomeMessage'][4] = 'ようこそ！気軽にお問い合わせしてくれよな！';
mfpLang['WellcomeMessage'][5] = 'はじめまして！ぜひ何かしらを送信していってね！';

mfp.extend.event('startup',
	function(){
		var elm = mfp.d.createElement('div');
		elm.id = 'mfp_wellcome';
		mfp.Mfp.parentNode.insertBefore(elm,mfp.$('mfp_warning'));
	}
);

mfp.extend.event('ready',
	function(){
		var pv = Number(mfpConfigs['PageView']);
		for(var i=0;i<WellcomeMessageChart.length;i++){
			if(pv > WellcomeMessageChart[i] && mfp.$('mfp_wellcome')){
				mfp.$('mfp_wellcome').innerHTML = mfpLang['WellcomeMessage'][i].replace('$1',pv);
				break;
			}
		}
		if(mfpConfigs['InputTimeAVG']){
			var avgtime = "";
			var sands = mfpConfigs['InputTimeAVG'];
			if(sands > 0){
				if(sands > (60*60*24))
					avgtime = mfpLang['TimeDay'].replace('$1',Math.floor(sands/(60*60*24)));
				else if(sands > (60*60))
					avgtime = mfpLang['TimeHour'].replace('$1',Math.floor(sands/(60*60)));
				else if(sands > 60)
					avgtime = mfpLang['TimeMin'].replace('$1',Math.floor(sands/60));
				else
					avgtime = mfpLang['TimeSec'].replace('$1',sands);
				mfp.$('mfp_wellcome').innerHTML += '<p>入力時間は平均で <strong>'+avgtime+'</strong> くらいかかります。</p>';
			}
		}
	}
);
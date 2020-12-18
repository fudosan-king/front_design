var mfp_abcd = new Array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
var mfp_kana = new Array('ア','イ','ウ','エ','オ','カ','キ','ク','ケ','コ','サ','シ','ス','セ','ソ','タ','チ','ツ','テ','ト','ナ','ニ','ヌ','ネ','ノ','ハ','ヒ','フ','フ','ヘ','マ','ミ','ム','メ','モ','ヤ','ユ','ヨ','ラ','リ','ル','レ','ロ','ワ','ヰ','ヱ','ヲ','ン','イェ','シ','チ','ツ','ファ','フィ','フェ','フォ','ァ','ィ','ゥ','ェ','ォ','ヴァ','ヴィ','ヴ','ヴェ','ヴォ','クァ','クィ','クェ','クォ','ガ','ギ','グ','ゲ','ゴ','ザ','ジ','ジ','ズ','ゼ','ゾ','ダ','ヂ','ヅ','デ','ド','ホ','バ','ビ','ブ','ベ','ボ','パ','ピ','プ','ペ','ポ','ジャ','ジュ','ジョ','キャ','キュ','キョ','ギャ','ギュ','ギョ','シャ','シュ','ショ','シャ','シュ','ショ','ジャ','ジュ','ジョ','チャ','チュ','チョ','ヂャ','ヂュ','ヂョ','チャ','チュ','チョ','ニャ','ニュ','ニョ','ヒャ','ヒュ','ヒョ','ビャ','ビュ','ビョ','ピャ','ピュ','ピョ','ミャ','ミュ','ミョ','リャ','リュ','リョ','シェ','ジェ','シェ','ジェ','チェ','チェ','ツァ','ツェ','ツォ','ティ','ディ','デュ','ヵ','ヶ','ッ','ャ','ュ','ョ','ヮ','ウィ','ウィ','ウェ','ウェ','ウォ','ヴュ','ツィ','クァ','クィ','クェ','クォ','グァ','ジャ','ジュ','ジョ','チャ','チュ','チョ','ティ','ディ','テュ','トゥ','ドゥ','ファ','フィ','フェ','フォ','フュ','フュ','ンb','ンc','ンd','ンf','ンg','ンh','ンj','ンk','ンl','ンm','ンp','ンq','ンr','ンs','ンt','ンv','ンw','ンx','ンz','ッb','ッc','ッd','ッf','ッg','ッh','ッj','ッk','ッl','ッm','ッp','ッq','ッr','ッs','ッt','ッv','ッw','ッx','ッy','ッz','ー','ァ','ィ','ゥ','ェ','ォ','ャ','ュ','ョ','ッ');
var mfp_roma = new Array('a','i','u','e','o','ka','ki','ku','ke','ko','sa','si','su','se','so','ta','ti','tu','te','to','na','ni','nu','ne','no','ha','hi','hu','fu','he','ma','mi','mu','me','mo','ya','yu','yo','ra','ri','ru','re','ro','wa','wyi','wye','wo','nn','ye','shi','chi','tsu','fa','fi','fe','fo','xa','xi','xu','xe','xo','va','vi','vu','ve','vo','qa','qi','qe','qo','ga','gi','gu','ge','go','za','zi','ji','zu','ze','zo','da','di','du','de','do','ho','ba','bi','bu','be','bo','pa','pi','pu','pe','po','ja','ju','jo','kya','kyu','kyo','gya','gyu','gyo','sya','syu','syo','sha','shu','sho','zya','zyu','zyo','tya','tyu','tyo','dya','dyu','dyo','cha','chu','cho','nya','nyu','nyo','hya','hyu','hyo','bya','byu','byo','pya','pyu','pyo','mya','myu','myo','rya','ryu','ryo','sye','she','zye','je','tye','che','tsa','tse','tso','thi','dhi','dhu','xka','xke','xtu','xya','xyu','xyo','xwa','whi','wi','whe','we','who','vyu','tsi','kwa','kwi','kwe','kwo','gwa','jya','jyu','jyo','cya','cyu','cyo','thi','dhi','thu','twu','dwu','hwa','hwi','hwe','hwo','fyu','hwyu','nb','nc','nd','nf','ng','nh','nj','nk','nl','nm','np','nq','nr','ns','nt','nv','nw','nx','nz','bb','cc','dd','ff','gg','hh','jj','kk','ll','mm','pp','qq','rr','ss','tt','vv','ww','xx','yy','zz','-','la','li','lu','le','lo','lya','lyu','lyo','ltu');
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-kana')){
			mfp.add(obj,"keyup",function(){mfp_furigana(mfp.$(obj.id));});
		}
	}
);
function mfp_furigana(obj,evt){
	try {
		var evt = arguments.callee.caller.arguments[0] || window.event;
		var keyCode = evt.keyCode;
		var kanaElm = obj.getAttribute('data-kana');
		var k = mfp.$(mfp.Elements[kanaElm].group[0]);
		if(k.value == k.defaultValue)
			k.value = "";
		if(keyCode > 64 && keyCode < 91){
			k.value = k.value + mfp_abcd[keyCode - 65];
			for(var i=mfp_roma.length;i > -1;i--)
				k.value = k.value.replace(mfp_roma[i],mfp_kana[i]);
		}
		else if(keyCode == 8)
			k.value = k.value.substring(0,k.value.length - 1);
		else if(keyCode == 45){
			k.value = k.value + "-";
			for(var i=mfp_roma.length;i > -1;i--)
				k.value = k.value.replace(mfp_roma[i],mfp_kana[i]);
		}
		else if(keyCode == 109 || keyCode == 189){
			k.value = k.value + "-";
			for(var i=mfp_roma.length;i > -1;i--)
				k.value = k.value.replace(mfp_roma[i],mfp_kana[i]);
		}
		if(obj.value == "")
			k.value = "";
	}
	catch(e){
		
	}
}
var mfp_abcd = new Array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
var mfp_kana = new Array('あ','い','う','え','お','か','き','く','け','こ','さ','し','す','せ','そ','た','ち','つ','て','と','な','に','ぬ','ね','の','は','ひ','ふ','ふ','へ','ま','み','む','め','も','や','ゆ','よ','ら','り','る','れ','ろ','わ','ゐ','ゑ','を','ん','いぇ','し','ち','つ','ふぁ','ふぃ','ふぇ','ふぉ','ぁ','ぃ','ぅ','ぇ','ぉ','う゛ぁ','う゛ぃ','う゛','う゛ぇ','う゛ぉ','くぁ','くぃ','くぇ','くぉ','が','ぎ','ぐ','げ','ご','ざ','じ','じ','ず','ぜ','ぞ','だ','ぢ','づ','で','ど','ほ','ば','び','ぶ','べ','ぼ','ぱ','ぴ','ぷ','ぺ','ぽ','じゃ','じゅ','じょ','きゃ','きゅ','きょ','ぎゃ','ぎゅ','ぎょ','しゃ','しゅ','しょ','しゃ','しゅ','しょ','じゃ','じゅ','じょ','ちゃ','ちゅ','ちょ','ぢゃ','ぢゅ','ぢょ','ちゃ','ちゅ','ちょ','にゃ','にゅ','にょ','ひゃ','ひゅ','ひょ','びゃ','びゅ','びょ','ぴゃ','ぴゅ','ぴょ','みゃ','みゅ','みょ','りゃ','りゅ','りょ','しぇ','じぇ','しぇ','じぇ','ちぇ','ちぇ','つぁ','つぇ','つぉ','てぃ','でぃ','でゅ','ヵ','ヶ','っ','ゃ','ゅ','ょ','ゎ','うぃ','うぃ','うぇ','うぇ','うぉ','う゛ゅ','つぃ','くぁ','くぃ','くぇ','くぉ','ぐぁ','じゃ','じゅ','じょ','ちゃ','ちゅ','ちょ','てぃ','でぃ','てゅ','とぅ','どぅ','ふぁ','ふぃ','ふぇ','ふぉ','ふゅ','ふゅ','んb','んc','んd','んf','んg','んh','んj','んk','んl','んm','んp','んq','んr','んs','んt','んv','んw','んx','んz','っb','っc','っd','っf','っg','っh','っj','っk','っl','っm','っp','っq','っr','っs','っt','っv','っw','っx','っy','っz','ー','ぁ','ぃ','ぅ','ぇ','ぉ','ゃ','ゅ','ょ','っ');
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
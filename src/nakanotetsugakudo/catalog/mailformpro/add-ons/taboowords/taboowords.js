//
// taboowords.js 1.0.0 / 2015-03-03
//

mfp.TabooWords = [];
mfp.extend.event('check',
	function(obj){
		if(obj.name != "" && mfp.TabooWords.length > -1 && obj.value != obj.defaultValue && obj.value != ""){
			var val = obj.value;
			var hitWords = [];
			for(var i=0;i<mfp.TabooWords.length;i++){
				if(val.indexOf(mfp.TabooWords[i]) > -1){
					hitWords.push('「'+mfp.sanitizing(mfp.TabooWords[i])+'」');
				}
			}
			if(hitWords.length > 0){
				var word = hitWords.join('、');
				mfp.ExtendErrorMsg = '$name に'+word+'という文字を含める事はできません。';
			}
		}
	}
);
function setTaboowords(arr){
	mfp.TabooWords = arr;
}
mfp.extend.event('startup',
	function(){
		mfp.call(mfp.$('mfpjs').src,'addon=taboowords/taboowords.js&callback=setTaboowords');
	}
);

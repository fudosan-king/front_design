// 
// エレメントの値によって無効・有効を切り替えるサンプル
// ID指定したオブジェクト内のすべての入力・選択エレメントのスイッチングをする。
// 以下の例ではID「yamato」がチェックされている場合、
// ID「deliveryTime」内のエレメントの有効・無効をスイッチしている
// 
// mfp.sw(［ true(無効) or false(有効) ］,[ ID ],［ true(隠さない) or false(隠す)］);
// 

function swElementsExample(){
	if(mfp.$('yamato').checked)
		mfp.sw(false,'deliveryTime');
	else
		mfp.sw(true,'deliveryTime');
}

mfp.extend.event('ready',
	function(obj){
		swElementsExample();
	}
);

mfp.extend.event('blur',
	function(obj){
		swElementsExample();
	}
);

mfp.extend.event('change',
	function(obj){
		swElementsExample();
	}
);

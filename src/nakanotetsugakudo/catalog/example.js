(function(){
	var exampleHTML = [];
	exampleHTML.push({name: '基本サンプル',path: 'example.html'});
	exampleHTML.push({name: 'ショッピングカート機能サンプル',path: 'example_cart.html'});
	exampleHTML.push({name: 'カートに入れるためのサンプル',path: 'example_shopping.html'});
	exampleHTML.push({name: '料金計算機能サンプル',path: 'example_calc.html'});
	exampleHTML.push({name: '予約機能サンプル',path: 'example_reserve.html'});
	exampleHTML.push({name: '入力欄の分岐処理サンプル',path: 'example_toggle.html'});
	exampleHTML.push({name: '段階的入力機能サンプル',path: 'example_phase.html'});
	exampleHTML.push({name: 'シンプルなサンプル',path: 'example_simple.html'});
	exampleHTML.push({name: 'ストレスチェック23項目サンプル',path: 'example_stress23.html'});
	exampleHTML.push({name: 'ストレスチェック57項目サンプル',path: 'example_stress57.html'});
	document.write('<div id="example_selector"></div>');
	var select = document.createElement('select');
	select.onchange = function(){
		location.href = this.value;
	};
	var selectedIndex = 0;
	for(var i=0;i<exampleHTML.length;i++){
		var option = document.createElement('option');
		option.text = exampleHTML[i].name + ' / ' + exampleHTML[i].path;
		option.value = exampleHTML[i].path;
		select.appendChild(option);
		if(location.href.indexOf(exampleHTML[i].path) > -1){
			selectedIndex = i;
		};
	};
	select.selectedIndex = selectedIndex;
	document.getElementById('example_selector').appendChild(select);
})();
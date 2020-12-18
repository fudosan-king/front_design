//
// estimate.js 1.0.0 / 2014-03-28
//
var estimateValue = [
	{
		elements: {
			index: 'element1',
			x: 'element2',
			y: 'element3',
			qty: 'element4', // optional
		},
		label: {
			default: '選択してください',
			exception: '別途御見積ください'
		},
		sheets: [
			{
				label: {
					name: '普通紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[1190,1140,1100,1000,900,null],
					[600,560,540,490,450,null],
					[330,310,300,260,250,null],
					[200,190,180,170,160,null]
				]
			},
			{
				label: {
					name: 'マットコート紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[1700,1630,1560,1420,1270,null],
					[850,800,770,690,630,null],
					[460,440,420,370,350,null],
					[280,270,250,230,220,null]
				]
			},
			{
				label: {
					name: '厚手光沢紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[2640,2520,2390,2170,1980,null],
					[1500,1490,1360,1280,1180,null],
					[1000,960,910,830,750,null],
					[570,540,510,470,430,null]
				]
			}
		]
	},
	{
		elements: {
			index: 'element5',
			x: 'element6',
			y: 'element7',
			qty: 'element8', // optional
		},
		label: {
			default: '選択してください',
			exception: '別途御見積ください'
		},
		sheets: [
			{
				label: {
					name: '普通紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[1190,1140,1100,1000,900,null],
					[600,560,540,490,450,null],
					[330,310,300,260,250,null],
					[200,190,180,170,160,null]
				]
			},
			{
				label: {
					name: 'マットコート紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[1700,1630,1560,1420,1270,null],
					[850,800,770,690,630,null],
					[460,440,420,370,350,null],
					[280,270,250,230,220,null]
				]
			},
			{
				label: {
					name: '厚手光沢紙',
					x: ['1枚～4枚','5枚～9枚','10枚～19枚','20枚～29枚','30枚～50枚','51枚以上'],
					y: ['A0','A1','A2','A3']
				},
				comp: [4,9,19,29,50,null], // option
				sheet: [
					[2640,2520,2390,2170,1980,null],
					[1500,1490,1360,1280,1180,null],
					[1000,960,910,830,750,null],
					[570,540,510,470,430,null]
				]
			}
		]
	}
];
function estimateAddon(json){
	var j = json;
	var price;
	var stat;
	var index = mfp.$(j.elements.index);
	var x = mfp.$(j.elements.x);
	var y = mfp.$(j.elements.y);
	var init = function(){
		if(index){
			index.length = j.sheets.length + 1;
			for(var i=0;i<j.sheets.length;i++){
				index.options[i+1].text = j.sheets[i].label.name;
				index.options[i+1].value = j.sheets[i].label.name;
			}
			mfp.add(index,"change",(function(){
				onchange();
			}));
			mfp.add(x,"change",(function(){
				calc();
			}));
			mfp.add(y,"change",(function(){
				calc();
			}));
		}
	};
	var calc = function(){
		if(x.selectedIndex > 0 && y.selectedIndex > 0 && index.selectedIndex > 0){
			var num = index.selectedIndex - 1;
			price = j.sheets[num].sheet[y.selectedIndex-1][x.selectedIndex-1];
			stat = true;
			alert(price);
		}
		else {
			price = null;
			stat = false;
		}
	};
	var onchange = function(obj){
		if(index.selectedIndex > 0){
			var num = index.selectedIndex - 1;
			y.length = j.sheets[num].label.y.length + 1;
			for(var i=0;i<j.sheets[num].label.y.length;i++){
				y.options[i+1].text = j.sheets[num].label.y[i];
				y.options[i+1].value = j.sheets[num].label.y[i];
			}
			x.length = j.sheets[num].label.x.length + 1;
			for(var i=0;i<j.sheets[num].label.x.length;i++){
				x.options[i+1].text = j.sheets[num].label.x[i];
				x.options[i+1].value = j.sheets[num].label.x[i];
			}
			
		};
		calc();
	};
	init();
};
mfp.extend.event('startup',
	function(){
		for(var i=0;i<estimateValue.length;i++){
			new estimateAddon(estimateValue[i]);
		};
	}
);

////////////////////////
// drilldown.js 1.0.0 //
// 2012-09-08         //
// SYNCK GRAPHICA     //
// www.synck.com      //
////////////////////////
var drilldownSelect = new Array();
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-drillfor'))
			drilldownSelect[obj.id] = new drilldown(obj);
	}
);
mfp.extend.event('ready',
	function(){
		for(var prop in drilldownSelect)
			drilldownSelect[prop].change();
	}
);

function drilldown_init(){
	var tagObj = document.getElementsByTagName("select");
	for(var i=0;i<tagObj.length;i++)
		drilldownSelect[tagObj[i].id] = new drilldown(tagObj[i]);
	for(var prop in drilldownSelect)
		drilldownSelect[prop].change();
}
function drilldown(obj){
	this.init = function(obj){
		this.Enabled = true;
		this.For = this.att(obj,"data-drillfor");
		if(this.Enabled){
			this.Select = obj;
			this.Child = document.getElementById(this.For);
			this.Select.onchange = function(){
				drilldownSelect[this.id].change();
			}
			this.ChildNodes = new Array();
			var childs = this.Child.childNodes;
			for(var i=0;i<childs.length;i++){
				if(childs[i].label != undefined){
					this.ChildNodes[childs[i].label] = new Array();
					var Optgroup = childs[i].childNodes;
					for(var ii=0;ii<Optgroup.length;ii++){
						if(Optgroup[ii].value != undefined){
							this.ChildNodes[childs[i].label][this.ChildNodes[childs[i].label].length] = new Object();
							this.ChildNodes[childs[i].label][this.ChildNodes[childs[i].label].length-1].text = Optgroup[ii].text;
							this.ChildNodes[childs[i].label][this.ChildNodes[childs[i].label].length-1].value = Optgroup[ii].value;
						}
					}
				}
			}
		}
	}
	this.change = function(){
		if(this.Enabled){
			var obj = this.Select;
			var childs = this.Child.childNodes;
			while(childs[0]) this.Child.removeChild(childs[0]);
			this.Child.length = this.ChildNodes[obj.value].length + 1;
			this.Child.removeChild(this.Child.childNodes[0]);
			for(var i=0;i<this.ChildNodes[obj.value].length;i++){
				this.Child.options[i].text = this.ChildNodes[obj.value][i].text;
				this.Child.options[i].value = this.ChildNodes[obj.value][i].value;
			}
			this.Child.selectedIndex = 0;
			if(drilldownSelect[this.Child.id])
				drilldownSelect[this.Child.id].change(this.Child);
		}
	}
	this.att = function(obj,att){
		if(obj.getAttribute(att)!=undefined)
			return obj.getAttribute(att);
		else
			this.Enabled = false;
	}
	this.init(obj);
}

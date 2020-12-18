if(typeof($NC)=='undefined'){$NC={}}

//--------------------------------------------------
// 更新日:2011.4.25
// version:1.000.000
//
// API base program
// 【注意点】
// エンコードは「UTF-8」のみとする。
// →以後読み込み、関連するプログラムに関しては全て同一エンコード
//
// $NC.$data：データセット用
// -------------------------------------------------
// 【フロー】
// 1,api.js
// 2,user/***/product.js (利用できるapi情報)F
// 3,user/***/api.js ()
// 4,api***.js
// 5,user/***/api***.js(page.js)
// 6,
//

// 【使い方】
// <script src='api.js' id='Navicast' class=''></script>
//
// 更新日:2011.5.6
// version:1.000.001
//
// 【不具合内容】IE6,IE7でＪＳエラーが100%表示される。
// 【対応】cookie箇所の配列最後に","がついていたのを削除
// -------------------------------------------------
// 【FA4S対応】(2011.11.17)
// a=**&u=**&url_id=**の場合には、product.jsのフラグ判定（コアエンジンフラグ）は
// 不要とする。（※プレビュー時に利用）
//
// 20111214
// //文字コードUTF変換
//
// -------------------------------------------------
// 2013.3.14 yugeta
// セッション減らし対応
// ・フォーマットを最新版に修正（無名関数）
//--------------------------------------------------
// 20140612:yugeta:rip
//	1.cookie-secure-delete
//

$NC.api={

	//基本データ設定※このプログラムを利用する為に必要な情報;
	data:{
		//基本プログラム名称(js,php)
		program_api:"NavicastApi",
		//play
		program_play:"NavicastPlay",
		//基本ライブラリJS
		program_lib:"api/javascript/lib/library.js",
		//ブラックリストデータベース※除外処理
		black_list:"blacklist.js",
		//プレビュー用
		preview:'$NC.mode=preview',
		//サーバ依存のエンコードタイプ;
		charset:"UTF-8",
		//url
		url:'',
		//api
		api:{},
		//too;_url(onetag)※API名（path）
		tool_url:'tool_url',
		$:''},

	//初回１回のみ起動（２回目以降はplayプログラムで行う）
	set:function(){

		// add hamamoto 20141218 Navicast管理サービス以外のサービスが起動している場合実行処理が止まってしまうのを回避する。
		//情報が読み込まれている場合は処理を開始しない。
		// if(typeof($NC.$set)!='undefined' || typeof($NC.$product)!='undefined'){return}
		if(typeof($NC.$set)!='undefined' || typeof($NC.$product)!='undefined'){
			if(!$NC.checker.isLoad()){return;}
		}
		// add hamamoto 20141218 Navicast管理サービス以外のサービスが起動している場合実行処理が止まってしまうのを回避する。

		//対象プログラム記述から、クエリ情報を取得
		$NC.$set = $NC.api.script_target($NC.api.data.program_api);

		if(typeof($NC.$set.src)=='undefined' || typeof($NC.$set.src.u)=='undefined'){return}

		//cookieセット(初回ログ)
		$NC.$set.url = escape(location.href.slice(0, 100));

		//初回ログも書き込む
		$NC.$cookie.set("","",$NC.$set.src.u,"" , $NC.$set.url);

		//-------------------
		//基本情報読み込み
		//-------------------
		//直接ページ情報読み込み(プレビューモード)
		if(typeof($NC.$set.src)!="undefined" && $NC.$set.src.mode=='preview' && $NC.$set.src.a && $NC.$set.src.u && $NC.$set.src.url_id){
			$NC.api.documentWrite('NavicastApi2.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]='+$NC.api.data.program_lib+'&f[]=user/'+$NC.$set.src.u+'/url.js&f[]=user/'+$NC.$set.src.u+'/product.js&js_after[]=$NC.api.play.check("'+$NC.$set.src.a+'","'+$NC.$set.src.u+'","'+$NC.$set.src.url_id+'");');
		}
		//通常起動処理
		else{
			$NC.api.documentWrite('NavicastApi2.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]='+$NC.api.data.program_lib+'&f[]=user/'+$NC.$set.src.u+'/url.js&f[]=user/'+$NC.$set.src.u+'/product.js&js_after[]=$NC.api.check.product();');
		}
		if(document.getElementById("NC_responsice_css")) {
			document.getElementById("NC_responsice_css").setAttribute("disabled", true);
        }
		if(document.getElementById("NC_ViewPort")){
			var cnt = 0;
			var check = function(){
				if(cnt > 50){
					return void $NC.api.changeState("complete");//20160115 add by motoshima
				}
				if(typeof $NC.convertEnd == "undefined"){
					cnt++;
					setTimeout(function(){
						check();
					}, 200);
				}else if($NC.convertEnd !== 1){
					document.getElementById("NC_ViewPort").setAttribute("content", "width=980, maximum-scale=0.32");
					setTimeout(function(){
						document.getElementById("NC_ViewPort").setAttribute("content", "width=980, maximum-scale=1.0");
						$NC.api.changeState("complete");//20160115 add by motoshima
					}, 100);
				}else{
					$NC.api.changeState("complete");//20160115 add by motoshima
				}
			};
			check();
		}else{
			$NC.api.changeState("complete");//20160115 add by motoshima
		}
		var timer = setInterval(function () {
			(tmg.runFlg)? clearInterval(timer): $NC.api.state = "complete";
		}, 1000);
		setTimeout(function () {
			clearInterval(timer);
		}, 10000);
	},

//20160115 add start by motoshima
	/**
	 * ステータス
	 *
	 * (ステータス種類)
	 * loading：初期値、処理中
	 * complete：$NC.api.set()処理完了
	 */
	state:"loading",

	/**
	 * ステータス変更
	 *
	 * (使用例)
	 * var handler = function(){};
	 * if($NC.api.state === "complete"){
	 *   handler();
	 * }else{
	 *   $NC.api.oncomplete = handler;
	 * }
	 */
	changeState:function(state){
		if($NC.api.state === state){
			return;
		}
		$NC.api.state = state;
		var fn = "on" + state;
		fn in $NC.api && typeof($NC.api[fn]) === "function" && $NC.api[fn]();
	},
//20160115 add end by motoshima

	//各種判定;
	check:{
		product:function(a,b,c){

			if(typeof($NC.$set)=='undefined' || typeof($NC.$set.src)=='undefined'){return}
			if(typeof($NC.$set.src.u)=='undefined'){return}
			if(typeof($NC.$product)=='undefined'){return}

			//--------------
			//URL決定処理
			//--------------

			//プレビュー判定※プレビューの場合は強制コンバート（コンバートoffフラグが入っていても）
			var preview=0;
			if(location.href.indexOf("$NC.mode=preview")!=-1 || location.href.indexOf("%24NC.mode=preview")!=-1){
				preview++;
			}

			//20140312 add start by takano 白画面対応
			var convertEndFlg = 0, spcFlg = 0;
			if(typeof $NC.$product["spc"] == "undefined")convertEndFlg = 1;
			//20140312 add end by takano 白画面対応

			for(var i in $NC.$product){

				if(!$NC.$product[i]){continue}

				//ブラックリストチェック
				if($NC.$blacklist.check(i))continue;

				var uri='';
				//ビューワアクセスをしている場合

				//20150227 update start by takano
				//if(location.href.indexOf($NC.api.data.program_api+".php?mode=viewer")!=-1){
				if(location.href.indexOf($NC.api.data.program_api+"2.php?mode=viewer")!=-1){
					//20150227 update start by takano

					var h=location.href.split("?")[1].split("&");
					for(j=0;j<h.length;j++){
						var q=h[j].split("=");
						if(q[0]=='url' && q[1]){
							uri=decodeURIComponent(q[1]);
							break;
						}
					}
				}

				//stop_flg処理
				var flg=0;
				if(typeof($NC.$stop_flg)!='undefined' && typeof($NC.$stop_flg[i])!='undefined' && $NC.$stop_flg[i]){flg++}

				//マッチ不用（全ページ稼働）※計測系
				if($NC.$product[i].match(/^\-/) && !flg){
					$NC.api.documentWrite("api/"+i+"/lib/"+$NC.$product[i]);
				}
				//指定がある場合※マッチ処理用（スマコン系）
				else{
					var url_id="";

					if($NC.$set.src.url_id){
						url_id = $NC.$set.src.url_id;

						//停止処理
						if(typeof($NC.$url)=='undefined'){continue}
						if(typeof($NC.$url[url_id])=='undefined'){continue}
						if(typeof($NC.$url[url_id].api)=='undefined'){continue}
						if(typeof($NC.$url[url_id].api[i])=='undefined'){continue}
						if(!preview && $NC.$url[url_id].api[i].flg==1){continue}
					}

					//ワンタグ処理
					else{
						url_id = $NC.$match.check($NC.$url,uri,i , preview);
					}

					//通常モード
					if(!url_id){

						//白画面スクリプト用のフラグ起動（コアが呼ばれない用）

						//20140312 update start by takano 白画面対応
						convertEndFlg = 1;
						//$NC.convertEnd=true;
						//20140312 update end by takano 白画面対応

						continue;
					}

					if(url_id && i == "tmg") {
						tmg.tmgid = url_id;
						continue;
					}

					//20140312 add start by takano 白画面対応
					//if(i == "spc")convertEndFlg = 0;
					if(i == "spc")spcFlg = 1;
					//20140312 add end by takano 白画面対応

					if(typeof($NC.$set.api)=='undefined'){
						$NC.$set.api={};
					}
					$NC.$set.api[i] = {url_id:url_id};

					//実行
					//$NC.api.documentWrite($NC.api.data.program_play+".js?fn=$NC.api.check.api_url("+i+","+$NC.$set.src.u+","+url_id+")");
					$NC.api.check.api_url(i,$NC.$set.src.u,url_id);
				}

			}
            /******** IMタグ ********/
            (function (doc) {
                var domein = '//imtd.zunoh.jp/';
                var path   = 'imtd-custom/';
                var faile  = 'im-api.js';
                var date   = new Date();
                var unixTimestamp = Math.round( date.getTime() / 1000 );
                var Timestamp = '?var='+unixTimestamp;
                var ElmScript = doc.createElement('script');
                ElmScript.type = 'text/javascript';
                ElmScript.id = 'sctv-imdmp-sync';
                ElmScript.src = domein + path + faile + Timestamp;
                var body = doc.body;
                body.appendChild(ElmScript);
            })(document);
            /******** IMタグ ********/

			//20140312 add start by takano 白画面対応
			if(spcFlg)return;
			//if(convertEndFlg)$NC.convertEnd=true;
			$NC.convertEnd=true;
			//20140312 add end by takano 白画面対応

			return;
		},
		api_url:function(product,user,url_id){

			if(typeof(user)=='undefined'   || !user){return}
			if(typeof(url_id)=='undefined' || !url_id){return}

			var p="";
			if(typeof($NC_URL)!='undefined' && typeof($NC_URL[product])!='undefined' && typeof($NC_URL[product][url_id])!='undefined'){
				var page=[];
				for(var i in $NC_URL[product][url_id]){
					page.push(i);
				}
				//最初のページのみ対象
				p = page[0];
			}
			//$NC_URLが無い場合は、url-idをページIDとして起動する。
			else{
				p = url_id;
			}

			//page指定がある場合起動
			if(p){
//				$NC.api.play.api(product , user , p);
				$NC.api.play.check(product , user , p);
			}
		}
	},
	//APIプログラム実行（ユーザーデータ読み込み→コアエンジン読み込み→実行）
	play:{
		//読み込みチェック
		check:function(api,user,page){

			//20121204 update start by takano
			//tplが有効にならない不具合に対応
			if(typeof $NC.$url[page]!="undefined" &&
					typeof $NC.$url[page]["api"][api]!="undefined" &&
					typeof $NC.$url[page]["api"][api]["tpl"]!="undefined" &&
					$NC.$url[page]["api"][api]["tpl"] &&
					typeof $NC.$url[$NC.$url[page]["api"][api]["tpl"]]!="undefined" &&
					$NC.$url[$NC.$url[page]["api"][api]["tpl"]]["api"][api]["flg"]!="1"){
				var tplid=$NC.$url[page]["api"][api]["tpl"];
			}

			if(tplid){
				if(typeof $NC.$url[tplid]["api"]!="undefined" &&
						typeof $NC.$url[tplid]["api"][api]!="undefined" &&
						typeof $NC.$url[tplid]["api"][api]["flg"]!="undefined" &&
						$NC.$url[tplid]["api"][api]["flg"]!="1"){

					//20150227 update start by takano
					//$NC.api.documentWrite('NavicastApi.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]=user/'+user+'/'+api+'/'+$NC.$url[page].api[api].tpl+'.js&js_after[]=$NC.api.play.template("'+api+'","'+user+'","'+page+'");');
					$NC.api.documentWrite('NavicastApi2.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]=user/'+user+'/'+api+'/'+$NC.$url[page].api[api].tpl+'.js&js_after[]=$NC.api.play.template("'+api+'","'+user+'","'+page+'");');
					//20150227 update start by takano
				}
			}

			//20121114 update end by takano
			else{
				$NC.api.play.api(api,user,page);
			}
		},
		//テンプレートチェック
		template:function(api,user,page){
			if(typeof($NC_DATA)!='undefined' && typeof($NC_DATA[api])!='undefined'){
				if(typeof($NC_TPL)=='undefined'){$NC_TPL={}}
				$NC_TPL[api] = $NC_DATA[api];
				delete $NC_DATA[api];
			}

			$NC.api.play.api(api,user,page);
		},
		//APIは個別にcore内で実行
		api:function(api,user,page){

			if(!api || !user || !page){return}
			if(typeof($NC.$product)=='undefined' || typeof($NC.$product[api])=='undefined'){return}

			//停止フラグ
			if(typeof($NC.$url)!='undefined' && $NC.$url.flg==1){return}

			if(typeof($NC.$url)!='undefined' && typeof($NC.$url[page])=='undefined' && typeof($NC.$url[page].api)=='undefined' && typeof($NC.$url[page].api[api])=='undefined' && $NC.$url[page].api[api].flg==1){return}

			// ログ書き込み 20140408 shimada start
			var write_bool = $NC.category.ua.categoryMatch(api, $NC.$.device_check);
			if (write_bool) {
				$NC.$cookie.set("set", api, user, page, '');
			}
			// 20140408 shimada end

			//データ読み込み＆実行

			//20150227 update start by takano
			//$NC.api.documentWrite('NavicastApi.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]=user/'+user+'/'+api+'/'+page+'.js&js_after[]=$NC.api.play.core("'+api+'","'+$NC.$product[api]+'");');
			$NC.api.documentWrite('NavicastApi2.php?mode=js_read&f[]=blacklist.js&f[]=category.js&f[]=user/'+user+'/'+api+'/'+page+'.js&js_after[]=$NC.api.play.core("'+api+'","'+$NC.$product[api]+'");');
			//20150227 update end by takano

			/*
			 //userデータ読み込み;
			 $NC.api.documentWrite("user/"+user+"/"+api+"/"+page+".js");

			 //core読み込み;
			 //$NC.api.play.api(api , user , p);
			 $NC.api.documentWrite($NC.api.data.program_play+".js?fn=$NC.api.play.core("+api+","+$NC.$product[api]+")");
			 */
		},
		//個別コア読み込み(実行)
		core:function(api,core){

			if(!api){return}

			//個別ライブラリ
			if(typeof($NC_DATA)!='undefined' && typeof($NC_DATA[api])!='undefined' && typeof($NC_DATA[api].lib)!='undefined' && $NC_DATA[api].lib.indexOf(".js")!=-1){
				core = $NC_DATA[api].lib;
			}
			//product.jsから読み取り
			else if(typeof($NC)!='undefined' && typeof($NC.$product)!='undefined' && $NC.$product[api]){
				core = $NC.$product[api];
			}
			//alert(api+"/"+$NC.$product[api]);

			//コア判定
			if(!core){return}
//			alert(core+"/"+$NC_DATA.lib);
//			alert("api/"+api+"/lib/"+core);

			//core読み込み;
			$NC.api.documentWrite("api/"+api+"/lib/"+core);
		}
	},

	//----------
	//共通関数
	//----------


	//対象スクリプトタグ検索
	script_target:function(prg){

		var $set={};

		//起動時間
		$set.time_start = (+new Date());

		//script検索
		var sc = document.getElementsByTagName("script");
//		var flg=0;
		for(var i=sc.length-1;i>=0;i--){
			if(sc[i].src.match("(.*)"+prg+".js?(.*)") && typeof(sc[i].$NC_flg)=='undefined'){
				sc[i].$NC_flg=1;
				$set.src = $NC.$.query(sc[i].src);
				$set.script_element = sc[i];
				break;
			}
			if(i==0){return {};}
		}
		/*
		 //ビューワモード
		 if(location.href.indexOf(prg+".php")){
		 return this.php_target(prg);
		 }
		 */

		//user
		if(prg == $NC.api.data.program_api && typeof($set.src.u)=='undefined' && typeof($set.src.$)!='undefined' && typeof($set.src.$.query)!='undefined' && $set.src.$.query.indexOf("=")==-1){
			$set.src.u = $set.src.$.query;
		}
		/*
		 for(var i in $set.src){
		 alert(i+'->'+$set.src[i]);
		 }
		 */
		return $set;
	},

    /**
     * スクリプトロード
     *
     * @param string scriptPath ファイルパス
     * @return void
     */
    documentWrite:function(scriptPath){
	// documentWrite:function(scriptPath, callback){
        if(
            typeof($NC.$set)=='undefined' 
            || typeof($NC.$set.src)=='undefined'
        ) {
            return;
        }
        scriptPath = $NC.$set.src.$.dir + $NC.$.xss(scriptPath);
        if(scriptPath.indexOf("?") != -1){
            scriptPath += "&";
        } else {
            scriptPath += "?"

        }
        scriptPath += "data[msec]=" + (+new Date());
        var script = document.createElement("script");
        // console.log("$NC.api.documentWrite scriptPath=", scriptPath);
        // console.log("$NC.api.documentWrite async=", ("async" in script));
        if ("async" in script) {
            script.setAttribute("src", scriptPath);
            script.setAttribute("type", "text/javascript");
            script.setAttribute("charset", $NC.api.data.charset);
            script.setAttribute("async", "false");
            // script.onload = script.onreadystatechange = function() {
            //     if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") {
            //         this.onload = this.onreadystatechange = null;
            //         callback();
            //     }
            // };
            document.getElementsByTagName("head")[0].appendChild(script);
        } else {
            document.write("<script type='text/javascript' charset='" + $NC.api.data.charset + "' src='" + scriptPath + "'></script>");
        }
	},
	$:''
};



//----------
//cookie処理
//----------
$NC.$cookie={
	//各種初期設定
	data:{
		name:$NC.api.data.program_api,
		day:0,
		hour:6,
		min:0,
		sec:0
	},

	//初期設定処理(ログ取得)
	set:function(m,a,u,p,d){

		//グローバルデータチェック
		if(typeof($NC.$set)=='undefined' || typeof($NC.$set.src)=='undefined'){
			$NC.$set = $NC.api.script_target($NC.api.data.program_api);
			if(!$NC.$set.src){
				return;
			}
		}

		//サーバアドレスチェック
		if(!$NC.$set.src.$.dir){return}

		//プログラムファイル

		//20150227 update start by takano
		//var file = $NC.api.data.program_api+".php";
		var file = $NC.api.data.program_api+"2.php";
		//20150227 update end by takano

		//クッキーチェック
		var ck={};

		//初期
		if(typeof($NC.$set.cookie)=='undefined'){
			ck = {
				pv:'',
				uu:$NC.$cookie.read(this.data.name),
				su:$NC.$cookie.read(this.data.name+".su")
			};
		}
		//2回目以降
		else{
			ck = {
				pv:$NC.$set.cookie.pv,
				uu:$NC.$set.cookie.uu,
				su:$NC.$set.cookie.su
			};
		}

		//プレビューの場合は、ログ取得無('$NC.mode='がURLに含まれる場合)
		if(location.href.indexOf('$NC.mode=')!=-1){return}

		//3rdPartyCookie（日付取得）
		var d2 = [
			"mode=log",
			"cookie[name] ="+this.data.name,
			"cookie[pv]="+ck.pv,
			"cookie[uu]="+ck.uu,
			"cookie[su]="+ck.su,
			"data[m]="+m,
			"data[a]="+a,
			"data[u]="+u,
			"data[p]="+p,
			"data[data]="+d,

			//20130508 update start by takano
			//"sys[url]="+location.href
			"sys[url]="+d
			//20130508 update end by takano
		];
		//データ送信
		$NC.api.documentWrite(file+"?"+d2.join("&"));

	},
	//phpからのcookie設定
	php_set:function(ck0,ck1,ck2){//alert(ck0+"/"+ck1+"/"+ck2);
		if(typeof($NC.$set)=='undefined'){
			$NC.$set = $NC.api.script_target($NC.api.data.program_api);
		}
		$NC.$set.cookie = {
			pv:ck0,
			uu:ck1,
			su:ck2
		};
	},

	//日付算出（有効期限用）
	date:function(d,h,m,s){
		var exp=new Date();
		exp.setTime(exp.getTime()+(d*1000*60*60*24)+(h*1000*60*60)+(m*1000*60)+(s*1000));
		return exp.toGMTString();
	},

	//ssl判定
	secure:function(){
		if (location.href.match(/^https/)){
			return true;
		}
		else{
			return;
		}
	},

	//cookie書き込み
	write:function(nm , val ,d,h,m,s){
		//脆弱性処理
		val = $NC.$.xss(val);

		//<<(20140612:yugeta:rip)
		//if(this.secure()){
		//	document.cookie = nm+"\="+val+";expires\="+this.date(d,h,m,s)+";path=/;secure";
		//}
		//else{
		document.cookie = nm+"\="+val+";expires\="+this.date(d,h,m,s)+";path=/;";
		//}
		//(20140612:yugeta:rip)>>
	},
	//cookie読み込み
	read:function(nm){
		var ck0=document.cookie.split(" ").join("");
		var ck1=ck0.split(";");
		for(var i=0;i<ck1.length;i++){
			var ck2=ck1[i].split("=");
			if(ck2[0]==nm){
				//脆弱性処理
				ck2[1] = $NC.$.xss(ck2[1]);
				return ck2[1];
			}
		}
		return '';
	},
	/*
	 //サブドメインを排除したドメインを取得(cookie用)
	 domain:function(){

	 var url = location.hostname.split(".");
	 var num = 2;
	 if(location.hostname.match(/[.co.jp|.ed.jp|.ac.jp|.go.jp|.or.jp|.co.uk|.me.uk|.org.uk]$/)){
	 num = 3;
	 return "."+url.splice((url.length - num) , num).join(".");
	 }
	 else if(location.hostname.match(/[.com|.net|.jp|.org|.biz|.info|.mobi|.us|.bz|.tv|.cc|.me|.in|.asia|.tel|.cx|.cz|.am|.fm|.ac|.sc|.vc|.vg|.cn|.tw|.mu|.ms|.mn|.hn|.la|.gs|.ws|.be]$/)){
	 num = 2;
	 return "."+url.splice((url.length - num) , num).join(".");
	 }
	 else{
	 return location.hostname;
	 }
	 },
	 */
	$:''
};

//仮lib
if(typeof($NC.$)=='undefined'){
	$NC.$={};
	$NC.$.query=function(u){
		if(!u){
			u = location.href;
		}

		var data={};

		//クエリ付き判定
//		if(!u.match(/\?/)){return};
		//?分解;
		var u0=[];
		if(u.indexOf("?")!=-1){
			u0 = u.split("?");
		}
		else if(u.indexOf(";")!=-1){
			u0 = u.split(";");
		}
		else{
			u0[0] = u;
			u0[1] = '';
		}
//		alert(u0[0]);
		//基本情報取得
		var u3 = u0[0].split("/");
		data.$={
			url:u0[0],
			dir:$NC.$.dir(u),
			query:u0[1],
			domain:u3[2],
			protocol:u3[0].replace(":","")
		};

		if(u0[1]){
			var u1 = u0[1].split("&");

			//ハッシュ処理;
			for(var i=0;i<u1.length;i++){
				var u2 = u1[i].split("=");
				if(!u2[0]){continue}
				data[u2[0]] = u2[1];
			}
		}

		return data;
	};
	//プログラム実行ディレクトリ（パス）
	$NC.$.dir=function(u){
		if(!u){
			u = location.href;
		}
		var u1 = u.split("?")[0].split("/");
		var url='';
		for(var i=0;i<u1.length-1;i++){
			url+=u1[i]+"/";
		}
		return url;
	};
	//脆弱性文字列変換処理;
	$NC.$.xss=function(val){
		if(!val){return val;}
		val+="";
		val = val.split("\r").join("");
		val = val.split("\n").join("");
		val = val.split("<").join("-");
		val = val.split("%3c").join("-");
		val = val.split("%3C").join("-");
		val = val.split(">").join("-");
		val = val.split("%3e").join("-");
		val = val.split("%3E").join("-");
		return val;
	};


}

//-------------------------
//ワンタグ用URLマッチング
//-------------------------
/*
 ■pointについて
 【完全マッチ】
 内容：uriが完全に一致したもの。
 得点：同一URLは登録出来ないため、完全マッチがあったら確定

 【urlマッチ】
 内容：クエリを除くurlのみマッチ。
 得点：200pt

 【urlマッチ アスタリスク】
 内容：クエリを除くurlにアスタリスクが含まれている場合。
 得点：99pt

 【ファイル名マッチ】
 内容：クエリを除くurlにアスタリスクが含まれている場合。
 ファイル名のマッチ
 ■ファイル完全マッチ				13pt
 ■拡張子マッチ							 5pt NG
 ■ファイル名マッチ					 8pt NG
 ■アスタリスク.アスタリスク	 3pt NG

 【階層マッチ】
 内容：クエリを除くurlにアスタリスクが含まれている場合。
 パスのマッチ
 ■*->0pt
 ■* /->1pt
 ■マッチ->2pt

 【クエリマッチ】
 内容：クエリ部分のマッチング
 ■key:val完全マッチ		9pt
 ■同一keyでvalが異なるものは対象外
 ■以外は0pt

 【最終判定】
 内容：最後に同点のものを絞り込む
 ■更新日が新しいもので確定

 【アスタリスク機能】
 *			: 階層をまたがっての一致はNG
 %asterisk%	: *と同じ
 %below%		: 以下文字列全てに影響
 %insert%	: 階層をまたがって一致処理を行える
 %regexp:0-9% :正規表現の記述ができる

 */

$NC.$match={
	check:function(urls,uri,api , preview){
		if($NC.$stop_flg && $NC.$stop_flg[api]){
			if($NC.$stop_flg[api]=='1'){return;}
		}
		var locate='';
		(uri)?locate=uri:locate=location.href;
		if($NC.$domain){
			var flg=0;
			for(var i in $NC.$domain){
				if(typeof($NC.$domain[i])!='string'){continue}
				var dom=$NC.$.domain(uri).split("?")[0];
				var str=dom+'#';
				if(str.indexOf($NC.$domain[i]+'#')!=-1){
					flg=0;
					break;
				}
				else{
					flg=1;
				}
			}
			if(flg==1){
				return;
			}
		}
		var $location=$NC.$.query(locate);
		var data={};

		for(var i in urls){
			if(urls[i]['flg']==1){
				continue;
			}

			if(typeof(urls[i])=='undefined'){continue}
			if(typeof(urls[i].api)=='undefined'){continue}
			if(typeof(urls[i].url)=='undefined'){continue}
			if(typeof(urls[i].api[api])=='undefined'){continue}
			//if(!preview && urls[i].api[api].flg==1){continue}
			if(typeof(urls[i].api[api].tplflg)!='undefined' && urls[i].api[api].tplflg!=0){continue}
			if(!locate.match($NC.$match.value(urls[i].url))){continue}

			if(locate==urls[i].url){
				if(preview || urls[i].api[api].flg==0){
					return i;
				}
				else{
					return;
				}
			}
			else if(urls[i].url.indexOf('*')!=-1){
				var url=$NC.$match.value(urls[i].url);
				var r= new RegExp("^"+url+"$");
				if(locate.match(r)){
					data[i]=urls[i].url.length;
				}
			}
		}
		var data2=this.a_sort(data);
		var u1='';
		var u2='';
		var r='';
		var f=0;
		for(var i in data2){
			if(data2[i]==0){
				continue;
			}
			if(u1<urls[i]['update']){
				u1=urls[i]['update'];
				r=i;
			}
		}
		if(!r){return}
		if(urls[r]['api'][api].flg==0){
			return r;
		}
		else{
			return;
		}
		return ;
	},
	value:function(u){
		u=u.split('?').join('\\?');
		u=u.split('/').join('\\/');
		u=u.split('.').join('\\.');
		u=u.split('^').join('\\^').split('$').join('\\$');
		u=u.split('[').join('\\[').split(']').join('\\]');
		u=u.split('+').join('\\+');
		u=u.split('|').join('\\|');
		u=u.split('(').join('\\(').split(')').join('\\)');
		u=u.split('*').join('(.*)');
		return u;
	},
	a_sort:function(d){
		arr={};
		var mval='';
		for(var key in d){
			if(mval<=d[key]){
				mval=d[key];
			}
		}
		for(var key in d){
			if(mval==d[key]){
				arr[key]=d[key];
			}
		}
		return arr;
	}
};

/*
 ?ブラックリスト処理（サービス起動部分）

 【該当ファイル】
 ・NavicastApi.js（実行プログラム）
 ・data/system/blacklist.js（データファイル※ファイル無し可能）

 【仕様】
 ・api起動時に、特定のターゲットに対してマッチング処理を行い、処理継続を停止する事ができる。
 ・処理区分「UaerAgent」「platform」「IPアドレス※要PHP」「cookieEnabled」
 　※区分はnavigatorの値を指定可能
 　※参照：http://esp.hanabie.com/js/es_js10.html

 【使用方法】
 ・product処理時にapi毎に使用
 　if($NC.$blacklist.check(i)){continue}
 　※i=api

 【データ形式】
 $NC.$blacklist.data={
 //登録ID
 '20121107':{
 //タイトル（無可）※システム使用のみ
 'title':'テスト登録',
 //対象API（無可）
 'api':'',
 //navigatorターゲット（IPは非対応）（無可）
 'target':'userAgent',
 //正規表現
 'reg':'webkit',
 //正規表現フラグ（無可）
 'reg_flg':'i',
 //マッチング時のプログラム（無可）
 'prg':{
 //true（無可）
 '_true':'alert("NG");',
 //false（無可）
 '_false':'alert("NG");',
 }
 //登録日時（更新時上書き）
 'date':'20121107164001'
 }
 };
 　
 　【その他】
 　・データ登録CGIが別途必要→api/tool_blacklist

 */
$NC.$blacklist={
	//user-agentチェック
	check:function(api){
		var bl = $NC.$blacklist;
		//データが存在しない場合は、処理無
		if(typeof(bl.data)!='object'){return}

		//データ一覧チェック
		for(var i in bl.data){

			var dt = bl.data[i];

			//ターゲット
			var t = "";
			if(!dt.target || typeof(dt.target)=='undefined'){
				t = navigator.userAgent;
			}
			//ipアドレス※PHPを通す必要がある。
			else if(dt.target=="ip"){
				t = "ip";
			}
			//任意のnavigatorがチェック可能
			else if(dt.target){
				t = navigator[dt.target];
			}

			//apiチェック
			if(dt.api){
				if(dt.api != api){continue}
			}

			//正規表現チェック
			if(dt.reg){
				//正規表現フラグ有
				if(dt.reg_flg){
					var reg = new RegExp(dt.reg , dt.reg_flg);
				}
				//正規表現フラグ無
				else{
					var reg = new RegExp(dt.reg);
				}

				//ユーザーエージェントマッチング
				if(t && t.match(reg)){
					//マッチング真の場合のプログラム起動
					if(typeof(dt.flg)=="object" && dt.prg._true){
						eval(dt.prg._true);
					}
					//白画面スクリプト用のフラグ起動（コアが呼ばれない用）
					$NC.convertEnd=true;
					//マッチング真の場合、trueを返す（マッチした場合、除外対象）
					return true;
				}
				else{
					//マッチング偽の場合のプログラム起動
					if(typeof(dt.flg)=="object" && dt.prg._false){
						eval(dt.prg._false);
					}
				}
			}
		}
	}
};


// add hamamoto 20141218 その他サービスと同時利用している場合の、回避処理
var classDoublLoad = function (){};

classDoublLoad.prototype.isLoad = function () {
	// TODO：この処理は仮の対応のため、今後$NC.$setが先に読み込まれているのでこのへんのロジックを見直しをかける。
	// 現在は、新しくオブジェクトを作成し、そのオブジェクトが存在するかどうかを判定して処理を続行するOR処理終了（Navicastサービス二重起動）
	var reValue = false;
	if(typeof $NEW_NC == 'undefined'){
		$NEW_NC = {};
		reValue = true;
	}
	return reValue;
};
// add hamamoto 20141218 その他サービスと同時利用している場合の、回避処理

$NC.checker = new classDoublLoad();


/**
 * タグマネージャ
 */
var TMG = function () {
	var tmgid, runFlg;

	function main (state) {
		if(state != "complete" || !tmg.tmgid || tmg.runFlg) return;

		tmg.runFlg = true;
		var NavicastApiJS, domain = "", query = [], doc = document;

		if(document.getElementById("NC_responsice_css")) {
			document.getElementById("NC_responsice_css").removeAttribute("disabled");
			setTimeout(function () {
				document.getElementById("NC_responsice_css").setAttribute("disabled", true);
			}, 100);

		}


		NavicastApiJS = (function(){
			if(typeof doc.querySelector == "function")
				return doc.querySelector("script[src*='NavicastApi.js']");

			var scripts = doc.getElementsByTagName("script");
			for(var i=0; i<scripts.length; i++){
				if(scripts[i].src.indexOf("NavicastApi.js") != -1)return scripts[i];
			}
		})();

		var _arr = NavicastApiJS.src.split("/");
		for(var i = 2; i<= _arr.length-2; i++)domain += _arr[i] + "/";

		var _tmp = NavicastApiJS.src.split("?")[1].split("&");
		for(var i=0; i<_tmp.length; i++){
			var _q = _tmp[i].split("=");
			query[_q[0]] = _q[1];
		}

		var script = navicastApi.createScript(
				"NavicastTMG",
				"//" + domain + "NavicastTmg.php?tmp=" + (+new Date()) + "&" + (function(){
					return ((query["u"] && query["url_id"] && !query["a"]) || NavicastApiJS.src.indexOf("mode=preview") != -1)? "mode=preview&": "";
				})() + "uid=" + (function(){
					return (query["u"])? query["u"]: NavicastApiJS.src.split("?")[1];
				})() + (function(){
					return (tmg.tmgid)? "&tmgid=" + tmg.tmgid: "";
				})() + "&url=" + encodeURIComponent(location.href),
				"",
				true
		);

		var target = ((document.getElementsByTagName('HEAD')[0])? document.getElementsByTagName('HEAD')[0]: document.body);
		target.appendChild(script);
	}

	return {
		tmgid     : tmgid,
		runFlg    : runFlg,
		main : main
	}
};
var tmg = new TMG();

$NC.api.set();

function consoleLog(msg){
	if(window.console && typeof window.console.log === "function")console.log(msg);
}

try{
	Object.defineProperty($NC.api, "state", monitoringCompState("state", tmg.main));
}
catch(e){}


function monitoringCompState(name, fnc) {
	var value = $NC.api.state;
	return {
		get: function () {
			return value;
		},
		set: function (value) {
			fnc(value);
		},
		enumerable  : true,
		configurable: true
	};
}

var NavicastApi = function() {};
NavicastApi.prototype.createScript = function (id, src, script, async) {
	var s = document.createElement("script");

	if(async)  s.async     = async;
	if(id)     s.id        = id;
	if(src)    s.src       = src;
	if(script) s.innerHTML = script;

	return s;
};

NavicastApi.prototype.runJS = function (script) {

	
	var s = document.createElement("naviscript");
	s.innerHTML = script;
	var scripts = s.getElementsByTagName("script");
	var target  = document.getElementsByTagName('HEAD')[0].getElementsByTagName('script');

	for(var i=0; i<scripts.length; i++){

		var s = document.createElement("script");

		if(scripts[i].id) s.id = scripts[i].id;
		if(scripts[i].src) s.src = scripts[i].src;
		if(scripts[i].async) s.setAttribute("async", scripts[i].async);
		if(scripts[i].className) s.className = scripts[i].className;
		if(scripts[i].charset) s.setAttribute("charset", scripts[i].charset);
		if(scripts[i].text) s.innerText = scripts[i].text;

		navicastApi.insertAfter(target[target.length-1], s);

	}

};

NavicastApi.prototype.insertAfter = function (target, newElement) {
	target.parentNode.insertBefore(newElement, target.nextSibling);
};

var navicastApi = new NavicastApi();


## 
## Multi Configuration Module
## かなり高度です。以下のように特定条件によってconfig.cgiを分岐させてください。
## 以下の例はmailform.cgi?type=xxxx として呼び出されたか送信された場合に config.xxxx.cgiを呼び出すという設定です。
## Multi Configuration Moduleは必ずすべてのモジュールの先頭で呼び出してください。
##

&_GET;
$_GET{'type'} = &_SECPATH($_GET{'type'});
if(-f "config.$_GET{'type'}.cgi"){
	@Modules = ();
	require "config.$_GET{'type'}.cgi";
	&_ModuleLoadConfigs;
}
1;
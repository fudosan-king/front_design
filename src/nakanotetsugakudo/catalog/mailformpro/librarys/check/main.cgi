require 'config.cgi';

&_ModuleLoadConfigs;

## sendmail Check
if(-f $config{'sendmail'}){
	push @result,"<th>sendmailのパス</th><td><span>[ OK ]</span></td>";
}
else {
	@sendmails = ('/lib/sendmail','/usr/bin/sendmail','/usr/sbin/sendmail','/usr/lib/sendmail','/usr/local/sbin/sendmail','/usr/local/lib/sendmail','c:\sendm\sendmane.exe','c:\sendmail\sendmail.exe');
	$matchFlag = 0;
	for(my($cnt)=0;$cnt<@sendmails;$cnt++){
		if(-f $sendmails[$cnt] && !$matchFlag){
			push @result,"<th valign=\"top\">sendmailのパス</th><td><strong>[ NG ]</strong>たぶん <input value=\"${sendmails[$cnt]}\" /> です。たぶんね。たぶんだから。サーバ指定であればそれが正解です。和田の言うことはどうせ当てになりませんから。すいませんねほんと。</td>";
			$matchFlag = 1;
		}
	}
	if(!$matchFlag){
		push @result,"<th valign=\"top\">sendmailのパス</th><td><strong>[ NG ]</strong>ごめん・・・。和田も頑張ったんだけどさ・・・。そう人生うまくいくもんじゃないよね・・・。探したよ！必死に！交差点でも 夢の中でも こんなとこにいるはずもないのに・・・。ということで、ホントごめん・・・。サーバ会社の人に聞いてみてください・・・。生まれてきてごめんなさい・・・。</td>";
	}
}

## mailto Check
$name = '<th valign="top">フォームの送信先</th>';
if(@mailto > 0){
	push @result,"${name}<td><span>[ OK ]</span></td>";
}
else {
	push @result,"${name}<td><strong>[ NG ]</strong>メールの宛先が設定されてねぇ！<br /><b>#</b>push @mailto,'support\@synck.com';<br />こういう感じで行頭に<b>#</b>が付いている場合は<b>#</b>を削除してくれ！</td>";
}

## Domain Check
$name = '<th valign="top">送信メールアドレス</th>';
$domain = $ENV{'HTTP_HOST'};
$domain =~ s/www\.//ig;
if($config{'mailfrom'} =~ /$domain/si){
	push @result,"${name}<td><span>[ OK ]</span></td>";
}
else {
	push @result,"${name}<td><em>[ WARNING ]</em>設置されているサーバと送信メールアドレスのドメインが違うよ！こういう場合は迷惑メールやフィッシングメールなどの扱いを受ける事が多くなるよ！ちなみにチェックプログラムはこのサーバを <b>${domain}</b> として認識しているよ！</td>";
}

## Auto Responder
$name = '<th valign="top">自動返信メール</th>';
if($config{"ReturnSubject"} ne $null && $_TEXT{'responder'} ne $null){
	push @result,"${name}<td><span>[ OK ]</span><p>フォームの入力欄にname属性が<b>email</b>というとこに入力されたメールアドレスへ送信されます。<b>email</b>というnameの項目が無い場合は飛びません。</p></td>";
}
else {
	push @result,"${name}<td><em>[ WARNING ]</em>自動返信メールは送信される設定になっていません。<br /><b>#</b>\$config{\"ReturnSubject\"} = '[ %s ] お問い合せありがとうございました';<br />こういう感じで行頭に<b>#</b>が付いている場合は<b>#</b>を削除してくれ！</td>";
}

## Directory Permission
$name = '<th valign="top">パーミッション<br />(ディレクトリ属性)</th>';
$value = "";
$errorflag = 0;
foreach $key (keys(%config)){
	if($key =~ /^dir\./si){
		$p = substr((sprintf "%03o", (stat $config{$key})[2]), -3);
		if($p eq '777'){
			$value .= "<p>\[ ${p} \] $config{$key}</p>";
		}
		else {
			$value .= "<strong>\[ ${p} \] $config{$key}</strong>";
			$errorflag = 1;
		}
	}
}
if($errorflag){
	push @result,"${name}<td><em>[ WARNING ]</em>${value}データ格納用ディレクトリのパーミッションは777に設定してください。この属性で読み書き可能なサーバであれば問題ありませんが、もし読み書きできないパーミッションの場合はパーミッションを変更してください。</td>";
}
else {
	push @result,"${name}<td><span>[ OK ]</span>${value}</td>";
}

## other permission
$name = '<th valign="top">パーミッション<br />(ファイル属性)</th>';
$value = "";
$errorflag = 0;
foreach $key (keys(%config)){
	if($key =~ /^file\./si){
		$p = substr((sprintf "%03o", (stat $config{$key})[2]), -3);
		if($p eq '777'){
			$value .= "<p>\[ ${p} \] $config{$key}</p>";
		}
		else {
			$value .= "<strong>\[ ${p} \] $config{$key}</strong>";
			$errorflag = 1;
		}
	}
}
if($errorflag){
	push @result,"${name}<td><em>[ WARNING ]</em>${value}データ格納用ファイルのパーミッションは上記のように設定されています。このファイル属性で読み書き可能なサーバであれば問題ありませんが、もし読み書きできないパーミッションの場合はパーミッションを変更してください。</td>";
}
else {
	push @result,"${name}<td><span>[ OK ]</span>${value}</td>";
}

## Secure check
if(grep(/^CSVExport$/,@Modules) > 0){
	$name = '<th valign="top">CSV保存</th>';
	push @result,"${name}<td><em>[ WARNING ]</em>CSV保存機能が有効になっています。<a href=\"$config{'file.csv'}\" target=\"_blank\">ここをクリック</a>してブラウザからデータファイルが閲覧できない状態になっていることを確認してください。CSVデータをサーバ上に保管することは危険を伴う行為であるということをしっかりと認識してください。万に一つ、FTP情報が外部に漏洩するような事態が発生した場合はサーバ上に保管されているCSVデータが漏洩する危険性もあります。そのため、CSVとして保存する情報は最低限にすることや暗号化を施すことなどをご検討ください。</td>";
}

$result = "<tr>" . join("</tr>\n<tr>",@result) . "</tr>";
$html = &_LOAD("./librarys/check/check.tpl");
$HostName = &_GETHOST;
$html =~ s/_%%result%%_/$result/ig;
$html =~ s/_%%version%%_/$config{'Version'}/ig;
#$html =~ s/_%%IPAddres%%_/$ENV{'REMOTE_ADDR'}/ig;
print "Pragma: no-cache\n";
print "Cache-Control: no-cache\n";
print "Content-type: text/html; charset=UTF-8\n\n";
print $html;
exit;
$config{'Version'} = 'Mailform Pro 4.2.2 / 2015-11-24';

$ENV{'TZ'} = 'JST-9';

($sec,$min,$hour,$day,$mon,$year) = localtime(time);
$_ENV{'mfp_date'} = sprintf("%04d-%02d-%02d %02d:%02d:%02d",$year+1900,$mon+1,$day,$hour,$min,$sec);
$_ENV{'mfp_day'} = sprintf("%04d-%02d-%02d",$year+1900,$mon+1,$day);
$dateStr = sprintf("%04d%02d%02d",$year+1900,$mon+1,$day);

@_ENV = ('mfp_date','mfp_serial','mfp_pageview','mfp_uniqueuser','mfp_cvr','mfp_dropcount','mfp_droprate','mfp_input_time','mfp_input_time_avg','mfp_confirm_time','mfp_confirm_time_avg','mfp_hostname','mfp_ipaddress','mfp_useragent','mfp_errorlog','mfp_jssemantics','mfp_domain','mfp_referrer','mfp_formreferrer','mfp_uri','mfp_script','mfp_elementsQty','mfp_requiredElementsQty','mfp_elementsArch','mfp_timeline','mfp_cart','mfp_cartprice','mfp_testmode');

@CryptStrings = ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
## boundary
$config{'Boundary'} = "------------boundary_" . time . "_" . $$;

## Multipart
$config{'MultiPart'} = 0;

sub _MAIN {
	&_ModuleLoadConfigs;
	if($ENV{'REQUEST_METHOD'} eq "POST" && $_GET{'module'} eq $null){
		$_ENV{'mode'} = 1;
		&mailformpro;
	}
	elsif($_GET{'module'} ne $null){
		$_ENV{'mode'} = 0;
		&_ModuleMode;
	}
	else {
		&mfpjs;
	}
}
sub mailformpro {
	&_RunModule('extend');
	&_COOKIE;
	&_POST;
	#@AttachedFiles = ();
	#@ResAttachedFiles = ();
	($Serial,$InputTime,$ConfirmTime,$_ENV{'mfp_uniqueuser'}) = split(/\,/,&_LOAD($config{'file.data'}));
	&_RunModule('check');
	&_ErrorCheck;
	if(!$Error){
		&_RunModule('initialize');
		if(!$config{'disabled'}){
			&_MAINPROCESS;
		}
		&_RESULT;
	}
	else {
		&_RunModule('error');
		if($_POST{'mfp_jssemantics'}){
			&_REDIRECT("$ENV{'HTTP_REFERER'}#WarningCode${Error}");
		}
		else {
			&_Error($Error);
		}
	}
}
sub _MAINPROCESS {
	&_SETENV;
	&_RunModule('startup');
	&_MAILTEXT;
	&_RunModule('run');
	
	## 4.2.0 testmode
	if($_POST{'mfp_testmode'}){
		@mailto = @testmailto;
		if($config{'bcc'}){
			$config{'bcc'} = $mailto[0];
		}
	}
	##
	
	if($config{'mailto'} eq $null){
		$config{'mailto'} = $mailto[0];
		$config{'mailtoName'} = $mailto[0];
	}
	elsif($config{"ReturnSubject"} ne $null && $_TEXT{'responder'} ne $null){
		&_SENDMAIL($config{'mailto'},$config{'mailfrom'},$config{'fromname'},$config{"ReturnSubject"},$_TEXT{'responder'},join('',@ResAttachedFiles),$_HTML{'HTMLMail'});
	}
	if($config{'fixed'}){
		$config{'mailto'} = $mailto[0];
		$config{'mailtoName'} = $mailto[0];
	}
	
	if(!$config{'mailtoName'}){
		$config{'mailtoName'} = $config{'mailto'};
	}
	for(my $cnt=0;$cnt<@mailto;$cnt++){
		&_SENDMAIL($mailto[$cnt],$config{'mailto'},$config{'mailtoName'},$config{'subject'},$_TEXT{'posted'},join('',@AttachedFiles),$_HTML{'HTMLMailAdmin'});
	}
}
sub _RESULT {
	if($_RESULT{'error'}){
		&_Error(500);
	}
	elsif($_RESULT{'html'}){
		print "Content-type: text/html;charset=UTF-8\n";
		&_SET_COOKIE;
		print $_RESULT{'html'};
	}
	elsif($_RESULT{'uri'}){
		&_REDIRECT($_RESULT{'uri'});
	}
	else {
		&_REDIRECT($config{'ThanksPage'});
	}
}
sub _ErrorCheck {
	## Error Check
	if(!$_POST{'mfp_jssemantics'} && $config{'DisabledJs'}){
		## Error Code 1 / Disabled Javascript
		$Error = 1;
	}
	elsif($config{"EnglishSpamBlock"}){
		## Error Code 2 / All English
		$Error = 2;
	}
	elsif($config{"LinkSpamQty"} > 0 && $config{'LinkSpamBlock'}){
		## Error Code 3 / Link Spam String match
		$Error = 3;
	}
	elsif($config{"URLSpamQty"} > 0 && $config{'DisableURI'}){
		## Error Code 4 / URL match
		$Error = 4;
	}
	elsif($config{'PostDomain'} ne $null && !($ENV{'HTTP_REFERER'} =~ /$config{'PostDomain'}/si)){
		## Error Code 5 / Domain Error
		$Error = 5;
	}
	elsif($config{'limit'} ne $null && $Serial >= $config{'limit'}){
		## Error Code 6 / Limit Over
		$Error = 6;
	}
	elsif($config{"OpenDate"} ne $null && $config{"OpenDate"} ge $_ENV{'mfp_date'}){
		## Error Code 7 / Date Error
		$Error = 7;
	}
	elsif($config{"CloseDate"} ne $null && $_ENV{'mfp_date'} ge $config{"CloseDate"}){
		## Error Code 7 / Date Error
		$Error = 7;
	}
	elsif(@mailto < 1){
		## Error Code 10 / Config Error
		$Error = 10;
	}
}
sub _CheckProcess {
	my($name,$value) = @_;
	if(!($value !~ /[\x80-\xff]/)){
		$config{"EnglishSpamBlock"} = 0;
	}
	if($value =~ /\[\/url\]/si || $value =~ /\[\/link\]/si){
		$config{"LinkSpamQty"}++;
	}
	if(($value =~ /http\:\/\//si || $value =~ /https\:\/\//si) && !($name =~ /^mfp_/si)){
		$config{"URLSpamQty"}++;
	}
	if($name eq 'email' && !($value =~ /[^a-zA-Z0-9\.\@\-\_\+]/) && split(/\@/,$value) == 2){
		$config{'mailto'} = $value;
		$config{'mailto'} =~ s/ //ig;
	}
}
sub _EmailCheck {
	my($email) = @_;
	$email =~ s/ //ig;
	if(!($email =~ /[^a-zA-Z0-9\.\@\-\_\+]/) && split(/\@/,$email) == 2){
		return 1;
	}
	else {
		return 0;
	}
}
sub _ModuleMode {
	$_GET{'module'} =~ s/\.//ig;
	$_GET{'module'} =~ s/\|//ig;
	$_GET{'module'} =~ s/\\//ig;
	$_GET{'module'} =~ s/\///ig;
	if((grep(/^$_GET{'module'}$/,@Modules)) == 1){
		&_RunModule('initialize');
		$_GET{'action'} = &_SECPATH($_GET{'action'});
		if(-f "./configs/$_GET{'module'}.cgi"){
			require "./configs/$_GET{'module'}.cgi";
		}
		if(-f "./librarys/$_GET{'module'}/$_GET{'action'}.cgi"){
			require "./librarys/$_GET{'module'}/$_GET{'action'}.cgi";
		}
		elsif(-f "./librarys/$_GET{'module'}/main.cgi"){
			require "./librarys/$_GET{'module'}/main.cgi";
		}
		else {
			&_Error(0);
		}
	}
	else {
		&_Error(0);
	}
}
sub _CSVCRYPT {
	my($str) = @_;
	@key = split(//,$config{'CryptKey'});
	$str = &encodeURI($str);
	for(my($i)=0;$i<@key;$i++){
		$str =~ s/([^<])$CryptStrings[$i]([^>])/$1<$key[$i]>$2/g;
		$str =~ s/([^<])$CryptStrings[$i]([^>])/$1<$key[$i]>$2/g;
	}
	$str =~ s/<//ig;
	$str =~ s/>//ig;
	return $str;
}
sub _CSVDECRYPT {
	my($str) = @_;
	@key = split(//,$config{'CryptKey'});
	for(my($i)=0;$i<@key;$i++){
		$str =~ s/([^<])${key[$i]}([^>])/$1<$CryptStrings[$i]>$2/g;
		$str =~ s/([^<])${key[$i]}([^>])/$1<$CryptStrings[$i]>$2/g;
	}
	$str =~ s/<//ig;
	$str =~ s/>//ig;
	return &decodeURI($str);
}
sub _Error {
	my($ErrorCode) = @_;
	$html = &_LOAD('./librarys/error.tpl');
	$text = $lang{"ErrorCode${ErrorCode}"};
	$BackToPage = "";
	if($ENV{'HTTP_REFERER'}){
		$BackToPage = sprintf($lang{'Return'},$ENV{'HTTP_REFERER'});
	}
	$html =~ s/_%%ErrorCode%%_/ERROR CODE ${ErrorCode}/ig;
	$html =~ s/_%%ErrorText%%_/$text/ig;
	$html =~ s/_%%BackToPage%%_/$BackToPage/ig;
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/html; charset=UTF-8\n\n";
	print $html;
}
sub _RunModule {
	my($method) = @_;
	for(my($cnt)=0;$cnt<@Modules;$cnt++){
		if(-f "./librarys/${Modules[$cnt]}/${method}.cgi"){
			require "./librarys/${Modules[$cnt]}/${method}.cgi";
		}
	}
}
sub _ModuleLoadConfigs {
	for(my($cnt)=0;$cnt<@Modules;$cnt++){
		if(-f "./configs/${Modules[$cnt]}.cgi"){
			require "./configs/${Modules[$cnt]}.cgi";
		}
	}
}
sub _SETENV {
	$_ENV{'mfp_hostname'} = &_GETHOST;
	$_ENV{'mfp_ipaddress'} = $ENV{'REMOTE_ADDR'};
	$_ENV{'mfp_useragent'} = $ENV{'HTTP_USER_AGENT'};
	$_ENV{'mfp_pageview'} = $_COOKIE{'PV'};
	
	## Serial
	$_ENV{'mfp_serial'} = $Serial + 1;
	$_ENV{'mfp_count'} = $Serial + 1;
	$InputTime += $_ENV{'mfp_input_time'};
	$ConfirmTime += $_ENV{'mfp_confirm_time'};
	
	eval {
		$_ENV{'mfp_cvr'} = sprintf("%.2f",$_ENV{'mfp_serial'} / $_ENV{'mfp_uniqueuser'} * 100) . '%';
	};
	if($@){
		$_ENV{'mfp_cvr'} = '0.00%';
	}
	
	@NewSession = ($_ENV{'mfp_serial'},$InputTime,$ConfirmTime,$_ENV{'mfp_uniqueuser'});
	&_SAVE($config{'file.data'},join("\,",@NewSession));
	
	eval {
		$_ENV{'mfp_input_time_avg'} = &_TIMESTR($InputTime / $_ENV{'mfp_serial'});
		$_ENV{'mfp_confirm_time_avg'} = &_TIMESTR($ConfirmTime / $_ENV{'mfp_serial'});
	};
	if($@){
		$_ENV{'mfp_input_time_avg'} = "00:00:00";
		$_ENV{'mfp_confirm_time_avg'} = "00:00:00";
	}
	
	## Drop Rate
	@drops = grep(!/^$_COOKIE{'SES'}\t/,(&_DB($config{'file.drop'})));
	@drops = grep(/\S/,@drops);
	$_ENV{'mfp_dropcount'} = @drops;
	$dropRate = join("\n",@drops) . "\n";
	&_SAVE($config{'file.drop'},$dropRate);
	eval {
		$_ENV{'mfp_droprate'} = sprintf("%.2f",$_ENV{'mfp_dropcount'} / $_ENV{'mfp_uniqueuser'} * 100) . '%';
	};
	if($@){
		$_ENV{'mfp_droprate'} = "0.00%";
	}
	
	$_ENV{'mfp_input_time'} = &_TIMESTR($_ENV{'mfp_input_time'});
	$_ENV{'mfp_confirm_time'} = &_TIMESTR($_ENV{'mfp_confirm_time'});
	
	
	$_ENV{'mfp_serial'} += $config{'SerialBoost'};
	$_ENV{'mfp_serial'} = sprintf($config{'SerialFormat'},$_ENV{'mfp_serial'});
	$_ENV{'mfp_serial'} =~ s/<date>/$dateStr/ig;
	
	$config{'subject'} = sprintf($config{'subject'},$_ENV{'mfp_serial'});
	$config{"ReturnSubject"} = sprintf($config{"ReturnSubject"},$_ENV{'mfp_serial'});
	$config{'ThanksPage'} = sprintf($config{'ThanksPage'},$_ENV{'mfp_serial'});
	$_ENV{'mfp_formreferrer'} = $ENV{'HTTP_REFERER'};
	
	## Timeline
	@timeline = split(/<>/,$_POST{'mfp_timeline'});
	$timeline = "";
	for(my($cnt)=0;$cnt<@timeline;$cnt++){
		($sec,$name,$action,$elapsed) = split(/\,/,$timeline[$cnt]);
		if($elapsed){
			$elapsed = " ( ${elapsed} sec )";
		}
		else {
			$elapsed = "";
		}
		$sec = &_TIMESTR($sec);
		$timeline .= "( ${sec} ) ${name} ${action}${elapsed}\n";
	}
	$_ENV{'mfp_timeline'} = $timeline;
	##
	if($_POST{'mfp_jssemantics'}){
		$_ENV{'mfp_jssemantics'} = $lang{'js_mode'};
	}
	else {
		$_ENV{'mfp_jssemantics'} = $lang{'plain_mode'};
	}
	
	## cart
	$_ENV{'mfp_cart'} =~ s/\,//ig;
	$_ENV{'mfp_cart'} =~ s/\t//ig;
	$_ENV{'mfp_cart'} =~ s/<->/\,/ig;
	$_ENV{'mfp_cart'} =~ s/\|\|/\n/ig;
	
	my($env) = "";
	for(my($i)=0;$i<@_ENV;$i++){
		if($_ENV{$_ENV[$i]} ne $null || $config{'blankfield'}){
			$value = &_VALUE($_ENV[$i],$_ENV{$_ENV[$i]});
			$name = &_NAME($_ENV[$i]);
			if($value =~ /\n/si){
				$_ENV{'mfp_env'} .= "\[ ${name} \]\n${value}\n\n";
			}
			else {
				$_ENV{'mfp_env'} .= "\[ ${name} \] ${value}\n";
			}
		}
	}
}

sub _GETHOST {
	my($ip_address) = $ENV{'REMOTE_ADDR'};
	my(@addr) = split(/\./, $ip_address);
	my($packed_addr) = pack("C4", $addr[0], $addr[1], $addr[2], $addr[3]);
	my($name, $aliases, $addrtype, $length, @addrs);
	($name, $aliases, $addrtype, $length, @addrs) = gethostbyaddr($packed_addr, 2);
	return $name;
}
sub _MAILTEXT {
	my %hash = (%_POST,%_ENV);
	foreach $key (keys(%hash)){
		$value = $hash{$key};
		foreach $name (keys(%_TEXT)){
			$_TEXT{$name} =~ s/<_${key}_>/$value/ig;
			if($value ne $null){
				$_TEXT{$name} =~ s/<%(.*?)\:${key}%>\n/\[ ${1} \] ${value}\n/ig;
			}
		}
		$value = &_SANITIZING($value);
		foreach $name (keys(%_HTML)){
			$_HTML{$name} =~ s/<_${key}_>/$value/ig;
			if($value ne $null){
				$_HTML{$name} =~ s/<%(.*?)\:${key}%>\n/\[ ${1} \] ${value}\n/ig;
			}
		}
	}
	foreach $name (keys(%_TEXT)){
		$_TEXT{$name} =~ s/<_.*?_>//g;
		$_TEXT{$name} =~ s/<%.*?%>\n//g;
	}
	foreach $name (keys(%_HTML)){
		$_HTML{$name} =~ s/<_resbodyHTML_>/$resbodyHTML/g;
		$_HTML{$name} =~ s/<_.*?_>//g;
		$_HTML{$name} =~ s/<%.*?%>\n//g;
	}
}
sub _MAILHEADER {
	my($to,$from,$name,$subject,$body,$attached,$htmlmail) = @_;
	my $str;
	$subject = &_MIME($subject,'UTF-8');
	$from = &_MIME("${name}",'UTF-8') . "<${from}>";
	if($config{'breakcode'}){
		$body =~ s/\n/$config{'breakcode'}/ig;
	}
	$body = encode_base64($body);
	$str = "Return-Path: <$config{'mailfrom'}>\n";
	$str .= "Subject: ${subject}\n";
	$str .= "From: ${from}\n";
	if($attached ne $null && $htmlmail eq $null){
		$str .= "Content-Type: multipart/mixed; boundary=\"$config{'Boundary'}\"\n";
	}
	else {
		$str .= "Content-Type: multipart/alternative; boundary=\"$config{'Boundary'}\"\n";
	}
	$str .= "To: ${to}\n";
	if($config{'bcc'} ne $null && $config{'bcc'} ne $to){
		$str .= "Bcc: $config{'bcc'}\n";
	}
	if($config{'Notification'}){
		$str .= "Disposition-Notification-To: $config{'Notification'}\n";
	}
	$str .= "MIME-Version: 1.0\n\n";
	$str .= "--$config{'Boundary'}\n";
	$str .= "Content-Type: text/plain; charset=\"UTF-8\"\n";
	$str .= "Content-Transfer-Encoding: Base64\n";
	$str .= "Content-Disposition: inline\n\n";
	$str .= "${body}\n";
	$str .= $attached;
	$str .= "--$config{'Boundary'}--\n";
	return $str;
}
sub _SENDMAIL {
	my($to,$from,$name,$subject,$body,$attached,$htmlmail) = @_;
	my $sendmailcmd = "| $config{'sendmail'} -f ${from} -t";
	if($config{'sendmail_advanced'}){
		my $sendmail = $config{'sendmail_advanced'};
		$sendmail =~ s/\$email/$from/ig;
		$sendmailcmd = "| ${sendmail}";
	}
	if(!open(MAIL, $sendmailcmd)){
		&_SENDMAIL_ERROR('sendmail process error');
		close(MAIL);
	}
	else {
		print MAIL &_MAILHEADER($to,$from,$name,$subject,$body,$attached,$htmlmail);
		close(MAIL);
		sleep($config{'seek'});
	}
}
sub _SENDMAIL_ERROR {
	my($str) = @_;
	$_RESULT{'error'} = 1;
	my @error = ($_ENV{'mfp_date'},$_ENV{'mfp_serial'},$str);
	&_ADDSAVE("$config{'data.dir'}dat.error.log.cgi",join("\t",@error));
	&_SAVE("$config{'data.dir'}error/$_ENV{'mfp_serial'}.cgi","$_ENV{'mfp_date'} SEND ERROR\n\n$config{'buffer'}");
}
sub _MIME {
	my($str,$charset) = @_;
	$str = "=?${charset}?B?" . encode_base64($str) . '?=';
	$str =~ s/\n//ig;
	return $str;
}
sub _ATTACHED {
	my($name,$binary) = @_;
	my $str;
	$name = &_MIME($name,'UTF-8');
	$str = "--$config{'Boundary'}\n";
	$str .= "Content-Type: application/octet-stream; name=\"${name}\"\n";
	$str .= "Content-Transfer-Encoding: base64\n";
	$str .= "Content-Disposition: attachment; filename=\"${name}\"\n\n";
	$str .= encode_base64($binary) . "\n";
	return $str;
}
sub _ATTACHEDIMAGE {
	my($name,$binary) = @_;
	my $str;
	my @name = split(/\./,$name);
	my $type = $name[-1];
	$name = &_MIME($name,'UTF-8');
	$str = "--$config{'Boundary'}\n";
	$str .= "Content-Type: image/${type}; name=\"${name}\"\n";
	$str .= "Content-Transfer-Encoding: base64\n";
	$str .= "Content-ID: <part$config{'MultiPart'}.image>\n";
	$str .= "Content-Disposition: inline; filename=\"${name}\"\n\n";
	$str .= encode_base64($binary) . "\n";
	$config{'MultiPart'}++;
	return $str;
}
sub _REDIRECT {
	my($uri) = @_;
	print "Location: ${uri}\n\n";
}
sub mfpjs {
	&_COOKIE;
	if($_GET{'drop'}){
		## Json
		if($_COOKIE{'SES'} && !$_COOKIE{'DROP'}){
			$id = time;
			($sec,$min,$hour,$day,$mon,$year) = localtime($id);
			$date = sprintf("%04d-%02d-%02d %02d:%02d:%02d",$year+1900,$mon+1,$day,$hour,$min,$sec);
			$droptime = int($_GET{'time'} / 1000);
			@log = ($_COOKIE{'SES'},$id,$date,$ENV{'REMOTE_ADDR'},'Drop Element for ' . $_GET{'drop'},$droptime,($id-$droptime));
			&_ADDSAVE($config{'file.drop'},join("\t",@log));
			$_COOKIE{'DROP'} = 1;
		}
	}
	elsif($_GET{'addon'}){
		$_GET{'addon'} =~ s/\.\.//ig;
		$_GET{'addon'} =~ s/\\//ig;
		$_GET{'addon'} =~ s/\|//ig;
		if(!$_COOKIE{'SES'}){
			use Digest::MD5;
			$_COOKIE{'SES'} = &_HASH(time . "." . $ENV{'REMOTE_ADDR'});
		}
		if(-f "$config{'dir.AddOns'}$_GET{'addon'}" && (grep(/^$_GET{'addon'}$/,@AddOns))){
			require "$config{'dir.AddOns'}$_GET{'addon'}.cgi";
		}
		else {
			$js = 'alert("' . $_GET{'addon'} . '")';
		}
	}
	else {
		($Serial,$InputTime,$ConfirmTime,$UniqueUser) = split(/\,/,&_LOAD($config{'file.data'}));
		eval {
			$InputTimeAVG = int($InputTime / $Serial);
		};
		if($@){
			$InputTimeAVG = 0;
		}
		
		if($config{'limit'} ne $null){
			$config{'Acceptable'} = $config{'limit'} - $Serial;
			if($config{'limit'} <= $Serial){
				$config{'LimitOver'} = 1;
			}
		}
		if(!$_COOKIE{'PV'}){
			$_COOKIE{'PV'} = 1;
			$UniqueUser++;
			@NewSession = ($Serial,$InputTime,$ConfirmTime,$UniqueUser);
			&_SAVE($config{'file.data'},join("\,",@NewSession));
		}
		else {
			$_COOKIE{'PV'}++;
		}
		if(!$_COOKIE{'SES'}){
			use Digest::MD5;
			$_COOKIE{'SES'} = &_HASH(time . "." . $ENV{'REMOTE_ADDR'});
		}
		$id = time;
		($sec,$min,$hour,$day,$mon,$year) = localtime($id);
		$date = sprintf("%04d-%02d-%02d %02d:%02d:%02d",$year+1900,$mon+1,$day,$hour,$min,$sec);
		@log = ($id,$date,$ENV{'REMOTE_ADDR'},'Mailform Access');
		#&_ADDSAVE("$config{'data.dir'}session/$_COOKIE{'SES'}.cgi",join("\t",@log));
		
		$cacheDate = (stat $config{'file.cache'})[9];
		@js = ("./configs/$config{'lang'}.js",'./configs/config.js','./librarys/core.js');
		##
		for(my($cnt)=0;$cnt<@AddOns;$cnt++){
			$AddOns[$cnt] = "$config{'dir.AddOns'}${AddOns[$cnt]}";
		}
		##
		push @js,@AddOns;
		$createCache = 0;
		for($cnt=0;$cnt<@js;$cnt++){
			if((stat $js[$cnt])[9] > $cacheDate){
				$createCache = 1;
			}
		}
		if((stat'./config.cgi')[9] > $cacheDate){
			$createCache = 1;
		}
		if(-f $config{'file.cache'} && !$createCache){
			$js = &_LOAD($config{'file.cache'});
		}
		else {
			$js = $lang{'jslibrary'} . "\n";
			for(my($cnt)=0;$cnt<@js;$cnt++){
				$js .= &_LOAD($js[$cnt]) . "\n";
			}
			@WarningCodes = ();
			for(my($cnt)=1;$cnt<8;$cnt++){
				push @WarningCodes,$lang{"ErrorCode${cnt}"};
			}
			$WarningCodes = "'" . join("',\n'",@WarningCodes) . "'\n";
			$js =~ s/_%%WarningCode%%_/$WarningCodes/ig;
			
			## 20131103 v4.1.3
			for(my($cnt)=0;$cnt<@_ERRMSG;$cnt++){
				if($_ERRMSG[$cnt] ne $null){
					push @AddWarningCode,"mfpLang['WarningCode'][${cnt}] = '${_ERRMSG[$cnt]}';";
				}
			}
			$js .= join("\n",@AddWarningCode);
			##
			
			$js .= "\n" . 'mfp.startup();';
			&_SAVE($config{'file.cache'},&_COMPRESSION($js));
		}
		
		$time = time;
		$js =~ s/_%%PageView%%_/$_COOKIE{'PV'}/ig;
		$js =~ s/_%%Time%%_/$time/ig;
		$js =~ s/_%%OpenDate%%_/$config{'OpenDate'}/ig;
		$js =~ s/_%%CloseDate%%_/$config{'CloseDate'}/ig;
		$js =~ s/_%%LimitOver%%_/$config{'LimitOver'}/ig;
		$js =~ s/_%%Acceptable%%_/$config{'Acceptable'}/ig;
		$js =~ s/_%%DisableURI%%_/$config{'DisableURI'}/ig;
		$js =~ s/_%%ConfirmationMode%%_/$config{'ConfirmationMode'}/ig;
		$js =~ s/_%%InputTimeAVG%%_/$InputTimeAVG/ig;
		$js =~ s/_%%Version%%_/$config{'Version'}/ig;
	}
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/javascript; charset=UTF-8\n";
	&_SET_COOKIE;
	print $js;
}
sub _SAVE {
	my($path,$str) = @_;
	chmod 0777, $path;
	if(-f $path){
		open(FH,"+< ${path}");
			flock(FH,2);
			seek(FH,0,0);
			print FH $str;
			truncate(FH,tell(FH));
		close(FH);
	}
	else {
		open(FH,">${path}");
			print FH $str;
		close(FH);
	}
	chmod 0644, $path;
}
sub _ADDSAVE {
	my($path,$str) = @_;
	chmod 0777, $path;
	flock(FH, LOCK_EX);
		open(FH,">>${path}");
			print FH $str . "\n";
		close(FH);
	flock(FH, LOCK_NB);
	chmod 0644, $path;
}
sub _LOAD {
	my($path) = @_;
	flock(FH, LOCK_EX);
		open(FH,$path);
			@loader = <FH>;
		close(FH);
	flock(FH, LOCK_NB);
	$loader = join('',@loader);
	return $loader;
}
sub _DB {
	my($path) = @_;
	my(@loader) = ();
	flock(FH, LOCK_EX);
		open(FH,$path);
			@loader = <FH>;
		close(FH);
	flock(FH, LOCK_NB);
	$loader = join('',@loader);
	$loader =~ s/\r//ig;
	@loader = split(/\n/,$loader);
	return @loader;
}
sub _PRINTSCREEN {
	foreach $key ( keys %_rep ){
		$html =~ s/_%%${key}%%_/$_rep{$key}/ig;
	}
	print "Content-type: text/html;charset=UTF-8\n";
	&_SET_COOKIE;
	print "${html}";
}
sub _TIMESTR {
	my($str) = @_;
	if($str < 60){
		return sprintf("00:00:%02d",$str);
	}
	elsif($str < 3600){
		return sprintf("00:%02d:%02d",($str/60),($str%60));
	}
	elsif($str < 86400){
		return sprintf("%02d:%02d:%02d",($str/3600),(($str%3600)/60),($str%60));
	}
	else {
		return sprintf("%03d day %02d:%02d:%02d",$str/86400,(($str%86400)/3600),(($str%3600)/60),($str%60));
	}
}
sub _COOKIE_PATH {
	my(@cookie_path) = split(/\//,$ENV{'SCRIPT_NAME'});
	$cookie_path[-1] = "";
	return join('/',@cookie_path);
}
sub _SET_COOKIE {
	@cookie = ();
	foreach $key(keys(%_COOKIE)){
		if($_COOKIE{$key} ne $null){
			push @cookie,"${key}=" . &encodeURI($_COOKIE{$key});
		}
	}
	print "Set-Cookie: $config{'prefix'}=\|" . join("&",@cookie) . "\|; path=" . &_COOKIE_PATH . "; expires=Mon, 30 Dec 2030 23:59:59 GMT\n\n";
}
sub _COOKIE {
	if($ENV{'HTTP_COOKIE'} =~ /$config{'prefix'}=\|(.*?)\|/si){
		$cookie = $1;
		my(@cookies) = split(/\&/,$cookie);
		for(my($cnt)=0;$cnt<@cookies;$cnt++){
			my($name, $value) = split(/=/,$cookies[$cnt]);
			$_COOKIE{$name} = &decodeURI($value);
		}
		if($_COOKIE{'SES'}){
			$_COOKIE{'SES'} = &_SECPATH($_COOKIE{'SES'});
		}
	}
}
sub _SECPATH {
	my($str) = @_;
	$str =~ s/\///ig;
	$str =~ s/\\//ig;
	$str =~ s/\|//ig;
	$str =~ s/\.//ig;
	return $str;
}
sub _COMPRESSION {
	my($str) = @_;
	$str =~ s/\t//ig;
	$str =~ s/\n\n/\n/ig;
	$str =~ s/\n\n/\n/ig;
	return $str;
}
sub _HASH {
	my($str) = @_;
	$md5 = Digest::MD5->new;
	$str = $md5->add($str)->b64digest;
	$str =~ s/\//\-/ig;
	$str =~ s/\+/\_/ig;
	return $str;
}
sub decodeURI {
	my($str) = @_;
	$str =~ tr/+/ /;
	$str =~ s/%([0-9A-Fa-f][0-9A-Fa-f])/pack('H2', $1)/eg;
	return $str;
}

sub encodeURI {
	my($str) = @_;
	$str =~ s/([^\w ])/'%' . unpack('H2', $1)/eg;
	$str =~ tr/ /+/;
	return $str;
}
sub _SANITIZING {
	my($str) = @_;
	$str =~ s/\&/&amp;/g;
	$str =~ s/\\/&yen;/g;
	$str =~ s/</&lt;/g;
	$str =~ s/>/&gt;/g;
	$str =~ s/\'/&rsquo;/g;
	$str =~ s/\"/&quot;/g;
	$str =~ s/\,/&#x2c;/g;
	$str =~ s/\t/&nbsp;&nbsp;/g;
	$str =~ s/\r\n/\n/g;
	$str =~ s/\r//g;
	$str =~ s/\n/<br \/>/g;
	return $str;
}
sub _UNSANITIZING {
	my($str) = @_;
	$str =~ s/&amp;/\&/g;
	$str =~ s/&lt;/</g;
	$str =~ s/&gt;/>/g;
	$str =~ s/&rsquo;/\'/g;
	$str =~ s/&quot;/\"/g;
	$str =~ s/&#x2c/\,/g;
	$str =~ s/&nbsp;/ /g;
	$str =~ s/<br \/>/\n/g;
	return $str;
}
sub _GET {
	@pairs = split(/&/, $ENV{'QUERY_STRING'});
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$_GET{$name} = $value;
	}
}
sub _POST {
	if($config{'buffer'}){
		$buffer = $config{'buffer'};
	}
	else {
		read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
		$config{'buffer'} = $buffer;
	}
	@pairs = split(/&/, $buffer);
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ s/<br \/>/\n/ig;
		$value =~ s/<_.*?_>//g;
		$value =~ s/<%.*?%>//g;
		&_CheckProcess($name,$value);
		if($_POST{$name} ne $null){
			$_POST{$name} .= "\n${value}";
		}
		else {
			$_POST{$name} = $value;
			push @ELEMENTS,$name;
		}
	}
	&_POST_REBUILD;
}
sub _POST_REBUILD {
	$count = 0;
	for(my($cnt)=0;$cnt<@ELEMENTS;$cnt++){
		$name = $ELEMENTS[$cnt];
		$value = $_POST{$ELEMENTS[$cnt]};
		if(!($name =~ /^mfp_/si) && $name ne $null && ($value ne $null || $config{'blankfield'})){
			$name = &_NAME($name);
			$SafeValue = &_SANITIZING($value);
			if($value =~ /\n/si){
				if($config{'multiline'}){
					$line = sprintf($config{'multiline'},$name,$value);
					$_POST{'resbody'} .= $line;
				}
				else {
					$_POST{'resbody'} .= "\[ ${name} \]\n${value}\n\n";
				}
			}
			else {
				if($config{'singleline'}){
					$line = sprintf($config{'singleline'},$name,$value);
					$_POST{'resbody'} .= $line;
				}
				else {
					$_POST{'resbody'} .= "\[ ${name} \] ${value}\n";
				}
			}
			$style = $_HTMLMAIL{'style1'};
			if($count % 2 == 0){
				$style = $_HTMLMAIL{'style2'};
			}
			$resbodyHTML .= sprintf($_HTMLMAIL{'line'},$style,$name,$SafeValue);
			$count++;
		}
		elsif($name =~ /^mfp_/si){
			$_ENV{$name} = $value;
		}
	}
}
sub _NAME {
	my($name) = @_;
	if($lang{$name} ne $null){
		return $lang{$name};
	}
	else {
		return $name;
	}
}
sub _VALUE {
	my($name,$value) = @_;
	if($value{$name} ne $null){
		return sprintf($value{$name},$value);
	}
	else {
		return $value;
	}
}
sub _URI2PRAM {
	my($uri,$pram) = @_;
	if(index($uri,'?') > -1){
		return "${uri}&${pram}";
	}
	else {
		return "${uri}?${pram}";
	}
}
1;
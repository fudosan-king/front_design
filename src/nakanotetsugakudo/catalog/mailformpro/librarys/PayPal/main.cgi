&_POST;

if($_GET{'callback'} eq 'cancel' &&  -f "$config{'dir.paypal'}$_GET{'token'}.cgi"){
	@token = &_DB("$config{'dir.paypal'}$_GET{'token'}.cgi");
	for(my($cnt)=0;$cnt<@token;$cnt++){
		($name,$value) = split(/\t/,$token[$cnt]);
		$value =~ s/<br \/>/\n/ig;
		$_POST{$name} = $value;
		if($name eq 'email' && !($value =~ /[^a-zA-Z0-9\.\@\-\_\+]/) && split(/\@/,$value) == 2){
			$config{'mailto'} = $value;
			$config{'mailto'} =~ s/ //ig;
		}
		$_PAYPAL{'result_body'} =~ s/<_${name}_>/$value/ig;
	}
	$_PAYPAL{'result_body'} =~ s/<_paypal_response_>//ig;
	$_PAYPAL{'result_body'} =~ s/<_paypal_result_>/$_PAYPAL{'ResultStatCancel'}/ig;
	$_PAYPAL{"result_subject"} = sprintf($_PAYPAL{"result_subject"},$_POST{'mfp_serial'});
	#unlink "$config{'dir.paypal'}$_GET{'token'}.cgi";
	if($config{'fixed'} || $config{'mailto'} eq $null){
		$config{'mailto'} = $mailto[0];
	}
	for(my($cnt)=0;$cnt<@mailto;$cnt++){
		&_SENDMAIL($mailto[$cnt],$config{'mailto'},$config{'mailto'},$_PAYPAL{"result_subject"},$_PAYPAL{'result_body'},join('',@AttachedFiles));
	}
	$html = &_LOAD("./librarys/PayPal/template.tpl");
	$html =~ s/_%%StatCode%%_/$_PAYPAL{'ResultStatCancel'}/ig;
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/html; charset=UTF-8\n\n";
	print $html;
}
elsif($_GET{'callback'} eq 'thanks' && -f "$config{'dir.paypal'}$_GET{'token'}.cgi") {
	@token = &_DB("$config{'dir.paypal'}$_GET{'token'}.cgi");
	for(my($cnt)=0;$cnt<@token;$cnt++){
		($name,$value) = split(/\t/,$token[$cnt]);
		$value =~ s/<br \/>/\n/ig;
		$_POST{$name} = $value;
		if($name eq 'email' && !($value =~ /[^a-zA-Z0-9\.\@\-\_\+]/) && split(/\@/,$value) == 2){
			$config{'mailto'} = $value;
			$config{'mailto'} =~ s/ //ig;
		}
		$_PAYPAL{'result_body'} =~ s/<_${name}_>/$value/ig;
	}
	unlink "$config{'dir.paypal'}$_GET{'token'}.cgi";
	
	## GetExpressCheckoutDetails API
	use LWP::UserAgent;
	use HTTP::Request::Common qw(POST);
	$formdata{'USER'} = $_PAYPAL{'API_USER'};
	$formdata{'PWD'} = $_PAYPAL{'API_PWD'};
	$formdata{'SIGNATURE'} = $_PAYPAL{'API_SIGNATURE'};
	$formdata{'VERSION'} = '63.0';
	$formdata{'TOKEN'} = $_GET{'token'};
	$formdata{'METHOD'} = 'GetExpressCheckoutDetails';
	$req  = POST($_PAYPAL{'HOST'}, [%formdata]);
	$ua = LWP::UserAgent->new;
	$ua->agent('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
	$req->referer($url);
	$res = $ua->request($req);
	$doc = $res->content;
	#&_PAYPAL_RESPONSE($doc);
	my($buffer) = $doc;
	@pairs = split(/&/, $buffer);
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$_PAYPAL_RESPONSE_VALUE{$name} = $value;
		$_PAYPAL_RESPONSE_VAL .= $name . " : " . $value . "\n";
	}
	
	%formdata = ();
	$formdata{'USER'} = $_PAYPAL{'API_USER'};
	$formdata{'PWD'} = $_PAYPAL{'API_PWD'};
	$formdata{'SIGNATURE'} = $_PAYPAL{'API_SIGNATURE'};
	$formdata{'VERSION'} = '63.0';
	$formdata{'PAYMENTACTION'} = 'Sale';
	@items = split(/\n/,$_POST{'mfp_cart'});
	$ProductCount = 0;
	$AmtTotal = 0;
	for(my($cnt)=0;$cnt<@items;$cnt++){
		($ProductName,$ProductId,$ProductAmt,$ProductQty) = split(/\,/,$items[$cnt]);
		if($ProductQty > 0){
			$hash = "L_PAYMENTREQUEST_0_NAME${ProductCount}";
			$formdata{$hash} = $ProductName;
			$hash = "L_PAYMENTREQUEST_0_NUMBER${ProductCount}";
			$formdata{$hash} = $ProductId;
			$hash = "L_PAYMENTREQUEST_0_AMT${ProductCount}";
			$formdata{$hash} = $ProductAmt;
			$hash = "L_PAYMENTREQUEST_0_QTY${ProductCount}";
			$formdata{$hash} = $ProductQty;
			$AmtTotal += ($ProductAmt * $ProductQty);
			$ProductCount++;
		}
	}
	$formdata{'PAYERID'} = $_PAYPAL_RESPONSE_VALUE{'PAYERID'};
	$formdata{'TOKEN'} = $_GET{'token'};
	$formdata{'AMT'} = $amt_total;
	$formdata{'PAYMENTREQUEST_0_AMT'} = $AmtTotal;
	$formdata{'PAYMENTREQUEST_0_CURRENCYCODE'} = 'JPY';
	$formdata{'METHOD'} = 'DoExpressCheckoutPayment';
	$req  = POST($_PAYPAL{'HOST'}, [%formdata]);
	$ua = LWP::UserAgent->new;
	$ua->agent('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
	$req->referer($url);
	$res = $ua->request($req);
	$doc = $res->content;
	
	$_PAYPAL_RESPONSE_VAL = "";
	%_PAYPAL_RESPONSE_VALUE = ();
	
	my($buffer) = $doc;
	@pairs = split(/&/, $buffer);
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$_PAYPAL_RESPONSE_VALUE{$name} = $value;
		$_PAYPAL_RESPONSE_VAL .= $name . " : " . $value . "\n";
	}
	
	if($_PAYPAL_RESPONSE_VALUE{'ACK'} eq 'Success'){
		$_PAYPAL{'result_body'} =~ s/<_paypal_result_>/$_PAYPAL{'ResultStatSuccess'}/ig;
	}
	else {
		$_PAYPAL{'result_body'} =~ s/<_paypal_result_>/$_PAYPAL{'ResultStatBreak'}/ig;
	}
	$_PAYPAL{'result_body'} =~ s/<_paypal_response_>/$_PAYPAL_RESPONSE_VAL/ig;
	
	$_PAYPAL{"result_subject"} = sprintf($_PAYPAL{"result_subject"},$_POST{'mfp_serial'});
	#unlink "$config{'dir.paypal'}$_GET{'token'}.cgi";
	if($config{'fixed'} || $config{'mailto'} eq $null){
		$config{'mailto'} = $mailto[0];
	}
	for(my($cnt)=0;$cnt<@mailto;$cnt++){
		&_SENDMAIL($mailto[$cnt],$config{'mailto'},$config{'mailto'},$_PAYPAL{"result_subject"},$_PAYPAL{'result_body'},join('',@AttachedFiles));
	}
	
	$config{'ThanksPage'} = sprintf($config{'ThanksPage'},$_POST{'mfp_serial'});
	&_REDIRECT($config{'ThanksPage'});
}
else {
	&_Error(0);
}
exit;
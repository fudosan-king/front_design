if($_POST{'mfp_paypal'}){
	use LWP::UserAgent;
	use HTTP::Request::Common qw(POST);
	@items = split(/\n/,$_ENV{'mfp_cart'});
	
	$formdata{'USER'} = $_PAYPAL{'API_USER'};
	$formdata{'PWD'} = $_PAYPAL{'API_PWD'};
	$formdata{'SIGNATURE'} = $_PAYPAL{'API_SIGNATURE'};
	$formdata{'VERSION'} = '63.0';
	$formdata{'PAYMENTACTION'} = 'Sale';
	$formdata{'HDRIMG'} = $_PAYPAL{'HDRIMG'};
	$formdata{'BRANDNAME'} = $_PAYPAL{'BRANDNAME'};
	
	if($config{'file.PayPalItemSecureMatch'} ne $null && -f $config{'file.PayPalItemSecureMatch'}){
		@ItemDB = &_DB($config{'file.PayPalItemSecureMatch'});
	}
	
	$ProductCount = 0;
	$AmtTotal = 0;
	for(my($cnt)=0;$cnt<@items;$cnt++){
		($ProductName,$ProductId,$ProductAmt,$ProductQty) = split(/\,/,$items[$cnt]);
		
		$secure = 1;
		if($config{'file.PayPalItemSecureMatch'} ne $null && -f $config{'file.PayPalItemSecureMatch'}){
			($SecureId,$SecureAmt) = split(/\t/,(grep(/^${ProductId}\t/,@ItemDB))[0]);
			if($SecureId ne $ProductId || $SecureAmt ne $ProductAmt){
				$secure = 0;
			}
		}
		if($ProductQty > 0 && $secure){
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
	$formdata{'PAYMENTREQUEST_0_AMT'} = $AmtTotal;
	$formdata{'PAYMENTREQUEST_0_CURRENCYCODE'} = 'JPY';
	$formdata{'RETURNURL'} = $_PAYPAL{'RETURNURL'};
	$formdata{'CANCELURL'} = $_PAYPAL{'CANCELURL'};
	$formdata{'METHOD'} = 'SetExpressCheckout';
	
	if($AmtTotal > 0){
		$req  = POST($_PAYPAL{'HOST'}, [%formdata]);
		$ua = LWP::UserAgent->new;
		$ua->agent('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
		$req->referer($url);
		$res = $ua->request($req);
		$doc = $res->content;
		&_PAYPAL_RESPONSE($doc);
		$config{"ThanksPage"} = $_PAYPAL{'REDIRECTURI'} . $_PAYPAL_RESPONSE_VALUE{'TOKEN'};
		flock(FH, LOCK_EX);
			open(FH,">$config{'dir.paypal'}$_PAYPAL_RESPONSE_VALUE{'TOKEN'}\.cgi");
				foreach $key ( keys %_POST ) {
					$value = $_POST{$key};
					$value =~ s/\t//ig;
					$value =~ s/\n/<br \/>/ig;
					print FH "${key}\t${value}\n";
				}
				foreach $key ( keys %_ENV ) {
					$value = $_ENV{$key};
					$value =~ s/\t//ig;
					$value =~ s/\n/<br \/>/ig;
					print FH "${key}\t${value}\n";
				}
			close(FH);
		flock(FH, LOCK_NB);
	}
}
1;
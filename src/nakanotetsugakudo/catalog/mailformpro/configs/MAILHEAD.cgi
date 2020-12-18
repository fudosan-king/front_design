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
	if($config{'bcc'} ne $null && $config{'bcc'} ne $mailto){
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
1;
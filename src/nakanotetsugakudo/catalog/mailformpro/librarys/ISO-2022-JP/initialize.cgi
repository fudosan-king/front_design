sub _MAILHEADER {
	my($to,$from,$name,$subject,$body,$attached,$htmlmail) = @_;
	my $str;
	
	use Encode;
	Encode::from_to($subject,'utf8','iso-2022-jp');
	Encode::from_to($name,'utf8','iso-2022-jp');
	Encode::from_to($body,'utf8','iso-2022-jp');
	
	$subject = &_MIME($subject,'ISO-2022-JP');
	$from = &_MIME("${name}",'ISO-2022-JP') . "<${from}>";
	$body = encode_base64($body);
	
	$str = "Subject: ${subject}\n";
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
	$str .= "MIME-Version: 1.0\n";
	
	$str .= "--$config{'Boundary'}\n";
	$str .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n";
	$str .= "Content-Transfer-Encoding: Base64\n";
	$str .= "Content-Disposition: inline\n\n";
	$str .= "${body}\n";
	$str .= $attached;
	$str .= "--$config{'Boundary'}--\n";
	return $str;
}
1;
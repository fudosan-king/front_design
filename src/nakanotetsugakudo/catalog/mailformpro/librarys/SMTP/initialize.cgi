use Net::SMTP;
if($config{'POPserver'}){
	use Net::POP3;
}

sub _SENDMAIL {
	my($to,$from,$name,$subject,$body,$attached,$htmlmail) = @_;
	if($config{'POPserver'}){
		$POP = Net::POP3->new($config{'POPserver'},Timeout => 20);
		if($POP){
			$POP->login($config{'POPuser'},$config{'POPpasswd'});
			$POP->quit;
		}
		else {
			&_SENDMAIL_ERROR("can't connect pop server");
		}
	}
	($sec,$min,$hour,$mday,$mon,$year,$wday) = localtime(time);
	@week = ('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
	@month = ('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$smtpdate = sprintf("%s, %d %s %04d %02d:%02d:%02d +0900 (JST)",$week[$wday],$mday,$month[$mon],$year+1900,$hour,$min,$sec);
	my $SMTP;
	if($config{'SMTPport'}){
		$SMTP = Net::SMTP->new($config{'SMTPserver'}, Timeout=>20, Hello=>$config{'SMTPserver'},Port=>$config{'SMTPport'});
	}
	else {
		$SMTP = Net::SMTP->new($config{'SMTPserver'}, Timeout=>20, Hello=>$config{'SMTPserver'});
	}
	
	if($SMTP){
		if($config{'SMTPuser'} ne $null && $config{'SMTPpasswd'} ne $null){
			if($SMTP->auth($config{'SMTPuser'},$config{'SMTPpasswd'})){
				$SMTP->mail($from);
				$SMTP->to($to);
				$SMTP->data();
				$SMTP->datasend("Date: ${smtpdate}\n");
				$SMTP->datasend(&_MAILHEADER($to,$from,$name,$subject,$body,$attached,$htmlmail));
				$SMTP->dataend();
				$SMTP->quit;
			}
			else {
				&_SENDMAIL_ERROR("can't login smtp server");
			}
		}
		else {
			$SMTP->mail($from);
			$SMTP->to($to);
			$SMTP->data();
			$SMTP->datasend("Date: ${smtpdate}\n");
			$SMTP->datasend(&_MAILHEADER($to,$from,$name,$subject,$body,$attached,$htmlmail));
			$SMTP->dataend();
			$SMTP->quit;
		}
	}
	else {
		&_SENDMAIL_ERROR("can't connect smtp server");
	}
}
1;
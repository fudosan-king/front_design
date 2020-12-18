unshift @_ENV,'ReplyTime';
$ReplyTimeHash = &_HASH(time . "." . $ENV{'REMOTE_ADDR'} . $_ENV{'mfp_serial'});
$_ENV{'ReplyTime'} = "返信が完了後に以下のURLにアクセスしてください。\n";
if(index($ENV{'REQUEST_URI'},'?') > -1){
	$_ENV{'ReplyTime'} .= "http://$ENV{'HTTP_HOST'}$ENV{'REQUEST_URI'}&module=ReplyTime&key=${ReplyTimeHash}";
}
else {
	$_ENV{'ReplyTime'} .= "http://$ENV{'HTTP_HOST'}$ENV{'REQUEST_URI'}?module=ReplyTime&key=${ReplyTimeHash}";
}
1;
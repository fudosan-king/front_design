&_POST;

($sec,$min,$hour,$day,$mon,$year) = localtime(time);
$config{'CountDataDownloadName'} = sprintf("%04d-%02d-%02d.csv",$year+1900,$mon+1,$day,$hour,$min,$sec);

if($config{"count.password"} ne $null && $config{"count.password"} eq $_POST{'password'} && ($config{'count.DownloadURIPassCode'} eq $null || $config{'count.DownloadURIPassCode'} eq $_GET{'key'})){
	$HostName = &_GETHOST;
	if(($config{'count.DownloadHostName'} eq $HostName || $config{'count.DownloadHostName'} eq $null) && ($config{'count.DownloadIPAddress'} eq $ENV{'REMOTE_ADDR'} || $config{'count.DownloadIPAddress'} eq $null)){
		if($_POST{'method'} eq 'download'){
			if(-f $config{"file.count"}){
				$size = -s $config{"file.count"};
				$csv = &_LOAD($config{"file.count"});
				$csv =~ s/\t/\,/ig;
				use Encode;
				Encode::from_to($csv,'utf8','cp932');
				print "Content-type:application/octet-stream;charset=Shift_JIS; name=\"$config{'CountDataDownloadName'}\"\n";
				print "Content-Disposition: attachment; filename=\"$config{'CountDataDownloadName'}\"\n";
				print "Content-length: ${size}\n\n";
				print $csv;
			}
			else {
				&_Error(0);
			}
		}
		elsif($_POST{'method'} eq 'delete'){
			&_SAVE($config{"file.count"},'');
			print "Location: $ENV{'HTTP_REFERER'}#Complete\n\n";
		}
	}
	else {
		&_Error(0);
	}
}
else {
	if($config{"count.password"} ne $null){
		if($config{'count.DownloadURIPassCode'} eq $null || $config{'count.DownloadURIPassCode'} eq $_GET{'key'}){
			## Display Process
			$html = &_LOAD("./librarys/count/download.tpl");
			$HostName = &_GETHOST;
			$html =~ s/_%%HostName%%_/$HostName/ig;
			$html =~ s/_%%IPAddres%%_/$ENV{'REMOTE_ADDR'}/ig;
			print "Pragma: no-cache\n";
			print "Cache-Control: no-cache\n";
			print "Content-type: text/html; charset=UTF-8\n\n";
			print $html;
		}
		else {
			&_Error(0);
		}
	}
	else {
		&_Error(0);
	}
}
exit;
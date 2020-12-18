&_GET;
print "Pragma: no-cache\n";
print "Cache-Control: no-cache\n";
print "Content-type: plain/text; charset=UTF-8\n\n";
if($_GET{'key'} eq $config{'mfp.address.connect.uri.key'} && $ENV{'HTTP_USER_AGENT'} eq $config{'mfp.address.connect.auth.key'}){
	## Success Process
	flock(FH, LOCK_EX);
		open(FH,$config{'file.address.connect.data'});
			@data = <FH>;
		close(FH);
	flock(FH, LOCK_NB);
	my $data = join('',@data);
	$data =~ s/\r//ig;
	my $size = length $data;
	if($size > 0){
		print $data;
		## Remove Data
		flock(FH, LOCK_EX);
			open(FH,">$config{'file.address.connect.data'}");
				print FH $null;
			close(FH);
		flock(FH, LOCK_NB);
	}
}
exit;
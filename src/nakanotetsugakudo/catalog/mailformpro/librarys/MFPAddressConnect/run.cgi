my @AddressData = ();
flock(FH, LOCK_EX);
	open(FH,$config{'file.address.connect.data'});
		@AddressData = <FH>;
	close(FH);
flock(FH, LOCK_NB);
my $AddressData = join('',@AddressData);
$AddressData =~ s/\r//ig;
@AddressData = split(/\n/,$AddressData);

$_TEXT{'MFPAddressConnectArch'} =~ s/\r//ig;
$_TEXT{'MFPAddressConnectArch'} =~ s/\n//ig;

push @AddressData,$_TEXT{'MFPAddressConnectArch'};
$AddressData = join("\n",@AddressData);

flock(FH, LOCK_EX);
	open(FH,">$config{'file.address.connect.data'}");
		print FH "${AddressData}\n";
	close(FH);
flock(FH, LOCK_NB);

1;
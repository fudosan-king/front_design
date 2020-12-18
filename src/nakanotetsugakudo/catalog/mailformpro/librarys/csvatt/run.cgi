use Encode;
if($_CSV){
	foreach $key (keys(%_POST)){
		$value = $_POST{$key};
		$value =~ s/\"/\'/ig;
		$value =~ s/\,/，/ig;
		$_CSV =~ s/<_${key}_>/$value/ig;
	}
	$_CSV =~ s/<_.*?_>//ig;
	Encode::from_to($_CSV,'utf8','cp932');
	push @AttachedFiles,&_ATTACHED('data.csv',$_CSV);
}
1;
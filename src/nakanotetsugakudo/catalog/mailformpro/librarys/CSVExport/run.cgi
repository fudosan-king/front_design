use Encode;

if($config{'CSVexport'} ne $null && -f $config{'CSVexport'}){
	#Encode::from_to($_TEXT{'CSV'},'utf8','cp932');
	if($config{'CryptKey'} ne $null){
		$csv = &_CSVDECRYPT(&_LOAD($config{"file.csv"})) . $_TEXT{'CSV'} . "\n";
		&_SAVE($config{"file.csv"},&_CSVCRYPT($csv));
	}
	else {
		&_ADDSAVE($config{"file.csv"},$_TEXT{'CSV'});
	}
}
else {
	my($csv) = "";
	my(@csv) = ();
	my(@fields) = ();
	for(my($cnt)=0;$cnt<@ELEMENTS;$cnt++){
		if(!($ELEMENTS[$cnt] =~ /^mfp_/si)){
			$name = &_NAME($ELEMENTS[$cnt]);
			$value = $_POST{$ELEMENTS[$cnt]};
			$value =~ s/\"/\"\"/ig;
			push @fields,"\"${name}\"";
			push @csv,"\"${value}\"";
		}
	}
	unshift @fields,'Date';
	unshift @csv,$_ENV{'mfp_date'};
	unshift @fields,'Serial';
	unshift @csv,$_ENV{'mfp_serial'};
	
	if(!(-f $config{"file.csv"}) || -s $config{"file.csv"} == 0){
		$csv = join(',',@fields) . "\n";
	}
	$csv .= join(',',@csv);
	#Encode::from_to($csv,'utf8','cp932');
	if($config{'CryptKey'} ne $null){
		$csv = &_CSVDECRYPT(&_LOAD($config{"file.csv"})) . $csv . "\n";
		&_SAVE($config{"file.csv"},&_CSVCRYPT($csv));
	}
	else {
		&_ADDSAVE($config{"file.csv"},$csv);
	}
}
1;
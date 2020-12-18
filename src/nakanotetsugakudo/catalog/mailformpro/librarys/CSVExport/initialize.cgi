if($config{'CSVexport'} ne $null && -f $config{'CSVexport'}){
	$_TEXT{'CSV'} = &_LOAD($config{'CSVexport'});
}
if($config{"password"} ne $null){
	unshift @_ENV,'CSVManager';
	$_ENV{'CSVManager'} = $config{'uri'} . "?module=CSVExport&key=$config{'CSVDownloadURIPassCode'}";
}
1;
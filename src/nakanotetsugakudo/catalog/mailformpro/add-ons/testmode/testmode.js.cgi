if($_GET{'callback'}){
	$js = "$_GET{'callback'}('" . join(",",@mailto) . "','" . join("','",@testmailto) . "')";
}
1;
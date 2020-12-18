if($_GET{'callback'}){
	$js = "$_GET{'callback'}(\['" . join("','",@TabooWords) . "'\])";
}
1;
@db = split(/\n/,&_LOAD($config{"file.regist.db"}));
if($_POST{$config{"regist.element"}} eq $config{"regist.element.join"}){
	@db = grep(!/^$_POST{'email'}\t/,@db);
	push @db,$_TEXT{"regist.field"};
}
else {
	@db = grep(!/^$_POST{'email'}\t/,@db);
}
&_SAVE($config{"file.regist.db"},join("\n",@db));
1;
if($_POST{'email'} && !($_POST{'email'} =~ /[^a-zA-Z0-9\.\@\-\_\+]/) && split(/\@/,$_POST{'email'}) == 2){
	push @mailto,$_POST{'email'};
}
1;
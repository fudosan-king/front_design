use Encode;
if($config{'vCard_sjis'}){
	Encode::from_to($_TEXT{'vCard'},'utf8','cp932');
}
push @AttachedFiles,&_ATTACHED('vCard.vcf',$_TEXT{'vCard'});
1;
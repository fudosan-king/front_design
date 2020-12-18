sub stresslabel {
	my($a,$b,$c,$d,$e,$num,$mode) = @_;
	my @label = ('','低い／少い','やや低い／少い','普通','やや高い／多い','高い／多い');
	my $point = 0;
	if($num <= $a){
		$point = 1;
	}
	elsif($num <= $b){
		$point = 2;
	}
	elsif($num <= $c){
		$point = 3;
	}
	elsif($num <= $d){
		$point = 4;
	}
	else {
		$point = 5;
	}
	
	$score = $point;
	if(!$mode){
		$score = 6 - $point;
	}
	$_ENV{'stress'} .= "${point} 点（" . $label[$point] . "）\n";
	return $score;
}

unshift @_ENV,'stress';
unshift @_ENV,'stresscall';

if($_POST{'A-11'}){
	$lang{'stress'} = '職業性ストレス簡易調査票（57項目）';
	$_ENV{'stress'} .= "【ストレスの原因と考えられる因子】\n";
	my @score = ();
	$_ENV{'stress'} .= "心理的な仕事の負担（量）：";
	my $point = 15 - ($_POST{'A-01'} + $_POST{'A-02'} + $_POST{'A-03'});
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(5,7,9,11,12,$point);
	}
	else {
		$score[0] += &stresslabel(4,6,9,11,12,$point);
	}
	
	$_ENV{'stress'} .= "心理的な仕事の負担（質）：";
	my $point = 15 - ($_POST{'A-04'} + $_POST{'A-05'} + $_POST{'A-06'});
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(5,7,9,11,12,$point);
	}
	else {
		$score[0] += &stresslabel(4,6,8,10,12,$point);
	}
	
	
	$_ENV{'stress'} .= "自覚的な身体的負担度：";
	my $point = 5 - $_POST{'A-07'};
	$score[0] += &stresslabel(0,1,2,3,4,$point);
	
	
	$_ENV{'stress'} .= "職場の対人関係でのストレス：";
	my $point = 10 - ($_POST{'A-12'} + $_POST{'A-13'} ) + $_POST{'A-14'};
	$score[0] += &stresslabel(3,5,7,9,12,$point);
	
	
	$_ENV{'stress'} .= "職場環境によるストレス：";
	my $point = 5 - $_POST{'A-15'};
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(0,1,2,3,4,$point);
	}
	else {
		$score[0] += &stresslabel(1,1,2,3,4,$point);
	}
	
	
	$_ENV{'stress'} .= "仕事のコントロール度：";
	my $point = 15 - ($_POST{'A-08'}+$_POST{'A-09'}+$_POST{'A-10'});
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(4,6,8,10,12,$point,1);
	}
	else {
		$score[0] += &stresslabel(3,5,8,10,12,$point,1);
	}
	
	$_ENV{'stress'} .= "技能の活用度：";
	my $point = $_POST{'A-11'};
	$score[0] += &stresslabel(1,2,3,4,4,$point,1);
	
	$_ENV{'stress'} .= "仕事の適性度：";
	my $point = 5 - $_POST{'A-16'};
	$score[0] += &stresslabel(1,2,3,3,4,$point,1);
	
	$_ENV{'stress'} .= "働きがい：";
	my $point = 5 - $_POST{'A-17'};
	$score[0] += &stresslabel(1,2,3,3,4,$point,1);
	
	
	$_ENV{'stress'} .= "\n【ストレスによっておこる心身の反応】\n";
	
	$_ENV{'stress'} .= "活気：";
	my $point = $_POST{'B-01'} + $_POST{'B-02'} + $_POST{'B-03'};
	$score[1] += &stresslabel(3,5,7,9,12,$point,1);
	
	
	$_ENV{'stress'} .= "イライラ感：";
	my $point = $_POST{'B-04'}+$_POST{'B-05'}+$_POST{'B-06'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(3,5,7,9,12,$point);
	}
	else {
		$score[1] += &stresslabel(3,5,8,10,12,$point);
	}
	
	
	$_ENV{'stress'} .= "疲労感：";
	my $point = $_POST{'B-07'}+$_POST{'B-08'}+$_POST{'B-09'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(3,4,7,10,12,$point);
	}
	else {
		$score[1] += &stresslabel(3,5,8,11,12,$point);
	}
	
	
	$_ENV{'stress'} .= "不安感：";
	my $point = $_POST{'B-10'}+$_POST{'B-11'}+$_POST{'B-12'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(3,4,7,9,12,$point);
	}
	else {
		$score[1] += &stresslabel(3,4,7,10,12,$point);
	}
	
	
	$_ENV{'stress'} .= "抑うつ感：";
	my $point = $_POST{'B-13'}+$_POST{'B-14'}+$_POST{'B-15'}+$_POST{'B-16'}+$_POST{'B-17'}+$_POST{'B-18'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(6,8,12,16,24,$point);
	}
	else {
		$score[1] += &stresslabel(6,8,12,17,24,$point);
	}
	
	
	$_ENV{'stress'} .= "身体愁訴：";
	my $point = $_POST{'B-19'}+$_POST{'B-20'}+$_POST{'B-21'}+$_POST{'B-22'}+$_POST{'B-23'}+$_POST{'B-24'}+$_POST{'B-25'}+$_POST{'B-26'}+$_POST{'B-27'}+$_POST{'B-28'}+$_POST{'B-29'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(11,15,21,26,44,$point);
	}
	else {
		$score[1] += &stresslabel(13,17,23,29,44,$point);
	}
	
	$_ENV{'stress'} .= "\n【ストレス反応に影響を与える他の因子】\n";
	
	$_ENV{'stress'} .= "上司からのサポート：";
	my $point = 15 - ($_POST{'C-01'}+$_POST{'C-04'}+$_POST{'C-07'});
	if($_POST{'sex'} eq '1'){
		$score[2] += &stresslabel(4,6,8,10,12,$point,1);
	}
	else {
		$score[2] += &stresslabel(3,5,7,10,12,$point,1);
	}
	
	$_ENV{'stress'} .= "同僚からのサポート：";
	my $point = 15 - ($_POST{'C-02'}+$_POST{'C-05'}+$_POST{'C-08'});
	$score[2] += &stresslabel(5,7,9,11,12,$point,1);
	
	$_ENV{'stress'} .= "家族・友人からのサポート：";
	my $point = 15 - ($_POST{'C-03'}+$_POST{'C-06'}+$_POST{'C-09'});
	$score[2] += &stresslabel(6,8,9,11,12,$point,1);
	
	$_ENV{'stress'} .= "仕事や生活の満足度：";
	my $point = 10 - ($_POST{'D-01'}+$_POST{'D-02'});
	$score[2] += &stresslabel(3,4,6,7,8,$point,1);
	
	
	$lang{'stresscall'} = '高ストレス状態';
	$_ENV{'stresscall'} = "非該当";
	
	if($score[1] <= 12){
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
	elsif(($score[0]+$score[2]) <= 26 && $score[1] <= 17){
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
	else {
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "非該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
}
else {
	$lang{'stress'} = '職業性ストレス簡易調査票の簡略版（23項目）';
	$_ENV{'stress'} .= "【ストレスの原因と考えられる因子】\n";
	
	my @score = ();
	$_ENV{'stress'} .= "心理的な仕事の負担（量）：";
	my $point = 15 - ($_POST{'A-01'} + $_POST{'A-02'} + $_POST{'A-03'});
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(5,7,9,11,12,$point);
	}
	else {
		$score[0] += &stresslabel(4,6,9,11,12,$point);
	}
	
	$_ENV{'stress'} .= "仕事のコントロール度：";
	my $point = 15 - ($_POST{'A-08'}+$_POST{'A-09'}+$_POST{'A-10'});
	if($_POST{'sex'} eq '1'){
		$score[0] += &stresslabel(4,6,8,10,12,$point,1);
	}
	else {
		$score[0] += &stresslabel(3,5,8,10,12,$point,1);
	}
	
	$_ENV{'stress'} .= "\n【ストレスによっておこる心身の反応】\n";
	
	$_ENV{'stress'} .= "疲労感：";
	my $point = $_POST{'B-07'}+$_POST{'B-08'}+$_POST{'B-09'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(3,4,7,10,12,$point);
	}
	else {
		$score[1] += &stresslabel(3,5,8,11,12,$point);
	}
	
	
	$_ENV{'stress'} .= "不安感：";
	my $point = $_POST{'B-10'}+$_POST{'B-11'}+$_POST{'B-12'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(3,4,7,9,12,$point);
	}
	else {
		$score[1] += &stresslabel(3,4,7,10,12,$point);
	}
	
	
	$_ENV{'stress'} .= "抑うつ感：";
	my $point = $_POST{'B-13'}+$_POST{'B-14'}+$_POST{'B-15'}+$_POST{'B-16'}+$_POST{'B-17'}+$_POST{'B-18'};
	if($_POST{'sex'} eq '1'){
		$score[1] += &stresslabel(6,8,12,16,24,$point);
	}
	else {
		$score[1] += &stresslabel(6,8,12,17,24,$point);
	}
	
	$_ENV{'stress'} .= "食欲不振：";
	my $point = $_POST{'B-27'};
	$score[1] += &stresslabel(1,1,2,3,4,$point);
	
	$_ENV{'stress'} .= "不眠：";
	my $point = $_POST{'B-29'};
	$score[1] += &stresslabel(1,1,2,3,4,$point);
	
	
	$_ENV{'stress'} .= "\n【ストレス反応に影響を与える他の因子】\n";
	
	$_ENV{'stress'} .= "上司からのサポート：";
	my $point = 15 - ($_POST{'C-01'}+$_POST{'C-04'}+$_POST{'C-07'});
	if($_POST{'sex'} eq '1'){
		$score[2] += &stresslabel(4,6,8,10,12,$point,1);
	}
	else {
		$score[2] += &stresslabel(3,5,7,10,12,$point,1);
	}
	
	$_ENV{'stress'} .= "同僚からのサポート：";
	my $point = 15 - ($_POST{'C-02'}+$_POST{'C-05'}+$_POST{'C-08'});
	$score[2] += &stresslabel(5,7,9,11,12,$point,1);
	
	
	$lang{'stresscall'} = '高ストレス状態';
	$_ENV{'stresscall'} = "非該当";
	
	if($score[1] <= 11){
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
	elsif(($score[0]+$score[2]) <= 8 && $score[1] <= 16){
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
	else {
		my $point = $score[0]+$score[2];
		$_ENV{'stresscall'} = "非該当（仕事のストレス要因 ${point}点／心身のストレス反応 ${score[1]}点）";
	}
}
1;
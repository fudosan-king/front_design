my $str;
$str = "--$config{'Boundary'}\n";
$str .= "Content-Type: text/html; charset=\"UTF-8\"\n";
$str .= "Content-Transfer-Encoding: Base64\n";
$str .= "Content-Disposition: inline\n\n";
$str .= encode_base64($_HTML{'HTMLMail'}) . "\n\n";
push @ResAttachedFiles,$str;
1;
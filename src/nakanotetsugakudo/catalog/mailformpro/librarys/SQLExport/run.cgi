use DBI;
$db = DBI->connect($config{'SQLserver'}, $config{'SQLuser'}, $config{'SQLpasswd'});
$db->do('set names utf8');
$_HTML{'SQL'} =~ s/<br \/>/\n/ig;
$sth = $db->prepare($_HTML{'SQL'});
$sth->execute;
$sth->finish;
$db->disconnect;
1;
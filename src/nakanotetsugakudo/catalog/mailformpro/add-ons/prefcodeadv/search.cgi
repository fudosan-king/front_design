#!/usr/bin/perl

use CGI::Carp qw(fatalsToBrowser);
&_GET;
@db = &_DB("./postcode.db.cgi");
$_GET{'q'} =~ s/\-//ig;
@q = split(/ /,$_GET{'q'});
for(my $cnt=0;$cnt<@q;$cnt++){
	if($q[$cnt] =~ /[0-9]/si){
		@db = grep(/^$q[$cnt]/,@db);
	}
	else {
		@db = grep(/$q[$cnt]/,@db);
	}
}
for(my $cnt=0;$cnt<@db;$cnt++){
	@r = split(/\,/,$db[$cnt]);
	push @json,"\['${r[0]}','${r[1]}','${r[2]}','${r[3]}'\]";
}
$json = join("\,",@json);
print "Content-type: text/javascript;charset=UTF-8\n\n";
print "serachCallback(\[${json}\])";
exit;
sub _DB {
	my($path) = @_;
	my @loader = ();
	flock(FH, LOCK_EX);
		open(FH,$path);
			@loader = <FH>;
		close(FH);
	flock(FH, LOCK_NB);
	$loader = join('',@loader);
	$loader =~ s/\r//ig;
	@loader = split(/\n/,$loader);
	return @loader;
}
sub _GET {
	if ($ENV{'REQUEST_METHOD'} eq "POST") {
		read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
	}
	else {
		$buffer = $ENV{'QUERY_STRING'};
	}
	@pairs = split(/&/, $buffer);
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$_GET{$name} = $value;
	}
}

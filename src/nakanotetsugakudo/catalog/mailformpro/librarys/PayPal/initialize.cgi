sub _PAYPAL_RESPONSE {
	my($buffer) = @_;
	@pairs = split(/&/, $buffer);
	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$name =~ tr/+/ /;
		$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$_PAYPAL_RESPONSE_VALUE{$name} = $value;
		$_PAYPAL_RESPONSE_VAL .= $name . " : " . $value . "\n";
	}
}
1;
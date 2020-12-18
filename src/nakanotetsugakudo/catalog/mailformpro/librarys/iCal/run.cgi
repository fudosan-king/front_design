$_HTML{'iCal.Summary'} =~ s/<br \/>/\\n/ig;
$_HTML{'iCal.Summary'} =~ s/\://ig;
$_HTML{'iCal.Summary'} =~ s/\;//ig;
$_HTML{'iCal.Description'} =~ s/<br \/>/\\n/ig;
$_HTML{'iCal.Description'} =~ s/\://ig;
$_HTML{'iCal.Description'} =~ s/\;//ig;

$_HTML{'iCal.Date'} =~ s/\///ig;
$_HTML{'iCal.Date'} =~ s/\-//ig;
$_HTML{'iCal.Date'} =~ s/\://ig;

#my($date,$time) = split(/T/,$_HTML{'iCal.Date'});

@cal = ($_ENV{'mfp_serial'},$_HTML{'iCal.Date'},$_HTML{'iCal.Summary'},$_HTML{'iCal.Description'});
&_ADDSAVE($config{'file.iCal.path'},join("\t",@cal));
@cals = &_DB($config{'file.iCal.path'});

$iCal = "BEGIN:VCALENDAR\n";
$iCal .= "METHOD:PUBLISH\n";
$iCal .= "VERSION:2.0\n";
$iCal .= "X-WR-CALNAME:$config{'iCal.Name'}\n";
$iCal .= "PRODID:-//SYNCKTECHNICA.//Mailformpro 3.1.3//EN\n";
$iCal .= "X-APPLE-CALENDAR-COLOR:$config{'iCal.BgColor'}\n";
$iCal .= "X-WR-TIMEZONE:$config{'iCal.TimeZone'}\n";
$iCal .= "CALSCALE:GREGORIAN\n";
for(my($cnt)=0;$cnt<@cals;$cnt++){
	($id,$DATE,$SUMMARY,$DESCRIPTION) = split(/\t/,$cals[$cnt]);
	$iCal .= "BEGIN:VEVENT\n";
	$iCal .= "UID:Mailformpro${id}\n";
	$iCal .= "DTSTART;TZID=$config{'iCal.TimeZone'}:${DATE}\n";
	$iCal .= "SUMMARY:${SUMMARY}\n";
	if($DESCRIPTION ne $null){
		$iCal .= "DESCRIPTION:${DESCRIPTION}\n";
	}
	$iCal .= "BEGIN:VALARM\n";
	$iCal .= "TRIGGER:-PT15M\n";
	$iCal .= "ATTACH;VALUE=URI:Basso\n";
	$iCal .= "ACTION:AUDIO\n";
	$iCal .= "END:VALARM\n";
	$iCal .= "END:VEVENT\n";
}
$iCal .= "BEGIN:VTIMEZONE\n";
$iCal .= "TZID:$config{'iCal.TimeZone'}\n";
$iCal .= "BEGIN:STANDARD\n";
$iCal .= "DTSTART:19700101T000000\n";
$iCal .= "TZOFFSETFROM:$config{'iCal.GMT'}\n";
$iCal .= "TZOFFSETTO:$config{'iCal.GMT'}\n";
$iCal .= "END:STANDARD\n";
$iCal .= "END:VTIMEZONE\n";
$iCal .= "END:VCALENDAR\n";
&_SAVE($config{'file.iCal.ics.path'},$iCal);
1;
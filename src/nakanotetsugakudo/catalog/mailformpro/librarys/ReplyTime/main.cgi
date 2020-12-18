if($_GET{'key'} ne $null){
	@ReplyTimes = &_DB($config{"file.ReplyTime"});
	($ReplyTimeHash,$ReplyTime) = split(/\t/,(grep(/^$_GET{'key'}\t/,@ReplyTimes))[0]);
	if($ReplyTimeHash ne $null){
		@ReplyTimes = grep(!/^$_GET{'key'}\t/,@ReplyTimes);
		&_SAVE($config{"file.ReplyTime"},join("\n",@ReplyTimes));
		$different = time - $ReplyTime;
		@ReplyTimes = &_DB($config{"file.ReplyTime.complete"});
		$ReplyTimes[0]++;
		$ReplyTimes[1] += $different;
		&_SAVE($config{"file.ReplyTime.complete"},join("\n",@ReplyTimes));
		$avg = int($ReplyTimes[1] / $ReplyTimes[0]);
		$score = &_TIMESTR($different);
		$avg = &_TIMESTR($avg);
		my($parts) = <<"		__HTML__";
			<table>
				<tr>
					<th>Average</th>
					<td>${avg}</td>
				</tr>
				<tr>
					<th>Score</th>
					<td>${score}</td>
				</tr>
			</table>
		__HTML__
		$html = &_LOAD("./librarys/ReplyTime/download.tpl");
		$html =~ s/_%%content%%_/$parts/ig;
		print "Pragma: no-cache\n";
		print "Cache-Control: no-cache\n";
		print "Content-type: text/html; charset=UTF-8\n\n";
		print $html;
	}
	else {
		@ReplyTimes = &_DB($config{"file.ReplyTime.complete"});
		$avg = int($ReplyTimes[1] / $ReplyTimes[0]);
		$avg = &_TIMESTR($avg);
		my($parts) = <<"		__HTML__";
			<table>
				<tr>
					<th>Average</th>
					<td>${avg}</td>
				</tr>
			</table>
		__HTML__
		$html = &_LOAD("./librarys/ReplyTime/download.tpl");
		$html =~ s/_%%content%%_/$parts/ig;
		print "Pragma: no-cache\n";
		print "Cache-Control: no-cache\n";
		print "Content-type: text/html; charset=UTF-8\n\n";
		print $html;
	}
}
else {
	&_Error(0);
}
exit;
@ReplyTime = ($ReplyTimeHash,time);
@ReplyTimes = &_DB($config{"file.ReplyTime"});
push @ReplyTimes,join("\t",@ReplyTime);
&_SAVE($config{"file.ReplyTime"},join("\n",@ReplyTimes));
1;
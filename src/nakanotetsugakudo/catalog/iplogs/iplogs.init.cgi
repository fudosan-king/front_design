
$logfile = './iplogs.dat.cgi';
$domain = $ENV{'SERVER_NAME'};
$uri = '//' . $ENV{'SERVER_NAME'} . $ENV{'SCRIPT_NAME'};

## File Size Limit Bytes / 1MB = 1048576 Byte
$maxfilesize = 1048576;

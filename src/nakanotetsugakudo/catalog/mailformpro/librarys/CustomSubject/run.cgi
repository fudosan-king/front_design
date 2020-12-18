$config{'subject'} = $_TEXT{'subject'};
$config{'subject'} =~ s/\n//ig;
$config{'subject'} =~ s/\r//ig;
$config{'subject'} =~ s/\"//ig;
$config{'subject'} =~ s/\\//ig;
1;
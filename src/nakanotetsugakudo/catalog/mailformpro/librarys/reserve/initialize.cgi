unshift @_ENV,'reserve.manager';
$_ENV{'reserve.manager'} = $config{'uri'} . "?module=reserve";
1;
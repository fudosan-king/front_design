$config{'about'} = 'Thanks Module';

## パラメータ保存の有効期限(秒数)
$config{'thanks.expire'} = 30;

## 取得可能ホスト(サンクスページのドメイン)
$config{'thanks.domain'} = $ENV{'HTTP_HOST'};

1;
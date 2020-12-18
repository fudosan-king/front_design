$config{'about'} = 'Cart Module';

## Cart ディレクトリ
$config{'dir.cart'} = "$config{'data.dir'}cart/";

## 商品TSVデータ
## サーバ側での商品情報すり合わせを行う場合は
## 以下を必ず指定してください。
## 商品データは [0] ID , [1] Price , [2] ProductName のTSV形式で構成してください。
$config{'file.item'} = './configs/Items.tsv';

1;
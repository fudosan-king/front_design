
## HTMLメールテンプレートのパス
$config{"HTMLMailAdminTemplate"} = './configs/HTMLMailAdminTemplate.html.cgi';

## 偶数行のスタイル
$_HTMLMAIL{'style1'} = '<tr style="background-color: #FFF;">';

## 奇数行のスタイル
$_HTMLMAIL{'style2'} = '<tr style="background-color: #EDF1F7;">';

## リストのHTML
$_HTMLMAIL{'line'} = <<'__HTML__';
	%s
		<th valign="top" style="padding: 5px 10px;border-top: solid 1px #CCC;text-align: right;">%s</th>
		<td valign="top" style="padding: 5px 10px;border-top: solid 1px #CCC;text-align: left;">%s</td>
	</tr>
__HTML__

1;
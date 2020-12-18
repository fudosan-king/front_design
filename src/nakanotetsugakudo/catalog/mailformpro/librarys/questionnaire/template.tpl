<html>
	<head>
		<meta name="robots" content="noindex" />
		<title>questionnaire</title>
		<style>
			body {
				background-color: #EEE;
				padding: 0px;
				margin: 0px;
				text-align: center;
			}
			div#container {
				border: solid 1px #CCC;
				border-radius: 10px;
				background-color: #FFF;
				margin: 0px;
				padding: 30px 10px;
				width: 480px;
				box-shadow: 0px 0px 10px #CCC;
			}
			h1 {
				padding: 0px 0px 10px 0px;
				margin: 0px;
				font-size: 30px;
				color: #C00;
				text-shadow: 0px 1px 3px #CCC;
				border-bottom: solid 1px #CCC;
			}
			p {
				font-size: 12px;
				line-height: 1.7em;
			}
			a {
				font-size: 14px;
				text-decoration: none;
			}
		</style>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load('visualization', '1.0', {'packages':['corechart']});
			var chartTitles = new Array(_%%titles%%_);
			var chartJsons = new Array(_%%json%%_);
			//google.setOnLoadCallback(drawChart);
			google.setOnLoadCallback(chartInit);
			function chartInit(){
				for(var i=0;i<chartTitles.length;i++)
					chartRender(i);
			}
			function chartRender(num){
				var elm = document.createElement('div');
				elm.id = 'chart'+num;
				document.getElementById('chart_div').appendChild(elm);
				
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Topping');
				data.addColumn('number', 'Slices');
				//alert(chartJsons[num]);
				data.addRows(chartJsons[num]);
				var options = {'title':chartTitles[num],
							 'width':400,
							 'height':300};
				var chart = new google.visualization.PieChart(document.getElementById('chart'+num));
				chart.draw(data, options);
				
			}
			function drawChart() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Topping');
				data.addColumn('number', 'Slices');
				data.addRows([
					['Mushrooms', 3],
					['Onions', 1],
					['Olives', 1],
					['Zucchini', 1],
					['Pepperoni', 2]
				]);
				var options = {'title':'How Much Pizza I Ate Last Night',
							 'width':400,
							 'height':300};
				var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}
		</script>
	</head>
	<body>
		<table border="0" width="100%" height="100%">
			<tr>
				<td align="center" valign="middle">
					<div id="container">
						<h1>questionnaire</h1>
						<div id="chart_div"></div>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
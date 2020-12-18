<html>
	<head>
		<meta name="robots" content="noindex" />
		<title>Mailform Pro Operation Check</title>
		<style>
			body {
				background-color: #EEE;
				padding: 10px;
				margin: 0px;
				text-align: center;
			}
			h1 {
				font-size: 24px;
				padding: 0px 0px 10px 0px;
				color: #232323;
				text-shadow: 0px 0px 5px #CCC;
			}
			h2 {
				font-size: 14px;
				font-weight: normal;
				color: #999;
				padding: 10px 0px;
				margin: 0px;
			}
			table {
				border-spacing: 0px;
				border-collapse: collapse;
				margin: 0px auto;
			}
			table tr th,table tr td {
				padding: 5px 10px;
				font-size: 14px;
				border-top: solid 1px #CCC;
				line-height: 1.5em;
			}
			table tr th {
				white-space: nowrap;
			}
			table tr td strong {
				display: block;
				color: #C00;
			}
			table tr td em {
				display: block;
				color: #F39800;
				font-weight: bolder;
				font-style: normal;
			}
			table tr td p {
				display: block;
				padding: 0px;
				margin: 0px;
			}
			table tr td b {
				color: #008080;
			}
			table tr td span {
				display: block;
				font-weight: bolder;
				color: #090;
			}
			div#container {
				border: solid 1px #CCC;
				border-radius: 10px;
				background-color: #FFF;
				margin: 10px auto;
				padding: 30px 10px;
				width: 640px;
				box-shadow: 0px 0px 10px #CCC;
			}
			input {
				width: 200px;
				text-align: center;
			}
		</style>
		<script>
			window.onload = function(){
				if(location.hash == '#Complete'){
					document.getElementById('stat').innerHTML = 'Delete Complete';
				}
			}
		</script>
	</head>
	<body>
		<div id="container">
			<h1>Mailform Pro Operation Check</h1>
			<h2>_%%version%%_</h2>
			<table>
				_%%result%%_
			</table>
		</div>
	</body>
</html>
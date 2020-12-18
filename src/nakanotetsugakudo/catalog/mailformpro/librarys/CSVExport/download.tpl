<html>
	<head>
		<meta name="robots" content="noindex" />
		<title>Mailform Pro CSV Data Manager</title>
		<style>
			body {
				background-color: #EEE;
				padding: 10px;
				margin: 0px;
				text-align: center;
			}
			h1 {
				font-size: 24px;
				padding: 10px 0px;
				color: #232323;
				text-shadow: 0px 0px 5px #CCC;
			}
			table {
				margin: 0px auto;
			}
			table tr th,table tr td {
				padding: 5px 10px;
				font-size: 12px;
			}
			form {
				border: solid 1px #CCC;
				border-radius: 10px;
				background-color: #FFF;
				margin: 10px auto;
				padding: 30px 10px;
				width: 480px;
				box-shadow: 0px 0px 10px #CCC;
			}
			h2 {
				margin: 0px auto 10px auto;
				padding: 0px 0px 10px 0px;
				border-bottom: solid 1px #CCC;
				text-shadow: 0px 0px 5px #CCC;
			}
			input {
				text-align: center;
			}
			div#stat {
				color: #C00;
				font-size: 36px;
				font-weight: bolder;
				text-shadow: 0px 1px 3px #CCC;
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
		<h1>Mailform Pro CSV Data Manager</h1>
		<table>
			<tr>
				<th>Host Name</th>
				<td>_%%HostName%%_</td>
				<th>IP Address</th>
				<td>_%%IPAddres%%_</td>
			</tr>
		</table>
		<div id="stat">
			
		</div>
		<form method="POST">
			<h2>CSV Data Download</h2>
			<input type="hidden" name="method" value="download" />
			<input type="password" name="password" /> <input type="submit" value="CSV Download" />
		</form>
		<form method="POST">
			<h2>CSV Data Delete</h2>
			<input type="hidden" name="method" value="delete" />
			<input type="password" name="password" /> <input type="submit" value="CSV Delete" />
		</form>
	</body>
</html>
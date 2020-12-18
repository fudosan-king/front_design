<html>
	<head>
		<meta name="robots" content="noindex" />
		<title>Mailform Pro Reserve Data Manager</title>
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
			div#wrapper {
				border: solid 1px #CCC;
				border-radius: 10px;
				background-color: #FFF;
				margin: 10px auto;
				padding: 30px 10px;
				box-shadow: 0px 0px 10px #CCC;
				display: inline-block;
			}
			h2 {
				margin: 0px auto 10px auto;
				padding: 0px 0px 10px 0px;
				border-bottom: solid 1px #CCC;
				text-shadow: 0px 0px 5px #CCC;
			}
			input {
				text-align: center;
				border: solid 1px #999;
			}
			input.incomplate {
				background-color: #FCC;
			}
			input.complate {
				background-color: #EFE;
			}
			div#stat {
				color: #C00;
				font-size: 36px;
				font-weight: bolder;
				text-shadow: 0px 1px 3px #CCC;
			}
			table.calebdar {
				border-spacing: 0px;
				border-collapse: collapse;
				/*width: 100%;*/
			}
			table.calebdar tr td strong {
				display: block;
				text-align: center;
			}
			table.calebdar tr th,table.calebdar tr td {
				border: solid 1px #999;
				padding: 5px;
				/*width: 14%;*/
			}
			table.calebdar tr th {
				background-color: #EEE;
			}
			table.calebdar tr td span {
				font-size: 10px;
				text-align: left;
				display: block;
			}
			table.calebdar tr td div {
				text-align: left;
				margin: 3px;
				border: solid 1px #CCC;
				padding: 5px;
				overflow: hidden;
				width: 90px;
			}
			table.calebdar tr td div input.qty {
				width: 30px;
			}
			table.calebdar tr td div input.price {
				width: 50px;
				text-align: right;
			}
			table.calebdar tr td div {
				vertical-align: middle;
			}
			table.calebdar tr td div h3 {
				padding: 0px;
				margin: 0px;
				font-size: 12px;
				font-weight: normal;
			}
			table.calebdar tr td div input {
				/*max-width: 40%;*/
			}
			table.calebdar tr td div em {
				position: relative;
			}
			table.calebdar tr td div em font {
				position: absolute;
				left: 5px;
				top: 0px;
				font-style: normal;
				
				z-index: 999;
			}
			td.prev {
				text-align: left;
			}
			td.next {
				text-align: right;
			}
			td.blank {
				background-color: #CCC;
			}
		</style>
		<script>
			window.onload = function(){
				if(document.getElementById('stat')){
					setTimeout(function(){
						document.getElementById('stat').style.display = 'none';
					},2000);
				}
			}
		</script>
	</head>
	<body>
		<h1>Mailform Pro Reserve Data Manager</h1>
		_%%content%%_
	</body>
</html>
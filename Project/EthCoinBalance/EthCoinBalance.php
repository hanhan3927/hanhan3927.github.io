<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eth_Balance</title>
</head>

<body>

<?php
	echo "Hello world!<br>";
	echo "asd";
	header('Content-Type:text/html;charset=utf-8');
	$url='http://api.f2pool.com/eth/0xcf665c54a11e24dc36c139d3201fd8f684ef0c43';
	$json=file_get_contents($url);
	$json_data=json_decode($json,true);
	
	$value=$json_data['value'];
	
	echo $value;
	
?>




</body>
</html>

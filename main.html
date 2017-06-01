<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Final_IOT</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
	header('Content-Type:text/html;charset=utf-8');
	$url='https://api.thingspeak.com/channels/262437/feeds.json?results=1&timezone=Asia/Taipei';
	$json=file_get_contents($url);
	$json_data=json_decode($json,true);
	
	$data=$json_data['feeds'][0];
	$time="資料更新時間 ".$data['created_at']."<br>";
	$air=$data['field1'];
	$humidity=$data['field2'];
	$temperature=$data['field3'];
	$latitude=$data['field4'];
	$longitude=$data['field5'];
	
	$color1="rgba(255,0,4,0.8)";
	$color2="rgba(232,255,0,0.8)";
	$color3="rgba(0,255,29,0.8);";
	
	if($air<35)$air_color=$color3;
	else if($air<75)$air_color=$color2;
	else $air_color=$color1;
	
	if($temperature>33 ||$temperature<12)$$temperature_color=$color1;
	else if($temperature>=24 && $temperature<=29)$$temperature_color=$color3;
	else $temperature_color=$color2;
	
	if($humidity>40 && $humidity<70)$humidity_color=$color3;
	else $humidity_color=$color1;
	
	
	
?>



<div id="all">
  <div id="top">Arduino空氣品質網路</div>
  <div id="center">
  	<div id="img">
		<div style="width: 190px;float: left;border-right-color: black">
			<div style="height: 50px;background: rgba(255,0,4,0.8);">糟糕</div>
			<div style="height: 50px;background:rgba(232,255,0,0.8);">普通</div>
			<div style="height: 50px;background:rgba(0,255,29,0.8);">舒適</div>
		</div>
		<div style="width: 200px;height: 150px; float: right; background:<?php echo $air_color?>">目前空氣品質</div>
		<div style="width: 200px;height: 150px;float: right;background:<?php echo $humidity_color?>">目前濕度</div>
		<div style="width: 200px;height: 150px;float: right;background:<?php echo $temperature_color?>">目前溫度</div>
	</div>
  	<div id="info"> 空氣品質資訊</div>
  	<div id="left">空氣品質(ug/m3)</div>
  	<div id="right"><?php echo $air."<br>";?></div>
  	
  	<div id="left">濕度(%)</div>
  	<div id="right"><?php echo $humidity."%"."<br>";?></div>
  	
  	<div id="left">溫度(℃)</div>
  	<div id="right"><?php echo $temperature."℃"."<br>";?></div>

  	<div id="info" > 空氣品質收集地點</div>
	<div id="map" style="width:800px;height:200px;background:yellow;float:right"></div>
	<script>
	function myMap() {
	var mapOptions = {
		center: new google.maps.LatLng(<?php echo $latitude?>, <?php echo $longitude?>),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.HYBRID
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJLfYL3qG8SHgfwcBmV8OpMQqboqpa77I&callback=myMap"></script>

  	<div style="width: 500;height: 100px;font-family: Consolas, Andale Mono, Lucida Console, Lucida Sans Typewriter, Monaco, Courier New, monospace;font-size: 30px;float: right;font-weight: bold;"><?php echo $time;?></div>

  	
  </div>

  <div id="bottom"> </div>
</div>



</body>
</html>
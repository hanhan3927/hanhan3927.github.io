<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eth_Balance</title>
</head>

<body>

<?php
	
	header('Content-Type:text/html;charset=utf-8');
	$url='http://api.f2pool.com/eth/0xcf665c54a11e24dc36c139d3201fd8f684ef0c43';
	$json=file_get_contents($url);
	$json_data=json_decode($json,true);
	
	$value=$json_data['value'];
	
	echo $value;
	
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var Data;

      getData();
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      
      function getData()
      {
      	document.write("in");
      	var requestURL='http://api.f2pool.com/eth/0xcf665c54a11e24dc36c139d3201fd8f684ef0c43';
	    var request= new XMLHttpRequest();
	    request.open('GET',requestURL,true);
	    request.responseType='json';
	    request.send();
	    Data=request.response;
	    document.write(Data['hashrate_history']);
	    document.write("out");
      }

      function drawChart() {
        var data = google.visualization.arrayToDataTable();
        data.addColumn('number', 'Day');

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <div id="curve_chart" style="width: 900px; height: 500px"></div>

</body>
</html>

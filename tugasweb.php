<h1>1. Cuaca Di Kota Semarang</h1>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast10day/q/CA/San_Francisco.json");
	$parsed_json = json_decode ($json_string);
	$day = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'day'};
	$month = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'monthname'};
	$weekday = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'weekday'};
	$year = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'year'};
	$cuaca = $parsed_json->{'forecast'}->{"simpleforecast"}->forecastday[0]->{'icon'};
	
	echo "Tanggal : ${day} <br>
	Bulan : ${month} <br>
	Hari  : ${weekday} <br>
	Tahun : ${year}<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$cuaca.".gif'><br/>";
	
?>
<h1>2. Temperatur Suhu Tinggi</h1>
<?php
$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
$parsed_json = json_decode ($json_string);
$waktu = $parsed_json->{'forecast'}->{'txt_forecast'}->{'date'};
$WBTT = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'pretty'};
$suhu = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'high'}->{'fahrenheit'};
$celcius = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'high'}->{'celsius'};

echo "Waktu Suhu : ${waktu} <br>
WBTT : ${WBTT} <br>
Suhu fahrenheit : ${suhu}<sup>o</sup>F<br>
Suhu dalam Celcius : ${celcius}<sup>o</sup>C";
?>
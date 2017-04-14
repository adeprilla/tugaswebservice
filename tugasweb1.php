<center>
<h1>Cuaca Di Kota Semarang</h1>
<h2>1. Daerah Majapahit</h2>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode ($json_string);
	
	$a = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
	$b = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
	$c = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
	$d = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
	$e = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"pretty"};
	$f = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
	$g = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[1]->{'title'};
	$h = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[1]->{'icon'};	
	
	echo "Tanggal : ${a}\n";
	echo "<br>";
	echo "Bulan : ${b}\n";
	echo "<br>";
	echo "Tahun : ${c}\n";
	echo "<br>";
	echo "Hari : ${d}\n";
	echo "<br>";
	echo "Waktu : ${e}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$f.".gif'><br/>";
	echo "Hari : ${g}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$h.".gif'><br/>";
	
?>
<h2>2. Daerah Gombel</h2>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode ($json_string);
	
	$a = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"day"};
	$b = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"monthname"};
	$c = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"year"};
	$d = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[1]->{'date'}->{'weekday'};
	$e = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"pretty"};
	$f = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"icon"};
	$g = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[3]->{'title'};
	$h = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[3]->{'icon'};

	echo "Tanggal : ${a}\n";
	echo "<br>";
	echo "Bulan : ${b}\n";
	echo "<br>";
	echo "Tahun : ${c}\n";
	echo "<br>";
	echo "Hari : ${d}\n";
	echo "<br>";
	echo "Waktu : ${e}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$f.".gif'><br/>";
	echo "Hari : ${g}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$h.".gif'><br/>";

?>
<h2>3. Daerah Pemuda</h2>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode ($json_string);
	
	$a = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"day"};
	$b = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"monthname"};
	$c = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"year"};
	$d = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[2]->{'date'}->{'weekday'};
	$e = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"pretty"};
	$f = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"icon"};
	$g = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[5]->{'title'};
	$h = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[5]->{'icon'};

	echo "Tanggal : ${a}\n";
	echo "<br>";
	echo "Bulan : ${b}\n";
	echo "<br>";
	echo "Tahun : ${c}\n";
	echo "<br>";
	echo "Hari : ${d}\n";
	echo "<br>";
	echo "Waktu : ${e}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$f.".gif'><br/>";
	echo "Hari : ${g}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$h.".gif'><br/>";

?>
<h2>4. Daerah Ungaran</h2>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode ($json_string);
	
	$a = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"day"};
	$b = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"monthname"};
	$c = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"year"};
	$d = $parsed_json->{'forecast'}->{'simpleforecast'}->forecastday[3]->{'date'}->{'weekday'};
	$e = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"pretty"};
	$f = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"icon"};
	$g = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[7]->{'title'};
	$h = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[7]->{'icon'};

	echo "Tanggal : ${a}\n";
	echo "<br>";
	echo "Bulan : ${b}\n";
	echo "<br>";
	echo "Tahun : ${c}\n";
	echo "<br>";
	echo "Hari : ${d}\n";
	echo "<br>";
	echo "Waktu : ${e}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$f.".gif'><br/>";
	echo "Hari : ${g}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$h.".gif'><br/>";

?>
</center>
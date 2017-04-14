<html>
	<head>
		<title>ADE PRILLA SARI</title>
		<h2><center>Perkiraan Cuaca Di Semarang</center></h2>
	</head>
	<body bgcolor="pink">
	<div align=center>
		<form action = "tugasweb1.php" method = "get">
		<input class = "btnform" type = "submit" name = "submit" value = "Cuaca Kota Semarang"/>
	</body>
	<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <h3>WAKTU SAAT INI :
    <h2 id="clock">
</div>
</html>

<?php 

// date();

echo date("l, d : M : Y");
echo "<br><br>";

// time
// untuk mengetahui hari apa dan tanggal berapa 200 hari kedepan
echo date("l, d : M : Y", time()+60*60*24*200);
echo "<br><br>";

// mktime();
// jam, menit , detik, bulan, tanggal, tahun
// untuk mengetahui hari apa saya lahir
echo date("l", mktime(0,0,0,12,03,2000));
echo "<br><br>";

// strtotime();
echo date("l, d : M : Y", strtotime("03 December 2000"));

?>

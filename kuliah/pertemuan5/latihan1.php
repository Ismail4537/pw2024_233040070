<?php
// 1. membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$mhs = ["Mail", 3.2, true,];
// 2. mencetak array
echo $hari[0] . "<br>";
echo $bulan[2] . "<br>";
echo $mhs[1] . "<br>";
echo $mhs[2] . "<br><hr>";
// echo semua array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<br><hr>";
// 3. manipulasi array
// Add
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";
array_unshift($mhs, 233040070);
print_r($mhs);
echo "<hr>";
// hapus
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);
echo "<br>";

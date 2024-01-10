<?php
// array
// array adalah variabel yang dapat menyimpan banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$contohBedaTipeData = ["Nabil",17, true];

// menampilkan array
// array bisa ditampilkan dengan menggunakan var_dump atau print_r

// var_dump($hari);
// echo "</br>";
// print_r($bulan);
// echo "</br>";

// menampilkan 1 elemen pada array
// echo $contohBedaTipeData[0];
// echo "</br>";
// echo $bulan[2];
// echo "</br>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "</br>";
var_dump($hari);
?>
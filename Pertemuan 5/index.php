<?php
//Mengubah huruf menjadi kapital
$nama = "ahmad";
$kapital = strtoupper($nama);
echo $kapital;

echo "<br/>";

//Mengubah huruf menjadi huruf kecil
$text = "HANAFI";
echo strtolower($text);

echo "<br/>";

// mengganti sebuah text / huruf
$text2 = "hallo dunia";
echo str_replace("hallo", "bumi", $text2);




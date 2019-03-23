<?php
//$warna = ['Merah', 'Biru', 'Kuning', 'Orange', 'Putih'];
$warna = array('Merah', 'Biru', 'Kuning', 'Orange', 'Putih');

echo $warna[0] . "<br>"; // Menampilkan 1 data dari variabel array

$banyak = count($warna); // Menghitung banyaknya data di array

//Looping menggunakan FOR
for ($i=0; $i < $banyak; $i++) {
	$index= $i + 1; 
	echo "Warna ke-" . $index . " adalah " . $warna[$i]. "<br>";
}
echo "<br>";

//Looping menggunakan FOREACH
foreach ($warna as $w) {
	echo $w . "<br>";
} 

$campus = [
	"nama" => "Catur Insan Cendekia",
	"alamat" => "Jl. Kesambi NO. 202",
	"telp" => "0231-2020220"
];

echo "<br>";
echo "Nama kampus = " . $campus['nama'] . "<br>";
echo "Alamatnya ada di = " . $campus['alamat'] . "<br>";
echo "No. telp = " . $campus['telp'];

//Perulangan menggunakan while
$i = 0;
while ($i < count($warna)) {
	$idx = $i + 1;
	echo "Warna " . $warna[$i] . " urutan ke-" . $idx . "<br>";
	$i = $i + 1;
}


<?php
//PENGGUNAAN SWITCH - CASE
$angka = 30;
$keterangan = "";

switch ($angka) {
	case 20:
		$keterangan = "Dua puluh";
		break;

	case 40:
		$keterangan = "Empat puluh";
		break;

	default:
		$keterangan = "Bukan dua puluh atau empat puluh";
		break;
}

echo "Angka " . $angka . " adalah " . $keterangan;

echo "<br>";
$nama = "andi";
switch ($nama) {
	case 'andi':
		echo "Namanya Andi";
		break;
	
	default:
		echo "Namanya bukan Andi";
		break;
}
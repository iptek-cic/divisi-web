<?php
$nilai = 20;

//IF - ELSE
if ($nilai < 20) {
	echo "Kurang dari 20";
} else {
	echo "Nilai Anda adalah 20";
}
echo "<br>";

//IF - ELSEIF
$IPK = 3;
$grade = "";
if ($IPK === 4) {
	$grade = "A";
} elseif($IPK === 3) {
	$grade = "B";
} elseif($IPK === 2) {
	$grade = "C";
} else {
	$grade = "D";
}

echo "IPK Anda adalah " . $IPK . " mendapatkan grade " . $grade;
<?php
$nama = "Deni";
//Variabel ber-tipe array (String)
$mahasiswa = [
    "Abdul", "Budi", "Coki", "Dini", "Eka"
];

//echo $nama . "<br>";

//echo $mahasiswa[1];
//echo $nama . "<br>";
$data = [
    "nama" => "Ahmad Hanafi",
    "kelas" => "TI 1",
    "nim" => 2017102002,
    "ipk" => 5.0  
];

echo $data['nama'] .' '. $data['kelas'] . "<br>";
echo $data['nim'] . ' '. $data['ipk'];
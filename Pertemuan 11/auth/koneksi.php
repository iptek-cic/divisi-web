<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "test"; //Nama database

$connect = mysqli_connect($hostname, $username, $password, $database);

//Kalo tidak terkoneksi ke database
if(!$connect) {
	//Hentikan script, kemudian munculkan error nya
	die(mysqli_connect_error($connect));
}

?>
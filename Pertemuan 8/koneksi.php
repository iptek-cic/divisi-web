<?php
$username = "root"; // USERNAME DATABASE
$password = "password";     // PASSWORD DATABASE
$hostname = "localhost"; //NAMA HOST 
$database = "sys";      //NAMA DATABASE

if(mysqli_connect($hostname, $username, $password, $database)) {
    echo "Berhasil menghubungkan ke Database";
} else {
    die(mysqli_connect_error());
}

?>
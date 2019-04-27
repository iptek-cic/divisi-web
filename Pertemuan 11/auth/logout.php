<?php
//Memanggil file koneksi.php
require_once 'koneksi.php';

//Memulai session
session_start();

//Hapus semua session data_user yang telah login
session_destroy();

//Redirect ke form login
header("Location: login.php");

?>
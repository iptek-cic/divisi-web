<?php
//Untuk memproses methode POST
//Jika user telah klik tombol post
/* if (isset($_POST['post'])) {
    $nim = $_POST['nim']; 
    $password = $_POST['kata_sandi'];

    echo "NIM : " . $nim . "<br>";
    echo "Password " . $password;
} */

echo "Nim = > ". $_GET['nim'] . "<br>";
echo "Password = > " . $_GET['password'];


?>
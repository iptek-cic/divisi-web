<?php
    //jika tombol simpan di klick
    if(isset($_GET['simpan'])){
        //Menampilkan data variable GET
        echo "Nama :". $_GET['nama'] . "<br>";
        echo "Kelas :". $_GET['kelas'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Form Get</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="kelas" placeholder="kelas">
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>
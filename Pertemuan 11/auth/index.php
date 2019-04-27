<?php
//Memanggil file koneksi.php
require_once 'koneksi.php';

//Memulai session
session_start();

//Ketika user klik tombol daftar (button name => register)
if (isset($_POST['register'])) {

	//Menampung isi dari inputan ke variabel
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$konfirmasi_password = $_POST['konfirmasi_password'];

	//Jika salah satu inputan ada yang kosong (tidak ada nilai nya)
	if(empty(trim($username)) || empty(trim($password)) || empty(trim($nama) || empty(trim($konfirmasi_password)))) {

		//Munculkan pesan peringatan
		echo "<script>alert('Form tidak boleh ada yang kosong!');</script>";

	//Kalo semua inputan ada isinya
	} else {

		//Query untuk mengecek apakah username ada pada table users di database
		$sql_cek_username = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");

		//Jika username ada di table users
		if(mysqli_num_rows($sql_cek_username) > 0) {

			//Munculkan pesan peringatan
			echo "<script>alert('Username telah terdaftar! Silahkan pilih username lain.');</script>";

		//Jika tidak ada di table users
		} else {
			
			//Cek apakah password sama dengan konfirmasi password
			if($password == $konfirmasi_password) {

				//Encrypt password
				$encrypt_password = password_hash($password, PASSWORD_DEFAULT);

				$sql = "INSERT INTO users (username, password, nama) VALUES ('$username', '$encrypt_password', '$nama')";
				$insert = mysqli_query($connect, $sql);

				//Jika berhasil daftar (data masuk ke table users)
				if($insert) {
					
					//Munculkan pesan berhasil dan redirect ke halaman login
					echo "<script>
							alert('Anda berhasil mendaftar!. Silahkan login ke sistem.');
							window.location='login.php';
						</script>";

				// Jika gagal mendaftar
				} else {
					
					//Munculkan pesan peringatan
					echo "<script>alert('Proses registrasi gagal!. Silahkan ulangi kembali.');</script>";

				}

			//Kalo ngga sama
			} else {
			
				//Munculkan pesan peringatan
				echo "<script>alert('Password dan konfirmasi password tidak sama!');</script>";
			
			}


		}

	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Login</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
	<div id="box-login">
		<form action="" method="POST">
			<label>FORM REGISTER USER</label>
			<br><br>
			<input type="text" name="nama" placeholder="Masukkan Nama Anda" required autocomplete="off">
			<br>
			<input type="text" name="username" placeholder="Masukkan Username" required autocomplete="off">
			<br>
			<input type="password" name="password" placeholder="Masukkan Password" required autocomplete="off">
			<br>
			<input type="password" name="konfirmasi_password" placeholder="Masukkan konfirmasi Password" required autocomplete="off">
			<br>
			<button class="btn" name="register" type="submit">DAFTAR</button>
		</form>
	</div>
</body>
</html>

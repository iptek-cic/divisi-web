<?php
//Memanggil file koneksi.php
require_once 'koneksi.php';

//Memulai session
session_start();

//Jika sudah ada data user pada variabel session
if (isset($_SESSION['user']['username']) && isset($_SESSION['user']['nama'])) {

	//Redirect ke halaman home
	header("Location: home.php");
}

//Ketika user klik tombol login (button name => login)
if (isset($_POST['login'])) {

	//Menampung isi dari inputan ke variabel
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Jika varabel username dan password kosong (tidak ada nilai nya)
	if(empty(trim($username)) || empty(trim($password))) {

		//Munculkan pesan peringatan
		echo "<script>alert('Form tidak boleh ada yang kosong!');</script>";

	//Kalo inputan ada isinya
	} else {

		//Query untuk mengecek apakah username ada pada table users di database
		$sql_cek_username = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");

		//Jika username ada di table users
		if(mysqli_num_rows($sql_cek_username) > 0) {

			//Tampung data user ke variabel
			$data_user = mysqli_fetch_array($sql_cek_username);

			//Proses pengecekan password yang diinput dengan password yang di table users
			$cek_password = password_verify($password, $data_user['password']);

			//Jika password benar
			if($cek_password) {

				//Masukkan data user ke variabel session
				$_SESSION['user']['username'] = $data_user['username'];
				$_SESSION['user']['password'] = $data_user['password'];
				$_SESSION['user']['nama'] = $data_user['nama'];
				$_SESSION['user']['id'] = $data_user['id'];

				//Redirect ke halaman home.php
				header("Location: home.php");

			//Jika password salah
			} else {
				//Munculkan pesan peringatan
				echo "<script>alert('Password Anda salah!');</script>";
			}

		//Jika tidak ada di table users
		} else {
			//Munculkan pesan peringatan
			echo "<script>alert('Username tidak terdaftar!');</script>";
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
			<label>LOGIN USER</label>
			<br><br>
			<input type="text" name="username" placeholder="Masukkan username..." required autocomplete="off">
			<br>
			<input type="password" name="password" placeholder="Masukkan password..." required autocomplete="off">
			<br>
			<button class="btn" name="login" type="submit">LOGIN</button>
		</form>
	</div>
</body>
</html>

<?php
//Memanggil file koneksi.php
require_once 'koneksi.php';

//Memulai session
session_start();

//Jika belum ada data user pada variabel session
if (!isset($_SESSION['user']['username']) && !isset($_SESSION['user']['nama'])) {
	
	//Munculkan pesan peringatan dan alihkan ke form login
	echo "<script>
			alert('Silahkan login dulu!');
			window.location='login.php';
		</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<link rel="stylesheet" href="style.css">
<style>
	a.btn{
		background: red;
	}
	a.btn:hover{
		background: red;
	}
	table {
		border-collapse: collapse;
		width: 100%;
		text-align: left;
	}
	table tr td{
		padding:10px;
	}
</style>
<body>
	<div id="box-login">
		<form action="" method="POST">
			<label>You are in Home page.</label>
			<br><br>
			<table border="1">
				<tr>
					<td>ID User</td>
					<td>:</td>
					<td><?php echo $_SESSION['user']['id'] ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><?php echo $_SESSION['user']['username'] ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $_SESSION['user']['nama'] ?></td>
				</tr>
			</table>
			<br>
			<a href="logout.php" class="btn">LOGOUT</a>
		</form>
	</div>
</body>
</html>
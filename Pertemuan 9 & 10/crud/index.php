<?php
//Memanggil file koneksi.php
require_once "koneksi.php";

if(isset($_POST['insert'])) {
	$nim = $_POST['nim'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$telpon = $_POST['telpon'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO mahasiswa (nim, nama_mhs, tanggal, telpon, alamat) VALUES ('$nim', '$nama_lengkap', '$tanggal_lahir', '$telpon', '$alamat')";
	$insert = mysqli_query($connect, $sql);
	if($insert) {
		header("Location: list-data.php");
	} else {
		echo "<script>alert('Tambah Data Gagal');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Belajar CRUD - PHP</title>
</head>
<style>
	table{
		width: 500px;
	}
	input[type=text],textarea{
		width: 300px;
		resize: none;
		padding:5px;
	}
	a{
		text-decoration: none;
	}
	input[type=submit] {
		border:none;
	}
	.btn{
		background: #ddd;
		padding:10px;
		border:1px solid #ccc;
		font-size: 16px;
		font-family: "Arial";
		color: #333;
	}
	.btn:hover{
		background: #bcbcbc;
		color: #fff;
		cursor: pointer;
		
	}
</style>
<body>
	<form action="index.php" method="POST">
		<table>
			<tr>
				<td colspan="2">
					<h3>Form Mahasiswa</h3>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Tangal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="text" name="telpon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea name="alamat" rows="3"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="insert" value="Simpan Data" class="btn">
					<a href="list-data.php" class="btn">Lihat Data</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
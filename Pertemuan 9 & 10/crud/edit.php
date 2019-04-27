<?php
//Memanggil file koneksi.php
require_once "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

//Ambil data dari table mahasiswa, kemudian jadikan sebagai array
$mhs = mysqli_fetch_array($query);

if(isset($_POST['update'])) {
	$nim = $_POST['nim'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$telpon = $_POST['telpon'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE mahasiswa SET nim = '$nim', nama_mhs = '$nama_lengkap', tanggal = '$tanggal_lahir', telpon = '$telpon', alamat = '$alamat' WHERE id = '$id'";
	$insert = mysqli_query($connect, $sql);
	if($insert) {
		header("Location: list-data.php");
	} else {
		echo "<script>alert('Data gagal diedit');</script>";
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
	<form action="edit.php?id=<?php echo $mhs['id']; ?>" method="POST">
		<table>
			<tr>
				<td colspan="2">
					<h3>Form Mahasiswa</h3>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $mhs['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap" value="<?php echo $mhs['nama_mhs']; ?>"></td>
			</tr>
			<tr>
				<td>Tangal Lahir</td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $mhs['tanggal']; ?>"></td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="text" name="telpon" value="<?php echo $mhs['telpon']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea name="alamat" rows="3"><?php echo $mhs['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="update" value="Simpan Perubahan" class="btn">
					<a href="list-data.php" class="btn">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
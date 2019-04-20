<?php
require_once 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($connect, $sql);
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>List Data Mahasiswa</title>
</head>
<style>
	*{
		box-sizing: border-box;
	}
	table{
		width:50%;
	}
	tr td {
		padding:10px;
	}
	thead {
		background: #bdbdbd;
	}
	a{
		text-decoration: none;
	}
	.btn{
		background: #ddd;
		padding: 5px 10px;
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
	<h1>Data Mahasiswa</h1>
	<a href="index.php" class="btn">Tambah Data</a>
	<br> <br>
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Telpon</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($mhs = mysqli_fetch_object($query)){ ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $mhs->nim; ?></td>
					<td><?php echo $mhs->nama_mhs; ?></td>
					<td><?php echo $mhs->tanggal; ?></td>
					<td><?php echo $mhs->telpon; ?></td>
					<td><?php echo $mhs->alamat; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $mhs->id ?>" class="btn">Edit</a>
						<a onclick="return confirm('Anda yakin akan hapus data ini?')" href="hapus.php?id=<?php echo $mhs->id ?>" class="btn">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
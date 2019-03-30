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
<body>
	<h1>Data Mahasiswa</h1>
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Telpon</th>
			<th>Alamat</th>
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
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
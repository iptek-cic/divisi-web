<?php
require_once 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id = '$id'";
$query = mysqli_query($connect, $sql);
if($query) {
	echo "<script>alert('Data berhasil dihapus');</script>";
} else {
	echo "<script>alert('Data gagal dihapus');</script>";
}
//Redirect ke file list-data.php
echo "<script>window.location='list-data.php';</script>";
?>
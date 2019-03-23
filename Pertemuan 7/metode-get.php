<?php
$nama = (isset($_GET['nama'])) ? $_GET['nama'] : "Default Name"; //Ternary operator / if ternary

echo $nama . "<br>";

if(isset($_GET['nama'])) {
	$nama = $_GET['nama'];
} else {
	$nama = "Default Name";
}

echo $nama;
?>

<html>
</html>

<?php ?>
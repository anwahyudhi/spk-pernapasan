<?php
include '../../koneksi.php';

$id = $_GET['id'];
$sql = mysqli_query($dbh,"delete from kriteria where id_kriteria='$id'") or die(mysqli_error($dbh));
	
	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='data_kriteria.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus);document.location='data_kriteria.php' </script> ";
		}
?>
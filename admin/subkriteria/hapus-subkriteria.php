<?php
include '../../koneksi.php';

$id = $_GET['subkriteria'];
$sql = mysqli_query($dbh,"delete from subkriteria where id_subkriteria='$id'") or die(mysqli_error($dbh));
	
	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='data-subkriteria.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus);document.location='data-subkriteria.php' </script> ";
		}
?>
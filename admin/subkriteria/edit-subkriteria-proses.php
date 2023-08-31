<?php 
include '../../koneksi.php';
$id = $_GET['subkriteria'];
$nama = $_POST['nama'];
$bobot = $_POST['bobot'];
$kriteria = $_POST['kriteria'];


$sql=mysqli_query($dbh,"UPDATE subkriteria set nama = '$nama', nilai_subkriteria='$bobot', id_kriteria='$kriteria' where id_subkriteria='$id'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data-subkriteria.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='data-subkriteria.php' </script> ";
}

 ?>
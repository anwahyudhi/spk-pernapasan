<?php 
include '../../koneksi.php';
$id = $_GET['kuman'];
$nama = $_POST['nama'];
$bobot = $_POST['keterangan'];

$sql=mysqli_query($dbh,"UPDATE penyakit set nama_penyakit = '$nama', keterangan='$bobot' where id_penyakit='$id'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data_penyakit.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='data_penyakit.php' </script> ";
}

 ?>
<?php 
include "../../koneksi.php";


$nama = $_POST['nama'];

$keterangan = $_POST['keterangan'];


$sql=mysqli_query($dbh,"INSERT INTO penyakit (nama_penyakit, keterangan) VALUES ('$nama', '$keterangan' )");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data_penyakit.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='data_penyakit.php' </script> ";
}

 ?>
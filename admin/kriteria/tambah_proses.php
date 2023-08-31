<?php 
include "../../koneksi.php";


$nama = $_POST['nama'];

$bobot = $_POST['bobot'];


$sql=mysqli_query($dbh,"INSERT INTO kriteria (nama_kriteria, bobot) VALUES ('$nama', '$bobot' )");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data_kriteria.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='data_kriteria.php' </script> ";
}

 ?>
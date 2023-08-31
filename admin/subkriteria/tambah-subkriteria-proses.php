<?php 
include "../../koneksi.php";


$nama = $_POST['nama'];

$bobot = $_POST['nilai'];

$kriteria = $_POST['kriteria'];


$sql=mysqli_query($dbh,"INSERT INTO subkriteria (nama, nilai_subkriteria, id_kriteria) VALUES ('$nama', '$bobot', '$kriteria')");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data-subkriteria.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='data-subkriteria.php' </script> ";
}

 ?>
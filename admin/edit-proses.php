<?php 
include "../koneksi.php";
$id = $_GET['siapa'];
$user=$_POST['username'];
$nama = $_POST['nama'];
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];


$sql=mysqli_query($dbh,"UPDATE admin set username = '$user', nama='$nama', password='$passbaru' where id='$id'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='index-admin.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal diubah');document.location='index-admin.php' </script> ";
}

 ?>
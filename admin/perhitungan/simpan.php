<?php 
include '../../koneksi.php';

$tanaman = $_POST['tanaman'];
$sakit = $_POST['sakit'];
$nilai = $_POST['nilai'];

                            $sqlrankbuat = mysqli_query($dbh,"INSERT into perankingan (id_tanaman, id_penyakit,nilai) values ('$tanaman', '$sakit', '$nilai')");
                            if ($sqlrankbuat) {
                                echo "<script>alert('Data berhasil ditambahkan');document.location='perhitungan.php' </script>";
                            }else{
                                echo "gagal".mysqli_error($sqlrankbuat);
                            }
                            




 ?>
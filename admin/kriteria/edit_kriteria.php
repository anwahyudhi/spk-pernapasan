<?php 
include "../../koneksi.php";
session_start();
$id = $_GET['pohon'];
$query=mysqli_query($dbh,"select * from kriteria where id_kriteria='$id'");
$data=mysqli_fetch_array($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../assets/index.css">
</head>
<body>
<div class="wrapper">
 		<!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #72CC50;" >
                <div class="sidebar-header" style="background-color: #72CC50;">
                    <a href="../index-admin.php"><center>
                    <h3>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</h3>    
                    </center>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="../tanaman/data_tanaman.php">
                            Data Tanaman Obat      
                        </a>
                    </li>
                    <li>
                        <a href="../penyakit/data_penyakit.php">
                            Data Penyakit Pernapasan    
                        </a>
                    </li>
                    <li>
                        <a href="data_kriteria.php">
                            Data Kriteria
                        </a>
                    </li>
                    <li>
                        <a href="../subkriteria/data-subkriteria.php">
                            Data Subkriteria
                        </a>
                    </li>
                    <li>
                      <a href="../perhitungan/perhitungan.php">
                            Hasil Perhitungan    
                      </a>
                    </li>

                    <li>
                        <hr>
                        <center>
                            <h4> <?php echo date('Y') ?> </h4>    
                        </center>
                        <hr>
                    </li>
                </ul>
                
            </nav>
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right" >
                            <p></p><div class="dropdown" > <!-- warna dropdown menu diubah-->
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama']; ?>
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" >
                                    <?php $id = $_SESSION['id'] ?>
                                    <li><a href="../edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
           
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Ubah Data Kriteria <?php echo $data['nama_kriteria'] ?></h2>
                        </div>
                        <div class="panel-body">
                             <div class="col-md-6 col-md-offset-3 text-center">
                                <form class="form" action="edit_kriteria_proses.php?pohon=<?php echo $data['id_kriteria'] ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Nama Kriteria</label>
                                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_kriteria'] ?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Bobot Kriteria</label>
                                      <input type="number" name="bobot" class="form-control" value="<?php echo $data['bobot'] ?>" step="0.001">
                                    </div>
                                    <div class="form-group">
                                    <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
                                    <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan perubahan kriteria <?php echo($data['nama_kriteria']) ?>?');">
                                    </div>
                                </form>
                             </div>
                        </div>
                </div>
            
            
        	</div>
</body>
</html>
<!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
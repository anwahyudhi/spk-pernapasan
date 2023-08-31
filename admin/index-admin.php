<?php 
include "../koneksi.php";
session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
    <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../assets/index.css">

 </head>
 <body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #72CC50;" >
                <div class="sidebar-header" style="background-color: #72CC50;">
                    <a href="index.php"><center>
                    <h3>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</h3>    
                    </center>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="tanaman/data_tanaman.php">
                            Data Tanaman Obat      
                        </a>
                    </li>
                    <li>
                        <a href="penyakit/data_penyakit.php">
                            Data Penyakit Pernapasan    
                        </a>
                    </li>
                    <li>
                        <a href="kriteria/data_kriteria.php">
                            Data Kriteria
                        </a>
                    </li>
                    <li>
                        <a href="subkriteria/data-subkriteria.php">
                            Data Subkriteria
                        </a>
                    </li>
                    <li>
                      <a href="perhitungan/perhitungan.php">
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
                                    <li><a href="edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>

                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Halaman Admin</h2>
                    <h3>Selamat datang, <?php echo $_SESSION['nama']; ?></h3>
                </div>
                <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                <a href="tanaman/data_tanaman.php" class="btn btn-success">Data Tanaman Obat</a>
                <a href="penyakit/data_penyakit.php" class="btn btn-success">Data Penyakit</a>
                <a href="kriteria/data_kriteria.php" class="btn btn-success">Data Kriteria</a>
                <a href="perhitungan/hitungan.php" class="btn btn-success">Hasil Perhitungan</a>
                <br><br>
                </center>
                
                </div>
            </div>
    </div>
 

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
 </body>
 </html>
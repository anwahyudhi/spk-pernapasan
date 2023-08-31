<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>

	<div class="wrapper">
		<nav id="sidebar" style="background-color: #72CC50;">
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
                        <a href="data_tanaman.php">
                            
                            Data Tanaman Obat    
                            
                        </a>
                    </li>
                    <li>
                        <a href="data_penyakit.php">
                            
                            Data Penyakit Pernapasan    
                            
                        </a>
                    </li>
                    <li>
                      <a href="rekomendasi.php">
                            Rekomendasi Tanaman Obat    
                            </a>
                    </li>

                    <li>
                        <hr>
                        <center>
                            <h4> <?php echo date('Y') ?> </h4>    
                        </center>
                        <hr>
                    </li>

                
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

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Penyakit Sistem Pernapasan</h2>
                </div>
                <div class="panel-body">
                
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>Nama Penyakit</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                        $sql = "SELECT * FROM penyakit";
                                        $no  = 1; 
                                        foreach ($dbh->query($sql) as $data) :
                                    ?>
                        <tr>
                            <td><?php echo $data['nama_penyakit'] ?></td>
                            <td><?php echo $data['keterangan'] ?></td>
                        </tr>
                        <?php
                                    $no++;  
                                    endforeach;
                                     ?>
                    </tbody>
                </table>
                </div>
                
               	</center>
                </div>
    </div>


	</div>
</body>
</html>
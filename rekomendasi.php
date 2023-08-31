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
    <link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link type="text/css" rel="stylesheet" href="assets/index.css">




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
</ul>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4><?php echo date('Y') ?></h4>
                    </center>
                    <hr>  
                </ul>
            </nav>

            <!-- Page Content Holder -->
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
                    <h2>Rekomendasi Tanaman Obat Hutan</h2>
                </div>
                <div class="panel-body">
                <p>Disini anda akan mengetahui tanaman hutan yang direkomendasikan berdasarkan penyakit anda!</p>
            
                <div class="container-fluid">
                    <form class="form" action="hasil.php" method="POST">
                        <div class="form-group">
                            <label>Nama Penyakit:</label>
                            <select name="sakit" class="form-control">
                                <?php 
                                    $sql = "SELECT  * FROM penyakit";
                                    
                                    foreach ($dbh->query($sql) as $data) :
                                ?>
                                <option value="<?php echo $data['id_penyakit']; ?>"><?php echo $data['nama_penyakit']; ?></option>
                                <?php
                                endforeach;
                                 ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                      <label for="sel1">Bagian Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="bagian">
                        <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=1";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
                      </select>

                    </div>

                    <div class="form-group">
                      <label for="sel1">Cara Pengolahan:</label>
                      <select class="form-control" id="sel1" name="olah">
                        <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=4";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Cara Penggunaan:</label>
                      <select class="form-control" id="sel1" name="guna">
                       <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=8";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
                      </select>
                    </div>
                   
                    <div class="form-group">
                        <label>Aturan Pakai</label>
                        <select class="form-control" id="sel1" name="pakai">
                        <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=6";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
    
                        </select>
                       </div>

                       <div class="form-group">
                        <label>Rasa</label>
                        <select class="form-control" id="sel1" name="rasa">
                        <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=7";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
                        
                        </select>
                        </div>
                    
                    <div class="form-group">
                        <label>Ketersediaan</label>
                        <select class="form-control" id="sel1" name="sedia">
                            <?php 
                        $sql = "SELECT * FROM subkriteria where id_kriteria=5";
                       
                        foreach ($dbh->query($sql) as $data) :
                         ?>
                         <option value="<?php echo $data['id_subkriteria'] ?>"><?php echo $data['nama'] ?></option>
                         
                        <?php 
                        endforeach;
                         ?>
                        </select>
                    </div>
                   
                        
                    <div class="form-group">
                            <input type="submit" required name="hasil" value = "hasil" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan data anda?');">
                </div>
                    </form>
                </div>
                </div>
                </div>
                

                </div>
                </center>
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

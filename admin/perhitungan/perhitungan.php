<?php 
include "../../koneksi.php";
// include "mentah.php";
session_start();


$c1 = array();
$c2 = array();
$c3 = array();
$c4 = array();
$c5 = array();
$c6 = array();

$cn1 = array();
$cn2 = array();
$cn3 = array();
$cn4 = array();
$cn5 = array();
$cn6 = array();

$bn1 = array();
$bn2 = array();
$bn3 = array();
$bn4 = array();
$bn5 = array();
$bn6 = array();


$si = array();
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <a href="../kriteria/data_kriteria.php">
                            Data Kriteria
                        </a>
                    </li>
                    <li>
                      <a href="perhitungan.php">
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
                        <center><h3>Hasil Perhitungan</h3></center>
                    </div>
                    <div class="panel-body">
                    <h3><center>COPRAS</center></h3>
                        
                    <ul class="nav nav-tabs">
                        <?php
                        
                        $sql = "SELECT * FROM penyakit";
                        foreach ($dbh->query($sql) as $data) : 

                         ?>
                         <li><a data-toggle="tab" href="#<?php echo $data['nama_penyakit'] ?>"><?php echo $data['nama_penyakit'] ?></a></li>
                    
                        <?php 
                        
                        endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        
                        <?php
                        $sql = "SELECT * FROM penyakit";
                        foreach ($dbh->query($sql) as $data) : 

                        ?>
                        <div id='<?php echo $data['nama_penyakit'] ?>' class='tab-pane'>
                        
                        <?php


                        $sqlm = "SELECT * FROM penyakit where id_penyakit='$data[id_penyakit]'";
                        foreach ($dbh->query($sqlm) as $datam) : 
                                       $x=0;
                                         
                                        ?>
                                        
                                        <h3>Normalisasi Keputusan</h3>

                                        
                                        <hr>

                            <table class="table table-hover table-bordered table-responsive">

                                <thead>
                                    <tr>
                                        <td>Nama Tanaman</td>
                                        <?php  
                                        $sqlx = "SELECT * FROM kriteria";
                                        foreach ($dbh->query($sqlx) as $datax) : 
                                        ?>
                                        <td><?php echo $datax['nama_kriteria'] ?></td>

                                        
                                        <?php 
                                        endforeach;
                                         ?>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                        $x1 = 0;
                                        $sqlp = "SELECT * FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ";
                                        foreach ($dbh->query($sqlp) as $datap) :
                                            // bagian tumbuhan 
    if ($datap['Bagian'] == 1) {
        $c1[$x1] = 1;
        
    }
    elseif ($datap['Bagian'] == 2) {
        $c1[$x1] = 2;
        
    }
    elseif ($datap['Bagian'] == 3) {
        $c1[$x1] = 3;
        
    }
    elseif ($datap['Bagian'] == 4) {
        $c1[$x1] = 4;
        
    }
    elseif ($datap['Bagian'] == 5) {
        $c1[$x1] = 5;
        
    }
    elseif ($datap['Bagian'] == 6) {
        $c1[$x1] = 6;
        
    }
    elseif ($datap['Bagian'] == 7) {
        $c1[$x1] = 7;
        
    }
    elseif ($datap['Bagian'] == 8) {
        $c1[$x1] = 8;
        
    }
    elseif ($datap['Bagian'] == 9) {
        $c1[$x1] = 9;
    }


    // Pengolahan
    if ($datap['Pengolahan'] == 10) {
        $c2[$x1] = 1;
    }
    elseif ($datap['Pengolahan'] == 11) {
        $c2[$x1] = 2;
    }
    elseif ($datap['Pengolahan'] == 12) {
        $c2[$x1] = 3;
    }
    elseif ($datap['Pengolahan'] == 13) {
        $c2[$x1] = 4;
    }
    elseif ($datap['Pengolahan'] == 14) {
        $c2[$x1] = 5;
    }
    elseif ($datap['Pengolahan'] == 15) {
        $c2[$x1] = 6;
    }
    elseif ($datap['Pengolahan'] == 16) {
        $c2[$x1] = 7;
    }    
    
    // Penggunaan
    if ($datap['Penggunaan'] == 28) {
        $c3[$x1] = 1;
    }
    elseif ($datap['Penggunaan'] == 29) {
        $c3[$x1] = 2;
    }
    elseif ($datap['Penggunaan'] == 30) {
        $c3[$x1] = 3;
    }
    elseif ($datap['Penggunaan'] == 31) {
        $c3[$x1] = 4;
    }

    // aturan
    if ($datap['Aturan'] == 20) {
        $c4[$x1] = 1;
    }
    elseif ($datap['Aturan'] == 21) {
        $c4[$x1] = 2;
    }
    elseif ($datap['Aturan'] == 22) {
        $c4[$x1] = 3;
    }

    // Ketersediaan
    if ($datap['Ketersediaan'] == 17) {
        $c5[$x1] = 1;
    }
    elseif ($datap['Ketersediaan'] == 18) {
        $c5[$x1] = 2;
    }
    elseif($datap['Ketersediaan'] == 19) {
        $c5[$x1] = 3;
    }

    //Rasa
    if ($datap['Rasa'] == 23) {
        $c6[$x1] = 1;
    }
    elseif ($datap['Rasa'] == 24) {
        $c6[$x1] = 2;
    }
    elseif ($datap['Rasa'] == 25) {
        $c6[$x1] = 3;
    }
    elseif ($datap['Rasa'] == 26) {
        $c6[$x1] = 4;
    }
    elseif ($datap['Rasa'] == 27) {
        $c6[$x1] = 5;
    }


                                 ?>
                                    <tr>
                                        
                                        <td><?php echo $datap['nama_tanaman'] ?></td>
                                        <td><?php echo $c1[$x1]; ?></td>
                                        <td><?php echo $c2[$x1]; ?></td>
                                        <td><?php echo $c3[$x1]; ?></td>
                                        <td><?php echo $c4[$x1]; ?></td>
                                        <td><?php echo $c5[$x1]; ?></td>
                                        <td><?php echo $c6[$x1]; ?></td>
                                         
                                         

                                        
                                        

                                    
                                    <?php 
                                    $x1++;
                                    endforeach;
                                         ?>
                                         </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td><?php
                                            $sumxc1 = array_sum($c1);
                                             echo $sumxc1; 
                                            ?></td>
                                        <td><?php echo array_sum($c2); 
                                            $sumc2 = array_sum($c2);?></td>
                                        <td><?php echo array_sum($c3); 
                                            $sumc3 = array_sum($c3);?></td>
                                        <td><?php echo array_sum($c4); 
                                            $sumc4 = array_sum($c4);?></td>
                                        <td><?php echo array_sum($c5); 
                                            $sumc5 = array_sum($c5);?></td>
                                        <td><?php echo array_sum($c6); 
                                            $sumc6 = array_sum($c6);?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <hr>
                            <!-- Normalisasi Matriks -->
                            <h3>Normalisasi Matriks</h3>
                            <hr>

                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <td>Nama Tanaman</td>
                                        <?php  
                                        $sqlx = "SELECT * FROM kriteria";
                                        foreach ($dbh->query($sqlx) as $datax) : 
                                        ?>
                                        <td><?php echo $datax['nama_kriteria'] ?></td>
                                        <?php 
                                    endforeach;
                                         ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $x2 = 0;
                                    $sqlp = "SELECT * FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ";
                                        foreach ($dbh->query($sqlp) as $datap) : ?>
                                    <tr>
                                         <td><?php echo $datap['nama_tanaman'] ?></td>
                                        <?php 
                                        
                                        
                                        
                                           
                                            ?>
                                            <td><?php $cn1[$x2] = $c1[$x2]/$sumxc1;
                                             echo $cn1[$x2] ?>
                                             </td>
                                            <td><?php $cn2[$x2] = $c2[$x2]/$sumc2;
                                             echo $cn2[$x2] ?>
                                             </td>
                                             <td><?php $cn3[$x2] = $c3[$x2]/$sumc3;
                                             echo $cn3[$x2] ?>
                                             </td>
                                             <td><?php $cn4[$x2] = $c4[$x2]/$sumc4;
                                             echo $cn4[$x2] ?>
                                             </td>
                                             <td><?php $cn5[$x2] = $c5[$x2]/$sumc5;
                                             echo $cn5[$x2] ?>
                                             </td>
                                             <td><?php $cn6[$x2] = $c6[$x2]/$sumc6;
                                             echo $cn6[$x2] ?>
                                             </td>
                                            <?php 
                                       
                                            $x2++;
                                         endforeach;
                                         ?>

                                    </tr>
                                    <tr>
                                        <td>Bobot Kriteria</td>
                                        <?php  
                                        $bobot =  array();
                                        
                                        $ibot = 0;

                                        $sql1 = "SELECT * FROM kriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        ?>
                                        <td><?php 
                                        $bobot[$ibot] = $data1['bobot'];
                                        echo $bobot[$ibot]; ?>
                                        </td>
                                        <?php 
                                        
                                        $ibot++;
                                        endforeach;
                                         ?>

                                    </tr>
                                    
                                        

                                    
                                </tbody>
                                
                            </table>
                            <!-- tabel Bobot NOrmalisasi -->
                            <hr>
                            <h3>Bobot Normalisasi Matriks</h3>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <td>Nama Tanaman</td>
                                        <?php  
                                        $sqlx = "SELECT * FROM kriteria";
                                        foreach ($dbh->query($sqlx) as $datax) : 
                                        ?>
                                        <td><?php echo $datax['nama_kriteria'] ?></td>
                                        <?php 
                                    endforeach;
                                         ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $xx3 = 0;
                                     
                                        $sqlp = "SELECT * FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ";
                                        foreach ($dbh->query($sqlp) as $datap) :

                                     ?>
                                    <tr>
                                        <td><?php echo $datap['nama_tanaman'] ?></td>
                                        <?php 
                                        
                                        
                                        

                                        
                                        
                                        
                                            ?>
                                            <td><?php $bn1[$xx3] = $cn1[$xx3]*$bobot[0];
                                                echo $bn1[$xx3]; ?></td>
                                            <td><?php $bn2[$xx3] = $cn2[$xx3]*$bobot[1];
                                                echo $bn2[$xx3]; ?></td>
                                            <td><?php $bn3[$xx3] = $cn3[$xx3]*$bobot[2];
                                                echo $bn3[$xx3]; ?></td>
                                            <td><?php $bn4[$xx3] = $cn4[$xx3]*$bobot[3];
                                                echo $bn4[$xx3]; ?></td>
                                            <td><?php $bn5[$xx3] = $cn5[$xx3]*$bobot[4];
                                                echo $bn5[$xx3]; ?></td>
                                            <td><?php $bn6[$xx3] = $cn6[$xx3]*$bobot[5];
                                                echo $bn6[$xx3]; ?></td>
                                            <?php 

                                        $xx3++; 
                                        endforeach;
                                      
                                         ?>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>


                            <h3>Perhitungan Kriteria Benefit</h3>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <td>Nama Tanaman</td>
                                        <td>S+i</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $x4 = 0; 
                                     
                                    $sqlp = "SELECT * FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ";
                                        foreach ($dbh->query($sqlp) as $datap) : ?>
                                    <tr>
                                        <td><?php echo $datap['nama_tanaman'] ?></td>   
                                        <td><?php 
                                       
                                        $si[$x4] = $bn1[$x4]+$bn2[$x4]+$bn3[$x4]+$bn4[$x4]+$bn5[$x4]+$bn6[$x4]; 
                                        echo $si[$x4];
                                         ?></td>  
                                       
                                    </tr>
                                    <?php
                                    
                            $sqlrankedit = mysqli_query($dbh,"UPDATE tanaman set si = '$si[$x4]' where id_tanaman = '$datap[id_tanaman]'");
                            if ($sqlrankedit) {
                               
                            }
                        
                        
                                $x4++;
                                endforeach; ?>
                                    <tr>
                                        <td>Nilai Max</td>
                                        <td><?php echo max($si); ?></td>
                                    </tr>

                                
                                </tbody>
                            </table>

                            <h3>Perhitungan Utilitas Kuantitatif</h3>
                            <hr>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <td>Rank</td>
                                        <td>Nama Tanaman</td>
                                        <td>Pi</td>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $x5 = 0;
                                    $rank = array();
                                    
                                    $sqlx = "SELECT MAX(si) as mas FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ";
                                        foreach ($dbh->query($sqlx) as $datax) :
                                            $max = $datax['mas'];
                                        endforeach;
                                    
                                        
                                    $sqlp = "SELECT nama_tanaman, si FROM tanaman  
                                        where tanaman.id_penyakit = '$datam[id_penyakit]'
                                        ORDER BY si DESC
                                        ";
                                        foreach ($dbh->query($sqlp) as $datap) :
                                            
                                     ?>
                                     <tr>
                                        <td><?php echo $x5+1 ?></td>
                                     <td><?php echo $datap['nama_tanaman']; ?></td>   
                                    <td><?php echo ($datap['si']/$max)*100 ?> </td>

                                     </tr>
                                    <?php 
                                     
                                    $x5++;
                                     endforeach; 
                                     ?>


                                </tbody>
                            </table>


                            

                            <!-- batas -->
                        

                        </div>
                        <?php 
                       
                        endforeach;
                        endforeach;
                          

                         ?>
                        
                        </div>

                        
                            
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
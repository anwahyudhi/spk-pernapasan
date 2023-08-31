<?php 
include "../../koneksi.php";
session_start();

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
                        <a href="data_tanaman.php">
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
                	<center>
                		<div class="panel-heading">
                			<h2>Data Tanaman</h2>
                  			<a href="tambah-tanaman.php" class="btn btn-success btn-fill">
                    		<i class="glyphicon glyphicon-plus"></i>
                    		<span>Tambah Data Tanaman</span>
                  			</a>
                		</div>
                	</center>
                	<div class="panel-body">
                		<div class="table-responsive">
                			<table class="table table-hover table-bordered">
                				<thead>
                					<tr>
                						<td> NO </td>
                						<td>Nama Tanaman</td>
                						<td>Nama Latin</td>
                                        <!-- Berdasarkan Tabel Kriteria-->
                                        <?php
                                        $sqlx = "SELECT * FROM kriteria"; 

                                        foreach ($dbh->query($sqlx) as $datax) :
                                        ?><td>
                                        <?php
                                        echo $datax['nama_kriteria'];
                                        endforeach;
                                         ?></td>
                						
                						
                						

                						<td>Khasiat</td>
                						
                						<td>Aksi</td>
                					</tr>
                				</thead>
                				<tbody>
                					<?php 
                          				$sql = "SELECT tanaman.* FROM tanaman
                                        
                                        
                                        
                                        ";
                          				$no  = 1; 
                        				foreach ($dbh->query($sql) as $data) :
                                        
                        			?>

                        			<tr>
                        				<td><?php echo $no; ?></td>
                        				<td><?php echo $data['nama_tanaman'] ?></td>
                                        <td><i><?php echo $data['latin'] ?></i></td>
                        				<td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Bagian']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                        				
                                        
                                        <td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Pengolahan']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                                        <td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Ketersediaan']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                        				<td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Aturan']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                                        <td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Rasa']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                                        <td><?php 
                                        $sql1 = "SELECT * FROM subkriteria";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_subkriteria'] == $data['Penggunaan']) {
                                            echo $data1['nama'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                        				<td><?php 
                                        $sql1 = "SELECT * FROM penyakit";
                                        foreach ($dbh->query($sql1) as $data1) :
                                        if ($data1['id_penyakit'] == $data['id_penyakit']) {
                                            echo $data1['nama_penyakit'];
                                        }
                                        endforeach;
                                         ?>
                                        </td>
                        				
                        				<td>
                        					<a href="edit-tanaman.php?pohon=<?php echo $data['id_tanaman'] ?>" class="btn btn-warning btn-sm btn-fill btn-block">
					                          <i class="glyphicon glyphicon-pencil"></i>
					                          <span>ubah</span>
					                        </a>   
					            
					                        <a class="btn btn-danger btn-sm btn-fill btn-block" href="tebang.php?id=<?php echo $data['id_tanaman'] ?>" onclick="return confirm('Apa anda yakin dengan penghapusan data?');">
					                            <i class="glyphicon glyphicon-trash"></i> 
					                            <span>hapus</span>
					                        </a>
                        				</td>
                        			</tr>
                        			<?php
			                        $no++;  
			                        endforeach;
			                         ?>
			                	</tbody>
                				
                			</table>
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
<?php 
include "../../koneksi.php";
session_start();
$id = $_GET['pohon'];
$query=mysqli_query($dbh,"select * from tanaman where id_tanaman='$id'");
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
                <div class="container">
                    <center>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Ubah Data Tanaman <?php echo $data['nama_tanaman'] ?></h2>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <form class="form" action="merawat.php?pohon=<?php echo $data['id_tanaman'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama Tumbuhan</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_tanaman'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Latin Tumbuhan</label>
                      <input type="text" name="latin" class="form-control" value="<?php echo $data['latin'] ?>">
                    </div>
                     <div class="form-group">
                      <label for="sel1">Bagian Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="bagian">
                        <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=1";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <!-- <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Bagian'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option> -->

                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Bagian'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        
                        <?php 
                        endforeach;
                         ?>
                         
                         
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Cara Pengolahan:</label>
                      <select class="form-control" id="sel1" name="diolah">
                        <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=4";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Pengolahan'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Cara Penggunaan:</label>
                      <select class="form-control" id="sel1" name="digunakan">
                        <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=8";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Penggunaan'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Penyakit:</label>
                      <select class="form-control" id="sel1" name="khasiat">
                        
                        <?php 
                        $sql1 = "SELECT * FROM penyakit ";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_penyakit'] ?>"<?php if($data['id_penyakit'] == $data1['id_penyakit']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama_penyakit']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Aturan Pakai</label>
                        <select class="form-control" id="sel1" name="aturan">
                        <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=6";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Aturan'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Rasa</label>
                        <select class="form-control" id="sel1" name="rasa">
                        <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=7";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Rasa'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                        
                        </select>
                        </div>
                    
                    <div class="form-group">
                        <label>Ketersediaan</label>
                        <select class="form-control" id="sel1" name="sedia">
                           <?php 
                        $sql1 = "SELECT * FROM subkriteria where id_kriteria=5";
                       
                        foreach ($dbh->query($sql1) as $data1) :
                         ?>
                         <option value="<?php echo $data1['id_subkriteria'] ?>"<?php if($data['Ketersediaan'] == $data1['id_subkriteria']) { ?> selected="selected"<?php } ?>><?php echo $data1['nama']; ?></option>
                        <?php 
                        endforeach;
                         ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea name="keterangan" cols="60" rows="10" class="form-control"> <?php echo $data['keterangan']; ?></textarea>  
                    </div>

                    <div class="form-group">
                      <label> Gambar Lama</label> <br>
                      <img src="../../assets/gambar/<?php 
                        if(($data['gambar'])=='0'){
                            echo ('Belum Ada');
                        }else{
                            echo $data['gambar']; 
                        
                        }?>"
                        class="img-thumbnail" width="300" heigth="300" >
                        <br><br>
                
                      <input type="text" value="<?php echo $data['gambar']?>" class="form-control"  readonly>
                      <label> Ukuran File Gambar </label>
                   
                      <input class="form-control" id="gambarSizeOld" type="text" readonly value="<?php echo round(filesize("../../assets/gambar/".$data['gambar'])/1024/1024, 2) ?> MB ">
                      <label>Jenis File Gambar</label>
                      <input class="form-control" id="gambarTypeOld" type="text" readonly value="<?php echo pathinfo("../../assets/gambar/".$data['gambar'], PATHINFO_EXTENSION)?> ">
                      
                      <label> Gambar Baru</label>
                      <input type="file" name="gambar" id="gambar" class="form-control"  onchange="fileInfo()">
                      <label>file png/jpg dan ukuran maksimal 2mb </label><br>
                    </div>
                    <div class="form-group">
                    <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
                    <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan Penambahan data Tumbuhan?');">
                    </div>
                    </form>
                            </div>
                        </div>
                        </div>
                        
                    </center>
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
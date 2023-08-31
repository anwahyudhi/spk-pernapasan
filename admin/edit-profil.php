<?php 
include "../koneksi.php";
session_start();
$id = $_GET['siapa'];
$query=mysqli_query($dbh,"select * from admin where id='$id'");
$data=mysqli_fetch_array($query);
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
    <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../assets/index.css">
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
            <div id ="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right" >
                            <p></p><div class="dropdown" >
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

                  <div class="container">
                   <div class="col-md-6 col-md-offset-3 text-center">
                 
                 <form class="form" action="edit-proses.php?siapa=<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Admin</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" required>
                  </div>

                  <div class="form-group">
                  <label>Password lama:</label>
                  <input type="password" name="passlama" class="form-control" readonly id="alamatpalsu" value="<?php echo $data['password'] ?>">
                  </div>  

                  <div class="form-group">
                    <label>Password baru:</label>
                    <input type="password" name="passbaru" class="form-control" required id="alamatbaru">

                    <br>
                    <input type="button" onclick="myFunction1()" class="btn" value="Lihat Password">
                  </div>


              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="ganti" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan Perubahan Data Profil?');">
                </div>
                  </form>
          
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
         

var x = document.getElementById("alamatpalsu");
var y = document.getElementById("alamatbaru");
function myFunction() {
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
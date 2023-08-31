<?php 
include "koneksi.php";
?>

<html>
   <head>
	<meta charset="utf-8">
	<title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN OBAT PENYAKIT SISTEM PERNAPASAN</title>

	<meta name="viewport" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/index.css">

    


</head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
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
                    <h2>Tumbuhan Obat</h2>
                </div>
                <div class="panel panel-body">
                 <div class="row">
                  <?php 

                  $halaman = 30;
                  $page = isset($_GET['ke']) ? (int)$_GET['ke'] : 1;
                  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;


                  $sql = "select * from tanaman";

                  $hasil = mysqli_query($dbh, $sql);
                  $total = mysqli_num_rows($hasil);
                  $tampil = ceil($total/$halaman);
                  
                  $sqlu = "select * from tanaman LIMIT $mulai, $halaman" ;
                  $query = mysqli_query($dbh, $sqlu) or die(mysqli_error($dbh));

                 while ($data = mysqli_fetch_assoc($query)) {              

                   ?>
                   <!-- seragamkan ukurannya -->


                  <div class="col-sm-2">
                    
                      <!-- link berdasarkan nama tapi ga buat file baru -->
                      <a href="wiki_tumbuhan.php?pohon=<?php echo $data['id_tanaman'] ?>">
                        <img src="assets/gambar/<?php 
                        if(empty($data['gambar'])){
                            echo "daun-kartun-png-1.png";
                        }else{
                            echo $data['gambar']; 
                        
                        }?>"
                        alt="<?php echo $data['nama_tanaman']; ?>" width="100" height="100">
                        <div class="desc">
                          <p style="font-size:13px;">
                           <?php echo $data['nama_tanaman']; ?> 
                          </p>
                        </div>
                      </a>
                    
                  </div>
                  <?php 
                 } ?>
                </div>
                <div class="pagination">
                <?php for ($i=1; $i<=$tampil ; $i++){ ?>
                  <li><a href="?ke=<?php echo $i; ?>"><?php echo $i; ?></a>
               </li>
                
                <?php } ?>
                                    
                </div>
                    

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

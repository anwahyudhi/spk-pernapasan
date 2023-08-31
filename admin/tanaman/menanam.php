<?php
include '../../koneksi.php';


$nama = $_POST['nama'];
$jenis = $_POST['bagian'];
$olahan = $_POST['diolah'];
$guna = $_POST['digunakan'];
$khasiat = $_POST['khasiat'];
$latin = $_POST['latin'];

$aturan = $_POST['aturan'];
$sedia = $_POST['sedia'];
$rasa = $_POST['rasa'];

$resep = $_POST['keterangan'];


$gambarnama = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$file_ext = explode('.', $gambarnama);
$flex = strtolower(end($file_ext));

$filenamenew = rand()."-".$gambarnama;
$simpan = "../../assets/gambar/".$filenamenew;

if ($tipe_file = "image/jpeg" || $tipe_file = "image/png") {
	if ($ukuran_file <= 2000000) {
		if(move_uploaded_file($tmp_file, $simpan)){
			$sql=mysqli_query($dbh,"INSERT INTO tanaman (nama_tanaman,latin , Bagian, Pengolahan, Penggunaan, id_penyakit, keterangan, gambar, Aturan, Ketersediaan, Rasa) VALUES ('$nama', '$latin', '$jenis', '$olahan', '$guna', '$khasiat', '$resep', '$filenamenew', '$aturan', '$sedia', '$rasa')"); 
			if ($sql) {
    			echo "<script>alert('Data berhasil tersimpan');document.location='data_tanaman.php' </script>";
			}else {
    			echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');document.location='data_tanaman.php'
    			 </script>";
    			 ;
    		}


	}else{
		echo "<script>alert('Maaf, Gambar gagal untuk diupload.');document.location='data_tanaman.php' </script>";
	}
}else{
	echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 2MB');document.location='data_tanaman.php' </script>";
}

}else{
	echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.');document.location='data_tanaman.php' </script>";
}
?>
<?php
include "config.php";
$filename=$_FILES['gambar']['name'];
// $filename2=$_FILES['upload_file']['name'];
// $filesize = $_FILES['upload_file']['size'];
// $filetype = $_FILES['upload_file']['type'];
$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$filename); 
//$move=move_uploaded_file($_FILES['upload_file']['tmp_name'],'upload_file/'.$filename2); 
//$tanggal_lapor= date('Y-m-d');
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$kapasitas=$_POST['kapasitas'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$alamat=$_POST['alamat'];


// $id_pelapor=$_GET['id_pelapor'];
// $nama_terlapor=$_POST['nama_terlapor'];
// $jabatan_terlapor=$_POST['jabatan_terlapor'];
// $instansi_terlapor=$_POST['instansi_terlapor'];
// $alamat_terlapor=$_POST['alamat_terlapor'];
// $kronologi_singkat=$_POST['kronologi_singkat'];
// $upaya_yang_ditempuh=$_POST['upaya_yang_ditempuh'];
// $harapan_pelapor=$_POST['harapan_pelapor'];




/*
$input=mysqli_query($connect_db,"INSERT INTO terlapor(upload_file,size,type,nama_terlapor,jabatan_terlapor,instansi_terlapor,alamat_terlapor,kronologi_singkat,upaya_yang_ditempuh,harapan_pelapor,tanggal_lapor,id_status,id_pelapor)
				VALUES ('$filename2','$filesize','$filetype','$nama_terlapor','$jabatan_terlapor','$instansi_terlapor','$alamat_terlapor','$kronologi_singkat','$upaya_yang_ditempuh','$harapan_pelapor','$tanggal_lapor','5','$id_pelapor')");
			 */
$input=mysqli_query($connect_db,"INSERT INTO tempatsampah(nama,jenis,kapasitas,gambar,latitude,longitude,alamat)
				VALUES ('$nama','$jenis','$kapasitas','$filename','$latitude','$longitude','$alamat')");
               
                if ($input){
			echo "<script>alert('Data tersimpan');
				location.replace('data.php')</script>";
			}
			else {
			echo "<script>alert('Data gagal tersimpan');
				location.replace('input_data.php')</script>";
			}

?>

<?php 
include "config.php";
$id_tempatsampah=$_GET['id_tempatsampah'];
$filename=$_FILES['gambar']['name'];
$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$filename); 
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$kapasitas=$_POST['kapasitas'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$alamat=$_POST['alamat'];

	$sql = ("update tempatsampah set nama='$nama' , jenis='$jenis' ,
    kapasitas='$kapasitas' , gambar='$filename' , latitude='$latitude' , longitude='$longitude' , alamat='$alamat' 
			where id_tempatsampah='$id_tempatsampah'");
					
	$update = mysqli_query($connect_db,$sql) or die(mysql_error());
    
    if ($update){
	echo"<script>alert('Data Berhasil Terupdate');
	location.replace('data.php')</script>";
}	else {
	echo"Gagal Mengupdate Data";
}

?>
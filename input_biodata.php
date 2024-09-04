<?php
include "koneksi.php";
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$aksi=mysqli_query($koneksi,"INSERT INTO `biodata`(`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gender`) VALUES
('','$nama','$tempat_lahir','$tgl_lahir','$alamat','$gender')");

?>
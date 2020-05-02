<?php 
 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
 
mysql_query("UPDATE tbl_mhs SET nim='$nim', nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE nim='$nim'");
 
header("location:index.php?pesan=update");
 
?>
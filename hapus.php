<?php 
include 'koneksi.php';
$id = $_GET['nim'];
mysql_query("DELETE FROM tbl_mhs WHERE nim='$id'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>
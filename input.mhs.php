<?php
	include "koneksi.php";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	mysql_query("INSERT INTO tbl_mhs VALUES('$nim','$nama','$alamat','$no_telp')");

	header("location:index.php");
?>
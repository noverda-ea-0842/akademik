<?php
	include "koneksi.php"; 
?>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<div class="judul">		
		<h1>Data Mahasiswa</h1>
	</div>
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3 align="center" style="font-size: 30px;">Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$sql = mysql_query("SELECT * FROM tbl_mhs WHERE nim='$nim'");

	while($kolom = mysql_fetch_array($sql)){
	?>
	<form action="edit.update.php" method="post">		
		<table bgcolor="yellow" align="center">
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $kolom['nim'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $kolom['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $kolom['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>No Telfon</td>
				<td><input type="text" name="no_telp" value="<?php echo $kolom['no_telp'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"><input type="reset" value="RESET"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
<?php
	include "koneksi.php"; 
?>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<a href="input.php">Tambah data baru</a>
	<table align="center" width="100%">
		<tr align="center" hight="20" bgcolor="#43c4d2" height="40">
			<td>No</td>
			<td>NIM</td>
			<td>Nama Mahasiswa</td>
			<td>Alamat</td>
			<td>Telepon</td>
			<td>Aksi</td>
		</tr>
	<?php
	$sql=mysql_query("SELECT * FROM tbl_mhs") or die ("Terjadi Kesalahan !");
	$no=1;
	while ($kolom = mysql_fetch_array($sql)){
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $kolom['nim']; ?></td>
			<td><?php echo $kolom['nama']; ?></td>
			<td><?php echo $kolom['alamat']; ?></td>
			<td><?php echo $kolom['no_telp']; ?></td>
			<td>
				<a class="edit" href="edit.php?nim=<?php echo $kolom['nim']; ?>">Ubah Data</a> |
				<a class="hapus" href="hapus.php?nim=<?php echo $kolom['nim']; ?>">Hapus</a></td>
		</tr>
	<?php 
		$no++;
	} 
	?>
	</table>
</body>
</html>
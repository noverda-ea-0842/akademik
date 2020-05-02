<!DOCTYPE html>
<html>
<head>
	<style>
		p.outset{border-style: outset;}
	</style>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1 align="center">INPUT MAHASISWA</h1>
	<hr>
	<p class="outset" align="center" width = 50><a href="index.php">Lihat data awal</a></p>
	<form action="input.mhs.php" method="post">
		<table bgcolor="yellow" align="center">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"> <input type="reset" value="RESET"></td>
			</tr>
		</table>
	</form>
</body>
</html>
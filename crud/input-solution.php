<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi-solution.php" method="post">		
		<table>
			<input type="hidden" name="id">				
				
			<tr>
				<td>Isi</td>
				<td><textarea name="isi" rows="5"></textarea></td>					
			</tr>	

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>
				
		</table>
	</form>
</body>
</html>
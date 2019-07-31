<!DOCTYPE html>
<html>
<head>
	<title>Input Javelin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="../ikon.png" />
</head>
<body>
	<div class="alert alert-primary">	
	<h2><a href="../" class="badge badge-danger" target="_blank">Javelin Board</a></h2>	<br>
		<h1>Input Javelin</h1>
	</div>
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script language='javascript'> alert('Data Berhasil Di input!'); 
	document.location='index.php';</script>";
		}else if($pesan == "update"){
			echo "<script language='javascript'> alert('Data Berhasil di update!'); 
	document.location='index.php';</script>";
		}else if($pesan == "hapus"){
			//echo "<div class='alert alert-danger' role='alert'>Data berhasil di hapus.</div> ";
echo "<script language='javascript'> alert('Data Berhasil Dihapus!'); 
	document.location='index.php';</script>";
		}
	}
	?>
	<br/>
	
<table class="table" >
	<tr>
		<td>
	<h3>Data Customer</h3><br/>
	<a class="tombol btn btn-primary" href="input.php">+ Tambah Data Baru</a><br/><br/>


	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM customer")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>



		<h3>Data Problem</h3><br/>
		<a class="tombol btn btn-primary" href="input-problem.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM problem")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-problem.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>



		<h3>Data Solution</h3><br/>
		<a class="tombol btn btn-primary" href="input-solution.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM solution")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-solution.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>




	<h3>Data Riskiest Assumption	</h3><br/>
	<a class="tombol btn btn-primary" href="input-risk.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM risk")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-risk.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

</td>
		<td>

	<h3>Data Method & Success Criterion</h3><br/>
	<a class="tombol btn btn-primary" href="input-method.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM method")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-method.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>


	<h3>Data Result & Decision</h3><br/>
	<a class="tombol btn btn-primary" href="input-result.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM result")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-result.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>



	<h3>Data Learning</h3><br/>
	<a class="tombol btn btn-primary" href="input-learning.php">+ Tambah Data Baru</a><br/><br/>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Isi</th>	
			<th>Aksi</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$result = mysqli_query($con , "SELECT * FROM learning")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['isi']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus-learning.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	</td>
	</tr>
</table>
</body>
</html>
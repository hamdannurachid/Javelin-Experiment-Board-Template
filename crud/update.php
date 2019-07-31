<?php 

include 'koneksi.php';
$id = $_POST['id'];
$isi = $_POST['isi'];

mysqli_query($con,"UPDATE customer SET isi='$isi' WHERE id='$id'");

header("location:index.php?pesan=update");

?>
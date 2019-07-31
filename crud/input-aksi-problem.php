<?php 
include 'koneksi.php';
$id = $_POST['id'];
$isi = $_POST['isi'];

mysqli_query($con ,"INSERT INTO problem VALUES('$id','$isi')");

header("location:index.php?pesan=input");
?>
<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($con , "DELETE FROM method WHERE id='$id'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>
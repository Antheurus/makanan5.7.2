<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tb_absensi WHERE id_absensi='$id'");

header("location:index.php");
?>
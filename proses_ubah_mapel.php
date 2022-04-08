<?php 
include 'koneksi.php';

if (isset($_POST['ubah'])){
    $id = $_POST['kode_mapel'];
    $mapel = $_POST['mapel'];
    $kode_guru = $_POST['kode_guru'];
     
    $ubah = mysqli_query($koneksi,"UPDATE tb_mapel SET kode_mapel='$id', mapel='$mapel', kode_guru='$kode_guru' WHERE kode_mapel='$id'");
    
    }
    header("location:index.php");
?>
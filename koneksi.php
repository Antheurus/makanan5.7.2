<?php 

$koneksi = mysqli_connect("localhost", "root", "", "db_absen");

if (!$koneksi) {
	die("<script>alert('Koneksi Gagal oon!')</script>");
}

 ?>
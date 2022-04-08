<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ABSENSI</title>
</head>
<body>
	<div class="navi">
			<ul>
				<li><a href="index.php?home">Home</a></li>
				<li><a href="index.php?page=data_siswa">Data Siswa</a></li>
				<li><a href="index.php?page=data_mapel">Data Mapel</a></li>
				<li><a href="index.php?page=data_absensi">Data Absensi</a></li>
				<li><a href="index.php?page=data_guru">Data Guru</a></li>
				<li><a href="index.php?page=data_nilai">Laporan Nilai</a></li>
			</ul>
	</div>
<?php
  if(isset($_GET['page'])){
    if($_GET['page']=="data_siswa"){
        include 'tambah_siswa.php';
    }elseif ($_GET['page']=='data_mapel') {
      include 'data_mapel.php';
    }elseif ($_GET['page']=='data_absensi') {
      include 'data_absensi.php';
    }elseif ($_GET['page']=='data_guru') {
      include 'data_guru.php';
      echo "<script>window.print();</script>";
    }  
}else{
    include 'data_siswa.php';
    include 'data_mapel.php';
    include 'data.php';
    include 'data_guru.php';
}
?>
</body>
</html>
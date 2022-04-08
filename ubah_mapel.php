<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Mata Pelajaran</title>
</head>
<body>
<div class="container">
	<?php
	include 'koneksi.php';

	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tb_mapel WHERE kode_mapel='$id'");
	while($d = mysqli_fetch_array($data)){ ?>

		<form action="proses_ubah_mapel.php" method="POST">
		<div class="inputan">
			<label>Kode Mapel</label><br><input type="number" name="id" value="<?= $d['kode_mapel']; ?>"><br>
			<label>Mata Pelajaran</label><br><input type="text" name="mapel" value="<?= $d['mapel']; ?>"><br>
			<label>Kode Guru</label><br><input type="text" name="kelas" value="<?= $d['kode_guru']; ?>"><br>
		</div><br>
		<div class="btn">
			<button type="submit" name="ubah">Tambah Data</button>
		</div>
	</form>
	</div>
<?php } ?> 
</body>
</html>
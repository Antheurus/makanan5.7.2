<?php 

include "koneksi.php";

if (isset($_POST['tambah'])){
		$id = "id_siswa";
		$nama = $_POST['nama_siswa'];
		$kelas = $_POST['kelas'];
		$alamat_siswa = $_POST['alamat_siswa'];
		$asal_sekolah = $_POST['asal_sekolah'];

		$simpan = mysqli_query($koneksi, "INSERT INTO tb_siswa (id_siswa, nama_siswa, kelas, alamat_siswa, asal_sekolah) VALUES('$id', '$nama', '$kelas', '$alamat_siswa', '$asal_sekolah')");
		}
header("location:index.php");
 ?>
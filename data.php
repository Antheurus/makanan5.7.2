<div class="container">
	<span class="judul">
		<h1>Tabel Absensi</h1>
	</span>
		<div class="tabel">
		<table cellspacing="0">
			<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Asal Sekolah</th>
						<th>Kelompok Belajar</th>
						<th>Nilai</th>
						<th>Mata Pelajaran</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM tb_guru, tb_mapel, tb_absensi, tb_siswa WHERE tb_absensi.id_siswa = tb_siswa.id_siswa AND tb_absensi.kode_mapel = tb_mapel.kode_mapel AND tb_mapel.kode_guru = tb_guru.kode_guru ORDER BY id_absensi ASC"); 
				$no = 0;
				while($data = mysqli_fetch_array($query)) { $no++ ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $data['id_siswa']; ?></td>
					<td><?= $data['nama_siswa'] ?></td>
					<td><?= $data['asal_sekolah'] ?></td>
					<td><?= $data['kelompok_belajar'] ?></td>
					<td><?= $data['nilai'] ?></td>
					<td><?= $data['mapel'] ?></td>
					<td><?= $data['ket'] ?></td>
					<td><a class="ubah" href="ubah_data.php?id=<?php echo $data['id_absensi'];?>">Ubah</a> | 
				<a class="hapus" href="hapus_data.php?id=<?php echo $data['id_absensi'];?>">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
</div>
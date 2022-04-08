<div class="container">
	<span class="judul">
		<h1>Tabel Siswa</h1>
	</span>
		<div class="tabel">
		<table cellspacing="0">
			<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
						<th>Alamat Siswa</th>
						<th>Asal Sekolah</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY id_siswa ASC"); 
				$no = 0;
				while($data = mysqli_fetch_array($query)) { $no++ ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $data['id_siswa']; ?></td>
					<td><?= $data['nama_siswa'] ?></td>
					<td><?= $data['kelas'] ?></td>
					<td><?= $data['alamat_siswa'] ?></td>
					<td><?= $data['asal_sekolah'] ?></td>
					<td><a class="ubah" href="ubah_data.php?id=<?php echo $data['id_siswa'];?>">Ubah</a> | 
				<a class="hapus" name="hapus_data" href="hapus_data.php?id=<?php echo $data['id_siswa'];?>">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
</div>
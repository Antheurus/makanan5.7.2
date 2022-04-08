<div class="container">
	<span class="judul">
		<h1>Tabel Guru</h1>
	</span>
		<div class="tabel">
		<table cellspacing="0">
			<thead>
					<tr>
						<th>No</th>
						<th>Kode Mapel</th>
						<th>Mata Pelajaran</th>
						<th>Kode Guru</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM tb_guru ORDER BY kode_guru ASC"); 
				$no = 0;
				while($data = mysqli_fetch_array($query)) { $no++ ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $data['kode_guru'] ?></td>
					<td><?= $data['nama_guru']; ?></td>
					<td><?= $data['alamat_guru'] ?></td>
					<td><a class="ubah" href="ubah_data.php?id=<?php echo $data['kode_guru'];?>">Ubah</a> | 
				<a class="hapus" href="hapus_data.php?id=<?php echo $data['kode_guru'];?>">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
</div>
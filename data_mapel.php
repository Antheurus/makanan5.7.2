<div class="container">
	<span class="judul">
		<h1>Tabel Mata Pelajaran</h1>
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
				$query = mysqli_query($koneksi, "SELECT * FROM tb_mapel ORDER BY kode_mapel ASC"); 
				$no = 0;
				while($data = mysqli_fetch_array($query)) { $no++ ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $data['kode_mapel']; ?></td>
					<td><?= $data['mapel'] ?></td>
					<td><?= $data['kode_guru'] ?></td>
					<td><a class="ubah" href="ubah_mapel.php?id=<?php echo $data['kode_mapel'];?>">Ubah</a> | 
				<a class="hapus" href="hapus_data.php?id=<?php echo $data['kode_mapel'];?>">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		</div>
</div>
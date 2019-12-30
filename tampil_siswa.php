<?php include "header.php"; ?>
<div class="container">
<center>
<h3>Data Siswa</h3><hr />
</center>
<button style="margin: 0px 0px 0px 30px;" type="submit" class="btn btn-danger" onclick="window.location.href='tambah_siswa.php'">Tambah Data</button> <br /><br />
<table class="table table-striped table-bordered">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
		<th>Biaya</th>
		<th>Aksi</th>
	</tr>

	<?php 
	$sql = mysqli_query($konek,"select * from siswa order by kelas asc");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td>$d[kelas]</td>
			<td>$d[tahunajaran]</td>
			<td>$d[biaya]</td>
			<td>
				<a class='btn btn-danger' href='edit_siswa.php?id=$d[idsiswa]'>Edit</a> 
				<a class='btn btn-warning href='hapus_siswa.php?id=$d[idsiswa]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<p>Menghapus siswa berarti juga menghapus tagihan siswa...</p>
</div>

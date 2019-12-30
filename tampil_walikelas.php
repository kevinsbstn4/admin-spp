<?php include "header.php"; ?>
<div class="container">
<center>
<h3>Data Kelas dan Wali Kelas</h3>
</center>
<hr />
<button style="margin: 0px 0px 0px 30px;" type="submit" class="btn btn-danger" onclick="window.location.href='tambah_walikelas.php'">Tambah Data</button> <br /><br />
<table class="table table-striped table-bordered">
	<tr>
		<th>No.</th>
		<th>Nama Kelas</th>
		<th>Nama Wali Kelas</th>
		<th>Aksi</th>
	</tr>
	<?php
	$sql = mysqli_query($konek, "SELECT walikelas.kelas,guru.namaguru
								FROM walikelas
								INNER JOIN guru ON walikelas.idguru=guru.idguru
								ORDER BY walikelas.kelas ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[kelas]</td>
			<td>$d[namaguru]</td>
			<td>
				<a class='btn btn-danger' href='edit_walikelas.php?kls=$d[kelas]'>Edit</a> 	
				<a class='btn btn-warning' href='hapus_walikelas.php?kls=$d[kelas]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>
</div>

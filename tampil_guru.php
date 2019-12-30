<?php include "header.php"; ?>
<div class="container">
<center>
<h3>Data Guru</h3>
</center>
<hr />
<button style="margin: 0px 0px 0px 30px;" type="submit" class="btn btn-danger" onclick="window.location.href='tambah_guru.php'">Tambah Data</button> <br /><br />
<table class="table table-striped table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Guru</th>
		<th>Action</th>
	</tr>
</thead>	
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td width='40px' align='center'>$no</td>
			<td>$d[namaguru]</td>
			<td WIDTH='160px'>
				<a class='btn btn-danger' href='edit_guru.php?id=$d[idguru]'>Edit</a> 
				<a class='btn btn-warning' href='hapus_guru.php?id=$d[idguru]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>
</div>


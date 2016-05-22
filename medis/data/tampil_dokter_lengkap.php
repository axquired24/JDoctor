<?php 
	$id_dokter = $_GET[id_dokter];
	$dokter = new db;

	$dokter->BuatQuery("SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
	$tampil_dokter = $dokter->BuatArray();
?>
<h2 class="sub-header">
	<small><a title="Kembali" href="#" onclick="history.back();"><span class="glyphicon glyphicon-chevron-left"></span></a> </small>
	Data Dokter
</h2> <br>
<div class="table-responsive">
	<table class="table">
		<tr>
			<td width="20%"><strong>ID</strong></td>
			<td width="2%">:</td>
			<td><?php echo $tampil_dokter[id_dokter]; ?></td>
		</tr>
		<tr>
			<td><strong>Nama Dokter</strong></td>
			<td>:</td>
			<td><?php echo $tampil_dokter[nama_dokter]; ?></td>
		</tr>
		<tr>
			<td><strong>Tanggal Masuk</strong></td>
			<td>:</td>
			<td><?php echo $tampil_dokter[tanggal_masuk]; ?></td>
		</tr>		
		<tr>
			<td><strong>Alamat</strong></td>
			<td>:</td>
			<td><?php echo $tampil_dokter[alamat]; ?></td>
		</tr>
		<tr>
			<td><strong>Telepon</strong></td>
			<td>:</td>
			<td><?php echo $tampil_dokter[telepon]; ?></td>
		</tr>		
		<tr>
			<td><strong>Jadwal Praktek</strong></td>
			<td>:</td>
			<td><?php echo $tampil_dokter[jadwal_praktek]; ?></td>
		</tr>
	</table>
</div>

<?php 
	$id_obat = $_GET[id_obat];
	$obat = new db;

	$obat->BuatQuery("SELECT * FROM obat WHERE id_obat='$id_obat'");
	$tampil_obat = $obat->BuatArray();
?>
<h2 class="sub-header">
	<small><a title="Kembali" href="#" onclick="history.back();"><span class="glyphicon glyphicon-chevron-left"></span></a> </small>
	Data Obat
</h2> <br>
<div class="table-responsive">
	<table class="table">
		<tr>
			<td width="20%"><strong>ID</strong></td>
			<td width="2%">:</td>
			<td><?php echo $tampil_obat[id_obat]; ?></td>
		</tr>
		<tr>
			<td><strong>Nama Obat</strong></td>
			<td>:</td>
			<td><?php echo $tampil_obat[nama_obat]; ?></td>
		</tr>
		<tr>
			<td><strong>Golongan Obat</strong></td>
			<td>:</td>
			<td><?php echo $tampil_obat[golongan_obat]; ?></td>
		</tr>		
		<tr>
			<td><strong>Jenis Obat</strong></td>
			<td>:</td>
			<td><?php echo $tampil_obat[jenis_obat]; ?></td>
		</tr>
		<tr>
			<td><strong>Tanggal Datang</strong></td>
			<td>:</td>
			<td><?php echo $tampil_obat[tanggal_datang]; ?></td>
		</tr>		
		<tr>
			<td><strong>Stok Datang</strong></td>
			<td>:</td>
			<td><?php echo $tampil_obat[stok_datang]; ?></td>
		</tr>
	</table>
</div>

<?php 
	$id_admin = $_GET[id_admin];
	$admin = new db;

	$admin->BuatQuery("SELECT * FROM admin WHERE id_admin='$id_admin'");
	$tampil_admin = $admin->BuatArray();
?>
<h2 class="sub-header">
	<small><a title="Kembali" href="#" onclick="history.back();"><span class="glyphicon glyphicon-chevron-left"></span></a> </small>
	Data Admin
</h2> <br>
<div class="table-responsive">
	<table class="table">
		<tr>
			<td width="20%"><strong>ID</strong></td>
			<td width="2%">:</td>
			<td><?php echo $tampil_admin[id_admin]; ?></td>
		</tr>
		<tr>
			<td><strong>User Admin</strong></td>
			<td>:</td>
			<td><?php echo $tampil_admin[user]; ?></td>
		</tr>
		<tr>
			<td><strong>Nama Lengkap</strong></td>
			<td>:</td>
			<td><?php echo $tampil_admin[nama]; ?></td>
		</tr>		
		<tr>
			<td><strong>Tipe</strong></td>
			<td>:</td>
			<td><?php echo $tampil_admin[tipe]; ?></td>
		</tr>		
	</table>
</div>

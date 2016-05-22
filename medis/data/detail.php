<h2 class="sub-header">Detail Peserta</h2>
<?php
	$detailID= $_GET[detailID];
	$detail = new db;
	$detail->BuatQuery("SELECT * FROM peserta_mentoring WHERE idPeserta='$detailID'");
	while($tampil=$detail->BuatArray()){

?>

<div class="row">
	<div class="col-md-9">
		<p class="sub-header"><strong>Nama :</strong> <?php echo "\n", $tampil[nama]; ?></p>
		<p class="sub-header"><strong>NIM :</strong> <?php echo $tampil[nim]; ?></p>
		<p class="sub-header"><strong>Kelas :</strong> <?php echo $tampil[kelas]; ?></p>
		<p class="sub-header"><strong>Angkatan :</strong> <?php echo $tampil[angkatan]; ?></p>
	</div>
	
	<div class="col-md-3 pull-left">
		<a href="#" title="<?php echo $tampil[nama]; ?>"><img src="img/peserta/L200130172_albert.jpg" alt="Gambar Peserta" class="pull-left img-responsive img-thumbnail" /></a>
	</div>
	<div>
		<a href="?ur=tampil" class="btn btn-md btn-primary">Kembali</a>
		<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-picture"></i> Cetak Sertifikat</a>
		<div class="btn-group">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
			</button>
			
			<ul class="dropdown-menu" role="menu">
				<li><a href="#"></a></li>
				<li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Ubah</a></li>
				<li><a href="?ur=hapus&delID=<?php echo $tampil[idPeserta]; ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>
			</ul>
		
		</div>
	</div>
</div>

<?php } //END WHILE ?>
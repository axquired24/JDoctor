<?php 
	$id_pasien = $_GET[id_pasien];

	$riwayat = new db;
	$pasien = new db;
	$dokter = new db;

	$pasien->BuatQuery("SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
	$tampil_pasien = $pasien->BuatArray();
?>
<h2 class="sub-header">
	<small><a title="Kembali" href="#" onclick="history.back();"><span class="glyphicon glyphicon-chevron-left"></span></a> </small>
	Data Pasien 
	<div class="btn-group">
		<a href="?ur=ubah_pasien&edID=<?php echo $id_pasien; ?>" class="btn btn-primary" title="Ubah data diri pasien"><span class="glyphicon glyphicon-edit"></span> Edit</a>
		<a href="?ur=tambah_rekap&id_pasien=<?php echo $id_pasien; ?>" class="btn btn-primary" title="Tambah Rekap medis pasien"><span class="glyphicon glyphicon-list-alt"></span> Rekap++</a>
	</div>
</h2> <br>
<div class="table-responsive">
	<table class="table">
		<tr>
			<td width="20%"><strong>Nama</strong></td>
			<td width="2%">:</td>
			<td><?php echo $tampil_pasien[nama_lengkap]; ?></td>
		</tr>
		<tr>
			<td><strong>Tempat, Tanggal Lahir</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[tempat_lahir]; ?>, <?php echo $tampil_pasien[tanggal_lahir]; ?></td>
		</tr>
		<tr>
			<td><strong>Jenis Kelamin</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[jenis_kelamin]; ?></td>
		</tr>
		<tr>
			<td><strong>Alamat</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[alamat]; ?></td>
		</tr>		
		<tr>
			<td><strong>Telepon</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[telepon]; ?></td>
		</tr>		
		<tr>
			<td><strong>Pekerjaan</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[pekerjaan]; ?></td>
		</tr>
		<tr>
			<td><strong>Nama Kepala Keluarga</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[nama_kk]; ?></td>
		</tr>				
		<tr>
			<td><strong>Terdaftar Sejak</strong></td>
			<td>:</td>
			<td><?php echo $tampil_pasien[tanggal_daftar]; ?></td>
		</tr>		
	</table>
</div>

<h2 class="sub-header">Riwayat berobat </h2>
<?php

	$riwayat->BuatQuery("SELECT * FROM riwayat WHERE id_pasien='$id_pasien'");
	while($tampil_riwayat=$riwayat->BuatArray()){

			$id_dokter_riwayat = $tampil_riwayat[id_dokter];

			$dokter->BuatQuery("SELECT * FROM dokter WHERE id_dokter='$id_dokter_riwayat'");
			$tampil_dokter=$dokter->BuatArray();			

?>
<div class="table-responsive">
	<table class="table">
		<tr class="info">
			<td colspan="3"><span class="glyphicon glyphicon-calendar"></span> <strong>Berobat pada:</strong> <?php echo $tampil_riwayat[tanggal_berobat]; ?></td>
		</tr>
		<tr>
			<td width="20%"><strong>Ditangani Oleh</strong></td>
			<td width="2%">:</td>
			<td><?php echo $tampil_dokter[nama_dokter]; ?> <br>Telp. <i><?php echo $tampil_dokter[telepon]; ?></i></td>
		</tr>	  
		<tr>
			<td><strong>Keluhan</strong></td>
			<td>:</td>
			<td><?php echo $tampil_riwayat[keluhan]; ?></td>
		</tr>
		<tr>
			<td><strong>Hasil Diagnosa</strong></td>
			<td>:</td>
			<td><?php echo $tampil_riwayat[penyakit]; ?></td>
		</tr>		

		<tr>
			<td><strong>Resep obat</strong></td>
			<td>:</td>
			<td>
				<?php 
					$obat = $tampil_riwayat[id_obat];
					$list_obat = explode(',', $obat);
					for($n=0; $n<count($list_obat); $n++){
						
						$obat = new db;
						$obat->BuatQuery("SELECT * FROM obat WHERE id_obat='$list_obat[$n]'");
						$tampil_obat=$obat->BuatArray();

						if($tampil_obat[nama_obat] == ""){
							echo "";

						} else {
						echo "* ".$tampil_obat[nama_obat]." <br>";
						}; //tutup else
					}			
				?>
			</td>
		</tr>		
	</table>
</div>
<?php 
	}; //tutup while $tampil_riwayat
?>

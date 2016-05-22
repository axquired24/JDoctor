<h2 class="sub-header">Rekap Medis Semua Pasien <small>or</small> <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".info-tambah-rekap">Tambah Rekap</a></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
  <!-- id_riwayat, id_dokter, id_pasien, tanggal_berobat, keluhan, penyakit, id_obatSELECT * FROM riwayat WHERE 1 -->
	<tr>
	  <th>#</th>
	  <th>Nama Pasien</th>
	  <th>Dirawat oleh</th>
	  <th>Penyakit</th>
	  <th>Tanggal berobat</th>
	  <th>More</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$riwayat = new db;
		$pasien = new db;
		$dokter = new db;
		$num=1;

		$riwayat->BuatQuery("SELECT * FROM riwayat ORDER BY tanggal_berobat DESC");

		while($tampil_riwayat=$riwayat->BuatArray()){

				$pasien->BuatQuery("SELECT * FROM pasien WHERE id_pasien='$tampil_riwayat[id_pasien]'");
				$tampil_pasien=$pasien->BuatArray();

				$dokter->BuatQuery("SELECT * FROM dokter WHERE id_dokter='$tampil_riwayat[id_dokter]'");
				$tampil_dokter=$dokter->BuatArray();
	?>			  
	<tr>
		  <td><?php echo $num;?></td>		  		  
		  <td><?php echo $tampil_pasien[nama_lengkap]; ?></td>
		  <td><?php echo $tampil_dokter[nama_dokter]; ?></td>
		  <td><?php echo $tampil_riwayat[penyakit]; ?></td>
		  <td><?php echo $tampil_riwayat[tanggal_berobat]; ?></td>
		  <td>
		  	<a href="?ur=tambah_rekap&id_pasien=<?php echo $tampil_riwayat[id_pasien]; ?>" class="more" title="Tambah Rekap untuk pasien ini"><span class="glyphicon glyphicon-list-alt"></span></a>
			<a href="?ur=tampil_pasien_lengkap&id_pasien=<?php echo $tampil_riwayat[id_pasien]; ?>" class="more" title="Detail"><span class="glyphicon glyphicon-user"></span></a>
			<a onclick="return confirm('Hapus ?');" href="?ur=hapus_rekap__&delID=<?php echo $tampil_riwayat[id_riwayat]; ?>" class="more" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>

<div class="modal fade info-tambah-rekap" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Cara tambah rekap</h4>
	      </div>
	      <div class="modal-body" align="justify">
	        Untuk <strong>menambah rekap</strong> gunakan tombol <a href="#" title="Tambah Rekap untuk pasien ini"><span class="glyphicon glyphicon-list-alt"></span></a> disebelah kanan data pasien. <br><br>Untuk <strong>mencari data pasien</strong> menggunakan kotak pencarian yang ada di pojok kanan atas dari sistem ini.
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Saya mengerti</button>
	      </div>      
    </div>
  </div>
</div>
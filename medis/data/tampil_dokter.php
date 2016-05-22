<h2 class="sub-header">Data Dokter <small>or</small> <a href="?ur=tambah_dokter" class="btn btn-primary">Tambah Data</a></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Nama Dokter</th>
	  <th>Alamat</th>
	  <th>Telepon</th>
	  <th>Jadwal Praktek</th>
	  <th>Opsi</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$dataDokter = new db;
		$num=1;
		$dataDokter->BuatQuery("SELECT * FROM dokter");
		while($tampil=$dataDokter->BuatArray()){
	?>			  
	<tr>
		  <td><?php echo $num;?></td>		  
		  <td><?php echo $tampil[nama_dokter]; ?></td>
		  <td><?php echo $tampil[alamat]; ?></td>
		  <td><?php echo $tampil[telepon]; ?></td>
		  <td><?php echo $tampil[jadwal_praktek]; ?></td>
		  <td>
			<a href="?ur=tampil_dokter_lengkap&id_dokter=<?php echo $tampil[id_dokter]; ?>" class="more" title="Detail"><span class="glyphicon glyphicon-user"></span></a>						
			<a href="?ur=ubah_dokter&edID=<?php echo $tampil[id_dokter]; ?>" class="more" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
			<a onclick="return confirm('Hapus ?');" href="?ur=hapus_dokter__&delID=<?php echo $tampil[id_dokter]; ?>" class="more" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
	</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>

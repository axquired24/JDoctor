<h2 class="sub-header">Data Obat <small>or</small> <a href="?ur=tambah_obat" class="btn btn-primary">Tambah Obat</a></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Nama Obat</th>
	  <th>Golongan Obat</th>
	  <th>Stok Datang</th>
	  <th>More</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$dataPeserta = new db;
		$num=1;
		$dataPeserta->BuatQuery("SELECT * from obat");
		while($tampil=$dataPeserta->BuatArray()){					
	?>			  
	<tr>
		  <td><?php echo $num;?></td>		  
		  <td><?php echo $tampil[nama_obat]; ?></td>
		  <td><?php echo $tampil[golongan_obat]; ?></td>
		  <td><?php echo $tampil[stok_datang]; ?></td>
		  <td>
			<a href="?ur=tampil_obat_lengkap&id_obat=<?php echo $tampil[id_obat]; ?>" class="more" title="Detail"><span class="glyphicon glyphicon-user"></span></a>			
			<a href="?ur=ubah_obat&edID=<?php echo $tampil[id_obat]; ?>" class="more" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
			<a href="?ur=hapus_obat__&delID=<?php echo $tampil[id_obat]; ?>" class="more" onClick="return confirm('Hapus <?php echo $tampil[nama_obat]; ?>');" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>

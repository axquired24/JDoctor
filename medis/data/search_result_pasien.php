<?php 
	$var_search = $_POST[cari_pasien];
?>
<h2 class="sub-header">Pasien Results <br><small>for <i><?php echo $var_search; ?></i></small></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Nama Pasien</th>
	  <th>Alamat</th>
	  <th>Umur</th>
	  <th>More</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$dataPeserta = new db;
		$num=1;
		$dataPeserta->BuatQuery("SELECT *, YEAR(CURRENT_DATE()) - YEAR(tanggal_lahir) AS Usia FROM pasien WHERE nama_lengkap LIKE '%$var_search%'");
		while($tampil=$dataPeserta->BuatArray()){					
			$umur = $tampil[Usia];
	?>			  
	<tr>
		  <td><?php echo $num;?></td>		  
		  <td><?php echo $tampil[nama_lengkap]; ?></td>
		  <td><?php echo $tampil[alamat]; ?></td>
		  <td><?php echo $umur; ?> Tahun</td>
		  <td>
			
		  	<a href="?ur=tambah_rekap&id_pasien=<?php echo $tampil[id_pasien]; ?>" class="more" title="Tambah Rekap untuk pasien ini"><span class="glyphicon glyphicon-list-alt"></span></a>			
			<a href="?ur=tampil_pasien_lengkap&id_pasien=<?php echo $tampil[id_pasien]; ?>" class="more" title="Detail"><span class="glyphicon glyphicon-user"></span></a>			
			<a href="?ur=ubah_pasien&edID=<?php echo $tampil[id_pasien]; ?>" class="more" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
			<a href="?ur=hapus_pasien__&delID=<?php echo $tampil[id_pasien]; ?>" class="more" onClick="return confirm('Hapus <?php echo $tampil[nama_lengkap]; ?>');" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>

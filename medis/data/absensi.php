<h2 class="sub-header">Absensi <small>Peserta Kelas E >></small> <a title="Simpan data hari ini" href="#" class="btn btn-primary">Simpan</a></h2>
<div class="table-responsive">
<table class="table table-bordered table-striped">
  <thead>
	<tr>
	  <th>#</th>
	  <th>NIM</th>
	  <th>Nama</th>
	  <?php for($i=1; $i<=12; $i++){ ?>
	  <th><?php echo $i; ?></th>
	  <?php }; ?>
	</tr>
  </thead>
  <tbody>
	<?php
		$dataPeserta = new db;
		$num=1;
		$dataPeserta->BuatQuery("SELECT * FROM peserta_mentoring");
		while($tampil=$dataPeserta->BuatArray()){				
	?>			  
	<tr>
		  <td><?php echo $num;?></td>
		  <td><?php echo $tampil[nim]; ?></td>
		  <td><?php echo $tampil[nama]; ?></td>
		  <?php for($i=1; $i<=12; $i++){ ?>
		  <td>
			<input type="checkbox" name="absensi" />
		  </td>
		  <?php }; ?>
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>
<a title="Simpan data hari ini" href="#" class="btn btn-primary">Simpan</a>

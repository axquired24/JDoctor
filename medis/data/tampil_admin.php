<h2 class="sub-header">Data Admin <small>or</small> <a href="?ur=tambah_admin" class="btn btn-primary">Tambah Admin</a></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Username</th>
	  <th>Nama</th>
	  <th>Tipe</th>
	  <th>More</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$data = new db;
		$num=1;
		$data->BuatQuery("SELECT * FROM admin");
		while($tampil=$data->BuatArray()){
	?>			  
	<tr>
		  <td><?php echo $num;?></td>		  
		  <td><?php echo $tampil[user]; ?></td>
		  <td><?php echo $tampil[nama]; ?></td>
		  <td><?php echo $tampil[tipe]; ?></td>
		  <td>
			<a href="?ur=tampil_admin_lengkap&id_admin=<?php echo $tampil[id_admin]; ?>" class="more" title="Detail"><span class="glyphicon glyphicon-user"></span></a>			
			<a href="?ur=ubah_admin&edID=<?php echo $tampil[id_admin]; ?>" class="more" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
			<a onclick="return confirm('Hapus ?');" href="?ur=hapus_admin__&delID=<?php echo $tampil[id_admin]; ?>" class="more" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
		</tr>
	<?php 
		$num +=1;
		} // ttup while
	?>
  </tbody>
</table>
</div>

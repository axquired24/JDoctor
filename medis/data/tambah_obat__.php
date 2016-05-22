<?php	
//Data Masuk;	

	$post = array($_POST[Nama_obat],
					$_POST[Golongan], 
					$_POST[Jenis], 
					$_POST[Tanggal],
					$_POST[Stok]);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO obat VALUES('','$post[0]','$post[1]','$post[2]','$post[3]','$post[4]')";
	 $cek=$tambah->BuatQuery($codeTambah);
			
	if($cek){
		$hal = "tampil_obat";
		include("loading.php");
	}
?>

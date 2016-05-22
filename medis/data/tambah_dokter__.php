<?php	
	
	//Data Masuk;	

	$post = array($_POST[Nama_dokter],
					$_POST[TM],
					$_POST[Alamat],
					$_POST[Telepon], 
					$_POST[jadwal_praktek]);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO dokter VALUES('','$post[0]','$post[1]','$post[2]','$post[3]','$post[4]')";
	$cek=$tambah->BuatQuery($codeTambah);
	
	
		
	if($cek){
		$hal = "tampil_dokter";
		include("loading.php");
	}
?>
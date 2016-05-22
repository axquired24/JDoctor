<?php	
	
	//Data Masuk;	

	$post = array($_POST[Nama],
					$_POST[Tempat_lahir], 
					$_POST[Tanggal_lahir], 
					$_POST[jk],
					$_POST[Alamat],
					$_POST[Telephone], 
					$_POST[Pekerjaan], 
					$_POST[KK], 
					$_POST[TD]);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO pasien VALUES('','$post[0]','$post[1]','$post[2]','$post[3]','$post[4]','$post[5]','$post[6]','$post[7]','$post[8]')";
	 $cek=$tambah->BuatQuery($codeTambah);
	
		
	if($cek){
		$hal = "tampil_pasien";
		include("loading.php");
	}
?>

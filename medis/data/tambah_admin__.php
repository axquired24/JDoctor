<?php	
	
	//Data Masuk;	

	$post = array($_POST[user],
					$_POST[passw], 
					$_POST[nama], 
					$_POST[tipe]
					);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO admin VALUES('','$post[0]','$post[1]','$post[2]','$post[3]')";
	 $cek=$tambah->BuatQuery($codeTambah);
	
		
	if($cek){
		$hal = "tampil_admin";
		include("loading.php");
	}
?>

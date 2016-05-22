<?php	
	
	//Data Masuk;	
	$id_admin = $_GET[edID];
	$post = array($_POST[user],
					$_POST[passw], 
					$_POST[nama], 
					$_POST[tipe]
					);
	
	$tambah = new db;
	$codeTambah = "UPDATE admin SET user='$post[0]', password='$post[1]', nama='$post[2]', tipe='$post[3]' WHERE id_admin='$id_admin'";
	 $cek=$tambah->BuatQuery($codeTambah);
	
		
	if($cek){
		$hal = "tampil_admin";
		include("loading.php");
	}
?>

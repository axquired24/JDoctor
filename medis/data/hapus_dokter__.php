<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM dokter WHERE id_dokter='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){		
		$hal = "tampil_dokter";
		include("loading.php");
	}
?>

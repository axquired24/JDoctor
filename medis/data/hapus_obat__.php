<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM obat WHERE id_obat='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){		
		$hal = "tampil_obat";
		include("loading.php");
	}
?>

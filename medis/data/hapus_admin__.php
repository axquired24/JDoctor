<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM admin WHERE id_admin='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){		
		$hal = "tampil_admin";
		include("loading.php");
	}
?>

<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM riwayat WHERE id_riwayat='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){		
		$hal = "tampil_rekap";
		include("loading.php");
	}
?>

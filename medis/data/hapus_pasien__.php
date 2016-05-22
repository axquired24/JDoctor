<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM pasien WHERE id_pasien='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){		
		$hal = "tampil_pasien";
		include("loading.php");
	}
?>

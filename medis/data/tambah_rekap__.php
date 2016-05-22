<?php	

	//data masuk
	$post = array($_POST[id_dokter],
					$_POST[id_pasien], 
					$_POST[tanggal_berobat], 
					$_POST[keluhan], 
					$_POST[penyakit], 
					$_POST[id_obat]
					);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO riwayat VALUES('','$post[0]','$post[1]','$post[2]','$post[3]','$post[4]','$post[5]')";
	 $cek=$tambah->BuatQuery($codeTambah);
	
		
	if($cek){
		$hal = "tampil_rekap";
		include("loading.php");
	}
?>

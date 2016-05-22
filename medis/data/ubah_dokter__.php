<?php	
	
	//Data Masuk;	
	$editID = $_GET[edID];
	$post = array($_POST[nama_dokter],$_POST[tanggal_masuk],$_POST[alamat],$_POST[telepon], $_POST[jadwal_praktek]);
	
	$tambah = new db;
	$codeEdit ="UPDATE dokter SET nama_dokter='$post[0]',tanggal_masuk='$post[1]', alamat='$post[2]', telepon='$post[3]',jadwal_praktek='$post[4]' where id_dokter='$editID' ";
	$cek=$tambah->BuatQuery($codeEdit);
		
	if($cek){
		$hal = "tampil_dokter";
		include("loading.php");
	}
?>

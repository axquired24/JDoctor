<?php	
	
	//Data Masuk;	
	$editID = $_GET[edID];
	$post = array($_POST[nama_obat],$_POST[golongan_obat],$_POST[jenis_obat],$_POST[tanggal_datang],$_POST[stok_datang]);
	
	$tambah = new db;
	$codeEdit ="UPDATE obat SET nama_obat='$post[0]',golongan_obat='$post[1]', jenis_obat='$post[2]', tanggal_datang='$post[3]',stok_datang='$post[4]' where id_obat='$editID' ";
	$cek=$tambah->BuatQuery($codeEdit);
		
	if($cek){
		$hal = "tampil_obat";
		include("loading.php");
	}
?>

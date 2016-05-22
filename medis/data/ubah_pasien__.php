<?php	
	
	//Data Masuk;	
	$editID = $_GET[edID];
	$post = array($_POST[nama_lengkap],$_POST[tempat_lahir], $_POST[tanggal_lahir], $_POST[jenis_kelamin],$_POST[alamat],$_POST[telepon], $_POST[pekerjaan], $_POST[nama_kk], $_POST[tanggal_daftar]);
	
	$tambah = new db;
	$codeEdit ="UPDATE pasien SET nama_lengkap='$post[0]',tempat_lahir='$post[1]', tanggal_lahir='$post[2]', jenis_kelamin='$post[3]',alamat='$post[4]',telepon='$post[5]', pekerjaan='$post[6]', nama_kk='$post[7]', tanggal_daftar='$post[8]' where id_pasien='$editID' ";
	$cek=$tambah->BuatQuery($codeEdit);
		
	if($cek){
		$hal = "tampil_pasien";
		include("loading.php");
	}
?>

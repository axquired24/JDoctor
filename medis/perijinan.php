<?php
	$url = $_GET[ur];
	$tipe = $_SESSION[tipe];

	function pop(){
		echo "
			<h2> Maaf anda tidak memiliki hak akses di halaman ini. </h2>
		";
	}

	if($tipe == "super"){
		include("data/".$url.".php");
	}

	if($tipe == "resepsionis"){
		if($url == "tampil_admin" || $url == "tampil_obat" ){
			pop();			
		}
		else {
			include("data/".$url.".php");
		}
	}

	if($tipe == "apoteker"){	
		if($url == "tampil_admin" || $url == "tampil_pasien" || $url == "tampil_dokter"){
			pop();			
		}
		else {
			include("data/".$url.".php");
		}
	}

	if($tipe == "dokter"){	
		if($url == "ubah_obat" || $url == "hapus_obat__" || $url == "tambah_obat" || $url == "tampil_admin" || $url == "tampil_dokter"){
			pop();			
		}
		else {
			include("data/".$url.".php");
		}
	}		
?>

<!-- 
Tipe admin {super, apoteker, resepsionis, dokter}

Pasien :
	> Tampil 		: dokter,admin,apoteker,resepsionis (all)
	> Ubah / Hapus	: dokter,admin,resepsionis (not apoteker)
	> Detail		: dokter,admin,resepsionis (not apoteker)

Dokter Jaga :
	> Tampil 		: dokter,admin,resepsionis (not apoteker)
	> Ubah / Hapus	: resepsionis,admin
	> Detail		: dokter,admin

Obat :
	> Tampil 		: dokter,apoteker,admin,resepsionis (all)
	> Ubah / Hapus	: apoteker,admin
	> Detail		: dokter,apoteker,admin (not resepsionis)

Admin :
	> Tampil 		: dokter,apoteker,admin,resepsionis (all)
	> Ubah / Hapus	: admin
	> Detail		: admin	

Rekap Medis :
	> Tampil 		: dokter,apoteker,admin,resepsionis (all)
	> Ubah / Hapus	: dokter,admin,resepsionis (not apoteker)
	> Detail		: dokter,apoteker,admin,resepsionis (all)

-->
<?php
	// Login Proses | Login__.php
		include "medis/conn/db.php";

		$gagal =0;

		if(isset($_POST[usern])){
			$post = array($_POST[usern],$_POST[passw]);
			
			// Buat query, cari jumlah row yang terpilih, buat array dari row yang terpilih
			$login = new db;
			$login->BuatQuery("SELECT * FROM admin WHERE user='$post[0]' && password='$post[1]'");
			$jml=$login->MencariJumlah();
			$array=$login->BuatArray();
			
			//Menentukan True or False
			if($jml){
				session_start();				
				$_SESSION[user] = $post[0];
				$_SESSION[passw] = $post[1];
				$_SESSION[nama] = $array[nama];
				$_SESSION[id] = $array[id_admin];
				$_SESSION[tipe] = $array[tipe];
				
				echo "	
					<meta http-equiv='refresh' content='0;url=medis?ur=tampil_pasien' />

					";
			}
			else
			{
				echo("				
					<script type='text/javascript'>
						alert('Username/password Salah. Coba lagi.');
						document.location='login.php';
					</script>										
				");				
			}	// else	
		} // if isset
	
?>
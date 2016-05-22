<?php 
	include("conn/db.php");
  session_start();
  if(empty($_SESSION[user]) || empty($_SESSION[passw])){
    header("location: ../login.php");
	} else {
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JDOCTOR">
    <meta name="author" content="Informatika UMS">

    <title>JDOCTOR</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bs3_dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		//if(empty($_SESSION[username]) && empty($_SESSION[passw])){
		//	echo "<meta http-equiv='refresh' content='0;url=../login.php' />";
		//}
		//else{	
    include("navbar.php");
	?>
  

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="side-overview" class="active"><a href="?ur=tampil_pasien"><i class="pull-right glyphicon glyphicon-th"></i> Data Pasien</a></li>
			<li id="side-dokter"><a href="?ur=tampil_dokter"><i class="pull-right glyphicon glyphicon-calendar"></i>Dokter Jaga</a></li>
			<li id="side-pasien"><a href="?ur=tampil_obat"><i class="pull-right glyphicon glyphicon-stats"></i> Data Obat</a></li>
      <li id="side-admin"><a href="?ur=tampil_admin"><i class="pull-right glyphicon glyphicon-stats"></i> Data Admin</a></li>
      <li id="side-admin"><a href="?ur=tampil_rekap"><i class="pull-right glyphicon glyphicon-stats"></i> Rekap Medis</a></li>
            <li id="side-tambah"><a href="?ur=tambah_pasien"><i class="pull-right glyphicon glyphicon-plus-sign"></i> <strong>Tambah Data Pasien</strong></a></li>          
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#"><strong>Pasien Terakhir berobat</strong></a></li>
            <?php
              $riwayat = new db;              

              $riwayat->BuatQuery("SELECT DISTINCT id_pasien FROM riwayat ORDER BY tanggal_berobat DESC LIMIT 4");
              
              WHILE($tampil_riwayat=$riwayat->BuatArray()){
                $pasien = new db;
                $pasien->BuatQuery("SELECT * FROM pasien WHERE id_pasien='$tampil_riwayat[id_pasien]'");
                $tampil_pasien = $pasien->BuatArray();
              ?>

                <li><a href="?ur=tampil_pasien_lengkap&id_pasien=<?php echo $tampil_riwayat[id_pasien]; ?>"><span class="pull-right glyphicon glyphicon-ok-circle"></span> <?php echo $tampil_pasien[nama_lengkap]; ?></a></li>

              <?php              
                }; // tutup while tampil_riwayat
              ?>          
          </ul>
  
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <form class="form" method="post" action="?ur=search_result_pasien">
              <div class="input-group col-md-4 pull-right">              
                  <input name="cari_pasien" type="text" class="form-control" placeholder="Cari Nama Pasien">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Cari!</button>
                  </span>
              </div><!-- /input-group -->          
          </form>
          <br>
      <!-- <h1>KASIH Datepicker</h1> -->
			<?php
        
        include ("perijinan.php");

				// $url = $_GET[ur];
			 // 	if(!empty($url)){
				// 	include("data/".$url.".php");
				// }else{
				// 	echo("NOT FOUND");
				// }
			?>
		</div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../../bs3_dist/js/jquery.js"></script>
	<script src="../../bs3_dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("a").tooltip({placement:"top"});
		$(".popRight").popover();
	</script>	
	
  <?php // } // TUTUP ELSE paling atas ?>	
  </body>

</html>

<?php   }; // close else session ?>

<?php 
  include("medis/conn/db.php");
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Dokter Spesialis Anak">
    <meta name="author" content="Informatika UMS">

    <title>Sistem Informasi Dokter Spesialis Anak</title>

    <!-- Bootstrap core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"> <i class="glyphicon glyphicon-briefcase"></i> SI Dokter Spesialis</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#awal" data-toggle="tab">Home</a></li>
                <li><a href="#fitur" data-toggle="tab">Dokter Jaga</a></li>
                <li><a href="#kontak" data-toggle="tab">Apoteker</a></li>
              </ul>
            </div>
          </div>
		  

          <div class="inner cover">		  		  		  
			  <div class="tab-content">
				<div class="tab-pane fade in active" id="awal">
					<h1 class="cover-heading"> <i class="glyphicon glyphicon-headphones"></i><br />Sistem Informasi Dokter Spesialis Anak.</h1>
					<p class="lead">Silahkan login untuk masuk kedalam sistem.</p>
					<p class="lead">              
						<!-- data-toggle="modal" data-target=".loginDIV-sm" -->
					  <a title="Klik untuk masuk" href="login.php" class="btn btn-lg btn-default">Masuk</a>
					</p>					
				</div>
				<div class="tab-pane fade" id="fitur">
					<h1 class="cover-heading">List Dokter.</h1>
					<p class="lead">
            <div class="table-responsive">
              <table class="table table-condensed">
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Jadwal</td>
                </tr>
                <?php 
                  $dokter = new db;
                  $num = 0;
                  $dokter->BuatQuery("SELECT * FROM dokter");
                  WHILE($tampil_dokter=$dokter->BuatArray()){
                    $num+=1;
                ?>
                <tr>
                  <td><?php echo $num; ?></td>
                  <td><?php echo $tampil_dokter[nama_dokter]; ?></td>
                  <td><?php echo $tampil_dokter[jadwal_praktek]; ?></td>
                </tr>
                <?php
                  }; //tutup while tampil_dokter
                ?>
              </table>
            </div>
       

          </p>
				</div>
				<div class="tab-pane fade" id="kontak">
					<h1 class="cover-heading"><i class="glyphicon glyphicon-list-alt"></i><br />Apoteker.</h1>
					<p class="lead">Login khusus buat apoteker untuk mengecek stok obat dan daftar pesanan obat dari resepsionis.</p>					
				</div>
			  </div>		  		  
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Version 1.0 <br />&copy; 2015 <a href="#" data-toggle="tooltip" title="Informatika UMS">Informatika UMS</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>


	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../bs3_dist/js/jquery.js"></script>
	<script src="../bs3_dist/js/bootstrap.min.js"></script>
    <script src="../bs3_dist/js/docs.min.js"></script>
	<script type="text/javascript">
		$("a").tooltip({placement:"top"});
		$("a.tipBottom").tooltip({placement:"bottom"});		
		//$(".modal").modal({"keyboard":"false"});
	</script>
  </body>

</html>

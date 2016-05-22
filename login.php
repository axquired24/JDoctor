<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dokter Spesialis">
    <meta name="author" content="Dokter Spesialis">

    <title>SI Dokter Spesialis </title>

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
              <h3 class="masthead-brand"> <i class="glyphicon glyphicon-briefcase"></i> Data Center</h3>
              <ul class="nav masthead-nav">
				<li><a href="./" >Halaman Awal</a></li>
                <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                <li><a href="#help" data-toggle="tab">Bantuan</a></li>
              </ul>
            </div>
          </div>
		  

          <div class="inner cover">		  		  		  
			  <div class="tab-content">
				<div class="tab-pane fade in active" id="login">
					<!-- <h3 class="cover-heading"> <i class="glyphicon glyphicon-lock"></i> Login Disini.</h3>					 -->
						<!-- Form Login -->						
						<form method="post" class="form-horizontal" role="form" action="login__.php">						
							<div class="alert alert-warning fade in" style="text-shadow: None; visibility:hidden;">			
								  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								  <span class="isiAlert"><strong>Ups !</strong> Username / password yang anda masukkan salah. Coba lagi.</span>
							</div>						

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">User</label>
								<div class="col-sm-10">
								  <input name="usern" required type="text" class="form-control" id="inputEmail3" placeholder="Nama Pengguna">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
								  <input name="passw" required type="password" class="form-control" id="inputPassword3" placeholder="******">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button title="Klik untuk masuk" type="submit" class="btn btn-lg btn-default">Masuk</button>
								</div>
							</div>						
						</form>										
				</div>
				
				<div class="tab-pane fade" id="help">
					<h1 class="cover-heading"><i class="glyphicon glyphicon-question-sign"></i><br />Bantuan Login.</h1>
					<p class="lead">Masuklah dengan akun yang sudah diberikan admin. Jika ingin membuat akun baru, bisa hubungi admin.</p>
					<p class="lead">              
					</p>
				</div>
			  </div>		  		  
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Version 1.0 <br />&copy; 2015 <a href="#" data-toggle="tooltip" title="Dokter Spesialis | FKI UMS">Dokter Spesialis | FKI UMS</a>.</p>
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
	<script type="text/javascript">
		$("a").tooltip({placement:"top"});
		$("a.tipBottom").tooltip({placement:"bottom"});
		$("button").tooltip({"placement":"top"});
		$(".alert").alert();
	</script>
	
	<?php
		include("login__.php");
		if($gagal == 1){				
				echo("				
					<script type='text/javascript'>
						$('.alert').css({'visibility':'visible'});
					</script>										
				");
		}

	?>	
  </body>

</html>

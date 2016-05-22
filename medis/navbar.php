<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">JDOCTOR</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>  <?php echo $_SESSION[nama]; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?ur=ubah_admin&edID=<?php echo $_SESSION[id]; ?>"><i class="glyphicon glyphicon-pencil pull-right"></i> Edit Profile</a></li>                
                <li class="divider"></li>
                <li><a href="../logout.php"><i class="glyphicon glyphicon-off pull-right"></i> Logout</a></li>
              </ul>
           </li>
           </ul>

          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
      				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resepsionis <b class="caret"></b></a>
      				<ul class="dropdown-menu">
      					<li><a href="?ur=tampil_pasien">Data Pasien</a></li>
                <li class="divider"></li>
      					<li><a href="?ur=tampil_rekap">Rekap Medis</a></li>      					
                <li class="divider"></li>
                <li><a href="?ur=tampil_dokter">Dokter Jaga</a></li>                
      				</ul>
      			</li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dokter<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?ur=tampil_pasien">Data Pasien</a></li>
                <li class="divider"></li>
                <li><a href="?ur=tampil_rekap">Rekap Medis</a></li>
                <li class="divider"></li>
                <li><a href="?ur=tampil_obat">Persediaan Obat</a></li>
              </ul>                
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Apoteker<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?ur=tampil_obat">Persediaan Obat</a></li>     
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Super Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?ur=tampil_admin">Data User</a></li>
              </ul>
            </li>            
          </ul>                

        </div>
      </div>
    </div>
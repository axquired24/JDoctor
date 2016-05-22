<h2 class="sub-header">Tambah Data Pasien</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah_pasien__">
  <?php
  $dispLabel = array("Nama Lengkap",
                    "Tempat Lahir", 
                    "Tanggal Lahir", 
                    "Jenis Kelamin", 
                    "Alamat", 
                    "No Telepon", 
                    "Pekerjaan", 
                    "Nama Kepala Keluarga", 
                    "Tanggal Daftar");

	$nameLabel = array("Nama",
                "Tempat_lahir", 
                "Tanggal_lahir",
                "jk",
                "Alamat",
                "Telephone",
                "Pekerjaan",
                "KK",
                "TD");

	$jLabel = count($nameLabel);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
    if($nLabel == 3){      
?>

  <div class="form-group">
    <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
    <div class="col-sm-10">
      <input required type="radio" name="<?php echo $nameLabel[$nLabel]; ?>" value="laki-laki"> Laki - Laki <br>
      <input required type="radio" name="<?php echo $nameLabel[$nLabel]; ?>" value="perempuan"> Perempuan <br>
    </div>
  </div>

<?php
    } //tutup if 3
    elseif($nLabel == 8){
?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>" value="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>

  <?php 
    } //  tutup else if 8
    else {

  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>">
      </div>
    </div>

  <?php
    } // tutup else
	} // END For {label}
  ?>  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan Data</button>
	     <a href="#" onclick="history.back()" class="btn btn-default">Batal</a>
    </div>
  </div>

</form>

<script type="text/javascript">
  $("document").ready(function(){
    $("#side-overview").removeClass("active");
    $("#side-tambah").addClass("active");
  });
</script>
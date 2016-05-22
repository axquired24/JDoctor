<h2 class="sub-header">Tambah Data Dokter</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah_dokter__">
  <?php
  $dispLabel = array("Nama Dokter",
                    "Tanggal Masuk",
                    "Alamat", 
                    "No Telepon", 
                    "Jadwal Praktek");

	$nameLabel = array("Nama_dokter",
                "TM",
                "Alamat",
                "Telepon",
                "jadwal_praktek");

	$jLabel = count($nameLabel);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
    if($nLabel == 1){      
?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>" value="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>

<?php
    } //tutup if 3
    elseif($nLabel == 2 || $nLabel == 4){
?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <textarea required name="<?php echo $nameLabel[$nLabel]; ?>" class="form-control" rows=4></textarea>
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
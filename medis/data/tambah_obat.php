<h2 class="sub-header">Tambah Data Obat</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah_obat__">
  <?php
  $dispLabel = array("Nama Obat",
                    "Golongan Obat", 
                    "Jenis Obat", 
                    "Tanggal Datang", 
                    "Stok Datang");

	$nameLabel = array("Nama_obat",
                "Golongan", 
                "Jenis", 
                "Tanggal",
                "Stok");

	$jLabel = count($nameLabel);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
    if($nLabel == 3){

  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>" value="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>

  <?php
  } // END if 
  else {
  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>">
      </div>
    </div>

  <?php
    } // END Else {label}

  } // END FOR
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
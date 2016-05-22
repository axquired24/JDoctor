<?php
  $id_dokter = $_GET[edID];
?>
<h2 class="sub-header">Ubah Data Dokter</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=ubah_dokter__&edID=<?php echo $id_dokter; ?>">

<?php
  // Label Initialization
  $dispLabel = array("Nama Lengkap","Tanggal Masuk", "Alamat", "Telepon", "Jadwal Praktek");
  $label = array("nama_dokter","tanggal_masuk","alamat","telepon", "jadwal_praktek");
  $jLabel = count($label);

  //Attr Dokter

  $dokter = new db;
  $dokter->BuatQuery("SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
  $t = $dokter->BuatArray();

  	for($nLabel=0; $nLabel<$jLabel; $nLabel++){    
        $nameCol = $label[$nLabel];
?>

    <div class="form-group">
      <label for="<?php echo $nameCol; ?>" class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameCol; ?>" id="<?php echo $dispLabel[$nLabel]; ?>" placeholder=" Masukkan <?php echo $dispLabel[$nLabel]; ?>" value="<?php echo $t[$nameCol]; ?>">
      </div>
    </div>

    <?php
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
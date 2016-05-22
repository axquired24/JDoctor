<?php
  $id_obat = $_GET[edID];
?>
<h2 class="sub-header">Ubah Data Obat</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=ubah_obat__&edID=<?php echo $id_obat; ?>">

<?php
  // Label Initialization
  $dispLabel = array("Nama Obat","Golongan Obat", "Jenis Obat", "Tanggal Datang", "Stok Datang");
  $label = array("nama_obat","golongan_obat","jenis_obat","tanggal_datang", "stok_datang");
  $jLabel = count($label);

  //Attr Dokter

  $obat = new db;
  $obat->BuatQuery("SELECT * FROM obat WHERE id_obat='$id_obat'");
  $t = $obat->BuatArray();

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
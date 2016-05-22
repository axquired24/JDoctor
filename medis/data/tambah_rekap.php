<?php
  $id_pasien = $_GET[id_pasien];

  $pasien = new db;
  $dokter = new db;
  $obat = new db;

  $pasien->BuatQuery("SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
  $tampil_pasien=$pasien->BuatArray();

  $dokter->BuatQuery("SELECT * FROM dokter"); 
  $obat->BuatQuery("SELECT * FROM obat"); 

?>
<h2 class="sub-header">Tambah Rekap Pasien</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah_rekap__">
  <?php
  $dispLabel = array("Nama Pasien",
                    "Ditangani oleh", 
                    "Tgl Berobat", 
                    "Keluhan", 
                    "Penyakit",
                    "Obat yang diberikan");

	$nameLabel = array("id_pasien",
                "id_dokter", 
                "tanggal_berobat", 
                "keluhan",
                "penyakit",
                "id_obat");

	$jLabel = count($nameLabel);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
    if($nLabel == 2){
      //date
  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>" value="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>

  <?php
  } // END if 
  elseif($nLabel == 0) {
    //pasien
  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input readonly type="text" class="form-control" value="<?php echo $tampil_pasien[nama_lengkap]; ?>">

        <!-- value id_pasien di hidden, yang ditampilkan hanya namanya -->
        <input type="hidden" name="<?php echo $nameLabel[$nLabel]; ?>" value="<?php echo $id_pasien; ?>">
      </div>
    </div>

  <?php
  } // END elseif 
  elseif($nLabel == 1) {
    // dokter
  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <select class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>">
          <?php 
            while($tampil_dokter=$dokter->BuatArray()){ 
          ?>
            <option value="<?php echo $tampil_dokter[id_dokter]; ?>"><?php echo $tampil_dokter[nama_dokter]; ?></option>

          <?php }; // end while dokter?>
        </select>
      </div>
    </div>

 <?php
  } // END elseif 
  elseif($nLabel == 5) {
    // obat
  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
          <?php 
            while($tampil_obat=$obat->BuatArray()){ 
          ?>
            <div class="checkbox">
              <input type="checkbox" name="obat" onclick="displayResult(this.form)" value="<?php echo $tampil_obat[id_obat]; ?>"><?php echo $tampil_obat[nama_obat]; ?>
            </div>

          <?php }; // end while dokter?>

            <!-- hasil check dari checkbox masuk dibawahsini -->
            <input type="hidden" id="obat_checked" name="<?php echo $nameLabel[$nLabel]; ?>">
      </div>
    </div>

  <?php
  } // END elseif 
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

function displayResult(frm){   
 var selectedobat="";
    for (i = 0; i < frm.obat.length; i++){ //menghitung jumlah panjang array
  if (frm.obat[i].checked){   
   selectedobat += frm.obat[i].value +",";
  }
    }
 //memunculkan data di input id result yg isinya select obat
    document.getElementById("obat_checked").value=selectedobat;
}  
</script>
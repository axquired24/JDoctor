<?php

$nama = $_POST[Nama];
$tempat = $_POST[Tempat];
$jenis = $_POST[jk];
$alamat = $_POST[Alamat];
$no = $_POST[Telephone];
$pekerjaan = $_POST[Pekerjaan];
$namakk = $_POST[KK];
$tanggal = $_POST[TD];

$sql = "INSERT INTO pasien VALUES ('$nama','$tempat','$jenis','alamat','no','pekerjaan','namakk','tanggal')";
$input = mysql_query($sql);

?>
<?php
// Prepare the SQL statement
require('koneksi.php');
$kontrol = $_GET['kontrol'];

// LOGIC RELAY
$cekRelay = mysqli_query($koneksi, "SELECT * FROM datakontrol ORDER BY relay DESC");

if(mysqli_num_rows($cekRelay) == 0){
   mysqli_query($koneksi, "INSERT INTO datakontrol(relay) VALUES($kontrol)");
   header("location: tampil-relay.php");
}else{
   mysqli_query($koneksi, "UPDATE `datakontrol` SET `relay`= '$kontrol'");
   header("location: tampil-relay.php");
}

// LOGIC KETERANGAN

$cekKeterangan = mysqli_query($koneksi, "SELECT * FROM datakontrol ORDER BY keterangan DESC");

if(mysqli_num_rows($cekKeterangan) == 0){
   if($kontrol == 1){
      mysqli_query($koneksi, "INSERT INTO `datakontrol` SET `keterangan`= 'Lampu nyala'");
   }else {
      mysqli_query($koneksi, "INSERT INTO `datakontrol` SET `keterangan`= 'Lampu mati'");
   }
   header("location: tampil-relay.php");
}else{
   if($kontrol == 1){
   
      mysqli_query($koneksi, "UPDATE `datakontrol` SET `keterangan`= 'Lampu nyala'");
   }else {
      mysqli_query($koneksi, "UPDATE `datakontrol` SET `keterangan`= 'Lampu mati'");
   }
   header("location: tampil-relay.php");
}


?>
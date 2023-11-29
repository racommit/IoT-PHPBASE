<?php

require("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database

 // Prepare the SQL statement
 
 $result = mysqli_query ($koneksi,"INSERT INTO data_esp (data1,data2) VALUES ('".$_GET["data1"]."','".$_GET["data2"]."')"); 
 
 if (!$result){
    die ('Invalid query: '.mysqli_error($koneksi));
 } 


  

?>
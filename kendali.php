<?php
 //Variabel database
require "koneksi.php";  


 $sql = mysqli_query ($koneksi,"SELECT * from datakontrol order by id DESC"); 
 
    $row = mysqli_fetch_assoc($sql); // fetch query yang sesuai ke dalam array
       // sesuaikan dengan database
        echo $row['relay'];
    
 
?>

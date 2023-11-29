<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "datasensor"; //sesuaikan dengan database

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(mysqli_connect_errno()){
        global $koneksi;
        echo "gagal terkoneksi dengan server"; mysqli_connect_error();
    }
?>

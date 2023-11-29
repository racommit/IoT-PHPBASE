<?php

require 'koneksi.php';


function registrasi($data){
    global $koneksi;

    $fullname = $data["name"];
    $username = $data["username"];
    $email = $data["email"];
    $nohp = $data["nohp"];
    $password = $data["password"];
    $password2 = $data["password2"];
    // var_dump($fullname);die;
    // CEK konfirmasi password
    if($password !== $password2){
        echo "<script>alert('Password tidak sesuai')</script>";
        return false;
    }

    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('user dengan nama $username sudah digunakan')</script>";
        return false;
    }

    // $password =  password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO user (fullname,username,password,nohp,email) VALUES('$fullname','$username','$password','$nohp','$email')");

   return mysqli_affected_rows($koneksi);
    
}
?>
<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$name = "sig_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $name);
 if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
//mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "perpus";

    //untuk konekso
    $koneksi = mysqli_connect($serverName, $username, $password, $database);

    //cek koneksi
//     if (!$koneksi) {
//        die("Maaf konekso anda gagal".mysqli_connect_error());
//    }
//    else{
//        echo "Koneksi anda berhasil";
//    }

?>
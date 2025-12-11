<?php
    $server = "localhost";
    $user = "root";
    $pass = "";          // Password kosong (sesuai reset di CMD)
    $database = "praktikumdb"; 
    $port = 3307;        // TAMBAHKAN INI (Sesuai config file kamu)

    // Tambahkan parameter port di urutan terakhir
    $connect = mysqli_connect($server, $user, $pass, $database, $port);

    // Cek koneksi
    if (mysqli_connect_errno()) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
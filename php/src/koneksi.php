<?php
    $host     = "10.0.0.115";
    $username = "admin";
    $password = "Charisma9.";
    $database = "db_kuis2";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>

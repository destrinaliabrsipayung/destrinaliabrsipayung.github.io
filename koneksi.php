<?php
$host = "sql303.infinityfree.com"; // MySQL Hostname dari InfinityFree
$user = "if0_41069941";        // MySQL Username dari InfinityFree
$pass = "321DNSyes";    // Password akun InfinityFree
$db   = "if0_410669941_seed_library";     // Nama database yang kamu buat

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>

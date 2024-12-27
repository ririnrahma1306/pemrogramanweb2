<?php
$server = "localhost";
$user = "root";
$passwd = "";
$dbs = "verlyperpus";

// Koneksi ke database menggunakan MySQLi
$konek = mysqli_connect($server, $user, $passwd, $dbs);

// Cek apakah koneksi berhasil
if (!$konek) {
    die("Gagal koneksi ke server MySQL: " . mysqli_connect_error());
}

// Pesan jika berhasil
echo "Berhasil koneksi ke database $dbs";
?>

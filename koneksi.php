<?php
$databaseHost = 'localhost';
$databaseName = 'db_studikasus1';
$databaseUsername = 'root';
$databasePassword = '';

// Membuat koneksi ke database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Cek koneksi
if (!$mysqli) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
echo "";
?>
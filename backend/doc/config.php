<?php
$host = "localhost";
$user = "root";
$pass = ""; // isi password MySQL jika ada
$dbname = "hmisphp"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Gagal koneksi ke database: " . mysqli_connect_error());
}
?>

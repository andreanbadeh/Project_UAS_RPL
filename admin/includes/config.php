<?php
$host = "sql202.infinityfree.com";
$user = "if0_40911986";
$pass = "BDnbSm8IZyd";
$db   = "if0_40911986_rental_mobil";

$koneksidb = mysqli_connect($host, $user, $pass, $db);
if (!$koneksidb) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>

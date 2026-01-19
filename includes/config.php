<?php
# Konek ke Web Server Lokal
$myHost	= "sql202.infinityfree.com";
$myUser	= "if0_40911986";
$myPass	= "BDnbSm8IZyd";
$myDbs	= "if0_40911986_rental_mobil";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>
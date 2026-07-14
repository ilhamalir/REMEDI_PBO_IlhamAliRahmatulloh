<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "DB_REMEDI_PBO_TRPL1B_IlhamAliRahmatulloh"
);

if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_error());
}

?>
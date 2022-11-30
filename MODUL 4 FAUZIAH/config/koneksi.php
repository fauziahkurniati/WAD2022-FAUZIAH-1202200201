<?php
    $koneksi = mysqli_connect("localhost:3307", "root", "" , "wad_modul4_fauziah",3307);

    if(!$koneksi){
        die("Koneksi gagal" . mysqli_connect_error());
    }
?>

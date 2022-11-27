<?php
    $koneksi = mysqli_connect("localhost", "root", "", "wad_modul4_fauziah");

    if(!$koneksi){
        die("Koneksi gagal" . mysqli_connect_error());
    }
?>
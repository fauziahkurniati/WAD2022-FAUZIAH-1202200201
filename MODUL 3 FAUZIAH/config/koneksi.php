<?php
    $koneksi = mysqli_connect("localhost", "root", "", "modul3_fauziah");

    if(!$koneksi){
        die("Koneksi gagal" . mysqli_connect_error());
    }
?>
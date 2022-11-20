<?php
    $koneksi = mysqli_connect("localhost", "root", "", "modul3_fauziah");

    if(!$koneksi){
        die("<p>koneksi gagal</p>" . mysqli_connect_error());
    }
?>
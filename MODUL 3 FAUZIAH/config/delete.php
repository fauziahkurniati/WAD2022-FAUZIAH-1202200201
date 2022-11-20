<?php
include 'koneksi.php';
$id = $_GET["id_mobil"];

    $query = "DELETE FROM showroom_fauziah_table WHERE id_mobil='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil
     dihapus.');window.location='../myshowroom.php';</script>";
    }
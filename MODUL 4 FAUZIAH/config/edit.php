<?php

include ("koneksi.php");

    $id = $_POST['submit'];
    $nama_mobil = $_POST['name'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['date'];
    $deskripsi = $_POST['desk'];
    $status = $_POST['status'];

    // echo ($id);
    // echo ("\n");
    // echo ($nama_mobil);
    // echo ($pemilik);
    // echo ($merk);
    // echo ($tanggal);
    // echo ($deskripsi);
    // echo ($status);

    $query = "UPDATE showroom_fauziah_table SET nama_mobil='$nama_mobil', pemilik_mobil='$pemilik', merk_mobil='$merk', tanggal_beli='$tanggal', deskripsi='$deskripsi', status_pembayaran='$status' WHERE id_mobil=$id";
    $insert = mysqli_query($koneksi,$query);

    header("Location: ../myshowroom.php");
    ?>
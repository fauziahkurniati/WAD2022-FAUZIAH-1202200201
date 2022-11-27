<?php

include 'koneksi.php';


    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];



    $filename = $_FILES['foto']['name'];        
    move_uploaded_file($_FILES['foto']['tmp_name'], '../image/'.$filename);

    
    $query = "INSERT INTO showroom_fauziah_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUE ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$filename', '$status')";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  } else {
    
    echo "<script>alert('Data berhasil ditambah.');window.location='../myshowroom.php';</script>";
  }

 


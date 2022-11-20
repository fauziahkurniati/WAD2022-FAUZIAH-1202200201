<?php

include 'koneksi.php';

    $id = $_POST['id_mobil'];
    $nama_mobil = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto = $_FILES['foto']['name'];
  
    if($foto != "") {
      $ekstensi_diperbolehkan = array('png','jpg');
      $x = explode('.', $foto); 
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$foto; 
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../dbimg/'.$nama_gambar_baru); 

            $query  = "UPDATE 'showroom' SET 
            'nama_mobil'='$nama_mobil',
            'pemilik_mobil'='$pemilik',
            'merk_mobil'='$merk',
            'tanggal'='$tanggal',
            'deskripsi'='$deskripsi',
            'foto_mobil'='$foto',
            'status_pembayaran'='$status'
            WHERE id_mobil = '$id'";

            $result = mysqli_query($koneksi, $query);
            
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                      " - ".mysqli_error($koneksi));
            } else {
            
              echo "<script>alert('Data berhasil diubah.');window.location='myshowroom.php';</script>";
            }
          } else {     
           
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit2.php';</script>";
          }

    } else {
        $query = "UPDATE showroom_fauziah_table SET 
        nama_mobil ='$nama_mobil',
        pemilik_mobil ='$pemilik',
        merk_mobil ='$merk',
        tanggal='$tanggal',
        deskripsi ='$deskripsi',
        foto_mobil ='$foto',
        status_pembayaran ='$status'
        WHERE id_mobil = '$id'";
        
        $result = mysqli_query($koneksi, $query);
 
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($koneksi));
           
        } else {
        
            echo "<script>alert('Data berhasil diubahhh.');window.location='../myshowroom.php';</script>";
        }
    }

 


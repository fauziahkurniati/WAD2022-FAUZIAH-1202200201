<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];

    // $foto = $_FILES['foto']['name'];

    $filename = $_FILES['gambar']['name'];        
    move_uploaded_file($_FILES['gambar']['tmp_name'], '../'.$filename);

    
    $query = "INSERT INTO showroom_fauziah_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUE ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$filename', '$status')";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='../myshowroom.php';</script>";
  }

 


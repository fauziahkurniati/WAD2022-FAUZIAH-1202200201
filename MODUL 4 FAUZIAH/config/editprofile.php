<?php
    include("koneksi.php");

        // echo $_COOKIE['id'];
        if(isset($_COOKIE['id'])){
            $id = $_COOKIE['id'];
            $password = $_COOKIE['password'];
            
            $query = "SELECT * FROM user_fauziah WHERE id='$id' AND password='$password'";
            $select = mysqli_query($koneksi,$query);
            $display = mysqli_fetch_assoc($select);
            $nama = $display['nama'];
        }else{
        session_start();
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $password = $_SESSION['password'];
      
            $query = "SELECT * FROM user_fauziah WHERE id='$id'";
            $select = mysqli_query($koneksi,$query);
            $display = mysqli_fetch_assoc($select);
            $nama = $display['nama'];
    }
    }
?>

<?php

// include ("koneksi.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        echo $email;
        echo $nama;
        echo $no_hp;
        echo $password;
        setcookie('warna', $_POST['warna'], time()+3600,'/');
        if ($password==$konfirmasi){
            $query = "UPDATE user_fauziah SET nama='$nama', no_hp='$no_hp', password='$password' WHERE id=$id";
            $insert = mysqli_query($koneksi,$query);
            header("Location: ../home.php");
        }
    }


    // echo ($id);
    // echo ("\n");
    // echo ($nama_mobil);
    // echo ($pemilik);
    // echo ($merk);
    // echo ($tanggal);
    // echo ($deskripsi);
    // echo ($status);

    
?>
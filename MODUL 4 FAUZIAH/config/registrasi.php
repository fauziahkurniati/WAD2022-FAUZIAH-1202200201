<?php
    session_start();
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $nohp = isset($_POST['no_hp']) ? $_POST['no_hp'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $konfirmasi = isset($_POST['konfirmasi']) ? $_POST['konfirmasi'] : null;

        $cekemail = mysqli_query($koneksi, "SELECT email FROM user_fauziah WHERE email = '$email'");
        if(mysqli_fetch_assoc($cekemail)){
            header("Location: ../register.php?erroremail=true");
        } else{
            if($password == $konfirmasi){
                $query = "INSERT INTO user_fauziah (id, nama, email, password, no_hp) VALUES ('','$nama','$email','$password','$nohp')";
                $insert = mysqli_query($koneksi,$query);
                header("Location: ../login.php");
            } else{
                header("Location: ../register.php?error=true");
            }
        }
    }
?>
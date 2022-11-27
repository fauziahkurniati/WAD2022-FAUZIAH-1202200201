<?php
        session_start();
        include("koneksi.php");
        setcookie('id', $id, time()-3600,'/');
        setcookie('password', $password, time()-3600,'/');
        session_destroy();

        header("Location: ../home.php")
    ?>
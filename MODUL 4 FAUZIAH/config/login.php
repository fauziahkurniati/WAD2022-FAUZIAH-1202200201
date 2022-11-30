<?php 

session_encode();
include("koneksi.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user_fauziah WHERE email='$email'";
    $select = mysqli_query($koneksi,$query);
    $display = mysqli_fetch_assoc($select);
    $id = $display['id'];
    if($password == $display['password']){

        if(isset($_POST['remember'])){
            setcookie('id', $id, time()+1800,'/');
            setcookie('password', $password, time()+1800,'/');

        }else{

            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
        }
        header("Location: ../home.php");
    } else{
        header("Location: ../login.php?error=true");
    }
}
?>
<?php
    include("config/koneksi.php");

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

    $warna = isset($_COOKIE['warna']) ? $_COOKIE['warna'] : "bg-primary";

    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark <?php echo $warna; ?> fixed-top">
        
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    
                <?php if(isset($nama)) { ?>
                    <?php 
                        $queryCek = "SELECT * FROM showroom_fauziah_table";
                        $result = mysqli_query($koneksi,$queryCek);
                        $cek = mysqli_num_rows($result);
                        if ($cek>0){ ?>
                            <a class="nav-link" href="myshowroom.php">My Car</a>
                    <?php } else{
                        echo '<a class="nav-link" href="login.php">My Car</a>';
                     }
                    ?>
                    <?php } ?>
                       

                    
                </li>
                
            </ul>
            </div>
        </div>
        <div class="d-flex me-5 mt-2 navbar-dark">

            

            <?php if(isset($nama)) { ?>
                <div class="btn-group mx-2">
                <a class="btn btn-light text-primary" href="add.php" style="width: 100px;" aria-expanded="false">Add Car</a>
            </div>
                <div class="btn-group mx-2" role="group">
                <button type="button" class="btn btn-light text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $nama;?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">Profil</a></li>
                    <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                </ul>
            </div>
              <?php } else { ?>
                <div class="navbar-nav active mx-2">
                <a class="nav-link active navbar-dark" aria-current="page" href="login.php">Login</a>
            </div>
              <?php } ?>
        </div>
    </nav>

    <div class="container p-5">
        <div class="row vh-100 align-items-center">

            <!-- COLOM 1 -->
            <div class="col">
                <h2>Selamat datang di showroom Fauziah</h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias unde quae repudiandae minus non, obcaecati quaerat blanditiis ab quod eius, laudantium dolorem facere placeat sunt! Nobis vitae corporis sit?</p>
                <a href="
                <?php 
                 if ($cek>0) {
                    echo 'myshowroom.php';
                 } else {
                    echo 'add.php';
                 }
                 
                ?>
                " class="btn btn-primary fw-light px-4 py-2">My Car</a>
                <div class="d-flex justify-content-start">
                    <div class="row mt-5">
                        <div class="col">
                            <img src="asset\logo-ead.png" style="width: 68px;" alt="">
                        </div>
                        <div class="col">
                            <p>FAUZIAH KURNIATI_1202200201</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">
                <img src="asset\rr.jpg" style="width: 480px" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
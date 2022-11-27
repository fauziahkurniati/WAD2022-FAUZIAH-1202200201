<?
require_once 'config/insert.php';
?>

<?php
    include("config/koneksi.php");
    $warna = isset($_COOKIE['warna']) ? $_COOKIE['warna'] : "bg-primary";

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
                        echo '<a class="nav-link" href="add.php">My Car</a>';
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

    <div class="container my-3">

        <!-- title -->
        <h2 class="fw-bold">Tambah mobil</h2>
        <p>Tambah mobil ke showroom</p>
        <!-- end title -->
        
        <!-- form -->
        <div class="row">
            <form action="config/insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Nama mobil</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Nama pemilik</label>
                    <input type="text" name="pemilik" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Merk</label>
                    <input type="text" name="merk" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Foto</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Status</label>
                    <div class="form-check">
                        <input value="lunas" class="form-check-input" type="radio"  name="status" id="flexRadioDefault1">
                        <label  class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="belum lunas" class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum lunas
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


<?php
    include("config/koneksi.php");
    $warna = isset($_COOKIE['warna']) ? $_COOKIE['warna'] : "bg-primary";

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
            $warna = isset($_COOKIE['warna']) ? $_COOKIE['warna'] : "bg-primary";

    }
    }
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
                    <li><a class="dropdown-item" href="#">Profil</a></li>
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

    <div class="container my-5 ">
        <div style="padding-top: 100px;" class="col">
            <div class="row text-center ">
                <h1>Profile</h1>
            </div>
            <div class="row mt-5">
                <form action="config/editprofile.php" method="POST">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" readonly class="form-control-plaintext" id="email" name="email" value="<?php echo $display['email'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $display['nama'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $display['no_hp'];?>">
                        </div>
                    </div>

                    <div style="margin-top: 40px; margin-bottom: 40px;">
                        <hr>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passwprd" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="konfirmasi" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Warna Navbar</label>
                        <div class="col-sm-10">
                            <select class="form-select"  name="warna" id="warna" aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
                                <option selected value="bg-primary">Blue</option>
                                <option value="bg-info">Cyan</option>
                                <option value="bg-dark">Dark</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary my-2 text-centre">Update</button>

                    </div>
                </form>
            </div>   
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
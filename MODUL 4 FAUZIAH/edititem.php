<!-- <?
require 'home.php';
?> -->

<?php
    include("config/koneksi.php");
    $id_mobil = $_POST['submit'];

    $query = " SELECT * FROM showroom_fauziah_table WHERE id_mobil=$id_mobil";
    $select = mysqli_query($koneksi,$query);
    $mycar = mysqli_fetch_assoc($select);
    // $data_tag = explode(', ', $display['tag']);
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
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark <?php echo $warna; ?> sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">My Car</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <div class="container my-3">


        <h2 class="fw-bold">EDIT</h2>
        <p>Detail mobil <?php echo $mycar["nama_mobil"]; ?></p>

        <div class="row">
            <div class="col">
                <img src="image/<?php echo $mycar['foto_mobil'] ?>" style="width: 512px;" alt="">
            </div>
            <div class="col">
                <form method="POST" action="config/edit.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama mobil</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $mycar["nama_mobil"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama pemilik</label>
                        <input type="text" name="pemilik" class="form-control" id="exampleInputPassword1" value="<?php echo $mycar["pemilik_mobil"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" id="exampleInputPassword1" value="<?php echo $mycar["merk_mobil"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="exampleInputPassword1" value="<?php echo $mycar["tanggal_beli"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="desk" class="form-label">Deskripsi</label>
                        <textarea name="desk" cols="100" rows="3"><?php echo $mycar["deskripsi"]; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" readonly name="foto" class="form-control" id="exampleInputPassword1" value="<?php echo $mycar["foto_mobil"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" <?php
                                    if ($mycar['status_pembayaran'] == "lunas"){
                                        echo 'checked';
                                    }
                                  ?>>
                            <label class="form-check-label" for="status">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" <?php
                                    if ($mycar['status_pembayaran'] == "belum lunas"){
                                        echo 'checked';
                                    }
                                  ?>>
                            <label class="form-check-label" for="status">
                                Belum Lunas
                            </label>
                        </div>
                    </div>
                    <button value="<?php echo $mycar["id_mobil"]; ?>" name="submit" id="submit" type="submit" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


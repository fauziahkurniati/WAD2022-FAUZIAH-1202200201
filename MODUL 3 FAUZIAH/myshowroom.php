<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<?php
    include('config/koneksi.php')
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="myshowroom.php">My Car</a>
                </li>
            </ul>
            <form class="d-flex justify-content-end" action="#">
                <a href="add.php" class="btn btn-light">Add car</a>
            </form>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <h2 class="fw-bold">My showroom</h2>
        <p class="fw-light">List showroom Nama-NIM</p>
        <!-- read -->
            <div class="row g-2">
            <?php
                $sql = "SELECT * FROM mobil ORDER BY id ASC";
                $query = mysqli_query($koneksi, $sql);

                //cek kalau error
                if(!$query){
                    die("Error".mysqli_errno($koneksi));
                }
            
                while($mycar = mysqli_fetch_assoc($query)){
            ?>
                <div class="col-4">
                    <div class="card">
                        <!-- <img src="" class="card-img-top"> -->
                        <!-- <img src="building.png" alt=""> -->
                        <img src="<?php echo $mycar['foto_mobil']?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mycar['nama_mobil']?></h5>
                            <!-- <h5 class="card-title"></h5> -->
                            <p class="card-text"><?php echo $mycar['deskripsi']?></p>  
                            <div class="d-flex justify-content-start">
                                <div class="row">
                                    <div class="col">
                                        <a href="detail.php?id_mobil=<?php echo $mycar['id_mobil'];?>" class="btn btn-primary rounded-4">Detail</a>
                                    </div>
                                    <div class="col">
                                        <a href="config/delete.php?id_mobil=<?php echo $mycar['id_mobil'];?>" class="btn btn-danger rounded-4">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
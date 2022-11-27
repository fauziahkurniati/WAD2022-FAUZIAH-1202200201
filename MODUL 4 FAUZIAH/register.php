<?php     $warna = isset($_COOKIE['warna']) ? $_COOKIE['warna'] : "bg-primary";
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
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="padding: 0%;">
              <img src="asset/car.jpg" alt="" style="max-height: 960px;width: 100%;">
            </div>
            <div class="col my-auto mx-5 px-5">
                <form method="POST" action="config/registrasi.php">
                    <h1>Register</h1>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <?php  $erroremail = isset($_GET['erroremail']) ? $_GET['erroremail'] : null; ?>
                    <?php  if (isset($erroremail)) : ?>
                        <p style='text-align: center; color:red'>email sudah terdaftar</p>
                    <?php endif; ?>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nomor handphone</label>
                      <input type="number" class="form-control" id="no_hp" name="no_hp" aria-describedby="emailHelp">
                    </div>
                    <!-- password -->
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                      <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
                    </div>
                    <?php  $error = isset($_GET['error']) ? $_GET['error'] : null; ?>
                    <?php  if (isset($error)) : ?>
                        <p style='text-align: center; color:red'>konfirmasi password tidak sesuai</p>
                    <?php endif; ?>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary my-3">Daftar</button>
                  </form>
                  <p>Anda sudah punya akun? <a href="login.php">Login</a></p>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
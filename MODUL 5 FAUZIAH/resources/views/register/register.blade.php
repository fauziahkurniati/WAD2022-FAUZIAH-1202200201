<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="padding: 0%;">
              <img src={{ asset('img\car.jpg') }} style="max-height: 960px;width: 100%;">
            </div>
            <div class="col my-auto mx-5 px-5">
                <h1>Registrasi Akun</h1>
                <form action="/registeruser" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" placeholder="your name" name="nama" required>
                        <label for="nama">Nama</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required name="email">
                        <label for="email">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" required name="password">
                        <label for="password">Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="no_hp" placeholder="your number phone" required name="no_hp">
                        <label for="no_hp">No Handhphone</label>
                      </div>
                      <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Submit</button>
                </form>
                  <small>Anda sudah punya akun? <a href="/login">Login</a></small>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
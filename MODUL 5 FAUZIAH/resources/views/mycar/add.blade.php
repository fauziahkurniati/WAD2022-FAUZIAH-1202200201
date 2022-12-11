@include('layouts.navbar')
<title> {{  $title }}</title>
<body>

    <div class="container my-3">

        <!-- title -->
        <h2 class="fw-bold">Tambah mobil ke showroom</h2>
        <!-- end title -->
        
        <!-- form -->
        <div class="row">
            <form action="tambahmobil" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label fw-bold">Nama mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="pemilik_mobil" class="form-label fw-bold">Nama pemilik</label>
                    <input type="text" name="pemilik_mobil" class="form-control" id="pemilik_mobil" required>
                </div>
                <div class="mb-3">
                    <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                    <input type="text" name="merk_mobil" class="form-control" id="merk_mobil" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto_mobil" class="form-label fw-bold">Foto</label>
                    <input type="file" name="foto_mobil" class="form-control" id="foto_mobil" required>
                </div>
                <div class="mb-3">
                    <label for="status_pembayaran" class="form-label fw-bold">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault1" value="Lunas">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" checked value="Belum Lunas">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Belum Lunas
                        </label>
                      </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <script>
    document.getElementById("foto_mobil").addEventListener("input", () => console.log(document.getElementById("foto_mobil").value));
    document.getElementById("flexRadioDefault2").addEventListener("input", () => console.log(document.getElementById("flexRadioDefault2").value));
  </script>
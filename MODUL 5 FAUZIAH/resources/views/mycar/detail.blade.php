@include('layouts.navbar')
<title> Detail Car </title>
<body>
       <div class="container my-3">


        <h2 class="fw-bold">{{ $item->nama_mobil }}</h2>
        <p>Detail mobil {{ $item->nama_mobil }}</p>

        <div class="row">
            <div class="col">
                <img src="image/<?php echo $mycar['foto_mobil'] ?>" style="width: 512px;" alt="">
            </div>
            <div class="col">
                <form method="POST" action="edititem.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama mobil</label>
                        <input type="text" name="name" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $item->nama_mobil }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama pemilik</label>
                        <input type="text" name="pemilik" class="form-control" readonly id="exampleInputPassword1" value="{{ $item->pemilik_mobil }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" readonly id="exampleInputPassword1" value="{{ $item->merk_mobil }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" readonly id="exampleInputPassword1" value="{{ $item->tanggal_beli }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>

                        <textarea readonly name="" id="" cols="100" rows="3">{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" readonly id="exampleInputPassword1" value="{{ $item->foto_mobil }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" <?php
                                    if ($mycar['status_pembayaran'] == "lunas"){
                                        echo 'checked';
                                    }
                                  ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Lunas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?php
                                    if ($mycar['status_pembayaran'] == "belum lunas"){
                                        echo 'checked';
                                    }
                                  ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum Lunas
                            </label>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
                    <button value="{{ $item->id }}" name="submit" id="submit" type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
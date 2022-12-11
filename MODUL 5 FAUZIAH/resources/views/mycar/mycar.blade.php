@include('layouts.navbar')
<title> My Car </title>
<body>

    <div class="container p-5">
        <h2 class="fw-bold">My showroom</h2>
        <p class="fw-light">List showroom Fauziah Kurniati- 1202200201</p>
        <!-- read -->
            <div class="row g-2">
@foreach ($showroom as $item)
<div class="col-4">
    <div class="card">
        <img src="{{ asset($item->foto_mobil) }}" class="card-img-top" alt="uknown">
        <div class="card-body">
            <h5 class="card-title">{{ $item->nama_mobil }}</h5>
            <p class="card-text">{{ $item->deskripsi }}</p>  
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col">
                        <a href="itemdetail.php?id_mobil=" class="btn btn-primary rounded-4">Detail</a>
                    </div>
                    <div class="col">
                        <a href="/delete/{id}" class="btn btn-danger rounded-4">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
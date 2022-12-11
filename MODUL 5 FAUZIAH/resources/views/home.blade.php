@include('layouts.navbar')
<title> Dashboard </title>
<body>
<div class="container p-5">
    <div class="row vh-100 align-items-center">

        <!-- COLOM 1 -->
        <div class="col">
            <h2>Selamat datang di showroom Fauziah</h2>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias unde quae repudiandae minus non, obcaecati quaerat blanditiis ab quod eius, laudantium dolorem facere placeat sunt! Nobis vitae corporis sit?</p>
            <a href="
           
            " class="btn btn-primary fw-light px-4 py-2">My Car</a>
            <div class="d-flex justify-content-start">
                <div class="row mt-5">
                    <div class="col">
                        <img src={{ asset('img\logo-ead.png') }} style="width: 68px;" alt="">
                    </div>
                    <div class="col">
                        <p>FAUZIAH KURNIATI_1202200201</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <img src={{ asset('img\car.jpg') }} style="width: 480px" alt="">
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
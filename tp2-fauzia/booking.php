<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>TP MODUL 2 FAUZIAH 1202200201</title>
</head>


<body>
       <!-- NAVBAR -->
       <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center">
        <div class="navbar-center" id="navbarNav">
             <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="home.php">Home </a>
                </li>
                  <li class="nav-item active">
                       <a class="nav-link" href="booking.php">Booking <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="mybooking.php">My Booking </a>
                  </li> -->
             </ul>
        </div>
   </nav>


        <section id="form">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <h4 align="center" style="font-weight:bold">Rent your car now!</h4>
            </div>
            <div class="container" style="border: 1px solid rgb(228,228,228); max-width : 78%; border-radius : 5px">
                <div class="row">
                    <div class="col">
                        <?php
                        $mobil = isset($_GET['mobil']) ? $_GET['mobil'] : null;
                          
                        if ($mobil=="Tesla Model X 2020"){
                         '<img src="https://img.inews.co.id/files/inews_new/2022/03/24/Tesla_Model_X_2020.jpg" class="card-img-top" alt="...">';
                      } elseif ($mobil=="Rolls Royce Phantom"){
                        echo '<img src="https://momobil.id/news/wp-content/uploads/2020/05/rolls-royce-phantom-1024x576.jpg" class="card-img-top" alt="...">';
                      } elseif ($mobil=="Ford Mustang Mach-E GT 2021"){
                        echo '<img src="https://img.inews.co.id/files/inews_new/2022/03/24/Ford_Mustang.jpg" class="card-img-top" alt="...">';
                      } else {
                        echo '<img src="https://img.inews.co.id/files/inews_new/2022/03/24/Tesla_Model_X_2020.jpg" class="card-img-top" alt="...">';
                      }
                        ?>


                        
                    </div>
                    <div class="col">
                    <form action="mybooking.php" method="post" autocomplete="off">
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" name="name" type="text" value="FAUZIAH_1202200201" readonly>
                                
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="date" class="form-label">Book Date</label>
                            <input type="date" id="date" name="date" class="form-control" placeholder="mm / dd / yyyy">
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="start" class="form-label">Start Time</label>
                            <input type="time" name ="time" id="time" class="form-control" placeholder="-- : -- --">
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Duration (Days)</label>
                            <input type="number" name="duration" id="duration" class="form-control" min="1" max="7">
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="type" class="form-label">Car Type</label>
                            <select id="car_type" name="car_type" class="form-select" onchange="priceFunction()"aria-label="Default select example">
                            <option>Choose your cars</option>
                                <option <?php
                                  if($mobil == "Tesla Model X 2020"){
                                    echo 'selected';
                                  }
                                ?> value="Tesla Model X 2020">Tesla Model X 2020</option>
                                <option <?php
                                  if($mobil == "Rolls Royce Phantom"){
                                    echo 'selected';
                                  }
                                ?> value="Rolls Royce Phantom">Rolls Royce Phantom</option>
                                <option <?php
                                  if($mobil == "Ford Mustang Mach-E GT 2021"){
                                    echo 'selected';
                                  }
                                ?> value="Ford Mustang Mach-E GT 2021">Ford Mustang Mach-E GT 2021</option>
                            </select>
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="service"> Add Service(s):</label>
                            <div class="form-check">
                                <input class="form-check-input" name="service[]" type="checkbox" value="Health protocol" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Health protocol / Rp25.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="service[]" type="checkbox" value="Driver" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Driver / Rp100.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="service[]" type="checkbox" value="Fuel filled" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Fuel filled / Rp900.000
                                </label>
                            </div>
                            <div class="d-grid gap-2" style="margin-top : 30px;">
                                <input class="btn btn-success" type="submit" value="book" name="book">                      
                            </div>
                        </div>
                        </form>
                    </div>
        </section>
</body>

<!-- Footer -->
<Footer style="margin-top: 50px;">
    <div style="width: auto;">
      <p style="text-align: center;">
        Created by FAUZIAH KURNIATI_1202200201
      </p>
    </div>
  </Footer>
</html>
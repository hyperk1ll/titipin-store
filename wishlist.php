<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titipin</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        input[type='searchwishlist']{
            text-align: right;
        }
    </style>
</head>
  <body> 
    <header>
        <div class="px-3 py-2">
            <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
                <a class="nav-link d-inline-block me-auto" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                <div class="d-flex align-items-center">
                    <div class="input-group w-50">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./search.png" style="width: 32px;" /></button>
                    </div>
                    <button class="btn ms-3 d-inline-block" type="submit"><img src="./heart.png" /></button>
                    <button class="btn me-auto d-inline-block" type="submit"><img src="./basket.png" /></button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Sign In</button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Register</button> 
                </div>
            </div>
        </div>
    </header>
    <!-- Isi Utama Wishlist -->
    <div class="card" style="margin:30px;background-color: #D9D9D9;">
        <div class="card-header" style="background-color: #D9D9D9;">
            <div class="input-group ms-auto" style="width: 400px;">
                <input class="form-control" type="searchwishlist" placeholder="Search your wishlist" aria-label="Search">
                <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./search.png" style="width: 32px;" /></button>
            </div>
        </div>
        <div class="card-body" style="background-color: #D9D9D9;margin-bottom:75px;">
            <div class="text-center d-flex-column p-3">
                <img src="./Kocheng.png" style="width:350px">
                <p class="mt-2" style="font-family:'Nunito';font-size:20px;color:#FC4C02;"><strong>Your wishlist still empty ? ? ?</strong></p>
                <button class="btn btn-rounded w-25" style="background-color:#FC4C02;color:white;" type="submit">Add Some Stuff</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">

        </div>
        <!-- Left -->

    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Associate E-Commerce
            </h6>
            <p>
                <a href="#!" class="text-reset">Amazon</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Hobby Link Japan</a>
            </p>
            <p>
                <a href="#!" class="text-reset">eBay</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Alibaba</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Newsletter
            </h6>
            <p>
                Berlangganan Email
            </p>
            <div>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"><br style="border-bottom:1px dashed black">
                <button class="btn btn-danger btn-sm" type="submit" style="float: right;">Submit</button>
            </div>
            
            

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="bi bi-instagram"></i>
                </a>
                <div class="col-md-4"><br><br> 
                <p>
                <a href="#!" class="text-reset">Syarat & Ketentuan</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Kebijakan Privasi</a>
                </p>
                </div>
                
            </div>
            <!-- Right -->
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4"  style="background-color: #FC4C02; color:white;">
    Copyright ©2022 
        <a class="text-reset fw-bold" href="#">Titipin Store</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
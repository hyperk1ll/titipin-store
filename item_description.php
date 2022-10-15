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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .card {
            font-family: "nunito";
        }

        .product-status {
            color: rgb(255, 255, 255);
            padding: 4px 16px;
            border-radius: 20px;
            display: inline-block;
            font-weight: bold;
            font-family: "nunito";
            background: #77F292;
            margin-right: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            }
        
        .border-bottom {
            border-bottom: 1px;
        }

        .border-bottom-2 {
            border-bottom: 1px;
        }


    </style>

</head>
  <body> 
    <?php include('./header.php'); 
    require_once("./db_login.php");
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username ='".$username."'";
    $result = $db->query($query);
    if(!$result){
        die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
    }
    $row = $result -> fetch_assoc();?>
    <br>
    
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>           
                    
                    <div class="col-md-7">  
                        <div class="d-flex" style="font-family: nunito; font-weight:600; font-size: 26px;">Pop Up Parade Figure Kanade Yoisaki asd asdasdasdasd</div>
                        <div class="ecommerce">from Amazon</div>
                        <div class="product-status">Ready Stock</div>
                        <div class="border-bottom"></div>
                        <div class="d-flex" style="font-family: nunito; font-size:30px; font-weight:bold; color :#FC4C02;">
                            Rp 500.000
                        </div>
                        <div class="quantity" style="font-family: 'nunito'; "><b>Quantity</b></div>
                    
                        <div class="col-md-2">
                            <div class="input-group justify-content-center">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="" style="background-color: white; color: red; border: none; font-family: 'nunito'; font-weight: bold; font-size:26px;">-</button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="0" max="100" style="border: none; margin-left: 15px; font-family: 'nunito'; font-weight: bold;">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="" style="background-color: white; color: green; border: none; font-family: 'nunito'; font-weight: bold; margin-right: 55px; font-size:24px;">+</button>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="wishlist">
                                    <button class="btn btn-block" style="background-color: white; color: grey; width: 100%; border-radius: 10px; border-style: solid; border-width: 0.001em; border-color: grey;">Wishlist &nbsp;<span><i class="bi bi-heart"></i></span></button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="addtocart">
                                    <button class="btn btn-block" style="background-color: red; color: white; width: 100%; border-radius: 10px;">Add To Cart</button>      
                                </div>            
                            </div>
                        </div>
                        <br>
                        <div class="border-bottom"></div>
                        <div class="deskripsi" style="margin-top: 5px;">
                            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                        </div>
                        <br>
                       
                        <div class="row">
                            <div class="col-md-3">
                                <span>Jenis</span>
                            </div>
                            <div class="col-md-5">
                                <div class="bs-example">
                                    <button class="btn btn-sm btn-success disabled" type="button" style="border-radius: 20px; width: 90px;">Figure</button>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-3">
                                <div class="jenis">
                                    <span>E-commerce</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="E-commerce">
                                    <button class="btn btn-sm btn-success disabled" type="button" style="border-radius: 20px; width: 90px;">Amazon</button>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    </section>
    <?php include('./footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
  </body>
    
</html>
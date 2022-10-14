<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Titipin Store</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
        <!-- <script>
            let items = document.querySelectorAll('.carousel .carousel-item')

            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i=1; i<minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
           
        </script> -->

        <style>
            @media (max-width: 767px) {
                .carousel-inner .carousel-item > div {
                    display: none;
                }
                .carousel-inner .carousel-item > div:first-child {
                    display: block;
                }
            }

            .carousel-inner .carousel-item.active,
            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                display: flex;
            }

            /* medium and up screens */
            @media (min-width: 768px) {
                
                .carousel-inner .carousel-item-end.active,
                .carousel-inner .carousel-item-next {
                transform: translateX(25%);
                }
                
                .carousel-inner .carousel-item-start.active, 
                .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
                }
            }

            .carousel-inner .carousel-item-end,
            .carousel-inner .carousel-item-start { 
            transform: translateX(0);
            }

            .product-status {
            color: rgb(255, 255, 255);
            padding: 4px 16px;
            border-radius: 20px;
            display: inline-block;
            font-weight: bold;
            font-family: "nunito";
            background: #77F292;
            }

            .form-link-req {
                background: #fff;
                box-shadow: 2px 2px 5px #000000;
                padding: 10px;
                /* border: 0.5px solid grey; */
                border-radius: 10px;
            }

            .custom-link {
                margin-top: 10px;
                margin-left: 20px;
            }

            .submit-custom-link {
                background-color: #FC4C02;
                color: white;
                border-radius: 20px;
                border: none;
                float: right;
                font-weight: bold;
                font-family: "nunito";
                width: 80px;
                height: 35px;
            }   

            .custom-link-input {
                border-radius: 20px;
                margin-top: -10px;
                margin-bottom: 10px;
            }

            input[type='url']{
                text-align: right;
            }

        </style> 

    </head>
    
    <body> 
    <!-- Header -->
    <?php include("./header.php"); ?>

        <!-- Carousel -->
        <section>
        <div class="card" style="background-color: #AD3300;">
            <div class="card-body">
                
                <!--Carousel Wrapper-->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>
                    </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item active">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>
                    </div>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="./assets/2.jpg" alt="Card image cap">
                            </div>
                        </div>
                    </div>

                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->             
                
                <!--Controls-->
                <button class="carousel-control-prev" role="button" href="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" role="button" href="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <!--/.Controls-->

                </div>
                <!--/.Carousel Wrapper-->

            </div>
        </div>
        </section><br>

    <!-- Custom Link Req -->
    <section class="container-fluid">
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
        

        
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        
        
        <form class="form-container" method="post">
            <div class="card form-link-req" style="border-radius: 10px;">
                <div class="card-title custom-link">
                    <h6 class="font-weight-bold" style="color: #FC4C02; font-size: 20px;">Custom Link Req</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="url" class="form-control custom-link-input" id="url" placeholder="add your own desire link to khilaf">
                        <button type="submit" class="submit-custom-link" id="">submit</button>
                    </div>
                </div>
            </div>
            
        </form>
        </section>
        </section>
    </section>

    <!-- Product List : Amazon Best Seller -->
    <section class="product-list-content">  
        <div class="fw-bolder Amazon" style="margin: 20px; font-size: 35px; font-family: nunito; color:#FC4C02;"><strong>Amazon Best Seller</strong></div>
        <div class="card-body" style="background-color: #D9D9D9;margin : 20px;">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Product List : Hobby Link Japan Best Seller -->
    <section class="product-list-content">
        <div class="fw-bolder Amazon" style="margin: 20px; font-size: 35px; font-family: nunito; color:#FC4C02;"><strong>Hobby Link Japan Best Seller</strong></div>
        <div class="card-body" style="background-color: #D9D9D9;margin : 20px;">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Product List : eBay Best Seller -->
    <section class="product-list-content">  
        <div class="fw-bolder Amazon" style="margin: 20px; font-size: 35px; font-family: nunito; color:#FC4C02;"><strong>eBay Best Seller</strong></div>
        <div class="card-body" style="background-color: #D9D9D9;margin : 20px;">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">              
                        <img src="https://cdn.kyou.id/items/122035-pop-up-parade-figure-kanade-yoisaki-hatsune-miku-colorful-stage.jpg.webp"/>
                        <div class="card-body">
                            <div class="product-status">Ready Stock</div>
                            <div>
                                <div class="d-flex" style="font-family: nunito; font-weight:600;">
                                    Pop Up Parade Figure Kanade Yoisaki
                                </div>
                                <div class="d-flex" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">
                                    Rp 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer><?php include 'footer.php';?></footer>
  </body>
    
</html>
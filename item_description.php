<?php include("./session_start.php"); ?>
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

        .quantity {
            display: inline-block;
        }
        #wishlisticonunclicked{
            color:default;
        }
        #wishlisticonclicked{
            color:red;
        }

    </style>

</head>
  <body>
    <?php include("./header.php"); ?>
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
                            <?php  
                            $id_barang = $_GET['id_barang'];
                            require_once("./db_login.php");
                            $username = $_SESSION['username'];
                            $query = "SELECT * FROM best_seller WHERE id_barang ='".$id_barang."'";
                            $result = $db->query($query);
                            if(!$result){
                                die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
                            }
                            $row = $result -> fetch_object();?>
                            <?php 
                            preg_match('([a-zA-Z]+[0-9]+)',$row->link_ecommerce,$match);?>

                            <?php                   
                            preg_match('([a-zA-Z]{3})',$match[0],$match2);
                            preg_match('(B[0-9]{2}[0-9A-Z]{7}|[0-9]{9}(?:X|[0-9]))',$row->link_ecommerce,$matches);
                            $ecommerce = $row->nama_ecommerce?>
                            <div class="carousel-inner">
                                <?php if($ecommerce == "HBJ"){?>
                                    <div class="carousel-item active">
                                    <img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_0.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                <?php } ?>
                                <?php if($ecommerce == "Amazon"){?>
                                    <div class="carousel-item active">
                                    <img src="https://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=<?php echo( $matches[0] );?>&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=SL250/>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                <?php } ?>
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
                        <div class="d-flex" style="font-family: nunito; font-weight:600; font-size: 26px;"><?php echo $row->nama_produk?></div>
                        <?php $status = $row -> status;
                                if($status == "Ready Stock"){
                                    $color = 'background: #77F292';
                                }
                                elseif($status == "Pre Order"){
                                    $color = 'background: #AD77F2';
                                } ?>
                                <div class="product-status" style="<?php echo $color?>;">
                                    <?php echo $row->status ?>
                                </div>
                        <div class="border-bottom"></div>
                            <div class="d-flex" style="font-family: nunito; font-size:30px; font-weight:bold; color :#FC4C02;">
                                <?php 
                                $harga = (($row->harga)*15000);
                                echo "Rp ". number_format($harga, 0, ".", ".")."<br />"; ?>
                            </div>
                        <div class="row">
                            <div class="quantity" style="font-family: 'nunito'; "><b>Quantity</b></div>                
                                <div class="col-md-2">
                                    <div class="input-group justify-content-center">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus"  data-type="minus" data-field="" style="background-color: white; color: red; border: none; font-family: 'nunito'; font-weight: bold; font-size:26px;">-</button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="0" max="100" style="border: none; margin-left: 15px; font-family: 'nunito'; font-weight: bold; text-align: center; size: 1; border:#FC4C02 1px solid;">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus" data-type="plus" data-field="" style="background-color: white; color: green; border: none; font-family: 'nunito'; font-weight: bold; font-size:24px;">+</button>
                                        </span>
                                    </div>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="wishlist">
                                    <a href="addtowishlist.php?id=<?php echo $row->id_barang; ?>"><button class="btn btn-block" id="btn-wishlist" style="background-color: white; color: grey; width: 100%; border-radius: 10px; border-style: solid; border-width: 0.001em; border-color: grey;">Wishlist &nbsp;<i class="fa-solid fa-heart" id="wishlisticonunclicked"></i></button></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="addtocart">
                                    <button class="btn btn-block w-25" style="background-color: red; color: white; border-radius: 10px;"><i class="fa-solid fa-cart-shopping" ></i>&nbsp;Add To Cart</button>      
                                </div>            
                            </div>
                        </div>
                        <br>
                        <div class="border-bottom"></div>
                        <div class="deskripsi" style="margin-top: 5px;">
                                <?php echo $row -> deskripsi_produk?>
                        </div>
                        <br>
                       
                        <div class="row">
                            <div class="col-md-3">
                                <span>Jenis</span>
                            </div>
                            <div class="col-md-5">
                                <div class="bs-example">
                                    <button class="btn btn-sm btn-success disabled" type="button" style="border-radius: 20px; width: 90px;"><?php echo $row->jenis ?></button>
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
                                    <button class="btn btn-sm btn-success disabled" type="button" style="border-radius: 20px; width: 90px;"><?php echo $row->nama_ecommerce ?></button>
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
    <script src="./script.js"></script>
    <script src="https://kit.fontawesome.com/8cc297976c.js" crossorigin="anonymous"></script>
  </body>
    
</html>
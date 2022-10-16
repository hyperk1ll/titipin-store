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
        body {
            font-family: "nunito";
        }

       .border-bottom {
            border-bottom: 1px;
        }

        .border-top {
            border-top: 1px;
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

        .currency {
            float: right;
            margin-right: 7px;
        }

    </style>
</head>
  <body> 
    <?php include('./header.php'); ?>
    <div class="border-bottom"></div>
    
    
    
    <section class="">

        <!-- Detail Pengiriman -->
        <div class="container-fluid px-5">
            <div class="fw-bolder" style="margin: 20px; font-size: 25px; font-family: nunito;"><strong>Detail Pengiriman</strong></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex card flex-column">
                        <div class="card-header">
                            <strong style="font-size: 20px;">Sadira Taruna Calvindoro</strong>      <!-- Parsing Nama User -->
                            <div style="float: right;">
                                <a href="./checkout_input_address.php" style="color: red; font-size: 20px">Edit Alamat</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                            
                            <div class="col-md-10">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/no_location.png" width="150px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="scrollshippinglist">
                                    <div style="font-size: 20px; float: right;">Shipping List</div>
                                    <button class="w-100 h-100" type="button" style="background-color: red; color: white;border-radius: 10px; border: none; text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Choose&nbsp; ⮟</button>
                                </div>
                            </div>
                            
                            
                            </div>
                            <br><br>
                            <div class="border-bottom"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-center" style="font-size: 20px;"><strong>Payment Details</strong></div>

                            <table style="padding: 10px; width: 100%">
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="currency">Rp. 16.000.000</td>   <!-- Jumlah dari Subtotal dari Detail Pesanan di parsing ke sini -->
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="currency">Rp. 100.000</td>    <!-- Anggap Biasa Shipping Pasti 100k -->
                                </tr>
                                <tr>
                                    <td>Admin Fee</td>
                                    <td class="currency">Rp. 15.000</td>    <!-- Anggap Admin Fee selalu 15k -->
                                </tr>
                                <tr style="line-height: 40px;">
                                    <td><strong>Total</strong></td>
                                    <td class="currency"><strong>Rp. 16.115.000</strong></td>
                                </tr>
                                <tr>
                                    <td>Saldo</td>
                                    <td class="currency">Rp. 17.000.000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="currency">Rp. 16.115.000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="float: right;">__________ -</td>
                                </tr>
                                <tr>
                                    <td>Saldo Akhir</td>
                                    <td class="currency">Rp. 885.000</td>
                                </tr>
                            </table>
                            <br>
                            <div class="d-flex justify-content-center""><button class="btn w-25" style="background-color: red; color: white; border-radius: 10px;">Pay Now</button></strong></div>
                            
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    

        

        <!-- Detail Pesanan -->
        <div class="container-fluid px-5">
            <div class="fw-bolder" style="margin: 20px; font-size: 25px; font-family: nunito;"><strong>Detail Pesanan</strong></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex card flex-column">
                        <div class="card-body">
                            
                            <!-- Item 1 -->
                            <div class="border-top"></div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="list-pesanan">
                                        <img src="./assets/1.png" class="d-block" width="230px" alt="...">
                                    </div>
                                </div>
                            
                            
                                <div class="col-md-7" style="margin-left: 30px;">
                                    <div class="product-status" style="margin-top: 25px;">Ready Stock</div>     <!-- Conditional Lagi Kaya yang $status di item_description -->

                                    <div class="d-flex" style="font-family: nunito; font-weight:600; font-size: 15px;">Pop Up Parade Figure Kanade Yoisaki asd asdasdasdasasdasdd</div>     <!-- Parsing Nama Item -->
                                    <div class="d-flex" style="font-family: nunito; font-size:30px; font-weight:bold; color :#FC4C02;">      <!-- Parsing Harga Item -->
                                        Rp 500.000
                                    </div><br>
                                    <div class="quantity" style="font-family: 'nunito'; "><b>Quantity : 12</b></div>    
                                </div>

                                <div class="col-md-2" style="margin-left: 30px;">
                                    <div class="subtotal" style="margin-top: 25px; font-size: 20px;">
                                        Subtotal
                                        <div class="" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">Rp. 6.000.000</div>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="border-top"></div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="list-pesanan">
                                        <img src="./assets/1.png" class="d-block" width="230px" alt="...">
                                    </div>
                                </div>
                            
                            
                                <div class="col-md-7" style="margin-left: 30px;">
                                    <div class="product-status" style="margin-top: 25px;">Ready Stock</div>     <!-- Conditional Lagi Kaya yang $status di item_description -->

                                    <div class="d-flex" style="font-family: nunito; font-weight:600; font-size: 15px;">Pop Up Parade Figure Kanade Yoisaki asd asdasdasdasasdasdd</div>     <!-- Parsing Nama Item -->
                                    <div class="d-flex" style="font-family: nunito; font-size:30px; font-weight:bold; color :#FC4C02;">      <!-- Parsing Harga Item -->
                                        Rp 500.000
                                    </div><br>
                                    <div class="quantity" style="font-family: 'nunito'; "><b>Quantity : 20</b></div>    
                                </div>

                                <div class="col-md-2" style="margin-left: 30px;">
                                    <div class="subtotal" style="margin-top: 25px; font-size: 20px;">
                                        Subtotal
                                        <div class="" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;">Rp. 10.000.000</div>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Border Paling Bawah (diluar dari while) -->
                            <div class="border-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </section>

    
   

    <?php include('./footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
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
                            <?php  
                                // $id_pesanan = $_GET["id_barang"];
                                require_once("./db_login.php");
                                $username = $_SESSION['username'];
                                $query = "SELECT p.id_pesanan as id_pesanan,p.quantity as quantity,b.nama_produk as nama,b.id_barang,b.nama_ecommerce as ecommerce,b.link_ecommerce,b.harga as harga,b.status AS stat FROM pesanan p INNER JOIN best_seller b ON b.id_barang = p.id_barang";
                                $result = $db->query($query);
                                if(!$result){
                                    die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
                                }
                                $row = $result -> fetch_object();

                                $harga = (($row->harga)*15000);
                                $subtotal = (($row->harga)*15000) *$row->quantity;
                                $shipping = 100000;
                                $adminfee = 15000;
                                $total = $subtotal + $shipping + $adminfee;
                                
                                


                                $query2 = "SELECT * from user where username='".$username."'";
                                $result2 = $db->query($query2);
                                if(!$result2){
                                    die("Could not query the database: <br/>".$db->error."<br>Query: ".$query2);
                                }
                                $row2 = $result2 -> fetch_object();

                                $saldoakhir = $row2->saldo - $total;
                                ?>
                            <table style="padding: 10px; width: 100%">
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="currency"><?php echo "Rp ". number_format($subtotal, 0, ".", ".")."<br />"; ?></td>   <!-- Jumlah dari Subtotal dari Detail Pesanan di parsing ke sini -->
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="currency"><?php echo "Rp ". number_format($shipping, 0, ".", ".")."<br />"; ?></td>    <!-- Anggap Biasa Shipping Pasti 100k -->
                                </tr>
                                <tr>
                                    <td>Admin Fee</td>
                                    <td class="currency"><?php echo "Rp ". number_format($adminfee, 0, ".", ".")."<br />"; ?></td>    <!-- Anggap Admin Fee selalu 15k -->
                                </tr>
                                <tr style="line-height: 40px;">
                                    <td><strong>Total</strong></td>
                                    <td class="currency"><strong><?php echo "Rp ". number_format($total, 0, ".", ".")."<br />"; ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Saldo</td>
                                    <td class="currency"><?php echo "Rp ". number_format($row2->saldo, 0, ".", ".")."<br />"; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="currency"><?php echo "Rp ". number_format($total, 0, ".", ".")."<br />"; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="float: right;">__________ -</td>
                                </tr>
                                <tr>
                                    <td>Saldo Akhir</td>
                                    <td class="currency"><?php echo "Rp ". number_format($saldoakhir, 0, ".", ".")."<br />"; ?></td>
                                </tr>
                            </table>
                            <br>
                            <div class="d-flex justify-content-center"><button class="btn w-25" style="background-color: red; color: white; border-radius: 10px;">Pay Now</button></strong></div>
                            
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
                            
                            <!-- Item -->
                            <div class="border-top"></div>
                            <div class="row">
                                <?php  
                                // $id_pesanan = $_GET["id_barang"];
                                require_once("./db_login.php");
                                $username = $_SESSION['username'];
                                $query = "SELECT p.id_pesanan as id_pesanan,p.quantity as quantity,b.nama_produk as nama,b.id_barang,b.nama_ecommerce as ecommerce,b.link_ecommerce,b.harga as harga,b.status AS stat FROM pesanan p INNER JOIN best_seller b ON b.id_barang = p.id_barang";
                                $result = $db->query($query);
                                if(!$result){
                                    die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
                                }
                                $row = $result -> fetch_object();?>
                                <div class="col-md-2">
                                    <div class="list-pesanan" style="margin-top: 20px;">
                                    <?php 
                                    preg_match('([a-zA-Z]+[0-9]+)',$row->link_ecommerce,$match);?>

                                    <?php                   
                                    preg_match('([a-zA-Z]{3})',$match[0],$match2);
                                    preg_match('(B[0-9]{2}[0-9A-Z]{7}|[0-9]{9}(?:X|[0-9]))',$row->link_ecommerce,$matches);
                                    $ecommerce = $row->ecommerce?>
                                        <?php if($ecommerce == 'Amazon'){
                                            echo '<img src="https://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=.'.$matches[0].'&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=SL250/>" class="d-block" width="230px" alt="..."">';
                                        }
                                        elseif($ecommerce == 'HBJ'){
                                            echo '<img src="https://www.hlj.com/productimages/'.$match2[0].'/'.$match[0].'_0.jpg" class="d-block w-100" width="230px" alt="...">';
                                        }?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-7" style="margin-left: 30px;">
                                    <div class="product-status" style="margin-top: 25px;"><?php echo $row->stat ?></div>     <!-- Conditional Lagi Kaya yang $status di item_description -->

                                    <div class="d-flex" style="font-family: nunito; font-weight:600; font-size: 15px;"><?php echo $row->nama ?></div>     <!-- Parsing Nama Item -->
                                    <div class="d-flex" style="font-family: nunito; font-size:30px; font-weight:bold; color :#FC4C02;">      <!-- Parsing Harga Item -->
                                        <?php 
                                        $harga = (($row->harga)*15000);
                                        echo "Rp ". number_format($harga, 0, ".", ".")."<br />"; ?>
                                    </div><br>
                                    <div class="quantity" style="font-family: 'nunito'; "><b>Quantity : <?php echo $row->quantity ?></b></div>    
                                </div>

                                <div class="col-md-2" style="margin-left: 30px;">
                                    <div class="subtotal" style="margin-top: 25px; font-size: 20px;">
                                        Subtotal
                                        <?php $subtotal = (($row->harga)*15000) *$row->quantity; ?>
                                        <div class="" style="font-family: nunito; font-size:20px; font-weight:bold; color :#FC4C02;"><?php echo "Rp ". number_format($subtotal, 0, ".", ".")."<br />"; ?></div>
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
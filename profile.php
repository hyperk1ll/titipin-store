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
        input[type='searchwishlist']{
            text-align: right;
        }
        #dataUser{
            font-family: 'Nunito';
        }

        .body{
            font-family: "nunito";
        }
        .topup{
            display:none;
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
    
    <!-- Isi Utama Wishlist -->
    <div class="row">
        <div class="col">
            <div class="card" style="margin:30px;background-color: white; width: 48rem">
                <div class="card-body" style="background-color: white;margin-bottom:75px;">
                    <div class="row d-flex justify-content-between">
                        <div class="col d-flex flex-row" id="dataUser" style="margin-top:70px;">
                            <div class="d-flex flex-column">
                                <form action="" class="form" id="form" enctype="multipart/form-data" method="post" >
                                    <div class="upload">
                                        <?php 
                                        $usename = $row['username'];
                                        $nama = $row['nama_user'];
                                        $image = $row['image'];
                                        ?>
                                        <img src="./img/<?php echo $image;?>" class="rounded-circle" alt="" style="width:200px;height:200px;margin:0 20px 0 0;"></img>
                                    </div>
                                    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" style="width: 0px;height:0px;overflow:hidden;">
                                    <div class="d-flex justify-content-center" style="margin-right:20px;">
                                        <button class="btn w-75" type="button" style="background-color:#FC4C02;margin-top:3px;color:white;" onclick="uploadFile();">Choose File</button>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    document.getElementById("image").onchange = function(){
                                        document.getElementById('form').submit();
                                    };
                                </script>
                                <?php
                                    if(isset($_FILES["image"]["name"])){
                                        $username = $row['username'];
                                        $nama = $row['nama_user'];       
                                        $imageName = $_FILES["image"]["name"];
                                        $imageSize = $_FILES["image"]["size"];
                                        $tmpName = $_FILES["image"]["tmp_name"];

                                        //image validation
                                        $validImageExtension = ['jpg','jpeg','png'];
                                        $imageExtension = explode('.', $imageName);
                                        $imageExtension = strtolower(end($imageExtension));
                                        if(!in_array($imageExtension,$validImageExtension)){
                                            echo
                                            "
                                                <script>
                                                    alert('Invalid image extension!');
                                                    document.location.href='../titipin-store';
                                                </script>
                                            ";
                                        }
                                        elseif($imageSize >1200000){
                                            echo
                                            "
                                            <script>
                                                alert('Image size is too large');
                                                document.location.href = '../titipin-store';
                                            </script>
                                            ";
                                        }
                                        else{
                                            $newImageName = $nama."-".date("Y.m.d")."-".date("h.i.sa");
                                            $newImageName .= '.' . $imageExtension;
                                            $query = "UPDATE user SET image = '$newImageName' WHERE username ='".$username."'";
                                            $result = $db->query($query);
                                            if (!$result){
                                                die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
                                            } 
                                            else {
                                                $db->close();
                                            }
                                            move_uploaded_file($tmpName,'img/'.$newImageName);
                                            echo 
                                            "
                                            <script>
                                                document.location.href = '../titipin-store/profile.php';
                                            </script>
                                            ";
                                        }
                                    }?>
                            </div>
                            <div class="d-inline-block" style="margin: 40px 0 0px 0px;">
                                <table id="table">
                                    <tr>
                                        <td>Username :</td>
                                        <td contenteditable="false"> &nbsp;&nbsp;&nbsp;<?php echo $row['username'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama :</td>
                                        <td contenteditable="false">&nbsp;&nbsp;&nbsp;<?php echo $row['nama_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email : </td>
                                        <td contenteditable="false">&nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon: </td>
                                        <td contenteditable="false">&nbsp;&nbsp;&nbsp;<?php echo $row['no_telepon'] ?></td>
                                    </tr>
                                </table>
                                <div class="d-flex justify-content-end">
                                <button class="btn btn-sm d-inline-block" type="submit" onclick="inlineEdit()" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem;font-family:'Nunito';font-size:20px;background-color:#FC4C02;color:white;margin-top:5px;"><i class="fa-solid fa-pen-to-square" style="margin-right:3px;" ></i>Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="margin:30px;background-color: white; width: 48rem; height: 18rem;">
                <div class="card-body" style="background-color: white;margin-bottom:75px;">
                    <div class="row">
                        <div class="col">
                            <?php 
                                require_once("./db_login.php");
                                $username = $_SESSION['username'];
                                $query = "SELECT * from user where username='".$username."'";
                                $result = $db->query($query);
                                if(!$result){
                                    die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
                                }
                                $row = $result -> fetch_object(); ?>
                            <br>
                            <div class="saldo" style="font-size: 40px; font-family:nunito;"><strong>Total Saldo</strong></div>          
                            <div class="saldo" style="font-size: 40px; font-family:nunito; color:#FC4C02;"><strong><?php echo "Rp ". number_format($row->saldo, 0, ".", ".")."<br />"; ?></strong></div>
                            <br>
                            <br>
                            <div class="d-flex" id="pop_butt"><button class="btn w-15" style="background-color: #FC4C02; color: white; border-radius: 15px;font-family:nunito;">Top Up</button></strong></div>                                   
                        </div>
                        
                    </div>
                </div>             
        </div>
    </div>
        <script>
            document.getElementById('pop_butt').addEventListener("click", function() {
            document.querySelector('.topup').style.display = "inline";
            });

            function closeTopUp() {
                document.getElementById('btntopup').addEventListener("click", function() {
                    document.querySelector('.topup').style.display = "none";
                });

            }

            
        </script>              
        <div class="topup" style="position: absolute;">
                    <div class="row justify-content-center" style="padding: 200px;">
                        <div class="col-md-6">
                            <div class="d-flex card flex-column">
                                <div class="card-header"><strong style="font-size: 20px;">Top Up Saldo</strong>
                                <button id="btntopup" style="color: red; font-size: 20px; float:right; transform:rotate(45deg); background-color: #F7F7F7; border: none; cursor:pointer;" onclick="closeTopUp()">
                                +
                                </button>                           
                                </div>                             
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="d-flex">
                                                Total Saldo
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="scrollshippinglist">
                                                <?php echo "Rp ". number_format($row->saldo, 0, ".", ".")."<br />"; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                        <input type="number" class="form-control custom-link-input" id="uang" name="uang" placeholder="silahkan ketik nominal">
                                        <br>
                                        <div class="d-flex"><button type="submit" name="submit" class="btn w-15" style="background-color: #FC4C02; color: white; border-radius: 15px;font-family:nunito; float: right;">Top Up</button></strong></div>
                                        </div>
                                        
                                    </form>
                                    <?php 
                                        $saldoprev = $row->saldo;
                                        $uang = $_POST['uang'];
                                        $saldonew = $saldoprev + $uang;
                                        if (isset($_POST['submit'])){
                                            require_once("./db_login.php");
                                            $username = $_SESSION['username'];


                                            $query = "UPDATE user SET saldo=$saldonew where username='".$username."'";
                                            $result = $db->query($query);
                                            if(!$result){
                                                die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
                                            }
                                        }
                                        ?>
                                    
                                    <br><br>
                                    <div class="border-bottom"></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

    <?php include('./footer.php'); ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="./script.js" ></script>    
</html>

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
    <div class="card" style="margin:30px;background-color: white;">
        <div class="card-body" style="background-color: white;margin-bottom:75px;">
            <div class="row d-flex justify-content-between">
                <div class="col-md text-end" style="margin-top:80px;">
                </div>
                <div class="col-md-6 d-flex flex-row" id="dataUser" style="margin-top:70px;">
                    <div>
                        <img src="./assets/profile.png" class="rounded-circle" alt="width:200px;height:200px;"style="margin:0 20px 0 0;"></img>
                    </div>
                    <div class="d-inline-block" style="margin: 40px 0 0px 0px;">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td>: &nbsp;&nbsp;&nbsp;<?php echo $row['username'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: &nbsp;&nbsp;&nbsp;<?php echo $row['nama_user'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: &nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>: &nbsp;&nbsp;&nbsp;<?php echo $row['no_telepon'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    </div>

    <?php include('./footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
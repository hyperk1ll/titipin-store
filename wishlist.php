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
    <?php include('./header.php'); ?>
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

    <?php include('./header.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Titipin Store</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    
    <body> 
    <!-- Header -->
    <header>
        <div class="px-3 py-2">
            <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
                <a class="nav-link d-inline-block me-auto" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                <div class="d-flex align-items-center">
                    <div class="input-group w-50">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                    </div>
                    <button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button>
                    <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Sign In</button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Register</button> 
                </div>
            </div>
        </div>
    </header>

    <!-- Horizontal Scroll -->
    <section style="background-color: #AD3300;">
        <div class="container overflow-hidden text-center">
            <div class="row align-items-start">
                <style>.box{width: 410px;height: 260px; background: #D9D9D9; border-radius: 20px; margin: auto; text-align: center; vertical-align: middle;}</style>
                    <div class="col-4">
                        <div class="p-3 box">box 1</div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 box ">box 2</div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 box ">box 3</div>
                    </div>
                    <!-- <div class="col-4">
                        <div class="p-3 box ">box 4</div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 box ">box 5</div> -->
                    </div>
            </div>
        </div>
    </section>

    

    <footer><?php include 'footer.php';?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
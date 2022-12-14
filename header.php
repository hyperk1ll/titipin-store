<style>

    .border-bottom {
        border-bottom: 1px;
    }

</style>


<header>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <?php
        
        if(isset($_SESSION['username'])&&(isset($_SESSION['logged-in']))){
            $username = $_SESSION['username'];
            require_once('./db_login.php');
            $query = "SELECT * FROM user WHERE username ='".$username."'";
            $result = $db->query($query);
            if(!$result){
                die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
            }
            $row = $result -> fetch_assoc(); ?>

        <div class="px-3 py-2">
            <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                <div class="row d-flex-row">
                    <div class="col-sm">
                        <a class="nav-link d-inline-block" href="index.php" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                    </div>
                    <div class="col-xl-6" style="width: 40rem;">
                        <div class="d-flex align-items-center">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="" aria-label="Search">
                                <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                            </div>
                            <a href="wishlist.php"><button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button></a>
                            <a href="cart_best_seller.php"><button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button></a> 
                        </div>
                    </div>
                    <div class="col-md text-end" style="margin-top:10px">
                        <div class="dropdown" style="color:#FC4C02">
                            <a class="btn dropdown-toggle" style="color:#FC4C02;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./img/<?php echo $row['image'];?>" style="width:30px;height:30px" class="rounded-circle" alt=""></img> <?php echo "Hello, ".$row['nama_user']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="color:#FC4C02;" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" style="color:#FC4C02;" href="#">Settings</a></li>
                                <li><a class="dropdown-item" style="color:#FC4C02;" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="border-bottom"></div>
    <?php       
        }
        else{?>
            <div class="px-3 py-2">
                <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                    <div class="row">
                        <div class="col-md">
                            <a class="nav-link d-inline-block" href="index.php" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                        </div>
                        <div class="col-xl-6" style="width: 40rem;">
                            <div class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                                    <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                                </div>
                                <a href="login.php"><button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button></a>
                                <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                            </div>
                        </div>
                        <div class="col-md text-end" style="margin-top:5px;">
                            <a href="login.php"><button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Login</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <script src="https://kit.fontawesome.com/8cc297976c.js" crossorigin="anonymous"></script>

</header>
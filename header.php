<header>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <?php
        session_start();
        require_once('./db_login.php');
        if(isset($_SESSION['username'])&&(isset($_SESSION['logged-in']))){?>
        <div class="px-3 py-2">
                <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                    <div class="row d-flex-row">
                        <div class="col-sm">
                            <a class="nav-link d-inline-block" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                        </div>
                        <div class="col-xl-6" style="width: 40rem;">
                            <div class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                                    <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                                </div>
                                <a href="wishlist_empty.php"><button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button></a>
                                <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                            </div>
                        </div>
                        <div class="col-md text-end" style="margin-top:10px">
                            <div class="dropdown" style="color:#FC4C02">
                                <a class="btn dropdown-toggle" style="color:#FC4C02;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img alt=""><i class="fa-solid fa-user" style="margin-right: 5px;"></i></img> <?php echo $_SESSION['username'] ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color:#FC4C02;" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" style="color:#FC4C02;" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" style="color:#FC4C02;" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
    <?php       
        }
        else{?>
            <div class="px-3 py-2">
                <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                    <div class="row">
                        <div class="col-md">
                            <a class="nav-link d-inline-block" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                        </div>
                        <div class="col-xl-6" style="width: 40rem;">
                            <div class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                                    <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                                </div>
                                <a href="wishlist_empty.php"><button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button></a>
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
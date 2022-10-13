<header>
    <?php
        session_start();
        require_once('./db_login.php');
        if(isset($_SESSION['username'])&&(isset($_SESSION['logged-in']))){?>
        <div class="px-3 py-2">
                <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                    <div class="row">
                        <div class="col-md">
                            <a class="nav-link d-inline-block" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                        </div>
                        <div class="col-xl-6" style="width: 30rem;">
                            <div class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                                    <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                                </div>
                                <button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button>
                                <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                            </div>
                        </div>
                        <div class="col-md text-end">
                            <a href="logout.php"><button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Logout</button></a>
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
                        <div class="col-xl-6" style="width: 30rem;">
                            <div class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                                    <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                                </div>
                                <button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button>
                                <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                            </div>
                        </div>
                        <div class="col-md text-end">
                            <a href="login.php"><button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Sign In</button></a>
                            <a href="logout.php"><button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Logout</button></a>
                        </div>   
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
</header>

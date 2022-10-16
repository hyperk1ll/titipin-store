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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php require_once("./koneksi.php") ?>
    <?php require_once("./db_login.php") ?>
    <style>
        body {
            font-family: "nunito";
        }

    </style>

    <script>
        function validateProvinsi() {
            var error = document.getElementById("prov_error");

            let x = document.getElementById("provinsi").value;

            if (x == "defvalueprov") {
                error.textContent = "Pilih Provinsi!"
                error.style.color = "red"
                return false;
            }
            else {
                error.textContent = ""
            }
            
            
        }

        function validateKabupaten() {
            var error = document.getElementById("kab_error");

            let x = document.getElementById("kabupaten").value;

            if (x == "defvaluekab") {
                error.textContent = "Pilih Kabupaten!"
                error.style.color = "red"
                return false;
            }
            else {
                error.textContent = ""
            }
        }

    </script>

    <script>
        $(document).ready(function() {
            $('#provinsi').change(function() {
                var id_provinsi = $(this).val();

                $.ajax({
                    type: 'POST', //method
                    url: 'kabupaten.php', //action
                    data: 'id_provinsi='+id_provinsi, // $_POST['id_provinsi']
                    success: function(response) {
                        $('#kabupaten').html(response);
                    }
                });
            })
        });
    </script>

    

    

</head>
  <body> 
    <?php include('./header.php'); ?>
    <div class="border-bottom"></div>
    
    
    
    <section class="">

        <!-- Detail Pengiriman -->
        <div class="container-fluid px-5">
            <br><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex card flex-column">
                        <div class="card-header" style="background-color: white;">
                            <strong style="font-size: 20px;">Your Address</strong>      <!-- Parsing Nama User -->
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form id="second" method="POST">

                                <?php 
                                    $provinsipilihan = $_POST['provinsi'];
                                    $kabpilihan = $_POST['kabupaten'];
                                    $provinsi_add = mysqli_query($con, "SELECT * from provinsi WHERE id = '$provinsipilihan'"); 
                                    $kabupaten_add = mysqli_query($con, "SELECT * from kabupaten WHERE id = '$kabpilihan'"); 
                                    $row_provinsi = mysqli_fetch_array($provinsi_add);
                                    $row_kabupaten = mysqli_fetch_array($kabupaten_add);
                                ?>

                                <textarea class="form-control" id="AlamatLengkap" name="AlamatLengkap" rows="3" required><?php
                                        if (isset($_POST['submit'])) {
                                            echo "".$_POST['nama'].", ";
                                            echo "".$_POST['alamat'].", ";
                                            echo "".$row_provinsi['nama'].", ";
                                            echo "".$row_kabupaten['nama'].", ";
                                            echo "".$_POST['kodepos'].", ";
                                            echo "".$_POST['notelp'];}?></textarea>
                                </form>
                            </div>

                            <?php
                                if (isset($_POST['saveAddress'])) {
                                    $address = $_POST['AlamatLengkap'];

                                    if(empty($address)) {
                                        echo 'Alamat Kosong';
                                    }
                                    else {
                                        
                                        $result = $db->query("INSERT INTO alamat(alamat_pengiriman) VALUES('$address')");

                                        if ($result) {
                                            echo '<div class="alert alert-success">
                                                Simpan Alamat Berhasil.
                                                </div>';
                                        }
                                        
                                    }

                                    

                                }                  

                            ?>                

                            <div style="float: right; margin-top: 8px;">
                                <button type="submit" form="second" name="saveAddress" class="btn" onclick="window.location.href='checkout.php'" style="color: red; font-size: 20px;">Simpan Alamat</button>
                            </div>

                            <br><br>
                            <!-- <div class="border-bottom"></div> -->
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class = "card" style = "width: 350px; margin: 0 auto;"> <!-- biar kotak putih gak melebar pas dibesarin -->
                        <div class = "card-body">
                            <div class="card-title d-flex justify-content-center" style="font-size: 20px;"><strong>Tambah Alamat</strong></div>
                            <form id="first" method = "POST" autocomplete = "on" action = "" onsubmit='return validateProvinsi(),validateKabupaten();'>
                                <div style = "margin: 15px">
                                    <label style = "color:#AFAFAF;"> Nama </label> <br>
                                    <input type = "text" class = "form-control" id = "nama" name = "nama" value = ""> </input>
                                
                                    <label style = "color:#AFAFAF;"> Alamat </label> <br>
                                    <input type = "text" class = "form-control" id = "alamat" name = "alamat" value = ""> </input>

                                    <label style = "color:#AFAFAF;"> Provinsi </label> <br>
                                    <div>
                                        <?php $sql_provinsi = mysqli_query($con, 'SELECT * from provinsi'); ?>
                                        <select class="form-select" name="provinsi" id="provinsi">
                                            <option value="defvalueprov">Pilih Provinsi</option>
                                            <?php 
                                            while($row_provinsi = mysqli_fetch_array($sql_provinsi)) {
                                            ?>
                                            <option value="<?php echo $row_provinsi['id'] ?>"><?php echo $row_provinsi['nama'] ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                    <div style="color: red" id="prov_error" class="error"></div>

                                    <label style = "color:#AFAFAF;"> Kota/Kabupaten </label> <br>
                                    <div>
                                        <select class="form-select" name="kabupaten" id="kabupaten">
                                            <option value="defvaluekab" selected="disabled">Pilih Kota/Kabupaten</option>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div style="color: red" id="kab_error" class="error"></div>

                                    <label style = "color:#AFAFAF;"> Kode Pos </label> <br>
                                    <style>input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {-webkit-appearance: none; margin: 0;}</style>
                                    <input type = "number" onkeydown="return event.keyCode !== 69" class = "form-control" id = "kodepos" name = "kodepos" value = "<?php if(isset($telepon)) echo $telepon;?>"> </input>

                                    <label style = "color:#AFAFAF;"> No Telepon </label> <br>
                                    <input type = "number" onkeydown="return event.keyCode !== 69" class = "form-control" id = "notelp" name = "notelp" value = "<?php if(isset($telepon)) echo $telepon;?>"> </input>

                                    <br>
                                    
                                    <div class="d-flex justify-content-center""><button class="btn" form="first" name="submit" type="submit" style="background-color: red; color: white; border-radius: 10px;">Add</button></strong></div>
                                
                                </div>
                            <!-- </div> -->
                            </form>
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

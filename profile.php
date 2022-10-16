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
        #btnsavehidden{
            display:none;
        }
        #btnsaveshow{
            display:show;
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
                    <div class="d-flex flex-column">
                        <form action="" class="form" id="form" enctype="multipart/form-data" method="post" >
                            <div class="upload">
                                <?php 
                                $usename = $row['username'];
                                $nama = $row['nama_user'];
                                $image = $row['image'];
                                ?>
                                <img src="./assets/<?php echo $image;?>" class="rounded-circle" alt="width:200px;height:200px;"style="margin:0 20px 0 0;"></img>
                            </div>
                            <div class="round" >
                                <input type="hidden" name="username" value="<?php echo $username ?>">
                                <input type="hidden" name="nama" value="<?php echo $nama ?>">
                                <input type="file" id="inputImage" name="inputImage" accept=".jpg, .jpeg, .png">
                            </div>
                        </form>
                        
                        <!-- <div class="d-flex justify-content-center" style="margin-right:20px;">
                            <button class="btn w-75" type="button" style="background-color:#FC4C02;margin-top:3px;color:white;" onclick="uploadFile();">Choose File</button>
                        </div> -->
                        <script type="text/javascript">
                            document.getElementById("inputImage").onchange = function(){
                                document.getElementById('form').submit();
                            };
                        </script>
                        <?php
                            if(isset($_FILES["image"]["name"])){
                                $username = $_POST['username'];
                                $nama = $_POST['nama'];        

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
                                    $newImageName = $name."-".date("Y.m.d")."-".date("h.i.sa");
                                    $newImageName .= '.' . $imageExtension;
                                    $query = "UPDATE user SET image = '$newImageName' WHERE username = $username";
                                    $db->query($query);
                                    move_uploaded_file($tmpName,'./assets/'.$newImageName);
                                    echo 
                                    "
                                    <script>
                                        document.location.href = '../titipin-store';
                                    </script>
                                    ";
                                }
                            }?>
                    </div>
                    <div class="d-inline-block" style="margin: 40px 0 0px 0px;">
                        <table id="table">
                            <tr>
                                <td>Username :</td>
                                <td><div id="username" contenteditable="false"><?php echo $row['username']?></div></td>
                            </tr>
                            <tr>
                                <td>Nama :</td>
                                <td><div name="nama" contenteditable="false"><?php echo $row['nama_user'] ?></div></td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><div name="email" contenteditable="false"><?php echo $row['email'] ?></div></td>
                            </tr>
                            <tr>
                                <td>No Telepon: </td>
                                <td><div name="no_telepon" contenteditable="false"><?php echo $row['no_telepon'] ?></div></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-end">
                        <form action="" method="post">
                        <button class="editUserBTN btn btn-sm" type="button" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem;font-family:'Nunito';font-size:20px;background-color:#FC4C02;color:white;margin-top:5px;"><i class="fa-solid fa-pen-to-square" style="margin-right:3px;" ></i>Edit</button>
                        <button class="btn btn-sm" type="submit" id="btnsavehidden" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem;font-family:'Nunito';font-size:20px;background-color:#FC4C02;color:white;margin-top:5px;"><i class="fa-solid fa-pen-to-square" style="margin-right:3px;" ></i>Save</button>
                        
                    </form>
                        <div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="updateUser">
                                        <div class="modal-body">
                                            <input type="hidden" name="username" id="username">
                                            <div class="mb-3">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender">No Telepon</label>
                                                <input type = "notelp" class = "form-control" id = "notelp" name = "notelp" value = ""> </input>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).on('click', '.editUserBTN', function() {
                            var username = $(this).val();

                            $.ajax({
                                type: "GET",
                                url: "edit_user.php?username=" + username,
                                success: function(response) {

                                    var res = jQuery.parseJSON(response);
                                    if (res.status == 200) {

                                        $('#username').val(res.data.username);
                                        $('#nama').val(res.data.nama);
                                        $('#email').val(res.data.email);
                                        $('#notelepon').val(res.data.notelepon);
                                        $('#employeeEditModal').modal('show');
                                    }

                                }
                            });

                            });
                        </script>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    </div>

    <?php include('./footer.php'); ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="./script.js" ></script>    
</html>

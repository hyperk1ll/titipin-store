<?php
	require_once('db_login.php');

	if (isset($_POST["submit"])){
		$valid = TRUE; 
		
		$name = test_input($_POST['nama']);
		if ($name == ''){
			$error_name = "Name is required";
			$valid = FALSE;
		} 
		else if (!preg_match("/^[a-zA-Z ]*$/", $name)){
			$error_name = "Only letters and white space allowed";
			$valid = FALSE;
		}
		
		$username = test_input($_POST['user']);
		if ($username== ''){
			$error_username = "Username is required";
			$valid = FALSE;
		} 
		
		$password = test_input(($_POST['pass']));
		if ($password == ''){
			$error_password = "Password is required";
			$valid = FALSE;
		}
		
		$email = test_input($_POST['email']);
		if ($email == ''){
			$error_email = "Email is required";
			$valid = FALSE;
		} 
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error_email = "Invalid email format";
			$valid = FALSE;
		}
		
		$telepon = test_input($_POST['notelp']);
		if ($telepon == ''){
			$error_telepon = "No Telepon is required";
			$valid = FALSE;
		} 
		else if (!preg_match("/^[1234567890]*$/", $telepon)){
			$error_telepon = "Only number allowed";
			$valid = FALSE;
		}
		
		if ($valid){
			// $address = $db->real_escape_string($address); 
			$query = " INSERT INTO user (username, nama_user, password, email, no_telepon) VALUES ('$username', '$name', MD5('".$password."'), '$email', '$telepon')";
			echo $query;
			$result = $db->query($query);
			if (!$result){
				die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
			} 
			else {
				$db->close();
				header('Location: login.php'); //ganti ini kalo mau redirect ke halaman lain
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register Titipin </title>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity ="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin = "anonymous">
    <link rel = "stylesheet" href = "./style.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body style = "background-color:#F7F7F7;"> <!-- warnain baground abu-abu -->
	<br>
	<div class = "jumbotron text-center"> <!-- Buat nengahin tulisan TITIPIN -->
		<a class = "nav-link d-inline-block me-auto" style = "font-family:'Nunito'; font-size:50px; color:#FC4C02;"> 
			<strong> TITIPIN </strong> 
		</a>
	</div>
	
	<div class = "container">
		<div class = "card" style = "width: 350px; margin: 0 auto;"> <!-- biar kotak putih gak melebar pas dibesarin -->
		<div class = "card-body">
		<form method = "POST" autocomplete = "on" action = "">
			<div style = "margin: 15px">
				<label style = "color:#AFAFAF;"> Nama </label> <br>
				<input type = "text" class = "form-control" id = "nama" name = "nama" value = "<?php if(isset($name)) echo $name;?>"> </input>
				<div class = "text-danger"> <?php if (isset($error_name)) echo $error_name;?> </div>
			
				<label style = "color:#AFAFAF;"> Username </label> <br>
				<input type = "text" class = "form-control" id = "user" name = "user" value = "<?php if(isset($username)) echo $username;?>"> </input>
				<div class = "text-danger"> <?php if (isset($error_username)) echo $error_username;?> </div>

				<label style = "color:#AFAFAF;"> Password </label> <br>
				<input type = "password" class = "form-control" id = "pass" name = "pass" value = "<?php if(isset($password)) echo $password;?>"> </input>
				<div class = "text-danger"> <?php if(isset($error_password)) echo $error_password;?> </div>

				<label style = "color:#AFAFAF;"> Email </label> <br>
				<input type = "email" class = "form-control" id = "email" name = "email" value = "<?php if(isset($email)) echo $email;?>"> </input>
				<div class = "text-danger"> <?php if(isset($error_email)) echo $error_email;?> </div>

				<label style = "color:#AFAFAF;"> No Telepon </label> <br>
				<input type = "notelp" class = "form-control" id = "notelp" name = "notelp" value = "<?php if(isset($telepon)) echo $telepon;?>"> </input>
				<div class = "text-danger"> <?php if(isset($error_telepon)) echo $error_telepon;?> </div>

				<br>
				
				<a href = "login.php" style="font-family:'Nunito'; color:#FC4C02; text-decoration:none;"> Already have an account? </button> <br> <br>

				<div class="col-md-12 text-center"> <!-- Buat nengahin tombol -->
					<button class = "btn btn-primary" name = "submit" type = "submit" value =""> Register </button>
				</div>
			</div>
		</form>
		</div>
		</div>
	</div>
</body>
</html>

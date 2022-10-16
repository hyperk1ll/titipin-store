
<?php 
	$id = $_GET['id'];
	session_start();
		if(isset($_SESSION['username'])&&(isset($_SESSION['logged-in']))){
			$username = $_SESSION['username'];
			require_once('./db_login.php');
			$query = "SELECT * FROM pesanan WHERE username ='".$username."'";
            $result = $db->query($query);
            if(!$result){
                die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
            }

			while ($row = $result->fetch_object()) { 
				$barang = $row -> id_barang;
				if ($barang == $id) {
					$del = "DELETE FROM pesanan WHERE id_barang='".$barang."'";
					$result = $db->query($del);
					break;
				}
			}
			header("Location: cart_best_seller.php");
		}
=======
<?php 
	$id = $_GET['id'];
	session_start();
		if(isset($_SESSION['username'])&&(isset($_SESSION['logged-in']))){
			$username = $_SESSION['username'];
			require_once('./db_login.php');
			$query = "SELECT * FROM pesanan WHERE username ='".$username."'";
            $result = $db->query($query);
            if(!$result){
                die("Could not query the database: <br/>".$db->error."<br>Query: ".$query);
            }

			while ($row = $result->fetch_object()) { 
				$barang = $row -> id_barang;
				if ($barang == $id) {
					$del = "DELETE FROM pesanan WHERE id_barang='".$barang."'";
					$result = $db->query($del);
					break;
				}
			}
			header("Location: cart_best_seller.php");
		}

?>
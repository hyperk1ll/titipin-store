<?php
session_start();
require_once ('./db_login.php');
$username = $_SESSION['username'];
if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
if(isset($_GET['id']) & !empty($_GET['id'])){ //wishlist
    $idbarang = $_GET['id_barang'];
    $query = "INSERT INTO wishlist (id_barang, username) VALUES ($pid, $username)";
    $result = $db -> query($query);
    if($result){
        header('location: wishlist.php');
        //echo "redirect to wish list page";
    }
    }else{
        header('location: wishlist.php');
    }

?>
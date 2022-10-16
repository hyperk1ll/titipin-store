<?php 

$con = mysqli_connect('localhost', 'root', '', 'provinsi_kab'); // jangan lupa ganti nama databasenya kalo beda

if(!$con) {
    die(mysqli_connect_error());
}

<?php 

$con = mysqli_connect('localhost', 'root', '', 'responsi'); // jangan lupa ganti nama databasenya

if(!$con) {
    die(mysqli_connect_error());
}

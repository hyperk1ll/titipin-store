<?php

require 'db_connection.php';

// mengecek employee id
if (isset($_GET['username'])) {
    $username = mysqli_real_escape_string($con, $_GET['username']);

    $query = "SELECT * FROM username WHERE id='$username'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $employee = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Student Fetch Successfully by id',
            'data' => $user
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 404,
            'message' => 'Username Not Found'
        ];
        echo json_encode($res);
        return;
    }
}


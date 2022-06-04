<?php 
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "register_db";

    date_default_timezone_set("Asia/Manila");
    $date=date('F j, Y g:i:a');

    // Create Connection
    $conn = mysqli_connect($servername, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 
?>
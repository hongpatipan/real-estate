<?php
$condb = mysqli_connect("localhost","root","","register_db");
if ($condb->connect_error)
{
    die('Error : ('. $condb->connect_errno .')'. $condb->connect_error);
}
?>
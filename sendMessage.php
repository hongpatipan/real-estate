<?php
include "serverDB.php";
session_start();
if($_POST)
{
    $name=$_SESSION['username'];
    $msg=$_POST['msg'];

    $sql="INSERT INTO `chat`(`username`, `message`) VALUES ('".$name."', '".$msg."')";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        header('Location: chatpage.php');
    }
    else
    {
        echo "Somthing went wrong";
    }

}
?>
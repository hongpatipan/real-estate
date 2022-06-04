<?php
session_start();

$conn = mysqli_connect("localhost","root","","register_db");

if(isset($_POST['save_news_image']))
{
    $name = $_POST['add_name'];
    $file = $_FILES['text_image']['name'];
    $description=addslashes($_POST['text_description']);

    if(file_exists("upload2/" . $_FILES['text_image']['name']) )
    {
        $filename = $_FILES['text_image']['name'];
        $_SESSION['adstatus'] = "Image alrady Exists " .$filename;
        header('Location: adaddnews.php');
    }
    else
    {
        $query = "INSERT INTO pnews_db (pn_name,pn_image,pn_description) VALUES ('$name','$file','$description')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["text_image"]["tmp_name"], "upload2/".$_FILES["text_image"]["name"]);

            $_SESSION["adstatus"] = "Stored Succeddfully";
            header('Location: adaddnews.php');
        }
        else
        {
            $_SESSION['adstatus'] = "Not Inserted";
            header('Location: adaddnews.php');
        }

    }
}

if(isset($_POST['update_news_image']))
{
    $id = $_POST['text_id'];
    $name = $_POST['add_name'];
    $new_file = $_FILES['text_image']['name'];
    $old_file = $_POST['text_image_old'];
    $description=addslashes($_POST['text_description']);

    if($new_file != '')
    {
        $update_filename = $_FILES['text_image']['name'];
    }
    else
    {
        $update_filename = $old_file;
    }

    if($_FILES['text_image']['name'] != '')
    {
        if(file_exists("upload2/" . $_FILES['text_image']['name']) )
        {
            $filename = $_FILES['text_image']['name'];
            $_SESSION['adstatus'] = "Image alrady Exists " .$filename;
            header('Location: aditem.php');
        }
    }
    else
    {
        $query = "UPDATE pnews_db SET pn_name='$name', pn_image='$update_filename', pn_description='$description' WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            if($_FILES['text_image']['name'] != '')
            {
                move_uploaded_file($_FILES["text_image"]["tmp_name"], "upload2/".$_FILES["text_image"]["name"]);
                unlink("upload2/" . $old_file);
            }
            $_SESSION['adstatus'] = "Data Update Successfully";
            header("Location: aditem.php");
        }
        else
        {
            $_SESSION['adstatus'] = "Data NOT Update";
            header("Location: aditem.php");
        }
    }
}

if(isset($_POST['update_btn']))
{
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_file = $_FILES['faculty_image']['name'];
    $old_file = $_POST['text_image_old'];
    $edit_description=addslashes($_POST['edit_description']);

    $query = "UPDATE pnews_db SET pn_name='$edit_name', pn_image='$edit_file',  pn_description='$edit_description' WHERE id='$edit_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload2/".$_FILES["faculty_image"]["name"]);
        $_SESSION['adstatus'] = "Data Update Successfully";
        header("Location: aditem.php");
    }
    else
    {
        $_SESSION['adstatus'] = "Data NOT Update";
        header("Location: aditem.php");
    }
}

if(isset($_POST['delete_image']))
{
    $id = $_POST['delete_id'];
    $file = $_POST['del_image'];

    $query = "DELETE FROM pnews_db WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        unlink("upload2/".$file);
        $_SESSION['adstatus'] = "Data Deleted Successfully";
        header("Location: aditem.php");
    }
    else
    {
        $_SESSION['adstatus'] = "Data Not Deleted";
        header("Location: aditem.php");
    }
}

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
else
{
if (isset($_POST['save_property_image'])) {
    $u_id = $_POST['u_id'];
    $name = $_POST['text_name'];
    $select = $_POST['text_select'];
    $location = $_POST['text_location'];
    $city = $_POST['text_city'];
    $description = $_POST['text_description'];
    $totalcost = $_POST['text_totalcost'];
    $bed = $_POST['text_bed'];
    $bath = $_POST['text_bath'];
    $floorarea = $_POST['text_floorarea'];
    $pricearea = $_POST['text_pricearea'];
    $file = pathinfo(basename($_FILES['text_file']['name']),PATHINFO_EXTENSION);
    $filesss = pathinfo(basename($_FILES['text_file']['name']),PATHINFO_FILENAME);
    $lassname=$file;
    $file2 = pathinfo(basename($_FILES['text_file2']['name']),PATHINFO_EXTENSION);
    $filesss2 = pathinfo(basename($_FILES['text_file2']['name']),PATHINFO_FILENAME);
    $lassname2=$file2;
    $file3 = pathinfo(basename($_FILES['text_file3']['name']),PATHINFO_EXTENSION);
    $filesss3 = pathinfo(basename($_FILES['text_file3']['name']),PATHINFO_FILENAME);
    $lassname3=$file3;
    $file4 = pathinfo(basename($_FILES['text_file4']['name']),PATHINFO_EXTENSION);
    $filesss4 = pathinfo(basename($_FILES['text_file4']['name']),PATHINFO_FILENAME);
    $lassname4=$file4;
    $lat = $_POST['text_lat'];
    $lng = $_POST['text_lng'];
    $username = $_POST['text_username'];
    $phone = $_POST['text_phone'];
    $email = $_POST['text_email'];
    //$chang_ext = pathinfo($file, PATHINFO_EXTENSION);
    $random = $filesss.date("mjYHis")."_".rand(0,999999999).'.'.$lassname;
    $random2 = $filesss2.date("mjYHis")."_".rand(0,999999999).'.'.$lassname2;
    $random3 = $filesss3.date("mjYHis")."_".rand(0,999999999).'.'.$lassname3;
    $random4 = $filesss4.date("mjYHis")."_".rand(0,999999999).'.'.$lassname4;
    //$rename = 'Upload'.date('Ymd').$random;

    //$newname = $rename.'.'.$chang_ext;

    //$random = rand(0,999999999);
    //$file_new = sha1($file.$random);

    //echo $file_new;

    //$file = preg_replace("/\s+/","_",$file);

    //$chang_ext = pathinfo($file, PATHINFO_EXTENSION);
    //$file = pathinfo($file,PATHINFO_FILENAME);

    //echo $file."_".date("mjYHis").".".$chang_ext;

    /*$upload = copy($_FILES["text_file"]["tmp_name"],"upload/".$random);
    if($upload)
    {
        echo"f";
    }
    else{

    }*/

    $query = "INSERT INTO property_db (u_id,pname,pselects,plocation,pcity,pdescription,ptotalcost,pbed,pbath,pfloorarea,ppricearea,pimage,pimage2,pimage3,pimage4,lat,lng,pusername,pphone,pemail) VALUES ('$u_id','$name','$select','$location','$city','$description','$totalcost','$bed','$bath','$floorarea','$pricearea','$random','$random2','$random3','$random4','$lat','$lng','$username','$phone','$email')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        move_uploaded_file($_FILES["text_file"]["tmp_name"], "upload/" . $random);
        move_uploaded_file($_FILES["text_file2"]["tmp_name"], "upload/" . $random2);
        move_uploaded_file($_FILES["text_file3"]["tmp_name"], "upload/" . $random3);
        move_uploaded_file($_FILES["text_file4"]["tmp_name"], "upload/" . $random4);
        $_SESSION['status'] = "The post has been advertised successfully.";
        header('Location: post.php');
    } 
    else {
        $_SESSION['status'] = "Post Not Inserted"; 
        header('Location: post.php');
    }
    
}

if(isset($_POST['delete_image']))
{
    $id = $_POST['delete_id'];
    $file = $_POST['del_image'];
    $file2 = $_POST['del_image2'];
    $file3 = $_POST['del_image3'];
    $file4 = $_POST['del_image4'];

    $query = "DELETE FROM property_db WHERE pro_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        unlink("upload/".$file);
        unlink("upload/".$file2);
        unlink("upload/".$file3);
        unlink("upload/".$file4);
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: mainme.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: mainme.php");
    }

}
}

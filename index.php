<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Real Estate</title>
</head>

<body>
    <header>
        <a href="index.php" class="logo">Real Estate</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="login.php">ลงประกาศ</a></li>
                <li><a href="news.php">ข่าว</a></li>
                <li><a href="#"></a></li>
                <li><a href="login.php">เข้าสู่ระบบ</a></li>
            </ul>
            <ul class="action">
                <!--<li>
                    <a href="#">
                <li><a href="login.php">เข้าสู่ระบบ</a></li>
                </a>
                </li>-->
                <div class="menuToggle">
                    <ion-icon name="menu-outline"></ion-icon>
                    <ion-icon name="close-outline"></ion-icon>
                </div>
            </ul>
        </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1523731407965-2430cd12f5e4?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFuZ2tva3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" class="d-block w-100" width="800px" height="800px" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="https://pix10.agoda.net/geo/city/318/1_318_02.jpg?s=1920x822" class="d-block w-100" width="800px" height="800px" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="https://previews.123rf.com/images/suphaporn/suphaporn1802/suphaporn180200140/95068630-cityscape-of-bangkok-city-skyline-landscape-thailand.jpg" class="d-block w-100" width="800px" height="800px" alt="Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="banner">
        <div class="bg">

            <form action="" method="GET" class="searchBoxform">
                <div class="inputBxform">
                    <input type="text" name="valueToSearch" placeholder="พิมพ์ชื่อโครงการ" value="">
                </div>
                <div class="inputBxform">
                    <div class="selectcounty">
                        <select class="form-select" name="pcity_id" class="form-control">
                            <option selected value="">เลือกจังหวัด</option>
                            <option value="กาญจนบุรี">นครราชสีมา</option>
                            <option value="กาญจนบุรี">เชียงใหม่</option>
                            <option value="ตาก">ตาก</option>
                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                            <option value="ชัยภูมิ">ชัยภูมิ</option>
                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                            <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                            <option value="ลำปาง">ลำปาง</option>
                            <option value="อุดรธานี">อุดรธานี</option>
                            <option value="เชียงราย">เชียงราย</option>
                            <option value="น่าน">น่าน</option>
                            <option value="เลย">เลย</option>
                            <option value="ขอนแก่น">ขอนแก่น</option>
                            <option value="พิษณุโลก">พิษณุโลก</option>
                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                            <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                            <option value="สกลนคร">สกลนคร</option>
                            <option value="นครสวรรค์">นครสวรรค์</option>
                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                            <option value="กำแพงเพชร">กำแพงเพชร</option>
                            <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                            <option value="สุรินทร์">สุรินทร์</option>
                            <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                            <option value="สงขลา">สงขลา</option>
                            <option value="สระแก้ว">สระแก้ว</option>
                            <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                            <option value="อุทัยธานี">อุทัยธานี</option>
                            <option value="สุโขทัย">สุโขทัย</option>
                            <option value="แพร่">แพร่</option>
                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                            <option value="จันทบุรี">จันทบุรี</option>
                            <option value="พะเยา">พะเยา</option>
                            <option value="เพชรบุรี">เพชรบุรี</option>
                            <option value="ลพบุรี">ลพบุรี</option>
                            <option value="ชุมพร">ชุมพร</option>
                            <option value="นครพนม">นครพนม</option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                            <option value="มหาสารคาม">มหาสารคาม</option>
                            <option value="ราชบุรี">ราชบุรี</option>
                            <option value="ตรัง">ตรัง</option>
                            <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                            <option value="กระบี่">กระบี่</option>
                            <option value="พิจิตร">พิจิตร</option>
                            <option value="ยะลา">ยะลา</option>
                            <option value="ลำพูน">ลำพูน</option>
                            <option value="นราธิวาส">นราธิวาส</option>
                            <option value="ชลบุรี">ชลบุรี</option>
                            <option value="พัทยา">พัทยา</option>
                            <option value="มุกดาหาร">มุกดาหาร</option>
                            <option value="บึงกาฬ">บึงกาฬ</option>
                            <option value="พังงา">พังงา</option>
                            <option value="ยโสธร">ยโสธร</option>
                            <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                            <option value="สระบุรี">สระบุรี</option>
                            <option value="ระยอง">ระยอง</option>
                            <option value="พัทลุง">พัทลุง</option>
                            <option value="ระนอง">ระนอง</option>
                            <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                            <option value="หนองคาย">หนองคาย</option>
                            <option value="ตราด">ตราด</option>
                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                            <option value="สตูล">สตูล</option>
                            <option value="ชัยนาท">ชัยนาท</option>
                            <option value="นครปฐม">นครปฐม</option>
                            <option value="นครนายก">นครนายก</option>
                            <option value="ปัตตานี">ปัตตานี</option>
                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                            <option value="ปทุมธานี">ปทุมธานี</option>
                            <option value="สมุทรปราการ">สมุทรปราการ</option>
                            <option value="อ่างทอง">อ่างทอง</option>
                            <option value="สมุทรสาคร">สมุทรสาคร</option>
                            <option value="สิงห์บุรี">สิงห์บุรี</option>
                            <option value="นนทบุรี">นนทบุรี</option>
                            <option value="ภูเก็ต">ภูเก็ต</option>
                            <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        </select>
                    </div>
                </div>
                <div class="inputBxform">
                    <div class="selecttype">
                        <select class="form-select" name="ppt_id" class="form-control">
                            <option selected value="">เลือกประเภทที่อยู่อาศัย</option>
                            <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                            <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                            <option value="คอนโด">คอนโด</option>
                        </select>
                    </div>
                </div>
                <div class="inputBxform">
                    <div class="selectStartprice">
                        <select class="form-select" name="start_price" class="form-control">
                            <option selected value="">ขั้นต่ำ</option>
                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="1500000">1,500,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="2500000">2,500,000</option>
                            <option value="3000000">3,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="4000000">4,000,000</option>
                            <option value="4500000">4,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="5500000">5,500,000</option>
                            <option value="6000000">6,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="7000000">7,000,000</option>
                            <option value="7500000">7,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="8500000">8,500,000</option>
                            <option value="9000000">9,000,000</option>
                            <option value="9500000">9,500,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="11000000">11,000,000</option>
                            <option value="12000000">12,000,000</option>
                            <option value="13000000">13,000,000</option>
                            <option value="14000000">14,000,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="50000000">50,000,000</option>
                        </select>
                    </div>
                </div>
                <div class="inputBxform">
                    <div class="selectEndprice">
                        <select class="form-select" name="end_price" class="form-control">
                            <option selected value="">สูงสุด</option>
                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="1500000">1,500,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="2500000">2,500,000</option>
                            <option value="3000000">3,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="4000000">4,000,000</option>
                            <option value="4500000">4,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="5500000">5,500,000</option>
                            <option value="6000000">6,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="7000000">7,000,000</option>
                            <option value="7500000">7,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="8500000">8,500,000</option>
                            <option value="9000000">9,000,000</option>
                            <option value="9500000">9,500,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="11000000">11,000,000</option>
                            <option value="12000000">12,000,000</option>
                            <option value="13000000">13,000,000</option>
                            <option value="14000000">14,000,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="50000000">50,000,000</option>
                        </select>
                    </div>
                </div>
                <div class="inputBxform">
                    <!--<p class="white">_</p>-->
                    <input type="submit" name="btnsearch" value="Search">
                </div>
            </form>
        </div>
    </div>

    <div class="dont"></div>

    <div class="container py-5">
        <div class="row mt-5">
            <?php
            $con = mysqli_connect("localhost", "root", "", "register_db");

            if (isset($_GET['btnsearch'])) {
                $ppt_id = $_GET['ppt_id'];
                $pcity_id = $_GET['pcity_id'];
                $start_price = $_GET['start_price'];
                $end_price = $_GET['end_price'];
                $valueToSearch = $_GET['valueToSearch'];
                
                if($ppt_id == "" && $pcity_id =="" && $start_price =="" && $end_price =="" && $valueToSearch == ""){
                    echo "No Property Found";
                }
                elseif ($ppt_id != "" && $pcity_id != "") 
                {
                    if($start_price == "" && $end_price == "")
                    {
                        $query = "SELECT * FROM property_db WHERE pselects='$ppt_id' and pcity='$pcity_id'";

                    }elseif($end_price == "")
                    {
                        $query = "SELECT * FROM property_db WHERE (pselects='$ppt_id' and pcity='$pcity_id') AND ptotalcost>=$start_price";
                    }
                    elseif($start_price == "")
                    {
                        $query = "SELECT * FROM property_db WHERE (pselects='$ppt_id' and pcity='$pcity_id') AND ptotalcost>=$end_price";
                    }
                    else{
                        $query = "SELECT * FROM property_db WHERE pselects='$ppt_id' and pcity='$pcity_id' AND ptotalcost BETWEEN $start_price and $end_price ";
                    }
                }
                elseif($ppt_id != "" || $pcity_id !="")
                {

                    if($start_price == "" && $end_price == "")
                    {
                        $query = "SELECT * FROM property_db WHERE pselects='$ppt_id' or pcity='$pcity_id'";
                    }elseif($end_price == "")
                    {
                        $query = "SELECT * FROM property_db WHERE (pselects='$ppt_id' or pcity='$pcity_id') AND ptotalcost>=$start_price";
                    }
                    else{
                        $query = "SELECT * FROM property_db WHERE (pselects='$ppt_id' or pcity='$pcity_id') AND ptotalcost BETWEEN $start_price and $end_price";
                    }
                }

                if($ppt_id == "" && $pcity_id == "" && $start_price != "" && $end_price != "")
                {
                    $query = "SELECT * FROM property_db WHERE ptotalcost BETWEEN $start_price and $end_price ";
                }

                if($end_price == "" && $pcity_id == "" && $ppt_id == "") 
                {
                    $query = "SELECT * FROM property_db WHERE ptotalcost>= $start_price ";
                }

                if($start_price == "" && $pcity_id == "" && $ppt_id == "") 
                {
                    $query = "SELECT * FROM property_db WHERE ptotalcost>= $end_price ";
                }

                if($valueToSearch != "")
                {
                    $query = "SELECT * FROM property_db WHERE pname LIKE '%" . $valueToSearch . "%'";
                }

                $query_run = mysqli_query($con, $query);
                if(empty($query_run))
                {

                }
                else
                {
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                ?>
                            <div class="col-md-3">
                                <div class="row mt-4">
                                    <form class="box" href="#" action='viewindex.php' method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['pro_id']; ?>">

                                        <div class="card">
                                            <div class="card-body">
                                                <img src="<?php echo "upload/" . $row['pimage']; ?>" class="card-img-top" width="200px" height="200px" alt="Image">
                                                <h2></h2>
                                                <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                                                <p class="card-text"><?php echo $row['plocation']; ?> </p>
                                                <p class="card-text"><?php echo $row['pselects']; ?> </p>
                                                <!--<p class="card-title-1">฿ <?php echo $row['ptotalcost']; ?></p>-->
                                                <p class="card-title"><?php echo "฿ " . number_format($row['ptotalcost']) . "<br>"; ?></p>
                                                <div class="row">
                                                    <div class="col-xl-6"></div>
                                                    <div class="col-xl-6">
                                                        <button class="btnnn suc" type='submit'>ดูรายละเอียด</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        echo "No Property Found";
                    }
                }
            }
            ?>
        </div>
    </div>


    <div class="container py-1">
        <div class="row mt-1">
            <?php
            $query = "SELECT * FROM property_db";
            $query_run = mysqli_query($conn, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;

            if ($check_faculty) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <div class="col-md-3 ">
                        <div class="row mt-4">
                            <form class="box" href="#" action='viewindex.php' method="post">
                                <input type="hidden" name="id" value="<?php echo $row['pro_id']; ?>">

                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?php echo "upload/" . $row['pimage']; ?>" class="card-img-top" width="200px" height="200px" alt="Image">
                                        <h2></h2>
                                        <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                                        <p class="card-text"><?php echo $row['plocation']; ?> </p>
                                        <p class="card-text"><?php echo $row['pselects']; ?> </p>
                                        <!--<p class="card-title-1">฿ <?php echo $row['ptotalcost']; ?></p>-->
                                        <p class="card-title"><?php echo "฿ " . number_format($row['ptotalcost']) . "<br>"; ?></p>
                                        <div class="row">
                                            <div class="col-xl-6"></div>
                                            <div class="col-xl-6">
                                                <button class="btnnn suc" type='submit'>ดูรายละเอียด</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo "No Property Found";
            }
            ?>
        </div>
    </div>

    <!--<div class="card-body">

        <form action="" method="GET">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="stud_id" value="<?php if (isset($_GET['stud_id'])) {echo $_GET['stud_id'];} ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                
                <?php
                $con = mysqli_connect("localhost", "root", "", "register_db");

                if (isset($_GET['stud_id'])) {
                    $stud_id = $_GET['stud_id'];

                    $query = "SELECT * FROM property_db WHERE pselects='$stud_id' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                ?>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" value="<?= $row['pname']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Class</label>
                                <input type="text" value="<?= $row['pcity']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No</label>
                                <input type="text" value="<?= $row['ptotalcost']; ?>" class="form-control">
                            </div>
                <?php
                        }
                    } else {
                        echo "No Record Found";
                    }
                }
                ?>
            </div>
        </div>

    </div>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let navigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>

</body>

</html>
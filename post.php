<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
} else {
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <title>Real Estate</title>
    </head>

    <body>
        <header>
            <a href="#" class="logo">Real Estate</a>
            <div class="group">
                <ul class="navigation">
                    <li><a href="mainindex.php">หน้าหลัก</a></li>
                    <li><a href="post.php">ลงประกาศ</a></li>
                    <li><a href="mainme.php">อสังหาริมทรัพย์</a></li>
                    <li><a href="chatpage.php?username=<?php echo $_SESSION['username']; ?>">สนทนา</a></li>
                    <li><a href="#"></a></li>
                    <li><a><?php echo $_SESSION['username'] ?></a></li>
                    <li><a class="btnout" href="logout.php">ออกสู่ระบบ</a></li>
                </ul>
                <ul class="action">
                    <!--<li>
                    <li><a><?php echo $_SESSION['username'] ?></a></li>
                    <li><a class="btnout" href="logout.php">ออกสู่ระบบ</a></li>
                    </li>-->
                    <div class="menuToggle">
                        <ion-icon name="menu-outline"></ion-icon>
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </ul>
            </div>
        </header>

        <div class="container">
            <h1 class="text-center">กรอกรายเอียดโครงการของคุณ</h1>
            <?php
            if (isset($_SESSION['status']) && $_SESSION != '') {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>HEY!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                unset($_SESSION['status']);
            }
            ?>
            <form action="code.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="u_id" value="<?php echo $_SESSION['u_id']; ?>">
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_name" required class="form-control" placeholder="ชื่อโครงการ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <select class="form-select" name="text_select" required>
                                    <option selected disabled value="">เลือกประเภทโครงการ</option>
                                    <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                                    <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                                    <option value="คอนโด">คอนโด</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_location" required class="form-control" placeholder="ตำแหน่งที่ตั้ง">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <select class="form-select" name="text_city" required>
                                    <option selected disabled value="">เลือกจังหวัด</option>
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
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_description" required class="form-control" placeholder="รายระเอียด">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_totalcost" required class="form-control" placeholder="ราคาของคุณ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_bed" required class="form-control" placeholder="ห้องนอน">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_bath" required class="form-control" placeholder="ห้องน้ำ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_floorarea" required class="form-control" placeholder="พื้นที่ใช้สอย">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_pricearea" required class="form-control" placeholder="ราคาต่อต่อตารางเมตร">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <i class="fa fa-exclamation-triangle text-warning"></i>
                                <label for="" class="control-label text-warning">เป็นไฟล์ .JPG เท่านั้น</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="file" name="text_file" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="file" name="text_file2" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="file" name="text_file3" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="file" name="text_file4" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="text_lat" required class="form-control" placeholder="ละติจูด">
                                    <button type="button" class="btn btn-secondary input-group-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-info-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="text_lng" required class="form-control" placeholder="ลองจิจูด">
                                    <button type="button" class="btn btn-secondary input-group-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-info-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_username" required class="form-control" placeholder="ชื่อของคุณ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_phone" required class="form-control" placeholder="เบอร์โทรศัพท์">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <div class="row">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="text" name="text_email" required class="form-control" placeholder="อีเมล">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" name="save_property_image" class="btn btn-primary">ลงประกาศ</button>
                                <a href="mainindex.php" class="btn btn-danger">ยกเลิก</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">วิธีหาละติจูดลองติจูด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="css/images/howto1.PNG" class="d-block w-100" width="770px" height="500px" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="css/images/howto2.PNG" class="d-block w-100" width="770px" height="500px" alt="Image">
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
                                <hr>
                                <h5>หากยังไม่เข้าใจ</h5>
                                <p><a href="https://baanconnection.com/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%AB%E0%B8%B2-%E0%B8%A5%E0%B8%B0%E0%B8%95%E0%B8%B4%E0%B8%88%E0%B8%B9%E0%B8%94-%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%88%E0%B8%B4%E0%B8%88%E0%B8%B9%E0%B8%94/" class="tooltip-test" title="Tooltip">คลิกที่นี่</a> คลิกที่ลิงก์เพื่ออ่านเพิ่มเติม</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

    </html><?php } ?>
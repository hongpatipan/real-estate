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
    <link rel="stylesheet" href="css/stylenews.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Real Estate</title>
</head>

<body>
    <style>
        .btn {
            background-color: #ff5a26;
            color: #fff;
        }
    </style>

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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <img src="http://terrabkk.com/images/news/0000192279/21798909813ddc8589c3f2747facbbab.jpg" class="d-block w-100" style="background-color: rgba(0, 0, 0, 0.9)" width="500px" height="500px" alt="image">
                                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6)">
                                    <h5>พาชมห้องตัวอย่าง “Brown Condo ห้วยขวาง” ใกล้ MRT ห้วยขวางเพียง 5 นาที เริ่ม 1.89 ล้านบาท</h5>
                                    <p>“ห้วยขวาง” ถือเป็นอีกหนึ่งทำเลที่ได้รับความสนใจจากผู้ประกอบการอสังหาริมทรัพย์จำนวนมาก ด้วยศักยภาพของทำเลที่อยู่บนเส้นรัชดาภิเษกซึ่งสามารถเชื่อมต่อไปยังถนนพระราม 9 –อโศก ทางด่วน และสุขุมวิทได้อย่างสะดวก ถนนเส้นนี้ยังเชื่อมกับถนนลาดพร้าวอีกด้วย</p>
                                    <a href="https://assetwise.co.th/condominium/brown-huaikwang/" class="btn">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <img src="https://image.condonewb.com/media/1634804349443_041021-Aw-Condonewb-banner-linetoday-750x250.webp" class="d-block w-100" width="500px" height="500px" alt="image">
                                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6)">
                                    <h5>โฆษณา2</h5>
                                    <p>รายละเอียด</p>
                                    <a href="#" class="btn">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <img src="https://www.brandbuffet.in.th/wp-content/uploads/2018/02/%E0%B8%8A%E0%B8%B5%E0%B8%A7%E0%B8%B2%E0%B8%97%E0%B8%B1%E0%B8%A2-1.jpg" class="d-block w-100" width="500px" height="500px" alt="image">
                                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6)">
                                    <h5>โฆษณา3</h5>
                                    <p>รายละเอียด</p>
                                    <a href="https://today.line.me/th/v2/publisher/102813?utm_source=copyshare" class="btn">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="dont"></div>

    <div class="container py-5">
        <div class="row mt-5">
            <?php
            $query = "SELECT * FROM pnews_db";
            $query_run = mysqli_query($conn, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;

            if ($check_faculty) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <div class="col-md-3">
                        <form class="box" href="#" action='viewnews.php' method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo "upload2/" . $row['pn_image']; ?>" class="card-img-top" width="200px" height="200px" alt="Image">
                                    <h2></h2>
                                    <h4 class="card-title"><?php echo $row['pn_name']; ?></h4>
                                    <p class="card-text"><?php echo "ลงเมื่อ: " . $row['pn_time']; ?></p>
                                    <div class="row">
                                        <div class="col-xl-6"></div>
                                        <div class="col-xl-6">
                                            <button class="btnnn suc" type='submit'>อ่านเพิ่มเติม</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

            <?php
                }
            } else {
                echo "No Property Found";
            }
            ?>
        </div>
    </div>

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
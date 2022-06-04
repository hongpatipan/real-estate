<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");
$x = $_POST["id"];

$query = "SELECT * FROM property_db where pro_id=$x";
$query_run = mysqli_query($conn, $query);
$check_faculty = mysqli_num_rows($query_run) > 0;
//$result = $conn->query($query);
//$row = mysqli_fetch_assoc($result);
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta charset="UTF-8">
        <meta name="description" content="LERAMIZ Landing Page Template">
        <meta name="keywords" content="LERAMIZ, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stylehome.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="css/style.css" />

        <title>Real Estate </title>
        <style>
            #map {
                height: 400px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <header>
            <a href="mainindex.php" class="logo">Real Estate</a>
            <div class="group">
                <ul class="navigation">
                    <li><a href="mainindex.php">หน้าหลัก</a></li>
                    <li><a href="post.php">ลงประกาศ</a></li>
                    <li><a href="mainme.php">อสังหาริมทรัพย์</a></li>
                    <li><a href="chatpage.php?username=<?php echo $_SESSION['username']; ?>">สนทนา</a></li>
                </ul>
                <ul class="action">
                    <li>
                        <a href="#">
                    <li><a><?php echo $_SESSION['username'] ?></a></li>
                    <li><a class="btnout" href="logout.php">ออกสู่ระบบ</a></li>
                    </a>
                    </li>
                    <div class="menuToggle">
                        <ion-icon name="menu-outline"></ion-icon>
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </ul>
            </div>
        </header>

        <section class="page-scetion">
            <div class="container">
                <div class="row">
                    <?php
                    if ($check_faculty) {
                        while ($row = mysqli_fetch_array($query_run)) {
                    ?>
                            <div class="col-lg-8 single-list-page">

                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo "upload/" . $row['pimage']; ?>" class="d-block w-100" width="400px" height="400px" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo "upload/" . $row['pimage2']; ?>" class="d-block w-100" width="400px" height="400px" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo "upload/" . $row['pimage3']; ?>" class="d-block w-100" width="400px" height="400px" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo "upload/" . $row['pimage4']; ?>" class="d-block w-100" width="400px" height="400px" alt="Image">
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


                                <div class="single-list-content">
                                    <div class="row">
                                        <div class="col-xl-8 sl-title">
                                            <p><i class="fa fa-map-marker"></i><?php echo $row['pcity'] ?></p>
                                        </div>
                                        <div class="col-xl-4">
                                            <a href="#" class="price-btn"><?php echo "฿ " . number_format($row['ptotalcost']) ?></a>
                                        </div>
                                    </div>

                                    <h3 class="sl-sp-title">รายละเอียด</h3>
                                    <div class="row property-details-list">
                                        <div class="col-md-4 col-sm-6">
                                            <p><i class="fa fa-bed"></i><?php echo $row['pbed'] .  " ห้อง" ?></p>
                                        </div>
                                        <div class="col-md-5 col-sm-6">
                                            <p><i class="fa fa-bath"></i><?php echo $row['pbath'] . " ห้อง" ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <p><i class="fa fa-building"></i><?php echo $row['pselects'] ?></p>
                                        </div>
                                        <div class="col-md-5 col-sm-6">
                                            <p><i class="fa fa-th-large"></i><?php echo "พื้นที่ใช้สอย: " . $row['pfloorarea'] . " ตร.ม." ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <p><i class="fa fa-th-large"></i><?php echo "ราคาต่อตร.ม.: " . $row['ppricearea'] . " /ตารางเมตร" ?></p>
                                        </div>
                                    </div>
                                    <h3 class="sl-sp-title">รายละเอียดเพิ่มเติม</h3>
                                    <div class="description">
                                        <p><?php echo $row['pdescription'] ?></p>
                                    </div>

                                    <h3 class="sl-sp-title">แผนที่</h3>
                                    <div class="googlemap">
                                        <div id="map"></div>
                                        <script>
                                            function initMap() {
                                                const uluru = {
                                                    lat: <?php echo $row["lat"]; ?>,
                                                    lng: <?php echo $row["lng"]; ?>
                                                };
                                                const map = new google.maps.Map(document.getElementById("map"), {
                                                    zoom: 15,
                                                    center: uluru,
                                                });
                                                const marker = new google.maps.Marker({
                                                    position: uluru,
                                                    map: map,
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-7 sidebar">
                                <div class="author-card">
                                    <div class="author-info">
                                        <h5><?php echo $row['pusername'] ?></h5>
                                    </div>
                                    <div class="author-contact">
                                        <p><i class="fa fa-phone"></i><?php echo "+66 " . $row['pphone'] ?></p>
                                        <p><i class="fa fa-envelope"></i><?php echo $row['pemail'] ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>

            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVqVqbPHx_BvAgw2XBjCuqkyWT5on-Ib4&callback=initMap"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVqVqbPHx_BvAgw2XBjCuqkyWT5on-Ib4&callback=initMap" async defer></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVqVqbPHx_BvAgw2XBjCuqkyWT5on-Ib4&callback=initMap"></script>
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
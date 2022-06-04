<?php

header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();


$conn = mysqli_connect("localhost", "root", "", "register_db");
$x = $_POST["id"];

$query = "SELECT * FROM pnews_db where id=$x";
$query_run = mysqli_query($conn, $query);
$check_faculty = mysqli_num_rows($query_run) > 0;
//$result = $conn->query($query);
//$row = mysqli_fetch_assoc($result);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Real Estate </title>
</head>

<body>
    <header>
        <a href="index.php" class="logo">Real Estate </a>
        <div class="group">
            <ul class="navigation">
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="login.php">ลงประกาศ</a></li>
                <li><a href="#">ข่าว</a></li>
            </ul>
            <ul class="action">
                <li>
                    <a href="#">
                <li><a href="login.php">เข้าสู่ระบบ</a></li>
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
                        <div class="col-lg-13 single-list-page">

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo "upload2/" . $row['pn_image']; ?>" class="d-block w-100" height="600px" alt="Image">
                                    </div>
                                </div>
                            </div>

                            <div class="single-list-content">
                                <div class="row">
                                    <div class="col-xl-8 sl-title">
                                        <p><i class="fa fa-clock-o"></i><?php echo $row['pn_time'] ?></p>
                                    </div>
                                </div>
                                <h3 class="sl-sp-title"><?php echo $row['pn_name'] ?></h3>
                                <div class="description">
                                    <p><?php echo $row['pn_description'] ?></p>
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
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");

if (!isset($_SESSION['username'])) {
    /*$_SESSION['msg'] = "You must log in first";
        header('location: login.php');*/
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Real-Estate</title>
</head>

<body>
    <section class="header">
        <nav>
            <div class="logo">Real Estate</div>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="buyindex.php">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Condos</a></li>
                    <li><a href="#">News</a></li>
                    <li>
                        <div class="logbt">
                            <a href="login.php"><button id="show-login">Login</button></a>
                        </div>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <div class="container py-5">
        <div class="row mt-4">
            <?php
            $query = "SELECT * FROM property_db";
            $query_run = mysqli_query($conn, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;

            if ($check_faculty) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo "upload/" . $row['pimage']; ?>" class="card-img-top" width="200px" height="200px" alt="Image">
                                <h4 class="card-title">฿ <?php echo $row['ptotalcost']; ?></h4>
                                <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                                <p class="card-text">
                                    <?php echo $row['plocation']; ?>
                                </p>
                            </div>
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

    <!--**สลับเมนู หน้าโทรสับ**-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>
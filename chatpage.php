<?php
session_start();
if (isset($_SESSION['username'])) {

    include "serverDB.php";

    $sql = "SELECT * FROM `chat`";

    $query = mysqli_query($conn, $sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Service</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap2.min.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/stylechat.css">
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Real Estate</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="mainindex.php"><span class="glyphicon glyphicon-log-out"></span> กลับสู่หน้าหลัก</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <center>
                <h2>ยินดีต้อนรับคุณ <span style="color:#ff5a26;"><?php echo $_SESSION['username']; ?></span></h2>
                <label>เข้าร่วมการสนทนา</label>
            </center></br>
            <div class="display-chat">
                <?php
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <div class="message">
                            <p>
                                <span><?php echo $row['username']; ?> :</span>
                                <?php echo $row['message']; ?>
                            </p>
                            <p style="color:#6D8299;"><?php echo $row['created_on'];?></p>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="message">
                        <p>
                            No previous chat available.
                        </p>
                    </div>
                <?php
                }
                ?>

            </div>
            <form class="form-horizontal" method="post" action="sendMessage.php">
                <div class="form-group">
                    <div class="col-sm-10">
                        <textarea name="msg" class="form-control" placeholder="พิมพ์ข้อความของคุณที่นี่..."></textarea>
                    </div>

                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">ส่ง</button>
                    </div>

                </div>
            </form>
        </div>
    </body>

    </html>
<?php
} else {
    header('location:mainindex.php');
}
?>
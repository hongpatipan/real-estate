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
        <link rel="stylesheet" href="css/stylemainindex.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/stylemainme.css" />
        <title>Real Estate</title>
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
                    <li><a href="#"></a></li>
                    <li><a><?php echo $_SESSION['username'] ?></a></li>
                    <li><a class="btnout" href="logout.php">ออกสู่ระบบ</a></li>
                </ul>
                <ul class="action">
                    <!--<li>
                        <a href="#">
                    <li><a><?php echo $_SESSION['username'] ?></a></li>
                    <li><a class="btnout" href="logout.php">ออกสู่ระบบ</a></li>
                    </a>
                    </li>-->
                    <div class="menuToggle">
                        <ion-icon name="menu-outline"></ion-icon>
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </ul>
            </div>
        </header>

        <div class="dont"></div>

        <main class="mt-1 pt-1">
            <div class="container-fluid">
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <span><i class="bi bi-table me-2"></i></span> อสังหาริมทรัพย์ ของคุณ
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped data-table" style="width: 100%">
                                        <input type="hidden" name="id" value="<?php echo $row["pro_id"]; ?>">
                                        <thead>
                                            <tr>
                                                <th class="border text-center">Name</th>
                                                <th class="border text-center">Position</th>
                                                <th class="border text-center">Type</th>
                                                <th class="border text-center">Start date</th>
                                                <th class="border text-center">Salary</th>
                                                <th class="border text-center">View</th>
                                                <th class="border text-center">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM property_db WHERE u_id = " . $_SESSION['u_id'];
                                            $query_run = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($query_run)) {
                                            ?>
                                                <tr>
                                                    <input type="hidden" name="id" value="<?php echo $row["pro_id"]; ?>">
                                                    <td class="border"><?php echo $row['pusername']; ?></td>
                                                    <td class="border text-center"><?php echo $row['pcity']; ?></td>
                                                    <td class="border text-center"><?php echo $row['pselects']; ?></td>
                                                    <td class="border text-center"><?php echo $row['pcreated_on']; ?></td>
                                                    <td class="border text-end"><?php echo number_format($row['ptotalcost']); ?></td>

                                                    <td class="border text-center">
                                                        <form action='viewmain.php' method="post">
                                                            <input type="hidden" name="id" value="<?php echo $row["pro_id"]; ?>">
                                                            <div class="btnview">
                                                                <button type="submit" class="btn text-white">View</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td class="border text-center">
                                                        <div class="btndel">
                                                            <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                                        </div>
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">คุณกำลังลบอสังหาริมทรัพย์</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        กรุณายืนยันที่จะลบรายการนี้
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <form action="code.php" method="post">
                                                                            <input type="hidden" name="delete_id" value="<?php echo $row['pro_id']; ?>">
                                                                            <input type="hidden" name="del_image" value="<?php echo $row['pimage']; ?>">
                                                                            <input type="hidden" name="del_image2" value="<?php echo $row['pimage2']; ?>">
                                                                            <input type="hidden" name="del_image3" value="<?php echo $row['pimage3']; ?>">
                                                                            <input type="hidden" name="del_image4" value="<?php echo $row['pimage4']; ?>">
                                                                            <div class="btndel">
                                                                                <button type="submit" name="delete_image" class="btn btn-danger">Delete</button>
                                                                            </div>
                                                                        </form>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

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
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="bootstrap/js/jquery-3.5.1.js"></script>
        <script src="bootstrap/js/jquery.dataTables.min.js"></script>
        <script src="bootstrap/js/dataTables.bootstrap5.min.js"></script>
        <script src="bootstrap/js/script.js"></script>
    </body>

    </html><?php } ?>
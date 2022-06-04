<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "register_db");
if (!isset($_SESSION['adusername'])) {
    header("Location: adlogin.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/styleadmin.css" />
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <title>Admin Panel of Real Estate</title>
    </head>

    <body>
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <!-- offcanvas trigger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                </button>
                <!-- offcanvas trigger -->
                <div class="bn">
                    <a class="navbar-brand fw-bold text-uppercase me-auto" href="admain.php">Real Estate</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex ms-auto">
                        <div class="input-group my-3 my-lg-0">
                            <div class="placetext">
                                <input type="text" class="form-control" placeholder="developing" aria-label="Recipient's username" aria-describedby="button-addon2">
                            </div>
                            <div class="btnsearch">
                                <button class="btn text-white" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"><?php echo $_SESSION['adusername'] ?></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="adlogout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- offcanvas -->
        <div class="offcan">
            <div class="offcanvas offcanvas-start bg-light sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-body p-0">
                    <nav class="navbar-dark">
                        <ul class="navbar-nav">
                            <div class="navapp">
                                <li>
                                    <div class="text-muted small fw-bold text-uppercase px-3">CORE</div>
                                </li>
                                <li>
                                    <a href="admain.php" class="nav-link px-3 active">
                                        <span class="me-2">
                                            <i class="bi bi-building"></i>
                                        </span>
                                        <span>Property</span>
                                    </a>
                                </li>
                                <li class="my-4">
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <div class="text-muted small fw-bold text-uppercase px-3">interface</div>
                                </li>
                                <li>
                                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="me-2">
                                            <i class="bi bi-newspaper"></i>
                                        </span>
                                        <span>News</span>
                                        <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div>
                                            <ul class="navbar-nav ps-3">
                                                <a href="aditem.php" class="nav-link px-3">
                                                    <span class="me-2">
                                                        <i class="bi bi-list-check"></i>
                                                    </span>
                                                    <span>News item</span>
                                                </a>
                                                <a href="adaddnews.php" class="nav-link px-3">
                                                    <span class="me-2">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </span>
                                                    <span>Add news</span>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <main class="mt-5 pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h4>ADD NEWS</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <?php
                        if (isset($_SESSION['adstatus']) && $_SESSION != '') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>HEY!</strong> <?php echo $_SESSION['adstatus']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['adstatus']);
                        }
                        ?>

                        <form action="adcode.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="col-sm-3 control-label"></label>
                                <input type="text" name="add_name" required class="form-control" placeholder="title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="col-sm-3 control-label"></label>
                                <input type="file" name="text_image" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="text_description" required id="input-ckeditor"></textarea>
                            </div>

                            <div class="col-md-1 mb-3 text-center">
                                <div class="btnsub">
                                    <button type="submit" name="save_news_image" class="btn text-white">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        </main>
        <script>
            CKEDITOR.replace('input-ckeditor');
        </script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="bootstrap/js/jquery-3.5.1.js"></script>
        <script src="bootstrap/js/jquery.dataTables.min.js"></script>
        <script src="bootstrap/js/dataTables.bootstrap5.min.js"></script>
        <script src="bootstrap/js/script.js"></script>

    </body>

    </html><?php } ?>
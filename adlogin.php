<?php

include 'serverDB.php';

session_start();

error_reporting(0);

if (isset($_SESSION['adusername'])) {
    header("Location: admain.php");
}

if (isset($_POST['submit'])) {
    $adusername = $_POST['adusername'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM adminpp WHERE adusername='$adusername' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['adusername'] = $row['adusername'];
        $_SESSION['adm_id'] = $row['adm_id'];
        header("Location: admain.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylelog-regis.css">
    <title>ADMIN-login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Panel Login</p>
            <div class="input-group">
                <input type="text" placeholder="Usernmae" name="adusername" value="<?php echo $adusername; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <!--<p class="login-register-text">Don't have an account? <a href="adregis.php">Register Here</a>.</p>-->
        </form>
    </div>
</body>

</html>
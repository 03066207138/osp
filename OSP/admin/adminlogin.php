<?php
include("../connection.php");
session_start();
if (!isset($_SESSION['is_login'])) {
    if (isset($_REQUEST['login'])) {
        $email = mysqli_real_escape_string($con, trim($_REQUEST['email']));
        $pass = mysqli_real_escape_string($con, trim($_REQUEST['pass']));
        $sql = "SELECT `a_email`, `a_password` FROM `adminlogin` WHERE `a_email`='" . $_REQUEST['email'] . "' AND `a_password`='" . $_REQUEST['pass'] . "' limit 1";
        $res = $con->query($sql);
        if ($res->num_rows == true) {
            $_SESSION['is_login'] = true;
            $_SESSION['email'] = $email;
            echo "<script>location.href='dashboard.php';</script>";
        } else {
            $lmsg = "<div class='alert alert-danger mt-3'>Unable to Login!!!</div>";
        }
    }
} else {
    echo "<script>location.href='adminlogin.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontawsome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="text-center mt-5" style="font-size: 30px;">
        <i class="fas fa-stethoscope fa-2x"></i>
        <span>Admin Login</span>
        <p class="text-center mt-2" style="font-size: 20px;"><i class="fas fa-user-secret text-danger"></i>Requester Area(Demo)</p>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-6 col-md-4 mt-2 shadow p-4">
                <form action="" method="POST" class="item-center" style="justify-content:center;">
                    <div class="form-group">
                        <i class="fas fa-user me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" placeholder="">
                        <small>We will never share your email to anyone...</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Password</b></label>
                        <input type="password" class="form-control" name="pass" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-4 btn-block " name="login">Login</button>
                    <?php if (isset($lmsg)) {
                        echo $lmsg;
                    } ?>
                </form>
            </div>
            <div class="text-center mt-4"><a href="../index.php" class="btn btn-info shadow text-white"><b>Back To Home</b></a></div>
        </div>
    </div>


    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/pooper.min.js"></script>
    <!-- fontawsome -->
    <script src="../js/all.min.js"></script>
</body>

</html>
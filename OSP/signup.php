<?php
include('include/header.php');
include('connection.php');
if (isset($_REQUEST['signup'])) {
    if (($_REQUEST['rName'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['pass'] == "")) {
        $signupmsg = "<div class='alert alert-warning mt-2' role='alert'> All Fill Feilds are Required...</div>";
    } else {
        // email already exists
        $sql = "SELECT `u_email` FROM `ulogin` WHERE `u_email` = '" . $_REQUEST['email'] . "'";
        $res = $con->query($sql);
        if ($res->num_rows == true) {
            $signupmsg = "<div class='alert alert-warning mt-2' role='alert'> Email already exists...</div>";
        } else {
            $name = $_REQUEST['rName'];
            $email = $_REQUEST['email'];
            $pass = $_REQUEST['pass'];
            $sql = "INSERT INTO `ulogin`(`u_name`, `u_email`, `u_password`) VALUES ('$name', '$email', '$pass')";
            if ($con->query($sql) == True) {
                $successmsg = "<div class='alert alert-success mt-2' role='alert'> Account created successfully...</div>";
                echo "<script>location.href='user/userlogin.php';</script>";
            } else {
                $successmsg = "<div class='alert alert-danger mt-2' role='alert'> Account cannot Created...</div>";
            }
        }
    }
}
?>
<div class="container mt-4">
    <h1 class="text-center">
        Create an Account
    </h1>
    <div class="row mt-4 float-center" style="justify-content:center;">
        <div class="col-sm-5 mt-2 shadow p-4">
            <form action="" method="POST" class="item-center" style="justify-content:center;">
                <div class="form-group">
                    <i class="fas fa-user me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Name</b></label>
                    <input type="text" class="form-control" name="rName" placeholder="Name">
                </div>
                <div class="form-group">
                    <i class="fas fa-user me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Email</b></label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <i class="fas fa-key me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Password</b></label>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    <button type="submit" class="btn btn-danger mt-4 btn-block " name="signup">Sign up</button>
                </div>
                <hr>
                <em style="font-size: 10px;">By clicking Sign up.................</em>
                <?php
                if (isset($signupmsg)) {
                    echo $signupmsg;
                }
                if (isset($successmsg)) {
                    echo $successmsg;
                }
                ?>
            </form>

        </div>
    </div>
</div>
<?php  
include('include/footer.php');
?>
<?php
define('TITLE', 'CHANGE PASSWORD');
define('PAGE', 'changepassword.php');
include('../connection.php');
include('include/header.php');
session_start();
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
}
$sql = "SELECT `u_email`, `u_password` FROM `ulogin` WHERE `u_email` = '$email'";
$res = $con->query($sql);
if ($res->num_rows == 1) {
    $row = $res->fetch_assoc();
    $pass = $row['u_password'];
}
if (isset($_REQUEST['update'])) {
    if (($_REQUEST['pass']) == "") {
        echo "Fill All Feilds";
    } else {
        $pass = $_REQUEST['pass'];
        $sql = "UPDATE `ulogin` SET `u_password`= '$pass' WHERE `u_email` = '".$email."'";
        if ($con->query($sql) == true) {

            $umsg = "<div class='alert alert-success mt-3'>Updated Successfully!!!</div>";
        } else {
            $umsg = "<div class='alert alert-danger mt-3'>Unable to Update!!!</div>";
        }
    }
}
?>

<div class="col-sm-6" style="margin: 30px;">
    <form action="" method="post">
        <div class="form-group">
            <i class="fas fa-user me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Email</b></label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" readonly>
        </div>
        <div class="form-group">
            <i class="fas fa-key me-2"></i><label for="pass" class="font-weight-bold pl-2 my-2"><b>Change Password</b></label>
            <input type="password" class="form-control" name="pass" placeholder="password" value="<?php echo $pass; ?>">
            <button type="submit" class="btn btn-danger mt-4 btn-block " name="update">update</button>
            <?php if (isset($umsg)) {
                echo $umsg;
            } ?>
        </div>
    </form>
</div>
</div>
</div>

<?php
include('include/footer.php');
?>
<?php
define('TITLE', 'REQUESTER PROFILE');
define('PAGE', 'userprofile.php');
include('../connection.php');
include('include/header.php');
session_start();
if ($_SESSION['is_login']) {
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href = 'userlogin.php'</script>";
}
$sql = "SELECT `u_name`, `u_email` FROM `ulogin` WHERE `u_email` = '$email'";
$res = $con->query($sql);
if ($res->num_rows == 1) {
    $row = $res->fetch_assoc();
    $name = $row['u_name'];
}
if (isset($_REQUEST['update'])) {
    if (($_REQUEST['name']) == "") {
        echo "Fill All Feilds";
    } else {
        $name = $_REQUEST['name'];
        $sql = "UPDATE `ulogin` SET `u_name`='$name' WHERE `u_email` = '$email'";
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
            <i class="fas fa-user me-2"></i><label for="name" class="font-weight-bold pl-2 my-2"><b>Name</b></label>
            <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $name; ?>">
            <button type="submit" class="btn btn-danger mt-4 btn-block " name="update">update</button>
            <?php if(isset($umsg)){ echo $umsg;} ?>
        </div>
    </form>
</div>
</div>
</div>
<?php
include('include/footer.php');
?>
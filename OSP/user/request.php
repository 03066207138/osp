<?php
define('TITLE', 'REQUESTER PROFILE');
define('PAGE', 'request.php');
include('../connection.php');
include('./include/header.php');
session_start();
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href = 'request.php'</script>";
}
if (isset($_REQUEST['submit'])) {
    if (($_REQUEST['req'] == "") ||  ($_REQUEST['des'] == "") || ($_REQUEST['name'] == "") || ($_REQUEST['add1'] == "") || ($_REQUEST['add2'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['zip'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['date'] == "")) {
        $rmsg = "<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    } else {
        $req = $_REQUEST['req'];
        $des = $_REQUEST['des'];
        $name = $_REQUEST['name'];
        $add1 = $_REQUEST['add1'];
        $add2 = $_REQUEST['add2'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $zip = $_REQUEST['zip'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['phone'];
        $date = $_REQUEST['date'];
        $sql = "INSERT INTO `user_request`(`u_request`, `u_description`, `u_name`, `u_add1`, `u_add2`, `u_city`, `u_state`, `u_zip`, `u_email`, `u_mobile`, `date`) VALUES ('$req','$des','$name','$add1','$add2','$city','$state','$zip','$email','$mobile',
         '$date')";
        if ($con->query($sql) == TRUE) {
            $myid = mysqli_insert_id($con);
            $rmsg = "<div class='alert alert-success mt-3'>Request Added Successfully...</div>";
            $_SESSION['myid'] = $myid;
            echo "<script> location.href = 'requestsuccess.php'</script>";
        } else {
            $rmsg = "<div class='alert alert-warning mt-3'>Unable to Add...</div>";
        }
    }
}


?>

<div class="col-sm-8" style="margin: 5px;">
    <form action="" method="post" class="m-4">
        <div class="form-group mt-2">
            <label for="req"><b>Request Info</b></label>
            <input type="text" class="form-control" name="req" id="req" placeholder="Request Info">
        </div>
        <div class="form-group mt-2">
            <label for="des"><b>Description</b></label>
            <input type="text" class="form-control" name="des" id="des" placeholder="Description">
        </div>
        <div class="form-group mt-2">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="row">
            <div class="form-group col-md-6 mt-2">
                <label for="adress1"><b>Line 1</b></label>
                <input type="text" class="form-control" name="add1" id="add1" placeholder="Address 1">
            </div>
            <div class="form-group col-md-6 mt-2">
                <label for="adress2"><b>Line 2</b></label>
                <input type="text" class="form-control" name="add2" id="add2" placeholder="Address 2">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 mt-2">
                <label for="city"><b>City</b></label>
                <input type="text" class="form-control" name="city" id="city" placeholder="City">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label for="state"><b>State</b></label>
                <input type="text" class="form-control" name="state" id="state" placeholder="State">
            </div>
            <div class="form-group col-md-2 mt-2">
                <label for="zip"><b>Zip</b></label>
                <input type="number" class="form-control" name="zip" id="zip" placeholder="Zip">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 mt-2">
                <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label for="phone"><b>Mobile</b></label>
                <input type="phone no" class="form-control" name="phone" id="phone" placeholder="Mobile">
            </div>
            <div class="form-group col-md-2 mt-2">
                <label for="date"><b>Date</b></label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Date">
            </div>
        </div>
        <button type="submit" class="btn btn-danger mt-4 btn-block " name="submit">Submit</button>
        <button class="btn btn-secondary mt-4 btn-block" type="submit" name="reset">Reset</button>
        <?php if (isset($rmsg)) {
            echo $rmsg;
        } ?>
    </form>
</div>


<?php
include('./include/footer.php');
?>
<?php
define('PAGE', 'request1.php');
include('include/header.php');
include('../connection.php');
?>
<div class="col-sm-3 mt-5 mx-3">
    <?php
    $sql = "SELECT `id`, `u_request`, `u_description`, `u_name`, `date` FROM `user_request`";
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo '<div class="card mb-4">';
            echo '<div class="card-header">';
            echo 'Request Id:' . $row['id'];
            echo '</div>';
            echo '<div class="card-body">';
            echo 'Request: ' . $row['u_request'] . "<br>";
            echo  'Description: ' . $row['u_description'] . "<br>";
            echo  'Date: ' . $row['date'] . "<br>";
            echo '</div>';
            echo '<form action="" methos="POST">';
            echo '<div class="float-end m-2">';
            echo '<input type = "hidden" value ="' . $row['id'] . '" name= "id">';
            echo '<input type = "submit" class = "btn btn-danger m-1" value ="View" name= "view">';
            echo '<input type = "submit" class = "btn btn-secondary m-1" value ="Close" name= "close">';
            echo '</div>';
            echo '</form>';
            echo '</div>';
        }
    }

    ?>
</div>
<?php
if (isset($_REQUEST['view'])) {
    $sql = "SELECT * FROM `user_request` WHERE `id` = {$_REQUEST['id']}";
    $res = $con->query($sql);
    $row = $res->fetch_assoc();
}
if (isset($_REQUEST['close'])) {
    $sql = "DELETE FROM `user_request` WHERE `id` = {$_REQUEST['id']}";
    if ($con->query($sql) == true) {
        echo '<meta http-equiv = "refresh" content = "0;URL=?closed" />';
    } else {
        echo "Unable to Delete....";
    }
}
if (isset($_REQUEST['assign'])) {
    if (($_REQUEST['id'] == "") || ($_REQUEST['req'] == "") ||  ($_REQUEST['des'] == "") || ($_REQUEST['name'] == "") || ($_REQUEST['add1'] == "") || ($_REQUEST['add2'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['zip'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['date'] == "") || ($_REQUEST['name1'] == "") || ($_REQUEST['date1'] == "")) {
        $rmsg = "<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    } else {
        $reqid = $_REQUEST['id'];
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
        $name1 = $_REQUEST['name1'];
        $date1 = $_REQUEST['date1'];
        $sql = "INSERT INTO `work_assign`(`request_id`, `u_request`, `u_description`, `u_name`, `u_add1`, `u_add2`, `u_city`, `u_state`, `u_zip`, `u_email`, `u_mobile`, `date`, `t_name`, `assign_date`) VALUES ('$reqid','$req','$des','$name','$add1','$add2','$city','$state','$zip','$email','$mobile',
         '$date', '$name1', '$date1')";
        if ($con->query($sql) == TRUE) {
            $myid = mysqli_insert_id($con);
            $rmsg = "<div class='alert alert-success mt-3'>Request Added Successfully...</div>";
            $_SESSION['myid'] = $myid;
            echo "<script> location.href = 'work.php'</script>";
        } else {
            $rmsg = "<div class='alert alert-warning mt-3'>Unable to Add...</div>";
        }
    }
}
?>
<div class="col-sm-6 mt-4 m-1 float-center">
    <div class="row">
    <form action="" method="post" class="m-4 shadow p-4">
        <h3 class="text-center">Assign Work to Request</h3>
        <div class="form-group mt-2">
            <label for="req"><b>Request Id</b></label>
            <input type="text" class="form-control" name="id" id="id" placeholder="Request Id" value="<?php if (isset($row['id'])) {
                                                                                                            echo $row['id'];
                                                                                                        } ?>" readonly>
        </div>
        <div class="form-group mt-2 ">
            <label for="req"><b>Request Info</b></label>
            <input type="text" class="form-control" name="req" id="req" value="<?php if (isset($row['u_request'])) {
                                                                                    echo $row['u_request'];
                                                                                } ?>" placeholder="Request Info">
        </div>
        <div class="form-group mt-2">
            <label for="des"><b>Description</b></label>
            <input type="text" class="form-control" name="des" id="des" value="<?php if (isset($row['u_description'])) {
                                                                                    echo $row['u_description'];
                                                                                } ?>" placeholder="Description">
        </div>
        <div class="form-group mt-2">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" name="name" id="name" value="<?php if (isset($row['u_name'])) {
                                                                                        echo $row['u_name'];
                                                                                    } ?>" placeholder="Name">
        </div>
        <div class="row">
            <div class="form-group col-md-6 mt-2">
                <label for="adress1"><b>Line 1</b></label>
                <input type="text" class="form-control" name="add1" id="add1" value="<?php if (isset($row['u_add1'])) {
                                                                                            echo $row['u_add1'];
                                                                                        } ?>" placeholder="Address 1">
            </div>
            <div class="form-group col-md-6 mt-2">
                <label for="adress2"><b>Line 2</b></label>
                <input type="text" class="form-control" name="add2" id="add2" value="<?php if (isset($row['u_add2'])) {
                                                                                            echo $row['u_add2'];
                                                                                        } ?>" placeholder="Address 2">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 mt-2">
                <label for="city"><b>City</b></label>
                <input type="text" class="form-control" name="city" id="city" value="<?php if (isset($row['u_city'])) {
                                                                                            echo $row['u_city'];
                                                                                        } ?>" placeholder="City">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label for="state"><b>State</b></label>
                <input type="text" class="form-control" name="state" id="state" value="<?php if (isset($row['u_state'])) {
                                                                                            echo $row['u_state'];
                                                                                        } ?>" placeholder="State">
            </div>
            <div class="form-group col-md-3 mt-2">
                <label for="zip"><b>Zip</b></label>
                <input type="number" class="form-control" name="zip" id="zip" value="<?php if (isset($row['u_zip'])) {
                                                                                            echo $row['u_zip'];
                                                                                        } ?>" placeholder="Zip">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 mt-2">
                <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($row['u_email'])) {
                                                                                            echo $row['u_email'];
                                                                                        } ?>" placeholder="Email">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label for="phone"><b>Mobile</b></label>
                <input type="phone no" class="form-control" name="phone" id="phone" value="<?php if (isset($row['u_mobile'])) {
                                                                                                echo $row['u_mobile'];
                                                                                            } ?>" placeholder="Mobile">
            </div>
            <div class="form-group col-md-3 mt-2">
                <label for="date"><b>Date</b></label>
                <input type="date" class="form-control" name="date" id="date" value="<?php if (isset($row['date'])) {
                                                                                            echo $row['date'];
                                                                                        } ?>" placeholder="Date">
            </div>
        </div>
        <div class="form-group mt-2 ">
            <label for="name1"><b>Technician Name</b></label>
            <input type="text" class="form-control" name="name1" id="name1" value="" placeholder="Technician Name">
        </div>
        <div class="form-group mt-2 ">
            <label for="name1"><b>Assign Date</b></label>
            <input type="date" class="form-control" name="date1" id="date1" value="" placeholder="Work Assign Date">
        </div>
        <div class="form-group mt-2 float-end">
            <button type="submit" class="btn btn-success mt-4 btn-block " name="assign">Assign</button>
            <button class="btn btn-secondary mt-4 btn-block" type="submit" name="reset">Reset</button>
        </div>
    </form>
    </div>
</div>




<?php
include('include/footer.php');
?>
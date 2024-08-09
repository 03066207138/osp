<?php
define('TITLE', 'REQUESTER STATUS');
define('PAGE', 'status.php');
error_reporting(E_ERROR | E_PARSE);
include('../connection.php');
include('include/header.php');
session_start();
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href = 'userlogin.php'</script>";
}

?>
<div class="col-sm-10">
    <form action="" method="POST" class="row mt-3">
        <div class=col-auto>
            <input type="number" class="form-control mx-3 d-print-none" name="id" id="id" value="">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-danger mb-3 d-print-none" id="search" name="search">Search</button>
        </div>
    </form>
    <?php
    if (isset($_REQUEST['id'])) {
        if ($_REQUEST['id'] == "") {
            echo '<div class ="alert alert-warning col-sm-3 mt-3">Input Required</div>';
        } else {
            $sql = "SELECT * FROM `work_assign` WHERE `request_id` = {$_REQUEST['id']}";
            $res = $con->query($sql);
            $row = $res->fetch_assoc();
            if (($row['request_id'] == $_REQUEST['id'])) {
    ?>
                <div class='container'>
                    <div class='col-sm-6 mt-5 ml-6 align-center'>
                        <h3 class="text-center">Status</h3>
                        <table class='table'>
                            <tbody>
                                <tr>
                                    <th>Request ID</th>
                                    <td><?php echo $row['request_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>Request</th>
                                    <td><?php echo $row['u_request']; ?></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td><?php echo $row['u_description']; ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['u_name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['u_add1']; ?></td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td><?php echo $row['date']; ?></td>
                                </tr>
                                <tr>
                                    <th>Technician Name</th>
                                    <td><?php echo $row['t_name']; ?></td>
                                </tr>
                                <tr>
                                    <th> Work Assign Date</th>
                                    <td><?php echo $row['assign_date']; ?></td>
                                </tr>
                                <tr>
                                    <th>Requester Sign</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Technician Sign</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <form>
                                            <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()' id='print'>
                                            <input class='btn btn-secondary' type='submit' value='Close' id='print'>
                                        </form>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>

    <?php
            } else {
                echo '<div class ="alert alert-warning col-sm-3 mt-3">Request is Pending</div>';
            }
        }
    }
    ?>
</div>



<?php
include('include/footer.php');
?>
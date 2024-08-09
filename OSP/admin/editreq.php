<?php
define('PAGE', 'requester.php');
include('include/header.php');
include('../connection.php');
session_start();
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script>location.href='adminlogin.php';</script>";
    exit;
}

if (isset($_REQUEST['view'])) {
    $id = intval($_REQUEST['id']);
    $sql = "SELECT * FROM user_request WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
}

if (isset($_REQUEST['update'])) {
    if (empty($_REQUEST['name']) || empty($_REQUEST['email'])) {
        $rmsg = "<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    } else {
        $reqid = intval($_REQUEST['id']);
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];

        $sql = "UPDATE user_request SET u_name = ?, u_email = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssi", $name, $email, $reqid);

        if ($stmt->execute()) {
            $rmsg = "<div class='alert alert-success mt-3'>Request Updated Successfully...</div>";
        } else {
            $rmsg = "<div class='alert alert-warning mt-3'>Unable to Update...</div>";
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <form action="" method="POST" class="m-4 shadow p-4">
        <h3 class="text-center mt-4">Update Requester Details</h3>
        <div class="form-group m-3">
            <label for="req"><b>Request Id</b></label>
            <input type="text" class="form-control" name="id" id="id" placeholder="Request Id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>" readonly>
        </div>
        <div class="form-group m-3">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo isset($row['u_name']) ? $row['u_name'] : ''; ?>" placeholder="Name">
        </div>
        <div class="form-group m-3">
            <label for="email"><b>Email</b></label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo isset($row['u_email']) ? $row['u_email'] : ''; ?>" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-info btn-block" name="update">Update</button>
        <a href="requester.php" class="btn btn-danger">Close</a>
        <?php if (isset($rmsg)) { echo $rmsg; } ?>
    </form>
</div>

<?php
include('include/footer.php');
?>

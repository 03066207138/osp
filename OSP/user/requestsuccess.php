<?php
define('TITLE', 'SUCCESS');
// include('./include/header.php');
include('../connection.php');
session_start();
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href = 'userlogin.php'</script>";
}
$sql = "SELECT * FROM `user_request` WHERE `id` = {$_SESSION['myid']}";
$res = $con->query($sql);
if ($res->num_rows == 1) {
    $row = $res->fetch_assoc();
    echo "<div class='container'>
        <div class='col-sm-6 mt-5 ml-6 align-center'>
        <table class='table'>
        <tbody>
        <tr>
        <th>Request ID</th>
        <td>" . $row['id'] . "</td>
        </tr>
        <tr>
        <th>Request</th>
        <td>" . $row['u_request'] . "</td>
        </tr>
        <tr>
        <th>Description</th>
        <td>" . $row['u_description'] . "</td>
        </tr>
        <tr>
        <th>Name</th>
        <td>" . $row['u_name'] . "</td>
        </tr>
        <tr>
        <th>Date</th>
        <td>" . $row['date'] . "</td>
        </tr>
        <tr>
        <td>
        <form>
        <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()' id='print'>
        </form>
        </td>
        </tbody>
        </table>
        <div class='text-center mt-4'><a href='./userprofile.php' class='btn btn-secondary shadow text-white' id='print'><b>Back To Home</b></a></div>
       </div> 
       </div> 
      ";
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
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo TITLE ?></title>
</head>
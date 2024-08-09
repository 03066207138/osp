<?php
include("../connection.php");

if (isset($_REQUEST['del'])) {
     $sql = "DELETE FROM `user_request` WHERE `id` = {$_REQUEST['id']}";

    if ($con->query($sql) === true) {
        // Redirect to a confirmation page or refresh the current page
        header("Location: requester.php");
        exit();
    } else {
        echo "Unable to Delete: " . $con->error;
    }
} else {
    echo "ID parameter not provided.";
}

?>

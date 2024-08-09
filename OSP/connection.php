<?php
$dbsever = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "osp";

$con = new mysqli($dbsever, $dbuser, $dbpassword, $dbname);
if($con->connect_error){
    die("Connection Failed");
}
else{
    echo "";
}

?>
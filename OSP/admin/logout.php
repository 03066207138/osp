<?php
session_start();
if(isset($_SESSION['is_login'])){
session_destroy();
echo "<script> location.href = '../index.php'</script>";
}
?>

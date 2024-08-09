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
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar bg-danger shadow"><a href="dashboard.php" class="navbar-brand text-white mx-3">OSP</a></nav>
    <span class="taxt-center"></span>
    <div class="container-fluid mt-2">
        <div class="row">
            <nav class="col-sm-2 bg-light">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="dashboard.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'dashboard.php') {
                                                                                                                        echo 'bg-danger text-white';
                                                                                                                    } ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li class="nav-item"><a href="work.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'work.php') {
                                                                                                                echo 'bg-danger text-white';
                                                                                                            } ?>"><i class="fab fa-accessible-icon"></i>Work Order</a></li>
                        <li class="nav-item"><a href="request1.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'request1.php') {
                                                                                                                    echo 'bg-danger text-white';
                                                                                                                } ?>"><i class="fas fa-align-center"></i>Requests</a></li>
                        <li class="nav-item"><a href="assets.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'assets.php') {
                                                                                                                    echo 'bg-danger text-white';
                                                                                                                } ?>"><i class="fas fa-database"></i>Assets</a></li>
                        <li class="nav-item"><a href="technician.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'technician.php') {
                                                                                                                        echo 'bg-danger text-white';
                                                                                                                    } ?>"><i class="fas fa-stamp"></i>Technician</a></li>
                        <li class="nav-item"><a href="requester.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'requester.php') {
                                                                                                                    echo 'bg-danger text-white';
                                                                                                                } ?>"><i class="fas fa-users"></i>Requester</a></li>
                        <li class="nav-item"><a href="sellreport.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'sellreport.php') {
                                                                                                                        echo 'bg-danger text-white';
                                                                                                                    } ?>"><i class="fas fa-table"></i>Sell Report</a></li>
                        <li class="nav-item"><a href="workreport.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'workreport.php') {
                                                                                                                        echo 'bg-danger text-white';
                                                                                                                    } ?>"><i class="fas fa-table"></i>Work Report</a></li>
                        <li class="nav-item"><a href="changepass.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'changepass.php') {
                                                                                                                        echo 'bg-danger text-white';
                                                                                                                    } ?>"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link text-black text-center mt-2 <?php if (PAGE == 'logout.php') {
                                                                                                                    echo 'bg-danger text-white';
                                                                                                                } ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
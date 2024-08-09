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
    <title><?php echo TITLE ?></title>
</head>

<body>
    <nav class="navbar navbar-dark bg-danger fixed-top p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 px-4 text-white" href="userprofile.php">OSP</a></nav>
    <div class="container-fluid" style="margin-top: 70px;">
        <div class="row">
            <nav class="col-sm-2 bg-light py-3">
                <div class="sidbar-sticky d-print-none">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="./userprofile.php" class="nav-link <?php if(PAGE == 'userprofile.php'){echo 'bg-danger text-white';}?>" style="font-weight:bold; color:black;"><i class="fas fa-user px-2"></i>Profile</a></li>
                        <li class="nav-item"><a href="./request.php" class="nav-link <?php if(PAGE == 'request.php'){echo 'bg-danger text-white';}?>" style="font-weight:bold; color:black;"><i class="fab fa-accessible-icon px-2"></i>Submit Request</a></li>
                        <li class="nav-item"><a href="./status.php" class="nav-link <?php if(PAGE == 'status.php'){echo 'bg-danger text-white';}?>" style="font-weight:bold; color:black;"><i class="fas fa-align-center px-2"></i>Service Status</a></li>
                        <li class="nav-item"><a href="./changepassword.php" class="nav-link <?php if(PAGE == 'changepassword.php'){echo 'bg-danger text-white';}?>" style="font-weight:bold; color:black;"><i class="fas fa-key px-2"></i>Change Password</a></li>
                        <li class="nav-item"><a href="./signout.php" class="nav-link <?php if(PAGE == 'signout.php'){echo 'bg-danger text-white';}?>" style="font-weight:bold; color:black;"><i class="fas fa-sign-out-alt px-2"></i>Sign Out</a></li>
                    </ul>
                </div>
            </nav>
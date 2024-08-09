<?php
include("include/header.php");
?>

<body>

    <nav class="navbar navbar-expand-sm bg-light shadow-1">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">OSP</a>
            <span class="navbar-text text-danger">Happiness is Our's Aim</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user/userlogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header start -->
    <header class="jumbotron">
        <div class="container-fluid" style="padding: 0px;margin:0px;">
            <img src="image/tool.jpg" alt="" class="header-img" style="position:relative;width:100%; height:570px;object-fit:cover;">
            <div class="heading">
                <h1>Online Services!!!</h1>
                <p>This Service is provide you to solve your's problems....</p>
                <a href="user/userlogin.php" class="btn btn-danger r-1 p-2 m-2">Login</a>
                <a href="signup.php" class="btn btn-success r-1 p-2">Sign up</a>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start introduction  -->
    <div class="container align-center bg-info b-2">
        <div class="jumbotron p-4 mt-4">
            <h1 class="text-center mt-5">
                OSP Services
            </h1>
            <p class="text-black p-2 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Neque, aliquam ipsam quos illo accusamus officiis incidunt
                tempore dolorem impedit iste aut minus corporis saepe ea alias
                sunt reprehenderit! At, dolorum.</p>
        </div>
    </div>
    <!-- end introduction -->
    <!-- start service section -->
    <div class="container text-center mt-4">
        <h1>Online Services</h1>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href=""><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Aplliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href=""><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
            <hr>
        </div>
    </div>
    <!-- end service section -->

    <!-- start contact form -->
    <?php
    include_once("signup.php");
    ?>
    <!-- end contact form -->
    <!-- start Happy Customer -->
    <div class="jumbotron bg-danger mt-4 p-4">
        <div class="container">
            <h1 class="text-center text-white p-2">Happy Customers </h1>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <img src="image/saher.jpg" alt="" class="img-fluid" style="border-radius: 100px;width:100px;height:100px;">
                            <h4 class="card-title">Saher Pervaiz</h4>
                            <p class="card-text">Working in govt institute..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <img src="image/saher.jpg" alt="" class="img-fluid" style="border-radius: 100px;width:100px;height:100px;">
                            <h4 class="card-title">Saher Pervaiz</h4>
                            <p class="card-text">Working in govt institute..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <img src="image/saher.jpg" alt="" class="img-fluid" style="border-radius: 100px;width:100px;height:100px;">
                            <h4 class="card-title">Saher Pervaiz</h4>
                            <p class="card-text">Working in govt institute..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <img src="image/saher.jpg" alt="" class="img-fluid" style="border-radius: 100px;width:100px;height:100px;">
                            <h4 class="card-title">Saher Pervaiz</h4>
                            <p class="card-text">Working in govt institute..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end Happy Customer -->

    <!-- start contact us -->
    <div class="container m-4 p-4">
        <h1 class="text-center">Contact us</h1>
        <div class="row">
            <?php
            include("contact.php");
            ?>
            <div class="col-sm-4 text-center mb-5">
                <strong>Headquater</strong><br>
                House no 324/sheen <br>
                Shah Jahangir road <br>
                Gujrat, Pakistan <br>
                <a href="#" target="_blank" class="text-danger">www.OSP.com</a><br><br>
                <strong>Branch code</strong><br>
                House no 324/sheen <br>
                Shah Jahangir road <br>
                Gujrat, Pakistan <br>
                <a href="#" target="_blank" class="text-danger">www.OSP.com</a><br><br>
            </div>
        </div>
    </div>
    <!-- end contact us -->
    <!-- start footer -->
    <div class="footer bg-dark text-white fixed-bottom">
        <div class="row text-center">
            <p class="mt-3">Follow us :
                <a href="#" target="_blank" class="p-1 text-danger"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="p-1 text-danger"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="p-1 text-danger"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="p-1 text-danger"><i class="fab fa-google"></i></a>
                <a href="#" target="_blank" class="p-1 text-danger"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="p-1 text-danger me-5"><i class="fab fa-facebook-f"></i></a>

                <small class="">Designed by Saher; 2023</small>
                <small class="m-4"><a href="./admin/adminlogin.php" class="text-danger">Admin Login</a></small>
            </p>
        </div>
    </div>
    <!-- end footer -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pooper.min.js"></script>
    <!-- fontawsome -->
    <script src="js/all.min.js"></script>

</body>

</html>
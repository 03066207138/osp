<?php
define('PAGE', 'dashboard.php');
include('../connection.php');
include('include/header.php');
$sql = "SELECT * FROM `user_request`";
$res = $con->query($sql);
?>

            <div class="col-sm-9">
                <div class="row text-center mx-5">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-header text-center"><b>Requests received</b></div>
                            <div class="card-body">
                                <h4 class="card-title">43</h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header text-center"><b>Assigned Work</b></div>
                            <div class="card-body">
                                <h4 class="card-title">43</h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header text-center"><b>NO of Technichian</b></div>
                            <div class="card-body">
                                <h4 class="card-title">43</h4>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start table -->
                <div class="mt-4 mx-5 text-center">
                    <p class="bg-dark text-white p-2">List of Requesters</p>
                    <table class="table">
                        <thead>
                            <tr class=text-center>
                                <th scope="col">Request Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['u_name']; ?></td>
                                        <td><?php echo $row['u_email']; ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- table end -->
                </div>
            </div>
        </div>
    </div>
<?php
include('include/footer.php');
?>

   
<?php
define('PAGE', 'work.php');
include('include/header.php');
include("../connection.php");
$sql = "SELECT * FROM `work_assign`";
$res = $con->query($sql);
?>
<!-- start table -->
<div class="col-sm-10">
    <div class="mt-4 mx-5 text-center">
        <p class="bg-dark text-white p-2">Assign Work Details</p>
        <table class="table">
            <thead>
                <tr class=text-center>
                    <th scope="col">Request Id</th>
                    <th scope="col">Request</th>
                    <th scope="col">Description</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Technician Name</th>
                    <th scope="col">Assign Date</th>
                    <th scope="col-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['request_id']; ?></td>
                            <td><?php echo $row['u_request']; ?></td>
                            <td><?php echo $row['u_description']; ?></td>
                            <td><?php echo $row['u_name']; ?></td>
                            <td><?php echo $row['u_add1']; ?></td>
                            <td><?php echo $row['u_email']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['t_name']; ?></td>
                            <td><?php echo $row['assign_date']; ?></td>
                            <td><form action="" method="POST"><input type="hidden" name="id" value="<?php echo $row['request_id']?>" ><button class="btn btn-warning" type="submit" value="view" name="view"><i class="far fa-eye"></i></button></td></form>
                            <td></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- table end -->?>





    <?php
    include('include/footer.php');
    ?>
<?php
define('PAGE', 'requester.php');
include('include/header.php');
include('../connection.php');
?>
<div class="col-sm-9 text-center mt-5">
    <p class="bg-dark text-white p-2">List of Requesters</p>

    <?php
    $sql = "SELECT * FROM user_request";
    $res = $con->query($sql);
    ?>
    <!-- start table -->
    <div class="mt-2 text-center">
        <table class="table">
            <thead>
                <tr class=text-center>
                    <th scope="col">Request Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th colspan="2">Action</th>
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
                            <td><form action="editreq.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id'] ;?>"><button class="btn btn-info" type="submit" value="view" name="view"><i class="far fa-edit"></i></button></td></form>
                            <td><form action="delete.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id'] ;?>"><button class="btn btn-secondary" type="submit" value="del" name="del"><i class="fas fa-trash-alt"></i></button></td></form>
                           
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- table end -->

    </div>


    <?php
    include('include/footer.php');
    ?>
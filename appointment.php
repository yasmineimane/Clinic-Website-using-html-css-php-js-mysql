<?php
    include("sidebar.php");
    include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="./style/Users.css">
</head>
<body>
    <!-- <div class="row">
        <div class="services">
            <div class="service">
                <a href="#">Display All</a>
            </div>
            <div class="service">
                <a href="#">Display Between Dates</a>
            </div>
            <div class="service">
                <a href="#">Order</a>
            </div>
            <div class="service">
                <a href="#">Add</a>
            </div>
        </div>
    </div> -->
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Appointments Lists
                    </h4>
                    <a href="appointment-create.php" class="btn">Add Appointment</a>
                    
                </div>
                <div class="card-body">
                    <?php alertMessage();?>
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>User Email</th>
                            <th>Service Name</th>
                            <th>Date of Appointment</th>
                            <th>Time</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                                $users = getAll('appointement');

                                if (mysqli_num_rows($users) > 0)
                                {
                                    foreach($users as $user)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $user['id']; ?></td>
                                                <td><?= $user['userEmail']; ?></td>
                                                <td><?= $user['serviceName']; ?></td>
                                                <td><?= $user['dateA']; ?></td>
                                                <td><?= $user['timeA']; ?></td>
                                                <td>
                                                    <a href="appointments-edit.php?id=<?= $user['id']; ?>" class="btn">Edit</a>
                                                    <a href="appointments-delete.php?id=<?= $user['id']; ?>" class="btn danger"
                                                    onclick="return confirm('Are You Sure You Want to Delete this data?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="8">No Record</td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
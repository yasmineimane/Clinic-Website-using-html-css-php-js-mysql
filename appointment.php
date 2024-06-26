<?php
    include("function.php");
    include("Sidebar.php");
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="./style/users.css">
</head>
<body>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-headerApp">
                    <h4>
                        Appointments List
                    </h4>
                    <a href="appointment-create.php" class="btn">Add</a>
                    <a href="appointment-dates.php" class="btn btnSearch">Search</a>
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
                                $appointments = getAll('appointement');

                                if (mysqli_num_rows($appointments) > 0)
                                {
                                    foreach($appointments as $appointment)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $appointment['id']; ?></td>
                                                <td><?= $appointment['userEmail']; ?></td>
                                                <td><?= $appointment['serviceName']; ?></td>
                                                <td><?= $appointment['dateA']; ?></td>
                                                <td><?= $appointment['timeA']; ?></td>
                                                <td>
                                                    <a href="appointments-edit.php?id=<?= $appointment['id']; ?>" class="btn">Edit</a>
                                                    <a href="appointment-delete.php?id=<?= $appointment['id']; ?>" class="btn danger"
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
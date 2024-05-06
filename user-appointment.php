<?php
    include("function.php");
    include("userPage.php");
    session_start();
    

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
                <div class="card-header">
                    <h4>
                        Appointments List
                    </h4>
                    <a href="user-app-add.php" class="btn">Add</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>User Email</th>
                            <th>Service Name</th>
                            <th>Date of Appointment</th>
                            <th>Time</th>
                        </thead>
                        <tbody>
                            <?php
                                $userEmail = $_SESSION['email'];
                                $query = "SELECT * FROM appointement WHERE userEmail='$userEmail'";
                                $appointments = mysqli_query($conn, $query);

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
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="5">You Have No Appointment</td>
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
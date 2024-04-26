<?php
    include("dbconnect.php");
    include("function.php");
    include("Sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/users.css">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Search
                    </h4>
                    <a href="appointment.php" class="btn danger">Back</a>
                </div>
                <div class="card-body">
                    <?php alertMessage();?>
                    <form action="#" method="POST" class="dates">
                        <input type="date" name="fromDate">
                        <input type="date" name="toDate">
                        <button type="submit" name="search" class="btn">Search</button>
                        <br> <br> 
                    </form>
                    <div class="content">
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
                                if (isset($_POST["search"]))
                                {
                                    $fromDate = $_POST['fromDate'];
                                    $toDate = $_POST['toDate'];
                            
                                    $appointments = getByDate('appointement', $fromDate, $toDate);
                            
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
                                    }else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="8">No appointement Found</td>
                                        </tr>
                                    <?php
                                    }
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
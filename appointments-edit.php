<?php
    include("dbconnect.php");
    include ("function.php");
    include("Sidebar.php");
    
    if (isset($_POST['editApp']))
    {
        $userEmail = validate($_POST['userEmail']);
        $serviceName = validate($_POST['serviceName']);
        $timeA = $_POST["timeA"];
        $dateA = $_POST["dateA"];
        $userId = validate($_POST['userId']);
        $appointment = getById('appointement', $userId);
        if ($appointment['status'] != 200)
        {
            redirect('appointments-edit.php?id='.$userId, 'No Such Id Found');
        }

        if ($userEmail != '' || $serviceName != '' || $timeA != '' || $dateA != '')
        {
            $query = "UPDATE appointement SET 
                userEmail = '$userEmail',
                serviceName = '$serviceName',
                timeA = '$timeA',
                dateA = '$dateA'
                WHERE id='$userId'";
            
            $result = mysqli_query($conn, $query);

            if ($result)
            {
                redirect('appointment.php', 'Updated Successfully');
            }else {
                redirect('appointments-edit.php?id='.$userId, 'Something Went Wrong');
            }
        }else {
            redirect('appointments-edit.php?id='.$userId, 'Please Fill All the Input Fields');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointement</title>
    <link rel="stylesheet" href="./style/users.css">
</head>
<body>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Appointement
                    </h4>
                    <a href="appointment.php" class="btn danger">Back</a>
                </div>

                <div class="card-body">
                    <form action="#", method="POST">
                        <?php
                            alertMessage();
                            $paramResult = checkParamId('id');
                            if (!is_numeric($paramResult))
                            {
                                echo '<h5>'.$paramResult.'<h5>';
                                return false;
                            }

                            $appointment = getById('appointement', checkParamId('id'));
                            if ($appointment['status'] == 200)
                            {
                                ?>
                                <input type="hidden" name="userId" value="<?= $appointment['data']['id']; ?>">
                                <div class="mb-4">
                                    <input type="text" required name="userEmail" value="<?= $appointment['data']['userEmail']; ?>">
                                    <label>User Email</label>
                                </div>
                                <div class="mb-4">
                                    <input type="text" required name="serviceName" value="<?= $appointment['data']['serviceName']; ?>">
                                    <label>Service Name</label>
                                </div>
                                <div class="mb-4">
                                    <input type="text" required name="timeA" value="<?= $appointment['data']['timeA']; ?>">
                                    <label>Appointment Time</label>
                                </div>
                                <div class="mb-4">
                                    <input type="date" required name="dateA" value="<?= $appointment['data']['dateA']; ?>">
                                    <label>Appointment Date</label>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" name="editApp" class="btn btnSave">Edit</button>
                                </div>
                                <?php
                            } else {
                                echo '<h5>'.$appointment['message'].'<h5>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
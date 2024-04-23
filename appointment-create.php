<?php
    include("sidebar.php");
    include("function.php");

    if (isset($_POST["saveApp"])) {
        $userEmail = validate($_POST['userEmail']);
        $serviceName = validate($_POST['serviceName']);
        $dateA = $_POST["doA"];
        $timeA = $_POST["timeA"];

        $sql = "SELECT * FROM appointement WHERE dateA = '$dateA' and timeA = '$timeA' and 
        serviceName = '$serviceName'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $errors[] = 'Appointment already plain please choose another date or time!';
        }
        else
        {
            $insert = "INSERT INTO appointement (userEmail, serviceName, dateA, timeA) 
            VALUES('$userEmail','$serviceName', '$dateA', '$timeA')";
            mysqli_query($conn, $insert);
            header('location:appointment.php');
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Appointment</title>
    <link rel="stylesheet" href="./style/users.css">
</head>
<body>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Appointment
                    </h4>
                    <a href="appointment.php" class="btn danger">Back</a>
                    <?php
                        if(isset($errors)){
                            foreach($errors as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                </div>

                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <input type="text" name="userEmail">
                            <label>Use Email</label>
                        </div>
                        <div class="mb-4">
                            <select name="serviceName">
                                <option value="Cardiology">Cardiology</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Orthopedics">Orthopedics</option>
                                <option value="Surgey">Surgey</option>
                                <option value="Obstetrics">Obstetrics</option>
                                <option value="Pediatrics">Pediatrics</option>
                            </select>
                            <label>Sevice Name</label>
                        </div>
                        
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA" value="8:00am -> 9:30am">
                                <label>8:00am -> 9:30am</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA">
                                <label>9:30am -> 11:00am</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA">
                                <label>11:00am -> 12:30pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA">
                                <label>13:30pm -> 15:00pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA">
                                <label>15:00pm -> 16:30pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA">
                                <label>16:30pm -> 18:00pm</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <input type="date" name="doA">
                            <label>Date of Appointment</label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="saveApp" class="btn btnSave">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
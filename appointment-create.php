<?php
    include("function.php");
    include("Sidebar.php");
    

    if (isset($_POST["saveApp"])) {
        $userEmail = validate($_POST['userEmail']);
        $serviceName = validate($_POST['serviceName']);
        $dateA = $_POST["doA"];
        $timeA = $_POST["timeA"];

        $appointmentDate = DateTime::createFromFormat('Y-m-d', $dateA);
        $currentDateTime = new DateTime();

        if ($appointmentDate == false || $appointmentDate <= $currentDateTime)
        {
            $errors[] = "Invalid Date! Please choose a future date.";
        }
        else
        {
            $query = "SELECT * FROM patient WHERE email = '$userEmail'";

            $result = mysqli_query($conn, $query);
            if(!mysqli_num_rows($result) > 0){
                $errors[] = 'There is no user with this email!';
            }
            else
            {
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
                    $increment = "UPDATE patient SET nbrApp = nbrApp + 1
                    WHERE email = '$userEmail'";
                    mysqli_query($conn, $increment);
                }
                redirect('appointment.php', 'Added successfuly');
            }
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
                </div>

                <div class="card-body">
                    <?php
                        if(isset($errors)){
                            foreach($errors as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <input type="text" name="userEmail">
                            <label>User Email</label>
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
                                <input type="radio" name="timeA" value="9:30am -> 11:00am">
                                <label>9:30am -> 11:00am</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA" value="11:00am -> 12:30pm">
                                <label>11:00am -> 12:30pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA" value="13:30pm -> 15:00pm">
                                <label>13:30pm -> 15:00pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA" value="15:00pm -> 16:30pm">
                                <label>15:00pm -> 16:30pm</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="appTimeElement">
                                <input type="radio" name="timeA" value="16:30pm -> 18:00pm">
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
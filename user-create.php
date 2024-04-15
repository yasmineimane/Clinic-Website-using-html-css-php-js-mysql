<?php
    include ("dbconnect.php");
    include("sidebar.php");

    if (isset($_POST["saveUser"])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
        $dateOfBirth = $_POST["dobirth"];
        $blood = $_POST["blood"];
        $adress = $_POST["adress"];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        $user_type = $_POST["user_type"];

        $sql = "SELECT * FROM patient WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $error[] = 'user already exist!';
        }
        else
        {
            $insert = "INSERT INTO patient (First_Name, Last_Name, Date_of_birth, blood,
            adress, email, password, user_type) VALUES('$firstName', '$lastName', '$dateOfBirth', '$blood',
            '$adress', '$email', '$password', '$user_type')";
            mysqli_query($conn, $insert);
        }
    }
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
                        Addd User
                    </h4>
                    <a href="users.php" class="btn danger">Back</a>
                </div>

                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <input type="text" name="fname">
                            <label>First Name</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="lname">
                            <label>Last Name</label>
                        </div>
                        <div class="mb-4">
                            <input type="date" name="dobirth">
                            <label>Date of birth</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="blood">
                            <label>Blood</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="adress">
                            <label>Adress</label>
                        </div>
                        <!-- <div class="mb-4">
                            <input type="text" name="phone">
                            <label>Phone</label>
                        </div> -->
                        <div class="mb-4">
                            <input type="email" name="email">
                            <label>Email</label>
                        </div>
                        <div class="mb-4">
                            <input type="password" name="pass">
                            <label>Password</label>
                        </div>
                        <div class="mb-4">
                            <select name="user_type">
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="saveUser" class="btn btnSave">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
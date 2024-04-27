<?php
    include ("dbconnect.php");
    include("function.php");
    include("Sidebar.php");
    if (isset($_POST["saveUser"])) {
        $firstName = validate($_POST['fname']);
        $lastName = validate($_POST['lname']);
        $dateOfBirth = $_POST["dobirth"];
        $blood = $_POST["blood"];
        $adress = $_POST["adress"];
        $email = validate($_POST['email']);
        $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        $sql = "SELECT * FROM patient WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $errors[] = 'user already exist!';
        }
        else{
            $insert = "INSERT INTO patient (First_Name, Last_Name, Date_of_birth, blood,
            adress, email, password) VALUES('$firstName', '$lastName', '$dateOfBirth', '$blood',
            '$adress', '$email', '$password')";
            mysqli_query($conn, $insert);
        }
        redirect('users.php', 'Added successfuly');
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
                        Add User
                    </h4>
                    <a href="users.php" class="btn danger">Back</a>
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
                            <select name="blood">
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="O-">O-</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                            </select>
                            <label>Blood</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="adress">
                            <label>Adress</label>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email">
                            <label>Email</label>
                        </div>
                        <div class="mb-4">
                            <input type="password" name="pass">
                            <label>Password</label>
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
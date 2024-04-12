<?php
    include("dbconnect.php");

    if (isset($_POST["Submit"])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $dateOfBirth = $_POST["dob"];
        $blood = $_POST["blood"];
        $adress = $_POST["address"];
        $phone = $_POST["phone"];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $user_type = $_POST["user_type"];

        $sql = "SELECT * FROM patient WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $error[] = 'user already exist!';
        }
        else
        {
            $insert = "INSERT INTO patient (First_Name, Last_Name, Date_of_birth, blood,
            adress, phone, email, password, user_type) VALUES('$firstName', '$lastName', '$dateOfBirth', '$blood',
            '$adress', '$phone', '$email', '$password', '$user_type')";
            mysqli_query($conn, $insert);
            if ($_POST['user_type'] == 'admin')
            {
                header('location:adminPage.php');
            }
            elseif ($_POST['user_type'] == 'user')
            {
                header('location:userPage.php');
            }
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/SignUp.css">
    <title>Sign Up</title>
</head>
<body>
    <?php include("nav.php"); ?>
        <section class="signup">
            <div class="SignUpForm">
                
                <form action="#" method="POST">
                    <h2>Sign Up</h2>
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                    <div class="inputBox">
                        <input type="text" id="first name" name="firstName" required>
                        <span>First Name</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="text" id="last name" name="lastName" required>
                        <span>Last Name</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="date" id="dob" name="dob" required>
                        <span>Date of Birth</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="text" id="blood" name='blood' required />
                        <span class="blood">Blood Group</span>
                        <!-- <select id="blood group" name="blood group">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        </select> -->
                    </div>
                
                    <div class="inputBox">
                        <textarea id="address" name="address" required></textarea>
                        <span>Adress</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="tel" id="phone" name="phone" required>
                        <span>Phone Number</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="email" id="email" name="email" required>
                        <span>Email</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="password" id="password" name="password" required>
                        <span>Password</span>
                    </div>

                    <div class="inputBox">
                        <select name="user_type">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                
                    <div class="inputBox">
                        <input type="submit" name="Submit" class='btn' required value="Send" />
                    </div>

                    <p>Already have an account?  <a href="logIn.php">LogIn</a></p>
                </form>
            </div>

        </section>
</body>
</html>
<?php
    include("dbconnect.php");
    include("function.php");
    session_start();

    if (isset($_POST["Submit"])) {
        $firstName = validate($_POST['firstName']);
        $lastName = validate($_POST['lastName']);
        $dateOfBirth = $_POST["dob"];
        $blood = $_POST["blood"];
        $adress = $_POST["address"];
        $email = validate($_POST['email']);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $_SESSION['email'] = $email;

        $sql = "SELECT * FROM patient WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $errors[] = 'user already exist!';
        }
        else
        {
            $insert = "INSERT INTO patient (First_Name, Last_Name, Date_of_birth, blood,
            adress, email, password) VALUES('$firstName', '$lastName', '$dateOfBirth', '$blood',
            '$adress', '$email', '$password');";
            mysqli_query($conn, $insert);
            header('location: userPage.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./style/signup.css">
</head>
<body>
    <?php include("nav.php"); ?>
        <section class="signup">
            <div class="SignUpForm">
                
                <form action="#" method="POST">
                    <h2>Sign Up</h2>
                    <?php
                        if(isset($errors)){
                            foreach($errors as $error){
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
                    </div>
                
                    <div class="inputBox">
                        <textarea id="address" name="address" required></textarea>
                        <span>Adress</span>
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
                        <input type="submit" name="Submit" class='btn' required value="Send" />
                    </div>

                    <p>Already have an account?  <a href="logIn.php">LogIn</a></p>
                </form>
            </div>

        </section>
</body>
</html>
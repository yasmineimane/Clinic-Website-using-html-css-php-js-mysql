<?php
    include("dbconnect.php");

    // $adminEmail = "admin@gmail.com";
    $adminPass = "12345";

    if (isset($_POST["Submit"])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM admin WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $error[] = 'admin already exist!';
        }
        else if ($_POST["password"] != $adminPass)
        {
            $error[] = 'Incorrect password';
        }
        else
        {
            $insert = ("INSERT INTO admin (firstName, lastName, email, password) VALUES 
            ('$firstName', '$lastName', '$email', '$password');");
            mysqli_query($conn, $insert);
            header('location: adminPage.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignUp</title>
    <link rel="stylesheet" href="./style/signUp.css">
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

                    <p>Already have an account?  <a href="logInAdmin.php">LogIn as Admin</a></p>
                </form>
            </div>

        </section>
</body>
</html>
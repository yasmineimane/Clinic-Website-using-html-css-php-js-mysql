<?php
    include("dbconnect.php");

    if (isset($_POST["Submit"])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "SELECT * FROM admin WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($_POST['password'], $row["password"])) {
                header('location:adminPage.php');
            }
            else {
                $error[] = 'incorrect email or password!';
            }
        }
        else
        {
            $error[] = 'incorrect email or password!';
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>
    <link rel="stylesheet" href="./style/logIn.css">
</head>
<body>
<?php include("nav.php"); ?>

<section class="login">
    <div class="LogInForm">
        <form action="#" method="POST">
            <h2>Log In</h2>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <div class="inputBox">
                <input type="email" id="email" name="email" required>
                <span>Email</span>
            </div>
        
            <div class="inputBox">
                <input type="password" id="password" name="password" required>
                <span>Password</span>
            </div>
        
            <div class="inputBox">
                <input type="submit" name="Submit" class='btn' required value="LogIn" />
            </div>
            <p>New admin in Health Care Clinic?   <a href="singUpAdmin.php">Sing Up</a></p>
        </form>
    </div>
</section>
</body>
</html>
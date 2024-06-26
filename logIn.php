<?php
    include("dbconnect.php");
    session_start();
    include("function.php");

    if (isset($_POST["Submit"])) {
        $email = validate($_POST['email']);
        $_SESSION['email'] = $email;

        $sqlUser = "SELECT * FROM patient WHERE email = '$email'";
        $resultUser = mysqli_query($conn, $sqlUser);

        $sqlAdmin = "SELECT * FROM admin WHERE email = '$email'";
        $resultAdmin = mysqli_query($conn, $sqlAdmin);

        if (mysqli_num_rows($resultUser) > 0) {
            $rowUser = mysqli_fetch_assoc($resultUser);
            if (password_verify($_POST['password'], $rowUser["password"]))
            {
                header("location: userPage.php");
                exit;
            }
            else {
                $errors[] = 'Incorrect email or password!';
            }
            
        }
        elseif (mysqli_num_rows($resultAdmin) > 0)
        {
            $rowAdmin = mysqli_fetch_assoc($resultAdmin);
            if (password_verify($_POST['password'], $rowAdmin["password"]))
            {
                header('location: adminPage.php');
                exit;
            }
            else {
                $errors[] = 'Incorrect email or password';
            }
        }
        else
        {
            $errors[] = 'Incorrect email or password!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/LogIn.css">
    <title>Log In</title>
</head>
<body>
    <?php include("nav.php"); ?>

    <section class="login">
        <div class="LogInForm">
            <form action="#" method="POST">
                <h2>Log In</h2>
                <?php
                    if(isset($errors)){
                        foreach($errors as $error){
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
                <p>New in Health Care hospital?   <a href="singup.php">Sing Up</a></p>
            </form>
        </div>
    </section>
</body>
</html>
<?php
    include("dbconnect.php");
    session_start();

    if (isset($_POST["Submit"])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "SELECT * FROM patient WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if (password_verify($_POST['password'], $row["password"])) {
                if ($row['user_type'] == 'admin')
                {
                    header('location:adminPage.php');
                    exit();
                }
                elseif ($row['user_type'] == 'user')
                {
                    header('location:userPage.php');
                    exit();
                }
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
    <link rel="stylesheet" href="./style/login.css">
    <title>Log In</title>
</head>
<body>
<?php include("nav.php"); ?>

    <main>
        <section class="login-form">
            <h1>Log in</h1>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <form action="#" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"  placeholder="enter your email" required>
                <label for="Password">Password:</label>
                <input type="password" id="password" name="password"  placeholder="enter your password" required>
                <!-- <div class="remembre">
                    <input type="checkbox"id="Remember" name="Remember"required>
                    <label for="rememberMe">Remember Me</label>
                </div> -->
                <input type="submit" name="Submit" value="Log In">
                <p>New in Health Care hospital? <a href="singup.php"> Sing Up</a></p>
            </form>
        </section>
    </main>
</body>
</html>
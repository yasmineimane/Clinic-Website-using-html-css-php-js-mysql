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
            <p>New in Health Care hospital? <a href="singup.php"> Sing Up</a></p>
            <form action="submitloginform.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"  placeholder="enter your email" required>
                <label for="Password">Password:</label>
                <input type="password" id="password" name="password"  placeholder="enter your password" required>
                <div class="remembre">
                    <input type="checkbox"id="Remember" name="Remember"required>
                    <label for="rememberMe">Remember Me</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
</body>
</html>
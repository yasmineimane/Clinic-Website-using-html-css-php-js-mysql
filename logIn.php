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
            <p></p>
            <form action="submitloginform.php" method="POST">
                <label for="email"></label>
                <input type="email" id="email" name="email"  placeholder="enter your email" required>
                <label for="Password"></label>
                <input type="password" id="password" name="password"  placeholder="enter your password" required><br>
                <button type="submit">Login</button>
            </form>
        </section>
        <section>
            <img src="./images/login.png" alt="login">
        </section>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/singup.css">
    <title>Sing Up</title>
</head>
<body>
    <?php include("nav.php"); ?>

    <main>
        <section class="singup-form">
            <p></p>
            <form action="submitsingupform.php" method="POST">
                <label for="first name">First Name:</label>
                <input type="text" id="first name" name="first name" required>

                <label for="last name">Last Name:</label>
                <input type="text" id="last name" name="last name" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="blood group">Blood Group:</label>
                <select id="blood group" name="blood group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                </select>

                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Sign Up</button>
            </form>


        </section>
        <section class="content">
            <h1>Create Account</h1>
            <h3>Welcome to Health Care hospital</h3>
            <p>you have an account? <a href="logIn.php">log in </a></p>
            <img src="./images/singup.png" alt="Sing Up">
        </section>
    </main>
</body>
</html>
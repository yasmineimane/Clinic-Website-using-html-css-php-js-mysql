<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/singup.css">
    <title>Sign Up</title>
</head>
<body>
    <?php include("nav.php"); ?>
        <section class="signup">
            <div class="SignUpForm">
                
                <form action="submitsignupform.php" method="POST">
                    <h2>Sign Up</h2>
                    <div class="inputBox">
                        <input type="text" id="first name" name="first name" required>
                        <span>First Name</span>
                    </div>
                
                    <div class="inputBox">
                        <input type="text" id="last name" name="last name" required>
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
                
                    <div class="inputBox BTN">
                        <input type="submit" name='' class='btn' required value="Send" />
                    </div>
                </form>
            </div>

<<<<<<< HEAD
    <main>
        <section class="singup-form">
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

=======
            <!-- <div class="content">
                <h1>Create Account</h1>
                <h3>Welcome to Health Care hospital</h3>
                <p>you have an account? <a href="logIn.php">log in </a></p>
                <img src="./images/singup.png" alt="Sing Up">
            </div> -->
>>>>>>> 803cbb51c8c6699a43b01fdb9b458591973f071a

        </section>
</body>
</html>
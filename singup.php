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

        </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/contact.css">
    <title>Contact</title>
</head>
<body>
    <?php include("nav.php"); ?>
    
    <main class="container">
        <section class="contact-info">
            <div class="c-info">
                <div class="call">
                    <h3>Call US</h3>
                    <p>+123 456 789</p>
                </div>
                <div class="call">
                    <h3>Email Us</h3>
                    <a href="mailto:our email">Healthcare02@Gmail.com</a>
                </div>
            </div>
            <div class="location">
                <div class="loc">
                    <h3>Our location</h3>
                    <p>123 Main Street,Zeboudj<br>Chlef,Algeria</p>
                </div>
                <img src="./images/location.png" alt="location" width="200px" height="160px">
            </div>
            <div class="icons">
                <img src="./images/facebook.png" alt="facebook" width="50px"height="50px">
                <img src="./images/instagram.jpg" alt="instagram" width="50px"height="50px">
                <img src="./images/linkedin.png" alt="linkedin"width="50px"height="50px">
                <img src="./images/whatsapp.png" alt="whatsapp"width="50px"height="50px">
            </div>
        </section>
        <section class="contact-form">
            <p>Fill out the form below and we'll be in touch soon. </p>
            <form action="submitcontactform.php" method="POST">
                <label for="First Name">First Name*</label>
                <input type="text" id="first Name" name="first Name" required>
                <label for="Last Name">Last Name*</label>
                <input type="text" id="last Name" name="last Name " required>
                <label for="Phone">Phone*</label>
                <input type="number" id="phone" name="phone" required>
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message*</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
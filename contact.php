<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Contact.css">
    <title>Contact</title>
</head>
<body>
    <?php include("nav.php"); ?>
    
    <main class="content">
        <div class="header">  
            <h1>how we can help you ?</h1>
            <p>Send us a message</p>
        </div>
        <div class="container">
            <section class="contact-form">
                <p>Fill out the form below and we'll be in touch soon. </p>
                <form action="mailto:aichamek318@gmail.com" method="POST" enctype="text/plain">
                    <label for="First Name">First Name*</label>
                    <input type="text" id="first Name" name="first Name" required>
                    <label for="Last Name">Last Name*</label>
                    <input type="text" id="last Name" name="last Name " required>
                    <label for="Phone">Phone*</label>
                    <input type="phone" id="phone" name="phone" required>
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message*</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </section>
            <section class="contact-info">
                <div class="c-info">
                    <div class="info">
                        <h3>Call US</h3>
                        <p>+123 456 789</p>
                    </div>
                    <div class="info">
                        <h3>Email Us</h3>
                        <a href="mailto:our email">Healthcare02@Gmail.com</a>
                    </div>
                    <div class="info">
                        <h3>Our Location</h3>
                        <p>123 Main Street,Zeboudj<br>Chlef,Algeria</p>
                    </div>
                </div>
                <div class="Smedia">
                    <div class="info">
                        <h3>Our Social Media</h3>
                    </div>
                    <div class="icons">
                        <a href="https://www.facebook.com/your_facebook_profile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/your_instagram_profile" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/your_linkedin_profile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/your_whatsapp_number" target="_blank"><i class="fab fa-whatsapp"></i></a>    
                    </div>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
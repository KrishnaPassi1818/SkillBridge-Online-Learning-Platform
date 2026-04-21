<?php
    $msg = "";
    if (isset($_GET["success"])) {
        $msg = "Message sent successfully!";
    } elseif (isset($_GET["error"])) {
        if ($_GET["error"] === "empty_fields") {
            $msg = "Please fill all fields.";
        } else {
            $msg = "Could not send message. Please try again.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="../assets/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/contact.css">
    <script src="../script/contact.js" defer></script>
</head>
<body>
    <header>
        <div class="top-banner">
            <div class="ticker-content">
                <p>Free Course, Sale Ends Soon, Get it Now</p>
                <img src="../assets/arrow-image.png" alt="arrow-image">
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="../assets/Logo.png" alt="logo-image">
                </div>
                <div class="nev-items">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="buttons-container">
                <a id="btn1" href="../html/signup.php">Sign Up</a>
                <a id="btn2" href="../html/login.php">Login</a>
            </div>
        </nav>
    </header>

    <div class="hero-section">
        <div class="hero-heading">
            Contact Us
        </div>
        <div class="hero-info">
            <p>Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.</p>
        </div>
    </div>

    <div class="contact-area">
        <div class="left-area">
            <div class="info">
                <form id="contactForm" action="../php/contact_process.php" method="POST">
                    <div>
                        <label for="fname">First Name</label>
                        <br>
                        <input type="text" id="fname" name="first_name" placeholder="Enter First Name" required>
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <br>
                        <input type="text" id="lname" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <br>
                        <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" required>
                    </div>
                    <div>
                        <label for="subject">Subject</label>
                        <br>
                        <input type="text" id="subject" name="subject" placeholder="Enter your Subject" required>
                    </div>
                    </div>
                    <div class="message">
                        <label for="text-area">Message</label>
                        <br>
                        <textarea id="text-area" name="message" rows="8" cols="50" placeholder="Write something here..." required></textarea>
                    </div>
                    <div class="btn">
                        <button id="submitBtn" type="submit">Send Your Message</button>
                    </div>
                </form>
            
        </div>
        <div class="right-area">
            <div>
                <img src="../pageAssets/Icon.png" alt="image">
                <p>support@skillbridge.com</p>
            </div>
            <div>
                <img src="../pageAssets/Icon (1).png" alt="image">
                <p>+91 836 090 6209</p>
            </div>
            <div>
                <img src="../pageAssets/Icon (2).png" alt="image">
                <p>Amritsar, Punjab, India</p>
            </div>
            <div class="social-icon">
                <div>
                    <div><img src="../pageAssets/Icon (3).png" alt="image"></div>
                    <div><img src="../pageAssets/Icon (4).png" alt="image"></div>
                    <div><img src="../pageAssets/Icon (5).png" alt="image"></div>
                </div>
                <span>Social Profiles</span>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-list">
                <img id="footer-logo" src="../assets/Logo.png" alt="logo-image">
                <ul>
                    <li><img src="../assets/Icon (1).png" alt="icon-image">Support@skillbridge.com</li>
                    <li><img src="../assets/Icon (2).png" alt="icon-image">+91 806 090 6209</li>
                    <li><img src="../assets/Icon (3).png" alt="icon-image">Amritsar, Punjab, India</li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p><a href="../index.html">Home</a></p></li>
                    <li><a href="../index.html#benefits-section">Benefits</a></li>
                    <li><a href="courses.html">Our Courses</a></li>
                    <li><a href="../index.html#testimonials-section">Our Testimonials</a></li>
                    <li><a href="../index.html#faqs">Our FAQ</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p><a href="../index.php">Home</a></p></li>
                    <li><a href="../index.php#benefits-section">Benefits</a></li>
                    <li><a href="courses.html">Our Courses</a></li>
                    <li><a href="../index.php#testimonials-section">Our Testimonials</a></li>
                    <li><a href="../index.php#faqs">Our FAQ</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p>Social Profiles</p></li>
                    <li>
                        <img src="../assets/fb.png" alt="icons"><img src="../assets/x.png" alt="icons"><img src="../assets/linked-in.png" alt="icons">
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>© 2023 Skillbridge. All rights reserved.</p>
        </div>
    </footer>

    <?php if (!empty($msg)): ?>
        <script>
            alert("<?php echo $msg; ?>");
        </script>
    <?php endif; ?>
</body>
</html>
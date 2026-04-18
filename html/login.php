<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="assets/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <header>
        <div class="top-banner">
            <div class="ticker-content">
                <p>Free Course, Sale Ends Soon, Get it Now</p>
                <img src="assets/arrow-image.png" alt="arrow-image">
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="../assets/Logo.png" alt="logo-image">
                </div>
                <div class="nev-items">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="buttons-container">
                <a id="btn1" href="/html/signup.html">Sign Up</a>
                <a id="btn2" href="/html/login.html">Login</a>
            </div>
        </nav>
    </header>

    <div class="hero">
        <div class="heroinfo">
            <div class="info">
                <h2>Student Testimonials</h2>
                <p>Welcome back to your learning journey! Log in to pick up right where you left off, access your course materials, and continue building the practical skills you need for your future.</p>
            </div>
            <div class="test">
                <div class="test-info">The courses helped me understand web development step by step. The practical projects made learning enjoyable and boosted my confidence to build real applications.</div>
                <div class="person-info">
                    <div class="person-img-name">
                        <img src="/assets/Image (6).png" alt="person-image">
                        <p>- Emily K.</p>
                    </div>
                    <div class="read-more">Read Full Story</div>
                </div>
            </div>
        </div>
        <div class="loginside">
            <div class="loginheading">
                <h2>Login</h2>
                <p>Welcome back! Please log in to access your account.</p>
            </div>
            <div class="loginform">
                <form action="login_process.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your Password">
                    <p id="forgotpassword">Forgot Password?</p>
                    <button id="rembtn" type="button">Remember Me</button>
                    <button id="loginbtn" type="submit">Login</button>
                    <p id="or">or</p>
                    <p id="googlelogin"><img src="/pageAssets/Icon (6).png" alt="icon">Login with Google</p>
                    <p id="signuplink">Don't have an account? <a href="/html/signup.html">Sign Up <img src="/assets/Icon.png" alt="icon"></a></p>
                    
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-list">
                <img id="footer-logo" src="/assets/Logo.png" alt="logo-image">
                <ul>
                    <li><img src="/assets/Icon (1).png" alt="icon-image">Support@skillbridge.com</li>
                    <li><img src="/assets/Icon (2).png" alt="icon-image">+91 9181 23 2309</li>
                    <li><img src="/assets/Icon (3).png" alt="icon-image">Somewhere in the World</li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p><a href="/index.html">Home</a></p></li>
                    <li><a href="#benefits-section">Benefits</a></li>
                    <li><a href="/html/courses.html">Our Courses</a></li>
                    <li><a href="#testimonials-section">Our Testimonials</a></li>
                    <li><a href="#faqs">Our FAQ</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p><a href="/html/about.html">About Us</a></p></li>
                    <li><a href="#hero-section">Company</a></li>
                    <li><a href="#achievements">Achievements</a></li>
                    <li><a href="#goals">Our Goals</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <ul>
                    <li class="footer-title"><p>Social Profiles</p></li>
                    <li>
                        <img src="/assets/fb.png" alt="icons"><img src="/assets/x.png" alt="icons"><img src="/assets/linked-in.png" alt="icons">
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>© 2023 Skillbridge. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
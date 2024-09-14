<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome link -->
    <script src="https://kit.fontawesome.com/c1df782baf.js" crossorigin="anonymous"></script>
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo"><img src="images/logo2.png" alt=""></div>

        <nav class="menu">
            <a href="#">Home</a>
            <a href="#About">About us</a>
            <a href="#services">services</a>
            <a href="#blog">blog</a>
            <a href="#contact-footer">Contact Us</a>
        </nav>

        <div class="navbar-icons">
            <div id="navbar" class="fas fa-bars"></div>
            <div class="signin">
                <a href="#" id="signin-link">Sign In</a>
              </div>
              <div id="signin-form" style="display: none;">
                <!-- Sign In form goes here -->
                <form>
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username">
                  <br>
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password">
                  <br>
                  <button type="submit">Sign In</button>
                </form>
              </div>
        </div>
        
        <div class="contact-form">
            <form action="" class="navbar-form">
                <div id="form-close" class="fas fa-times"></div>
                <div class="names-section">
                    <input type="text" id="fname" name="fname" value="John">
                    <input type="text" id="Lname" name="fname" value="Doe">
                    <input type="email" value="Your email">
                    <Button class="form-btn"> Submit </Button>
                </div>
            </form>
        </div>
    </header>

    <!-- Home section starting -->
    <div class="main-home">
        <div class="home-inner-contect">
            <div class="home-content">
                <h3>Hire your best driver</h3>
                <h1>Trusted and <span>Cheapest Taxi</span> <br>
                company service
                </h1>
                <div class="important-btn">
                    <a href="#">Order Taxi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- home section ended -->

    <!-- Our business partner -->
    <div id="About" class="about-us">
        <div class="main-about">
            <div class="inner-about"><img src="images/driver3.jpg" alt=""></div>
            <div class="inner-about">
                <div class="about-content">
                    <h3>About our company</h3>
                    <p>We are available for personal use, events, or holiday parties, and are commonly offered by organizers to provide their guests with a safe way home. Please select from one of the denominations below and we will process your request. Your Beck Bucks will be mailed to the shipping address you provide.</p>
                    <div class="paragraph">
                        <p> We are driven by people.                        </p>
                        <h4>David Smith <span>Head idea</span></h4>
                    </div>
                    <div class="contact-with-us">
                        <div class="fa-solid fa-phone phone"> </div>
                        <div class="contact-inner-content">
                            <h4>Call us 24/7 <span>anytime</span></h4>
                            <h4>+447878941715</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our services -->
    <div id="services" class="our-service">
        <div class="service-heading">
            <h3>Our services</h3>
            <h1>What we are offering</h1>
        </div>
        <div class="main-inner-service">
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/service1.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">First Ride Discount</h2>
                            <p class="service-text">Enjoy a special 20% discount on your first ride with us! Use code FIRST20 at checkout.</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/service4.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Referral Bonus</h2>
                            <p class="service-text">Refer a friend and both of you get $10 off your next ride! Share the love and save together.</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/service3.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Loyalty Program</h2>
                            <p class="service-text">Earn points with every ride and redeem them for exciting discounts and free rides! Join our loyalty program today.</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/service4.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Seasonal Promotions</h2>
                            <p class="service-text">Celebrate the holidays with us! Get 15% off on all rides during the festive season with code FESTIVE15.</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/service3.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Promo Codes</h2>
                            <p class="service-text">Use promo code SAVE5 to get $5 off your next ride. Limited-time offer!</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="images/driver6.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Surge Pricing Discounts</h2>
                            <p class="service-text">Save more during off-peak hours! Enjoy a 10% discount on rides booked between 10 AM and 4 PM.</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <!-- Comfortable Trip -->
    <div id="blog" class="main-trip">
        <div class="main-trip-heading">
            <h1>Comfortable <span>Trip</span></h1>
        </div>
        <div class="main-trip-box">
            <div class="main-trip-inner-box">
                <img src="images/driver4.jpg" alt="">
                <div class="trip-content">
                    <i class="fa-solid fa-car"></i>
                    <h2>Spacious and Clean Vehicles</h2>
                    <p>Travel in comfort with our spacious and meticulously cleaned vehicles, ensuring a pleasant journey every time.</p>
                </div>
            </div>
            <div class="main-trip-inner-box">
                <img src="images/driver5.jpg" alt="">
                <div class="trip-content">
                    <i class="fa-solid fa-location-dot"></i>
                    <h2>GPS-Enabled Navigation</h2>
                    <p>Our cars are equipped with GPS-enabled navigation systems, guaranteeing you a swift and efficient route to your destination.</p>
                </div>
            </div>
            <div class="main-trip-inner-box">
                <img src="images/driver1.jpg" alt="">
                <div class="trip-content">
                    <i class="fa-solid fa-seatbelt"></i>
                    <h2>Safety First</h2>
                    <p>Safety is our top priority. Our drivers are trained to follow all safety protocols, ensuring a secure ride for you and your loved ones.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact-footer">
        <div class="footer-main-content">
            <div class="footer-content">
                <img src="images/logo2.png" alt="">
            </div>
            <div class="footer-content">
                <h2>Contact us</h2>
                <ul>
                    <li>123 Street, City, State 12345</li>
                    <li>+123 456 7890</li>
                    <li>info@example.com</li>
                </ul>
            </div>
            <div class="footer-content">
                <h2>Quick links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h2>Contact Form</h2>
                <form id="contact-form" action="submit_form.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <br>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </footer>

    <script src="Taxi.js"></script>
</body>
</html>

<?php include 'header.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                <div id="home" class="hero-area">
            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(images/background2.jpg)"></div>

            <!-- /Backgound Image -->
            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md text-center">
                            <img src="images/001-budapest-metro-logo.png" alt="" style="height: 100px"/>
                            <h1 class="dark-text">MEETING SPACE</h1>
                            <p class="lead dark-text">Book Flexible Meeting Space.</p>
                            <p class="dark-text text-info" style="color: black">Search and book a space now.</p>
                            <a class="main-button icon-button" href="meeting_rooms.php" role="button" id="button">Get Started! </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Home -->
        <br>
        <div class="container" id="home">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!--<iframe class="embed-responsive-item" src="https://resources.meetingrooms.com/video/MeetingRooms-Why-have-a-meeting-in-a-coffee-shopHD.mp4"></iframe>-->

                        <video onclick="this.play();" id="intro-video" width="320" height="240" controls>
                            <source src="video/MeetingRooms-Why-have-a-meeting-in-a-coffee-shopHDTrim.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="promo-content">
                        <h2>Succeed in</h2>
                        <h1>The New Economy</h1>
                        <div class="hr-red"></div>
                        <h3>Meeting Space As Flexible As You Are</h3>
                        <p>You’re an entrepreneur, freelancer, or maybe a growing business in need of space to have meetings in.</p>
                        <p>You work free and easy wherever you please, using mobile devices and cloud technology.</p>
                        <p>You don’t need a permanent space, but you do need to meet face-to-face now and then.</p>
                        <p>Or maybe you need a space for interviews, a seminar, a brand workshop or product launch.</p>
                        <h3>Benefit from flexible space as and when you need it.</h3>
                        <button class="btn-outline-black" type="button" onclick="window.location.href = '/our-mission';">Continue</button>
                    </div>
                </div>
            </div>
        </div>
        <!--        OPTIONS-->

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block text-center">
                        <h3>Control your environment by booking the right space for your next meeting or event.</h3>
                        <hr class="hr-red">
                    </div>
                </div>
                <div class="row padding-top-20">
                    <a href="meeting_rooms.php" target="_self">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="services-homepage-box1-sub1">
                                <img class="img-responsive center-block" src="images/meetingrooms.png">
                                <h2>Meeting Space</h2>
                            </div>
                        </div>
                    </a>
                    <a href="/products/conference-rooms" target="_self">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="services-homepage-box1-sub2">
                                <img class="img-responsive center-block" src="images/conferenceroom.png">
                                <h2>Conference Rooms</h2>
                            </div>
                        </div>
                    </a>
                    <a href="/products/event-space" target="_self">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="services-homepage-box1-sub3">
                                <img class="img-responsive center-block" src="images/eventspace.png">
                                <h2>Event Space</h2>
                            </div>
                        </div>
                    </a>
                    <a href="/products/boardrooms" target="_self">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="services-homepage-box1-sub4">
                                <img class="img-responsive center-block text-center" src="images/boardrooms.png">
                                <h2>Boardrooms</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn-outline-black center-block center-button" type="button" onclick="window.location.href = '/products/';">More products</button>
                    </div>
                </div>
            </div>
        </section>

        <!--------------FOOTER---------------->
        <br>
        <footer>
            <div class="container">
                <div class="row text-left">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>CUSTOMERS</h4>
                        <ul>
                            <li><a href="how-it-works.php" target="_self">How it works</a></li>
                            <li><a href="signup.php" target="_self">Sign Up</a></li>
                            <li><a href="login.php" target="_self">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>PRODUCTS</h4>
                        <ul>
                            <li><a href="meeting_rooms.php" target="_self">Meeting rooms</a></li>
                            <li><a href="/products/conference-rooms" target="_self">Conference rooms</a></li>
                            <li><a href="/products/training-rooms" target="_self">Training rooms</a></li>
                            <li><a href="/products/boardrooms" target="_self">Boardrooms</a></li>
                            <li><a href="/products/event-space" target="_self">Event space</a></li>
                            <li><a href="/products/video-conferencing-studios" target="_self">Video Conferencing</a></li>
                            <li><a href="/court-reporting" target="_self">Court Reporting</a></li>
                            <li><a href="/corporate-solutions" target="_self">Corporate Solutions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>OUR COMPANY</h4>
                        <ul>
                            <li><a href="about-us.php" target="_self">About Us</a></li>
                            <li><a href="/our-mission" target="_self">Our Mission</a></li>
                            <li><a href="/our-team" target="_self">Our Team</a></li>
                            <li><a href="/privacy-policy" target="_self">Privacy Policy</a></li>
                            <li><a href="/terms-of-service" target="_self">Terms Of Service</a></li>
                            <li><a href="/ContactUs" target="_self">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>CONNECT WITH US</h4>
                        <a href="https://www.linkedin.com/company/meetingrooms-com" target="_blank" title="Connect with us on LinkedIn">
                            <img src="images/linkedin.png" alt="linkedin" class="social-icon">
                        </a>
                        <a href="https://twitter.com/meetingroomscom" target="_blank" title="Follow us on Twitter">
                            <img src="images/twitter.png" alt="twitter" class="social-icon">
                        </a>
                        <a href="https://www.facebook.com/meetingroomsCOM" target="_blank" title="Join our Facebook community">
                            <img src="images/facebook.png" alt="facebook" class="social-icon">
                        </a>
                        <a href="https://instagram.com/meetingrooms" target="_blank" title="Follow us on Instagram">
                            <img src="images/insta-icon.png" alt="instagram" class="social-icon">
                        </a>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left text-white" id="footer">
                        <p class="remove-all-margin"><small id="footer">© 2015 Meeting Space Ltd is registered in England and Wales, company number 08577946</small></p>
                    </div>

                </div>
            </div>
        </footer>
    </body>
</html>

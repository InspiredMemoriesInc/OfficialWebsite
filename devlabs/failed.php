﻿<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IM Developer Labs is a technology workshop we conduct in colleges to educate them with the latest technology. We are proud to announce #IMDevLabs that will give every student who participate the confidence to grow and work on their dreams">
    <meta name="author" content="InspiredMemories LLP">
    <title>Payment Failed - #IMDevLabs</title>

    <!-- Favicons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
    <link rel="stylesheet" type="text/css" href="libraries/Stroke-Gap-Icon/stroke-gap-icon.css">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
    <link rel="stylesheet" type="text/css" href="libraries/lightslider-master/lightslider.css">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/shortcode.css">
    <!--[if lt IE 9]>
        <script src="js/html5/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
    <style>
        h3,
        h4,
        h5,
        h6,
        p,
        div,
        body {
            font-family: 'Titillium Web', sans-serif;
        }
    </style>

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader /- -->
    <!-- Header -->
    <header class="header-main container-fluid no-padding">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Social -->
                    <div class="col-md-4 col-sm-4 col-xs-6 social">
                        <ul>
                            <li><a title="Facebook" href="https://www.facebook.com/weareIMT/"><i class="fa fa-facebook"></i></a></li>
                            <li><a title="Twitter" href="https://www.twitter.com/weareIMT/"><i class="fa fa-twitter"></i></a></li>
                            <li><a title="Google Plus" href="https://plus.google.com/+InspiredmemoriesIn"><i class="fa fa-google-plus"></i></a></li>
                            <li><a title="Linkedin" href="https://www.linkedin.com/company/inspired-memories-imt-/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social /- -->
                    <!-- Register -->
                    <div class="col-md-4 col-sm-4 col-xs-6 register">
                        <a href="#" title="Register">Register</a>
                    </div>
                    <!-- Register /- -->
                    <!-- Logo Block -->
                    <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                        <a href="index.html" title="Logo">
                            <img src="../images/imlogo.png" alt="logo" width="46" height="41" />
                            <h3>Developer Labs</h3>
                        </a>
                    </div>
                    <!-- Logo Block /- -->
                </div>
            </div>
            <!-- Container /- -->
        </div>
        <!-- Top Header /- -->
        <!-- Menu Block -->
        <div class="menu-block container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <!-- User -->
                <a href="#" class="user" title="User">
                    <i class="fa fa-user"></i>
                </a>
                <!-- User /- -->
                <div class="col-md-10 col-sm-12">
                    <!-- Navigation -->
                    <nav class="navbar ow-navigation">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a title="Logo" href="#" class="navbar-brand"><img src="../images/imlogo.png" alt="logo" /><span>#IMDevlabs</span></a>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav menubar">
                                <li><a title="Home" href="index.html">Home</a></li>
                                <li><a title="About Us" href="about-page.html">About Us</a></li>
                                <li><a title="Services" href="services-page.html">Services</a></li>
                                <li class="active"><a title="Contact" href="contactus.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Navigation /- -->
                </div>
            </div>
            <!-- Container /- -->
        </div>
        <!-- Menu Block /- -->
    </header>
    <!-- Header /- -->
    <!-- PageBanner -->
    <div class="container-fluid page-banner blogpost no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <h3>Register for Developer Labs</h3>
                    <p style="color:#fff">Book your seats now and get the best source for your technological future</p>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
    <!-- PageBanner /- -->

    <div class="section-padding"></div>
    <div class="container">
        <div class="row contact-form-section">
            <div class="col-md-8 col-sm-8">
                <div class="section-header">
                    <h3>Payment for #IMDevLabs Failed</h3>
                    <span style="font-family: 'Titillium Web', sans-serif;">Please retry with the other options or check your bank credentials. For any assistance call us +91 9742653096 or mail us on devlabs@inspiredmemories.in</span>
                </div>

                <div id="alert-msg" class="alert-msg"></div>
            </div>
        </div>
    </div>

    <div class="section-padding"></div>

    <!-- Footer Main -->
    <footer class="footer-main container-fluid no-padding">

        <!-- Container -->
        <div class="container">
            <!-- Footer About -->
            <div class="footer-about">
                <div class="logo-block">
                    <img src="../images/imlogowhite.png" alt="logo" width="70" height="63" />
                    <h3>#IMDevLabs</h3>
                </div>
                <div class="footer-about-content">
                    <h3 class="block-title">About IM Developer Labs</h3>
                    <p>IM Developer Labs are the one of it's kind where we teach students to learn technology and to stay upto date with the world of innovation. We are few nerds who are good at it. We also offer few Internships to the top performers along
                        with some surprises.</p>
                </div>
            </div>

            <div class="row">
                <!-- Customer Service Widget -->
                <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_customer_services">
                    <h3 class="block-title">Customer services</h3>
                    <ul>
                        <li><a title="Online Earning" href="#">Online Earning</a></li>
                        <li><a title="Materials" href="#">Materials</a></li>
                        <li><a title="Presentation" href="#">Presentation</a></li>
                        <li><a title="Printed materials" href="#">Printed materials</a></li>
                        <li><a title="Curriculum" href="#">curriculum</a></li>
                        <li><a title="Literature" href="#">literature</a></li>
                        <li><a title="Help & Faq" href="#">Help & Faq</a></li>
                    </ul>
                </aside>
                <!-- Customer Service Widget /- -->

                <!-- Quick Links Widget -->
                <aside class="col-md-2 col-sm-6 col-xs-6 widget widget_quick_links">
                    <h3 class="block-title">Quick links</h3>
                    <ul>
                        <li><a title="Faq" href="#">Faq</a></li>
                        <li><a title="Support" href="#">Support</a></li>
                        <li><a title="Sitemap" href="#">Sitemap</a></li>
                        <li><a title="Community" href="#">Community</a></li>
                        <li><a title="membership" href="#">membership</a></li>
                        <li><a title="Events" href="eventlist-page.html">Events</a></li>
                        <li><a title="Contact us" href="contactus.html">Contact us</a></li>
                    </ul>
                </aside>
                <!-- Quick Links Widget /- -->

                <!-- ContactUs Widget -->
                <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_contactus">
                    <h3 class="block-title">Contact Us</h3>
                    <div class="contactinfo-box">
                        <i class="fa fa-map-marker"></i>
                        <p>09 Design Street, Mitri, Victoria, Australia.</p>
                    </div>
                    <div class="contactinfo-box">
                        <i class="fa fa-phone"></i>
                        <p>
                            <a title="0112345678" href="tel:+0112345678">+01 123 456 78</a>
                            <a title="0112355689" href="tel:+0112355689">+01 123 556 89</a>
                        </p>
                    </div>
                    <div class="contactinfo-box">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            <a href="mailto:Info@OurDomain.Com" title="Info@OurDomain.Com">Info@OurDomain.Com</a>
                            <a href="mailto:Support@OurDomain.Com" title="Support@OurDomain.Com">Support@OurDomain.Com</a>
                        </p>
                    </div>
                </aside>
                <!-- ContactUs Widget /- -->

                <!-- NewsLetter Widget -->
                <aside class="col-md-4 col-sm-6 col-xs-6 widget widget_newsletter">
                    <h3 class="block-title">News Letter</h3>
                    <p>Got a dream and we just know now we're gonna make our dream come true</p>
                    <div class="input-group">
                        <input type="text" placeholder="Enter Address" class="form-control">
                        <span class="input-group-btn">
                                    <button type="button" title="Subscribe" class="btn">Go</button>
                                </span>
                    </div>
                    <ul>
                        <li><a title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a title="Dribbble" data-toggle="tooltip" href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </aside>
                <!-- NewsLetter Widget /- -->
            </div>
        </div>
        <!-- Container /- -->
        <!-- Footer About /- -->


        <!-- Container -->
        <div class="container">
            <div class="footer-menu">
                <!-- Copyrights -->
                <div class="copyrights ow-pull-left">
                    <p>&copy; 2016 | All rights reserved</p>
                </div>
                <!-- Copyrights /- -->
                <!-- Navigation -->
                <nav class="navbar ow-navigation ow-pull-right">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar2">
                        <ul class="nav navbar-nav">
                            <li><a title="Home" href="index.html">Home</a></li>
                            <li><a title="About Us" href="about-page.html">About Us</a></li>
                            <li><a title="Services" href="services-page.html">Services</a></li>
                            <li><a title="Latest News" href="blog-page.html">Latest News</a></li>
                            <li><a title="Contact Us" href="contactus.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Navigation /- -->
            </div>
            <!-- Footer Menu /- -->
        </div>
        <!-- Container /- -->
    </footer>

    <input id="name1" />

    <!-- Firebase App Initialisation -->
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBGQSmaf5n10obiKFOL6S_WOPYEWZFWGgs",
            authDomain: "devlabs-df5ac.firebaseapp.com",
            databaseURL: "https://devlabs-df5ac.firebaseio.com",
            projectId: "devlabs-df5ac",
            storageBucket: "",
            messagingSenderId: "523219563814"
        };
        firebase.initializeApp(config);
    </script>
    <!-- JQuery v1.11.3 -->
    <script src="js/jquery.min.js"></script>

    <!-- Library - Js -->
    <script src="libraries/lib.js"></script>
    <!-- Bootstrap JS File v3.3.5 -->
    <script src="libraries/jquery.countdown.min.js"></script>

    <script src="libraries/lightslider-master/lightslider.js"></script>

    <script src="js/functions.js"></script>

</body>

</html>
<?php
session_destroy();
?>
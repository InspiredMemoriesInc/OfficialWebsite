﻿<?php
session_start();

$email = $_SESSION['email1'];
$to = $email;
$subject = 'Developer Labs Registration Confirmation';
$from = "IM Developer Labs";
$reply = "devlabs@inspiredmemories.in";

$headers = "From: " . strip_tags($reply) . "\r\n";
$headers .= "Reply-To: ". strip_tags($reply) . "\r\n";
$headers .= "CC: office@inspiredmemories.in\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = file_get_contents("email.html");

mail($to, $subject, $message, $headers);
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
    <title>Payment Successful - #IMDevLabs</title>

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
                            <a title="Logo" href="#" class="navbar-brand"><img src="images/logo.png" alt="logo" /><span>#IMDevlabs</span></a>
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
                    <h3>Registeration Successful </h3>
                    <span style="font-family: 'Titillium Web', sans-serif;">Review your details and make sure you remember them. Further Steps has been mailed to you. <br>
                    </span>
                    <strong><h4>Payment ID: <?php echo $_POST['razorpay_payment_id'] = $_SESSION['payment_id'];?></h4><strong>
                </div>
                <form id="contact-form" class="contactus-form" method="GET" action="../pay/pay.php?checkout=automatic">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Basic Details</h3>
                        <p>Details we needed to recognise you!</p>
                        <hr>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Name:</b></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4 id="name"><?php echo $name = $_SESSION['name1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>College Name:</b></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['college1'];?></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Phone:</b></h4>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['phone1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Email:</b></h4>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['email1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Semester:</b></h4>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['sem1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Branch:</b></h4>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['branch1'];?></h4>
                        </div>
                    </div>
                    

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Few More</h3>
                        <p>Just few things we needed to know about you</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Purpose of Attending:</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['purpose1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>What you know about Developer Labs?</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['know1'];?></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Twitter Username:</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['twitter1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Linkedin URL:</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['linkedin1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>T-Shirt Size:</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['hometown1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Interested Field:</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['field1'];?></h4>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Final Step</h3>
                        <p>Choosen options and get connected.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>What you want to learn in our Dev Lab?</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['learn1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>How you came to know about us?</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['aboutus1'];?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><b>Choosen Lab</b></h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h4><?php echo $name = $_SESSION['lab1'];?></h4>
                        </div>
                    </div>
                </form>
                <div id="alert-msg" class="alert-msg"></div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="slider-content-box">
                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                        <h3 class="slider-title">Android Application Development For Beginners</h3>
                        <span>February 14<sup>th</sup> and 15<sup>th</sup></span>
                        <p>Seminar Hall 1 <br>Akshaya Institute of Technology <br> Tumkur - 572106 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="slider-content-box" style="background-color: #bdbdbd;">
                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                        <h3 class="slider-title">Learn the Web for Beginners</h3>
                        <span>February 14<sup>th</sup> and 15<sup>th</sup></span>
                        <p>Seminar Hall 2 <br>Akshaya Institute of Technology <br> Tumkur - 572106 </p>
                    </div>

                </div>
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
            </div>



        <div class="container">
            <div class="footer-menu">
                <!-- Copyrights -->
                <div class="copyrights ow-pull-left">
                    <p>&copy; 2018 InspiredMemories LLP - All Rights Reserved</p>
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
                        <ul class="nav navbar-nav menubar">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="register.html">Check Events</a></li>
                            <li><a href="../inspiredminds/index.html">Minds</a></li>
                            <li><a href="../careers/index.html">Careers</a></li>
                            <li><a href="../foundation/index.html">Foundation</a></li>
                            <li><a href="../imstudios/launchpad/">Launchpad</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Navigation /- -->
            </div>
            <!-- Footer Menu /- -->
        </div>
        <!-- Container /- -->
    </footer>
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
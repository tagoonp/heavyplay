<?php
session_start();

include "xplor-config.php";
include "xplor-connect.php";
$db = new database();
$db->connect();

$tbPrefix = $db->getTablePrefix();

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Classic | contact page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,100' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,600" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.css">
        <link rel="stylesheet" href="../css/owl.transitions.css">

        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="../lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="../lib/css/preview.css" type="text/css" media="screen" />

        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="../css/animate.css">

        <!-- meanmenu.min CSS
		============================================ -->
        <link rel="stylesheet" href="../css/meanmenu.min.css">

        <!-- jQuery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="../css/jQuery-ui.css">

		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="../css/normalize.css">

		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="../css/main.css">

		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../custom-style.css">

		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="../css/responsive.css">

		<!-- modernizr JS
		============================================ -->
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!--header-area start-->
        <?php include "componants/header-1-1.php"; ?>
        <!--header-area start-->
        <!--contact area start-->


        <!--contact form start-->
        <!--contact adress start-->
        <div class="contact-adress">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="adress">
                                <h3>Contac Address</h3>
                                <p>Lorem ipsum dolor, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet scrambled it to make a type unknown printer specimen book.</p>
                            </div>
                            <div class="adress-info">
                                <div class="location">
                                    <p>Mohammadpur-1207,katasur-Quderabad Housing Dhaka.</p>
                                </div>
                                <div class="phone-number">
                                    <p>+8801835312462(9:30-18:30)</p>
                                </div>
                                <div class="mail">
                                    <a href="http://bootexperts.com">Admin@Bootexperts.com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact adress end-->

        <div class="contact-us-form">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-form">
                                <div class="contact-form-title">
                                    <h2>Contact Form</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-details">
                                            <form action="mail.php" method="POST" >
                                                <div class="contact-name">
                                                    <input name="name" type="text" placeholder="Name(required)" required>
                                                </div>
                                                <div class="contact-email">
                                                    <input name="email" type="text" placeholder="Email(required)" required>
                                                </div>
                                                <div class="contact-subject">
                                                    <input name="subject" type="text" placeholder="Subject" required>
                                                </div>
                                                <div class="contact-textarea">
                                                    <textarea name="message"  cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                                <div class="contact-submitt">
                                                    <button type="submit" value="submit form">submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact form end-->

        <!--conatct-us are-end-->

        <!--footer-area start-->
        <?php include "componants/footer-2.php"; ?>
        <!--footer-area end-->





        <!-- jquery
		============================================ -->
        <script src="../js/vendor/jquery-1.11.3.min.js"></script>

        <!-- price-slider JS
		============================================ -->
        <script src="../js/jquery-price-slider.js"></script>

		<!-- bootstrap JS
		============================================ -->
        <script src="../js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->
        <script src="../js/wow.min.js"></script>

        <!-- Nivo slider js
		============================================ -->
		<script src="../lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="../lib/home.js" type="text/javascript"></script>

		<!-- meanmenu JS
		============================================ -->
        <script src="../js/jquery.meanmenu.js"></script>

		<!-- owl.carousel JS
		============================================ -->
        <script src="../js/owl.carousel.min.js"></script>

        <!-- mixitup js -->
        <script src="../js/jquery.mixitup.min.js"></script>

        <!-- jquery.collapse js -->
        <script src="../js/jquery.collapse.js"></script>

		<!-- scrollUp JS
		============================================ -->
        <script src="../js/jquery.scrollUp.min.js"></script>




		<!-- plugins JS
		============================================ -->
        <script src="../js/plugins.js"></script>

		<!-- main JS
		============================================ -->
        <script src="../js/main.js"></script>
    </body>
</html>

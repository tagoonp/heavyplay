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
        <title>Classic | about us</title>
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

		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="../css/responsive.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="../custom-style.css">
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
        <!--contact area start-->
        <!--contact-title start-->
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="a-b-us-name about">
                            <h2>about Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact-title end-->
        <!--about us start-->
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="about-pisces-desc">
                            <div class="about-title">
                                <h1>Wellcome to <span>classic</span></h1>
                            </div>
                           <div class="about-text">
                                <div class="about-main-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel,</p>
                                </div>
                                <div class="about-sub-text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                           </div>
                           <div class="about-list">
                               <ul>
                                   <li>We love products that work perfectly and look beautiful.</li>
                                   <li>We create base on a deeply analysis of your project.</li>
                                   <li>We are create design with really high quality standards.</li>
                               </ul>
                           </div>
                           <div class="about-learn">
                               <a href="#">Learn More</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="about-photo">
                            <img src="../img/about-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--about client say start-->
            <div class="about-clien-carousel">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12">
                           <div class="client-say text-center">
                               <h2>What Client <span>Say</span></h2>
                               <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam</p>
                           </div>
                       </div>
                        <div class="col-md-12">
                            <div class="about-client-list text-center">
                                <div class="single-client-about">
                                    <div class="client-photo">
                                        <img src="../img/client/client-1.jpg" alt="">
                                    </div>
                                    <div class="client-attitude">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    </div>
                                    <div class="client-skill">
                                        <h3>Rose</h3>
                                        <p>--Grphics designer--</p>
                                    </div>
                                </div>
                                <div class="single-client-about">
                                    <div class="client-photo">
                                        <img src="../img/client/client-2.jpg" alt="">
                                    </div>
                                    <div class="client-attitude">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    </div>
                                    <div class="client-skill">
                                        <h3>TERESA</h3>
                                        <p>--Web developer--</p>
                                    </div>
                                </div>
                                <div class="single-client-about">
                                    <div class="client-photo">
                                        <img src="../img/client/client-3.jpg" alt="">
                                    </div>
                                    <div class="client-attitude">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    </div>
                                    <div class="client-skill">
                                        <h3>MONICA</h3>
                                        <p>--Market Research--</p>
                                    </div>
                                </div>
                                <div class="single-client-about">
                                    <div class="client-photo">
                                        <img src="../img/client/client-4.jpg" alt="">
                                    </div>
                                    <div class="client-attitude">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    </div>
                                    <div class="client-skill">
                                        <h3>Katrina</h3>
                                        <p>--Programmer--</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--about client say end-->
            <!--creative member area start-->
            <div class="crative-member-area">
                <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="crative-member text-center">
                               <h2>our creative <span>member</span></h2>
                               <P>Our skill is really high quality and standard for build your project.</P>
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single-crative-member-info">
                                <div class="member-image">
                                    <img src="../img/client/creative-member-1.jpg" alt="">
                                    <div class="member-title">
                                        <h1>Jennifear lawrence</h1>
                                        <p>Ceo Founder</p>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                    </div>
                                    <div class="member-icon">
                                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single-crative-member-info">
                                <div class="member-image">
                                    <img src="../img/client/creative-member-2.jpg" alt="">
                                    <div class="member-title">
                                        <h1>Martin jerry</h1>
                                        <p>Co Founder</p>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                    </div>
                                    <div class="member-icon">
                                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single-crative-member-info">
                                <div class="member-image">
                                    <img src="../img/client/creative-member-3.jpg" alt="">
                                    <div class="member-title">
                                        <h1>Danny luis</h1>
                                        <p>Cheif exutive officer</p>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                    </div>
                                    <div class="member-icon">
                                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single-crative-member-info">
                                <div class="member-image">
                                    <img src="../img/client/creative-member-4.jpg" alt="">
                                    <div class="member-title">
                                        <h1>Michael Jhonson</h1>
                                        <p>Sales excutive</p>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                    </div>
                                    <div class="member-icon">
                                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--creative member area end-->
        </div>
        <!--about us end-->
        <!--our brand start-->
        <div class="our-brand-area owl-indicator">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-title">
                           <h3>Our client</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="brand-list">
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand">
                                <a href=""><img src="../img/brand-5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--our brand end-->
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

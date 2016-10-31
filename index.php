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
        <title>Classic | Home1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,100' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,600" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- fontwesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">

        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">

		<!-- meanmenu.min CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- jQuery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jQuery-ui.css">

		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">

		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">

		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">

		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="custom-style.css">

		<!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <!-- Add your site or application content here -->

        <?php include "componants/header-1.php"; ?>

        <!--slider area start-->
        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="img/slider/heavyplay-slider-1.png" alt="" title="#slider-direction-1"  />
                    <img src="img/slider/heavyplay-slider-2.png" alt="" title="#slider-direction-2"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1" style="color: rgb(226, 112, 201)"><strong>NEW ALIENWARE</strong></h1>
                            <h1 class="title2" style="color: rgb(255, 255, 255); padding-left: 100px; padding-right: 100px;">Alienware gaming laptops are crafted with carbon-fiber materials, stunning graphics and Intel® Core™ processors for full-throttle performance.</h1>
                            <a href="#"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                      <div class="title-container s-tb-c">
                          <h1 class="title1" style="color: rgb(54, 255, 225)"><strong>ALIENWARE AURORA</strong></h1>
                          <h1 class="title2" style="color: rgb(255, 255, 255); padding-left: 100px; padding-right: 100px;">Dual graphics-ready compact mid tower. Designed for virtual reality and engineered with liquid cooling and tool-less access.</h1>
                          <a href="#"><span>SHOP NOW</span></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider area end-->
       <!--banner area satrt-->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-9 col-lg-9">
                        <div class="banner-image-area">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="litele-img">
                                        <a href="#"><img src="img/heavyplay-line-add.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <div class="large-img">
                                        <a href="category/?cat=1"><img src="img/header-cover-alienware.png" alt=""></a>
                                    </div>
                                    <div class="li-banner-new">
                                        <span>new</span>
                                    </div>

                               </div>
                            </div>
                            <div class="row banner-bottom">
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <div class="large-img">
                                        <a href="category/?cat=3"><img src="img/heavyplay-cover-alienware-bags.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="litele-img">
                                        <a href="category/?cat=3"><img src="img/heavyplay-cover-accessories.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 hidden-sm col-md-3">
                        <div class="banner-another-img">
                            <a href="shop/"><img src="img/heavyplay-left-cover.png" alt=""></a>
                            <div class="banner-a-img-block">
                                <h2>NEW FASHION<br/>TRANDS 2016</h2>
                                <a href="shop/">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--banner area send-->

        <?php include "componants/footer.php"; ?>



        <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>

        <!-- price-slider JS
		============================================ -->
        <script src="js/jquery-price-slider.js"></script>

		<!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>

        <!-- Nivo slider js
		============================================ -->
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>

		<!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>

		<!-- owl.carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>

        <!-- jquery.collapse js -->
        <script src="js/jquery.collapse.js"></script>

		<!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>

		<!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>

		<!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
    </body>
</html>

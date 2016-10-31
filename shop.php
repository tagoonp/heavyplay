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
        <title>Classic | shop page</title>
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
        <!--header-area end-->
        <!--shop header area sart-->
        <div class="shop-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop-header-title">
                            <h1 class="th-font fw300">สินค้า ALIENWARE ที่เราขาย</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--shop header area end-->
        <!--gird men start-->
        <div class="grid-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gird-menu" >
                            <ul class="custom-ul">
                                <li><a href="../" class="th-font" style="font-weight: 300;">หน้าแรก</a> <i class="fa fa-angle-right"></i></li>
                                <li class="th-font" style="font-weight: 300;">ร้านค้า</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--gird men start-->
        <!--shop-area start-->
        <div class="shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <!--widget caetegorie start-->
                        <div class="single-widget categories">
                            <div class="sidebar-title">
                                <h2 class="th-font">ประเภทสินค้า</h2>
                            </div>
                            <div class="categories-list">
                                <ul>
                                  <?php
                                  $strSQL = sprintf("SELECT * FROM %scategory WHERE cat_status = ?", mysql_real_escape_string($tbPrefix));
                                  $result = $db->select($strSQL,array('Y'));
                                  if($result){
                                    foreach($result as $value){
                                      ?>
                                      <li><a href="shop/?cat=<?php echo $value['cat_id'];?>"><?php echo $value['cat_name']; ?> <span>(14)</span></a></li>
                                      <?php
                                    }
                                  }
                                  ?>
                                </ul>
                            </div>
                        </div>
                        <!--widget caetegorie end-->
                        <!--widget price start-->
                        <div class="single-widget price">
                            <div class="sidebar-title">
                                <h3>price</h3>
                            </div>
                            <div class="info-widget">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        <input type="submit"  value="Filter"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--widget price end-->
                        <!--widget tags start-->
                        <div class="single-widget rated">
                            <div class="sidebar-title">
                                <h3>Top rated products</h3>
                            </div>
                            <div class="rated-list">
                                <ul>
                                    <li>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img alt="" src="../img/product/bb-2.JPG" class="primary-image">
                                                    <img alt="" src="../img/product/bg-an.jpg" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-info">
                                                    <h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>
                                                    <div class="price-box">
                                                        <span class="new-price">£90.00</span>
                                                        <span class="old-price">£120.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img alt="" src="../img/product/b-d-1.jpg" class="primary-image">
                                                    <img alt="" src="../img/product/product.jpg" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-info">
                                                    <h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>
                                                    <div class="price-box">
                                                        <span class="new-price">£70.00</span>
                                                        <span class="old-price">£100.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img alt="" src="../img/product/bbb-1.jpg" class="primary-image">
                                                    <img alt="" src="../img/product/bbb-2.png" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-info">
                                                    <h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
                                                    <div class="price-box">
                                                        <span class="new-price">£50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--widget tags end-->
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div class="shop-list-toolbar">
                            <div class="shop-toolbar-position">
                                <div class="view-mode">
                                    <a href="shop.html" class="active"><i class="fa fa-th-large"></i></a>
                                    <a href="shop-list.html" class="list"><i class="fa fa-th-list"></i></a>
                                </div>
                                <div class="show-result">
                                    <p> Showing 1&ndash;12 of 19 results</p>
                                </div>
                            </div>
                            <div class="toolbar-form">
                                <form action="#">
                                    <div class="tolbar-select">
                                        <select>
                                          <option value="volvo">Sort by popularity</option>
                                          <option value="saab">Default sorting</option>
                                          <option value="mercedes">Sort by average rating</option>
                                          <option value="audi">Sort by newness</option>
                                          <option value="audi">Sort by price: low to high</option>
                                          <option value="audi">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--shop-gird view-->
                        <div class="row">
                            <div class="show-gird-product another">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/b-d-1.jpg" alt="">
                                                <img class="hover-img" src="../img/product/b-d-2.jpg" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bb-2.JPG" alt="">
                                                <img class="hover-img" src="../img/product/bg-c-1.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bb-1.JPG" alt="">
                                                <img class="hover-img" src="../img/product/bb-2.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bbb-1.jpg" alt="">
                                                <img class="hover-img" src="../img/product/bg-an.jpg" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bg-an.jpg" alt="">
                                                <img class="hover-img" src="../img/product/product-4.png" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bg-c-1.JPG" alt="">
                                                <img class="hover-img" src="../img/product/bg-c-2.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/cap-1.JPG" alt="">
                                                <img class="hover-img" src="../img/product/cap-2.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/hat%20-2.JPG" alt="">
                                                <img class="hover-img" src="../img/product/hat-1.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/shoes-p.jpg" alt="">
                                                <img class="hover-img" src="../img/product/shoes-2.jpg" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bb-2.JPG" alt="">
                                                <img class="hover-img" src="../img/product/product.jpg" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/bb-1.JPG" alt="">
                                                <img class="hover-img" src="../img/product/b-d-2.jpg" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a class="b-s-p-img" href="#">
                                                <img class="primary-img" src="../img/product/hat-1.JPG" alt="">
                                                <img class="hover-img" src="../img/product/bg-c-2.JPG" alt="">
                                            </a>
                                            <div class="img-block">
                                                <div class="primary-icon">
                                                    <a href="#"><i class="fa fa-random"></i></a>
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <div class="hover-icon">
                                                   <span class="random"><a href="#"><i class="fa fa-random"></i></a></span>
                                                    <span class="eye"><a href="#"><i class="fa fa-eye"></i>Quick view</a></span>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-block-text">
                                            <h3><a href="#">Bag<span>$60.23</span></a></h3>
                                             <a class="p-b-t-a-c" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination-->
                        <div class="shop-pagination">
                            <div class="pagination-list">
                                <ul>
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--shop-area end-->
        <!--our brand start-->

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

<!--header-area start-->
<div class="header-area home1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="classic-logo">
                    <a href="../">
                        <img src="../img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
                <div class="header-menu">
                    <ul id="nav">
                        <li><a href="../" class="th-font fz18">หน้าแรก</a></li>
                        <li><a href="../about/" class="th-font fz18">เกี่ยวกับเรา</a></li>
                        <li><a href="shop.php" class="th-font fz18">สินค้า</a>
                            <div class="mega-menu">
                                <span>
                                    <?php
                                    $strSQL = sprintf("SELECT * FROM %scategory WHERE cat_status = ?", mysql_real_escape_string($tbPrefix));
                                    $result = $db->select($strSQL,array('Y'));
                                    if($result){
                                      foreach($result as $value){
                                        ?>
                                        <a href="category/?cat=<?php echo $value['cat_id'];?>"><?php echo $value['cat_name']; ?> </a>
                                        <?php
                                      }
                                    }
                                    ?>
                                </span>
                            </div>
                        </li>
                        <li><a href="contact/" class="th-font fz18">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="header-info">
                    <ul>
                        <li><a href=""><img src="../img/header-search.png" alt=""></a></li>
                        <li><a href="../login/">login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--mobile menu satrt-->
    <div class="mobile-menu-area home1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">home one</a></li>
                                    <li><a href="index-2.html">home two</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">about</a></li>
                            <li><a href="shop.html">shop</a>
                                <ul>
                                    <li><a href="shop.html">shop pages</a>
                                        <ul>
                                            <li><a href="shop-list.html">List View </a></li>
                                            <li> <a href="shop.html">Category</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href=wishlist.html>Wishlist</a></li>
                                            <li><a href="cart.html">Cart </a></li>
                                            <li><a href="checkout.html">Checkout </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="product.html">produt types</a>
                                        <ul>
                                           <li><a href="product.html">Simple Product</a></li>
                                            <li><a href="#">Variables Product</a></li>
                                            <li><a href="#">Grouped Product</a></li>
                                            <li><a href="#">Downloadable</a></li>
                                            <li><a href="">Virtual Product</a></li>
                                            <li><a href="#">External Product</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Pages</a>
                                <ul>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact.html">Conatct us</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html">cart pages</a></li>
                                    <li><a href="product.html">product pages</a></li>
                                    <li><a href="shop.html">shop pages</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="404.html">Error pges</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">portfolio</a>
                                <ul>
                                    <li><a href="portfolio-3-column.html">3 columns</a></li>
                                    <li><a href="portfolio-4-column.html">4 columns</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!--mobile menu end-->
</div>
<!--header-area start-->

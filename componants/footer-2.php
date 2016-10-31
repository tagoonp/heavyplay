<!--footer-area start-->
<div class="footer-area" style="margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="footer-info">
                    <div class="footer-order-shipp">
                        <h2>free shipp on orders over $ 200</h2>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="footer-newsletter">
                    <h3>newsletter sign up</h3>
                    <div class="newsletter">
                        <form action="#">
                            <input type="text" placeholder="your email" required>
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-list" style=" background: rgb(93, 93, 93);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-footer classic">
                        <div class="logo">
                            <a href="#"><img src="../img/logo.png" alt=""></a>
                        </div>
                        <div class="f-classic-text">
                            <p>We sell everything about Alienware Gaming Notebook.</p>
                        </div>
                        <div class="classic-adress">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i></a>+(00)56-888-999</li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a>Bootexperts.com</li>
                                <li><a href="#"><i class="fa fa-map-marker"></i></a>New circular road,1212,<span>New work city, america.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-footer my-account">
                        <h3>my account</h3>
                        <div class="account-list">
                            <ul>
                                <li><a href="#">login</a></li>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">My cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">checkout</a></li>
                                <li><a href="#">userinfor</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="single-footer information">
                      <h3>Categories</h3>
                      <div class="account-list">
                          <ul>
                            <?php
                            $strSQL = sprintf("SELECT * FROM %scategory WHERE cat_status = ?", mysql_real_escape_string($tbPrefix));
                            $result = $db->select($strSQL,array('Y'));
                            if($result){
                              foreach($result as $value){
                                ?>
                                <li><a href="category/?cat=<?php echo $value['cat_id'];?>"><?php echo $value['cat_name']; ?></a></li>
                                <?php
                              }
                            }
                            ?>
                          </ul>
                      </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-footer conatact-us">
                        <h3>information</h3>
                        <div class="account-list">
                            <ul>
                                <li><a href="#">product recall</a></li>
                                <li><a href="#">gift vousher</a></li>
                                <li><a href="#">Return exchange</a></li>
                                <li><a href="#">Shipping options</a></li>
                                <li><a href="#">blogs</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">Helpe & FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="footer-copyright">
                        <p>
                            Copyright © 2016
                            <a href="http://devitems.com" target="_blank">Devitems</a>
                            All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="footer-atm-card">
                        <ul>
                            <li><a href="#"><img src="../img/payment-1.PNG" alt=""></a></li>
                            <li><a href="#"><img src="../img/payment-2.PNG" alt=""></a></li>
                            <li><a href="#"><img src="../img/payment-3.PNG" alt=""></a></li>
                            <li><a href="#"><img src="../img/payment-4.PNG" alt=""></a></li>
                            <li><a href="#"><img src="../img/payment-5.PNG" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-area end-->

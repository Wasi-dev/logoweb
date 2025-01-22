<?php include 'assets/layout/header.php' ?>
<section class="banner-sec about-banner-sec content-banner-sec">
    <div class="header-slider banner-txt-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="anim-banner-txt" data-aos="fade-right" data-aos-duration="2000">
                        <h1>Creative Website Design Solutions</h1>
                        <!-- <h2>Transforming Ideas Into Stunning Websites</h2> -->
                        <p>Our expert team specializes in designing visually stunning and highly functional websites tailored to your brand's unique identity. From concept to launch, we create user-friendly, responsive, and SEO-optimized websites that captivate audiences and drive results.</p>

                        <div class="form-banner" data-form-type="signup_form">
                            <form class="" method="POST" action="mail.php"
                                novalidate="novalidate">
                                <input type="hidden" class="pkg_nme" name="package">
                                <input type="hidden" name="link" value="<?php echo $link ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            <li><input name="name" minlength="2" type="text" placeholder="Name" required /></li>
                                            <li><input name="phone" id="phone-coun" required="" type="text" minlength="10"
                                                    maxlength="10" autocomplete="off"
                                                    onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )"
                                                    placeholder="Phone Number"></li>
                                            <li><input type="email" name="email" placeholder="Email Address" required></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="formResult" class="slideformResult"></div>
                                        <input class="pkg_btn submit" data-sku="Offering Engaging Form " name="submit"
                                            type="submit" value="Submit Now" required />
                                        <a href="javascript:toggleTawkChat();" class="btn btn-live chatt"><i
                                                class='fas fa-comment'></i>Live Chat</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="anim-img-box">
                        <img src="public/assets/website/images/website-designing.png" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pricing-main-sec">
    <div class="container">
        <div class="price-head-box" data-aos="fade-down" data-aos-duration="3000">
            <h2>Most Affordable Packages</h2>
            <p>Being 10 years in the market, we are well acquainted with the competition.<br />That's why we bring the most
                reasonable price plans. We ensure quality over quantity. </p>
        </div>
        <div class="package-slider-box">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item" data-package-box>
                        <div class="package-main-box">
                            <div class="package-pr">
                                <h3>$249</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Lite
                                    </h4>
                                    <p>Suitable For Small Sized Business
                                    </p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$1020</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>2 Mockup Design Samples</li>
                                            <li>Email Account Creation Included</li>
                                            <li>Content Management System - edit any text/images</li>
                                            <li>Pop up image gallery or slideshow</li>
                                            <li>Enquiry and other web forms</li>
                                            <li>Google Map and Social Media Links Setup</li>
                                            <li>Basic Website SEO Included</li>
                                            <li>Mobile friendly - view on tablets and mobile</li>
                                            <li>FREE Google Webmaster Setup</li>
                                            <li>After completion, 7 days FREE MAINTENANCE</li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="lite ~ $249 " data-toggle="modal"
                                    class="pkg_btn btn btn-order startchat">order now</a>
                                <a class="btn chat" href="javascript:toggleTawkChat();">
                                    <span class="cht_clr"><small>Click here to
                                            <img src="public/assets/website/images/chat-img.gif" alt="" class="img-fluid" />
                                        </small> Live Chat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item" data-package-box>
                        <div class="package-main-box">
                            <div class="package-pr">
                                <h3>$449</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Premium

                                    </h4>
                                    <p>Suitable For Medium Sized Business
                                    </p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$1820</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>3 Mockup Design Samples</li>
                                            <li>Email Account Creation Included</li>
                                            <li>Content Management System - edit any text/images</li>
                                            <li>Pop up image gallery or slideshow</li>
                                            <li>Enquiry and other web forms</li>
                                            <li>Google Map and Social Media Links Setup</li>
                                            <li>Basic Website SEO Included</li>
                                            <li>Mobile friendly - view on tablets and mobile</li>
                                            <li>FREE Google Webmaster Setup</li>
                                            <li>After completion, 7 days FREE MAINTENANCE</li>
                                            <li>PayPal Payment gateway integration (if needed)</li>
                                            <li>Video Player Integration</li>
                                            <li>Call to Action Form Design &amp; Setup</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Premium ~ $449 " data-toggle="modal"
                                    class="pkg_btn btn btn-order startchat">order now</a>
                                <a class="btn chat" href="javascript:toggleTawkChat();">
                                    <span class="cht_clr"><small>Click here to
                                            <img src="public/assets/website/images/chat-img.gif" alt="" class="img-fluid" />
                                        </small> Live Chat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item" data-package-box>
                        <div class="package-main-box">
                            <div class="package-pr">
                                <h3>$699 </h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Ecommerce
                                    </h4>
                                    <p>For Those Who Requires Webshops
                                    </p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$3020</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>3 Mockup Design Samples</li>
                                            <li>Email Account Creation Included</li>
                                            <li>Content Management System - edit any text/images</li>
                                            <li>Pop up image gallery or slideshow</li>
                                            <li>Enquiry and other web forms</li>
                                            <li>Google Map and Social Media Links Setup</li>
                                            <li>Basic Website SEO Included</li>
                                            <li>Mobile friendly - view on tablets and mobile</li>
                                            <li>FREE Google Webmaster Setup</li>
                                            <li>After completion, 1 month FREE MAINTENANCE</li>
                                            <li>PayPal Payment gateway integration (if needed)</li>
                                            <li>Video Player Integration</li>
                                            <li>Call to Action Form Design &amp; Setup</li>
                                            <li>Custom designed Ecommerce website</li>
                                            <li>Products Category, Searching, Importing</li>
                                            <li>Customer Login, Customer Profile</li>
                                            <li>Orders Management, History, Cart, Checkout</li>
                                            <li>Easy control panel - manage products, orders etc</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Ecommerce ~ $699 " data-toggle="modal"
                                    class="pkg_btn btn btn-order startchat">order now</a>
                                <a class="btn chat" href="javascript:toggleTawkChat();">
                                    <span class="cht_clr"><small>Click here to
                                            <img src="public/assets/website/images/chat-img.gif" alt="" class="img-fluid" />
                                        </small> Live Chat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <a href="pricing.php" class="btn btn-view-pack">view all packages</a>
    </div>
</section>
<?php include 'assets/layout/hitting-rec.php' ?>
<?php include 'assets/layout/process-sec.php' ?>

<?php include 'assets/layout/creation-sec.php' ?>
<?php include 'assets/layout/testimonial.php' ?>

<?php include 'assets/layout/footer.php' ?>
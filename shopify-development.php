<?php include 'assets/layout/header.php' ?>
<section class="banner-sec about-banner-sec content-banner-sec">
    <div class="header-slider banner-txt-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="anim-banner-txt" data-aos="fade-right" data-aos-duration="2000">
                        <h1> Shopify Development Services</h1>
                        <!-- <h2>Building Your Dream Online Store</h2> -->
                        <p>Our skilled team specializes in creating custom Shopify stores that are visually appealing, highly functional, and tailored to your business needs. From setup to optimization, we deliver user-friendly, responsive, and sales-driven solutions that help you succeed in the e-commerce world.</p>


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
                        <img src="public/assets/website/images/shopify.png" alt="" class="img-fluid" />
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
                                <h3>$699</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Starter
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
                                        <li> Custom designed Homepage (1x concepts)</li>
                              <li> 5 Custom designed Inner pages</li>
                              <li> Upto 25 to 50 Products</li>
                              <li> Upto 7 Categories</li>
                              <li> Content Management System</li>
                              <li> Sales &amp; Inventory Management</li>
                              <li> Mini Shopping Cart Integration</li>
                              <li> Payment Gateway Integration</li>
                              <li> Social Media Integration (Facebook, Twitter, LinkedIn)</li>
                              <li> Easy Product Search</li>
                              <li> 5 Premium Stock Photos</li>
                              <li> 2 Promotional Banners</li>
                              <li> Interactive jQuery Slider</li>
                              <li> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
                              <li> Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
                              <li> W3C Certified HTML</li>
                              <li> Google Friendly Sitemap</li>
                              <li> Complete Deployment</li>
                              <li> 30 Days Free Maintenance (Post-launch support)</li>
                              <li> Industry Specified Team of Expert Designers and Developers</li>
                              <li>  Dedicated Account Manager</li>
                              <li>  24/7 Customer Support</li>
                              <li>  Unlimited Revisions</li>
                              <li>  100% Satisfaction Guarantee</li>
                              <li>  100% Unique Design Guarantee</li>
                              <li>  Money Back Guarantee *</li>
                              <li>  100% Ownership Rights</li>
                              <li>  Complete Brand Identity&nbsp; <strong>($199)</strong></li>
                              <li>  Live Chat/Bot Chat Integration&nbsp; <strong>($249)</strong></li>
                              <li> Complete Brand Identity&nbsp; <strong>($199)</strong></li>
                              <li> Live Chat/Bot Chat Integration&nbsp; <strong>($249)</strong></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Starter ~ $699 " data-toggle="modal"
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
                                <h3>$1399</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Professional

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
                                        <li> Custom designed Homepage (2x concepts)</li>
                              <li> 10 Custom designed Inner pages</li>
                              <li> Interactive and Dynamic Website Design</li>
                              <li> Upto 50 - 250 Products</li>
                              <li> Upto 10 Categories</li>
                              <li> 15 Premium Stock Photos</li>
                              <li> 8 Promotional Banners</li>
                              <li> 1 Landing Page Design</li>
                              <li> Interactive jQuery Slider</li>
                              <li> Customer Login/Signup Area</li>
                              <li> Complete Database Creation</li>
                              <li> Live Chat/Bot Chat Integration (Optional)</li>
                              <li> Shipping Merchant Integration</li>
                              <li> Dropshipping Integration (Optional)</li>
                              <li> Content Management System</li>
                              <li> Sales &amp; Inventory Management</li>
                              <li> Product offers (wish-list, discount options, coupon codes)</li>
                              <li> Product rating &amp; reviews</li>
                              <li> Easy Product Search</li>
                              <li> Product sorting (Newest, Featured, Popular, Best Seller)</li>
                              <li> Full Shopping Cart Integration</li>
                              <li> Payment Module Integration</li>
                              <li> Social Media Integration (Facebook, Twitter, LinkedIn)</li>
                              <li> 3rd Party API Integration</li>
                              <li> Customized Filters for Refined Search</li>
                              <li> SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
                              <li> On-page SEO configuration</li>
                              <li> Search Engine Indexing (Google, Yahoo, Bing, etc)</li>
                              <li> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
                              <li> Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
                              <li> Fast Load Time</li>
                              <li> Security plugins</li>
                              <li> W3C Certified HTML</li>
                              <li> Google Friendly Sitemap</li>
                              <li> Complete Deployment</li>
                              <li> 5 Business Email Address</li>
                              <li> 90 Days Free Maintenance (Post-launch support)</li>
                              <li> How-to-use Training Manual for CMS</li>
                              <li> Industry Specified Team of Expert Designers and Developers</li>
                              <li> Dedicated Account Manager</li>
                              <li> 24/7 Customer Support</li>
                              <li> Unlimited Revisions</li>
                              <li> 100% Satisfaction Guarantee</li>
                              <li> 100% Unique Design Guarantee</li>
                              <li> Money Back Guarantee *</li>
                              <li> 100% Ownership Rights</li>
                              <li> Marketplace Development - <strong>($749)</strong></li>
                              <li> Multi-Currency Support - <strong>($249)</strong></li>
                              <li> Marketplace Development - <strong>($749)</strong></li>
                              <li> Multi-Currency Support - <strong>($249)</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Professional ~ $1399 " data-toggle="modal"
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
                                <h3>$2799 </h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Business
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
                                        <li> Custom designed Homepage (3x concepts)</li>
                              <li> 20 Custom designed Inner pages</li>
                              <li> Interactive and Dynamic Website Design</li>
                              <li> Upto 250 - 1000 Products</li>
                              <li> Upto 20 Categories</li>
                              <li> 25 Premium Stock Photos</li>
                              <li> 15 Promotional Banners</li>
                              <li> 2 Landing Pages Design</li>
                              <li> Interactive jQuery Slider</li>
                              <li> Customer Login/Signup Area</li>
                              <li> Complete Database Creation</li>
                              <li> Live Chat/Bot Chat Integration (Optional)</li>
                              <li> Shipping Merchant Integration</li>
                              <li> Multi-Currency Support (Optional)</li>
                              <li> Dropshipping Integration (Optional)</li>
                              <li> Content Management System</li>
                              <li> Sales &amp; Inventory Management</li>
                              <li> Manage orders (track order, billing history, order status, automated invoicing)</li>
                              <li> Product offers (wish-list, discount options, coupon codes)</li>
                              <li> Multiple Product variation (Color, Size, Quantity, and other attributes)</li>
                              <li> Intelligent search system with filtering options (search by price, categories, Styles, etc)</li>
                              <li> Product sorting (Newest, Featured, Popular, Best Seller)</li>
                              <li> Product rating &amp; reviews</li>
                              <li> Easy Product Search</li>
                              <li> Full Shopping Cart Integration</li>
                              <li> Payment Module Integration</li>
                              <li> Guest Checkout</li>
                              <li> Social Media Integration (Facebook, Twitter, LinkedIn)</li>
                              <li> 3rd Party API Integration</li>
                              <li> 1 year free hosting</li>
                              <li> 1 year free domain registration</li>
                              <li> SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
                              <li> On-page SEO configuration</li>
                              <li> Search Engine Indexing (Google, Yahoo, Bing, etc)</li>
                              <li> Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
                              <li> Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
                              <li> Email Marketing Campaigns</li>
                              <li> Fast Load Time</li>
                              <li> Security plugins</li>
                              <li> W3C Certified HTML</li>
                              <li> Google Friendly Sitemap</li>
                              <li> Google Analytic Installation</li>
                              <li> Google Webmaster Tool</li>
                              <li> Complete Deployment</li>
                              <li> 5 Business Email Address</li>
                              <li> 180 Days Free Maintenance (Post-launch support)</li>
                              <li> How-to-use Training Manual for CMS</li>
                              <li> Industry Specified Team of Expert Designers and Developers</li>
                              <li> Dedicated Account Manager</li>
                              <li> 24/7 Customer Support</li>
                              <li> Unlimited Revisions</li>
                              <li> 100% Satisfaction Guarantee</li>
                              <li> 100% Unique Design Guarantee</li>
                              <li> Money Back Guarantee *</li>
                              <li> 100% Ownership Rights</li>
                              <li>Marketplace Development - <strong>($749)</strong></li>
                              <li>30 Seconds Explainer Video - <strong>($349)</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Business ~ $2799 " data-toggle="modal"
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
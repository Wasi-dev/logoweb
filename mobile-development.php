<?php include 'assets/layout/header.php' ?>
<section class="banner-sec about-banner-sec content-banner-sec">
    <div class="header-slider banner-txt-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="anim-banner-txt" data-aos="fade-right" data-aos-duration="2000">
                        <h1>Innovative Mobile App Development</h1>
                        <!-- <h2>Turning Ideas Into Powerful Apps</h2> -->
                        <p>Our skilled team specializes in creating cutting-edge mobile applications tailored to your business needs. From design to deployment, we deliver user-friendly, secure, and scalable apps that enhance engagement and drive growth for your brand.</p>


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
                        <img src="public/assets/website/images/mobile-app.png" alt="" class="img-fluid" />
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
                                <h3>$2560</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Basic
                                    </h4>
                                    <p>Suitable for Small Startups</p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$1020</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>50% Upfront to get started with the work immediately</li>
                                            <li>No. of Features Up to 7</li>
                                            <li>Wireframing</li>
                                            <li>Intuitive UI UX (Custom App Design)</li>
                                            <li>Social Media Integration</li>
                                            <li>App Testing</li>

                                            <li>Publishing on App Store</li>
                                            <li>Paid bug support ($350/m)</li>
                                            <li>Native iOS OR Android app</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Basic ~ $2560 " data-toggle="modal"
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
                                <h3>$4160</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Standard

                                    </h4>
                                    <p>Suitable for Small Startups</p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$1820</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>50% Upfront to get started with the work immediately</li>
                                            <li>No. of Features Up to 10</li>
                                            <li>Wireframing</li>
                                            <li>Intuitive UI UX (Custom App Design)</li>
                                            <li>Social Media Integration</li>
                                            <li>App Testing</li>
                                            <li>Ads Network Integration</li>
                                            <li>Firebase Integration</li>
                                            <li>In-App Purchase</li>
                                            <li>Publishing on App Store</li>
                                            <li>1 Month free bug support
                                            </li>
                                            <li>Native iOS OR Android app</li>
                                            <li>Cross-Platform (Hybrid) On Demand</li>
                                            <li>Push Notifications</li>
                                            <li>Messaging API Integration (Live Chat)</li>
                                            <li>Google Maps Integration</li>
                                            <li>Web APIs and Online Database</li>
                                            <li>CrashAnalytics Integration</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Standard ~ $4160 " data-toggle="modal"
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
                                <h3>$10,000 </h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Business
                                    </h4>
                                    <p>Suitable for Small Startups</p>
                                </div>
                                <!-- <div class="fright">
                           <h5>75% OFF<span class="cutprice">$3020</span></h5>
                        </div> -->
                            </div>
                            <div class="package-content">
                                <div class="slim-scroll">
                                    <div data-package-scroll>
                                        <ul>
                                            <li>25% Upfront to get started with the work immediately</li>
                                            <li>No. of Features Up to 25</li>
                                            <li>Wireframing</li>
                                            <li>Intuitive UI UX (Custom App Design)</li>
                                            <li>Social Media Integration</li>
                                            <li>App Testing</li>
                                            <li>Ads Network Integration</li>
                                            <li>Firebase Integration</li>
                                            <li>In-App Purchase</li>
                                            <li>Publishing on App Store</li>
                                            <li>App Store Optimization</li>
                                            <li>3 Month free bug support</li>
                                            <li>Native iOS OR Android app</li>
                                            <li>Cross-Platform (Hybrid) On Demand</li>
                                            <li>Push Notifications</li>
                                            <li>Messaging API Integration (Live Chat)</li>
                                            <li>Regular App Updates Yearly 1 Update</li>
                                            <li>Google Maps Integration</li>
                                            <li>Admin Panel</li>
                                            <li>Data Import/Export</li>
                                            <li>Web APIs and Online Database</li>
                                            <li>Picture Gallery/Product Display/Showcase Services On Demand</li>
                                            <li>Product Categories/Sub Categories</li>
                                            <li>CrashAnalytics Integration</li>
                                            <li>Audio/Video Streaming</li>
                                            <li>Payment Gateways Integration</li>
                                            <li>Shopping Cart</li>
                                            <li>3rd Party APIs Integrations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Business ~ $10,000 " data-toggle="modal"
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
                <!-- <div class="item">
               <div class="item" data-package-box>
                  <div class="package-main-box">
                     <div class="package-pr">
                        <h3>$955</h3>
                     </div>
                     <div class="packtitles">
                        <div class="fleft">
                           <h4>Platinum Package</h4>
                           <p>Suitable for Small Startups</p>
                        </div>
                        <div class="fright">
                           <h5>75% OFF<span class="cutprice">$3820</span></h5>
                        </div>
                     </div>
                     <div class="package-content">
                        <div class="slim-scroll">
                           <div data-package-scroll>
                              <ul>
                                 <li>10 Unique Pages Website </li>
                                 <li>CMS / Admin Panel Support </li>
                                 <li>8 Stock images </li>
                                 <li>5 Banner Designs </li>
                                 <li>1 jQuery Slider Banner </li>
                                 <li>FREE Google Friendly Sitemap </li>
                                 <li>Complete W3C Certified HTML </li>
                                 <li>FREE 12 Months Domain Name </li>
                                 <li>FREE 12 Month Hosting </li>
                                 <li>5 Professional Email ID’s </li>
                                 <li>Search Engine Submission </li>
                                 <li>Mobile Responsive </li>
                                 <li>Complete Deployment </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>Complete Source Files </li>
                                 <li>100% Unique & Custom Website Design and Developmen </li>
                                 <li>100% Approval Assurance </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>$250 Shopping Cart Integration. </li>
                                 <li>$10 (Each) Additional Professional Add on Email ID </li>
                                 <li>Professional Content/Copywriting – $1000 (Up to 20 Pages) – (Per Page $50) </li>
                                 <li>*NO MONTHLY OR ANY HIDDEN FEE* </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="bottom-contact" style="margin-top: 30px">
                        <a data-target="#req_qoute" data-sku="Platinum Package ~ $955 " data-toggle="modal"
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
                        <h3>$1455</h3>
                     </div>
                     <div class="packtitles">
                        <div class="fleft">
                           <h4>Diamond Package</h4>
                           <p>Suitable for Small Startups</p>
                        </div>
                        <div class="fright">
                           <h5>75% OFF<span class="cutprice">$5820</span></h5>
                        </div>
                     </div>
                     <div class="package-content">
                        <div class="slim-scroll">
                           <div data-package-scroll>
                              <ul>
                                 <li>10-12 Unique Pages Website Design </li>
                                 <li>Custom, Interactive, Dynamic & High End Design </li>
                                 <li>Customize WordPress (or) PHP Development </li>
                                 <li>Interactive Sliding Banners </li>
                                 <li>10 Stock Images </li>
                                 <li>10 Banner Designs </li>
                                 <li>Special Hover Effects </li>
                                 <li>Unlimited Revisions </li>
                                 <li>Content Management System (WordPress or Custom) </li>
                                 <li>Mobile Responsive </li>
                                 <li>Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional) </li>
                                 <li>FREE 12 Months Domain Name </li>
                                 <li>FREE 12 Month Hosting </li>
                                 <li>Payment Integration (Optional) </li>
                                 <li>10 Professional Email ID’s </li>
                                 <li>Google Friendly Sitemap </li>
                                 <li>Search Engine Submission </li>
                                 <li>Complete W3C Certified HTML </li>
                                 <li>Industry specific Team of Award Winning Designers and Developers </li>
                                 <li>Complete Deployment </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>Complete Source Files </li>
                                 <li>100% Unique & Custom Website Design and Developmen </li>
                                 <li>100% Approval Assurance </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>$250 Shopping Cart Integration. </li>
                                 <li>$10 (Each) Additional Professional Add on Email ID </li>
                                 <li>Professional Content/Copywriting – $1000 (Up to 20 Pages) – (Per Page $50) </li>
                                 <li>*NO MONTHLY OR ANY HIDDEN FEE* </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="bottom-contact" style="margin-top: 30px">
                        <a data-target="#req_qoute" data-sku="Diamond Package ~ $1455 " data-toggle="modal"
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
                        <h3>$2555</h3>
                     </div>
                     <div class="packtitles">
                        <div class="fleft">
                           <h4>Titanium Package</h4>
                           <p>Suitable for Small Startups</p>
                        </div>
                        <div class="fright">
                           <h5>75% OFF<span class="cutprice">$10220</span></h5>
                        </div>
                     </div>
                     <div class="package-content">
                        <div class="slim-scroll">
                           <div data-package-scroll>
                              <ul>
                                 <li>15 to 20 Unique Pages Website Design </li>
                                 <li>Custom Made, Interactive, Dynamic & High End Design </li>
                                 <li>Customized WordPress & PHP Development </li>
                                 <li>Interactive Sliding Banners </li>
                                 <li>Up to 15 Custom Made Banner Designs </li>
                                 <li>15 Stock Images </li>
                                 <li>Unlimited Revisions </li>
                                 <li>Special Hover Effects </li>
                                 <li>Content Management System </li>
                                 <li>Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional) </li>
                                 <li>Payment Integration (Optional) </li>
                                 <li>Multi Lingual (Optional) </li>
                                 <li>Custom Dynamic Forms (Optional) </li>
                                 <li>Signup Area (For Newsletters, Offers etc.) </li>
                                 <li>Search Bar </li>
                                 <li>Live Feeds of Social Networks integration (Optional) </li>
                                 <li>Up to 15 Professional Email ID’s </li>
                                 <li>Google Friendly Sitemap </li>
                                 <li>Search Engine Submission </li>
                                 <li>Complete W3C Certified HTML </li>
                                 <li>Industry specified Team of Award Winning Designers and Developers </li>
                                 <li>Complete Deployment </li>
                                 <li>Next Day Delivery </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>Complete Source Files </li>
                                 <li>100% Unique & Custom Website Design and Developmen </li>
                                 <li>100% Approval Assurance </li>
                                 <li>*** Value Added Services *** </li>
                                 <li>$250 Shopping Cart Integration. </li>
                                 <li>$10 (Each) Additional Professional Add on Email ID </li>
                                 <li>Professional Content/Copywriting – $1000 (Up to 20 Pages) – (Per Page $50) </li>
                                 <li>*NO MONTHLY OR ANY HIDDEN FEE* </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="bottom-contact" style="margin-top: 30px">
                        <a data-target="#req_qoute" data-sku="Titanium Package ~ $2555 " data-toggle="modal"
                           class="pkg_btn btn btn-order startchat">order now</a>
                        <a class="btn chat" href="javascript:toggleTawkChat();">
                           <span class="cht_clr"><small>Click here to
                                 <img src="public/assets/website/images/chat-img.gif" alt="" class="img-fluid" />
                              </small> Live Chat</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div> -->
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
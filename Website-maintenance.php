<?php include 'assets/layout/header.php' ?>
<section class="banner-sec about-banner-sec content-banner-sec">
    <div class="header-slider banner-txt-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="anim-banner-txt" data-aos="fade-right" data-aos-duration="2000">
                        <h1>Reliable Website Maintenance</h1>
                        <!-- <h2>Ensuring Your Website Runs Smoothly</h2> -->
                        <p>Our expert team provides comprehensive website maintenance services, keeping your site updated, secure, and optimized for performance. From regular updates to troubleshooting, we ensure your online presence remains flawless and aligned with your business goals.</p>

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
                        <img src="public/assets/website/images/web-maintain.png" alt="" class="img-fluid" />
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
                                <h3>$49</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Starter</h4>
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
                                            <li> Making updates on the current features </li>
                                            <li> Making content related updates </li>
                                            <li> Performing website version updates and backups </li>
                                            <li> Security checkups and scans </li>
                                            <li> Fixing bugs or errors on your website </li>
                                            <li> Real-time website protection </li>
                                            <li> Unlimited Revisions</li>
                                            <li> 100% Satisfaction Guarantee</li>
                                            <li> Money Back Guarantee* </li>
                                            <li> 100% Ownership Rights</li>
                                            <li> Quick Turnaround (24-48 hrs)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Starter ~ $49 " data-toggle="modal"
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
                                <h3>$69</h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Advanced
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
                                            <li> Making updates on the current features </li>
                                            <li> Making content related updates </li>
                                            <li> Performing website version updates and backups </li>
                                            <li> Security checkups and scans </li>
                                            <li> Fixing bugs or errors on your website </li>
                                            <li> Real-time website protection </li>
                                            <li> Analyzing website for broken links </li>
                                            <li> Speed optimization </li>
                                            <li> SEO friendly images and alt-image tags for search engines </li>
                                            <li> Making content SEO friendly </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Advanced ~ $69 " data-toggle="modal"
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
                                <h3>$149 </h3>
                            </div>
                            <div class="packtitles">
                                <div class="fleft">
                                    <h4>Premium
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
                                            <li> Making updates on the current features </li>
                                            <li> Making content related updates </li>
                                            <li> Performing website version updates and backups </li>
                                            <li> Security checkups and scans </li>
                                            <li> Fixing bugs or errors on your website </li>
                                            <li> Real-time website protection </li>
                                            <li> Analyzing website for broken links </li>
                                            <li> Speed optimization </li>
                                            <li> SEO friendly images and alt-image tags for search engines </li>
                                            <li> Making content SEO friendly </li>
                                            <li> Technical support for domain and hosting server </li>
                                            <li> Web server migrations </li>
                                            <li> Email technical support </li>
                                            <li> Adding new pages and features </li>
                                            <li> Changing entire theme (1 time) of the website </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-contact" style="margin-top: 30px">
                                <a data-target="#req_qoute" data-sku="Premium ~ $149 " data-toggle="modal"
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
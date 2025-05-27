<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="f-first-box">
               <a href="index.php">
               <img class="lazy img-fluid f-logo" src="assets/img/logo.webp" alt="" /></a>
               <p>A logo design agency Specializing in creating impactful visual narratives that resonate with audiences in the USA.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="f-links-box">
               <h5>Services</h5>
               <ul>
                  <li><a href="logo-design.php">Logo design</a></li>
                  <li><a href="branding.php">Branding</a></li>
                  <li><a href="web-development.php">Web design & development</a></li>
                  <li><a href="e-commerce.php">E-Commerce</a></li>
                  <li><a href="video-animation.php">Video animation</a></li>
                  <li><a href="social-media-marketing.php">Social marketing</a></li>
                  <li><a href="content-writing.php">Content writing</a></li>
                  <li><a href="seo-services.php">SEO</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="f-links-box">
               <h5>Services</h5>
               <ul>
                  <li><a href="about-us.php">About us</a></li>
                  <li><a href="portfolio.php">portfolio</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                  <li><a href="combo-packages.php">Combo Pakcages</a></li>
                  <li><a href="contact-us.php">Contact us</a></li>
                  <li><a href="terms.php">Terms & Condition</a></li>
                  <li><a href="privacy.php">Privacy Policy</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="f-last-box">
               <h5>quick links</h5>
               <ul>
                  <li><a href="<?php echo $email_link ?>"><?php echo $email ?></a></li>
                  <li><a href="<?php echo $phone_link ?>"><?php echo $phone ?></a></li>
                  <li><a href="javascript:void(0);"><?php echo $address ?></a></li>
                  <li><img style="width: 100px; height: 50px;" src="./public/assets/website//images/dmca-badge-w250-2x1-01.webp" alt=""></li>
               </ul>
               <!-- <div class="social-links-box">
                   <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div> -->
            </div>
         </div>
      </div>
   </div>
</footer> <!-- Modal -->
<div id="req_qoute" class="modal fade gradient_form bd-example-modal-lg" role="dialog">
   <div class="modal-dialog modal-lg ">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-body">
            <div id="popup" class="custom-popup">
               <a href="javascript:;" class="closed" data-dismiss="modal"></a>
               <div class="row">
                  <div class="col-md-8">
                     <h3>Claim your coupon now and save <strong>70%</strong></h3>
                  </div>
                  <div class="col-md-5">
                     <div id="popupform" class="fixedform-1" data-form-type="popup_form">
                        <form class="jform row leadForm has-validation-callback" method="post" action="mail.php">
                           <input type="hidden" class="pkg_nme" name="package">
                           <input type="hidden" name="link" value="<?php echo $link ?>">

                           <div class="col-md-12">
                              <div class="mm-field namefield">
                                 <input type="text" placeholder="Your Name*" name="name" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field emailfield">
                                 <input type="text" placeholder="Email address*" name="email" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field pnfields">
                                 <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Phone Number" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field textarea">
                                 <textarea name="msg" id="detail_msg" rows="6" placeholder="Enter Your Comment Here" ></textarea>
                              </div>
                           </div>
                           <!-- <div class="g-recaptcha" data-sitekey="6LeGusYqAAAAADfZveT0LI6nDhN8ou5hQses1_Vs"></div> -->

                           <div class="col-md-12">
                              <div class="input-btn">
                                 <div id="formResult"></div>
                                 <button type="submit" id="signupBtn" class="entery-submit">Submit Your Request</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4 mob-display-none">
                     <h4>Package Includes</h4>
                     <ul>

                        <li><i class="fa fa-check-circle"></i>8 Unique Logo Design Ideas</li>
                        <li><i class="fa fa-check-circle"></i>4 Expert Logo Designers Assigned</li>
                        <li><i class="fa fa-check-circle"></i>Unlimited Revision Opportunities</li>
                        <li><i class="fa fa-check-circle"></i>Scalable Vector Files </li>
                        <li><i class="fa fa-check-circle"></i>Delivery Within 48 Hours</li>
                        <li><i class="fa fa-check-circle"></i>Guaranteed Customer Satisfaction</li>
                        <li><i class="fa fa-check-circle"></i>Personalized Account Manager</li>
                     </ul>
                  </div>
               </div>
               <img class="element element-22 lazy" src="public/assets/website/images/element-22.webp" alt="*">
               <img class="element element-23 lazy" src="assets/img/element-14.webp" alt="*">
               <img class="element element-24 lazy" src="public/assets/website/images/element-11.webp" alt="*">
            </div>
         </div>
      </div>
   </div>
</div>
<div id="popup-form" class="modal fade gradient_form bd-example-modal-lg" role="dialog">
   <div class="modal-dialog modal-lg auto-popup">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-body">
            <div id="popup popup-two" class="custom-popup">
               <a href="javascript:;" class="closed" data-dismiss="modal"></a>
               <div class="row">
                  <div class="col-md-12">
                     <h3 class="popup-head">Claim your coupon now and save <strong>70%</strong></h3>
                  </div>
                  <div class="col-md-12">
                     <div id="popupform" class="fixedform-1" data-form-type="popup_form">
                        <form class="jform row leadForm has-validation-callback" method="post" action="mail.php">
                           <input type="hidden" class="pkg_nme" name="package">
                           <input type="hidden" name="link" value="<?php echo $link ?>">

                           <div class="col-md-12">
                              <div class="mm-field namefield">
                                 <input type="text" placeholder="Your Name*" name="name" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field emailfield">
                                 <input type="text" placeholder="Email address*" name="email" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field pnfields">
                                 <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Phone Number" data-validation="required" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mm-field textarea">
                                 <textarea name="msg" id="detail_msg" rows="6" placeholder="Enter Your Comment Here" ></textarea>
                              </div>
                           </div>
 
                           <div class="col-md-12">
                              <div class="input-btn">
                                 <div id="formResult"></div>
                                 <button type="submit" id="signupBtn" class="entery-submit">Submit Your Request</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- <div class="col-lg-4 mob-display-none">
                     <h4>Package Includes</h4>
                     <ul>

                        <li><i class="fa fa-check-circle"></i>8 Unique Logo Design Ideas</li>
                        <li><i class="fa fa-check-circle"></i>4 Expert Logo Designers Assigned</li>
                        <li><i class="fa fa-check-circle"></i>Unlimited Revision Opportunities</li>
                        <li><i class="fa fa-check-circle"></i>Scalable Vector Files </li>
                        <li><i class="fa fa-check-circle"></i>Delivery Within 48 Hours</li>
                        <li><i class="fa fa-check-circle"></i>Guaranteed Customer Satisfaction</li>
                        <li><i class="fa fa-check-circle"></i>Personalized Account Manager</li>
                     </ul>
                  </div> -->
               </div>
               <!-- <img class="element element-22 lazy" src="public/assets/website/images/element-22.webp" alt="*">
               <img class="element element-23 lazy" src="assets/img/element-14.webp" alt="*">
               <img class="element element-24 lazy" src="public/assets/website/images/element-11.webp" alt="*"> -->
            </div>
         </div>
      </div>
   </div>
</div>
<div class="copyright-sec">
   <div class="container">
      <div class="copyright-box">
         <p>Copyright © 2025 Logo Visioneer. All rights reserved.</p>
      </div>
   </div>
</div>
<!-- <a href="wame" class="whatsapp-web"><img src="public/assets/website/images/wa.webp" alt=""></a> -->

<a href="<?php echo $phone_link ?>" class="callusnow"><i class="fa fa-phone"></i></a>

<a href="javascript:toggleTawkChat();" target="_self" class="callusnow chat"><i class="fa fa-comment"></i></a>
<div class="floatingform-sec floating_wrapx">
   <div class="outer-show">
      <p class="blink">let's Get Started</p>
   </div>
   <div class="banner-form">
      <h2>Avail Now</h2>
      <div class="banform">
         <div class="container">
            <div class="row">
               <div class="ban-form" data-form-type="signup_form">
                  <form class="cmxform offr-frm has-validation-callback" method="POST" action="mail.php" >
                     <input type="hidden" class="pkg_nme" name="package" required>
                     <input type="hidden" name="link" value="<?php echo $link ?>" required>
                     <div class="row">
                        <div class="col-md-12 first">
                           <div class="fldset">
                              <label for="username">Your Name</label>
                              <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required />
                              <small class="error-message" style="color: red; display: none; position: relative; top: 5px;">This field is required.</small>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="fldset">
                              <label for="cemail">Your Email</label>
                              <input id="cemail" type="email" name="email" placeholder="Enter email here *" required>
                              <small class="error-message" style="color: red; display: none; position: relative; top: 5px;">This field is required.</small>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="fldset">
                              <label for="phone-coun">Your Number</label>
                              <input name="phone" id="phone-coun" type="text" minlength="10" maxlength="10" autocomplete="off"
                                 onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" placeholder="Phone Number *" required>
                              <small class="error-message" style="color: red; display: none; position: relative; top: 5px;">This field is required.</small>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="fldset">
                              <label for="message">Your Message</label>
                              <textarea name="msg" id="message" rows="7" placeholder="Talk About Your Project *" ></textarea>
                              <small class="error-message" style="color: red; display: none; position: relative; top: 5px;">This field is required.</small>
                           </div>

                        </div>
                        <!-- <div class="col-md-12">
                           <div class="fldset">
                              <div class="g-recaptcha" data-sitekey="6LeGusYqAAAAADfZveT0LI6nDhN8ou5hQses1_Vs"></div>
                           </div>
                        </div> -->

                        <div class="col-md-12">
                           <div class="fldset">
                              <div id="formResult" class="slideformResult"></div>
                              <input name="submit" class="pkg_btn" type="submit" value="Connect With Us" required>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- jquery integration for testimonial -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="public/assets/website/js/plugin.js"></script>
   <script src="public/assets/website/js/form_validator.min.js"></script>
   <script src="public/assets/website/js/custom.js"></script>

   <style>
      .customalert {
         position: fixed;
         padding: 15px 20px;
         min-width: 180px;
         z-index: 99999;
         left: -35px;
         top: 50%;
         transform: rotate(270deg) translateY(-50%);
         text-align: center;
         background: rgba(242, 222, 222, 0.5)
      }
   </style>
<!-- Ada Compliance -->
<script src="https://cdn.userway.org/widget.js" data-account="s5tQ8vKsgE"></script>
   <!-- Forms validation -->
   <script src="public/assets/website/js/form_validator.min.js"></script>
   <!-- Main Requests Helper -->
   <script src="public/assets/website/js/core/ajaxHelper.js"></script>
   <!-- General Functions -->
   <script src="public/assets/website/js/core/generalHelper.js"></script>



   <!-- Lead Management Of Form -->
   <script src="public/assets/website/js/core/leadManagement.js"></script>
   <script src="public/assets/website/js/core/pricingManagement.js"></script>
   <script>
         if($('.services_slider').length != 0){
        $('.services_slider').owlCarousel({
            loop:true,
            margin:30,
            center: true,
            autoplay:false,
            autoplayTimeout:3000,
            responsiveClass:true,
            lazyLoad: true,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
    }
    
    </script>
   <script>
         $(document).ready(function() {
      /*testimonials*/
      $('.client-feedback-testiminails .owl-carousel').owlCarousel({
         loop: true,
         margin: 0,
         animateOut: 'fadeOut',
         autoplayHoverPause: false,
         autoplayTimeout: 9000,
         autoplay: true,
         pagination: false,
         dots: false,
         nav: false,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 2
            },
            1000: {
               items: 3
            }
         }
      });


      $(".clickbutton").click(function() {
         $('.floatbutton').toggleClass("active");
         //   $('.crossplus').toggleClass("rotate");
      });
      // FLOATING FORM ENDS


   });
      document.addEventListener("mousemove", function(event) {
         let xMove = (event.clientX / window.innerWidth - 0.5) * 20; // Reduced sensitivity for smoother motion
         let yMove = (event.clientY / window.innerHeight - 0.5) * 20;

         // Apply smooth animation using requestAnimationFrame
         requestAnimationFrame(() => {
            document.querySelector("section.pricing-main-sec").style.setProperty("--xOffset", `${xMove}px`);
            document.querySelector("section.pricing-main-sec").style.setProperty("--yOffset", `${yMove}px`);
         });
      });
      document.addEventListener("mousemove", function(event) {
         let xMove = (event.clientX / window.innerWidth - 0.5) * 20; // Reduced sensitivity for smoother motion
         let yMove = (event.clientY / window.innerHeight - 0.5) * 20;

         // Apply smooth animation using requestAnimationFrame
         requestAnimationFrame(() => {
            document.querySelector("section.gallery-sec").style.setProperty("--xOffset", `${xMove}px`);
            document.querySelector("section.gallery-sec").style.setProperty("--yOffset", `${yMove}px`);
         });
      });

      $(document).load(function() {
         $("#search_input").focus();
      });

      document.addEventListener('DOMContentLoaded', () => {
         Array.prototype.slice.call(document.querySelectorAll('input'))
            .filter((el) => el.hasAttribute('autofocus'))[0]
            .focus()
      })
   </script>
       <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfkt8YqAAAAABwqs-pB-bMmJmYt5NvTQn_DLtBb', {
                action: 'homepage'
            }).then(function(token) {
                // Send token to the server for verification
                fetch('verify_recaptcha.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'token=' + token
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.success) {
                            console.error("reCAPTCHA failed");
                        }
                    })
                    .catch(error => console.error('Error verifying reCAPTCHA:', error));
            });
        });
    </script>
   </body>

   </html>
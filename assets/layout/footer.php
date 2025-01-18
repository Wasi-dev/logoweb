<footer>
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <div class="f-first-box">
                <img class="lazy img-fluid f-logo" src="assets/img/logo.png"  alt="" />
                <p>We are a fully in-house digital agency focusing on branding, marketing, web design and development with clients ranging from start-ups.</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="f-links-box">
                <h5>Services</h5>
                <ul>
                   <li><a href="logo-design.php">Logo design</a></li>
                   <li><a href="branding.php">Branding</a></li>
                   <li><a href="web-design.php">Web design & development</a></li>
                   <li><a href="e-commerce.php">e-Commerce</a></li>
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
                   <li><a href="about-us.php">about us</a></li>
                   <li><a href="portfolio.php">portfolio</a></li>
                   <li><a href="pricing.php">Pricing</a></li>
                   <li><a href="combo-packages.php">Combo Pakcages</a></li>
                   <li><a href="contact-us.php">Contact us</a></li>
                   <li><a href="order/terms.php">Terms & Condition</a></li>
                   <li><a href="order/privacy.php">Privacy Policy</a></li>
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
 </footer>	  <!-- Modal -->
      <div id="req_qoute" class="modal fade gradient_form bd-example-modal-lg" role="dialog">
         <div class="modal-dialog modal-lg ">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <div id="popup" class="custom-popup">
                     <a href="javascript:;" class="closed" data-dismiss="modal"></a>
                     <div class="row">
                        <div class="col-md-8">
                           <h3>get your coupon & avail <strong>70%</strong> discount</h3>
                        </div>
                        <div class="col-md-5">
                           <div id="popupform" class="fixedform-1" data-form-type="popup_form">
                              <form class="jform row leadForm has-validation-callback" method="post"   action="mail.php">
                              <input type="hidden" class="pkg_nme" name="package">
                            <input type="hidden" name="link" value="<?php echo $link ?>">
 
                               <div class="col-md-12">
                                    <div class="mm-field namefield">
                                       <input type="text" placeholder="Your Name*" name="name" data-validation="required">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="mm-field emailfield">
                                       <input type="text" placeholder="Email address*" name="email" data-validation="required">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="mm-field pnfields">
                                       <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Phone Number"  data-validation="required">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="mm-field textarea">
                                       <textarea name="msg" id="detail_msg" rows="6" placeholder="Enter Your Comment Here" data-validation="required"></textarea>
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
                        <div class="col-lg-4 mob-display-none">
                           <h4>Package Includes</h4>
                           <ul>
                              <li><i class="fa fa-check-circle"></i>8 Custom Logo Design Concepts</li>
                              <li><i class="fa fa-check-circle"></i>4 Dedicated Logo Designers</li>
                              <li><i class="fa fa-check-circle"></i>Unlimited Rounds of Revisions</li>
                              <li><i class="fa fa-check-circle"></i>Vector Image &amp; 8 File Formats</li>
                              <li><i class="fa fa-check-circle"></i>48 Hours Turn Around Time</li>
                              <li><i class="fa fa-check-circle"></i>100% Satisfaction Guarantee</li>
                              
                              <li><i class="fa fa-check-circle"></i>Dedicated Account Manager</li>
                           </ul>
                        </div>
                     </div>
                     <img class="element element-22 lazy" src="public/assets/website/images/element-22.webp"  alt="*">
                     <img class="element element-23 lazy" src="assets/img/element-14.png"  alt="*">
                     <img class="element element-24 lazy" src="public/assets/website/images/element-11.png"  alt="*">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright-sec">
         <div class="container">
            <div class="copyright-box">
               <p>© copyright 2023 Uk agency all rights reserved</p>
            </div>
         </div>
      </div>
      <a href="<?php echo $phone_link ?>" class="callusnow"><i class="fa fa-phone"></i></a>
      <a href="javascript:$zopim.livechat.window.show();" target="_self" class="callusnow chat"><i class="fa fa-comment"></i></a>
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
                     <form class="cmxform offr-frm has-validation-callback"  method="POST" action="mail.php" novalidate="novalidate">
                     <input type="hidden" class="pkg_nme" name="package">
                     <input type="hidden" name="link" value="<?php echo $link ?>">
                       <div class="row">
                           <div class="col-md-12 first">
                              <div class="fldset">
                                 <label>Your Name</label>
                                 <input id="username" required name="name" minlength="2" type="text" placeholder="Enter your name *" required />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="fldset">
                                 <label>Your Email</label>
                                 <input id="cemail" type="email" required name="email" placeholder="Enter email here *" required>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="fldset">
                                 <label>Your Number</label>
                                 <input name="phone" id="phone-coun" required required="" type="text" minlength="10" maxlength="10" autocomplete="off" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" placeholder="Phone Number">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="fldset">
                                 <label>Your Message</label>
                                 <textarea name="msg" required id="" rows="7" placeholder="Talk About Your Project"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="fldset">
                                 <div id="formResult" class="slideformResult"></div>
                                 <input name="submit" class="pkg_btn" data-sku="let's Get Started ~ Avail Now" type="submit" value="Connect With Us" required />
                              </div>
                              
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="public/assets/website/js/plugin.js"></script>
      <script src="public/assets/website/js/form_validator.min.js"></script>
      <script src="public/assets/website/js/custom.js"></script>

      <style>
         .customalert{
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
         $(document).load(function(){
            $("#search_input").focus();
         });
         
         document.addEventListener('DOMContentLoaded', () => {
         Array.prototype.slice.call(document.querySelectorAll('input'))
            .filter((el) => el.hasAttribute('autofocus'))[0]
            .focus()
      })
  

	</script>
      <script>
// var dtm = window.parent.document.createElement('script'); dtm.type="text/javascript"; dtm.id = 'ze-snippet'; dtm.src='https://static.zdassets.com/ekr/snippet.js?key=576f10a8-8790-4dbb-afaa-b74e41bb6466'; var d = window.parent.document.getElementsByTagName('head')[0]; d.appendChild(dtm); var dtmf = window.parent.document.createElement('script'); dtmf.type="text/javascript"; dtmf.id = '_adobe_dtm_script_footer_tag'; dtmf.text='_satellite.pageBottom();'; var bd = window.parent.document.getElementsByTagName('body')[0]; bd.appendChild(dtmf);
	
// 	 window.onload = function(){
//        setTimeout(function(){
//           setButtonURL();
//        }, 0);
//     };

//     function setButtonURL() {
//         $zopim.livechat.window.show();
//     }
//     function toggleChat() {
//         $zopim.livechat.window.show();
//     }

// window.$zopim||function(a,d){
// var b=$zopim=function(a){b._.push(a)},c=b.s=a.createElement(d);
// a=a.getElementsByTagName(d)[0];
// b.set=function(a){b.set._.push(a)};b._=[];b.set._=[];c.async=!0;c.setAttribute("charset","utf-8");c.src="";b.t=+new Date;c.type="text/javascript";a.parentNode.insertBefore(c,a)}
// (document,"script");

$zopim(function(){function a(a){1<=a&&$zopim.livechat.window.show()}$zopim.livechat.setOnUnreadMsgs(a)});

</script>

   </body>
 </html>
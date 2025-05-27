<!DOCTYPE html>
<html>

<head>

   <title>Logo Visoneer</title>
   <link rel="icon" type="image/x-icon" href="assets/img/logo-fav.webp" />
   <meta name="description" content="">
<meta name="robots" content="index, follow">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link rel="stylesheet" type="text/css" href="public/assets/website/css/plugin.css">
   <link href="../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="assets/js/animate.min.html">
   <link rel="stylesheet" type="text/css" href="public/assets/website/css/custom.css">
   <link rel="stylesheet" type="text/css" href="public/assets/website/css/responsive.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-NTFQC6SRSB"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-NTFQC6SRSB');
   </script>
   <meta name="google-site-verification" content="xosc_tWd3OIVH4-4XNbhLX-YtvO6hO9Qo96ypWn2JGM" />

   <!-- Google Tag Manager -->
   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NWPH3B5Q');
   </script>
   <!-- End Google Tag Manager -->
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16834965503"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'AW-16834965503');
   </script>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWPH3B5Q"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <!-- Meta Pixel Code -->
   <script>
      function(f, b, e, v, n, t, s) {
         if (f.fbq) return;
         n = f.fbq = function() {
            n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
         };
         if (!f._fbq) f._fbq = n;
         n.push = n;
         n.loaded = !0;
         n.version = '2.0';
         n.queue = [];
         t = b.createElement(e);
         t.async = !0;
         t.src = v;
         s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
         'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '654054000522202');
      fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=654054000522202&ev=PageView&noscript=1" /></noscript>
   <!-- End Meta Pixel Code -->
    
   <script src="https://www.google.com/recaptcha/api.js?render=6Lfkt8YqAAAAABwqs-pB-bMmJmYt5NvTQn_DLtBb"></script>



   <?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


</head>

<body>
   <?php include 'assets/layout/config.php' ?>

   <!--data-aos="fade-down"-->
   <header class="" data-aos-duration="0">
      <div class="container">
         <div class="top-info-box">
            <div class="contact-box">
               <img src="public/assets/website/images/contact-img-1.png" alt="" class="img-fluid" />
               <a href="<?php echo $email_link ?> "><?php echo $email ?></a>
            </div>
            <div class="contact-box">
               <img src="public/assets/website/images/contact-img-2.png" alt="" class="img-fluid" />
               <a href="<?php echo $phone_link ?>"><?php echo $phone ?></a>
            </div>
            <div class="contact-box">
               <img src="public/assets/website/images/chat-img-1.png" alt="" class="img-fluid" />
               <a href="javascript:toggleTawkChat();" class="chatt">Live Chat</a>
            </div>
         </div>
         <div class="navbar-box">
            <a href="index.php"><img src="assets/img/logo-anim.webp" alt="" class="logo img-fluid" /></a>
            <div class="nav-list-box">
               <ul>
                  <li><a href="index.php">home</a></li>
                  <li><a href="about-us.php">about us</a></li>
                  <!-- <li><a href="portfolio.php">portfolio</a></li> -->

                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                     <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                        <div class="row no-gutters">
                           <div class="col-md-3">
                              <a class="dropdown-item" href="logo-design.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/system-icon.gif" alt="" class="img-fluid" />
                                    <b>logo design</b>
                                    <p>Get a logo that defines <br /> who you are</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="branding.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/branding.gif" alt="" class="img-fluid" />
                                    <b>branding</b>
                                    <p>effective and strategized <br /> branding</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="web-development.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/development.gif" alt="" class="img-fluid" />
                                    <b>web development</b>
                                    <p>get a website that <br /> increases conversion</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="e-commerce.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/e-commerce.gif" alt="" class="img-fluid" />
                                    <b>E-Commerce</b>
                                    <p>sell your products in the <br /> best way possible</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="video-animation.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/animation.gif" alt="" class="img-fluid" />
                                    <b>video animation</b>
                                    <p>animation that delivers <br /> your message</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="social-media-marketing.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/social-media.gif" alt="" class="img-fluid" />
                                    <b>social media marketing</b>
                                    <p>get your brand noticed <br /> around various</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="content-writing.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/content.gif" alt="" class="img-fluid" />
                                    <b>content writing</b>
                                    <p>professional content that <br /> boosts your roi</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="seo-services.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/seo.gif" alt="" class="img-fluid" />
                                    <b>SEO</b>
                                    <p>get the top spot on <br /> search engine ranking</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="website-designing.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/web-design.gif" alt="" class="img-fluid" />
                                    <b>web design </b>
                                    <p>Get a website that<br /> showcases who you are.</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="Website-maintenance.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/web-main.gif" alt="" class="img-fluid" />
                                    <b>Website maintenance </b>
                                    <p>Keep your website<br /> running strong</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="mobile-apps-development.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/mobile-app.gif" alt="" class="img-fluid" />
                                    <b>Mobile Apps
                                    </b>
                                    <p>Get a mobile app that<br /> moves with you.</p>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="shopify-development.php">
                                 <div class="mega-links-box">
                                    <img src="public/assets/website/images/shopify-development.gif" alt="" class="img-fluid" />
                                    <b>Shopify Development
                                    </b>
                                    <p>Get a Shopify store <br />that sells for you.</p>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li><a href="pricing.php">pricing</a></li>
                  <li><a href="combo-packages.php">combo packages</a></li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">portfolio</a>
                     <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                        <div class="row no-gutters">
                           <div class="col-md-3">
                              <a class="dropdown-item" href="plogo.php">
                                 <div class="mega-links-box">
                                    <b>logo</b>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="pweb.php">
                                 <div class="mega-links-box">
                                    <b>Website</b>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="pbranding.php">
                                 <div class="mega-links-box">
                                    <b>Branding</b>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="pecommerce.php">
                                 <div class="mega-links-box">
                                    <b>Ecommerce</b>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="pvideoanimation.php">
                                 <div class="mega-links-box">
                                    <b>Video Animation</b>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a class="dropdown-item" href="psocial.php">
                                 <div class="mega-links-box">
                                    <b>Social Media Marketing</b>
                                 </div>
                              </a>
                           </div>

                        </div>
                     </div>
                  </li>
                  <li><a href="contact-us.php">contact us</a></li>
               </ul>
               <button class="pkg_btn btn btn-qoute" data-sku="Request a quote" data-toggle="modal" data-target="#req_qoute">request a quote</button>
            </div>
            <div class="toggle-box d-lg-none">
               <span onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </div>
            <div id="mySidenav" class="sidenav d-lg-none">
               <a href="index.php" class=" m-logo-img"><img src="public/assets/website/images/logo.webp" alt="" class="img-fluid" /></a>
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="index.php">Home</a>
               <a href="about-us.php">about us</a>
               <a class="dropdown-btn">Services
                  <i class="fa fa-caret-down"></i>
               </a>
               <div class="dropdown-container" style="display: none;">
                  <a href="logo-design.php">Logo design</a>
                  <a href="branding.php">Branding</a>
                  <a href="web-development.php">Web development</a>
                  <a href="e-commerce.php">e-Commerce</a>
                  <a href="video-animation.php">Video animation</a>
                  <a href="social-media-marketing.php">Social marketing</a>
                  <a href="content-writing.php">Content writing</a>
                  <a href="seo-services.php">SEO</a>
                  <a href="website-designing.php">web design</a>
                  <a href="Website-maintenance.php">Website maintenance</a>
                  <a href="mobile-apps-development.php">Mobile Apps</a>
                  <a href="shopify-development.php">Shopify Development</a>


                  
               </div>
               <a href="portfolio.php">portfolio</a>
               <a href="pricing.php">pricing</a>
               <a href="combo-packages.php">combo packages</a>
               <a href="contact-us.php">contact us</a>
               <div class="top-info-box">
                  <div class="contact-box">
                     <img src="public/assets/website/images/contact-img-1.png" alt="" class="img-fluid" />
                     <a href="<?php echo $email_link ?> "><?php echo $email ?></a>
                  </div>
                  <div class="contact-box">
                     <img src="public/assets/website/images/contact-img-2.png" alt="" class="img-fluid" />
                     <a href="<?php echo $phone_link ?>"><?php echo $phone ?></a>
                  </div>
                  <div class="contact-box">
                     <img src="public/assets/website/images/chat-img-1.png" alt="" class="img-fluid" />
                     <a href="javascript:toggleTawkChat();" class="chatt">Live Chat</a>
                  </div>
               </div>
            </div>
         </div>
   </header>


   <!-- Tawk.to Script -->
   <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
         Tawk_LoadStart = new Date();
      (function() {
         var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
         s1.async = true;
         s1.src = 'https://embed.tawk.to/6790b4793a8427326072d5b8/1ii6k1v22';
         s1.charset = 'UTF-8';
         s1.setAttribute('crossorigin', '*');
         s0.parentNode.insertBefore(s1, s0);
      })();
   </script>

   <!-- Function to Toggle Tawk.to Chat -->
   <script>
      function toggleTawkChat() {
         if (typeof Tawk_API !== 'undefined') {
            Tawk_API.toggle(); // Toggles the Tawk.to chat window
         } else {
            console.error('Tawk.to API not initialized yet.');
         }
      }
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

      // $zopim(function(){function a(a){1<=a&&$zopim.livechat.window.show()}$zopim.livechat.setOnUnreadMsgs(a)});
   </script>
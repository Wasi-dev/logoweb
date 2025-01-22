<?php include 'assets/layout/header.php' ?>

            <section class="banner-sec about-banner-sec contact-banner-sec">
         <div class="header-slider banner-txt-box">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12">
                     <div class="anim-banner-txt" data-aos="fade-right" data-aos-duration="2000">
                        <h1>contact us</h1>
                        <h2>Get in Touch with the Reliable Digital Marketing Agency</h2>
                        <a href="javascript:void(0);" class="btn btn-request" data-toggle="modal" data-target="#req_qoute">Request a Qoute</a>
                        <a href="javascript:toggleTawkChat();" class="btn btn-live chatt">
                           <!-- <img src="images/contact-img-3.png" alt="" class="img-fluid" /> -->
                           <i class='fas fa-comment'></i>
                           Live Chat
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="contact-img-box" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="public/assets/website/images/contact-banner-img.png" alt="" class="img-fluid" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'assets/layout/get-in-touch.php' ?>

<section class="contact-us-sec">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="contact-left-box" data-aos="fade-right" data-aos-duration="2000">
                <h3>contact us</h3>
                <h4>Let's write your <br /> story, together.</h4>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="contact-right-box" data-aos="fade-left" data-aos-duration="2000">
                <p>We do not tell you our story. We write it together. Partnering with us means a seat at the table where you will be heard.</p>
                <div class="contact-bottom-info-box">
                <a href="contact-us.php" class="btn btn-ctn">contact us</a>
                <a href="<?php echo $phone_link ?>" class="btn-tel">
                    <img class="lazy img-fluid" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/img/second-comtact-img-1.png" alt="">
                    <div class="second-con-box">
                        <h5>call us at</h5>
                        <p><?php echo $phone ?></p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include 'assets/layout/footer.php' ?>

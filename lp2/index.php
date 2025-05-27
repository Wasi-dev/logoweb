<!DOCTYPE html>
<html lang="en">

<head>
 <meta name="robots" content="noindex">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link rel="icon" type="image/x-icon" href="assets/images/logo-fav.webp" />
  <link rel="stylesheet" href="assets/css/normalize.min.css">
  <link rel='stylesheet' href='assets/css/slick.css'>
  <link rel='stylesheet' href='assets/css/slick-theme.css'>
  <link rel="stylesheet" href="assets/css/style-slider.css">
  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="assets/css/all.css">
  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <meta name="facebook-domain-verification" content="1ub27g3s14qe9zwi5i5m34ivdtvbfy" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&amp;display=swap" rel="stylesheet">
  <link rel="preload" href="assets/css/style.css" as="style">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome 6 CDN (Loads All Icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js?render=6Lfkt8YqAAAAABwqs-pB-bMmJmYt5NvTQn_DLtBb"></script>
  <?php include '../assets/layout/config.php' ?>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16834965503"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16834965503'); </script>
  <?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

  <style>
    .alert-success {
      background: #9100d7;
      color: #ffffff;
      font-size: 12px;
      font-family: 'Poppins' !important;
    }

    body .flipBtn .flip a .front,
    body .flipBtn .flip a .back {
      width: 195px;
    }

    body ul.menu li.flip:last-child {
      width: 195px;
    }

    body .flipBtn ul.menu {
      margin-right: 10px;
    }

    .main-header .row.align-items-center .col-md-5.text-right.flipBtn {
      padding: 0;
    }

    .whatsapp-callto-action {
      position: fixed;
      left: 4%;
      bottom: 2%;
      background: #25d366;
      color: #fff;
      border-radius: 50px;
      padding: 10px 15px;
      cursor: pointer;
      box-shadow: 0 0 0 rgb(204 169 44 / 40%);
      animation: pulse 2s infinite;
      z-index: 999;
    }
  </style>


</head>

<body>
  <header id="dynamic">
    <div class="main-header">
      <div class="container">
        <div class="menu-Bar">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="row align-items-center">
          <div class="col-md-4 text-left">
            <a href="index.html" class="logo">
              <img class="blacklogo" src="assets/images/logo.png" alt="">
            </a>
          </div>

          <div class="col-md-8 text-right flipBtn">
            <ul class="menu">
              <li class="flip">
                <a href="<?php echo $phone_link ?>"">
                  <div class=" front"><span class="fas fa-phone"></span><?php echo $phone ?>
          </div>
          <div class="back"><span class="fas fa-phone"></span><?php echo $phone ?></div>
          </a>
          </li>
          </ul>
          <ul class="menu">
            <li class="flip">

              <a href="#" class=" sidecontact1" data-toggle="modal" data-target="#staticBackdrop"
                data-sku="Get A Quote">
                <div class="front">get a quote</div>
                <div class="back">get a quote</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main>
    <style>
      .satisfiedCustomer {
        padding: 190px 0 0 !important;
        position: relative;
        z-index: 9;
      }

      .sec-new-packages .main-packages-area .view-main-tab .packages-slider .packages-card .cont-ul {
        justify-content: space-between;
      }
    </style>
    <style>
      #portFolio img {
        box-shadow: 0 0 5px #ccc;
        width: 100%;
      }

      #portFolio .tab-pane .col-md-3 {
        padding: 0 5px;
      }

      #portFolio .nav-tabs {
        display: inline-flex;
      }

      .packagesSec .nav-tabs {
        border: none;
        padding: 5px 0;
        justify-content: center;

      }

      #portFolio .nav-tabs li .nav-link {
        padding: 10px 15px;
        font-size: 12px;
      }

      .packagesSec {
        padding: 0 0 90px;
      }

      #portFolio {
        padding: 0px 0 90px;
      }

      .m7-h h5 {
        text-align: center !important;
      }

      .porfolioEffect {
        height: 400px;
        overflow: hidden;
        background-size: cover;
        border-radius: 10px;
      }

      .porfolioEffect:hover {
        background-position: 100% 100%;
        transition: 6s !important;
        transform: none;
      }
    </style>
    <div class="banner">
      <div class="banner_after">
        <img src="assets/images/banner-right.webp" alt="loading image...">
      </div>
      <div class="container banner-sec">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-6">
            <div class="banner_left">
              <p class="first-head"> <b> Stop Losing Customers!</b></p>
              <h1>

                Hire a website development company in USA

              </h1>
              <!-- <p>That delivers 30% increased lead generation</p>
              <p>What Will You Get If You Hire Us
              </p> -->
              <ul>
                <li>Your stunning website will generate leads and sales.</li>
                <li>Your newly built website will function flawlessly across all smartphones and tablets.</li>
                <li>You will pay affordable charges for your website design and development services.</li>
                <li>Your website will rank on Google and Bing with the help of our expert website developer and designer.</li>
                <li>You will work with dedicated website developers and designers who have completed over 300+ projects in USA.</li>
              </ul>
              <div class="combo_btn">
                <a href="javascript:void(Tawk_API.toggle())" class="btn btn_2 chat mob_none">Live
                  Chat</a>
                <a href="<?php echo $phone_link ?>"" class=" btn btn_1 new_glow_btn desk_none"><?php echo $phone ?>
                  &nbsp; <i class="fa-solid fa-phone-volume"></i></a>
              </div>
              <p>

                <a target="blank" href="">
                  <span class="first">Refer Us</span> and Get Up To <span class="second">$500</span>
                  As
                  Bonus!
                </a>
              </p>
              <img class="banner-badges" src="assets/images/banner-badges.webp" alt="loading image...">
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="banner_right">
              <div class="form">
                <img class="icon icon_1" src="assets/images/form-discount.webp" alt="loading image...">
                <img class="icon icon_2" src="assets/images/form-angle.webp" alt="loading image...">
                <img class="icon icon_3" src="assets/images/form-ball.webp" alt="loading image...">
                <img class="icon icon_4" src="assets/images/form-boxes.webp" alt="loading image...">
                <span>Bumper Offer on Web Design</span>
                <h3> For Small Business 50% OFF </h3>
                <form action="mail.php" method="post">
                  <input type="hidden" class="pkg_nme" name="package" value="Avail 50% discount Today! ">
                  <input type="hidden" name="link" value="<?php echo $link; ?>">
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="control_group user">
                        <input type="text" name="name" placeholder="Your Name*" required>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <div class="control_group email">
                        <input type="email" name="email" placeholder="Your Email*" required>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <div class="control_group phone">
                        <input type="phone" name="phone" id="phone" placeholder="Phone Number*" required>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <div class="control_group message">
                        <textarea name="msg" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <button class="btn btn_2" type="submit">Get a Free Consultation</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section2">
      <div class="section2_wrap">
        <ul>
          <li><img loading="lazy" src="assets/images/skills-badges.png" alt="loading image..."></li>
          <li><img loading="lazy" src="assets/images/skills-badges.png" alt="loading image..."></li>
          <li><img loading="lazy" src="assets/images/skills-badges.png" alt="loading image..."></li>
        </ul>
      </div>
    </div>

    <section class="sec-home-down">


      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="home-down-img" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="5s"
              data-aos-offset="200" data-aos-duration="1000">
              <img src="assets/images/home-down-img.png" class="img-fluid thumb" alt="">
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="home-down-desc" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="10s"
              data-aos-offset="200" data-aos-duration="1100">
              <h6 class="s-head">Big Impact, Small Business Websites. Period.</h6>
              <p class="s-para">Paragraph: A strong website is your business's digital storefront. We provide full service website development, ensuring seamless user experiences that drive growth.
              </p>

              <div class="card dn-card">
                <div class="img iconbox1">
                </div>

                <div class="dn-desc">
                  <h6 class="head">Mobile-First Responsive Design</h6>
                  <p class="para">We guarantee your website provides a flawless experience across all devices, ensuring accessibility and engagement for every user by hiring the best website developer services.
                  </p>
                </div>
              </div>

              <div class="card dn-card">
                <div class="img iconbox2">
                </div>

                <div class="dn-desc">
                  <h6 class="head">Enhanced Search Engine Visibility</h6>
                  <p class="para">Our SEO strategies ensure your website ranks highly on search engines, driving organic traffic and increasing your online presence by choosing a professional website development service provider.
                  </p>
                </div>
              </div>

              <div class="card dn-card">
                <div class="img iconbox3">
                </div>

                <div class="dn-desc">
                  <h6 class="head">Budget-Friendly, Custom Design Solutions</h6>
                  <p class="para">Our web development company crafts unique, visually appealing websites customized to your brand, offering bespoke designs without breaking the bank, proving that top quality doesn't have to mean top-dollar.
                  </p>
                </div>
              </div>
              <div class="fold_two_button">
                <ul>
                  <li><a class="pkg_btn" data-toggle="modal" data-target="#staticBackdrop" data-sku="Let's Get Started">Let's Get Started</a></li>
                  <li><a href="javascript:;" onclick="javascript:void(Tawk_API.toggle())">Let's Chat</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="packagesSec" id="portFolio">
      <div class="container text-center">
        <div class="col-12">
          <div class="m7-h text-center">
            <h5>Our Portfolio</h5>
          </div>
          <div class="m2-h">
            <h5> Explore Our Stunning Website Design & Development Work</h5>
          </div>
          <div class="p4">
            <p>
              We are a website development firm in the United States, committed to facilitating effective digital transformation for all types of businesses.
            </p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row align-items-center pad-15">
          <div class="col-md-12 mt-50">
            <div class="container text-center">
              <ul class="nav nav-tabs tabs1" id="myTab14" role="tablist">
                <div class="selector1"></div>
                <li class="nav-item">
                  <a class="nav-link active" id="portWebsite-tab" data-toggle="tab" href="#portWebsite" role="tab"
                    aria-controls="portWebsite" aria-selected="false">Web Design</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="portlogo-tab" data-toggle="tab" href="#portlogo" role="tab"
                    aria-controls="portlogo" aria-selected="true">E-Commerce</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="portmotion-tab" data-toggle="tab" href="#portmotion" role="tab"
                    aria-controls="portmotion" aria-selected="false">Fashion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="portstationery-tab" data-toggle="tab" href="#portstationery" role="tab"
                    aria-controls="portstationery" aria-selected="false">Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Cannbis-tab" data-toggle="tab" href="#Cannbis" role="tab"
                    aria-controls="Cannbis" aria-selected="false">Cannabis</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Insurance-tab" data-toggle="tab" href="#Insurance" role="tab"
                    aria-controls="Insurance" aria-selected="false">Insurance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Medical-tab" data-toggle="tab" href="#Medical" role="tab"
                    aria-controls="Medical" aria-selected="false">Medical</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="NFT-tab" data-toggle="tab" href="#NFT" role="tab" aria-controls="NFT"
                    aria-selected="false">NFT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Real-Estate-tab" data-toggle="tab" href="#Real-Estate" role="tab"
                    aria-controls="Real-Estate" aria-selected="false">Real Estate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Automotive-tab" data-toggle="tab" href="#Automotive" role="tab"
                    aria-controls="Automotive" aria-selected="false">Automotive</a>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent12">
              <div class="tab-pane fade show active" id="portWebsite" role="tabpanel" aria-labelledby="portWebsite-tab">

                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/01-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/02-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/03-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/04-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/05-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/06-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/07-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/08-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/09-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/10-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/10.webp" alt=""
                          class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/11-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/11.webp" alt=""
                          class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/website-development/12-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/website-development/12.webp" alt=""
                          class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>


              </div>
              <div class="tab-pane fade" id="portlogo" role="tabpanel" aria-labelledby="portlogo-tab">
                <div class="row">

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/01-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/01.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/02-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/02.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/03-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/03.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/04-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/04.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/05-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/05.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/06-large.html" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/06.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/07-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/07.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/08-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/08.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/09-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/09.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/10-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/11-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/ecommerce/12-large.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/ecommerce/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="portmotion" role="tabpanel" aria-labelledby="portmotion-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/fashion/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/fashion/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="portstationery" role="tabpanel" aria-labelledby="portstationery-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-08.webp" data-fancybox="gallery">
                        <img src="assets/images/portfolio/food/8.webp" alt="" class="imgFluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/food/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/food/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="Cannbis" role="tabpanel" aria-labelledby="Cannbis-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-05.webp" data-fancybox="gallery">
                        <img src="assets/images/portfolio/cannabis/5.webp" alt="" class="imgFluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/cannabis/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/cannabis/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Insurance" role="tabpanel" aria-labelledby="Insurance-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/Insurance/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/Insurance/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Medical" role="tabpanel" aria-labelledby="Medical-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/medical/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/medical/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="NFT" role="tabpanel" aria-labelledby="NFT-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/nft/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/nft/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Real-Estate" role="tabpanel" aria-labelledby="Real-Estate-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/1.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/2.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/3.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/4.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/5.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/6.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/7.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/8.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-09.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/9.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/real-estate/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/real-estate/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Automotive" role="tabpanel" aria-labelledby="Automotive-tab">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-01.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/01.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-02.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/02.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-03.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/03.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/04.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-05.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/05.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-06.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/06.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-07.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/07.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-08.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/08.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-04.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/04.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-10.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/10.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-11.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/11.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="portfolio_imgThumbnail">
                      <a href="assets/images/portfolio/automotive/large-12.webp" data-fancybox="gallery">
                        <img data-src="assets/images/portfolio/automotive/12.webp" alt="" class="imgFluid lazy">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container text-dark">

        <div class="row" style="position: relative; z-index: 10; align-items: center;">

          <div class="col-md-12 col-sm-12">
            <div class="textOfSection3">
              <div class="topParaOfSec3">
                <p class="text-grey text-uppercase let-space-2 font-w600 pricingtext">Website Design packages</p>
              </div>
              <hr class="line-bot-green-225 bg-blue-new font-w900">
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="row">
              <p class="text-secondary font-w300 line-height-32 font-22 p-5">From basic to advanced, our packages empower your business. Avail our website builder packages for small businesses without breaking the bank.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Basic <br> Website
                <img data-src="assets/images/5. Star.webp" alt="Book" class="package-svg lazy">
              </p>
              <p class="font-13 text-grey">Suitable for static based landing pages.</p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$199.00</span>
                <span class="text-dec-line-thro text-red font-24">$650</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before"><span>3 Page Website</span></li>
                  <li class="dot-before"><span>2 Stock Images</span></li>
                  <li class="dot-before"><span>1 jQuery Slider Banner</span></li>
                  <li class="dot-before"><span>Contact/Query Form</span></li>
                  <li class="dot-before"><span>48 to 72 hours TAT</span></li>
                  <li class="dot-before"><span>Complete Deployment</span></li>
                  <li class="dot-before"><span>100% Satisfaction Guarantee</span></li>
                  <li class="dot-before"><span>100% Unique Design Guarantee</span></li>
                  <li class="dot-before"><span>100% Money Back Guarantee *</span></li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5" data-sku="Basic Website Package ~ $199"
                data-toggle="modal" data-target="#staticBackdrop">Order Now<i
                  class="fa fa-arrow-right pl-3"></i></button>
              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Startup <br> Website
                <img data-src="assets/images/53. Like.webp" alt="Book" class="package-svg lazy">
              </p>
              <p class="font-13 text-grey">Suitable for basic startups looking to take it one step at a time.</p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$499.00</span>
                <span class="text-dec-line-thro text-red font-24">$1330</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before"><span>5 Page Website</span></li>
                  <li class="dot-before"><span>5 Stock Photos</span></li>
                  <li class="dot-before"><span>3 Banner Design</span></li>
                  <li class="dot-before"><span>1 jQuery Slider Banner</span></li>
                  <li class="dot-before"><span>FREE Google Friendly Sitemap</span></li>
                  <li class="dot-before"><span>Complete W3C Certified HTML</span></li>
                  <li class="dot-before"><span>48 to 72 hours TAT</span></li>
                  <li class="dot-before"><span>100% Satisfaction Guarantee</span></li>
                  <li class="dot-before"><span>100% Unique Design Guarantee</span></li>
                  <li class="dot-before"><span>100% Money Back Guarantee *</span></li>
                  <li class="dot-before"><span>Mobile Responsive will be Additional $200*</span></li>
                  <li class="dot-before"><span>CMS will be Additional $250*</span></li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5" data-sku="Startup Website Package ~ $499"
                data-toggle="modal" data-target="#staticBackdrop">Order Now<i
                  class="fa fa-arrow-right pl-3"></i></button>
              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Professional <br> Website
                <img data-src="assets/images/36. Burger Menu.webp" alt="Book" class="package-svg lazy">
              </p>
              <p class="font-13 text-grey">Suitable for potential startups and basic revamps for small companies.</p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$799.00</span>
                <span class="text-dec-line-thro text-red font-24">$2663</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before"><span> 10 Unique Pages Website</span></li>
                  <li class="dot-before"><span> CMS / Admin Panel Support</span></li>
                  <li class="dot-before"><span> 8 Stock images</span></li>
                  <li class="dot-before"><span> 5 Banner Designs</span></li>
                  <li class="dot-before"><span> Mobile Responsive</span></li>
                  <li class="dot-before"><span> 1 jQuery Slider Banner</span></li>
                  <li class="dot-before"><span> FREE Google Friendly Sitemap</span></li>
                  <li class="dot-before"><span> Complete W3C Certified HTML</span></li>
                  <li class="dot-before"><span> 48 to 72 hours TAT</span></li>
                  <li class="dot-before"><span> Complete Deployment</span></li>
                  <li class="dot-before"><span> 100% Satisfaction Guarantee</span></li>
                  <li class="dot-before"><span> 100% Unique Design Guarantee</span></li>
                  <li class="dot-before"><span> 100% Money Back Guarantee *</span></li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5"
                data-sku="Professional Website Package ~ $799" data-toggle="modal" data-target="#staticBackdrop">Order
                Now<i class="fa fa-arrow-right pl-3"></i></button>

              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Business <br> Website
                <img data-src="assets/images/30. Palette.webp" alt="Book" class="package-svg lazy">
              </p>
              <p class="font-13 text-grey">Suitable for strong startups that are looking to build a unique brand
                identity</p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$1199</span>
                <span class="text-dec-line-thro text-red font-24">$3997</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before">Upto 15 Unique Pages Website</li>
                  <li class="dot-before">Conceptual and Dynamic Website</li>
                  <li class="dot-before">Mobile Responsive</li>
                  <li class="dot-before">Online Reservation/Appointment Tool (Optional)</li>
                  <li class="dot-before">Online Payment Integration (Optional)</li>
                  <li class="dot-before">Custom Forms</li>
                  <li class="dot-before">Lead Capturing Forms (Optional)</li>
                  <li class="dot-before">Striking Hover Effects</li>
                  <li class="dot-before">Newsletter Subscription (Optional)</li>
                  <li class="dot-before">Newsfeed Integration</li>
                  <li class="dot-before">Social Media Integration</li>
                  <li class="dot-before">Search Engine Submission</li>
                  <li class="dot-before">5 Stock Photos</li>
                  <li class="dot-before">3 Unique Banner Design</li>
                  <li class="dot-before">1 jQuery Slider Banner</li>
                  <li class="dot-before"> Complete W3C Certified HTML</li>
                  <li class="dot-before">48 to 72 hours TAT</li>
                  <li class="dot-before">Complete Deployment</li>
                  <li class="dot-before">100% Satisfaction Guarantee</li>
                  <li class="dot-before">100% Unique Design Guarantee</li>
                  <li class="dot-before">100% Money Back Guarantee *</li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5" data-sku="Business Website Package ~ $1199"
                data-toggle="modal" data-target="#staticBackdrop">Order Now<i
                  class="fa fa-arrow-right pl-3"></i></button>

              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Corporate <br> Website
                <img data-src="assets/images/32. Bullhorn.webp" alt="Book" class="package-svg lazy">
              </p>
              <p class="font-13 text-grey">Suitable for mid sized startups who are looking to work with a strong R&amp;D
              </p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$1799.00</span>
                <span class="text-dec-line-thro text-red font-24">$5997</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before">15 to 20 Pages Website</li>
                  <li class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</li>
                  <li class="dot-before">Custom WP (or) Custom PHP Development</li>
                  <li class="dot-before">1 jQuery Slider Banner</li>
                  <li class="dot-before">Up to 10 Custom Made Banner Designs</li>
                  <li class="dot-before">10 Stock Images</li>
                  <li class="dot-before">Unlimited Revisions</li>
                  <li class="dot-before">Special Hoover Effects</li>
                  <li class="dot-before">Content Management System (CMS)</li>
                  <li class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                  <li class="dot-before">Online Payment Integration (Optional)</li>
                  <li class="dot-before">Multi Lingual (Optional)</li>
                  <li class="dot-before">Custom Dynamic Forms (Optional)</li>
                  <li class="dot-before">Signup Area (For Newsletters, Offers etc.)</li>
                  <li class="dot-before">Search Bar</li>
                  <li class="dot-before">Live Feeds of Social Networks integration (Optional)</li>
                  <li class="dot-before">Mobile Responsive</li>
                  <li class="dot-before">FREE 5 Years Domain Name</li>
                  <li class="dot-before">Free Google Friendly Sitemap</li>
                  <li class="dot-before">Search Engine Submission</li>
                  <li class="dot-before">Complete W3C Certified HTML</li>
                  <li class="dot-before">Industry Specified Team of Expert Designers and Developers</li>
                  <li class="dot-before">Complete Deployment</li>
                  <li class="dot-before">Dedicated Accounts Manager</li>
                  <li class="dot-before">100% Ownership Rights</li>
                  <li class="dot-before">100% Satisfaction Guarantee</li>
                  <li class="dot-before">100% Unique Design Guarantee</li>
                  <li class="dot-before">100% Money Back Guarantee *</li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5" data-sku="Corporate Website Package ~ $1799"
                data-toggle="modal" data-target="#staticBackdrop">Order Now<i
                  class="fa fa-arrow-right pl-3"></i></button>

              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="myCard2">
              <p class="font-32 font-w800">Elite <br> Website<img data-src="assets/images/13. Target.webp" alt="Book"
                  class="package-svg lazy"></p>

              <p class="font-13 text-grey">Allows live conferencing features and custom client/user dashboards.</p>
              <div class="d-inline-flex align-items-center">
                <span class="price">$2499.00</span>
                <span class="text-dec-line-thro text-red font-24">$8330</span>
              </div>
              <div class="contentScroll">
                <ul>
                  <li class="dot-before">15 to 20 Pages Website</li>
                  <li class="dot-before">15 Seconds 2D Explainer Video</li>
                  <li class="dot-before">Voice - Over &amp; Sound Effects</li>
                  <li class="dot-before">Professional Script Writing</li>
                  <li class="dot-before">Storyboard</li>
                  <li class="dot-before">SEO Meta Tags</li>
                  <li class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</li>
                  <li class="dot-before">Custom WP (or) Custom PHP Development</li>
                  <li class="dot-before">1 jQuery Slider Banner</li>
                  <li class="dot-before">Up to 10 Custom Made Banner Designs</li>
                  <li class="dot-before">10 Stock Images</li>
                  <li class="dot-before">Unlimited Revisions</li>
                  <li class="dot-before">Special Hoover Effects</li>
                  <li class="dot-before">Content Management System (CMS)</li>
                  <li class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                  <li class="dot-before">Online Payment Integration (Optional)</li>
                  <li class="dot-before">Multi Lingual (Optional)</li>
                  <li class="dot-before">Custom Dynamic Forms (Optional)</li>
                  <li class="dot-before">Signup Area (For Newsletters, Offers etc.)</li>
                  <li class="dot-before">Search Bar</li>
                  <li class="dot-before">Live Feeds of Social Networks integration (Optional)</li>
                  <li class="dot-before">Mobile Responsive</li>
                  <li class="dot-before">FREE 5 Years Domain Name</li>
                  <li class="dot-before">Free Google Friendly Sitemap</li>
                  <li class="dot-before">Search Engine Submission</li>
                  <li class="dot-before">Complete W3C Certified HTML</li>
                  <li class="dot-before">Industry Specified Team of Expert Designers and Developers</li>
                  <li class="dot-before">Complete Deployment</li>
                  <li class="dot-before">Dedicated Accounts Manager</li>
                  <li class="dot-before">100% Ownership Rights</li>
                  <li class="dot-before">100% Satisfaction Guarantee</li>
                  <li class="dot-before">100% Unique Design Guarantee</li>
                  <li class="dot-before">100% Money Back Guarantee *</li>
                </ul>
              </div>
              <button type="submit" class="pkg_btn btn btn-yellow m-0 px-5" data-sku="Elite Website Package ~ $2499"
                data-toggle="modal" data-target="#staticBackdrop">Order Now<i
                  class="fa fa-arrow-right pl-3"></i></button>

              <div class="row bot-links">
                <div class="col-md-6 border-right text-center">
                  <div class="text-yellow">Share your idea?</div>
                  <a class="mob" href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                </div>
                <div class=" col-md-6 pl-xl-4 text-center">
                    <div class="text-yellow">Want to Discuss?</div>
                    <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat text-center">Live Chat Now</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <section class="ctabanner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-11 col-lg-12 col-xl-11 col-xxl-11">
            <div class="row align-items-center">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="ctatext">
                  <h3>Stop leaking potential <span>customers! </span></h3>
                  <p>Uncover how our custom website design and development services craft digital experiences that capture leads and convert them into loyal buyers.</p>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="calllsit">
                  <h4>Give Us Call</h4>
                  <a href="<?php echo $phone_link ?>""><?php echo $phone ?></a>
                  <div class=" d-flex marginleft">
                    <a href="#" class="requestbtn pkg_btn" data-toggle="modal" data-target="#staticBackdrop" data-sku="Request A Quote">Request A Quote</a>
                    <a href="javascript:void(Tawk_API.toggle())" class="chatbtn">Live Chat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>


    <section class="clientsec" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="5s"
      data-aos-offset="100" data-aos-duration="800">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="clientext text-center">
              <h3> Real Success Stories, Real Results.</h3>

            </div>

            <div class="clientSlider">
              <div>
                <div class="testbox">
                  <div class="testbody">
                    <img data-src="assets/images/comma.webp" class="img-fluid comma lazy" alt="img">
                    <img data-src="assets/images/test-1b.jpg" class="img-fluid lazy" alt="img">
                    <h5>Mark Cooper</h5>
                    <ul>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    </ul>
                  </div>
                  <div class="testfooter">
                    <p>This is my 3rd project with the company and I have had a wonderful experience with them during
                      every project.</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="testbox">
                  <div class="testbody">
                    <img data-src="assets/images/comma.webp" class="img-fluid comma lazy" alt="img">
                    <img data-src="assets/images/test-1g.webp" class="img-fluid lazy" alt="img">
                    <h5>Tory Nixon</h5>
                    <ul>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    </ul>
                  </div>
                  <div class="testfooter">
                    <p>I am glad to hire Logo Visioneer for my website. Their work is satisfactory. I am glad I hired
                      them.</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="testbox">
                  <div class="testbody">
                    <img data-src="assets/images/comma.webp" class="img-fluid comma lazy" alt="img">
                    <img data-src="assets/images/test-2b.jpg" class="img-fluid testmain lazy" alt="img">
                    <h5>Henry Jones</h5>
                    <ul>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    </ul>
                  </div>
                  <div class="testfooter">
                    <p>Our business has grown significantly online thanks to your help. The best web development
                      service.</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="testbox">
                  <div class="testbody">
                    <img data-src="assets/images/comma.webp" class="img-fluid comma lazy" alt="img">
                    <img data-src="assets/images/test-2g.jpg" class="img-fluid lazy" alt="img">
                    <h5>Rebecca Cole</h5>
                    <ul>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    </ul>
                  </div>
                  <div class="testfooter">
                    <p>Cool work. I am impressed with the results of your hard work. My custom website looks great.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="section-padding clients-section wow">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 iq-features">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="holderCircle">
                  <div class="round"></div>
                  <div class="dotCircle">
                    <span class="itemDot active itemDot1" data-tab="1">
                      <i class="fa-solid fa-lightbulb"></i> <!-- Research -->
                      <span class="forActive"></span>
                    </span>
                    <span class="itemDot itemDot2" data-tab="2">
                      <i class="fas fa-comments mid-position"></i> <!-- Consultation -->
                      <span class="forActive "></span>
                    </span>
                    <span class="itemDot itemDot3" data-tab="3">
                      <i class="fas fa-pencil-alt mid-position"></i> <!-- Revision -->
                      <span class="forActive"></span>
                    </span>
                    <span class="itemDot itemDot4" data-tab="4">
                      <i class="fas fa-paint-brush mid-position"></i> <!-- Design -->
                      <span class="forActive"></span>
                    </span>
                    <span class="itemDot itemDot5" data-tab="5">
                      <i class="fas fa-code mid-position"></i> <!-- Development -->
                      <span class="forActive"></span>
                    </span>
                    <span class="itemDot itemDot6" data-tab="6">
                      <i class="fas fa-rocket mid-position"></i> <!-- Launch -->
                      <span class="forActive"></span>
                    </span>
                  </div>
                  <div class="contentCircle">
                    <div class="CirItem title-box active CirItem1">
                      <h2 class="title"><span>Research</span></h2>
                      <p>
                        You gain insights as we analyze your market, competitors, and target audience to inform your website's design.
                      </p>
                    </div>
                    <div class="CirItem title-box CirItem2">
                      <h2 class="title"><span>Consultation</span></h2>
                      <p>
                        You tell us your goals. We listen, analyze, and craft a strategy customized to your specific needs.
                      </p>
                    </div>
                    <div class="CirItem title-box CirItem3">
                      <h2 class="title"><span>Revision</span></h2>
                      <p>
                        With your feedback, our web site designers refine your website, ensuring it aligns perfectly with your vision and expectations.
                      </p>
                    </div>
                    <div class="CirItem title-box CirItem4">
                      <h2 class="title"><span>Design</span></h2>
                      <p>
                        You can visualize your brand coming to life as we create a user-friendly, visually appealing website customized for your audience.
                      </p>
                    </div>
                    <div class="CirItem title-box CirItem5">
                      <h2 class="title"><span>Development</span></h2>
                      <p>
                        You watch your website take shape as we build a functional, responsive site that delivers a seamless user experience.
                      </p>
                    </div>
                    <div class="CirItem title-box CirItem6">
                      <h2 class="title"><span>Launch</span></h2>
                      <p>
                        You celebrate as we deploy your optimized website, ready to attract customers and drive your business forward.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-12"></div>
            </div>
          </div>
          <div class="col-md-6 iq-features">
            <div class="customH">
              <h5>Long-Term Support</h5>
            </div>
            <div class="m3-h">
              <h5>Lasting Website Success</h5>
            </div>
            <div class="p4">
              <p>
                Your website success is a journey, not a destination. Our post-launch commitment includes continuous monitoring, regular updates, and responsive support. Our web site designers are dedicated to ensuring your website performs optimally, providing the peace of mind that comes from knowing you have a reliable digital partner.</p>
            </div>
            <div class="row">
              <div class="col-md-6 col-6">
                <ul>
                  <li>Consultation</li>
                  <li>Research</li>
                  <li>Mockups</li>
                </ul>
              </div>
              <div class="col-md-6 col-6">
                <ul>
                  <li>Development</li>
                  <li>Revisions</li>
                  <li>Launch</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="btmform">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="txtwrp text-center footer_contact">
            </div>
          </div>
          <div class="col-md-11 d-flex position-relative">
            <div class="sec-left">
              <div class="wrapper">
                <div class="second-sec-cont">
                  <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Ignite Your Online Revenue Engine!</h2>
                  <p class="main-pera">Discover the missing pieces. Claim your free website design analysis with our expert website developer and designer. Complete the form and watch your business soar. </p>
                </div>
                <form class="form-get-quote" action="mail.php" method="post">
                  <input type="hidden" class="pkg_nme" name="package">
                  <input type="hidden" name="link" value="<?php echo $link; ?>">
                  <div class="alert alert-danger error" style="display: none;"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="field">
                        <input type="text" placeholder="Name" name="name" required="">
                      </div>
                      <div class="field">
                        <input type="email" placeholder="Email Address" name="email" required="">
                      </div>

                      <div class="field">
                        <input type="text" class="phoneNum" placeholder="Phone Number" name="phone" required=""
                          inputmode="text">
                      </div>

                      <div class="field">
                        <select name="package" id="package_id" class="package_id">
                          <option value="">I Am Interested In</option>
                          <option value="Logo Design">Logo Design</option>
                          <option value="Website Development">Website Development</option>
                          <option value="Video Animation">Video Animation</option>
                          <option value="E-Commerce">E-Commerce</option>
                          <option value="Branding">Branding</option>
                        </select>
                      </div>
                      <div class="field">
                        <select class="form-select contact-input " aria-label="Default select example " name="budget"
                          required="">
                          <option value="">Select your Budget</option>
                          <option value="Less then $500">Less than $500</option>
                          <option value="$500 - $1000">$500 - $1000</option>
                          <option value="$1000 - $2000">$1000 - $2000 </option>
                          <option value="$2000 - $3000">$2000 - $3000 </option>
                          <option value="Above $3000">Above $3000</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="field-msg">
                        <textarea placeholder="Leave Your Message" name="msg"></textarea>
                      </div>
                      <div class="field-btn">
                        <input type="submit">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="sec-right">
              <div class="ver-cta">
                <div class="box">
                  <p>For any inquiries call now</p>
                  <div class="imgwrp"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <span><?php echo $phone ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container mb-60 z9">
      <div class="row justify-content-between flexRowFooter">
        <div class="col-md-6 col-sm-6">
          <div class="ftr-md1">
            <a href="index-2.html" class="logo">
              <img class="lazy" data-src="assets/images/logo.png" data-src="images/logo.png" alt="logo"
                style="width: 40%;margin-bottom: 30px;">
            </a>
            <p class="footer_text">A professional website design agency in the USA that delivers measurable results for small and medium-sized businesses at affordable rates. </p>
            <ul class="socialIcon" style="z-index:99999;position: relative;">
              <li class="first">
                <a href="https://www.facebook.com/profile.php?id=61572246456892">
                  <span class="fa-brands fa-facebook-f"></span>

                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/logovisioneer/">
                  <span class="fa-brands fa-instagram"></span>
                </a>
              </li>
              <!-- <li class="last">
                <a href="#">
                  <span class="fa-brands fa-twitter"></span>

                </a>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="navwrp">
            <h4>Contact Details</h4>
          </div>
          <ul class="footerLinks emailLinks">
            <li class="first">
              <span class="fa fa-phone"></span>
              <a href="<?php echo $phone_link ?>"">
                <?php echo $phone ?>
              </a>
            </li>
            <li>
              <span class=" fa fa-envelope"></span>

                <a href="<?php echo $email_link ?>"">
                <?php echo $email ?>
              </a>
            </li>
            <li class=" last">
                  <span class="fa fa-map-marker"></span>

                  <a href="javascript:;">
                    <?php echo $address ?> </a>
            </li>

          </ul>
          <div class="m6-h">
            <h5>WE DO ACCEPT</h5>
          </div>

          <div class="payments">
            <img data-src="assets/images/payment.png" class="img-fluid lazy">
          </div>
        </div>
      </div>
    </div>

    <div class="container z9">
      <div class="row copyright">
        <div class="col-md-6 text-left">
          <p>© 2025 Logo Visioneer | All rights reserved. </p>
        </div>
        <div class="col-md-6 text-right">
          <ul class="copyrightLink">
            <li class="first"><a href="https://logovisioneer.com/privacy.php">Privacy Policy</a></li>
            <li class="last"><a href="javascript:;">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="sidebar-contact">
    <div class="toggle"><a href="<?php echo $email_link ?>""></a></div>
    <h2>Request Information</h2>
    <div class=" scroll">
        <form action="mail.php" method="POST" class="form-get-quote">
          <input type="hidden" class="pkg_nme" name="package">
          <input type="hidden" name="link" value="<?php echo $link; ?>">
          <input type="text" name="name" placeholder="Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="rel" id="phone-coun" name="phone" placeholder="Phone Number" required>
          <textarea name="msg" placeholder="Message here.."></textarea>
          <input type="submit" name="requestsubmit" value="send" class="slide-hover-left-1">
        </form>
    </div>
  </div>
  <style>
    .overlay {
      background-color: #000000bd;
      position: fixed;
      top: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      left: 0;
      right: 0;
      z-index: 99;
      display: none;
    }
  </style>
  <div class="overlay"></div>
  <div class="sidebar-contact1">
    <span class="fas fa-times close"></span>
    <div class="toggle1"></div>
    <h2>Avail 50% Discount</h2>
    <div class="scroll">
      <form action="mail.php" method="POST" class="form-get-quote">
        <input type="hidden" class="pkg_nme" name="package" value="Avail 50% Discount Form">
        <input type="hidden" name="link" value="<?php echo $link; ?>">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="rel" name="phone" placeholder="Phone Number" required>
        <textarea name="msg" placeholder="Message here.."></textarea>
        <input type="submit" name="getsubmit" value="send" class="slide-hover-left-1">
      </form>
    </div>
  </div>
  <a href="<?php echo $phone_link ?>"" class=" callSidebtn">
  </a>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header popup-form text-center">
          <h3 class="modal-title">Join Hands With USA's Top Website Designers!</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fal fa-times"></i>
            </span>
          </button>
        </div>
        <div>
          <p class="modal_text">Providing you the perfect solution for your business needs to drive sales and impress
            your clientele. Let's work together to scale your venture to new heights.</p>
        </div>
        <div class="modal-body popup-form">
          <form action="mail.php" method="POST" class="form-get-quote">
            <input type="hidden" class="pkg_nme" name="package">
            <input type="hidden" name="link" value="<?php echo $link; ?>">
            <div class="row align-items-center">
              <div class="col-md-6 popup-feild">
                <input type="text" name="name" required placeholder="Name">
              </div>
              <div class="col-md-6 popup-feild">
                <input type="email" name="email" required placeholder="Email Address">
              </div>
              <div class="col-md-6 popup-feild">
                <input type="tel" name="phone" required placeholder="Contact Number">
              </div>
              <div class="col-md-6 popup-feild">
                <input type="text" name="msg" id="package_field" placeholder="message">
              </div>
              <div class="col-md-12 mt-50 text-center popup-sumit">
                <input type="submit" value="submit" class="slide-hover-left-2">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <style>
    .popup-feild:nth-child(4),
    .popup-feild:nth-child(3) {
      margin: 0 0 30px !important;
    }

    .modal-content {
      background: linear-gradient(to bottom, #B40009, #041265);
      padding: 70px 90px;
    }

    .popup-feild input[type="date"] {
      text-transform: uppercase;
    }
  </style>
  <!-- Modal -->

  <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header popup-form text-center">
          <h3 class="modal-title">Book a call</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fal fa-times"></i>
            </span>
          </button>
        </div>
 
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/mlib.js"></script>
  <script src="assets/js/custom.js" defer></script>
  <script src="assets/js/popper.min.js" defer></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src='assets/js/slick.min.js'></script>
  <script src='assets/js/lazyload.min.js'></script>
  <script>

  </script>
  <script>
    $(function() {
      var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
      });
    });
  </script>
  <script>
    $('.clientSlider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  </script>
  <script>
    new WOW().init();
    function loadZendeskWidget() {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.id = 'ze-snippet';
      script.async = true;
      script.src = 'assets/js/zdassets4168.js?key=576f10a8-8790-4dbb-afaa-b74e41bb6466';
      document.getElementsByTagName('head')[0].appendChild(script);
    };
    $(document).ready(function() {});
  </script>
  <script>
    let i = 2;
    $(document).ready(function() {
      $(document).on("click", ".closed", function() {
        $(this).parents('.flip-card').removeClass('hover');
      });
      var radius = 200;
      var fields = $('.itemDot');
      var container = $('.dotCircle');
      var width = container.width();
      radius = width / 2.5;
      var height = container.height();
      var angle = 0,
        step = (2 * Math.PI) / fields.length;
      fields.each(function() {
        var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
        var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
        $(this).css({
          left: x + 'px',
          top: y + 'px'
        });
        angle += step;
      });
      $('.itemDot').click(function() {
        var dataTab = $(this).data("tab");
        $('.itemDot').removeClass('active');
        $(this).addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + dataTab).addClass('active');
        i = dataTab;
        $('.dotCircle').css({
          "transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
          "transition": "2s"
        });
        $('.itemDot').css({
          "transform": "rotate(" + ((i - 1) * 36) + "deg)",
          "transition": "1s"
        });
      });
      setInterval(function() {
        var dataTab = $('.itemDot.active').data("tab");
        if (dataTab > 6 || i > 6) {
          dataTab = 1;
          i = 1;
        }
        $('.itemDot').removeClass('active');
        $('[data-tab="' + i + '"]').addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + i).addClass('active');
        i++;
        $('.dotCircle').css({
          "transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
          "transition": "2s"
        });
        $('.itemDot').css({
          "transform": "rotate(" + ((i - 2) * 36) + "deg)",
          "transition": "1s"
        });
      }, 3000);
    });
  </script>


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
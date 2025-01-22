<section class="get-in-touch-sec">
   <div class="container">
      <div class="get-in-touch-head">
         <h2>Get In Touch With Us</h2>
         <p>Our friendly call center representatives are always available round the clock for any guidence</p>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4">
            <div class="lets-talk-box">
               <h3>Let’s Talk.</h3>
            </div>
            <div class="call-us-at-box">
               <img src="images/call-us-img-1.html" alt="" class="img-fluid" />
               <div class="call-us-content">
                  <p>call us at</p>
                  <a href="<?php echo $phone_link ?>"><?php echo $phone ?>
                  </a>
               </div>
            </div>
            <div class="call-us-para">
               <p>We are available on live chat! Just ping us and we will take care of it all. </p>
            </div>
            <div class="call-us-at-box border-none">
               <img src="images/call-us-img-2.html" alt="" class="img-fluid" />
               <div class="call-us-content">
                  <p>let's chat now</p>
                  <a href="javascript:toggleTawkChat();" class="chatt">LIVE CHAT</a>
               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-8">
            <div class="get-in-touch-form-box" data-form-type="contact_form">
               <form method="post" enctype="multipart/form-data" class="has-validation-callback" action="mail.php">
                  <input type="hidden" class="pkg_nme" name="package">
                  <input type="hidden" name="link" value="<?php echo $link ?>">
                  <input type="hidden" name="model_type" value="contact us form" data-validation="required">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Full Name *" name="name"
                              data-validation="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Phone *" maxlength="10" name="phone"
                              data-validation="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Email Address *" name="email"
                              data-validation="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea name="msg" id="msg" placeholder="Requirement *" data-validation="required"
                              rows="5"></textarea>
                        </div>
                        <div id="formResult"></div>
                        <div class="clearfix"></div>
                        <button class="pkg_btn  btn btn-submit" data-sku="Contact Form " id="signupBtn">send
                           now</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
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







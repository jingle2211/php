<footer class="footer-block bg-black" style="background-image: url(assets/images/footer-bg.png);">
<div class="pull-right" style="padding:0px;/* padding-top: 289px; */position: relative;right: 2%;bottom: -86px;">
<a href="https://api.whatsapp.com/send?phone=+91-950-445-4903&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." target="_blank" class="floatt" >
<img border="0" alt="whatsapp" src="images/green2-round.png" width="50" height="50"></a>
</div>
<div class="container">
   <!-- footer-top-block -->
   <div class="footer-top-block yellow-theme">            
    <div class="row">
           <div class="col-md-3 col-sm-6">
            <div class="widget widget_about">    
            <h3 class="widget-title"> About us </h3>
            <!-- /.widget-title -->
            <div class="widget-about-content">
            <!--<img src="images/ivs.png" alt="logo" />-->
            <p style="color:#fff;">We want to fill in the gap of the last mile delivery where parcels are delivered to the end user as fast as possible</p>
            <a href="about.php" class="button">More</a>
            </div><!-- /.widget-content -->
            </div><!-- /.widget widget_about -->
           </div><!-- /.col-md-3 -->
           <div class="col-md-3 col-sm-6">
            <div class="widget widget_menu">
            <h3 class="widget-title"> Useful link </h3>
            <!-- /.widget-title -->
            <ul>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="terms-and-condition.php">Terms & Condition</a></li>
            <li><a href="refund.php">Refund & Cancellation</a></li>    
            <li><a href="faq.php"> Faqs</a></li>
            </ul>
            </div><!-- /.widget -->
           </div><!-- /.col-md-3 -->

           <div class="col-md-3 col-sm-6">
            <div class="widget widget_hot_contact">
            <h3 class="widget-title"> Information </h3>
            <!-- /.widget-title -->
             <ul>
            <li><i class="fa fa-envelope"></i>sales@ivsvisa.com </li>
            <li><i class="fa fa-phone"></i>+91-9504454903, 87</li>
            <li><i class="fa fa-map-marker"></i>84 - C Ground Floor, Bharat Nagar, New Friends Colony,New Delhi - 110025 </li>
            </ul> 
            </div>
           </div>
            <!-- /.widget -->
            <div class="col-md-3 col-sm-6">
            <div class="widget widget_hot_contact">
             <h3 class="widget-title">Subscribe</h3>
        <form action="<?php echo base_url('subscribers/subscribe'); ?>" method="post">
        <label for="name" class="requ">Name:</label>
        <input type="text" name="name" placeholder="Name" required>
        <label for="email" class="requ">Email:</label>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" class="button">Subscribe</button>
        </form>
            </div>
           </div><!-- /.col-md-3 -->
    </div><!-- /.row -->
   </div>
   <!-- footer-bottom-block -->
   <div class="footer-bottom-block">            
    <div class="row">
    <div class="col-md-9">
    <div class="bottom-content-left">
    <p class="copyright">Copyright &copy; 2023 IVS Visa  -  All Right Reserved Powered By <a href="https://jingleinfo.com/" target="_blank">Jingle infosolutions pvt.Ltd</a></p>
    </div><!-- /.bottom-top-content -->
    </div><!-- /.col-md-9 -->
        <div class="col-md-3">
         <div class="bottom-content-right">
        <div class="social-profile">
        <span class="social-profole-title">Follow Us:</span>
         <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
         <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
         <a href="https://www.facebook.com/"target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/"target="_blank"><i class="fa fa-twitter"></i></a>
        </div><!-- /.social-profile -->
        </div><!-- /.bottom-content-right -->
        </div><!-- /.col-md-3 -->
       </div><!-- /.row -->
   </div><!-- /.footer-bottom-block -->
</div><!-- /.container -->
</footer><!-- /.footer-block --> 
<div id="fb-root"></div>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- All The JS Files================================================== --> 
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/carrent.min.js"></script> <!-- main-js -->
<!-- RS5.4 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script>
jQuery(document).ready(function() {
   var $sliderSelector = jQuery(".carrent-slider");
   $sliderSelector.revolution({
       sliderType: "standard",
       sliderLayout: "fullwidth",
       delay: 9000,
       navigation: {
           keyboardNavigation: "on",
           keyboard_direction: "horizontal",
           mouseScrollNavigation: "off",
           onHoverStop: "on",
           touch: {
               touchenabled: "on",
               swipe_threshold: 75,
               swipe_min_touches: 1,
               swipe_direction: "horizontal",
               drag_block_vertical: false
           },
           arrows: {
               style: "gyges",
               enable: true,
               hide_onmobile: false,
               hide_onleave: true,
               tmp: '',
               left: {
                   h_align: "left",
                   v_align: "center",
                   h_offset: 10,
                   v_offset: 0
               },
               right: {
                   h_align: "right",
                   v_align: "center",
                   h_offset: 10,
                   v_offset: 0
               }
           }
       },
       responsiveLevels:[1400,1368,992,480],
       visibilityLevels:[1400,1368,992,480],
       gridwidth:[1400,1368,992,480],
       gridheight:[600,600,900,900],
       disableProgressBar:"on"
   });
});
</script>

<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")
} else {
navbar.classList.remove("sticky");
}
}
</script>
<!-- SLIDER REVOLUTION 5.4 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
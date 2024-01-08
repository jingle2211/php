<?php include 'header.php'; ?>
<?php
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!--Main Slider-->
<section>
    <div class="w3-content wid w3-display-container">
    <div class="w3-display-container mySlides">
    <div class="item">
    <img src="images/slide-1.jpg" style="width:100%">
     <div class="carousel-caption">
    <h2>Travel Visa Requirements</h2>
     <p>Sometimes a journey of a thousand miles begins with a visa.<br>Check your destination and apply
                        online for any visa in the world.</p>
    <a href="#popup1" class="btn btn-primary p-4 w-100">What We Do</a>   
     </div>
     </div>
    </div>

        <div class="w3-display-container mySlides">
        <div class="item">
        <img src="images/slide-2.jpg" style="width:100%">
        <div class="carousel-caption">
         <h2>Trained High-Class Visa Professionals</h2>
        <p>WE'RE INDIA’S MOST TRUSTED VISA &amp; CONSULTATION COMPANY</p>
        </div>
         </div>
        </div>
        <div class="w3-display-container mySlides">
        <div class="item">
        <img src="images/slide-3.jpg" style="width:100%">
        <div class="carousel-caption">
        <h2>We have 30+ years experience in</h2>
        <p>VISA SERVICES &amp; CONSULTATION</p>
        </div>
         </div>
        </div>
        <button class="w3-button w3-display-left w3-blue" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-blue" onclick="plusDivs(1)">&#10095;</button>
    </div>
</section>
<!--Main Slider  end-->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

<div class="vehicle-multi-border blue-white"></div>
<!-- /.vehicle-multi-border -->
<div class="fun-facts-block background-overlay"
style="background-attachment: fixed;background-image:url(<?= base_url(); ?>assets/images/visa-requirements.jpg); margin-top: 12px;">
<div class="container">
<div class="stat">
<div class="travel_visa">
<div class="container">
<div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
     <h2> Travel Visa Requirements !</h2>
     <p class="requ"><span class="cursor-pointer">99.9%</span> visas on time. Or <a class="popup-button" href="#popup1">on us.</a></p>
    </div>

<!-- ///////////////////////// #  Popup              //////////////////////// -->
<div id="popup1" class="overlay">
<div class="popup">
<svg class="mx-auto" fill="none" height="50" viewBox="0 0 50 50" width="50" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_236_9)"><path d="M42.6777 7.32227C37.9558 2.60039 31.6777 0 25 0C18.3223 0 12.0442 2.60039 7.32227 7.32227C2.60029 12.0441 0 18.3223 0 25C0 31.6777 2.60039 37.9558 7.32227 42.6777C12.0441 47.3997 18.3223 50 25 50C31.6777 50 37.9558 47.3996 42.6777 42.6777C47.3997 37.9559 50 31.6777 50 25C50 18.3223 47.3996 12.0442 42.6777 7.32227ZM41.5728 41.5728C37.1461 45.9996 31.2604 48.4375 25 48.4375C18.7396 48.4375 12.8539 45.9996 8.42715 41.5728C4.00039 37.1461 1.5625 31.2604 1.5625 25C1.5625 18.7396 4.00039 12.8539 8.42715 8.42715C12.8539 4.00039 18.7396 1.5625 25 1.5625C31.2604 1.5625 37.1461 4.00039 41.5728 8.42715C45.9996 12.8539 48.4375 18.7396 48.4375 25C48.4375 31.2604 45.9996 37.1461 41.5728 41.5728Z" fill="white"></path><path d="M4.6875 25C4.6875 13.7997 13.7997 4.6875 25 4.6875C29.0398 4.6875 32.942 5.87021 36.2847 8.10781C36.6432 8.34785 37.1284 8.25176 37.3685 7.89316C37.6085 7.53467 37.5124 7.04941 37.1538 6.80937C33.5531 4.39902 29.3504 3.125 25 3.125C19.1569 3.125 13.6637 5.40039 9.53203 9.53203C5.40039 13.6637 3.125 19.1569 3.125 25C3.125 30.3906 5.10293 35.5695 8.69453 39.5828C8.84883 39.7553 9.0625 39.8431 9.27695 39.8431C9.4624 39.8431 9.64863 39.7774 9.79766 39.6439C10.1191 39.3562 10.1466 38.8623 9.85879 38.5408C6.52412 34.8145 4.6875 30.0056 4.6875 25Z" fill="white"></path><path d="M43.1907 12.8464C42.9507 12.4878 42.4654 12.3917 42.1069 12.6317C41.7484 12.8718 41.6522 13.357 41.8923 13.7155C44.1298 17.0581 45.3125 20.9603 45.3125 25C45.3125 36.2003 36.2003 45.3125 25 45.3125C20.3532 45.3125 15.8109 43.7032 12.2101 40.7812C11.875 40.5093 11.383 40.5604 11.1111 40.8955C10.8393 41.2306 10.8904 41.7226 11.2255 41.9944C15.1039 45.1417 19.9958 46.875 25 46.875C30.8431 46.875 36.3363 44.5996 40.468 40.468C44.5996 36.3363 46.875 30.8431 46.875 25C46.875 20.6497 45.601 16.447 43.1907 12.8464Z" fill="white"></path><path d="M38.5408 9.85889C39.0661 10.3289 39.5726 10.8319 40.0461 11.3538C40.2003 11.5237 40.4122 11.6101 40.6249 11.6101C40.8121 11.6101 41.0001 11.5431 41.1497 11.4073C41.4691 11.1174 41.4932 10.6232 41.2032 10.3037C40.6935 9.74199 40.1482 9.20059 39.5828 8.69453C39.2613 8.40684 38.7674 8.43418 38.4797 8.75567C38.192 9.07715 38.2192 9.5711 38.5408 9.85889Z" fill="white"></path><path d="M25 10.1562C25.4314 10.1562 25.7812 9.80645 25.7812 9.375V7.03125C25.7812 6.5998 25.4314 6.25 25 6.25C24.5686 6.25 24.2188 6.5998 24.2188 7.03125V9.375C24.2188 9.80645 24.5686 10.1562 25 10.1562Z" fill="white"></path><path d="M24.2188 40.625V42.9688C24.2188 43.4002 24.5686 43.75 25 43.75C25.4314 43.75 25.7812 43.4002 25.7812 42.9688V40.625C25.7812 40.1936 25.4314 39.8438 25 39.8438C24.5686 39.8438 24.2188 40.1936 24.2188 40.625Z" fill="white"></path><path d="M10.1562 25C10.1562 24.5686 9.80645 24.2188 9.375 24.2188H7.03125C6.5998 24.2188 6.25 24.5686 6.25 25C6.25 25.4314 6.5998 25.7812 7.03125 25.7812H9.375C9.80645 25.7812 10.1562 25.4314 10.1562 25Z" fill="white"></path><path d="M39.8438 25C39.8438 25.4314 40.1936 25.7812 40.625 25.7812H42.9688C43.4002 25.7812 43.75 25.4314 43.75 25C43.75 24.5686 43.4002 24.2188 42.9688 24.2188H40.625C40.1936 24.2188 39.8438 24.5686 39.8438 25Z" fill="white"></path><path d="M17.8641 11.0777L16.6922 9.04795C16.4765 8.67422 15.9986 8.54638 15.625 8.76201C15.2514 8.97773 15.1233 9.45556 15.3391 9.8292L16.5109 11.859C16.6557 12.1096 16.9183 12.2497 17.1883 12.2497C17.3208 12.2497 17.4552 12.2159 17.5782 12.1449C17.9518 11.9292 18.0798 11.4514 17.8641 11.0777Z" fill="white"></path><path d="M33.4891 38.141C33.2733 37.7674 32.7954 37.6395 32.4219 37.8551C32.0482 38.0708 31.9202 38.5486 32.1359 38.9223L33.3078 40.9521C33.4525 41.2026 33.7151 41.3428 33.9852 41.3428C34.1177 41.3428 34.2521 41.309 34.3751 41.238C34.7487 41.0223 34.8768 40.5444 34.661 40.1708L33.4891 38.141Z" fill="white"></path><path d="M9.43935 34.7657C9.57187 34.7657 9.70625 34.7319 9.8293 34.6609L11.8591 33.4891C12.2327 33.2733 12.3607 32.7955 12.145 32.4219C11.9293 32.0482 11.4514 31.9204 11.0778 32.1359L9.04805 33.3078C8.67441 33.5235 8.54639 34.0014 8.76211 34.375C8.90674 34.6256 9.16934 34.7657 9.43935 34.7657Z" fill="white"></path><path d="M38.5323 17.9688C38.6648 17.9688 38.7992 17.9351 38.9223 17.8641L40.952 16.6922C41.3257 16.4765 41.4537 15.9986 41.238 15.625C41.0223 15.2514 40.5444 15.1235 40.1708 15.3391L38.141 16.5109C37.7674 16.7267 37.6394 17.2045 37.8551 17.5781C37.9998 17.8287 38.2624 17.9688 38.5323 17.9688Z" fill="white"></path><path d="M34.375 8.76201C34.0014 8.54619 33.5235 8.67422 33.3078 9.04795L32.1359 11.0777C31.9202 11.4514 32.0482 11.9292 32.4219 12.1449C32.5449 12.216 32.6792 12.2497 32.8118 12.2497C33.0818 12.2497 33.3444 12.1096 33.4892 11.859L34.661 9.8292C34.8767 9.45557 34.7486 8.97774 34.375 8.76201Z" fill="white"></path><path d="M17.5781 37.8551C17.2045 37.6394 16.7267 37.7674 16.5109 38.141L15.3391 40.1708C15.1233 40.5444 15.2514 41.0223 15.625 41.238C15.748 41.3091 15.8823 41.3428 16.0149 41.3428C16.285 41.3428 16.5476 41.2026 16.6923 40.952L17.8642 38.9223C18.0798 38.5486 17.9518 38.0708 17.5781 37.8551Z" fill="white"></path><path d="M38.141 33.4891L40.1708 34.6609C40.2938 34.732 40.4281 34.7657 40.5607 34.7657C40.8308 34.7657 41.0934 34.6256 41.2381 34.375C41.4538 34.0014 41.3258 33.5235 40.9521 33.3078L38.9224 32.1359C38.5487 31.9201 38.0709 32.0482 37.8552 32.4219C37.6394 32.7955 37.7674 33.2733 38.141 33.4891Z" fill="white"></path><path d="M11.859 16.5109L9.8292 15.3391C9.45557 15.1232 8.97773 15.2514 8.76201 15.625C8.54629 15.9986 8.67432 16.4765 9.04795 16.6922L11.0777 17.8641C11.2008 17.9352 11.3351 17.9688 11.4677 17.9688C11.7377 17.9688 12.0003 17.8287 12.145 17.5781C12.3606 17.2045 12.2326 16.7267 11.859 16.5109Z" fill="white"></path><path d="M30.4387 35.2003C30.5712 35.2003 30.7056 35.1665 30.8286 35.0955C31.2022 34.8798 31.3303 34.402 31.1146 34.0283L26.7806 26.5216C27.1313 26.1117 27.3438 25.5804 27.3438 25C27.3438 23.9815 26.6905 23.1131 25.7813 22.7906V12.5C25.7813 12.0686 25.4314 11.7188 25 11.7188C24.5686 11.7188 24.2188 12.0686 24.2188 12.5V22.7906C23.3095 23.1131 22.6562 23.9815 22.6562 25C22.6562 26.2924 23.7076 27.3438 25 27.3438C25.1462 27.3438 25.2892 27.3296 25.428 27.3039L29.7614 34.8096C29.9062 35.0602 30.1687 35.2003 30.4387 35.2003ZM24.2188 25C24.2188 24.5692 24.5692 24.2188 25 24.2188C25.4308 24.2188 25.7813 24.5692 25.7813 25C25.7813 25.4308 25.4308 25.7812 25 25.7812C24.5692 25.7812 24.2188 25.4308 24.2188 25Z" fill="white"></path></g><defs><clipPath id="clip0_236_9"><rect fill="white" height="50" width="50"></rect></clipPath></defs></svg>
<h2 class="text-xl mt-2 text-white">We guarantee your visa on time</h2>
<div class="content mb-2 text-white mt-2">
<p>Get your visa for FREE if we miss our promised approval date.</p>
</div>
<div class=" popup-box">
<h5 class="text-xl font-medium">What is “on time?”</h5>
<p class="mt-2">When your visa is delivered on or before the promised time guranteed by Ivs_Visa.</p></div>
<div class=" popup-box mb-4">
<h5 class="text-xl font-medium">What we need from you?</h5>
<p class="mt-2">If incorrect documents are submitted or we require additional documents, our team will request you to upload documents promptly. Your ETA in such cases will be updated, but we still guarantee your visa before your travel date.</p></div>
<a class="close" href="#">Close</a>
</div>
</div>
<!-- /////////////////////////////////////////////////////// -->

        <div class="travel_visa_content">
        <div class="col-lg-3 col-md-4 col-sm-12 travel-pd">
        <form>
        <div class="form-group">
        <label for="country" class="requ">Country</label>
        <select name="country" id="country" class="form-control input-lg">
        <option value="">Select Country</option>
             <?php
             foreach ($country as $cnt) {
                echo '<option value="' . $cnt->country_id . '">' . $cnt->name . '</option>';
                    }
                     ?>
        </select>
        </div>
        </form>
        </div>
            <div class="col-lg-3 col-md-4 col-sm-12 travel-pd travel-pd">
            <form>
            <div class="form-group">
            <label for="state" class="requ">Visa Type</label>
            <select id="visatype" name="visatype" class="form-control input-lg"></select>
             </div>
             </form>
            </div>
     <div class="col-lg-2 col-md-2 col-sm-12 travel-check">
         <a href="pages" class="form-control">Check requirements</a>
         </div>
    </div>
        <div class="travel-Chat">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="list-inline">
        <li>Need help?</li>
        <li><a href="https://api.whatsapp.com/send?phone=+91-9504454903&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.">
            <i class="fa fa-commenting-o" aria-hidden="true"></i>Chat with us </a></li>
        <li> Call us 7 days a week</li>
        <li class="travel-phone"><a href="#"><i class="fa fa-phone"aria-hidden="true"></i>+91-950-445-4903</a></li>
        </ul>
        </div>
        </div>
</div>
</div>
</div>
</div><!-- stat -->
</div><!-- /.container -->
</div>

<!-- ====== About Main Content ====== -->
<div class="about-main-content mr-top-30 mr-btm-30">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="about-top-content">
     <div class="row">
     <div class="col-md-12">
    <div class="heading-content-three">
  <!--<h2 class="title">About Ivs visa</h2>-->
     <h4 class="sub-title"></h4>
    </div><!-- /.section-title-area -->
     </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
    <div class="row">
    <div class="col-md-12">
    <h3 class="extra-big-title">
      <?php if ($about['name']) {
       echo $about['name'];
        } ?>
        </h3>
    </div><!-- /.col-md-12 -->
     <div class="col-md-6">
    <div class="about-content-left">
    <p style="text-align:justify;">
    <?php if ($about['description']) {
     echo $about['description'];
    } ?>
     </p>
    </div><!-- /.about-content-left-->
    </div><!-- /.col-md-5 -->
     <div class="col-md-6">
     <?php if ($about['image']): ?>
     <img src="<?= base_url() . 'upload/' . $about['image']; ?>" alt="car-item" style="border:1px solid; border-radius: 15px;"/>
   <?php endif; ?>
    </div><!-- /.col-md-7 -->
    </div><!-- /.row -->
</div><!-- /.top-content -->
</div><!-- /.col-md-12 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.about-main-content -->

<div class="wellcome-block">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-content style-two">
<h2 class="title text-uppercase">Why Choose Us</h2>
<h3 class="subtitle">The Best Services our Company</h3>
</div><!-- /.heading-content -->
</div><!-- /.col-md-12 -->
</div><!-- /.row -->
    <div class="row">
    <div class="col-md-5">
    <div class="about-service night-rider">
    <div class="about-image">
    <img src="<?= base_url(); ?>images/image-01.png" alt="car-item" />
    </div>
    </div><!-- /.about-service -->
    </div><!-- /.col-md-5 -->
<div class="col-md-7">
<div class="wellcome-content-left">
<div class="row">
<div class="col-md-6">
<div class="service-block wc">
<!-- <i class="fa fa-university" aria-hidden="true"></i> -->
<h2 class="service-title"><i class="fa fa-university" aria-hidden="true"></i> Work Permit</h2>
<p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    vitae nibh nisl. Cras etitikis mauris egeth .</p>
 </div><!-- /.service-block -->
</div><!-- /.col-md-6 -->
<div class="col-md-6">
<div class="service-block wc">

<h2 class="service-title"> <i class="fa fa-star" aria-hidden="true"></i> Best Rate guarantee</h2>
<p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    vitae nibh nisl. Cras etitikis mauris egeth .</p>
 </div><!-- /.service-block -->
 </div><!-- /.col-md-6 -->
<div class="col-md-6">
<div class="service-block wc">

 <h2 class="service-title"><i class="fa fa-star" aria-hidden="true"></i> Awesome Support</h2>
 <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    vitae nibh nisl. Cras etitikis mauris egeth .</p>
</div><!-- /.service-block -->
</div><!-- /.col-md-6 -->

<div class="col-md-6">
<div class="service-block wc">

<h2 class="service-title"> <i class="renticon renticon-carefull-activity"></i> Careful Activity</h2>
<p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    vitae nibh nisl. Cras etitikis mauris egeth .</p>
</div><!-- /.service-block -->
</div><!-- /.col-md-6 -->
</div><!-- /.row -->

</div><!-- /.welcome-content-left -->
</div><!-- /.col-md-7 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.well-come-block -->

<!-- ======Excellent Service Block======= -->
<div class="excellent-service-block pd-90 ex-pdt-102 ex-pdtm-72" style="background:#265981;">
<div class="container">
     <div class="row tb default-margin-bottom yellow-theme">
    <div class="col-md-9 block-title-area tb-cell">
    <div class="heading-content-three style-one border">
    <h2 class="title" style="color:#fff;">Our Services</h2>
    </div><!-- /.heading-content-one -->
    </div><!-- /.col-md-10 -->
    </div><!-- /.row -->
        <div class="col-md-4">
        <div class="service-content">
        <div class="service-thumbnail">
        <i class="fa fa-plane icon-color" style="color:#265981;font-size:42px; margin:10px 0px;" aria-hidden="true"></i>
        </div><!-- /.service-thumbnail -->
        <div class="service-details-content">
        <h4 class="service-title">VISA FACILITATION SERVICES</h4>
         <p class=" " >We are dedicated to providing exceptional customer service and
                        personal attention to your Visa needs.</p>
        </div><!-- /.service-details-content -->
        </div><!-- /.service-content -->
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">
        <div class="service-content">
        <div class="service-thumbnail">
        <i class="fa fa-files-o icon-color" style="color:#265981;font-size:42px; margin:10px 0px;"aria-hidden="true"></i>
        </div><!-- /.service-details-content -->
        <div class="service-details-content">
        <h4 class="service-title">LEGALIZATION/ ATTESTATION</h4>
        <p class="" >Legalization/ Attestation is a process of witnessing documents by authorized person.</p>
        </div><!-- /.details-content -->
        </div><!-- /.service-content -->
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">
        <div class="service-content">
        <div class="service-thumbnail">
        <i class="fa fa-cc-visa icon-color" style="color:#265981;font-size:42px; margin:10px 0px;"aria-hidden="true"></i>
         <!-- <img src="<?= base_url(); ?>assets/images/service/ambulance-service.png" alt="car-item" /> -->
        </div><!-- /.service-thumbnail -->
        <div class="service-details-content">
        <h4 class="service-title">EXPATRIATE SERVICES</h4>
        <p class="">All foreigners, including foreigners of Indian origin, visiting India on a visa that permits a stay.</p>
        </div><!-- /.service-details-content -->
        </div><!-- /.service-content -->
        </div><!-- /.col-md-4 -->
</div><!-- /.container  -->
</div><!-- /.Regular-Vehicle Block -->

<!-- ======Testimonial Block======= -->
<div class="testimonial-block bg-gray-color">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle"><i class="fa fa-quote-right red-color"></i>Some Reviews</h3>
                    <h2 class="title">Clients Testimonial</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->
            <div class="col-md-3 block-navigation-area hidden-xs tb-cell">
                <div class="pull-right">
                    <div class="item-navigation nav-right">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div><!-- /.item-navigation -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->

        <div class="testimonial-slider slider-style-two owl-carousel" data-item="[3,2,1,1]">
            <?php if ($testimonial):
                foreach ($testimonial as $value): ?>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?= base_url(); ?>assets/images/testimonial-image.png" alt="testimonial" />
                        </div><!-- /.client-image -->
                        <div class="client-detales">
                            <h3 class="client-title">
                                <?= $value['name'] ?>
                            </h3>
                            <h5 class="client-subtitle">
                                <?= $value['position'] ?>
                            </h5>
                            <p class="discription">
                                <?= $value['description'] ?>
                            </p>

                        </div><!-- /.client-detales -->
                    </div><!-- /.item -->
                <?php endforeach; endif; ?>
        </div><!-- /.testimonial-slider -->
    </div><!-- /.container -->
</div><!-- /.testimonial-area -->

<!-- ======blog area======= -->
<div class="blog-content-block pd-90 bg-white-color">
<div class="container-fluid">
<div class="row">
<div class="container-lg-screen">
                <div class="row tb default-margin-bottom theme-red">
                <!-- block-title-area -->
                <div class="col-md-10 block-title-area tb-cell">
                 <div class="heading-content style-one border">
                 <h2 class="title text-Light">Blogs </h2>
                </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-10 -->
                    <!-- block-navigation-area -->
             <div class="col-md-2 block-navigation-area hidden-xs tb-cell">
             <div class="item-navigation nav-right">
            <a href="#" class="previous-item"> <i class="fa fa-angle-left"></i> </a>
            <a href="#" class="next-item"> <i class="fa fa-angle-right"></i> </a>
            </div><!-- /.item-navigation -->
            </div><!-- /.col-md-2 -->
                </div><!-- /.row -->
                <!-- /.vehicle-slider -->
                <div class="vehicle-blog-slider slider-style-two owl-carousel" data-item="[3,2,2, 1]">
                <?php if ($blogs):
                        foreach ($blogs as $value): ?>
                            <div class="item">
                            <article class="post">
                            <figure class="post-thumb">
                            <a href="<?= base_url() . 'blogs/' . $value['slug']; ?>">
                                <img src="<?= base_url(); ?>upload/blogs/<?= $value['image']; ?>" alt="blog" />
                                    </a>
                            </figure><!-- /.post-thumb -->
                            <div class="post-content">
                            <div class="entry-meta">
                            <span class="entry-date">
                            <?php echo date('h:i a, d-M-Y', strtotime($value['createdate'])); ?>
                             </span>
                            <span class="red-bg">
                             <a href="<?= base_url() . 'blogs/' . $value['slug']; ?>">Read More..</a>
                            </span>
                            </div><!-- /.entry-meta -->
                            <h2 class="entry-title"> <a href="#"> <?= $value['title']; ?></a> </h2><!-- /.entry-title -->
                            </div><!-- /.post-content -->
                            </article><!-- /.post -->
                        </div><!-- /.item -->
                        <?php endforeach; endif; ?>
            </div><!-- /.vehicle-slider -->
            </div><!-- /.container-lg-screen -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.Blog-area-->
<!-- ======nEWS lATTER======= -->
<div class="container" style="margin-bottom:20px;">
                        <div class="row">
                        <div class="col-md-12">
                        <h3 class="extra-big-title"><?php if ($add_latter['name']){ echo $add_latter['name']; } ?></h3>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-6">
                        <div class="about-content-left">
                        <p style="text-align:justify;">
                        <?php if ($add_latter['description']){ echo $add_latter['description']; } ?> </p>
                        </div><!-- /.about-content-left-->
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-6">
                        <?php if ($add_latter['image']): ?>
                        <img src="<?= base_url().'upload/'.$add_latter['image']; ?>" alt="news_latter" />
                        <?php endif; ?>
                        </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                        </div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $('#country').change(function() {
                var country_id = $(this).val();

                if (country_id != '') {
                    $.ajax({
                        url: "<?php echo base_url('Dynamic_dependent/fetch_visa'); ?>",
                        type: "POST",
                        data: {country_id: country_id},
                        dataType: "json",
                        success: function(data) {
                            $('#visatype').html('<option value="">Select Visa Type</option>');
                            $.each(data, function(key, value) {
                                $('#visatype').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#visatype').html('<option value="">Select Visa Type</option>');
                }
            });
        });
    </script>
<!-- ======footer area======= -->
<?php include 'footer.php'; ?>
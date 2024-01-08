<?php include'header.php';?>
    <!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
        <div class="row">
        <div class="col-md-12">                
        <h2 class="page-title">Contact Us</h2>            
        </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header --> 
    <?php  
 
 if(isset($_POST['submit'])) {
  //$mailto = "info@altitudesadventure.com";  //My email address
   $mailto = "sasikumar95044@gmail.com";  //My email address
  //getting customer data
  $name = $_POST['name']; //getting customer name
  $fromEmail = $_POST['email']; //getting customer email
  $phone = $_POST['phone']; //getting customer Phome number
 //  $subject = $_POST['subject']; //getting subject line from client
  $message = $_POST['message']; //getting subject line from client
  $subject2 = "Confirmation: Message was submitted successfully"; // For customer confirmation
  
  //Email body I will receive
  $message = "Cleint Name: " . $name . "\n"
  . "Phone: " . $phone . "\n"
 //  . "Message: " . $message . "\n"
  . "Client Message: " .  $_POST['message']."\n" ;
  
  //Message for client confirmation
  $message2 = "Dear" . $name . "\n"
  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
  . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
  . "Regards," . "\n" . "- jingle WebDesign";
  
  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $name, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your Message was sent Successfully!";
   } else {
     $failed = "Sorry! Message was not sent, Try again Later.";
   }
  
 }
  
 ?>
    <!-- ====== Page Header ====== -->
    <div class="contact-us-area pd-30">
        <div class="container">
        <div class="row">  
        <div class="col-md-6">
         <div class="contact-us-content-right">
         <form id="contact" action="" method="post">
            <div class="input-content clearfix">
                <div class="row">
				<div class="col-sm-12">
				<h4>Keep in Touch</h4>
				</div>
                 <div class="col-sm-6">
                <input type="text" placeholder="Name" name="name" class="form-controller" required>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                 <input type="phone" placeholder="Phone" name="phone" class="form-controller">
                 </div><!-- /.col-sm-6 --> 
                 <div class="col-sm-12">
                 <input type="email" placeholder="Email" name="email" class="form-controller Email" required>
                 </div><!-- /.col-sm-6 --> 
                  
                <div class="col-sm-12">
                <textarea rows="2" class="form-controller" name="message"  placeholder=" Message"></textarea>
                </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="subimt-button clearfix">
                <!--<input type="submit" value="Submit" class="submit yellow-button">-->
                <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>
                </div><!-- /.subimt -->
                </div><!-- /.input-content -->
                </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-6 -->
				<div class="col-md-6">
                    <div class="contact-us-content-left">
					<h3>Head Office:</h3>
                        <div class="contact">
                             <h3><i class="fa fa-map-marker1">International Visa Service</i></h3>
                            <h5><i class="fa fa-map-marker"></i>84 - C Ground Floor, Bharat Nagar, New Friends Colony,New Delhi - 110025</h5>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-phone"></i>+91-11-46578585, 3887, 3888</h4>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>tony.lawrence@ivsvisa.com</h4>
                            <h4><i class="fa fa-globe" aria-hidden="true"></i>Website - www.ivsvisa.com</h4>
                        </div><!-- /.contact -->
                        <div class="contact">
                            
                            <div class="social-icon">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us -->

    <!-- ====== Map Block ====== -->
    <div class="map-block ">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="header-map-content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28033.028215906714!2d77.269273!3d28.565903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce38abca3560d%3A0x14836e56880f20bc!2sInternational%20Visa%20Service!5e0!3m2!1sen!2sus!4v1693311448566!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- /.map-content -->                
    </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
    </div><!-- /.map-area -->

<div class="container">
<h3 class="text-center" style="font-size:24px; font-weight:800;padding:15px;">Branch Office:</h3>
<div class="row" style="margin-bottom:24px;">
<div class="col-md-6">                   			
            <div class="contact-us-content-left">
            <h3><i class="fa fa-map-marker1">International Visa Service</i></h3>
            <h5><i class="fa fa-map-marker"></i>84 - C Ground Floor, Bharat Nagar, New Friends Colony,New Delhi - 110025</h5>    
            <h4><i class="fa fa-phone"></i>+91-11-46578585, 3887, 3888, 3889</h4> 
            <h4><i class="fa fa-envelope"></i>sales@ivsvisa.com, tony.lawrence@ivsvisa.com</h4>
            <h4><i class="fa fa-globe" aria-hidden="true"></i>Website - www.ivsvisa.com</h4>
            </div><!-- /.contact -->            
</div><!-- /.col-md-6 -->
<div class="col-md-6">                   			
<div class="contact-us-content-left">
            <h3><i class="fa fa-map-marker1">International Visa Service</i></h3>
            <h5><i class="fa fa-map-marker"></i>84 - C Ground Floor, Bharat Nagar, New Friends Colony,New Delhi - 110025</h5>
            <h4><i class="fa fa-phone"></i>+91-11-46578585, 3887, 3888, 3889</h4>
            <h4><i class="fa fa-envelope"></i>sales@ivsvisa.com, tony.lawrence@ivsvisa.com</h4>
            <h4><i class="fa fa-globe" aria-hidden="true"></i>Website - www.ivsvisa.com</h4>
            </div><!-- /.contact -->            
</div><!-- /.col-md-6 -->
</div>
</div>
    <!-- ======footer area======= -->
   <?php include'footer.php';?>
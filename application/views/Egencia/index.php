<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Egencia Visa Services</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/egencia.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>
<div class="desktoplogo">
<a href="https://www.ivsvisa.in" class="logo-ivs">    
<img src="https://www.ivsvisa.com/egencia/assets/img/logo-ivs.png" width="450" height="75" alt="header-logo"></a>
<a href="https://www.ivsvisa.com/index.aspx" class="egencia">
<img src="https://www.ivsvisa.com/egencia/assets/img/egenica.png" width="300" height="30" alt="header-logo"></a>
</div>

<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Egencia">Home</a>
 
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav nav justify-content-center">
  <a class="nav-item nav-link active" href="<?= base_url('Egencia/contact'); ?>">Contact <span class="sr-only">(current)</span></a>
  <a class="nav-item nav-link" href="<?= base_url('visa_application.php'); ?>">Request for Application</a>
  <a class="nav-item nav-link" href="Escalation_Matrix-IVS.pdf" target="_blank" class="nav-link" rel="noopener">Escalation Matrix</a>
  <a class="nav-item nav-link" href="#">Make Payment</a>
  <a class="nav-item nav-link" href="#">Coming Soon</a>
  </div>
  </div>
</nav>
</div>

<section>
    <div class="w3-content wid w3-display-container">
    <div class="w3-display-container mySlides">
    <div class="item">
    <img src="images/slide-1.jpg" style="width:100%">
    <div class="carousel-caption">
    <h4>Welcome to IVS for Egencia</h4>
    <p>WE MAKE THE VISA PROCESS FASTER.</p>
    </div>
    </div>
    </div>

        <div class="w3-display-container mySlides">
        <div class="item">
        <img src="images/slide-2.jpg" style="width:100%">
        <div class="carousel-caption">
        <h4>We have 30+ years experience in</h4>
        <p>VISA SERVICES & CONSULTATION</p>
        </div>
        </div>
        </div>
        <div class="w3-display-container mySlides">
        <div class="item">
        <img src="images/slide-3.jpg" style="width:100%">
        <div class="carousel-caption">
        <h4>Trained High-Class Visa Professionals</h4>
        <p>WE'RE INDIA’S MOST TRUSTED VISA & CONSULTATION COMPANY</p>
        </div>
        </div>
        </div>
        <button class="w3-button w3-display-left w3-blue" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-blue" onclick="plusDivs(1)">&#10095;</button>
    </div>
</section>

<div class="container">
  <h2 style="text-align:center">EGENCIA VISA HELP DESK</h2>  
  <div class="row">
  <div class="col-md-6">
  <h3> North, West &amp; East Region</h3>
  <p> Mr. Manveer </p>
  <p class="tlp-email" style="text-align:left;">Email:<a href="mailto:egencia@ivsvisa.com"><span class="tlp-email"> <b> egencia@ivsvisa.com</b></span></a></p>
  <p> Contact No: + 91 9999199545</p>
	<p>Working Hours/Timings: 09:30 hrs to 18:00 Hrs (Monday to Friday)</p>
  </div>
	  	 
	<div class="col-md-6">
  <h3>Southern Region</h3>
  <p>Mr. Vinesh Shanta </p>
  <p class="tlp-email" style="text-align:left;">Email:<a href="mailto:egencia.south@ivsvisa.com"><span class="tlp-email"> <b>  egencia.south@ivsvisa.com</b></span></a></p>
  <p> Contact No: + 91 8217430745</p>
	<p>Working Hours/Timings: 09:30 hrs to 18:00 Hrs (Monday to Friday)</p>
  </div>
  </div>

  <div class="row">
  <div class="col-md-6">
  <h3>Reporting Manager</h3>
  <p> Ms. Rupa Chatterjee </p>
  <p class="tlp-email" style="text-align:left;">Email:<a href="mailto:rupa.chatterjee@ivsvisa.com"><span class="tlp-email"> <b>rupa.chatterjee@ivsvisa.com</b></span></a></p>
  <p> Contact No: +91 9830242977</p>
  <p>Working Hours/Timings: 09:30 hrs to 18:00 Hrs (Monday to Friday)</p> 
  </div>
  </div>
    
	<div class="text">          
  <p>If you have any immediate query/concerns of need Visa Information for any country, please contact us at <a href="mailto: Egencia@ivsvisa.com"><span class="tlp-email"><b> Egencia@ivsvisa.com</b></span></a> and call us on above mentioned contact details </p>
  <p>We look forward to serving you and at IVS; we are committed to offering the highest level of service.</p><br>
  <span>Thank you for working with us with us </span>
  </div> 
	  
</div>

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
<footer class="footer">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
            <div class="pr-xl-4"><h4>DISCLAIMER NOTICE:</h4>
            <p>All information and contents of this site and pages included are copyrighted by international visa service. Any use of material from this site without expressed consent from IVS is illegal. Please note IVS is not an official government website nor is affiliated with any State Department or Embassy. IVS accepts no responsibility legal</p>   
            </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#"> egencia@ivsvisa.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">9504454903</a> 
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
       
      </footer>
</body>
</html>
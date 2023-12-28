<?php include 'header1.php'; ?>
<div class="page-header nevy-bg">
   <!-- <img src="./images/top-banner-country.jpg"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">COUNTRY FACT FINDER</h2>
                          
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div>
<body>
    <!--section ivisa -->
    <section class="section-ivsa" >
    <div class="container py-5 px-5">
    <h2 class="title">COUNTRY FACT FINDER</h2>
    <div class="row">
                <div class="col-lg-4">
                    <div id="visa-side-menu">
                    <ul>
                    <li> <a href="CountryFactFinder">Country Fact Finder</a> </li>
                    <li class="visa-side-itam"> <a>Diplomatic Representations</a>
                    <ul>
                    <li class="visa-link"><a href="#">
                    <span> Agartala</span></a> </li>
                    <li class="visa-link"><a href="#">
                    <span> Kolkata</span></a> </li>
                    <li class="visa-link"><a href="DiplomaticRepresentations">
                    <span> Mumbai</span></a> </li>
                    </ul>
                    </li>
                    <li class="visa-side-itam"> <a>Visa Note &amp; Fees</a>
                    <ul>
                    <li class="visa-link"><a href="fee_notes_details"> <span> Tourist</span></a> </li>
                    <li class="visa-link"><a href="">  <span> Business</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Transit</span></a> </li>
                    <li class="visa-link"><a href=""> <span>  Depended visa</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Long Term ( Work visa)</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Temporary Work Permit (TWP)</span></a> </li>
                    </ul>
                    </li>
                    <li>  <a href="missionover">Indian Missions Overseas</a> </li>
                    </ul>
<div class="language" id="show_form">
<label class="visa-name ">Choose Country:</label>
<form action="VisaInformation" method="post">
    <select name="country" id="country"  class="Country-name" required >
<option value="">Select VISA Country</option>           
<?php
foreach ($country as $qu) {
  ?>
<option value= '<?php echo $qu['name']; ?>'>
<?php
echo $qu['name'];?> </option>
 <?php
}

?>
</select>
<input type="submit" name="submit" value="Show Result" class="result">
</form>
</div>
      </div>  
      </div>                         
             <div class="col-lg-8" style="background-image: url(../images/map.jpeg); background-repeat:repeat; background-size: contain; ">
             <div class="message">
<?php
if (isset($read_set_value)) {
echo $read_set_value;
}
if (isset($message_display)) {
echo $message_display;
}
?>
</div>

<div class="message">
<?php
if (isset($result_display)) {
    
    if ($result_display == 'No record found !') {
        echo $result_display;
    } else {
        echo '<div class="result_container">';
        foreach ($result_display as $value) {
            echo '<div class="result_row">';
            echo '<div class="visa-text"><strong>Name:</strong> ' . $value->name . '</div>';
            echo '<div class="visa-text"><strong>Location:</strong> ' . $value->location . '</div>';
            echo '<div class="visa-text"><strong>Time:</strong> ' . $value->time . '</div>';
            echo '<div class="visa-text"><strong>Area:</strong> ' . $value->area . '</div>';
            echo '<div class="visa-text"><strong>Population:</strong> ' . $value->population . '</div>';
            echo '<div class="visa-text"><strong>Currency:</strong> ' . $value->currency . '</div>';
            echo '<div class="visa-text"><strong>Capital:</strong> ' . $value->capital . '</div>';
            echo '<div class="visa-text"><strong>Climate:</strong> ' . $value->climate . '</div>';
            echo '<div class="visa-text"><strong>Lanagugae:</strong> ' . $value->language . '</div>';
            echo '<div class="visa-text"><strong>Airlines:</strong> ' . $value->airline . '</div>';
            echo '<div class="visa-text"><strong>Airport:</strong> ' . $value->airport . '</div>';
            echo '<div class="visa-text"><strong>Holidays:</strong> ' . $value->holiday . '</div>';
            echo '</div>'; // Close result_row
        }
        echo '</div>'; // Close result_container
    }
}
?>
</div>
</div>

    <div class="clearfix"></div>       
    </div>
    </div>      
    </section> 
</body>
<!-- ======footer area======= -->
 <?php include'footer.php';?>
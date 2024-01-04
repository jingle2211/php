<?php include 'header1.php'; ?>

<html lang="en">
<body>
    <!--section ivisa -->
    <section class="section-ivsa" >
    <div class="container py-5 px-5">
    <h2 class="title">COUNTRY FACT FINDER</h2>
    <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div id="visa-side-menu">
                    <ul>
                    <li> <a href="CountryFactFinder">Country Fact Finder</a> </li>
                    <li class="visa-side-itam"> <a>Diplomatic Representations</a>
                    <ul>
                    <li class="visa-link"><a href="DiplomaticRepresentations">
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
                    <li class="visa-link"><a href="fee_notes_details">  <span> Business</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Transit</span></a> </li>
                    <li class="visa-link"><a href=""> <span>  Depended visa</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Long Term ( Work visa)</span></a> </li>
                    <li class="visa-link"><a href=""> <span> Temporary Work Permit (TWP)</span></a> </li>
                    </ul>
                    </li>
                    <li>  <a href="missionover">Indian Missions Overseas</a> </li>
                    </ul>
<div class="language">
<label class="visa-name">Choose Country:</label>
<select name="country" id="country"  class="Country-name" required >
<option value="">Select VISA Country</option>           
<?php
foreach ($country as $qu) {
  ?>
<option value= '<?php echo $qu['country_id']; ?>'>
<?php
echo $qu['name'];?> </option>
 <?php
}
?>
</select>
</div>
                </div>
                </div>                           
             <div class="col-lg-8 col-md-12 col-xs-12" style="background-image: url(../images/map.jpeg); background-repeat:repeat; background-size: contain; ">
             <?php if($countryfact): $i = 1;  foreach ($countryfact as $value): ?>
             <div class="table-bg">
             <div class="row g-4 visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Name:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"><?= substr($value['name'], 0,999)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4 visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Location:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"><?= substr($value['location'], 0,999)  ?> </div>
                        </div>
                        </div>
                        <!-- 2 -->
                        <div class="row g-4 visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Time:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['time'], 0,900)  ?></div>
                        </div>
                        </div>
                        <!-- 3 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Capital</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['capital'], 0,90)  ?>  </div>
                        </div>
                        </div>
                        <!-- 4 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Language:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['language'], 0,900)  ?></div>
                        </div>
                        </div>
                        <!-- 5 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Area:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['area'], 0,900)  ?></div>
                        </div>
                        </div>
                        <!-- 6 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Population:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['population'], 0,900)  ?></div>
                        </div>
                        </div>
                         <!-- 6 -->
                         <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Currency:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['currency'], 0,900)  ?></div>
                        </div>
                        </div>
                         <!-- 6 -->
                         <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Climate:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['climate'], 0,900)  ?></div>
                        </div>
                        </div>
                         <!-- 6 -->
                         <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Holidays:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['holiday'], 0,90200)  ?></div>
                        </div>
                        </div>
                           <!-- 6 -->
                           <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Airline Name:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['airline'], 0,900)  ?></div>
                        </div>
                        </div>
                          <!-- 6 -->
                          <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">International Airports:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['airport'], 0,900)  ?></div>
                        </div>
                        </div>
                </div>
                <?php endforeach; endif;  ?> 
                </div>
         <div class="clearfix"></div>       
    </div>
    </div>      
    </section> 
        <!-- Footer Js -->
  <?php include 'footer.php'; ?>
</body>
</html>
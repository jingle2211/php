<?php include 'header1.php'; ?>
<html lang="en">
<body>
    <!--section ivisa -->
    <section class="section-ivsa" >
    <div class="container py-5 px-5">
    <h2 class="title">INDIAN MISSIONS OVERSEAS</h2>
    <div class="row">
                <div class="col-lg-4">
                    <div id="visa-side-menu">
                    <ul>
                    <li> <a href="CountryFactFinder">Country Fact Finder</a> </li>
                    <li class="visa-side-itam"> <a>Diplomatic Representations</a>
                    <ul>
                    <li class="visa-link"><a href="DiplomaticRepresentations">
                    <span> Agartala</span></a> </li>
                    <li class="visa-link"><a href="DiplomaticRepresentations">
                    <span> Kolkata</span></a> </li>
                    <li class="visa-link"><a href="#">
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
             <div class="col-lg-8" style="background-image: url(../images/map.jpeg); background-repeat:repeat; background-size: contain; ">
             <?php if($missionover): $i = 1;  foreach ($missionover as $value): ?>
             <div class="table-bg">
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Name:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"><?= substr($value['Name'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <!-- 2 -->
                        <div class="row g-4 visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Address:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['Address'], 0,900)  ?></div>
                        </div>
                        </div>
                        <!-- 3 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">City/Pin:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['pin_code'], 0,90)  ?>  </div>
                        </div>
                        </div>
                        <!-- 4 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Telephone:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['Telephone'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <!-- 5 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Fax:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['Fax'], 0,90)  ?></div>
                        </div>
                        </div>
                        <!-- 6 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Email:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['Email'], 0,90)  ?></div>
                        </div>
                        </div>
                        <!-- 7 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">website:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['website'], 0,900)  ?> </div>
                        </div>
                        </div>

                        <div class="row g-4  visa-main">
                        <div class="col-lg-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Notes:</div>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="visa-text"> <?= substr($value['Notes'], 0,1500)  ?></div>
                        </div>
                        </div>
                </div>
                <?php endforeach; endif;  ?> 
                </div>
         <div class="clearfix"></div>       
    </div>
    </div>      
    </section> 
</body>
</html>
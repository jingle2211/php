<?php include 'header1.php'; ?>
<html lang="en">
<body>
    <!--section ivisa -->
    <section class="section-ivsa" >
    <div class="container py-5 px-5">
    <h2 class="title">Visa Note and Fees : Visit Visa Visa</h2>
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
             <?php if($fee_notes): $i = 1;  foreach ($fee_notes as $value): ?>
             <div class="table-bg">
             <div class="row g-4 visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Visa Note and Fees:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"><?= substr($value['allvisa'], 0,999)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Inidan City:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"><?= substr($value['city'], 0,999)  ?> </div>
                        </div>
                        </div>
                        <!-- 2 -->
                        <div class="row g-4 visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Document Check List:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['Document'], 0,999999999)  ?></div>
                        </div>
                        </div>
                        <!-- 3 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Processing Time:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"> <?= substr($value['Processing'], 0,90)  ?>  </div>
                        </div>
                        </div>
                        <!-- 4 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-3 col-xs-3 col-md-3">
                        <div class="visa-hedding">
                        <div class="visa-name">Visa Fees:</div>
                        </div>
                        </div>
                        <div class="col-lg-9 col-xs-9 col-md-9">
                        <div class="row g-4  visa-main">
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['Fees'], 0,90)  ?> </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['value'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4  visa-main">
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['Fees1'], 0,90)  ?> </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['value1'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4  visa-main">
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['Fees2'], 0,90)  ?> </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['value2'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4  visa-main">
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['Fees3'], 0,90)  ?> </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['value3'], 0,90)  ?> </div>
                        </div>
                        </div>
                        <div class="row g-4  visa-main">
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['Fees4'], 0,90)  ?> </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="visa-text"> <?= substr($value['value4'], 0,90)  ?> </div>
                        </div>
                        </div>
                        </div>                   
                        </div>
                        <!-- 5 -->
                        <div class="row g-4  visa-main">
                        <div class="col-lg-4 col-xs-4 col-md-4">
                        <div class="visa-hedding">
                        <div class="visa-name">Download Form:</div>
                        </div>
                        </div>
                        <div class="col-lg-8 col-xs-8 col-md-8">
                        <div class="visa-text"><a href="<?= base_url('upload/myfile'); ?>"> <?= substr($value['myfile'], 0,900)  ?></a></div>
                        </div>
                        </div>
                        <!-- 6 -->
                </div>
                <?php endforeach; endif;  ?> 
                </div>
         <div class="clearfix"></div>       
    </div>
    </div>      
    </section> 
</body>
</html>
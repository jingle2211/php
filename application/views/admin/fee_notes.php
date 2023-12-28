<?php include 'header.php'; ?>
<!-- Right Sidebar -->
<section class="content">
    <div class="block-header">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <ul class="breadcrumb breadcrumb-style ">
    <li class="breadcrumb-item">
    <h4 class="page-title">Profile</h4>
    </li>
    <li class="breadcrumb-item bcrumb-1">
    <a href="<?= base_url('Admin/dashboard'); ?>">
   <i class="fas fa-home"></i> Home</a>
  </li>
  <li class="breadcrumb-item active">Add Visa & Fees</li>
  </ul>
  </div>
  </div>
  </div>

 <?php if($this->session->flashdata('success')){ ?> 
  <div class="alert bg-green alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">×</span> </button>
 <?= $this->session->flashdata('success'); ?>
 </div>
 <?php  } ?>
    <!-- Your content goes here  -->
<div class="application_form">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12">
        <!--  Contact Form  -->
<div class="contact-form"> 
<h3 class="text-center"> Country Visa & Fees</h3>
<form method="post" action="">
 <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
 echo form_open("countryfact", $attributes);?>
 
<div class="row">
<div class="col-lg-2 col-md-2">
<label>Visa Country:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">  
<select name="country" id="country"  class="form-control" required >
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
</div>
<div class="col-lg-2 col-md-2">
<label> Visa Types: :<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">  
<select name="allvisa" id="allvisa"  class="form-control" required >
<option value="">Select VISA Type</option>           
<?php
foreach ($allvisa as $qu) {
  ?>
<option value= '<?php echo $qu['name']; ?>'>
<?php
echo $qu['name'];?> </option>
 <?php
}
?>
 </select>
</div>
</div>
<div class="row">
<div class="col-lg-2 col-md-2">
<label>Indian Cities:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">  
<select name="city" id="city"  class="form-control">
<option value="">Select City</option>           
<?php
foreach ($city as $cu) {
  ?>
<option value= '<?php echo $cu['city_name']; ?>'>
<?php
echo $cu['city_name'];?> </option>
 <?php
}
?>
 </select>
</div>
</div>
                <div class="row">
                <div class="col-lg-3 col-md-3">
                <label>Document Check List:</label>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- <input type="text" name="Document" class="form-control" id="Document"> -->
                <textarea id="editor1" name="Document" rows="10" cols="12" id="Document"></textarea>
                </div>  
                </div>

<div class="row">
<div class="col-lg-3 col-md-3">
<label>Processing Time: <span>*</span></label>
</div>
<div class="col-lg-8 col-md-8 col-xs-12">
<input type="text" name="Processing" class="form-control" id="Processing">
</div> 
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Visa Fees: <span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Fees" class="form-control" placeholder="visa fee key" id="Fees">
<input type="text" name="Fees1" class="form-control" placeholder="visa fee key" id="Fees">
<input type="text" name="Fees2" class="form-control" placeholder="visa fee key" id="Fees">
<input type="text" name="Fees3" class="form-control" placeholder="visa fee key" id="Fees">
<input type="text" name="Fees4" class="form-control" placeholder="visa fee key" id="Fees">
</div> 
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="value" class="form-control" placeholder="visa fee value" id="value">
<input type="text" name="value1" class="form-control" placeholder="visa fee value" id="value">
<input type="text" name="value2" class="form-control" placeholder="visa fee value" id="value">
<input type="text" name="value3" class="form-control" placeholder="visa fee value" id="value">
<input type="text" name="value4" class="form-control" placeholder="visa fee value" id="value">
</div> 
</div>  

<div class="attached_file">
<div class="row">
<div class="col-lg-2 col-md-2">
  <label class="attached_file">Attache File</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-12">
<label for="myfile">Select a file:</label>
<input type="file" id="myfile" name="myfile">
</div>
</div>
</div>

<div class="submit-area text-center">
<button class="btn-hover color-1" type="submit">Submit</button>
</div>

</form>
</div>
 <!-- End:Contact Form  -->
</div>
</div>
</div>
</div>
</section>
<?php include 'footer.php'; ?>
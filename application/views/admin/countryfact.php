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
  <li class="breadcrumb-item active">Add Country Fact</li>
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
<h3 class="text-center"> Country Fact Finder </h3>
<form method="post" action="">
 <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
 echo form_open("countryfact", $attributes);?>
 
<div class="row">
<div class="col-lg-3 col-md-3">
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
</div>
                <div class="row">
                <div class="col-lg-2 col-md-2">
                <label>Name:</label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <input type="text" name="name" class="form-control" id="name">
                </div> 
                <div class="col-lg-2 col-md-2">
                <label>Area:</label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <input type="text" name="area" class="form-control" id="area">
                </div> 
                </div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Location: <span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="location" class="form-control" id="location">
</div> 
<div class="col-lg-2 col-md-2">
<label>Population:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="population" class="form-control" id="population">
</div> 
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Time: <span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="time" class="form-control" id="time">
</div> 
<div class="col-lg-2 col-md-2">
<label>Currency:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="currency" class="form-control" id="currency">
</div> 
</div>               
                    <div class="row">
                    <div class="col-lg-2 col-md-2">
                    <label>Capital:<span>*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="capital" class="form-control" id="capital" required >
                    </div>
                    <div class="col-lg-2 col-md-2">
                    <label>Climate:<span>*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="climate" class="form-control" id="climate" required >
                    </div>
                    </div>
                  
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                    <label>Language:</label>
                    </div>                          
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="language" id="language" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-2">
                    <label>Airline Name:</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="airline" id="airline" class="form-control">
                    </div>
                    </div>

<div class="row">
<div class="col-lg-2 col-md-2">
 <label>Holiday:</label>
</div>  
 <div class="col-lg-8 col-md-8 col-xs-12">
<!-- <textarea name="holiday"  rows="10" cols="12" placeholder="holiday" class="form-control"> </textarea> -->
<textarea id="editor1" name="holiday" rows="10" cols="12" id="holiday"></textarea>
</div> 
</div>
                 
<div class="row">
<div class="col-lg-2 col-md-2">
<label>International Airports:</label>
</div>  
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="airport" id="airport" class="form-control">
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
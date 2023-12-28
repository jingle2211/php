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
  <li class="breadcrumb-item active">Diplomatic Representations </li>
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
<h3 class="text-center"> Diplomatic Representations </h3>
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
</div>
                <div class="row">
                <div class="col-lg-2 col-md-2">
                <label>Name:</label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <input type="text" name="Name" class="form-control" id="Name">
                </div> 
                <div class="col-lg-2 col-md-2">
                <label>Address:</label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <input type="text" name="Address" class="form-control" id="Address">
                </div> 
                </div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>City/Pin Code: <span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="pin_code" class="form-control" id="pin_code">
</div> 
<div class="col-lg-2 col-md-2">
<label>Telephone:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Telephone" class="form-control" id="Telephone">
</div> 
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Fax: <span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Fax" class="form-control" id="Fax">
</div> 
<div class="col-lg-2 col-md-2">
<label>Email:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Email" class="form-control" id="Email">
</div> 
</div>               
                         
                <div class="row">                        
                    <div class="col-lg-2 col-md-2">
                    <label>Website:</label>
                    </div>                          
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="Website" id="Website" placeholder="Website" class="form-control">
                    </div>
                    </div>

<div class="row">
<div class="col-lg-2 col-md-2">
 <label>Notes:</label>
</div>  
 <div class="col-lg-8 col-md-8 col-xs-12">
<textarea name="Notes" id="editor1"  rows="10" cols="12" placeholder="Notes" class="form-control"> </textarea>
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
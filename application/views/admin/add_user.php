<?php include 'header.php'; ?>

<section class="content">
<div class="container-fluid">
        <div class="block-header">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
        <h4 class="page-title">Profile</h4>
        </li>
        <li class="breadcrumb-item bcrumb-1">
        <a href="<?= base_url('Admin/dashboard'); ?>">
        <i class="fas fa-home"></i> Home</a> </li>
        <li class="breadcrumb-item active">Add User</li>
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
       
        <h4 class="text-center py-3">USER INFORMATION</h4>
        <form method="post">
        <div class="row">
                <div class="col-lg-2 col-md-2">
                 <label>Branch<span>*</span></label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                  <select name="branch" id="branch" aria-placeholder="Select Branch" class="form-control" required >
                  <option value=""> select Branch </option>
             <?php
foreach ($branch as $qu) {
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
<label>User Type:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<select class="form-control" name="user_type" id="User_type" required="">
                            <option value="">Select User</option>                           
                            <option>General</option>
                            <option>Staff</option>
                            <option>Distribution</option>
                            <option>Ivs Clients</option>
                        </select>
</div>
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Full Name:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" class="user_form" name="name" id="name" placeholder="Full Name" required/>
</div>
<div class="col-lg-2 col-md-2">
<label>Contact No:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" class="form-control" name="contact" id="contact" placeholder="Contact No" >   
</div>
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Username:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" class="form-control" name="username" id="username" placeholder="username" >
</div>
<div class="col-lg-2 col-md-2">
<label>password:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="password" class="form-control" name="password" id="password" placeholder="Password" >   
</div>
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Email Id:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="email" class="form-control" name="email" id="email" placeholder="Email" >   
</div>
</div>

<div class="submit-area text-center">
<button class="btn-hover submit-area2" type="submit">Submit</button>
</div>    
    <!-- PAGE CONTENT ENDS -->
 </form>

</div>
<!-- ///// Footer Js ///// -->
<?php include 'footer.php'; ?>
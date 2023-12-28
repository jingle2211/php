<?php include'header.php'; ?>

<html>
<head>
 <title>Complete User Registration</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
<div class="blog-block2 bg-gray-color" style="background-image:url('<?= base_url(); ?>images/bg1.jpg');repeat:no-repeat;background-position: center;">
 <div class="container">
  <br />
  <h2 class="form-title text-center">Ivs_Visa Registration Form</h2>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">User Registration</div>
   <div class="panel-body">
   <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
    <form method="post" action="<?php echo base_url(); ?>register/validation">
     <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="user_name" placeholder="Name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" placeholder="Email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>

     <div class="form-group">
      <label>Enter Your Contact No</label>
      <input type="text" name="user_contact" placeholder="Contact no" class="form-control" value="<?php echo set_value('user_contact'); ?>" />
      <span class="text-danger"><?php echo form_error('user_contact'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your User Name</label>
      <input type="text" name="name" placeholder="UserName" class="form-control" value="<?php echo set_value('name'); ?>" />
      <span class="text-danger"><?php echo form_error('name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" placeholder="Password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <label>Select Branch </label>
      <select class="form-control" name="branch" id="Branch">
                            <option value="">Select Branch</option>
                            <option>IVS-BANGALORE (BLR), Bangalore</option>
                            <option>IVS-DELHI (DEL), Delhi</option>
                            <option>IVS-HYD (HYD), Bangalore</option>
                            <option>IVS-MAA (MAA), Bangalore</option>
                            <option>IVS-MUMBAI (BOM), Mumbai</option>
                            <option>IVS-Pune (Pun), Mumbai</option>
                        </select>
      <span class="text-danger"><?php echo form_error('branch'); ?></span>
     </div>
     <div class="form-group">
      <label>Select User Type </label>
      <select class="form-control" name="user" id="user">
                            <option value="">Select Branch</option>
                            <option>General</option>
                            <option>Staff</option>
                            <option>Distribution</option>
                            <option>Ivs Clients</option>
                        </select>
      <span class="text-danger"><?php echo form_error('user'); ?></span>
     </div>
     <div class="form-group">
     <input type="checkbox" name="chkAgreeTerm" id="chkAgreeTerm" class="agree-term">
     <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="terms-and-condition.php" class="term-service">Terms of service</a></label>
     <input type="hidden" id="hdnSubmitype" name="hdnSubmitype" value="">
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

<?php include'footer.php';?>
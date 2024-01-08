<?php include 'header.php'; ?>
<!-- Right Sidebar -->
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
        <i class="fas fa-home"></i> Home</a>
        </li>
        <li class="breadcrumb-item active">Add New Clients</li>
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

  <div class="client_information">
  <div class="container">
  <div class="row">
  <div class="contact-form">
       <h3 class="text-center py-3">CLIENT INFORMATION</h3>
        <form method="post">
                <div class="row">
                <div class="col-lg-2 col-md-2">
                 <label>Organisation<span>*</span></label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                  <input type="text" name="organisation" class="form-control" placeholder="Organisation"  id="organisation">
                  </div>
                  <div class="col-lg-2 col-md-2">
                  <label>Implant:</label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                  <input type="text" name="Implant" class="form-control" placeholder="Implant"  id="Implant">
                  </div> 
                  </div>
                 
                    <div class="row">
                    <div class="col-lg-2 col-md-2">
                    <label>Contact Person: <span>*</span></label>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <input type="text" name="Person" class="form-control" placeholder="Contact Person"  id="Person">
                    </div> 
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <input type="text" name="Person2" class="form-control" placeholder="Contact Person2"   id="Person2">
                    </div> 
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <input type="text" name="Person3" class="form-control" placeholder="Contact Person3"   id="Person3">
                    </div> 
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                          <label>Role: <span>*</span></label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                        <select name="Role" id="Role" class="form-control">
                        <option value=""> select Role </option>
                          <option value="Client">Client</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                        </div> 
                        <div class="col-lg-2 col-md-2">
                        <label>Branch: <span>*</span></label>
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
 </div>
                    <h3 class="text-center py-3">CONTACT DETAILS</h3>
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                              <label>Address:<span>*</span></label>
                            </div>
                            <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" class="form-control" name="Address" id="Address" placeholder="Address" >
                            </div>
                            </div>
                      <div class="row">
                      <div class="col-lg-2 col-md-2 col-xs-12">
                        <label>City<span>*</span></label>
                      </div>
                      <div class="col-lg-4 col-md-4 col-xs-12">
                        <input type="text" name="city" placeholder="City" class="form-control" id="city">
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12">
                        <label>Country<span>*</span></label>
                      </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        
                        <select name="country" id="country"  class="form-control">
                        <option value="">Select Country</option>
              
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
                    <div class="col-lg-2 col-md-2 col-xs-12">
                      <label>Pincode:<span>*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="Pincode" class="form-control" id="Pincode" placeholder="PinCode">
                  </div>
                  <div class="col-lg-2 col-md-4 col-xs-12">
                    <label>Mobile No:</label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="Mobile" class="form-control" id="Mobile" placeholder="Mobile No.">
                </div>
                  </div>
                  
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <label>Telephone:<span>*</span></label>
                    </div>                          
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <input type="text" name="Telephone" id="Telephone" class="form-control" placeholder="Contact">
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <label>Fax:</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                      
                        <input type="text" name="fax" class="form-control" id="fax" placeholder="Fax Number">
                    </div> 
                    </div>
                    <div class="row">
                    <div class="col-lg-2 col-md-3">
                      <label>Website:</label>
                    </div>                          
                    <div class="col-lg-5 col-md-5 col-xs-12">
                        <input type="text" name="website" id="website" class="form-control" placeholder="Website">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-2 col-md-3">
                    <label>Company Email:<span>*</span></label>
                    </div>                          
                    <div class="col-lg-4 col-md-3 col-xs-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Id">
                    </div>
                    <div class="col-lg-2 col-md-3">
                  <label>Others:</label>
                    </div> 
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    
                    <input type="email" name="otheremail" class="form-control"  id="otheremail">
                    </div> 
                    </div>
                        
                <h4 class="text-center py-3">OTHER DETAILS</h4>
                <div class="visa_detail">
            <div class="row">
            <div class="col-lg-3 col-md-3">
                <label>Allow Access for Visa Information</label>
                </div> 
                <div class="col-lg-1 col-md-1 col-xs-12">
                <div class="form-check">
                <input class="form-check-input" name="Access" type="checkbox" id="Access">
                <label class="form-check-label" for="Access"> </label>
                </div>
                </div>
                  <div class="col-lg-1 col-md-3 col-xs-12">
                  <label>From:</label>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                  <input type="date" name="from_date" class="form-control"  id="from_date">
                </div>
                <div class="col-lg-1 col-md-3 col-xs-12">
                <label>To:</label>
               </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                <input type="date" name="to_date" class="form-control"  id="to_date">
                </div>
            </div>
                </div>
        <div class="visa_detail">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12">
        <lable>IsActive:</lable>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="IsActive" id="IsActive">
        <label class="form-check-label" for="IsActive"> </label>
        </div>
  </div>
  </div>
  </div>
  <div class="clearfix"></div>
    <h4 class="text-center py-3">LOGIN DETAILS</h4>
                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-xs-12">
                            <label>User Name:<span>*</span></label>
                          </div>
                          <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" name="username" class="form-control" id="username" placeholder="UserName">
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-xs-12">
                            <label>Password:<span>*</span></label>
                          </div>
                          <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="password" name="Password" class="form-control" id="Password" placeholder="Password" >
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-2 col-md-2">
                        <label>Confirm Password:<span>*</span></label>
                        </div> 
                        <div class="col-lg-5 col-md-5 col-xs-12">
                        <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password" placeholder="Confirm Password" >
                    </div>
                    </div>
               
                    <div class="col-lg-9 col-md-9 col-xs-12 wow slideInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <div class="submit-area text-center">
                    <button class="btn-hover submit-area2" type="submit">Submit</button>
                     </div>
                    </div>
              
        </form>
  </div>
  </div>
  </div>
  </div>
    <?php include 'footer.php'; ?>
    </body>
    </html>
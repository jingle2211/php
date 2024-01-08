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

            <li class="breadcrumb-item active">Add New Branch</li>
          </ul>
        </div>
      </div>
    </div>
    <?php if($this->session->flashdata('success')){ ?> 
              <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                              <?= $this->session->flashdata('success'); ?>
                            </div>
           <?php  } ?>
  <div class="client_information">
  <div class="container">
  <div class="row">
         <!-- Contact Form  -->
        <div class="contact-form">
            <h3 class="text-center">Branch INFORMATION</h3>
            <form method="post">
                <div class="row">
                  <div class="form-group col-md-2">
                 <label>Branch Name<span>*</span></label>
                  </div>
                  <div class="form-group col-md-4">
                  <input type="text" name="name" placeholder=" BranchName" class="form-control"  id="name">
                  </div>
      
                    <div class="form-group col-md-2">
                    <label>Branch Code</label>
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" name="code" placeholder="Branch Cose" class="form-control"  id="code">
                    </div> 
                    </div>
                  
                    <div class="row">
                          <div class="form-group col-md-2">
                          <label>Address<span>*</span></label>
                          </div>
                          <div class="col-lg-4 col-md-4">
                          <input type="text"  name="address" id="address" class="form-control" placeholder="Address">
                          </div>
                      <div class="form-group col-md-2 col-xs-12">
                      <label>City<span>*</span></label>
                      </div>
                      <div class="col-md-4 col-xs-12">
                      <input type="text" name="city" class="form-control" id="city" placeholder="City">
                    </div>
                    </div>      
        <div class="row">
       
        </div>
  <div class="submit-area text-center">
  <button class="btn-hover submit-area2" type="submit">Submit</button>
  </div>
  </form>
  </div>
 <!-- End:Contact Form  -->
  </div>
  </div>
  </div> 
  <?php include 'footer.php'; ?>
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
                                <a href="<?= base_url('Dashboard'); ?>">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            
                            <li class="breadcrumb-item active">Edit Packages</li>
                        </ul>
                    </div>
                </div> 
            </div>
            <!-- Your content goes here  -->
            
                  <?php if($this->session->flashdata('success')){ ?> 
              <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                              <?= $this->session->flashdata('success'); ?>
                            </div>
           <?php  } ?>
           
             <div class="row clearfix"><br><br>

                 
                <div class="col-lg-12 col-md-12">
                     
                    <div class="tab-content">
                            
                        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Edit</strong> Packages</h2>
                                </div>
                                <div class="body">
                                <form method="post">
                                <label for="email_address">Country</label>
                                    <div class="form-group">
                                    <input type="text"  name="country" class="form-control title" value="<?= $details->country; ?>" style="border:1px solid; padding-left:10px;"> 
                                        
                                    </div>
                                <label for="email_address">Visa Type</label>
                                    <div class="form-group">
                                    <input type="text"  name="visa_type" class="form-control title" value="<?= $details->visa_type; ?>" style="border:1px solid; padding-left:10px;"> 
                                        
                                    </div>
                                    <label for="email_address">Enter Validity</label>
                                    <div class="form-group">
                                    <input type="text"  name="validity" class="form-control title" value="<?= $details->validity; ?>" style="border:1px solid; padding-left:10px;"> 
                                        
                                    </div>
                                    <br>
                                    <!-- Url Input -->
                                    <label for="processing">Processing Day</label>
                                      <div class="form-group">
                                      <input type="text"  name="processing" class="form-control title" value="<?= $details->processing; ?>" style="border:1px solid; padding-left:10px;"> 
                                        
                                    </div>
                                    <label for="Description">Embassy Fee</label>
                                    <div class="form-group">
                                    <input type="text"  name="embassyfee" class="form-control title" value="<?= $details->embassyfee; ?>" style="border:1px solid; padding-left:10px;"> 
                                       
                                    </div>
                                    <label for="Note">Service fee:</label>
                                    <div class="form-group">
                                    <input type="text"  name="servicefee" class="form-control title" value="<?= $details->servicefee; ?>" style="border:1px solid; padding-left:10px;"> 
                                      
                                    </div>
                                      <label for="email_address">Enter GST</label>
                                    <div class="form-group">
                                    <input type="text"  name="GST" class="form-control title" value="<?= $details->GST; ?>" style="border:1px solid; padding-left:10px;"> 

                                    </div>
                                     <label for="email_address">Total cost</label>
                                    <div class="form-group">
                                <div class="form-group demo-tagsinput-area">
                                <div class="form-line">
                                <input type="text"  name="totalcost" class="form-control title" value="<?= $details->totalcost; ?>" style="border:1px solid; padding-left:10px;"> 
                               
                                </div>
                            </div>
                            </div>
              
                                    <div class="form-group">
                                    <input type="submit" class="btn-hover color-1" name="submit" value="Update">
                                    </div>
                                                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plugins Js -->
  <?php include 'footer.php'; ?>
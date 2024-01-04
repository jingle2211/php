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
            <i class="fas fa-home"></i> Home</a> </li>           
            <li class="breadcrumb-item active">Edit News Latter</li>
            </ul>
            </div> 
            </div>
            </div>
            <!-- Your content goes here  -->
            
            <?php if($this->session->flashdata('success')){ ?> 
              <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span> </button>
             <?= $this->session->flashdata('success'); ?>
            </div>
           <?php  } ?>
           
            <div class="row clearfix"><br><br>  
            <div class="col-lg-12 col-md-12">
                     
            <div class="tab-content">      
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
                    <div class="card">
                    <div class="header">
                    <h2> <strong>Update</strong>  News Latter</h2>
                    </div>
                    <div class="body">
                 <?= form_open_multipart('Admin/update_latter'); ?>
            
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label for="email_address">Name</label>
										<div class="form-group">
											<input type="text" class="form-control title"  placeholder="name" name="name" value="<?= $details['name']; ?>" required>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label for="email_address">Images</label>
										<div class="form-group">
											<input type="text" class="form-control title"  placeholder="images" name="image" value="<?= $details['image']; ?>" required>
										</div>
									</div>
									<!-- <div class="col-md-6 col-sm-6 col-xs-12">
										<label for="email_address">Registration Number</label>
										<div class="form-group">
											<input type="text" class="form-control title" id="v_registration_no" placeholder="Registration Number" name="registration_no" value="<?= $details['registration_no']; ?>" required>
										</div>
									</div>
									 -->
									
									<div class="col-md-6 col-sm-6 col-xs-12">
										<label for="email_address">Description:</label>
										<div class="form-group">
										<textarea  class="form-control title" rows="4"   placeholder="description" name="description" value="<?= $details['description']; ?>" required></textarea>
										</div>
									</div>
                    <div class="form-group">
                    <button class="btn-hover color-1" type="submit">Update</button>
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
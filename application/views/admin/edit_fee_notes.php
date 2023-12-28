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
                <li class="breadcrumb-item active">Edit Fee & Notes</li>
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
                <h2> <strong>Edit</strong> Fee & Notes</h2>
                </div>
                                    <div class="body">
                                    <form method="post">
                                    <label for="Name">Visa Type:</label>
                                    <div class="form-group">
                                    <input type="text"  name="allvisa" class="form-control title" value="<?= $details->allvisa; ?>" required>

                                    </div>
                                    <!-- Url Input -->
                                    <label for="processing">City:</label>
                                    <div class="form-group">
                                    <input type="text"  name="city" class="form-control title" value="<?= $details->city; ?>" required>

                                    </div>
                                    <label for="Description">Document:</label>
                                    <div class="form-group">
                                    <input type="text"  name="Document" class="form-control title" value="<?= $details->Document; ?>">
                                 
                                    </div>
                                    <label for="Note">Processing Time:</label>
                                    <div class="form-group">
                                 
                                    <input type="text"  name="Processing" class="form-control title" value="<?= $details->Processing; ?>">
                                    </div>
                                    <label for="Language">Visa Fees Key:</label>
                                    <div class="form-group">
                                    <input type="text"  name="Fees" class="form-control title" value="<?= $details->Fees; ?>">

                                    </div>
                                    <label for="Area">Visa Fee Value:</label>
                                    <div class="form-group">      
                                    <input type="text"  name="value" class="form-control title" value="<?= $details->value; ?>">                                   
                                    
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
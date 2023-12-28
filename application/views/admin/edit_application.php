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
            <li class="breadcrumb-item active">Update Application</li>
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
           
        <div class="row clearfix"><br>     
        <div class="col-lg-12 col-md-12">         
        <div class="tab-content">                
        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
        <div class="card">
            <div class="header">
            <h2> <strong>Update</strong> Application</h2>
            </div>
            <div class="body">
            <form method="post">
            <label for="email_address">Select Branch: </label>
            <div class="form-group">
            
            <input type="text" name="branch" value="<?= $allapplication->branch; ?>" required>
            </div>                                         
            <label for="processing">Sender Staff:</label>
            <div class="form-group">
            <input type="text" name="sender_Staff" value="<?= $allapplication->sender_Staff; ?>">
            </div>
            <label for="Description">Client:</label>
            <div class="form-group">
            <input type="text" name="client" value="<?= $allapplication->client; ?>">
            </div>
            <label for="Note">Corporate Name:</label>
            <div class="form-group">
            <input type="text" name="corporate_name" value="<?= $allapplication->corporate_name; ?>">
            </div>
            <label for="email_address">Full Name:</label>
            <div class="form-group">
            <input type="text" class="form-control"  name="name"  value="<?= $allapplication->name; ?>">
            </div>
            <label for="email_address">Pasport No:</label>
            <div class="form-group">                                          
            <input type="text" class="form-control" name="pasport_no"  value="<?= $allapplication->pasport_no; ?>">                                                        
            </div>
            <label for="email_address">Date of Travel:</label>
            <div class="form-group">                                          
            <input type="date" class="form-control" name="date_of_travel"  value="<?= $allapplication->date_of_travel; ?>">                                                        
            </div>
                                     
       
                                    
        <div class="form-group">
        <input type="submit" name="submit" value="Update">
        </div>
                                                                    
        </div>

    </div>                    
    </div>
    </div>
    </div>
    </div>
</div>
</section>
<!-- Footer Js -->
<?php include 'footer.php'; ?>
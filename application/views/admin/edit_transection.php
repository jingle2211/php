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
            <li class="breadcrumb-item active">Update Transection</li>
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
            <h2> <strong>Update</strong> ledger</h2>
            </div>
            <div class="body">
            <form method="post">
            <label for="email_address">Ledger Name:</label>
            <div class="form-group">
            
            <input type="text" name="name" value="<?= $transection->name; ?>" required>
            </div>                                         
            <label for="processing">Opening Balance:</label>
            <div class="form-group">
            <input type="text" name="amount" value="<?= $transection->amount; ?>">
            </div>
            <label for="Description">Ledger Type:</label>
            <div class="form-group">
            <input type="text" name="ledger" value="<?= $transection->ledger; ?>">
            </div>
            <label for="Note">Ledger Group:</label>
            <div class="form-group">
            <input type="text" name="group" value="<?= $transection->group; ?>">
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
<!-- Footer Js -->
<?php include 'footer.php'; ?>
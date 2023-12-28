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
            <h2> <strong>Update</strong> Transection</h2>
            </div>
            <div class="body">
            <form method="post">
            <label for="email_address">Visa Fee</label>
            <div class="form-group">
            
            <input type="text" name="visa_fee" value="<?= $transection->visa_fee; ?>" required>
            </div>                                         
            <label for="processing">service Fee</label>
            <div class="form-group">
            <input type="text" name="service_fee" value="<?= $transection->service_fee; ?>">
            </div>
            <label for="Description">Embassy Fee</label>
            <div class="form-group">
            <input type="text" name="embassy_fee" value="<?= $transection->embassy_fee; ?>">
            </div>
            <label for="Note">Miscellaneous Charges:</label>
            <div class="form-group">
            <input type="text" name="miscellaneous" value="<?= $transection->miscellaneous; ?>">
            </div>
            <label for="email_address">Bill No/Recipt</label>
            <div class="form-group">
            <input type="text" class="form-control"  name="bill_no"  value="<?= $transection->bill_no; ?>">
            </div>
            <label for="email_address">Total Amount</label>
            <div class="form-group">                                          
            <input type="text" class="form-control" name="total_amount"  value="<?= $transection->total_amount; ?>">                                                        
            </div>
                                     
        <?php if ($this->session->flashdata('message')) {
          # code...
         echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
            } ?>
                                    
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
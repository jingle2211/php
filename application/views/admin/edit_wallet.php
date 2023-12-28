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
            <li class="breadcrumb-item active">Update Wallet</li>
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
                <h2> <strong>Update</strong> Wallet</h2>
                </div>
                    <div class="body">
                    <form method="post">
                    <label for="email_address">User Name:</label>
                    <div class="form-group">
                    <input type="text" name="name" value="<?= $wallet->name; ?>" required>
                    </div>

                    <label for="processing"> Email</label>
                    <div class="form-group">
   
                    <input type="text" name="email" value="<?= $wallet->email; ?>" required>
                    </div>
                    <label for="Description">Amount</label>
                    <div class="form-group">
                    <input type="text" name="amount" class="form-control" value="<?= $wallet->amount; ?>">
                    </div>
                    <label for="Note">Branch :</label>
                    <div class="form-group">
                    <input type="text" name="branch" class="form-control" value="<?= $wallet->branch; ?>"> 
                    </div>
          
                    <?php if ($this->session->flashdata('message')) {
                      echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
                         } ?>
                                 
   <div class="submit-area text-center">
   <input type="submit" class="btn-hover color-1" name="submit" value="Update">
  </div>
      </form>
             </div>           
            </div>
            </div>
            </div>
            </div>
    </div>
    </section>
    <!-- Plugins Js -->
  <?php include 'footer.php'; ?>
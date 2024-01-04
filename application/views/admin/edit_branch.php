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
            <li class="breadcrumb-item active">Edit Branch</li>
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
                <h2> <strong>Update</strong> Branch:</h2>
                </div>
                    <div class="body">
                    <form method="post">
                    <div class="row">    
                    <div class="form-group col-lg-6"style="display: flex; ">
                        <div class="col-md-4">
                      <label for="email_address">Name :</label>
                      </div>
                       <div class="col-md-8">
                    <input type="text" name="name" value="<?= $item->name; ?>" required style="border:1px solid; padding-left:10px;">
                    </div>
                    </div>
                   <!--address group-->
                    <div class="form-group col-lg-6"style="display: flex; " >
                        <div class="col-md-4">
                     <label for="processing"> Address :</label>
                     </div>
                     <div class="col-md-8">
                    <input type="text" name="address" value="<?= $item->address; ?>" required style="border:1px solid;  padding-left:10px;">
                    </div>
                    </div>
                    <!---cord-group-->
                    <div class="form-group col-lg-6"style="display: flex;">
                     <div class="col-md-4">
                     <label for="Description">Branch Code :</label>
                     </div>
                     <div class="col-md-8">
                    <input type="text" name="code" class="form-control" value="<?= $item->code; ?>" style="border:1px solid; padding-left:10px;">
                    </div>
                    </div>
                    <!--city-group-->
                    <div class="form-group col-lg-6"style="display: flex;">
                    <div class="col-md-4">
                     <label for="Note">City :</label>
                     </div>
                     <div class="col-md-8">
                    <input type="text" name="city" class="form-control" value="<?= $item->city; ?>" style="border:1px solid;  padding-left:10px;"> 
                    </div>
                    </div>
                  </div>                               
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
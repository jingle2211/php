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
                <li class="breadcrumb-item active">Edit Country Fact</li>
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

            <div class="row clearfix"><br>
            <div class="col-lg-12 col-md-12">  
            <div class="tab-content">        
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
                <div class="header">
                <h2> <strong>Edit</strong> Country Fact & Finder</h2>
                </div>
                                    <div class="body">
                                    <form method="post">
                                    <div class="row">    
                                    <div class="form-group col-lg-6" style="display: flex; ">
                                     <div class="col-md-4">
                                    <label for="Name">Name:</label>
                                    </div>
                                     <div class="col-md-8">
                                    <input type="text"  name="name" class="form-control title" value="<?= $details->name; ?>" style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <!-- Url Input -->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                     <div class="col-md-4">
                                     <label for="processing">Location:</label>
                                     </div>
                                     <div class="col-md-8">
                                    <input type="text" class="form-control title" name="location" value="<?= $details->location; ?>" style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                    <div class="col-md-4">
                                    <label for="Description">Time:</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" name="time" class="form-control title"  value="<?= $details->time; ?>" style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <!--capital-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                      <div class="col-md-4">
                                    <label for="Note">Capital:</label>
                                    </div>
                                      <div class="col-md-8">
                                    <input type="text" name="capital" class="form-control title" value="<?= $details->capital; ?>" style="border:1px solid; padding-left:10px;" >
                                    </div>
                                    </div>
                                    <!--language-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                      <div class="col-md-4">
                                     <label for="Language">Language:</label>
                                     </div>
                                     <div class="col-md-8">
                                    <input type="text" class="form-control"  name="language" value="<?= $details->language; ?>" style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <!--area-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                      <div class="col-md-4">              
                                    <label for="Area">Area:</label>
                                    </div>
                                      <div class="col-md-8">
                                    <input type="text" class="form-control" name="area"  value="<?= $details->area; ?>" style="border:1px solid; padding-left: 10px;">
                                    </div>
                                    </div>
                                    <!--Population-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                          <div class="col-md-4">                    <label for="Population">Population:</label> 
                                          </div>
                                        <div class="col-md-8">
                                    <input type="text" class="form-control" name="population" placeholder="Population"  value="<?= $details->population; ?>" style="border:1px solid; padding-left: 10px;">
                                    </div>
                                    </div>
                                    <!--Currency-->
                                    <div class="form-group col-lg-6"style="display: flex; "> 
                                      <div class="col-md-4">
                                    <label for="email_address">Currency:</label> </div> 
                                      <div class="col-md-8">
                                    <input type="text" class="form-control" name="currency"  value="<?= $details->currency; ?>"style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <!--International-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                          <div class="col-md-4">
                                        <label for="email_address">International Airport:</label>
                                        </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="airport"  value="<?= $details->airport; ?>"style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    </div>
                                    <label for="Note">Holiday:</label>
                                    <div class="form-group">
                                    <textarea id="editor1" name="holiday" rows="10" cols="12" ><?= $details->holiday; ?> </textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                    <input type="submit" class="btn-hover color-1" name="submit" value="Update">
                                    </div>
                                    </form>                                                                
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
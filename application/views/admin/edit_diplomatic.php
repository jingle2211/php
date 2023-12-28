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
                <li class="breadcrumb-item active">Edit Diplomatic Representations</li>
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
                <h2> <strong>Edit</strong> Diplomatic Representations</h2>
                </div>
                                    <div class="body">
                                    <form method="post">
                                    <div class="row"> 
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                    <div class="col-md-4">
                                    <label for="Name">Name:</label>
                                     </div>
                                      <div class="col-md-8">
                                    <input type="text"  name="Name" class="form-control title" value="<?= $details->Name; ?>" required style="border:1px solid; padding-left:10px;">
                                    </div>
                                    </div>
                                    <!-- Url Input -->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                       <div class="col-md-4">  
                                     <label for="processing">Address:</label>
                                     </div>
                                      <div class="col-md-8">
                                      <input type="text"  name="Address" class="form-control title" value="<?= $details->Address; ?>"  style="border:1px solid; padding-left:10px;">
                                    
                                    </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                     <div class="col-md-4">    
                                   <label for="Description">City/Pin_Code:</label>
                                   </div>
                                    <div class="col-md-8">
                                    <input type="text"  name="pin_code" class="form-control title" value="<?= $details->pin_code; ?>" style="border:1px solid; padding-left:10px;" >

                                    </div>
                                    </div>
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                     <div class="col-md-4">    
                                     <label for="Note">Telephone:</label>
                                     </div>
                                      <div class="col-md-8">
                                      <input type="text"  name="Telephone" class="form-control title" value="<?= $details->Telephone; ?>" style="border:1px solid; padding-left:10px;">
                                    
                                    </div>
                                    </div>
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                     <div class="col-md-4">    
                                    <label for="Language">Fax:</label>
                                    </div>
                                     <div class="col-md-8">
                                     <input type="text"  name="Fax" class="form-control title" value="<?= $details->Fax; ?>" style="border:1px solid; padding-left: 10px;">
                                    
                                    </div>
                                    </div>
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                    <div class="col-md-4"> 
                                    <label for="Area">Email:</label>
                                    </div>
                                     <div class="col-md-8">
                                     <input type="text"  name="Email" class="form-control title" value="<?= $details->Email; ?>" style="border:1px solid; padding-left: 10px;">
                                </div>                    
                                    </div>
                                   <div class="form-group col-lg-6"style="display: flex; "> 
                                    <div class="col-md-4">
                                    <label for="Population">Website:</label>
                                    </div>
                                     <div class="col-md-8">
                                     <input type="text"  name="Website" class="form-control title" value="<?= $details->Website; ?>" style="border:1px solid; padding-left:10px;">   
                                    
                                    </div>
                                    </div>
                                    <!--office time-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                     <div class="col-md-4">            
                                    <label for="email_address">Office Time:</label>
                                    </div>
                                     <div class="col-md-8">
                                     <input type="text"  name="Office" class="form-control title" value="<?= $details->Office; ?>" style="border:1px solid; padding-left:10px;"> 
                               
                                    </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                     <label for="Note">Notes:</label>
                                     <textarea id="editor1" name="Notes" rows="10" cols="12"  value="<?= $details->Notes; ?>"> </textarea>
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
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
                <a href="<?= base_url('Dashboard'); ?>"><i class="fas fa-home"></i> Home</a>
                </li>           
                <li class="breadcrumb-item active">Edit Client</li>
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
           
             <div class="row clearfix">
                 
                <div class="col-lg-12 col-md-12">
                     
                    <div class="tab-content">
                            
                        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                <h2> <strong>Edit</strong> Client</h2>
                                </div>
                                <div class="body">
                                <form method="post">
                                <div class="row">
                            <div class="form-group col-lg-6"style="display: flex; ">
                               <div class="col-md-4">
                                <label for="email_address">Organisation</label>
                                 </div>
                                 <div class="col-md-8">
                                 <input type="text" name="Organisation" value="<?= $value->Organisation; ?>" style="border:1px solid; padding: 5px;">
                                  </div>
                                  </div>
                                    <!--implant-->
                                      <div class="form-group col-lg-6"style="display: flex; ">
                                           <div class="col-md-4">
                                        <label for="processing"> Implant</label>
                                        </div>
                                         <div class="col-md-8">
                                      <textarea name="Implant" required><?= $value->Implant; ?></textarea>
                                    </div>
                                    </div>
                                    
                                    <!--person-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                    <div class="col-md-4">
                                     <label for="Description">Person</label>
                                     </div>
                                      <div class="col-md-8">
                                        <!--<input type="text"  name="Person" rows="10" cols="12" ><//?= $value->Person; ?> </textarea>-->
                                        
                                        <input type="text" class="form-control" name="Person"  value="<?= $value->Person; ?>" style="border:1px solid; padding: 5px;">
                                    </div>
                                    </div>
                                   <!--address-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                         <div class="col-md-4">
                                         <label for="Note">Address :</label>
                                         </div>
                                          <div class="col-md-8">
                                        <textarea  name="Address" rows="10" cols="12" ><?= $value->Address; ?> </textarea>
                                    </div>
                                    </div>
                                  <!--mobile-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                         <div class="col-md-4">
                                         <label for="email_address"> Mobile</label>
                                         </div>
                                          <div class="col-md-8">
                                        <input type="text" class="form-control"  name="Mobile" value="<?= $value->Mobile; ?>" style="border:1px solid; padding: 5px;">
                                    </div>
                                    </div>
                                     <!--username-->
                                    <div class="form-group col-lg-6"style="display: flex; ">
                                         <div class="col-md-4">
                                        <label for="email_address">username </label>
                                        </div>
                                         <div class="col-md-8">
                                 <input type="text" class="form-control" name="username"  value="<?= $value->username; ?>" style="border:1px solid; padding: 5px;">
                                     </div>
                                    </div>
                  <div class="submit-area text-center">
                     <input type="submit" class="btn-hover color-1" name="submit" value="Update">
                              </div>
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
 <!-- Footer Js -->
  <?php include 'footer.php'; ?>
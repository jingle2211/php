<?php include'header.php';?>
	 <!-- ====== Page Header ====== --><br>
   <div class="blog-block bg-gray-color"style="background-image:url('<?= base_url(); ?>images/bg3.jpg'); background-repeat:no-repeat;padding: 40px 0 70px;">
       <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
				 <div class="row">
		 <div class="col-md-6" >
                    <div class="contact-us-content-right">
					
                            
                            <h2  style="text-align:left;color:#000;"><b>EDIT YOUR PROFILE</b> </h2>
                        
                         <form method="post"  action="<?= base_url('Dashboard/update_user') ?>"    class="advance-search-query">
                            <div class="regular-search">
                                <div class="form-content">
                                    <div class="row">
									 <div class="col-md-12 ">
                                             <div class="input">
											 <label style="color:#000;">Name</label>
                                                <input type="text" name="name" value="<?= $data['name']; ?>" placeholder="name">
                                                <input type="hidden" name="user_id" value="<?= $data['user_id']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-12 ">
                                             <div class="input">
											 <label style="color:#000;">Email</label>
                                                <input type="email" name="email" value="<?= $data['email']; ?>" placeholder="Email">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                         <p style="color: red">
                                        <?php if ($this->session->flashdata('message')) {
                                            # code...
                                            echo $this->session->flashdata('message');
                                        } ?>
                                        </p>

                                        <div class="col-md-12 ">
                                             <div class="input">
											  <label style="color:#000;">Mobile</label>
                                                <input type="text" name="mobile" value="<?= $data['mobile']; ?>" placeholder="phone">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->
										<!--  <div class="col-md-12 ">
                                             
											  <label style="color:#000;">Change Image</label>
                                                <input type="file" >
                                           
                                        </div> -->
										 <div class="col-md-12 " style="padding-top:20px;">
                                             
											 <button type="submit" class="btn-btn-danger blue-color">Update</button> 
									 
                                           
                                        </div><!--/.col-md-6-->

                       
                                    </div><!-- /.row -->
                                </div><!-- /.from-content -->
                            </div><!-- /.regular-search -->
                           

                            <!--<div class="check-vehicle-footer">
                                <div class="row"> 
                             								
                                   <center>
											  <a href="user-profile.php"><button type="button" class="button blue-button white-color">SAVE</button></a>
									  </center>  
									
                                    
                                </div>
                            </div>---><!-- /.check-vehicle-footer -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
			
           </div>
	
	            </div>
           </div>
	    </div>
	</div>
	<?php include'footer.php';?>
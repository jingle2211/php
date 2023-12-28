<?php include'header-home.php';?>
	 <!-- ====== Page Header ====== --><br>
   <div class="blog-block bg-gray-color"style=" background-repeat:no-repeat;padding: 20px 0 40px;">
       <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
				 <div class="row">
			
			<!-- My Profile -->

 <div class="col-md-4">
                    <div class="shipping-from-content" style="background-color: #413d3d; padding: 32px">
                        <div class="shipping-form-heading">
                        
                            <h2 class="from-title" style="color: #fff">My Profile  </h2>
                        </div><!-- /.shipping-form-heading -->

                          <form  action="<?= base_url('Dashboard/update_user') ?>" method="post"  class="advance-search-query">
                            <div class="regular-search">
                                <div class="form-con\tent">
                                	  
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Name</label>                         
                                             <input type="text" name="name"  class="form-control" value="<?= $details['name']; ?>">
                                               <input type="hidden" name="user_id" class="form-control" value="<?= $details['id_user']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->

                                         <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Email</label>                         
                                             <input type="text" disabled class="form-control" value="<?= $details['email']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->

                                          <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Mobile Number</label>                         
                                             <input type="text" disabled  class="form-control" value="<?= $details['mobile']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                         <div class="col-md-12 "><br>
                                            <div class="input"> 
                                                           
                                           <button class="butt form-control" type="submit">Update</button>
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
 										 <p style="color: #fff">
                                        <?php if ($this->session->flashdata('message')) {
                                            # code...
                                            echo $this->session->flashdata('message');
                                        } ?>
                                        </p>
                                    </div><!-- /.row -->
                                </div><!-- /.from-content -->
                            </div><!-- /.regular-search -->
                           
 
                        </form>
                    </div><!-- /.shipping-from-content -->
                </div>

		<!-- 	Myprofile -->	 
 <div class="col-md-4" style="display: none;">
                    <div class="shipping-from-content" style="background-color: #413d3d; padding: 32px">
                        <div class="shipping-form-heading">
                        
                            <h2 class="from-title" style="color: #fff">Edit Profile  </h2>
                        </div><!-- /.shipping-form-heading -->

                       <form  action="<?= base_url('Dashboard/update_user') ?>" method="post"  class="advance-search-query">
                            <div class="regular-search">
                                <div class="form-con\tent">
                                	   <p style="color: red">
                                        <?php if ($this->session->flashdata('message')) {
                                            # code...
                                            echo $this->session->flashdata('message');
                                        } ?>
                                        </p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Name</label>                         
                                             <input type="text" name="name" class="form-control" value="<?= $details['name']; ?>">
                                              <input type="hidden" name="user_id" class="form-control" value="<?= $details['id_user']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->

                                         <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Email</label>                         
                                             <input type="text" name="email" class="form-control" value="<?= $details['email']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->

                                          <div class="col-md-12">
                                            <div class="input"> 
                                            <label>Mobile Number</label>                         
                                             <input type="text"   class="form-control" value="<?= $details['mobile']; ?>">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                         <div class="col-md-12 "><br>
                                            <div class="input"> 
                                                           
                                           <button class="butt form-control" type="submit">Update</button>
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
 
                                    </div><!-- /.row -->
                                </div><!-- /.from-content -->
                            </div><!-- /.regular-search -->
                           
 
                        </form>
                    </div><!-- /.shipping-from-content -->
                </div>


	 <div class="col-md-8"> <img src="<?= base_url().'assets/side.jpg' ?>" class="img-responsive" style="width: 100%;
    height: auto"> </div>


	 
           </div>
	
	            </div>
           </div>
	    </div>
	</div>
	<?php include'footer.php';?>
	<style type="text/css">
		button.butt.form-control {
    background: #d7a600;
    color: #fff;
    border: none;

    font-size: 17px;
}
button.butt.form-control:hover {
    background: #896900	;
    color: #fff;
    border: none;
    font-size: 17px;
}
	</style>

<?php include'header.php';?>
  <!-- ====== About Us Block ====== --> 
    <div class="about-us-block pd-90" style="background-image: url('images/b1.jpg'); ">
        <div class="container">
            <div class="row">
			<div class="col-md-6  "></div>
                <div class="col-md-6  "style="padding:100px 0px 90px;">
                    <div class="shipping-from-content mrt-less-137">
                        <div class="shipping-form-heading">
                              <h2 class="from-title" style="text-align:center;color:#fff;">Forgot Password?</h2>
                        </div>
                        <!-- /.shipping-form-heading -->
                        <form action="<?=  base_url('Admin/passforget') ?>" method="post"  class="advance-search-query">
                            <div class="regular-search">
                                <div class="form-content">
                                    <div class="row">
                                        <p style="color: #fff"> <?php 

                                                 if ($this->session->flashdata('message')) {
                                                     # code...
                                                    echo $this->session->flashdata('message');
                                                 }

                                                 ?></p>
                                        <div class="col-md-12 ">
                                             <div class="input">
											
                                                <input type="email" name="email" placeholder="Enter Email ID">
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                    </div><!-- /.row -->
                                </div><!-- /.from-content -->
                            </div><!-- /.regular-search -->                   
                            <div class="check-vehicle-footer">
                                <div class="row"> 
                             			<center>					
                                   <button type="submit" class="button blue-button white-color">Send my password</button> 
								</center>
                                </div><!-- /.row -->
                            </div><!-- /.check-vehicle-footer -->
                        </form>
                    </div><!-- /.shipping-from-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
       </div><!-- /.container -->
    </div><!-- /.about-us-block -->

<?php include'footer.php';?>
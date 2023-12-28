<?php include 'header.php'; ?>

<!-- ======blog-area====== -->
<div class="blog-block bg-gray-color"
    style="background-image:url('<?= base_url(); ?>images/bg1.jpg');repeat:no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-content-left">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6" style="background:#fff;">
                                <!--<center><img src="images/ivsvisa.png" alt="header-logo" /> </center>-->
                                <div class="shipping-form-heading" style="    padding-top: 50px;">
                                    <center>
                                        <h2 class="from-title">Verify and Login</h2>
                                        <p>Enter the OTP Sent to Your Mobile</p>
                                    </center>
                                </div>
                                <form method="POST" action="<?= base_url('Login/otp_verify') ?>"
                                    style="  padding: 0px 10px 0px;">
                                    <div class="regular-search">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <input type="text" maxlength="4" name="userotp"
                                                        placeholder="Enter 4 digit OTP" class="form-controller">
                                                    <input type="hidden" name="usermobile"
                                                        value="<?= $this->session->userdata('usernumber'); ?>">
                                                </div><!--/.input-->
                                            </div><!--/.col-md-4-->
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <input type="submit" class="form-controller" value="Login"
                                                        style=" border: 1px solid #090877;background:#090877;color:#fff;">
                                                </div><!--/.input-->
                                            </div><!--/.col-md-4-->
                                            <div class="col-md-12" style="padding-bottom: 30px;">
                                                <center><a href="user-login.php"><u>Resend OTP</u></a></center>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.regular-search -->
                                </form><!-- /.advance_search_query -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div> <!-- /.tab-content -->
                </div><!-- /.blog-content-left -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-main-content -->
<?php include 'footer.php'; ?>
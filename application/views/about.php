<?php include'header.php';?>
   <div class="page-header nevy-bg">
   <!-- <img src="./images/top-banner-country.jpg"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">About Us</h2>
                          
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div>
      <!-- ====== Well-come Block ====== --> 
   <div class="about-main-content pd-90 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading-content-three">
                                    <!--<h2 class="title">About Ivs Visa</h2>-->
                                    <h4 class="sub-title"></h4>
                                </div><!-- /.section-title-area -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="extra-big-title"><?php if ($about['name']){ echo $about['name']; } ?></h3>
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="about-content-left">
                                    <p style="text-align:justify;">
                                  <?php if ($about['description']){ echo $about['description']; } ?>
                                     </p>
                                 </div><!-- /.about-content-left-->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-6">
                                 <?php if ($about['image']): ?>
                                <img src="<?= base_url().'upload/'.$about['image']; ?>" alt="car-item" style="border:1px solid; border-radius:15px;"/>
                            <?php endif; ?>
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->          
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.about-main-content -->
    
    <!-- ======footer area======= -->
    <?php include'footer.php';?>
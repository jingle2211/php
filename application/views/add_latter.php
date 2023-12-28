<?php include'header.php';?>
<div class="page-header nevy-bg">
    <div class="container">
    <div class="row">
     <div class="col-md-12">                
    <h2 class="page-title">Ivs Visa News Latter</h2>         
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
             <!-- <h2 class="title">Ivs Visa News Latter</h2> -->
                 <!-- <h4 class="sub-title"></h4> -->
                </div><!-- /.section-title-area -->
                </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                        <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="newslatter">
                        <h3 class="extra-big-title text-center"><?php if ($add_latter['name']){ echo $add_latter['name']; } ?></h3>
                    
                        <?php if ($add_latter['image']): ?>
                        <img src="<?= base_url().'upload/'.$add_latter['image']; ?>" alt="news_latter" />
                        <?php endif; ?>
                        <div class="about-content-left">
                        <p style="text-align:justify;">
                        <?php if ($add_latter['description']){ echo $add_latter['description']; } ?> </p>
                        </div><!-- /.about-content-left-->
                        </div><!-- /.col-md-5 -->
                        </div>
                        </div><!-- /.row -->
                </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
    </div><!-- /.about-main-content -->
<!-- ======footer area======= -->
<?php include'footer.php';?>
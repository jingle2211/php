<?php include'header.php';?>
    <!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Terms & Conditions</h2>
                         
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div>

    <!-- ====== About Main Content ====== --> 
    <div class="about-main-content mr-top-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                       
                        <div class="row">
                            <div class="col-md-12">
               <?php if ($termsconditions['description']) {
                   # code...
                echo $termsconditions['description'];
               } ?>
<br>
</br>
                   </div><!-- /.col-md-12 -->
                          
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.about-main-content -->
	<div class="clearfix"></div>
 <!-- ======footer area======= -->
    
<?php include'footer.php';?>
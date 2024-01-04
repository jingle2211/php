<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   


    <!-- Titles
    ================================================== -->
    <?php if (@$metatitle) {
       echo "<title>".$metatitle."</title>";
     } else { ?>
    <title>ivsvisa Service</title>
<?php } ?>

    <?php if (@$metakeywords) { ?>
       <meta name="keywords" content="<?= $metakeywords ?>">
 <?php    } else { ?>
   <meta name="description" content="ivs Service">
<?php } ?>


    <?php if (@$metades) { ?>
         <meta name="description" content="<?= $metades ?>">
<?php      } else { ?>
 <meta name="description" content="ivs Service">
<?php } ?>
    <!-- Favicons
    ================================================== -->
       <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(); ?>images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(); ?>images/apple-touch-icon-114x114.html">


<style type="text/css">
 
</style>
    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/icons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/color-schemer.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style3.css">
    <!-- RS5.4 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/revolution/css/settings.css">
    <!-- RS5.4 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/revolution/css/navigation.css">
    <style>




</style>
</head>

<body>
    <!-- ====== Header Top Area ====== --> 
	 
    <header class="header-top-area bg-nero" >
        <div class="container-fluid">
            <div class="row">
                <div class="container-lg-screen">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="header-content-left">
                                <ul class="header-top-menu hidden-xs">
                                  
									<li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-envelope"></i>
                                    <span>support@ivsvisa.com</span>
                                </a>                                 
                            </li>
								<li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-phone"></i>
                                    <span>Call Us: +91-906-962-6262</span>
                                </a>                                 
                            </li>
							
                                
                                </ul><!-- /.header-top-menu -->
                            </div><!-- /.header-content-left -->
                        </div><!-- /.col-md-9 -->

                        <div class="col-md-3 col-sm-3">
                            <div class="header-content-right">
                                 <ul  class="header-top-menu-s  mb-float-left">
                                   
                                        <?php 
                                        if ($this->session->userdata('loginnumber')) {
                                         ?>
                                        <li>
                                <a href="<?=  base_url('Dashboard'); ?>"  >
                                    <i class="fa fa-user"></i>
                                    <span>My Account</span>
                                </a>
                            </li>

                                         <?php
                                        }else {?> 
                                            <li>
                                        <a href="http://ivsvisa.com/" class="language">
                                            <i class="fa fa-user"></i>
                                            <span>My Account</span>
                                        </a>
                                     <ul class="sub-menu">
                                             <li><a href="<?= base_url('user-login.php'); ?>">Login </a></li>
                                           
                                            <li><a href="create_account.php">Register</a></li>
                                       </ul><!-- /.sub-menu -->
                                    </li> 
                                <?php } ?>
                                        
                                </ul><!-- /.header-top-menu -->
                            
                            </div><!-- /.left-content -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container-lg-screen -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->
<div><!-- /.header-modal-area -->

    <!-- ====== Header Nav Area ====== --> 
	
    <header class="header-nav-area"id="navbar">
        <div class="container-fluid">        
            <div class="row">
                <div class="container-lg-screen">
                    <div class="row">                
                        <div class="col-md-3 col-sm-3 col-xs-10">
                            <div class="site-logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>images/cargodeal.png" alt="header-logo" /></a>
                            </div><!-- /.logo -->
                        </div><!-- /.col-md-2 -->
                        <div class="col-md-9 col-sm-9 col-xs-2">
                              <nav id="main-nav" class="site-navigation top-navigation nav-style-three" >
                                <div class="menu-wrapper">
                                    <div class="menu-content">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="index.php">Home</a>
                                                
                                            </li>
                                            <li>
                                                <a href="about.php">About Us</a>
												 <ul class="sub-menu">
                                            <li>
                                                <a href="work.php">How It Works </a>
                                              
                                            </li>
                                            <li>
                                                <a href="why.php">Why Choose Us</a>
                                              
                                            </li>
											</ul>
                                            </li>
                                           
                                            <li>
                                                <a href="service.php">Services</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('blogs'); ?>">Blogs</a>
                                               
                                            </li>
                                            <li>
                                                <a href="contact.php">Contact Us</a>
                                            </li>
                                              <li>
                                                <a href="<?= base_url('booking'); ?>" style="color: red;">Book Now</a>
                                            </li>
                                        </ul> <!-- /.menu-list -->
                                    </div> <!-- /.menu-content-->
                                </div> <!-- /.menu-wrapper --> 
                            </nav><!-- /.site-navigation -->
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg pdm-10">
                                <div class="menucontent overlaybg"> </div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                </div><!--/.menuexpandermain-->

                                <div id="mobile-main-nav" class="mb-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.col-md-8 -->
                       
						<!-- /.col-md-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container-lg-screen -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-area --> 
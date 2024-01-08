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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titles
    ================================================== -->
    <?php if (@$metatitle) {
       echo "<title>".$metatitle."</title>";
     } else { ?>
    <title>IVS_Visa Service</title>
<?php } ?>

    <?php if (@$metakeywords) { ?>
       <meta name="keywords" content="<?= $metakeywords ?>">
 <?php    } else { ?>
   <meta name="description" content="Visa Service">
<?php } ?>

    <?php if (@$metades) { ?>
         <meta name="description" content="<?= $metades ?>">
<?php      } else { ?>
 <meta name="description" content="Visa Service">
<?php } ?>
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(); ?>images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(); ?>images/apple-touch-icon-114x114.html">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- ====== Header Top Area ====== --> 
    <header class="header-top-area bg-nero" >
    <div class="container-fluid">
    <div class="row">
    <div class="container-lg-screen">
    <div class="row">
    <div class="col-md-8 col-sm-8">
    <div class="header-content-left">
    <ul class="header-top-menu hidden-xs">                        
	<li>
     <a href="#" class="top-left-menu">
     <i class="fa fa-envelope"></i> <span>sales@ivsvisa.com</span> </a>                                 
     </li>
	<li>
     <a href="#" class="top-left-menu">
    <i class="fa fa-phone"></i> <span>Call Us: +91-46578585, 3888, 3889</span> </a>                                 
    </li>                         
    </ul><!-- /.header-top-menu -->
    </div><!-- /.header-content-left -->
    </div><!-- /.col-md-9 -->
    
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-6">
            <div class="d-md-flex align-items-center">
	        <a href="<?= base_url('Adminlogin'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light text-white header-m pl-4">TRACK YOUR APPLICATION</a>
            </div>
            </div>
     <div class="col-lg-2 col-sm-6 col-md-6 col-xs-6">
 <div class="header-content-right">
    <ul class="header-top-menu-s mb-float-left">
        <?php if ($this->session->userdata('loginnumber')) { ?>
            <li><i class="fa fa-user"></i> <span>My Account</span></li>
        <?php } else { ?>
            <li class="has-submenu">
                <a href="#" class="language">
                    <i class="fa fa-user"></i> <span>My Account</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                </ul><!-- /.sub-menu -->
            </li>
        <?php } ?>
    </ul><!-- /.header-top-menu -->
</div>
<!-- /.left-content -->
        </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
        </div><!-- /.container-lg-screen -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->
    <!-- ====== Header Nav Area ====== --> 
    <header class="header-nav-area"id="navbar">
    <div class="container-fluid">        
    <div class="row">
    <div class="container-lg-screen">
    <div class="row">                
         <div class="col-md-3 col-sm-3 col-xs-10">
         <div class="site-logo">
         <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>images/logo-ivs.png" alt="header-logo" /></a>
         </div><!-- /.logo -->
         </div><!-- /.col-md-2 -->
            <div class="col-md-9 col-sm-9 col-xs-2">
            <nav id="main-nav" class="site-navigation top-navigation nav-style-three" >
            <div class="menu-wrapper">
            <div class="menu-content">
                 <ul class="menu-list">
                 <li> <a href="<?= base_url('index.php'); ?>"> Home</a> </li>
                 <li> <a href="<?= base_url('about.php'); ?>">About Us</a> </li>
                <li> <a href="<?= base_url('service.php'); ?>">Services</a>
                <ul class="sub-menu">
                <li> <a href="why.php">Visa Facilitation Services </a> </li>
                <li> <a href="work.php">Legalization / Attestation</a> </li>
                <li> <a href="add_latter.php">Expatriate Services</a> </li>
                <li> <a href="success.php">Work Permit</a> </li>
                <li> <a href="thankyou.php">Online Visa Tracking</a> </li>
				</ul>
                 </li>
                <li> <a href="<?= base_url('blogs'); ?>">Ivs Blogs</a> </li>
                <li> <a href="<?= base_url('Evisa_apply.php');?>">Apply E-Visa</a> </li>
                <li> <a href="<?= base_url('contact.php');?>">Contact Us</a> </li>                          
                </ul> <!-- /.menu-list -->
                 </div> <!-- /.menu-content-->
                </div> <!-- /.menu-wrapper --> 
                 </nav><!-- /.site-navigation -->
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg pdm-10">
                            <div class="menucontent overlaybg"> </div>
                            <div class="menuexpandermain slideRight">
                            <a id="navtoggole-main" class="slideLeft menuclose"><i class= "fa fa-bars animated-arrow" aria-hidden="true"></i>  </a>
                            </div><!--/.menuexpandermain-->
                             <div id="mobile-main-nav" class="mb-navigation slideLeft">
                             <div class="menu-wrapper">
                            <div id="main-mobile-container" class="menu-content clearfix"></div>
                            </div>
                            </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
         </div><!-- /.col-md-8 -->
    </div><!-- /.row -->
    </div><!-- /.container-lg-screen -->
    </div><!-- /.row -->
    </div><!-- /.container -->
    </header><!-- /.header-bottom-area --> 
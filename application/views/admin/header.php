<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>IVS_Visa || Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url(); ?>back/img/fav-icon.png" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="<?= base_url(); ?>back/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?= base_url(); ?>back/css/style.css" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url(); ?>back/css/styles/all-themes.css" rel="stylesheet" />

</head>

<body class="light">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
    <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                 data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="">
                <img src="<?= base_url(); ?>back/img/logo-ivs.png" alt=""/> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
            <li> <a href="#" onClick="return false;" class="sidemenu-collapse">
            <i class="nav-hdr-btn ti-align-left"></i> </a>
            </li>
            </ul>
             <!-- #END# Notifications-->
        
            <ul class="nav navbar-nav navbar-right">    
            <li class="bellicon">
             <a href="#" ><i class="fa fa-envelope text-dark" aria-hidden="true"></i><span class="indicator-ms"></span></a>
            </li>
            <li class="bellicon"><a href="#"><i class="fa fa-bell text-dark display-5" aria-hidden="true"></i><span class="indicator-nt"></span></a></li>
            <li class="dropdown user_profile">
            <div class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url(); ?>back/img/admin.jpg" alt="profile" width="35">
            </div>
            <ul class="dropdown-menu pullDown">
            <li class="body">
            <ul class="user_dw_menu">                              
            <li> <a href="<?= base_url('Admin/logout'); ?>"><i class="material-icons">power_settings_new</i>Logout</a></li>            
            </ul>                       
            </li>
            </ul>
            </li>
            </ul>
            </div>
    </div>
    </nav>
    <!-- #Top Bar -->
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
            <ul class="list">
            <li class="active bb">
            <a href="<?= base_url('user'); ?>">
            <i class="menu-icon ti-home"></i><span>Dashboard</span> </a>
            </li>
          
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"> <i class="fa fa-user" aria-hidden="true"></i>
            <span>Manages Clients</span></a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/add_client'); ?>"> Add Clients </a></li>
            <li> <a href="<//?= base_url('Admin/client_list'); ?>"> Clients List</a> </li>                           
            </ul>
            </li> -->
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"> <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Manage Branch</span> </a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/add_branch'); ?>">Add Branch</a> </li>
            <li> <a href="<//?= base_url('Admin/branch_list'); ?>">Branch List</a> </li>    
            </ul>
            </li> -->
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle">
            <i class="menu-icon fas fas fa-users"></i><span>Manages Users</span> </a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/add_user'); ?>">Add User</a> </li>  
            <li> <a href="<//?= base_url('Admin/users'); ?>"> Manage User </a> </li>                                     
            </ul>
            </li> -->

            <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-edit"></i>
            <span>Application</span> </a>
            <ul class="ml-menu">
            <li> <a href="<?= base_url('information/add_application'); ?>"> Add / Edit Application </a></li>
            <li> <a href="<?= base_url('information/application_report'); ?>">Visa Application Report</a> </li> 
            <li> <a href="<?= base_url('information/search_application'); ?>">Search Application</a> </li>                           
            </ul>
            </li>
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="menu-icon fas fa-book-open"></i>
            <span>Blogs</span> </a>
            <ul class="ml-menu">
             <li> <a href="<//?= base_url('Admin/manage_blogs'); ?>">Manage Blogs</a></li>
            <li> <a href="<//?= base_url('Admin/add_blog'); ?>">Add New Blogs</a> </li>
            <li><a href="<//?= base_url('Admin/manage_comments'); ?>">Manage Comment</a></li>
            <li> <a href="<//?= base_url('Admin/trash_blogs'); ?>">Trash Blogs</a></li>
            </ul>
            </li> -->
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"> <i class="menu-icon fas fa-file"></i>
            <span>View Pages</span> </a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/about'); ?>">About Us</a></li>
            <li> <a href="<//?= base_url('Admin/privacypolicy'); ?>">Privacy Policy</a></li>
            <li><a href="<//?= base_url('Admin/termsconditions'); ?>">Terms & Conditions</a></li>
            <li> <a href="<//?= base_url('Admin/shippingpolicy'); ?>">Delivery & Shipping policy</a></li>
            <li> <a href="<//?= base_url('Admin/refundcancellation'); ?>">Refund & Cancellation</a></li>
            <li> <a href="<//?= base_url('Admin/add_testimonial'); ?>">Add Testimonial</a> </li>
            <li> <a href="<//?= base_url('Admin/manage_testimonial'); ?>">Manage Testimonial</a> </li>
            </ul>
            </li> -->
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-globe"></i>
            <span>Visa Country</span> </a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/add_country'); ?>">Add Country</a> </li>
            <li> <a href="<//?= base_url('Admin/manage_country'); ?>">Manage country</a></li>                          
            </ul>
            </li> -->
            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-credit-card" aria-hidden="true"></i>
            <span>Visa Type</span> </a>
            <ul class="ml-menu">
            <li> <a href="<//?= base_url('Admin/add_visa'); ?>">Add Visa</a> </li>
            <li> <a href="<//?= base_url('Admin/manage_visa'); ?>">Manage Visa</a> </li>              
            </ul>
            </li> -->
        <li class="bb">
        <a href="#" onClick="return false;" class="menu-toggle"> <i class="fa fa-globe"></i>
        <span>Country Pages</span> </a>
        <ul class="ml-menu">
        <li> <a href="<?= base_url('Admin/add_page'); ?>">Add New Pages</a> </li>
        <li> <a href="<?= base_url('Admin/manage_pages'); ?>">Manage Pages</a> </li>
        </ul>
        </li>

        <li class="bb">
        <a href="#" onClick="return false;" class="menu-toggle">
        <i class="fa fa-star"></i><span>Package Details</span> </a>
        <ul class="ml-menu">
        <li>  <a href="<?= base_url('Admin/add_packages'); ?>">Add New Package</a> </li>
        <li> <a href="<?= base_url('Admin/manage_packages'); ?>">Manage Package</a></li>
        </ul>
        </li>

            <!-- <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-newspaper" aria-hidden="true"></i>
            <span>News Latter</span> </a>
            <ul class="ml-menu">
              <li> <a href="<//?= base_url('Admin/add_latter'); ?>"> Add latter </a></li>
             <li> <a href="<//?= base_url('Admin/manage_latter'); ?>">Manage Letter</a> </li>  
             <li> <a href="<//?= base_url('admin/EmailSubscriber'); ?>">Add Email Subscriber</a> </li>  
             <li> <a href="<//?= base_url('admin/admin_subscribers'); ?>">Manage Subscribers</a> </li> 
             <li> <a href="<//?= base_url('admin/groups'); ?>">Create Group</a> </li> 
             <li> <a href="<//?= base_url('Admin/email_group'); ?>" target="_blank">Email Group  </a> </li> 
             <li> <a href="<//?= base_url('admin/admin_send_newsletter'); ?>">Send News Latter</a> </li>                         
             </ul>
            </li> -->

            <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Add Information</span> </a>
            <ul class="ml-menu">
             <li> <a href="<?= base_url('Admin/countryfact'); ?>">Add Country Fact Finder </a></li>
             <li> <a href="<?= base_url('Admin/diplomatic'); ?>">Diplomatic Representations</a> </li>  
             <li> <a href="<?= base_url('Admin/fee_notes'); ?>"> Visa Note and Fees  </a></li>
             <li> <a href="<?= base_url('Admin/add_mission'); ?>">Indian Missions Overseas</a> </li>          
             </ul>
            </li>

            <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Manage Information</span> </a>
            <ul class="ml-menu">
             <li> <a href="<?= base_url('Admin/countryfact_details'); ?>"> Country Fact Finder </a></li>
             <li> <a href="<?= base_url('Admin/diplomatic_details'); ?>">Diplomatic Representations</a> </li>  
             <li> <a href="<?= base_url('Admin/manage_fees'); ?>"> Visa Note and Fees  </a></li>
             <li> <a href="<?= base_url('Admin/missionover_detail'); ?>">Indian Missions Overseas</a> </li> 
             </ul>
            </li>

            <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Visa Information</span> </a>
            <ul class="ml-menu">
             <li> <a href="<?= base_url('Information/VisaInformation'); ?>" target="_blank">Visa Information </a> </li> 
             </ul>
            </li>

            <li class="bb">
            <a href="#" onClick="return false;" class="menu-toggle"><i class="fa fa-university" aria-hidden="true"></i>
            <span>Finance Management</span> </a>
            <ul class="ml-menu">
            <li> <a href="<?= base_url('Finance/Users'); ?>" target="_blank">Manage Expense </a> </li> 
             <li> <a href="<?= base_url('Admin/add_wallet'); ?>">Add Group </a> </li> 
             <li> <a href="<?= base_url('Admin/wallet'); ?>">Manage Group </a> </li> 
             <li> <a href="<?= base_url('Admin/ledger'); ?>"> Add Ledger </a></li>
             <li> <a href="<?= base_url('Admin/transection'); ?>">Ledger Details </a> </li>       
             </ul>
            </li>
        </ul>
        </div>
        <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
</body>
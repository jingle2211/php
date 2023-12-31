<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Expense Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors1/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors1/css/vendor.bundle.base.css">
<!------bootstrap3:--->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style4.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
        <!---Pagination-->
<?php date_default_timezone_set('Asia/Manila'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

//Toast

<link rel="stylesheet" href="<?php echo base_url() ?>toast/dist/css/iziToast.css">
<script src="<?php echo base_url() ?>toast/dist/js/iziToast.min.js" type="text/javascript"></script>

</head>
<body>
    

    
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar bg-gray-dark col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
     <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center bg-gray-dark">
          
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
          
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo base_url() ?>assets/images/faces/male_avatar.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
             <?php  $data = array();
                if ($this->session->userdata('isUserLoggedIn')) {
                    $data['user'] = $this->user->getRows(array('id' => $this->session->userdata('userId')));
                $user=$data['user'];}
            ?>
                <p class="mb-1 text-white"><?php echo $user['name']; ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" onclick="return logout()">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <!-- <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
              
        
        
        <!-------------------------------------Area for Modals------------------------------------>
        <div class="w3-container">
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container position-relative"> 
   <a href="javascript:void(0)"onclick="document.getElementById('id01').style.display='none'" 
   class="text-muted close btn-close position-absolute top-2" style="right:.5em; top:.5em">&times;</a>
   <h2></h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button text-primary" onclick="openCity(event, 'London')"><b>Manage Expenses</b></button>
   <button class="tablink w3-bar-item w3-button text-primary" onclick="openCity(event, 'Paris')"><b>Receive Amount</b></button>
<!--   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">QuicK Report</button>-->
  </div>

  <div id="London" class="w3-container city">
<br>
   
            <div class="col-md-12 grid-margin">
              
                <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Finance/Home/add_debit">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">User Name</label>
                    <select required="" class="form-control form-control-sm" name="name" id="exampleFormControlSelect3">
                        <option  readonly  value="">Select UserName.</option>
                       <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
                      <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                     
                       <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <option disabled="">No Recipient Found</option> 
              
           <?php  
          }  
           ?> 
                    </select>
                  </div>
                    <div class="form-group">
                    <label>Date Of Payment</label>
                    <input required="" name="date" id="theDate" type="date" class="form-control form-control-sm" placeholder="Username" aria-label="Date">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="discription" autocomplete="off" type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group">
                    <label>Amount Debited</label>
                    <input required="" autocomplete="off" name="amount" onkeypress="return isNumber(event)" type="text" class="form-control form-control-sm" placeholder="Debit Amount" aria-label="Debit Amount">
                  </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Exp Category</label>
                    <select required="" name="item" class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option disabled selected>Select Exp Category.</option>
                        <option value="Service">Service Fee</option>
                        <option value="Visa">Visa Fee</option>
                        <option value="Missch">Misc.Charge</option>
                        <option value="Equipments">Equipments</option>
                        <option value="Payroll">Payroll</option>
                        <option value="Office-Supplies">Office Supplies</option>
                        <option value="Embassy">Embassy Fee</option>
                        <option value="Travel-Expenses">Travel Expenses</option>
                        <option value="Others">Others Charges</option>
                        
                    </select>
                  </div>
                      <button type="submit" name="debit" class="btn btn-gradient-info rounded-0 mr-2 btn-sm ">Add</button>
                    <button type="reset" class="btn btn-sm btn-light bg-gradient-light border rounded-0">Clear</button>
                  </form>
               
            </div>
              
            
  </div>

  <div id="Paris" class="w3-container city">
  <br>
      <div class="col-md-12 grid-margin">
   <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Finance/Home/add_credit">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">User Name</label>
                    <select required="" name="name" class="form-control form-control-sm" id="exampleFormControlSelect3">
                          <option  readonly  value="">Select User Name</option>
                      <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
                      <option value="<?php echo $row->id?>"><?php echo $row->name ?></option>
                     
                       <?php       
             }  
          }  
          else  
           {  
           ?>  
                      <option disabled="">No Recipient Found</option> 
              
           <?php  
          }  
           ?> 
                    
                    </select>
                  </div>
                    <div class="form-group">
                    <label>Date</label>
                    <input required="" name="date" id="theDate2" type="date" class="form-control form-control-sm" placeholder="Date" aria-label="Date">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="discription" type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group">
                    <label>Amount</label>
                    <input required="" onkeypress="return isNumber(event)" name="amount" type="text" class="form-control form-control-sm" placeholder="Amount" aria-label="Amount">
                  </div>
                    
       <button type="submit" name="credit" class="btn mr-2 btn-sm btn-gradient-info rounded-0 mr-2 btn-sm">Add</button>
                     <button type="reset" class="btn btn-sm btn-light bg-gradient-light border rounded-0 mr-2 btn-sm">Clear</button>
                  </form>
  </div>
     </div>
  
 </div>
</div>

</div>
        <!-------------------------------Modal Closing-----------------Navidgation Closing--------------------------------------->
        
    </nav>
       <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas bg-gray-dark" id="sidebar">
        <ul class="nav">
         <!-- <li class="nav-item nav-profile">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url() ?>assets/images/faces/male_avatar.png" alt="profile">
                <span class="login-status online"></span> 
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $user['name']; ?></span>
                <span class="text-secondary text-small"><?php echo $user['account_status']; ?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Finance/Home">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-view-dashboard menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">More</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-view-grid menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Finance/Home/add_client">Add User</a></li>
                       <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Finance/Home/view_clients">User Management</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Finance/Home/today_report">Reports</a></li>
             
              </ul>
            </div>
          </li>
            
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <div class="font-weight-bold mb-0 text-muted mx-2">Manage Expenses</div>
              </div>
              <div class="py-2 px-2 text-center">
                <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-block btn-lg btn-gradient-info rounded-0 h3"><i class="far fa fa-plus"></i> New Data</button>
              </div>
            </span>
          </li>
        </ul>
      </nav>
	  
      <script>
          var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
document.getElementById('theDate2').value = today;
  </script>
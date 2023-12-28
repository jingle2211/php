<?php include 'header.php'; ?>
        <!-- Right Sidebar -->    
<section class="content">
<div class="container-fluid">
        <div class="block-header">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
        <h4 class="page-title">Profile</h4>
        </li>
        <li class="breadcrumb-item bcrumb-1">
        <a href="<?= base_url('Admin/dashboard'); ?>">
        <i class="fas fa-home"></i> Home</a> </li>            
        <li class="breadcrumb-item active">Manage Transection</li>
        </ul>
        </div>
        </div>
        </div>

        <div class="report">
        <h2 class="pageHeadingStyle">Transection Report </h2>   
        <div class="col-lg-3 col-md-3">
        <div class="report_button">
        <ul class="list-inline">
        <li><button type="submit" class="btn-hover submit-area2" form="form1" value="Submit">View Data</button></li>
        <li><a href='<?= base_url() ?>admin/export_csv'><img src="https://www.ivsvisa.com/tracker/Images/export_data2.png"></a></li>
        </ul>    
        </div>
        </div>
        </div>
 
        <?php if($this->session->flashdata('success')){ ?> 
        <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span> </button>
     <?= $this->session->flashdata('success'); ?>
         </div>
        <?php  } ?>
        <?php if($this->session->flashdata('error')){ ?> 
        <div class="alert bg-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span> </button>
     <?= $this->session->flashdata('error'); ?>
        </div>
    <?php  } ?> 

            <div class="row clearfix"><br>  
            <div class="col-lg-12 col-md-12">      
            <div class="tab-content">               
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
                <div class="header">
                <h2> <strong>Manage</strong> Transection </h2>
                </div>
            <div class="body">
            <div class="table-responsive">
          <table class="table table-bodered table-hover js-basic-example contact_list">
          <thead>
          <tr>
          <th>S.No.</th>
          <th>Service Fee</th>
          <th>Visa Fee</th>
          <th>Miscellaneous Charges</th>
          <th>Embassy Fee</th>
          <th>Bill No</th>
          <th>Total Amount</th>
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php if($transection): $i = 1;  foreach ($transection as $value): ?>
          <tr>                                            
          <td><?= $i++ ?></td>
          <td><?= $value->visa_fee;  ?></td>
          <td><?= $value->service_fee;  ?></td>
          <td><?= $value->embassy_fee; ?></td>  
          <td><?= $value->miscellaneous;  ?></td> 
          <td><?= $value->bill_no;  ?></td>
          <td><?= $value->total_amount;  ?></td>                                           
          <td>
          <a href="<?= base_url('Admin/edit_transection/' . $value->id); ?>">Edit</a> |
          <a href="<?= base_url('Admin/delete_transection/' . $value->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>    
          </td>
           </tr>
           <?php endforeach; endif;  ?>
          </tbody>
          </table>
            </div>
            </div>

            </div>              
            </div>
            </div>
            </div>
            </div>
</div>
</section>
 <!-- Footer Js -->
<?php include 'footer.php'; ?>
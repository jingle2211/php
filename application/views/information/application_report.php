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
        <a href="<?= base_url('user'); ?>">
        <i class="fas fa-home"></i> Home</a> </li>            
        <li class="breadcrumb-item active">Manage Application</li>
        </ul>
        </div>
        </div>
        </div>

        <div class="report">
        <h2 class="pageHeadingStyle"> Application Report </h2>   
        <form method="post">
        <div class="row">
        <div class="col-lg-9">
        <div class="row">
        <div class="col-lg-1 col-md-1">
        <label class="req">From:</label>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
        <input type="Date" name="fromStaff" class="form-control"  id="fromStaff">
        </div>
        <div class="col-lg-1 col-md-1">
        <label>To:</label>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
        <input type="Date" name="ToStaff" class="form-control"  id="ToStaff">
        </div>
        <div class="col-lg-1 col-md-1">
        <label>Status:</label>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
            <select name="Status" id="Status" class="form-control">
              <option>Select All</option>
              <option value="1">New</option>
	<option value="2">Pending</option>
	<option value="3">Submitted</option>
	<option value="4">Collected</option>
	<option value="5">Dispatched</option>
            </select>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-1">
                <label>Visa Counrty:</label>
              </div>
            <div class="col-lg-4 col-md-4 col-xs-12 resp">
                <select name="country" id="country" class="form-control">
                <option value="">Select Country</option>
              
              <?php
 foreach ($country as $qu) {
   ?>
   <option value= '<?php echo $qu['country_id']; ?>'>
   <?php
     echo $qu['name'];?> </option>
     <?php
 }
 ?>
                </select>
              </div>

              <div class="col-lg-2 col-md-1">
                <label>Handling Staff:</label>
              </div>
              <?php echo form_open('Information/application_report'); ?>
            <div class="col-lg-4 col-md-4 col-xs-12 resp">
            <select name="Staff" id="Staff" class="form-control" required>
          <option value="">Select Staff</option>
          <?php
foreach ($Staff as $qu) {
  ?>
  <option value= '<?php echo $qu['name']; ?>'>
  <?php
    echo $qu['name'];?> </option>
    <?php
}
?>
</select>
    </div>
              <button type="submit" class="btn-hover submit-area2">View Data</button>
<?php echo form_close(); ?>
            </div>
</div>
        
  
        <div class="col-lg-3 col-md-3">
        <div class="report_button">
        <ul class="list-inline">
        <button type="submit" class="btn-hover submit-area2">View Data</button>
        <li><a href='<?= base_url() ?>admin/export_csv'><img src="https://www.ivsvisa.com/tracker/Images/export_data2.png"></a></li>
        </ul>    
        </div>
        </div>
        </form>
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

<!-- Display your report data -->

  <div class="body">
  <div class="table-responsive">
  <table class="table table-bodered table-hover js-basic-example contact_list">
  <thead>
  <tr>
  <th>Docket_No</th>
  <th>branch</th>
  <th>sender_Staff</th>
  <th>pasport_no</th>
  <th>name</th>
  <th>Staff Handeling</th>
  <th>Date of Travel</th>      
  </tr>
  </thead>
          
  <tbody>
  <?php foreach ($report_data as $row): ?>
  <tr>                                            
  <td><?php echo $row->Docket_No; ?></td>
  <td><?php echo $row->branch; ?></td>
  <td><?php echo $row->sender_Staff; ?></td>  
  <td><?php echo $row->pasport_no; ?></td> 
  <td><?php echo $row->name; ?></td>
  <td><?php echo $row->Staff; ?></td>
  <td><?php echo $row->date_of_travel; ?></td>                                                  
  </tr>
 <?php endforeach; ?>
 </tbody>
  </table>
  </div>
  </div>


            <div class="row clearfix"><br>  
            <div class="col-lg-12 col-md-12">      
            <div class="tab-content">               
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
                <div class="header">
                <h2> <strong>Manage</strong> Application </h2>
                </div>
            <div class="body">
            <div class="table-responsive">
            <table class="table table-bodered table-hover js-basic-example contact_list">
            <thead>
            <tr>
           <th>S.No.</th>
          <th>Docket_No</th>
          <th>branch</th>
          <th>sender_Staff</th>
          <th>pasport_no</th>
          <th>name</th>
          <th>corporate_name</th>
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php if($allapplication): $i = 1;  foreach ($allapplication as $value): ?>
            
          <tr>                                            
          <td><?= $i++ ?></td>
          <td><?= substr($value['Docket_No'], 0,90)  ?></td>
          <td><?= substr($value['branch'], 0,90)  ?></td>
          <td><?= $value['sender_Staff'] ?></td>  
          <td><?= substr($value['pasport_no'], 0,90)  ?></td> 
          <td><?= substr($value['name'], 0,90)  ?></td>
          <td><?= substr($value['corporate_name'], 0,90)  ?></td>                                           
          <td>
          <a href="<?= base_url('Information/edit_application/' . $value['id']); ?>">Edit</a> |
          <a href="<?= base_url('Information/delete_application/' . $value['id']); ?>" 
          onclick="return confirm('Do you want to suspend the record!');"> Delete</a>
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
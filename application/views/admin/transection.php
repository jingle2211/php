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
        <li class="breadcrumb-item active">Manage Ledger</li>
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
        
            <div class="row clearfix"><br>  
            <div class="col-lg-12 col-md-12">      
            <div class="tab-content">               
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
                <div class="header">
                <h2> <strong>Manage</strong> Ledger </h2>
                </div>
            <div class="body">
            <div class="table-responsive">
          <table class="table table-bodered table-hover js-basic-example contact_list">
          <thead>
          <tr>
          <th>S.No.</th>
          <th>Ledger Code</th>
          <th>Ledger Name</th>
          <th>Opening Balance</th>
          <th>Ledger Type</th>
          <th>Ledger Group</th>
         
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php if($transection): $i = 1;  foreach ($transection as $value): ?>
          <tr>                                            
          <td><?= $i++ ?></td>
          <td><?= $value->code;  ?></td>
          <td><?= $value->name;  ?></td>
          <td><?= $value->amount; ?></td>  
          <td><?= $value->ledger;  ?></td> 
          <td><?= $value->group;  ?></td>
                                                 
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
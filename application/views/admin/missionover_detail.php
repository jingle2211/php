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
            <i class="fas fa-home"></i> Home</a>
            </li>            
            <li class="breadcrumb-item active">INDIAN MISSIONS OVERSEAS</li>
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
      <h2> <strong>INDIAN</strong>  MISSIONS OVERSEAS</h2>
      </div>
            <div class="body">
            <div class="table-responsive">
            <table class="table table-bodered table-hover js-basic-example contact_list">
            <thead>
            <tr>
            <th>S.No.</th>                                           
            <th>Name:</th>
            <th>Address:</th>
            <th>Vity/Pin_code:</th>
            <th>Telephone:</th>
            <th>Email/website</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($missionover): $i = 1;  foreach ($missionover as $value): ?>
            <tr>                                            
            <td><?= $i++ ?></td>
            <td><?= substr($value['Name'], 0,90)  ?></td>
            <td><?= substr($value['Address'], 0,90)  ?></td> 
            <td><?= substr($value['pin_code'], 0,900)  ?></td>
            <td><?= $value['Telephone'] ?></td>  
            <td><?= substr($value['Email'], 0,90)  ?>
            <?= substr($value['website'], 0,90)  ?>
        </td> 
                                                
            <td>
            <a href="<?= base_url('Admin/edit_add_mission') .'/'. $value['id']  ?>"> <button class="btn tblActnBtn">
            <i class="material-icons">mode_edit</i>
            </button></a> 
            <a href="<?= base_url('Admin/delete_add_mission').'/' . $value['id']  ?>" onclick="return confirm('Do you want to suspend the record!');"> <button class="btn tblActnBtn">
            <i class="material-icons"> clear</i>
            </button></a>
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
    <!-- Plugins Js -->
  <?php include 'footer.php'; ?>
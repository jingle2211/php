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
                                <a href="<?= base_url('Dashboard'); ?>">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            
                            <li class="breadcrumb-item active">Trash Services  </li>
                        </ul>
                    </div>
                </div>
            </div>
            
                  <?php if($this->session->flashdata('success')){ ?> 
              <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                              <?= $this->session->flashdata('success'); ?>
                            </div>
           <?php  } ?>
            <?php if($this->session->flashdata('error')){ ?> 
              <div class="alert bg-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                              <?= $this->session->flashdata('error'); ?>
                            </div>
           <?php  } ?>
           
            <div class="row clearfix"><br><br>

                 
                <div class="col-lg-12 col-md-12">
                     
                    <div class="tab-content">
                            
                        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Trash</strong> Services</h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                <table class="table table-bodered table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Title</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($alltrash): $i = 1;  foreach ($alltrash as $value): ?>
                                        <tr>
                                             
                                            <td><?= $i++ ?></td>
                                            <td><?= substr($value['name'], 0,90)  ?></td> 
                                            
                                            <td>
                                              <a href="<?= base_url('Admin/reactiveservice').'/' . $value['id']  ?>"> <button class="btn btn-info btn-round">
                                                    <i class="material-icons">restore</i>
                                                </button></a> &nbsp; &nbsp; &nbsp;
                                               <a href="<?= base_url('Admin/delete_service') .'/'. $value['id']  ?>" onclick="return confirm('Are you sure you want to delete this Blog !! ');"> <button class="btn btn-danger btn-round">
                                                    <i class="material-icons"> delete</i>
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
  
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
                            
                            <li class="breadcrumb-item active">Manage Blogs Comments</li>
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
                                        <strong>Manage</strong> Blogs Comments </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                <table class="table table-bodered table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($comment): $i = 1;  foreach ($comment as $value): ?>
                                        <tr>
                                             
                                            <td><?= $i++ ?></td>
                                            <th><?= $value['name']  ?></th> 
                                            <td><?= $value['email'] ?></td>
                                            <td><?= substr($value['comments'], 0,50)  ?></td>
                                           
                                            
                                            <td>
                                              <a href="<?= base_url('Admin/view_comment') .'/'. $value['blog_id']  ?>"> <button class="btn btn-info btn-round" style="text-transform:  inherit;">
                                                     Read
                                                </button></a> 


                                                <?php if($value['status'] == '1'): ?>
                                               <a href="<?= base_url('Admin/unpublish_comments').'/' . $value['c_id']  ?>" onclick="return confirm('Do you want to suspend the record!');"> <button class="btn btn-warning btn-round" style="text-transform: inherit;">
                                                  <!--   <i class="material-icons"> clear</i>  -->Unpublish
                                                </button></a>
                                                <?php else: ?>
                                              <a href="<?= base_url('Admin/publish_comments').'/' . $value['c_id']  ?>" onclick="return confirm('Do you want to suspend the record!');"> <button class="btn btn-success btn-round" style="text-transform: inherit;">
                                                  <!--   <i class="material-icons"> clear</i>  -->&nbsp; Publish &nbsp; &nbsp;
                                                </button></a>
                                            <?php endif; ?>




                                                  <a href="<?= base_url('Admin/delete_comments').'/' . $value['c_id']  ?>" onclick="return confirm('Do you want to suspend the record!');"> <button class="btn btn-danger btn-round" style="text-transform: inherit;">
                                                  <!--   <i class="material-icons"> clear</i>  -->Delete
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
  
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
    <li class="breadcrumb-item active">Manage Branch</li>
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
            <span aria-hidden="true">×</span>  </button>
            <?= $this->session->flashdata('error'); ?>
            </div>
           <?php  } ?>
            <div class="row clearfix"><br><br>
            <div class="col-lg-12 col-md-12">       
            <div class="tab-content">            
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
            <div class="header">
            <h2> <strong>Manage</strong> Branch </h2>
            </div>
            <div class="body">
            <div class="table-responsive">
            <table class="table table-bodered table-hover js-basic-example contact_list">
            <thead>
            <tr>
            <th>S.No.</th>
            <th>name</th>
            <th>code</th>
            <th>Address</th>
            <th>City</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>  
            <?php foreach ($items as $item): ?>
            <tr>                                            
            <td><?= $item->id; ?></td>
            <td><?= $item->name; ?></td>
            <td> <?= $item->code; ?></td>
            <td><?= $item->address; ?> </td>
            <td><?= $item->city; ?> </td>                                                                                  
            <td>
            <a href="<?= base_url('Admin/edit_branch/' . $item->id); ?>">Edit</a> |
            <a href="<?= base_url('Admin/delete_branch/' . $item->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
            </tr>
            <?php endforeach; ?>
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
 <!-- Footer s -->
<?php include 'footer.php'; ?>
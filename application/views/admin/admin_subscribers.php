<?php include 'header.php'; ?>
<!-- Right Sidebar -->   
<section class="content">
 <div class="container-fluid">
            <div class="block-header">
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
            <h4 class="page-title">Profile</h4> </li>
            <li class="breadcrumb-item bcrumb-1">
            <a href="<?= base_url('Dashboard'); ?>"> <i class="fas fa-home"></i> Home</a>
            </li>          
            <li class="breadcrumb-item active">Manage Subscribers</li>
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
                                <h2> <strong>Manage</strong> Subscribers </h2>
                                </div>
                                <div class="body">
                                <div class="table-responsive">
                                
                                <table class="table table-bodered table-hover js-basic-example contact_list">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Subscribed</th>
           
        </tr>
        <?php foreach ($subscribers as $subscriber): ?>
            <tr>
                <td><?php echo $subscriber->id; ?></td>
                <td><?php echo $subscriber->email; ?></td>
                <td><?php echo $subscriber->name; ?></td>
                <td><?php echo $subscriber->phone; ?>  </td>
                <td><?php echo $subscriber->status ? 'Yes' : 'No'; ?></td>
             
            </tr>
        <?php endforeach; ?>
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
<!-- Footer section -->
<?php include 'footer.php'; ?> 
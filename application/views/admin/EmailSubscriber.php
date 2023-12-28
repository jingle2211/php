<?php include 'header.php'; ?>
<!-- Right Sidebar -->
<section class="content">
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
  <li class="breadcrumb-item active">Email Subscriber </li>
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
    <!-- Your content goes here  -->
    <div class="container">
    <h2>Add Subscriber List</h2>

    <!-- Display status message -->
    <?php if (!empty($success_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        </div>
    <?php } ?>
    
    <!-- Display error message -->
    <?php if (!empty($error_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row">
        <!-- Import link -->
        <div class="col-md-12 py-3">
        <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');">
        <i class="plus"></i> Upload </a>
        </div>
        </div>

        <!-- File upload form -->
        <div class="col-md-12 py-3" id="importFrm" style="display: none;">
        <form action="<?php echo base_url('Admin/import'); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" class="btn btn-primary" name="importSubmit" value="Upload">
        </form>
        </div>

        <!-- Data list table -->
        <table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($subscribers)){ foreach($subscribers as $row){ ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <td><?php echo $row->status; ?></td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="5">No member(s) found...</td></tr>
                <?php } ?>
    </tbody>
</table>

    </div>
</div>

<script>
function formToggle(ID) {
    var element = document.getElementById(ID);
    if (element.style.display === "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
</script>

</section>
<?php include 'footer.php'; ?>
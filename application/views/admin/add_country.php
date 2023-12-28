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

            <li class="breadcrumb-item active">Add New Country</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Your content goes here  -->
    <form method="post" class="country">
      <div class="row">
      <div class="form-group col-md-3">
      <label>Country Name<span>*</span></label>
      </div>
      <div class="form-group col-md-4">
      <input type="text" name="name" placeholder=" Enter Country Name" class="form-control"  id="name">
      </div>
     
      </div>

      <div class="submit-area text-center">
      <input type="submit" name="save" value="Save Data" />
      </div> 
    </form>

    <?php include 'footer.php'; ?>
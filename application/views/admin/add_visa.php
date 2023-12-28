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
    <li class="breadcrumb-item active">Add New Visa Type</li>
    </ul>
    </div>
    </div>
    </div>
    <?php if($this->session->flashdata('success')){ ?> 
    <div class="alert bg-green alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>  </button>
    <?= $this->session->flashdata('success'); ?>
    </div>
     <?php  } ?>
    <!-- Your content goes here  -->
    <h4 style="text-align: center;"> Add Visa Type And Country</h4>
    <form method="post" class="visa">
    <div class="row">
    <div class="form-group col-md-3">
    <label>Select Country:<span>*</span></label>
    </div>
    <div class="form-group col-md-4">
    <select name="country" id="country" class="form-control">
    <option value="">Select Country</option>
    <?php if ($country) {
      foreach ($country as $con) { ?>
      <option value="<?= $con->country_id ?>"><?= $con->name ?></option>
      <?php
        }
      } ?>
    </select>
    </div>
    </div>
      <div class="row">
      <div class="form-group col-md-3">
      <label>Enter Visa Type:<span>*</span></label>
      </div>
      <div class="form-group col-md-4">
      <input type="text" name="name" placeholder=" Enter Visa Type" class="form-control"  id="name">
      </div>
      </div>
      <div class="submit-area text-center">
      <input type="submit" name="save" value="Save Data" />
      </div>
    </form>
</div>
</section>
 <?php include 'footer.php'; ?>
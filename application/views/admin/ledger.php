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

            <li class="breadcrumb-item active">Ledger Master</li>
          </ul>
        </div>
      </div>
    </div>
    <?php if($this->session->flashdata('success')){ ?> 
     <div class="alert bg-green alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span></button>
    <?= $this->session->flashdata('success'); ?>
    </div>
     <?php  } ?>
  <div class="client_information">
  <div class="container">
  <div class="row">
         <!-- Contact Form  -->
        <div class="contact-form">
            <h3 class="text-center">Ledger Master</h3>
            <form method="post">
                <div class="row">
                <div class="form-group col-md-2">
                <label>Ledger Code:</label>
                </div>
                <div class="form-group col-md-4">
                <input type="Code" name="code" value="<?php echo isset($generatedCode) ? $generatedCode : ''; ?>" placeholder="group code" class="form-control" readonly>
                </div>

                <div class="form-group col-md-2">
                <label>Ledger Name:<span>*</span></label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <input type="text" name="name" id="user" aria-placeholder="Select user" class="form-control" placeholder="Ledger Name" required >               
                </div>                 
                </div>   

                <div class="row">
                <div class="form-group col-md-2">
                <label>Opening Balance:<span>*</span></label>
                </div>
                <div class="form-group col-md-4">
                <input type="text" name="amount" placeholder="Amount Added" class="form-control"  id="amount">
                </div>
                <div class="form-group col-md-2">
                <label>Ledger Type:</label>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                <select name="ledger" id="ledger" class="form-control" required >
                <option value=""> select Type </option>
                <option value="cash">Cash</option>
                <option value="Cheque">Cheque</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="UPI">UPI</option>
                <option value="Other">Other</option>
</select>
</div>
 </div> 

<div class="row">
<div class="form-group col-md-2">
<label>Select Group:</label>
</div>
<div class="form-group col-md-4">
<select name="group" id="group" aria-placeholder="Select Group" class="form-control" required>
  <option value=""> select Group </option>
    <?php
foreach ($group as $qu) {
  ?>
  <option value= '<?php echo $qu['group']; ?>'>
  <?php
    echo $qu['group'];?> </option>
    <?php
}
?>
</select>
</div>

</div>

  <div class="submit-area text-center">
  <button class="btn-hover submit-area2" type="submit"> Submit</button>
  </div>
  </form>
  </div>
 <!-- End:Contact Form  -->
  </div>
  </div>
  </div> 
  <?php include 'footer.php'; ?>
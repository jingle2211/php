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

            <li class="breadcrumb-item active">Add Wallet Amount</li>
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
            <h3 class="text-center">Wallet INFORMATION</h3>
            <form method="post">
                <div class="row">
                  <div class="form-group col-md-2">
                 <label>User Name:<span>*</span></label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                  <select name="name" id="user" aria-placeholder="Select user" class="form-control" required >
                  <option value=""> select User </option>
             <?php
foreach ($user as $qu) {
  ?>
  <option value= '<?php echo $qu['name']; ?>'>
  <?php
    echo $qu['name'];?> </option>
    <?php
}
?>
</select>
                  </div>
                    <div class="form-group col-md-2">
                    <label>User Email:</label>
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" name="email" placeholder="User Email" class="form-control"  id="email">
                    </div> 
                    </div>   

                <div class="row">
                <div class="form-group col-md-2">
                 <label>Amount:<span>*</span></label>
                  </div>
                  <div class="form-group col-md-4">
                  <input type="text" name="amount" placeholder="Amount Added" class="form-control"  id="amount">
                  </div>
                    <div class="form-group col-md-2">
                    <label>Branch:</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                  <select name="branch" id="branch" aria-placeholder="Select Branch" class="form-control" required >
                  <option value=""> select Branch </option>
             <?php
foreach ($branch as $qu) {
  ?>
  <option value= '<?php echo $qu['name']; ?>'>
  <?php
    echo $qu['name'];?> </option>
    <?php
}
?>
</select>
</div>
 </div> 

<div class="row">
<div class="form-group col-md-2">
<label>Date:</label>
</div>
<div class="form-group col-md-4">
<input type="date" name="date" placeholder="Date" class="form-control">
</div>

</div>

  <div class="submit-area text-center">
  <button class="btn-hover submit-area2" type="submit"> <i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button>
  </div>
  </form>
  </div>
 <!-- End:Contact Form  -->
  </div>
  </div>
  </div> 
  <?php include 'footer.php'; ?>
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
        <li class="breadcrumb-item active">Add New Packages</li>
        </ul>
        </div>
        </div>
        </div>
        <!-- Your content goes here  -->
        <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span></button>
        <?= $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>
            <div class="clearfix"></div>
            <div class="col-lg-12 col-md-12">
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
            <div class="header">
            <h2><strong>Add New</strong> Packages </h2>
            </div>
            <div class="body">
             <?= form_open_multipart('Admin/add_packages'); ?>
             <div class="row">
             <div class="form-group col-md-2">
             <label for="Counrty">Select Country</label>
            </div>
             <div class="form-group col-md-4">
            <select name="country" id="country" class="form-control input-lg">
            <option value="name">Select Country</option>
            <?php foreach ($dropdown_data as $item): ?>
            <option value="<?php echo $item->name ; ?>"><?php echo $item->name; ?></option>
             <?php endforeach; ?>
            </select>
             </div>
            <div class="form-group col-md-2">
            <label>Select Visa Type:</label>
            </div>
            <div class="form-group col-md-4">
        <select name="visa_type" id="visa_type" class="form-control">
        <option value="">Select visa_type</option>
        <?php foreach ($dropdown as $item): ?>
        <option value="<?php echo $item->name ; ?>"><?php echo $item->name; ?></option>
        <?php endforeach; ?>
        </select>
        </div>
            <!-- <div class="form-group col-md-4">
            <input type="text" class="form-control title" placeholder="Visa Type" id="visa_type" name="visa_type" placeholder="Visa Type">
            </div> -->
            </div>
        <div class="col-lg-4 col-md-4">
        <label for="email_address">Enter Validity:</label>
        </div>
        <div class="form-group">
        <input type="text" class="form-control title" id="validity" placeholder="Validity" name="validity" required style="border:1px solid; padding-left:10px;">
        </div>
   <!-- Url Input -->
        <div class="col-lg-4 col-md-4">
        <label for="email_address">Processing Day:</label>
        </div>
        <div class="form-group">
        <textarea id="processing" name="processing" rows="10" cols="12" placeholder="Processing time"> </textarea>
        </div>
        <div class="col-lg-4 col-md-4">
        <label for="Description">Embassy Fee:</label>
        </div>
        <div class="form-group">
        <textarea id="embassyfee" name="embassyfee" rows="10" cols="12" placeholder="Embassy Fee" > </textarea>
        </div>
        <div class="col-lg-4 col-md-4">
        <label for="Note">Service Fee:</label>
        </div>
        <div class="form-group">
        <textarea id="servicefee" name="servicefee" rows="10" cols="12" placeholder="Service Charge"> </textarea>
        </div>
        <div class="col-lg-4 col-md-4">
        <label for="Title">GSTIN(18%):</label>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="GST" name="GST" required>
        </div>
        <div class="col-lg-4 col-md-4">
        <label for="Keywords">Total cost:</label>
        </div>
        <div class="form-group">                              
        <div class="form-line">
        <input type="text" class="form-control" placeholder="Total cost" name="totalcost" data-role="tagsinput">
        </div>
        </div>                              

    <div class="form-group">
    <button class="btn-hover color-1" type="submit">Submit</button>
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
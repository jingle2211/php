<?php include 'header.php'; ?>
<section class="content">
 <div class="container-fluid py-2">
 <div class="block-header">
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
            <h4 class="page-title">Profile</h4> </li>
            <li class="breadcrumb-item bcrumb-1">
            <a href="<?= base_url('Dashboard'); ?>"> <i class="fas fa-home"></i> Home</a>
            </li>          
            <li class="breadcrumb-item active"> Email Group</li>
            </ul>
            </div>
            </div>
            </div>
  

<div class="container py-3">
<h2>Emails in Group</h2>
<form method="post" action="<?php echo base_url('admin/add_email_to_group/' . $group_id); ?>">
<div class="row">
                        <div class="col-lg-2 col-md-2">
                          <label>Group: <span>*</span></label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                        <select name="group" id="group" aria-placeholder="Select Branch" class="form-control" required >
                  <option value=""> Select Group </option>
             <?php
foreach ($group as $qu) {
  ?>
  <option value= '<?php echo $qu['group_name']; ?>'>
  <?php
    echo $qu['group_name'];?> </option>
    <?php
}
?>
</select>
</div> 
    <div class="col-lg-4 col-md-4 col-xs-12">
    <label>Select Email(s):</label>
                        
        <div class="checkbox-group">
        <?php foreach ($email as $qu) { ?>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="email[]" value="<?= $qu['email']; ?>">
                    <?= $qu['email']; ?>
                </label>
            </div>
        <?php } ?>
    </div>
 </div>
</div>
 <button type="submit">Add Email</button>
</form>
</div>

 </div>
</section>
<?php include 'footer.php'; ?> 
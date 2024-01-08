<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
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
              <a href="<?= base_url('Dashboard'); ?>"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item active">Manage NewsLatter</li>
          </ul>
        </div>
      </div>
    </div>

    <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span> </button>
        <?= $this->session->flashdata('success'); ?>
      </div>
    <?php } ?>
   

    <h4 class="text-center"> Send Newsletter </h4>

    <form action="<?php echo base_url('admin/send_newsletter/'); ?>" method="post">
    <div class="row">
        <div class="col-lg-2 col-md-2">
          <label for="group">Select Group:</label>
        </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
    <select name="group" id="group" aria-placeholder="Select Group" class="form-control" required >
    <option value=""> select Group </option>
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
</div>
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <label for="Template">Select Template:</label>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
  <select name="Template" id="Template" aria-placeholder="Select Template" class="form-control">
    <option value="">Select Template</option>
  </select>
</div>
</div>
        
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <label for="heading">Sub-Heading:</label>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <input type="text" name="subject" class="news" placeholder="Enter Title" required>
        </div>
      </div>
     

      <div class="form-group py-3">
        <button type="submit" class="btn-hover color-1">Send Newsletter</button>
      </div>
    </form>
  </div>
</section>

<script>
  // Sample template data
  const templates = [
    { name: "Ivs NewsLatter", value: "template1" },
    { name: "Ivs Greeting", value: "template2" },
    { name: "Visa Services letter", value: "Visa_Services" },
    { name: "Custom Template", value: "Custom_Template" }
    // Add more templates as needed
  ];

  // Access the select element
  const templateSelect = document.getElementById('Template');

  // Loop through the templates array and create options
  templates.forEach(template => {
    const option = document.createElement('option');
    option.value = template.value;
    option.textContent = template.name;
    templateSelect.appendChild(option);
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            <?php if ($this->session->flashdata('email_sent')): ?>
                alert("<?php echo $this->session->flashdata('email_sent'); ?>");
            <?php endif; ?>
        });
    </script>
<!-- Footer section -->
<?php include 'footer.php'; ?>
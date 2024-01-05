<?php include 'header.php'; ?>
<!-- Right Sidebar -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // Create email content
    $to = "sasikumar95044@gmail.com";
    $subject = "Application submitted";
    $body = "Name: $name<br>Email: $email<br>Message: $message";
    $headers = "From: setukumarbihta@gmail.com" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();  
    // Create email template
    $emailTemplate = "
        <html>
        <head>
          <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }                
                th, td {
                    text-align: left;
                    padding: 8px;
                }
                
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h2>Application submitted</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$message</td>
                </tr>
            </table>
        </body>
        </html>
    ";
    // Sending email
    if (mail($to, $subject, $emailTemplate, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>

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
  <li class="breadcrumb-item active">Add New Application</li>
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

<!-- <div class="application_form"> -->
<div class="container">
<div class="row">
<div class="contact-form">
 <h3 class="text-center">APPLICATION INFORMATION</h3>
            <form method="post" action="">
            <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
            echo form_open("add_application", $attributes);?>
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                  <label>IVS Branch: <span>*</span></label>
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
          <div class="col-lg-2 col-md-2">
          <label>Sender Staff:</label>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
          <input type="text" name="sender_Staff" class="form-control" placeholder="Sender Staff" id="sender_Staff">
          </div>
</div>

                    <div class="row">
                    <div class="col-lg-2 col-md-2">
                    <label>Our Agent/Client: <span>*</span></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                    <select name="client" id="client" class="form-control" required >
                    <option value="">Select Client</option>
                    <?php
foreach ($client as $qu) {
  ?>
  <option value= '<?php echo $qu['Organisation']; ?>'>
  <?php
    echo $qu['Organisation'];?> </option>
    <?php
}
?>
</select>
</div> 
          <div class="col-lg-2 col-md-2">
          <label>Corporate Name:</label>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
          <input type="text" name="corporate_name" class="form-control" placeholder="Corporate Name" id="corporate_name">
          </div>
</div>
                
            <h4 class="text-center">Passenger Details</h4>
<div class="row">
<div class="col-lg-2 col-md-2 col-xs-12">
<label>Full Name:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="name" class="form-control" placeholder="Full Name" id="name" required >
</div>
<div class="col-lg-2 col-md-2 col-xs-12">
<label>Passport Number:<span>*</span></label>
</div>  
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="pasport_no" class="form-control" placeholder=" pasport_no" id="pasport_no" required >
</div>               
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
<label>Email:<span>*</span></label>
</div>                          
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
</div>
<div class="col-lg-2 col-md-2">
<label>Phone Number:<span>*</span></label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="phone" name="phone" id="phone" placeholder="Phone No" class="form-control">
</div>
</div>
                  <div class="row">
                  <div class="col-lg-3 col-md-3 col-xs-12">
                  <label> No of Old Passport Received:</label>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12 resp">
                  <select name="old_passport" id="old_passport" class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select>
                </div>
                </div>
             
<div class="row">
<div class="col-lg-2 col-md-2">
<label>Date of Birth:</label>
</div> 
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
</div>
<div class="col-lg-2 col-md-2">
<label>Date of Travel:</label> 
</div> 
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="date" class="form-control" id="date_of_travel" name="date_of_travel">
</div>
</div>
              
<h4 class="text-center">Visa Details</h4>

<div class="row">
<div class="col-lg-1 col-md-1">
<label>Country:<span>*</span></label>
</div> 
<div class="col-lg-3 col-md-3 col-xs-12">
<select name="country" id="country" class="form-control input-lg" required >
<option value="">Select Country</option>          
<?php
foreach ($country as $qu) {
  ?>
  <option value= '<?php echo $qu['name']; ?>'>
  <?php
    echo $qu['name'];?> </option>
    <?php
}
?>
</select>
</div>
          <div class="col-lg-1 col-md-1">
          <label>PNR:</label>
          </div> 
          <div class="col-lg-3 col-md-3 col-xs-12">
          <input type="text" class="form-control" id="PNR" placeholder="PNR" name="PNR">
          </div>
          <div class="col-lg-1 col-md-1">
          <label>Ref.No.</label>
          </div> 
          <div class="col-lg-3 col-md-3 col-xs-12">
          <input type="text" class="form-control" id="Ref" name="Ref" placeholder="Ref No">
        </div>
  </div>
 
    <div class="row">
    <div class="col-lg-1 col-md-1 col-md-2">
    <label>Visa Fee:</label>
    </div> 
    <div class="col-lg-3 col-md-3 col-xs-12">
    <input type="text" class="form-control" id="Fee" name="Fee" placeholder="Fee">
</div>
<div class="col-lg-1 col-md-1 col-xs-12">                   
<label class="form-check-label" for="deep">DEP Date:</label>               
</div>
<div class="col-lg-3 col-md-3 col-xs-12">
<input type="date" class="form-control" id="departure" name="departure">
</div>
<div class="col-lg-1 col-md-1 col-xs-12">
<label class="form-check-label" for="ENQ">ENQ Date:</label>                
</div>
<div class="col-lg-3 col-md-3 col-xs-12">
  <input type="date" class="form-control" id="enquiry" name="enquiry">
</div>
</div>

<div class="row">
<div class="col-lg-3 col-md-3">
<label>Embassy Facilitation:</label>
</div> 
<div class="col-lg-3 col-md-3 col-xs-12">
  <input type="text" class="form-control" id="Facilitation" name="Facilitation" placeholder="Embassy Facilitation">
</div>
<div class="col-lg-3 col-md-3">
<label>Miscellaneous Charges:</label>
</div> 
<div class="col-lg-3 col-md-3 col-xs-12">
  <input type="text" class="form-control" id="Charges" name="Charges" placeholder="Miscellaneous Charges">
</div>

</div>


<div class="row">
<div class="col-lg-2 col-md-2 col-xs-12">
<label class="form-check-label" for="COL">COL Date:</label>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">
<input type="date" class="form-control" id="coldate" name="coldate">
</div>
 <div class="col-lg-2 col-md-2">
  <label>Fees Remarks:</label>
</div> 
<div class="col-lg-3 col-md-3 col-xs-12">
<input type="text" class="form-control" id="FeesRemarks" name="FeesRemarks" placeholder="Fees Remarks">
</div> 
</div>

<div class="row">
<div class="col-lg-2 col-md-2">
  <label class="remark">Remark:</label>
</div>
<div class="col-lg-10 col-md-10 col-sm-12">
 <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="Remark" rows="3"></textarea>
</div>
</div>


<div class="row">
<div class="col-lg-2 col-md-2">
<label class="attached_file">Attache File:</label>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<label for="myfile">Select a file:</label>
<input type="file" id="myfile" name="myfile">
</div>
</div>
<div class="row">
        <div class="col-lg-2 col-md-2 resp">
          <label>Staff Handling:<span>*</span></label>
        </div> 
        <div class="col-lg-4 col-md-4 col-xs-12">
          <select name="Staff" id="Staff" class="form-control" required>
          <option value="">Select Staff</option>
          <?php
foreach ($Staff as $qu) {
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

<h4 class="text-center">Document Checklist</h4>
<div class="row">
<div class="col-md-6">
<input type="checkbox" id="checklist" name="checklist" value="Visa Form Duly Filled">
  <label for="checklist"> Visa Form Duly Filled</label>
</div>
<div class="col-md-6">
  <input type="checkbox" id="checklist1" name="checklist1" value="Old Passport If any">
  <label for="checklist1">  Old Passport If any</label>
</div>
<div class="col-md-6">
  <input type="checkbox" id="checklist2" name="checklist2" value="Photos">
  <label for="checklist2"> Photos According to Embassy specification</label>
</div>
<div class="col-md-6">
  <input type="checkbox" id="checklist3" name="checklist3" value=" Attestation">
  <label for="checklist3">   Attestation</label></div>
  <div class="col-md-6">
  <input type="checkbox" id="checklist4" name="checklist4" value="Covering Letter">
  <label for="checklist4">  Covering Letter</label></div>
  <div class="col-md-6">
  <input type="checkbox" id="checklist5" name="checklist5" value="Bank Statement">
  <label for="checklist5">  Bank Statement</label></div>
  <div class="col-md-6">
  <input type="checkbox" id="checklist6" name="checklist6" value="Salary Slip">
  <label for="checklist6">  Salary Slip</label></div>
  <div class="col-md-6">
  <input type="checkbox" id="checklist7" name="checklist7" value="Income Tax Return">
  <label for="checklist7"> Income Tax Return</label></div>
  <div class="col-md-6">
  <input type="checkbox" id="checklist8" name="checklist8" value="Medical Health Insurance">
  <label for="checklist8"> Medical Health Insurance</label></div>
</div>

    <h4 class="text-center">Dispatch Details</h4>
<div class="row">
 <div class="col-lg-2 col-md-2 col-xs-12">
  <label>Bill No:</label>
  </div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Bill" class="form-control" id="Bill" placeholder="Bill No">
</div>
<div class="col-lg-2 col-md-2 col-xs-12">
<label>Amount:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="Amount" class="form-control" id="Amount" placeholder="Amount">
</div>
</div>

<div class="row">
<div class="col-lg-2 col-md-2 col-xs-12">
<label>AWBN:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="text" name="AWBN" class="form-control" id="AWBN" placeholder="AWNB">
</div>
<div class="col-lg-2 col-md-2">
<label>Dispatch Date:</label>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<input type="date" class="form-control" id="Dispatch" name="Dispatch">
</div> 
</div>

<div class="row">
<div class="col-lg-2 col-md-2 col-md-2">
<label>Remark:</label>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="detailremark" rows="3"></textarea>
</div>
</div>

<div class="submit-area text-center">

<button class="btn-hover color-1" type="submit"><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;</i> Send Mail & Submit</button>
</div>

</form>
 <!-- End:Contact Form  -->
</div>
</div>
</div>
</section>
<?php include 'footer.php'; ?>
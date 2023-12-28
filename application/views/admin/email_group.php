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
            <li class="breadcrumb-item active">Manage Email Group</li>
            </ul>
            </div>
            </div>
            </div>

            <?php if($this->session->flashdata('error')){ ?> 
              <div class="alert bg-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span></button>
              <?= $this->session->flashdata('error'); ?>
            </div>
           <?php  } ?>
           <?php if($error = $this->session->flashdata('msg')){ ?>
    <div class="alert alert-success" id="msg">
         <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>Success!</strong> <?php echo  $error; ?>
    </div>
<?php } ?>
            <div class="row clearfix"><br>             
            <div class="col-lg-12 col-md-12">      
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
            <div class="card">
            <div class="header">
            <h2> <strong>Manage</strong> Email Group </h2>
            </div>
            </div> 
 <form action="<?php echo base_url(); ?>Admin/add_selected_student" method="post">
  <button type="submit" name="submit" class="btn btn-danger">Add Selected</button>

  <div class="group">
  <label for="group">Group Name:</label>
  <input type="text" placeholder="group name" name="group_name" class="news col-md-6">
   </div>
  

  <table class="table table-striped table-bordered" style="width:100%">
          <thead>
          <tr class="btn-primary">
          <th>select</th>
          <th>S.no.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach ($student_list as $student) { ?>
              <tr>
                <td>
                  <input type="checkbox" name="student_id[]" value="<?php echo $student->id; ?>" <?php if($student->id == $student->student_id){echo'checked disabled';} ?>>
                </td>
                <td><?php echo $i; ?></td>
                <td><?php echo $student->name; ?></td>
                <td><?php echo $student->email; ?></td>
                <td><?php echo $student->phone; ?></td>
             </tr>
           <?php $i++; } ?>    
  </tbody>
  </table>
  </form>
            </div>
            </div>
            </div>
            </div>         
</div>

</section>
<!-- Footer section -->
<?php include 'footer.php'; ?> 
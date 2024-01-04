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
        <a href="<?= base_url('Dashboard'); ?>">
        <i class="fas fa-home"></i> Home</a>
        </li>
        <li class="breadcrumb-item active">Manage Users</li>
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
        <?php } ?>>

        <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
        <div class="card">
            <div class="header">
            <h2> <strong>Manage</strong> Users </h2>
            </div>
            <div class="body">
            <div class="table-responsive">
            <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
            <th>S.No.</th>
            <th>Branch</th>
            <th>User_type</th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Username</th>
            <th>Status </th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($users): $i = 1; foreach ($users as $value): ?>
            <tr>
            <td> <?= $i++ ?> </td>
            <td>  <?= substr($value['branch'], 0, 90) ?> </td>
            <td> <?= substr($value['user_type'], 0, 90) ?> </td>
            <td> <?php echo $value['name'] ?> </td>
            <td> <?php echo $value['contact'] ?> </td>
            <td> <?php echo $value['username'] ?>  </td>
            <td>
 <?php if ($value['status'] == 1): ?>
  <a href="<?= base_url('') . 'Admin/disapprove_user/' . $value['id'] ?>"
 onclick="return confirm('Do you want to make Deactivate this user!');">
 <button class="btn btn-success btn-round"> Approve </button></a>
  <?php else: ?>
 <a href="<?= base_url('') . 'Admin/approve_user/' . $value['id'] ?>"
 onclick="return confirm('Do you want to activate this user!');">
 <button class="btn btn-danger btn-round"> Disapprove </button></a>
 <?php endif; ?>
 </td>
 <td>                          
  <a href="<?= base_url('Admin/delete_user') . '/' . $value['id']; ?>"
 onclick="return confirm('Do you want to delete record!');">
  <button class="btn tblActnBtn">
 <i class="material-icons"> delete</i> </button></a>
 </td>
            </tr>
            <?php endforeach; endif; ?>
            </tbody>
            </table>
            </div>
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
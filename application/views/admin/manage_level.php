<?php include 'header.php'; ?>
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
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert bg-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span> </button>
        <?= $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
	<!-- <div class="page-header">
	<h3><a href="add_level.php">Add New Level</a> </h3>
	</div>/.page-header -->
	<div class="row">
	<div class="col-md-12">
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>S.no</th>
<th>manage_users</th>
<th>user_role</th>
<th>Permision</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
 <?php if ($level): $i = 1; foreach ($level as $value): ?>
 <tr>
<td> <?= $i++ ?> </td>

<td> menu permission </td>
<td> <?= substr($value['user_role'], 0, 90) ?> </td>
<td> <?php echo $value['permissions'] ?> </td>                                                      


<td> <?php if ($value['status'] == 1): ?>
<a href="<?= base_url('') . 'Admin/deny_level/' . $value['id'] ?>"
onclick="return confirm('Do you want to make Deactivate this user!');">
<button class="btn btn-success btn-round"> Approve </button></a>
<?php else: ?>
<a href="<?= base_url('') . 'Admin/access_level/' . $value['id'] ?>"
onclick="return confirm('Do you want to activate this user!');">
<button class="btn btn-danger btn-round"> Disapprove </button></a>
<?php endif; ?>
</td>
<td>                          
<a href="<?= base_url('Admin/delete_level') . '/' . $value['id']; ?>"
onclick="return confirm('Do you want to delete record!');">
<button class="btn tblActnBtn">
<i class="material-icons">delete</i> </button></a>
</td>
</tr>
<?php endforeach; endif; ?>
 </tbody>
</table>
</div>
</div><!-- /.modal-content -->
<?php include 'footer.php'; ?>	
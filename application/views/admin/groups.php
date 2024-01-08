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
<div class="card">
            <div class="header">
            <h2> <strong>Manage</strong> Email Group </h2>
            </div>
            </div>
            <h3>Email Group</h3>
<ul>
    <?php foreach ($groups as $group): ?>
        <li>
            <a href="<?php echo base_url('admin/show_emails/' . $group['id']); ?>">
                <?php echo $group['group_name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Form to create a new group -->
<h2>Create Group</h2>
<form method="post" action="<?php echo base_url('admin/create_group'); ?>">
    <input type="text" name="group_name" placeholder="Enter group name" class="news col-md-4" Required/>
    <button type="submit">Create Group</button>
</form>
</div>

 </div>
</section>
<?php include 'footer.php'; ?> 
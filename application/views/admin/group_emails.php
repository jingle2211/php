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


<h2>Emails for this Group</h2>
<ul>
    <?php foreach ($group_emails as $email): ?>
        <li><?php echo $email['email_address']; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Add Email on this Group</h2>
<form method="post" action="<?php echo base_url('admin/add_email_to_group/' . $group_id); ?>">
    <input type="text" name="email" placeholder="Enter email" class="news col-md-6" Required/>
    <button type="submit">Add Email</button>
</form>

<!-- Display all groups -->
<h2>Email Group</h2>
<ul>
    <?php foreach ($groups as $group): ?>
        <li>
            <a href="<?php echo base_url('admin/show_emails/' . $group['id']); ?>">
                <?php echo $group['group_name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</div>

 </div>
</section>
<?php include 'footer.php'; ?> 
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
    <li class="breadcrumb-item active">Profile</li>
    </ul>
    </div>
    </div>
    </div>
     <!-- Your content goes here  -->
    <div class="row clearfix"><br>
            <div class="col-lg-4 col-md-12">
            <div class="card">
            <div class="m-b-20">
            <div class="contact-grid">
            <div class="profile-header bg-dark">
            <div class="user-name"><?= $admind['name']; ?></div>
            <div class="name-center">Administrator</div>
            </div>
            <img src="<?= base_url(); ?>back/img/admin.jpg" alt="profile" class="user-img">                 
            <div>
            <span class="phone"><i class="material-icons">mail </i> <?= $admind['email']; ?></span>
            </div>
            <div class="row">
            <div class="col-4">
            <h5>564</h5>
            <small>Following</small>
            </div>
            <div class="col-4">
            <h5>18k</h5>
            <small>Followers</small>
            </div>
            <div class="col-4">
            <h5>565</h5>
            <small>Post</small>
            </div>
            </div>
            </div>
            </div>
            </div>  
            </div>
    <div class="col-lg-8 col-md-12">               
    <div class="tab-content">                      
    <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
    <div class="card">
        <div class="header">
        <h2> <strong>Change</strong> Password</h2>
        </div>
        <div class="body">
        <?= form_open('Admin/change_password'); ?>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Current Password" name="current" required>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="New Password" name="new" required> 
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Confirm Password" name="con" required>
        </div>
        <?php if ($this->session->flashdata('message')) {
          # code...
        echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
        } ?>
        <button class="btn btn-info btn-round" type="submit">Save Changes</button>                         
        </div>
    </div>                      
    </div>
    </div>
    </div>
    </div>
<!-- ///////////////////   Wallet section        ///////// -->
    <fieldset class="listar-generalstates">
    <div class="listar-generalstate">
    <h3 style="text-align:center" >Wallet Status</h3>
               
    <?php if ($wallets): ?>
    <?php foreach ($wallets as $wallet): ?>
        <?php if ($transections): ?>
            <?php foreach ($transections as $transection): ?>
                <div class="point">
                    <div class="iphone">
                        <div class="wallet">
                            <div class="wallet-summary">
                                <div class="summary-text">My Balance </div>
                                <div class="summary-balance"> &#8377;<?= $wallet->amount; ?></div>
                                <div class="summary-text-2"> Avl:&#8377;<?= $transection->total_amount; ?> </div>
                            </div>
                            <div class="user-profile">
                                <img src="<?= base_url(); ?>back/img/admin.jpg" alt="profile" class="user-photo">
                            </div>
                        </div>
                        <div class="content">
                            <div class="card">
                                <div class="upper-row">
                                    <div class="card-item">
                                        <span>Active Balance</span>
                                        <span><span class="dollar">&#8377;</span>&nbsp;1804 </span>
                                    </div>
                                    <div class="card-item">
                                        <span>spend Amount</span>
                                        <span><span class="dollar">&#8377;</span>&nbsp;2000 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

</div>
</fieldset>  

</div>
</section>
<!-- Footer Js -->
 <?php include 'footer.php'; ?>
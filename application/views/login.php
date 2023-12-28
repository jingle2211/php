<?php include'header.php'; ?>
<html>
<head>
    <title>Complete User Registration </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
    <div class="blog-block bg-gray-color"style="background-image:url('<?= base_url(); ?>images/login.png'); background-repeat:no-repeat;background-position: center;    margin-top: 50px;">
        
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
               
                <form method="post" action="<?php echo base_url('Login/validate_login'); ?>">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="user_email" placeholder="Email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" placeholder="Password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</body>
</html>

<?php include'footer.php'; ?>
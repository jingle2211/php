<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Visa_Services || Admin Login</title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url(); ?>back/img/fav.png" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="<?= base_url(); ?>back/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="<?= base_url(); ?>back/css/style.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>back/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class=" ">
				<form class="login100-form validate-form" method="POST" action="<?= base_url('Adminlogin/index') ?>">

					<span class="login100-form-title p-b-45">
					Admin	Login
					</span>
					<?php if ($this->session->flashdata('error')) {
						# code...
						echo "<h4 style='color:red'>".$this->session->flashdata('error')."</h4>";
					} ?>
					
					<div class="wrap-input100">
						<input class="input100" type="email" name="email" required placeholder="Email">  
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">  
					</div>

					 
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submmit">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-45 p-b-20">
						
<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>back/img/logo-ivs.png"></a>
					</div>
				</form>
<!-- 
				<div class="login100-more" style="background-image: url('<?= base_url(); ?>back/img/login-bg.png');">
				</div> -->
			</div>
		</div>
	</div>
	
	<!-- Plugins Js -->
	<script src="<?= base_url(); ?>back/js/app.min.js"></script>
	<!-- Extra page Js -->
	<script src="<?= base_url(); ?>back/js/pages/examples/pages.js"></script>
</body> 
</html>
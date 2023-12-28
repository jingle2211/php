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
						
						<li class="breadcrumb-item active">Add New Vehicle</li>
					</ul>
				</div> 
			</div>
		</div>
            <!-- Your content goes here  -->
            
		<?php if($this->session->flashdata('success')){ ?> 
              <div class="alert bg-green alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				  <?= $this->session->flashdata('success'); ?>
				</div>
		<?php  } ?>
           
		<div class="row clearfix"><br><br>

			 
			<div class="col-lg-12 col-md-12">
				 
				<div class="tab-content">
						
					<div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
						<div class="card">
							<div class="header">
								<h2>
									<strong>Add New</strong>  Vehicle</h2>
							</div>
							<div class="body">
								<?= form_open_multipart('Admin/add_vehicles'); ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
										<!--<select class="form-control" name="id_vechicle_category" id="v_cat">
											<option  selected disabled>Select Category</option>
											<?php/*  
											 if ($vcat) {
												foreach ($vcat as $_vcat) {
													  echo "<option value='".$_vcat['id_vechicle_category']."'>".$_vcat['vechicle_category']."</option>";
												}
											 }*/
											?>
										</select>-->
									<label for="email_address">Vehicle Category</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_cat" placeholder="category" name="id_vechicle_category" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Vehicle Name</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_name" placeholder="vehicle name" name="vehicle_name" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Model Year</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_model_year" placeholder="Model Year" name="model_year" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Registration Number</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_registration_no" placeholder="Registration Number" name="registration_no" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Owner Name</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_owner_name" placeholder="Owner Name" name="owner_name" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Owner Mobile Number</label>
									<div class="form-group">
										<input type="text" class="form-control title" id="v_owner_mobile" placeholder="Owner Mobile" name="owner_mobile" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<label for="email_address">Owner Address</label>
									<div class="form-group">
										<textarea  class="form-control title" rows="4" maxlength="500" id="v_owner_address" placeholder="Owner Address" name="owner_address" required></textarea>
									</div>
								</div>
								
								<?php if ($this->session->flashdata('message')) {
									# code...
									echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
								} ?>
								
								<div class="form-group">
								  <button class="btn-hover color-1" type="submit">Submit</button>
								</div>
							 </form>
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
    <style type="text/css">
/*#url{
    color: #000000;
}*/
.page-loader-wrapper{ display: none; }
#urlp{border: 1px solid; color: #7e7e7e; padding: 6px;     visibility: hidden;}

</style>

  </body>

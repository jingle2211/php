<?php
session_start();
include('config/config.php');
include('class/class_data.php');

if (isset($_POST[Submit]))
{
	$level_name= $_POST[level_name];
	$bspartner = $_POST[bspartner];
	$edit=$_REQUEST[edit];
	if($edit<>'1'){ $edit='0'; }
	$delete=$_REQUEST[delete];
	if($delete<>'1'){ $delete='0'; }
	
	$addnew=$objdata->add_newlevel($level_name,$edit,$delete,$bspartner);
       // print_r($addnew); exit;
	if ($addnew=='1')
	{
		echo"<script>alert('inserted')</script>";
		//$message="Level Added Successfully.";
	}
	else
	{
		//$message="Sorry ! Could't Add Such Menu.";
		$message=$addnew;
	}	
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<?php
$table_name='tbl_admin_title';
$page_limit=$objdata->view_by_table($table_name);
foreach($page_limit as $title)
{
	$title=$title['titlename'];
}
?>
		<title><?=$title;?> </title>
		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="shortcut icon" href="./img/notification.png">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
<?php include_once("include/header.php"); 
 include("include/left_menu.php"); 
?>

</div>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
						<ul class="breadcrumb">
						<li>	<i class="ace-icon fa fa-home home-icon"></i>
								<a href="dashboard.php">Home</a>	</li>
						<li> <a href="manage_level.php">Level Menu</a>	</li>
							<li class="active">Add Level Menu</li>
						</ul><!-- /.breadcrumb -->
						<!-- /.nav-search -->
					</div>

					<div class="page-content">
						<!-- /.page-header -->
                      <div class="space-6"></div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<form class="form-horizontal" id="validation-form" method="post">
<div  class="form-group">
<div class="alert alert-block alert-success">
<p style="align:center">					
<!--<div  align="center">
<font color="#009900"><strong><? if($addnew==1) { echo $message; } elseif($addnew==0){echo $message; }elseif($addnew==2){echo $message; }?></strong></font></div>-->
</p>
</div>	
</div>

<div class="form-group">
<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Business Partner:</label>
<div class="col-xs-12 col-sm-9">
<div class="clearfix">
<select name="bspartner" style="    width: 41.3%;">
  <option value="">Choose anyone </option>
  <option value="external">External </option>
  <option value="internal">Internal </option>
</select>
</div>
</div>
</div>

<div class="form-group">
<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Level Name:</label>
<div class="col-xs-12 col-sm-9">
<div class="clearfix">
<input type="text" id="level_name" name="level_name" class="col-xs-12 col-sm-5" required />
</div>
</div>
</div>

<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" type="submit" name="Submit">
<i class="ace-icon fa fa-check bigger-110"></i>
Submit</button>
<button class="btn" type="reset">
<i class="ace-icon fa fa-undo bigger-110"></i>
Reset</button>
</div>
</div>
</form>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
<?php include_once("include/footer.php")?>
	<a href="" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>			</a>
		</div><!-- /.main-container -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux.spinner.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

	</body>
</html>
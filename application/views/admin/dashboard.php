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
    <a href="<?= base_url('admin/dashboard'); ?>">
    <i class="fas fa-home"></i> Home</a>
    </li>      
    <li class="breadcrumb-item active">Dashboard</li>
    </ul>
    </div>
    </div>
    </div>
            <!-- Widgets -->
        <?php if($this->session->flashdata('success')){ ?> 
        <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span> </button>
        <?= $this->session->flashdata('success'); ?>
        </div>
        <?php  } ?>        
        
           
        <div class="dashboard">
        <div class="container">
        <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset class="listar-statisticsarea">
                <ul class="listar-statistics">
                <li class="listar-activelists">

                <div class="listar-couterholder">
                <h3 id="number1" data-from="0" data-to="38" data-speed="8000" data-refresh-interval="50">38</h3>
                <h4>Total Application</h4>
                <div class="listar-statisticicon"><i class="fas fa-map"></i></div>
                </div>
                </li>
                <li class="listar-newuser">
                <div class="listar-couterholder">
                <h3 id="number2" data-from="0" data-to="315" data-speed="8000" data-refresh-interval="50">315</h3>
                <h4>New Users</h4>
                <div class="listar-statisticicon"><i class="fas fa-user-tag"></i></div>
                </div>
                </li>
                <li class="listar-weeksviews">
                <div class="listar-couterholder">
                <h3 id="number3" data-from="0" data-to="9563" data-speed="8000" data-refresh-interval="50">63</h3>
                <h4>Active Client</h4>
                <div class="listar-statisticicon"><i class="fas fa-chart-bar"></i></div>
                </div>
                </li>
                </ul>
                </fieldset>
                <fieldset class="listar-generalstates">
                <div class="listar-generalstate">
                <h3 style="text-align:center" >General Stats</h3>
                <div class="listar-description text-center">
                <p>Average application Process for Applicant</p>
                </div>
                </div>
                <div id="piechart" style="width:900px; height:500px;"></div>
                </fieldset>
        </div>
        </div>
        </div>
        </div> 
</div>         
</section>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
   $.noConflict();
	$.fn.jQuerySimpleCounter = function($) {
	    var settings = $.extend({
	        start:  0,
	        end:    100,
	        easing: 'swing',
	        duration: 400,
	        complete: ''
	    }, options );

	    var thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				var mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};
$('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
$('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
  	/* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });
</script>
<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['New User', 2],
      ['Old User', 4],
      ['Month', 8],
    //   ['Gym', 2],
    //   ['Sleep', 8]
    ]);
      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data);
    }
    </script>
    <!-- fOOTER Js -->
  <?php include 'footer.php'; ?>
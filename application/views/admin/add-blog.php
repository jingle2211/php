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
    <li class="breadcrumb-item active">Add New Blog</li>
    </ul>
    </div> 
    </div>
    </div>
            <!-- Your content goes here  -->        
  <?php if($this->session->flashdata('success')){ ?> 
<div class="alert bg-green alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">×</span></button>
 <?= $this->session->flashdata('success'); ?>
</div>
 <?php  } ?>
           
    <div class="row clearfix">
    <div class="col-lg-12 col-md-12">                    
    <div class="tab-content">                           
    <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
    <div class="card">
        <div class="header">
        <h2><strong>Add New</strong> Pages</h2>
        </div>
    <div class="body">
    <?= form_open_multipart('Admin/add_blog'); ?>
     <label for="email_address">Enter Title</label>
    <div class="form-group">
    <input type="text" class="form-control title" id="title" placeholder="Title" name="title" required>                               
                                    <!-- Url Input -->
    <?php $link = "<span id='url'></span>" ?>
    <p id="urlp"> <a href="" id="red" target="_blank"><?= base_url().$link; ?></a>   </p>
    <input type="hidden"  name="slug" id="inputurl">                           
    <label for="email_address">Featured Image</label>
    <div class="form-group">
    <input type="file" class="form-control" placeholder="Title" name="image" required>
    </div>
    <div class="form-group">
    <textarea id="editor1" name="description" rows="10" cols="12" > </textarea>
    </div>
    <label for="email_address">Enter Meta Title</label>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Meta  Title" name="metatitle" required>
    </div>
                        <label for="email_address">Enter Meta Keywords</label>
                        <div class="form-group">
                        <div class="form-group demo-tagsinput-area">
                        <div class="form-line">
                        <input type="text" class="form-control" name="metakeywords" data-role="tagsinput">
                        </div>
                        </div>
                        </div>
                <label for="email_address">Enter Meta Discription</label>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Meta Discription" name="metades" required>
                </div>
                                     
         <?php if ($this->session->flashdata('message')) {
          # code...
        echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
        } ?>                                  
            <div class="form-group">
            <button class="btn-hover color-1" type="submit">Submit</button>
            </div>
                                   
    </div>
    </div>
    </div>
    </div>
    </div>        
    </div>
</div>
</section>
 <!-- Footer Js -->
<?php include 'footer.php'; ?>
    <style type="text/css">
.page-loader-wrapper{ display: none; }
#urlp{border: 1px solid; color: #7e7e7e; padding: 6px;     visibility: hidden;}

</style>
<script type="text/javascript">
var base;        
  base = "<?= base_url(); ?>"
$(document).ready(function(){
  $(".title").blur(function(){
   var title = $("#title").val();
   var spaci = title.replace(/([!@#$(%^&*_+-=.,"';:'])+/g, '');
 var sapac = spaci.replace(/\s+/g,' ').trim();
 var final = sapac.toLowerCase();
 var link = final.replace(/\s/gi, "-");
  //alert(link);
   $.post(base+'Admin/slug', {slug: link}, function(result){
    //alert(result);
   $("#url").text(result);
   $('#urlp').css('visibility', 'inherit');
   $('#red').attr('href',base+result);
   $('#inputurl').attr('value',result);
  });
   
  });
}); 
 </script>
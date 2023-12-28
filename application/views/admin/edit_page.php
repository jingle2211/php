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
                            
                            <li class="breadcrumb-item active">Edit Page</li>
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
                                        <strong>Edit</strong>  Page</h2>
                                </div>
                                <div class="body">
                                    <?= form_open_multipart('Admin/update_page'); ?>
                                    <label for="email_address">Enter Title</label>
                                    <div class="form-group">
                                        <input type="text" id="title" class="form-control title" placeholder="Title" value="<?= $details['title']; ?>" name="title" required>
                                    </div>
                                    <br>
                                    <!-- Url Input -->
                                    
                                    <label for="email_address">Featured Image</label>
                                      <div class="form-group">
                                        <input type="hidden" name="previousimagea" value="<?= $details['images']; ?>">
                                        <input type="hidden" name="id" value="<?= $details['id']; ?>">
                                        <input type="file" class="form-control" placeholder="Title" name="images"  >
                                        <img src="<?= base_url(); ?>upload/pages/<?= $details['images']; ?>" id="imgedit">
                                    </div>
                                      <div class="form-group">
                                        <textarea id="editor1" name="short_description" rows="10" cols="12" ><?= $details['short_description']; ?> </textarea>
                                    </div>
                                    <label for="Description">Long Description</label>
                                    <div class="form-group">
                                        <textarea id="editor1" name="long_description" rows="10" cols="12" ><?= $details['long_description']; ?> </textarea>
                                    </div>
                                    <label for="Note">Note:</label>
                                    <div class="form-group">
                                        <textarea id="editor1" name="Notes" rows="10" cols="12" ><?= $details['Notes']; ?> </textarea>
                                    </div>
                                      <label for="email_address">Enter Meta Title</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Meta  Title" name="metatitle" required value="<?= $details['metatitle']; ?>">
                                    </div>
                                     <label for="email_address">Enter Meta Keywords</label>
                                    <div class="form-group">
                                         <div class="form-group demo-tagsinput-area">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="keyword" data-role="tagsinput" value="<?= $details['keyword']; ?>">
                                </div>
                            </div>
                                    </div>
                                    <label for="email_address">Enter Meta Discription</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Meta Discription" name="title2" required value="<?= $details['title2']; ?>">
                                    </div>
                                     
                                    <?php if ($this->session->flashdata('message')) {
                                        # code...
                                        echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
                                    } ?>
                                    

                                    <div class="form-group">
                                    <input type="submit" class="btn-hover color-1" name="submit" value="Update">
                                    </div>
                                                                    
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
.page-loader-wrapper{ display: none; }
#imgedit{
 width: 100px;
 transition: width 3s;
}
#imgedit:hover {
    width: 400px;
    position: absolute;
    z-index: 99;
    transition: width 3s;
}
#urlp{border: 1px solid; color: #7e7e7e; padding: 6px;   }

</style>
<!-- <script type="text/javascript">
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
   $('#red').attr('href',base+result);
   $('#inputurl').attr('value',result);
  });
   
  });
}); 
    </script> -->
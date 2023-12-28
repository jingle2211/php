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
                    <li class="breadcrumb-item active">News Latter </li>
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
                            <h3 class="text-center"> News Latter </h3>
                             </div>
                                <div class="body">
                                    <?= form_open_multipart('Admin/add_latter'); ?>
                                    <label for="Title">Enter Title</label>
                                    <div class="form-group">
                                    <input type="text" class="form-control title" id="title" value="<?php if($add_latter['name']){ echo $add_latter['name']; } ?>" name="name" required>
                                    </div><br>
                                 
                                    <label for="Featured">Featured Image</label>
                                      <div class="form-group">
                                        <input type="file" class="form-control" placeholder="Title" name="image" >
                                        <input type="hidden" name="samimg" value="<?= $add_latter['image']; ?>"  > 
                                        <img src="<?= base_url().'upload/'.$add_latter['image']; ?>" id="imgedit">
                                        </div>
                                    <label for="description">Add Description</label>                               
                                    <div class="form-group">
                                    <textarea id="editor1" name="description" rows="10" cols="12" ><?=  $add_latter['description']; ?></textarea>
                                    </div>

                                    <label for="Meta">Enter Meta Title</label>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Meta  Title" value="<?=  $add_latter['metatitle']; ?>" name="metatitle" required>
                                    </div>
                                    <label for="Keywords">Enter Meta Keywords</label>
                                    <div class="form-group">
                                    <div class="form-group demo-tagsinput-area">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="metakeywords" value="<?=  $add_latter['metakeywords']; ?>" data-role="tagsinput">
                                    </div>
                                    </div>
                                    </div>
                                    <label for="Discription">Enter Meta Discription</label>
                                    <div class="form-group">
                                    <input type="text" class="form-control" value="<?=  $add_latter['metades']; ?>" placeholder="Meta Discription" name="metades" required>
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
    <!-- Plugins Js -->
  <?php include 'footer.php'; ?>
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script>
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea#tinymce1').froalaEditor() }); </script>
    <style type="text/css">

.page-loader-wrapper{ display: none; }
#urlp{border: 1px solid; color: #7e7e7e; padding: 6px;     visibility: hidden;}

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
</style>
</body>
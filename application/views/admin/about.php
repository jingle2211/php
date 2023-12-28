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
                            
                            <li class="breadcrumb-item active">About Us </li>
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
                                        <strong>About Us </strong>  </h2>
                                </div>
                                <div class="body">
                                    <?= form_open_multipart('Admin/about'); ?>
                                    <label for="email_address">Enter Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control title" id="title" value="<?php if($about['name']){ echo $about['name']; } ?>" name="name" required>
                                    </div><br>
                                 
                                    <label for="email_address">Featured Image</label>
                                      <div class="form-group">
                                        <input type="file" class="form-control" placeholder="Title" name="image" >
                                        <input type="hidden" name="samimg" value="<?= $about['image']; ?>"  > 
                                        <img src="<?= base_url().'upload/'.$about['image']; ?>" id="imgedit">
                                    </div>
                                   
                                      <lebel for="description"> Ivs Description </lebel>
                                      <div class="form-group">
                                        <textarea id="editor1" name="description" rows="10" cols="12" ><?=  $about['description']; ?></textarea>
                                    </div>

                                      <label for="email_address">Enter Meta Title</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Meta  Title" value="<?=  $about['metatitle']; ?>" name="metatitle" required>
                                    </div>
                                     <label for="email_address">Enter Meta Keywords</label>
                                    <div class="form-group">
                                         <div class="form-group demo-tagsinput-area">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="metakeywords" value="<?=  $about['metakeywords']; ?>" data-role="tagsinput">
                                </div>
                            </div>
                                    </div>
                                    <label for="email_address">Enter Meta Discription</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?=  $about['metades']; ?>" placeholder="Meta Discription" name="metades" required>
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

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><!-- 
   
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
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
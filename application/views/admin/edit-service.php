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
                            
                            <li class="breadcrumb-item active">Edit Service</li>
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
                                        <strong>Edit</strong>  Service</h2>
                                </div>
                                <div class="body">
                                    <?= form_open_multipart('Admin/update_service'); ?>
                                    <label for="email_address">Enter Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control title" id="title" placeholder="Title" name="name" value="<?= $details['name']; ?>" required>
                                    </div> 
                                    <label for="email_address">Featured Image</label>
                                      <div class="form-group">
                                        <input type="file" class="form-control" placeholder="Title" name="image" >
                                        <input type="hidden" name="samimg" value="<?= $details['image']; ?>" >
                                        <input type="hidden" name="id" value="<?= $details['id']; ?>" >
                                        <img src="<?= base_url().'upload/'.$details['image']; ?>"  id="imgedit">
                                    </div>
                                      <div class="form-group">
                                        <textarea id="editor1" name="description" rows="10" cols="12" ><?= $details['description']; ?></textarea>
                                    </div>                                   
                                   

                                     <label for="email_address">Enter Oder No.</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="orderno" value="<?= $details['orderno']; ?>" required>
                                    </div>
                                     
                                    <?php if ($this->session->flashdata('message')) {
                                        # code...
                                        echo "<p style='color:red'>".$this->session->flashdata('message')."</p>";
                                    } ?>
                                    

                                    <div class="form-group">
                                      <button class="btn-hover color-1" type="submit">Update</button>
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
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
                            
                            <li class="breadcrumb-item active">Update Testimonial</li>
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
                                        <strong>Edit</strong>  Testimonial</h2>
                                </div>
                                <div class="body">
                                    <?= form_open_multipart('Admin/updatetestimonial'); ?>
                                    <label for="email_address">Enter Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control title" id="title" placeholder="Title" value="<?= $details['name']; ?>" name="name" required>
                                        <input type="hidden" name="id" value=" <?= $details['id']; ?> ">
                                    </div> 
                                    <label for="email_address">Positions</label>
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Positions" value="<?= $details['position']; ?>" name="position" required>
                                    </div>
                                      <div class="form-group">
                                        <textarea id="editor1" name="description" rows="10" cols="12"> <?= $details['description']; ?> </textarea>
                                    </div>                                   
                                   

                                     <label for="email_address">Enter Oder No.</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control"   name="orderno" value="<?= $details['orderno']; ?>">
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
/*#url{
    color: #000000;
}*/
.page-loader-wrapper{ display: none; }
#urlp{border: 1px solid; color: #7e7e7e; padding: 6px;     visibility: hidden;}

</style>

  </body>
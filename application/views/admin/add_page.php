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
        <li class="breadcrumb-item active">Add New Page</li>
        </ul>
        </div>
        </div>
        </div>
        <!-- Your content goes here  -->

        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span> </button>
            <?= $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <div class="row clearfix"><br><br>
        <div class="col-lg-12 col-md-12">
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
        <div class="card">
                <div class="header">
                <h2><strong>Add New</strong> Pages </h2>
                </div>
        <div class="body">
        <?= form_open_multipart('Admin/add_page'); ?>
        <div class="row">
        <div class="form-group col-md-2">
        <label for="Counrty">Select Country:</label>
        </div>
        <!-- <table width="600" border ="1" cellspacing="5" cellpadding="5"> -->
        <div class="form-group col-md-4">
        <select name="country" id="country" class="form-control">
        <option value="">Select Country</option>
        <?php foreach ($dropdown_data as $item): ?>
        <option value="<?php echo $item->name ; ?>"><?php echo $item->name; ?></option>
        <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="Counrty">Enter Visa Type:</label>
        </div>
        <div class="form-group col-md-4">
        <input type="text" id="visa_type" name="visa_type" placeholder="Visa Type" class="form-control">
        </div>
        <!-- </table> -->
        </div>
        <label for="email_address">Enter Title:</label>
        <div class="form-group">
        <input type="text" class="form-control title" id="title" placeholder="Title" name="title" required>
        </div>
           <!-- Url Input -->
        <?php $link = "<span id='url'></span>" ?>
        <p id="urlp"> <a href="" id="red" target="_blank"><?= base_url() . $link; ?></a> </p>                        
                                <!-- Url Input -->
        <label for="email_address">Countery Image:</label>
        <div class="form-group">
        <input type="file" class="form-control" placeholder="Title" name="images" required>
        </div>
        <label for="email_address">Short Description:</label>
        <div class="form-group">
        <textarea id="short_description" name="short_description" rows="10" cols="12" placeholder="Description"> </textarea>
        </div>
        <label for="Description">Long Description:</label>
        <div class="form-group">
        <textarea id="long_description" name="long_description" rows="10" cols="12" placeholder="Description"> </textarea>
        </div>
        <label for="Note">Note:</label>
        <div class="form-group">
        <textarea id="Notes" name="Notes" rows="10" cols="12" placeholder="Notes"> </textarea>
        </div>
        <label for="Title">Enter Meta Title</label>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Meta Title" name="metatitle" required>
        </div>
        <label for="Keywords">Enter Keywords</label>
        <div class="form-group">
        <div class="form-group demo-tagsinput-area">
        <div class="form-line">
        <input type="text" class="form-control" name="keyword" placeholder="Keyword" data-role="tagsinput">
        </div>
        </div>
        </div>
        <label for="email_address">Keyword Discription</label>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Keyword Discription" name="title2" required>
        </div>
         <?php if ($this->session->flashdata('message')) {
           # code...
         echo "<p style='color:red'>" . $this->session->flashdata('message') . "</p>";
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

<style type="text/css">
    .page-loader-wrapper {
        display: none;
    }
    #urlp {
        border: 1px solid;
        color: #7e7e7e;
        padding: 6px;
        visibility: hidden;
    }
</style>
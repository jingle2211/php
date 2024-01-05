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
            <a href="<?= base_url('user'); ?>">
            <i class="fas fa-home"></i> Home</a> </li>            
            <li class="breadcrumb-item active">Update Application</li>
            </ul>
            </div>
            </div> 
            </div>
            
            <?php if($this->session->flashdata('success')){ ?> 
            <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span> </button>
            <?= $this->session->flashdata('success'); ?>
            </div>
           <?php  } ?>
           
        <div class="row clearfix"><br>     
        <div class="col-lg-12 col-md-12">         
        <div class="tab-content">                
        <div role="tabpanel" class="tab-pane active" id="usersettings" aria-expanded="false">
        <div class="card">
            <div class="header">
            <h2> <strong>Update</strong> Application</h2>
            </div>
            <div class="body">
            <form method="post">
            <div class="row">
                                     
            <div class="form-group col-lg-6" style="display: flex; ">
            <div class="col-md-4"> 
            <label for="email_address">Ivs Branch:</label>
            </div>
            <div class="col-md-8"> 
            <input type="text" name="branch" value="<?= $allapplication->branch; ?>" required style="border:1px solid; padding-left: 10px;">
            </div> 
            </div>
            <!--<label for="processing">sender Staff</label>-->
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
            <label for="processing">Sender Staff:</label>
            </div>
            <div class="col-md-8"> 
            <input type="text" name="sender_Staff" value="<?= $allapplication->sender_Staff; ?>"style=" border:1px solid;padding-left: 10px;">
            </div>
            </div>

            <!--<label for="Description">Client</label>-->
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
           <label for="Description">Client/Agent:</label>
           </div>
           <div class="col-md-8"> 
            <input type="text" name="client" value="<?= $allapplication->client; ?>"style="border:1px solid; padding-left: 10px;">
            </div>
            </div>
            <!--<label for="Note">Corporate Name:</label>-->
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
            <label for="Note">Corporate Name:</label>
            </div>  
            <div class="col-md-8"> 
            <input type="text" name="corporate_name" value="<?= $allapplication->corporate_name; ?>"style="border:1px solid;padding-left: 10px; ">
            </div>
            </div>
            <!--<label for="email_address">Full Name</label>-->
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
             <label for="email_address">Full Name:</label>
             </div>
             <div class="col-md-8"> 
            <input type="text" class="form-control"  name="name"  value="<?= $allapplication->name; ?>"style="border:1px solid; padding-left: 10px;">
            </div>
            </div>
            <!--<label for="email_address">Pasport No</label>-->
            <div class="form-group col-lg-6"style="display: flex; ">
            <div class="col-md-4"> 
            <label for="email_address">Passport No:</label>
            </div>
            <div class="col-md-8"> 
            <input type="text" class="form-control" name="pasport_no"  value="<?= $allapplication->pasport_no; ?>"style="border:1px solid; padding-left: 10px;">                                  
            </div>
            </div>

            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
            <label for="email_address">Email Id:</label>
            </div>
            <div class="col-md-8"> 
            <input type="text" class="form-control"  name="email"  value="<?= $allapplication->email; ?>"style="border:1px solid; padding-left: 10px;">
            </div>
            </div>
        
            <div class="form-group col-lg-6"style="display: flex; ">
            <div class="col-md-4"> 
            <label for="email_address">Phone No:</label>
            </div>
            <div class="col-md-8"> 
            <input type="text" class="form-control" name="phone"  value="<?= $allapplication->phone; ?>"style="border:1px solid; padding-left: 10px;">                                  
            </div>
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4"> 
            <label for="email_address">Date Of Birth:</label>
            </div>
            <div class="col-md-8"> 
            <input type="date" class="form-control"  name="date_of_birth"  value="<?= $allapplication->date_of_birth; ?>"style="border:1px solid; padding-left: 10px;">
            </div>
            </div>
         
            <div class="form-group col-lg-6"style="display: flex; ">
            <div class="col-md-4"> 
            <label for="email_address">Date_Of_Travel:</label>
            </div>
            <div class="col-md-8"> 
            <input type="date" class="form-control" name="date_of_travel"  value="<?= $allapplication->date_of_travel; ?>"style="border:1px solid; padding-left: 10px;">                                  
            </div>
            </div>

            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Country:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Country"  value="<?= $allapplication->Country; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
              
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">PNR No:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="PNR"  value="<?= $allapplication->PNR; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Ref No:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Ref"  value="<?= $allapplication->Ref; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Staff Handling:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Staff"  value="<?= $allapplication->Staff; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Visa Fee:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Fee"  value="<?= $allapplication->Fee; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Departure Date:</label>
            </div>
             <div class="col-md-8">
            <input type="date" class="form-control" name="departure"  value="<?= $allapplication->departure; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Enq. Date:</label>
            </div>
             <div class="col-md-8">
            <input type="date" class="form-control" name="enquiry"  value="<?= $allapplication->enquiry; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Embassy Facilitation:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Facilitation"  value="<?= $allapplication->Facilitation; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex;">
            <div class="col-md-4">
            <label for="email_address">Miscellaneous Charges:</label>
            </div>
             <div class="col-md-8">
            <input type="text" class="form-control" name="Charges"  value="<?= $allapplication->Charges; ?>"style=" border:1px solid;padding-left: 10px;">                               
            </div>                                  
            </div>
            <div class="form-group col-lg-6"style="display: flex; ">
            <div class="col-md-4"> 
            <label for="email_address">Dispatch Date:</label>
            </div>
            <div class="col-md-8"> 
            <input type="date" class="form-control" name="Dispatch"  value="<?= $allapplication->Dispatch; ?>"style="border:1px solid; padding-left: 10px;">                                  
            </div>
            </div>
            
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
</div>
</section>
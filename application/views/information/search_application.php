<!-- Right Sidebar -->
<style>
  h2 {
    font-size: 17px;
    text-align: center;
    font-weight: 500;
    background: linear-gradient(45deg, #5e79e0, #f0a3a3);
    margin-top: 25px;
  }
button {
    width: 33%;
    margin: 13px;
    padding: 5px;
    border-radius: 15px;

    }

  </style>
<section class="content">
    <div class="block-header">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <ul class="breadcrumb breadcrumb-style ">
    <li class="breadcrumb-item">
    <h4 class="page-title">Profile</h4>
    </li>
    <li class="breadcrumb-item bcrumb-1">
    <a href="<?= base_url('user'); ?>">
    <i class="fas fa-home"></i>Home</a></li>
    <li class="breadcrumb-item active">Search Application</li>
    </ul>
    </div>
    </div>
    </div>

    
<div class="container">
    <h2>SEARCH/ EDIT APPLICATION</h2> 
    <div class="row">
<div text-align="center" class="col-md-4 col-sm-4">
    <form action="<?php echo base_url('Information/search_application'); ?>" method="post">
        <label for="Docket_No">Docket Number:</label>
        <div class="form-control">
        <input type="text" name="Docket_No" id="Docket_No" placeholder="Search by Docket_No..." required>
</div>
        <button type="submit">Search</button>
        </form>
</div>
    
    <div text-align="center" class="col-md-4 col-sm-4">
    <form action="<?php echo base_url('Information/search_application'); ?>" method="post">
        <label for="pasport_no">Pasport Number:</label>
        <div class="form-control">
        <input type="text" name="pasport_no" id="pasport_no" placeholder="Search by Passport_No..." required />
        </div>
        <button type="submit">Search</button>
        </form>
</div>
<div text-align="center" class="col-md-4 col-sm-4">
    <form action="<?php echo base_url('Information/search_application'); ?>" method="post">
        <label for="name">Name:</label>
        <div class="form-control">
        <input type="text" name="name"  placeholder="Search by Name..." required>
        </div>
        <button type="submit">Search</button>
        </form>
</div>
  </div>
</div>
<?php if ($visaApplication): ?>
    <h2>VISA APPLICATION DETAILS</h2>
    <table>
        <tr>
            <th>Docket Number</th>
            <th>Corporate Name</th>
            <th>Name</th>
            <th>Sender Staff</th>
            <th>Pasport</th>
            <th>Date of Travel</th>
            <th>Country</th>
            <th>Staff</th>
            <th>Remark</th>
            <th>Dispatch</th>
            <th>Action</th>
        </tr>
         <//?php if($visa_application): $i = 1;  foreach ($visa_application as $data): ?> 
        <tr>
            <td><?php echo $visaApplication->Docket_No; ?></td>
            <td><?php echo $visaApplication->corporate_name; ?></td>
            <td><?php echo $visaApplication->name; ?></td>
            <td><?php echo $visaApplication->sender_Staff; ?></td>
            <td><?php echo $visaApplication->pasport_no; ?></td>
            <td><?php echo $visaApplication->date_of_travel; ?></td>
            <td><?php echo $visaApplication->Country; ?></td>
            <td><?php echo $visaApplication->Staff; ?></td>
            <td><?php echo $visaApplication->Remark; ?></td>
            <td><?php echo $visaApplication->Dispatch; ?></td>
             <!-- <td><a href="<//?= base_url('information/edit_application/' . $all['id']); ?>">Edit</a></td> -->
        </tr>
        <//?php endforeach; endif;  ?> 
    </table>
<?php else: ?>
    <h2>Application Details Not Found!</h2>
<?php endif; ?>
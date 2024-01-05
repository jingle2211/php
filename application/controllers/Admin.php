<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();


    $this->load->library('email');
    if (!$this->session->userdata('admin')):
      redirect('Adminlogin');
    endif; /// login redirect

    $this->load->model(array ('Model_Admin', 'Model_Login', 'Hello_Model', 'User_model', 'subscribers_model', 'Menu_model', 'Visa_model', 'Add_model', 'Dynamic_dependent_model'));
    $this->load->library('form_validation');

    $this->load->helper('file');
  }
////////////      extra addeddd     ///////////////
 // function index view
 public function index()
 {
     $data = [
         'title' => 'Dashboard',
         'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
         'user_role' => $this->db->get('user_role')->num_rows(),
         //'user_member' => $this->db->get_where('user', ['role_id' => 2])->num_rows(),
         'user_member' => $this->db->get('user')->num_rows(),

         'menu' => $this->db->get('user_menu')->num_rows(),
         'sub_menu' => $this->db->get('user_sub_menu')->num_rows(),
         'report' => $this->db->get('user_report')->num_rows(),
         'application' => $this->db->get('visa_application')->num_rows(),
     ];
     
     $this->load->view('templates/admin_header', $data);
     $this->load->view('templates/admin_sidebar');
     $this->load->view('templates/admin_topbar', $data);
     $this->load->view('admin/index', $data);
     $this->load->view('templates/admin_footer');
 }

 // function role
 public function role()
 {
     $data['title'] = 'Access Authority';
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     $data['role'] = $this->db->get('user_role')->result_array();
     
     $this->load->view('templates/admin_header', $data);
     $this->load->view('templates/admin_sidebar');
     $this->load->view('templates/admin_topbar', $data);
     $this->load->view('admin/role');
     $this->load->view('templates/admin_footer');
 }

 // function add role
 public function addrole()
 {
     $this->form_validation->set_rules('role', 'Authority', 'required', [
         'required' => 'Authority name cannot be empty!'
     ]);

     if ($this->form_validation->run() == false) {
         $data['title'] = 'Access Rights';
         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         $data['role'] = $this->db->get('user_role')->result_array();
         
         $this->load->view('templates/admin_header', $data);
         $this->load->view('templates/admin_sidebar');
         $this->load->view('templates/admin_topbar', $data);
         $this->load->view('admin/role');
         $this->load->view('templates/admin_footer');
     } else {
         $this->db->insert('user_role', ['role' => $this->input->post('role')]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         New authority has been added</div>');
         redirect('admin/role');
     }
 }

 // function edit role
 public function editrole($id = null)
 {
     $this->form_validation->set_rules('role', 'Authority', 'required');

     if ($this->form_validation->run() == false) {
         $data['title'] = 'Edit Access Authority';
         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         $data['role'] = $this->db->get_where('user_role', ['id' => $id])->row_array();
         
         $this->load->view('templates/admin_header', $data);
         $this->load->view('templates/admin_sidebar');
         $this->load->view('templates/admin_topbar', $data);
         $this->load->view('admin/edit_role');
         $this->load->view('templates/admin_footer');
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Failed to rename authority!</div>');
     } else {
         $data = [
             'id' => $this->input->post('id'),
             'role' => $this->input->post('role')
         ];

         $this->db->update('user_role', $data, ['id' => $id]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Successfully renamed authority!</div>');
         redirect('admin/role');
     }
 }

 // function delete role
 public function deleterole($id = null)
 {
     $this->db->delete('user_role', ['id' => $id]);
     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
     Authority successfully removed!</div>');
     redirect('admin/role');
 }
 
 // function role access
 public function roleaccess($role_id)
 {
     $data['title'] = 'Access Authority';
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
     $this->db->where('id !=', 1);
     $data['menu'] = $this->db->get('user_menu')->result_array();
     
     $this->load->view('templates/admin_header', $data);
     $this->load->view('templates/admin_sidebar');
     $this->load->view('templates/admin_topbar', $data);
     $this->load->view('admin/role_access');
     $this->load->view('templates/admin_footer');
 }

 // change access
 public function changeaccess()
 {
     $menu_id = $this->input->post('menuId');
     $role_id = $this->input->post('roleId');

     $data = [
         'role_id' => $role_id,
         'menu_id' => $menu_id
     ];

     $result = $this->db->get_where('user_access_menu', $data);

     if ($result->num_rows() < 1) {
         $this->db->insert('user_access_menu', $data);
     } else {
         $this->db->delete('user_access_menu', $data);
     }

     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
     Access has been changed!</div>');
 }

 // data member info
 public function datamember()
 {
     $data['title'] = 'User Data';
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     $data['user_member'] = $this->db->order_by('id', 'DESC');
     $data['user_member'] = $this->db->get_where('user')->result_array();

     $this->load->view('templates/admin_header', $data);
     $this->load->view('templates/admin_sidebar');
     $this->load->view('templates/admin_topbar', $data);
     $this->load->view('admin/data_member', $data);
     $this->load->view('templates/admin_footer');
 }

 // info detail member
 public function detailmember($id)
 {
     $data['title'] = 'User Data Info';
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     $data['member'] = $this->db->get_where('user', ['id' => $id])->row_array();

     $this->load->view('templates/admin_header', $data);
     $this->load->view('templates/admin_sidebar');
     $this->load->view('templates/admin_topbar', $data);
     $this->load->view('admin/detail_member', $data);
     $this->load->view('templates/admin_footer');
 }

 // delete member
 public function deletemember($id)
 {
     $this->db->delete('user', ['id' => $id]);
     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
     User deleted successfully!</div>');
     redirect('admin/datamember');
 }

 // edit member
 public function editmember($id)
 {
     $this->form_validation->set_rules('name', 'Name', 'required');
     
     if ($this->form_validation->run() == false) {
         $data['title'] = 'Change User Data';
         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         $data['member'] = $this->db->get_where('user', ['id' => $id])->row_array();
         $this->load->view('templates/admin_header', $data);
         $this->load->view('templates/admin_sidebar');
         $this->load->view('templates/admin_topbar', $data);
         $this->load->view('admin/edit_member', $data);
         $this->load->view('templates/admin_footer');
     } else {
         $data = [
             'id' => $this->input->post('id'),
             'name' => $this->input->post('name'),
             'email' => $this->input->post('email'),
             'role_id' => $this->input->post('role_id'),
             'is_active' => $this->input->post('is_active')
         ];
             
         $this->db->update('user', $data, ['id' => $data['id']]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         User data changed successfully!</div>');
         redirect('admin/datamember');
     }
 }



  /////////////////    Admin Login Function  //////////////////    
  // public function index()
  // {
  //   redirect('Adminlogin');
  // } // index

  /// admin dashboard start
  public function dashboard()
  {
    $this->session->userdata('admin');
    $data['application'] = $this->Model_Admin->get_all_application();
    $data['admind'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/dashboard', $data);
  }

  ////////////     Profile     //////////////
  public function profile()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['wallets'] = $this->Model_Admin->get_wallets();
    //$data['transections'] = $this->Model_Admin->get_transections();
    $this->load->view('admin/profile', $data);
  }

  ///////           change Password      //////////////////

  public function change_password()
  {
    $cur = $this->input->post('current');
    $new = $this->input->post('new');
    $con = $this->input->post('con');
    if ($this->Model_Admin->check_current_pass($cur)):
      if ($new == $con):
        if ($this->Model_Admin->change_password($con)):
          $this->session->set_flashdata('success', "Password Successfully Changed");
          redirect('Admin/dashboard');
        else:
          $this->session->set_flashdata('message', "Confirm Password does not match New Password");
          redirect('Admin/profile');
        endif;
      else:
        $this->session->set_flashdata('message', "Confirm Password does not match New Password");
        redirect('Admin/profile');
      endif;
    else:
      $this->session->set_flashdata('message', "Invalid Current Password");
      redirect('Admin/profile');
    endif;
  }

  function logout()
  {
    if ($this->session->unset_userdata('admin')):
      redirect('Admin');
    else:
      redirect('Admin');
    endif;
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start Blogs Functions                           /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  // create slug
  public function slug()
  {
    $this->Model_Admin->create_slug($_POST['slug']);
  }

  public function add_blog()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/add-blog', $all);
    if ($this->input->post()):
      $upload_conf = array(
        'upload_path' => realpath('upload/blogs'),
        'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
        'max_size' => '2000',
        'quality' => '40%',
      );
      $upload_data = array();
      $image_data = array();
      $this->upload->initialize($upload_conf);
      $error = array();
      $success = array();
      $m = $_FILES['image']['name'];
      if ($m !== "") {
        $this->upload->do_upload('image');
        $upload_data = $this->upload->data();
        $image_data['image'] = $upload_data['file_name'];
      }
      $data = $this->input->post();
      $data['createdate'] = date('d-m-Y H:i:s');
      $data['modifydate'] = date('d-m-Y H:i:s');
      $data['image'] = $image_data['image'];
      //print_r($data);
      if ($this->Model_Admin->insert_blog($data)):
        $this->session->set_flashdata('success', '<b> New Stories Added successfully!</b>');
        redirect('Admin/manage_blogs');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_blog');
      endif;
    endif;
  }

  //////////////    Add country pages     //////////////////////////

  public function add_country()
  {
    $this->load->view('admin/add_country');
    //Check submit button 
    if ($this->input->post('save')) {
      //get form's data and store in local varable
      $n = $this->input->post('name');
      $this->Hello_Model->saverecords($n);
      echo "Records Saved Successfully";
    }
  }
  public function add_visa()
  {
    $data['country'] = $this->Visa_model->getcountry();
    //print_r($data);
    $this->load->view('admin/add_visa', $data);
    //Check submit button 
    if ($this->input->post('save')) {
      //print_r($_POST);die;
      //get form's data and store in local varable
      $name = $this->input->post('name');
      $ci = $this->input->post('country');
      $this->Visa_model->insertVisa($ci, $name);
      echo "Records Saved Successfully";
    }
  }

  function fetch_visa()
  {
    $country_id = $this->input->post('country_id');
    if ($this->input->get('country_id')) {
      $visadata = $this->dynamic_dependent_model->fetch_visa($country_id);
      echo json_encode($visadata);
    }
    //print_r($_GET);die;
  }

  public function get_visa_types() {
    $country_id = $this->input->post('country_id');
    $visa_types = $this->dynamic_dependent_model->get_visa_types($country_id);
    echo json_encode($visa_types);
}
public function manage_visa()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['allvisa'] = $this->Model_Admin->get_all_visa();
  $this->load->view('admin/manage_visa', $all);
}

public function edit_visa($id) {
  if ($this->input->post('submit')) {
      $data = array(
         // 'country' => $this->input->post('country'),
          'country_id' => $this->input->post('country_id'),
          'name' => $this->input->post('name')
          //'climate' => $this->input->post('climate'),
         // 'airport' => $this->input->post('airport')
      );
      $this->Model_Admin->update_visa($id, $data);
      redirect('admin/manage_visa');
  }
  $data['details'] = $this->Model_Admin->get_visa($id);
  $this->load->view('admin/edit_visa', $data);
}


public function delete_visa($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_visa('visatype', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}

public function manage_country()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['allcountry'] = $this->Model_Admin->get_all_country();
  $this->load->view('admin/manage_country', $all);

}

public function delete_country($country_id)
{
  $con = array('country_id' => $country_id);
  if ($this->Model_Admin->delete_country('countries', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}

  public function manage_blogs()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['allblog'] = $this->Model_Admin->get_all_blogs();
    $this->load->view('admin/manage_blogs', $all);
  }
  //// edit Stories 
  public function edit_blog($id)
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['details'] = $this->Model_Admin->edit_blog($id);
    $this->load->view('admin/edit-blog', $onedata);
  }

  public function update_blog()
  {
    $upload_conf = array(
      'upload_path' => realpath('upload/blogs'),
      'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
      'max_size' => '2000',
      'quality' => '40%',
    );
    $upload_data = array();
    $image_data = array();
    $this->upload->initialize($upload_conf);
    $error = array();
    $success = array();
    $m = $_FILES['image']['name'];
    if ($m !== "") {
      $this->upload->do_upload('image');
      $upload_data = $this->upload->data();
      $image_data['image'] = $upload_data['file_name'];
    } else {
      $image_data['image'] = $this->input->post('previousimagea');
    }
    $data = $this->input->post();
    //$data['createdate'] = date('d-m-Y H:i:s');
    $data['modifydate'] = date('d-m-Y H:i:s');
    $data['image'] = $image_data['image'];
    //print_r($data);
    if ($this->Model_Admin->update_blog($data)):
    $this->session->set_flashdata('success', '<b> Blogs Updated successfully!</b>');
    redirect('Admin/manage_blogs');
    else:
     $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
    redirect('Dashboard/edit_blogs');
    endif;
  }

  public function unpublish_blog($id)
  {
    if ($this->Model_Admin->unpublish_blog($id)):
      $this->session->set_flashdata('success', '<b> Blog Blocked!</b>');
      redirect('Admin/manage_blogs');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_blogs');
    endif;
  }

  public function trash_blogs()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['alltrash'] = $this->Model_Admin->get_trash_blogs();
    $this->load->view('admin/trash_blogs', $all);
  }

  function reactiveblog($id)
  {
    if ($this->Model_Admin->reactive_blog($id)):
      $this->session->set_flashdata('success', '<b> Successful Blog  reactived!!</b>');
      redirect('Admin/manage_blogs');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_blogs');
    endif;
  }

  function delete_blog($id)
  {
    if ($this->Model_Admin->delete_blog($id)):
      $this->session->set_flashdata('success', '<b> Blog Deleted successfully!</b>');
      redirect('Admin/manage_blogs');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_blogs');
    endif;
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////     End Blogs  Functions                               /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

  public function manage_comments()
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['comment'] = $this->Model_Admin->get_comment();
    $this->load->view('admin/manage_comments', $onedata);
  }

  public function view_comment($id)
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['comment'] = $this->Model_Admin->get_comment();
    $this->load->view('admin/manage_comments', $onedata);
    $qu = $this->Model_Admin->view_comment($id);
    $link = base_url() . 'blogs/' . $qu['slug'];
    echo "<script> window.open('" . $link . "','_blank'); </script>";
    // redirect('Admin/manage_comments');
  }

  public function unpublish_comments($id)
  {
    if ($this->Model_Admin->unpublish_comments($id)):
      $this->session->set_flashdata('success', '<b> Comments Blocked!</b>');
      redirect('Admin/manage_comments');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_comments');
    endif;
  }

  public function publish_comments($id)
  {
    if ($this->Model_Admin->publish_comments($id)):
      $this->session->set_flashdata('success', '<b> !</b>');
      redirect('Admin/manage_comments');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_comments');
    endif;
  }

  public function delete_comments($id)
  {
    if ($this->Model_Admin->delete_comments($id)):
      $this->session->set_flashdata('success', '<b>Comments Deleted successfully!</b>');
      redirect('Admin/manage_comments');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_comments');
    endif;
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start Services Functions                        /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 


  public function add_service()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/add-service', $all);
    if ($this->input->post()):
      $upload_conf = array(
        'upload_path' => realpath('upload'),
        'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
        'max_size' => '2000',
        'quality' => '40%',
      );
      $upload_data = array();
      $image_data = array();
      $this->upload->initialize($upload_conf);
      $error = array();
      $success = array();
      $m = $_FILES['image']['name'];
      if ($m !== "") {
        $this->upload->do_upload('image');
        $upload_data = $this->upload->data();
        $image_data['image'] = $upload_data['file_name'];
      }
      $data = $this->input->post();
      $data['createdate'] = date('d-m-Y H:i:s');
      $data['modifydate'] = date('d-m-Y H:i:s');
      $data['image'] = $image_data['image'];
      $data['page'] = 'service';
      //print_r($data);
      if ($this->Model_Admin->insert_services($data)):
        $this->session->set_flashdata('success', '<b> New Service Added successfully!</b>');
        redirect('Admin/manage_service');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_service');
      endif;

    endif;
  }
  // manage Stories

  public function manage_service()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['allservice'] = $this->Model_Admin->get_all_service();
    $this->load->view('admin/manage_service', $all);
  }
  //// edit Stories 

  public function edit_service($id)
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['details'] = $this->Model_Admin->edit_service($id);
    $this->load->view('admin/edit-service', $onedata);
  }
  public function update_service()
  {
    $upload_conf = array(
      'upload_path' => realpath('upload'),
      'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
      'max_size' => '2000',
      'quality' => '40%',
    );
    $upload_data = array();
    $image_data = array();
    $this->upload->initialize($upload_conf);
    $error = array();
    $success = array();
    $m = $_FILES['image']['name'];
    if ($m !== "") {
      $this->upload->do_upload('image');
      $upload_data = $this->upload->data();
      $image_data['image'] = $upload_data['file_name'];
    } else {
      $image_data['image'] = $this->input->post('samimg');
    }
    $data = $this->input->post();
    //$data['createdate'] = date('d-m-Y H:i:s');
    $data['modifydate'] = date('d-m-Y H:i:s');
    $data['image'] = $image_data['image'];
    $data['page'] = 'service';
    //print_r($data);
    if ($this->Model_Admin->update_service($data)):
      $this->session->set_flashdata('success', '<b> Service Updated successfully!</b>');
      redirect('Admin/manage_service');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Dashboard/manage_service');
    endif;
  }

  public function unpublish_service($id)
  {
    if ($this->Model_Admin->unpublish_service($id)):
      $this->session->set_flashdata('success', '<b> Service Blocked!</b>');
      redirect('Admin/manage_service');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_service');
    endif;
  }

  public function trash_service()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['alltrash'] = $this->Model_Admin->get_trash_service();
    $this->load->view('admin/trash_service', $all);
  }

  function reactiveservice($id)
  {
    if ($this->Model_Admin->reactive_service($id)):
      $this->session->set_flashdata('success', '<b> Successful Services  reactived!!</b>');
      redirect('Admin/manage_service');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_service');
    endif;
  }

  function delete_service($id)
  {
    if ($this->Model_Admin->delete_service($id)):
      $this->session->set_flashdata('success', '<b> Blog Services successfully!</b>');
      redirect('Admin/manage_service');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_service');
    endif;
  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Other Pages Functions                           /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

  public function about()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['about'] = $this->Model_Admin->get_about();
    $this->load->view('admin/about', $data);
    if ($this->input->post()):
      $upload_conf = array(
        'upload_path' => realpath('upload'),
        'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
        'max_size' => '2000',
        'quality' => '40%',
      );
      $upload_data = array();
      $image_data = array();
      $this->upload->initialize($upload_conf);
      $error = array();
      $success = array();
      $m = $_FILES['image']['name'];
      if ($m !== "") {
        $this->upload->do_upload('image');
        $upload_data = $this->upload->data();
        $image_data['image'] = $upload_data['file_name'];
      } else {
        $image_data['image'] = $this->input->post('samimg');
      }
      $data = $this->input->post();
      //$data['createdate'] = date('d-m-Y H:i:s');
      $data['modifydate'] = date('d-m-Y H:i:s');
      $data['image'] = $image_data['image'];
      //print_r($data);
      if ($this->Model_Admin->update_about($data)):
        $this->session->set_flashdata('success', '<b> About Us Content Updated successfully!</b>');
        redirect('Admin/about');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/about');
      endif;
    endif;
  }

  public function privacypolicy()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['privacypolicy'] = $this->Model_Admin->get_privacypolicy();
    $this->load->view('admin/privacypolicy', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      $data['modifydate'] = date('d-m-Y H:i:s');
      //print_r($data);
      if ($this->Model_Admin->update_privacypolicy($data)):
        $this->session->set_flashdata('success', '<b> Privacy Policy Page Updated successfully!</b>');
        redirect('Admin/privacypolicy');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/privacypolicy');
      endif;
    endif;
  }

  public function termsconditions()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['termsconditions'] = $this->Model_Admin->get_termsconditions();
    $this->load->view('admin/termsconditions', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      $data['modifydate'] = date('d-m-Y H:i:s');
      //print_r($data);
      if ($this->Model_Admin->update_termsconditions($data)):
        $this->session->set_flashdata('success', '<b> Terms & Conditions Page Updated successfully!</b>');
        redirect('Admin/termsconditions');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/termsconditions');
      endif;
    endif;
  }

  public function shippingpolicy()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['shippingpolicy'] = $this->Model_Admin->get_shippingpolicy();
    $this->load->view('admin/shippingpolicy', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      $data['modifydate'] = date('d-m-Y H:i:s');
      //print_r($data);
      if ($this->Model_Admin->update_shippingpolicy($data)):
        $this->session->set_flashdata('success', '<b> Delivery & Shipping policy Page Updated successfully!</b>');
        redirect('Admin/shippingpolicy');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/shippingpolicy');
      endif;
    endif;
  }

  public function refundcancellation()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['refundcancellation'] = $this->Model_Admin->get_refundcancellation();
    $this->load->view('admin/refundcancellation', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      $data['modifydate'] = date('d-m-Y H:i:s');
      //print_r($data);
      if ($this->Model_Admin->update_refundcancellation($data)):
        $this->session->set_flashdata('success', '<b> Refund & Cancellation Page Updated successfully!</b>');
        redirect('Admin/refundcancellation');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/refundcancellation');
      endif;
    endif;
  }
  
  public function australia()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['australia'] = $this->Model_Admin->get_australia();
    $this->load->view('admin/australia', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      $data['modifydate'] = date('d-m-Y H:i:s');
      //print_r($data);
      if ($this->Model_Admin->update_australia($data)):
        $this->session->set_flashdata('success', '<b> Privacy Policy Page Updated successfully!</b>');
        redirect('Admin/australia');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/australia');
      endif;
    endif;
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start Testimonials Functions                    /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

  public function add_testimonial()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/add-testinoal', $all);
    if ($this->input->post()):
      $data = $this->input->post();
      if ($this->Model_Admin->insert_testimonial($data)):
        $this->session->set_flashdata('success', '<b> Testimonial Added successfully!</b>');
        redirect('Admin/manage_testimonial');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_testimonial');
      endif;

    endif;
  }
  // manage Stories
  public function manage_testimonial()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['testimonial'] = $this->Model_Admin->get_all_testimonial();
    $this->load->view('admin/manage_testimonial', $all);
  }
  public function testimonialedit($id)
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['details'] = $this->Model_Admin->testimonialedit($id);
    $this->load->view('admin/edit-testinoal', $all);
  }

  public function updatetestimonial()
  {
    $data = $this->input->post();
    if ($this->Model_Admin->update_testimonial($data)):
      $this->session->set_flashdata('success', '<b> Testimonial Updated successfully!</b>');
      redirect('Admin/manage_testimonial');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_testimonial');
    endif;
  }
  function delete_testimonial($id)
  {
    if ($this->Model_Admin->delete_testimonial($id)):
      $this->session->set_flashdata('success', '<b> Deleted successfully!</b>');
      redirect('Admin/manage_testimonial');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/manage_testimonial');
    endif;
  }
  ////////////      Add Update User  //////////////////////
////////////////////////////////////////////////////////////
public function add_user()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  // $data['country'] = $this->Model_Admin->get_all_country();
  $data['branch'] = $this->Model_Admin->get_all_branch();
  
  $this->load->view('admin/add_user', $data);
  if ($this->input->post()):
  $data = $this->input->post();
    //print_r($data);
  if ($this->Model_Admin->insert_user($data)):
  $this->session->set_flashdata('success', '<b> User Added successfully!</b>');
  redirect('Admin/users');
  else:
  $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
  redirect('Admin/add_user');
  endif;

  endif;
}

  function access_level($id)
  {
    $con = array('id' => $id);
    $data = array('status' => '1');
    if ($this->Model_Admin->update_data('tbl_user_role', $con, $data)):
      $this->session->set_flashdata('success', '<b> Approved successfully!</b>');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
    endif;
    redirect($_SERVER['HTTP_REFERER']);
  }
  function deny_level($id)
  {
    $con = array('id' => $id);
    $data = array('status' => '0');
    if ($this->Model_Admin->update_data('tbl_user_role', $con, $data)):
      $this->session->set_flashdata('success', '<b> Approved successfully!</b>');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
    endif;
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function delete_user($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_row('user_depart', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function delete_level($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_row('tbl_user_role', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  } 

  public function users()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['users'] = $this->Model_Admin->get_users();
    $this->load->view('admin/users', $all);
  }


  public function approve_user($id)
  {
    $con = array('id' => $id);
    $data = array('status' => '1');
    if ($this->Model_Admin->update_data('user_depart', $con, $data)):
      $this->session->set_flashdata('success', '<b> Approved successfully!</b>');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
    endif;
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function disapprove_user($id)
  {
    $con = array('id' => $id);
    $data = array('status' => '0');
    if ($this->Model_Admin->update_data('user_depart', $con, $data)):
      $this->session->set_flashdata('success', '<b> Approved successfully!</b>');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
    endif;
    redirect($_SERVER['HTTP_REFERER']);
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        country Pages Functions                           /////////////////////////////// 
  ///////////////////////////                                                        ///////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  public function add_page()
  {
    $this->load->model('Model_Admin');
    // Call the function to get the dropdown data
    $data['dropdown_data'] = $this->Model_Admin->getDropdownData();
    $data['admin'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/add_page', $data);
    if ($this->input->post()):
      $upload_conf = array(
        'upload_path' => realpath('upload'),
        'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
        'max_size' => '2000',
        'quality' => '40%',
      );
      $upload_data = array();
      $image_data = array();
      $this->upload->initialize($upload_conf);
      $error = array();
      $success = array();
      $m = $_FILES['images']['name'];
      if ($m !== "") {
        $this->upload->do_upload('images');
        $upload_data = $this->upload->data();
        $image_data['images'] = $upload_data['file_name'];
      }
      $data = $this->input->post();
      //$data['createdate'] = date('d-m-Y H:i:s');
      //$data['modifydate'] = date('d-m-Y H:i:s');
      $data['images'] = $image_data['images'];
      //print_r($data);
      if ($this->Model_Admin->insert_page($data)):
        $this->session->set_flashdata('success', '<b> New pages Added successfully!</b>');
        redirect('Admin/manage_pages');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_page');
      endif;
    endif;
  }
  public function manage_pages()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['allpage'] = $this->Model_Admin->get_all_pages();
    $this->load->view('admin/manage_pages', $all);
  }

  public function edit_page($id)
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['details'] = $this->Model_Admin->edit_page($id);
    $this->load->view('admin/edit_page', $onedata);
  }
  
  // public function unpublish_page($id)
  // {
  //   if ($this->Model_Admin->unpublish_page($id)):
  //     $this->session->set_flashdata('success', '<b> Page Blocked!</b>');
  //     redirect('Admin/manage_pages');
  //   else:
  //     $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
  //     redirect('Admin/manage_pages');
  //   endif;
  // }
  public function delete_page($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_page('countries_pages', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function update_page()
  {
    $upload_conf = array(
      'upload_path' => realpath('upload'),
      'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
      'max_size' => '2000',
      'quality' => '40%',
    );
    $upload_data = array();
    $image_data = array();
    $this->upload->initialize($upload_conf);
    $error = array();
    $success = array();
    $m = $_FILES['images']['name'];
    if ($m !== "") {
      $this->upload->do_upload('images');
      $upload_data = $this->upload->data();
      $image_data['images'] = $upload_data['file_name'];
    } else {
      $image_data['images'] = $this->input->post('previousimagea');
    }
    $data = $this->input->post();
    //$data['createdate'] = date('d-m-Y H:i:s');
    //$data['modifydate'] = date('d-m-Y H:i:s');
    $data['images'] = $image_data['images'];
    //print_r($data);
    if ($this->Model_Admin->update_page($data)):
      $this->session->set_flashdata('success', '<b>Pages Updated successfully!</b>');
      redirect('Admin/manage_pages');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Dashboard/edit_pages');
    endif;
  }

  public function add_packages()
  {
    $this->load->model('Model_Admin');
    $data['dropdown_data'] = $this->Model_Admin->getDropdownData();
    // $this->load->view('admin/add_packages', $data);
    $data['admin'] = $this->Model_Admin->get_admin();
    $this->load->view('admin/add_packages', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      //print_r($data);
      if ($this->Model_Admin->insert_packages($data)):
        $this->session->set_flashdata('success', '<b> New packages Added successfully!</b>');
        redirect('Admin/manage_packages');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_packages');
      endif;
    endif;
  }
  public function manage_packages()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['allpackages'] = $this->Model_Admin->get_all_packages();
    $this->load->view('admin/manage_packages', $all);
  }
  
  public function edit_packages($id) {
    if ($this->input->post('submit')) {
        $data = array(
           // 'country' => $this->input->post('country'),
            'visa_type' => $this->input->post('visa_type'),
            'validity' => $this->input->post('validity'),
            'processing' => $this->input->post('processing'),
            'embassyfee' => $this->input->post('embassyfee'),
            'servicefee' => $this->input->post('servicefee'),
            'GST' => $this->input->post('GST'),
            'totalcost' => $this->input->post('totalcost')
            //'climate' => $this->input->post('climate'),
            //'language' => $this->input->post('language'),
            //'airline' => $this->input->post('airline'),
            //'holiday' => $this->input->post('holiday'),
           // 'airport' => $this->input->post('airport')
        );
        $this->Model_Admin->update_packages($id, $data);
        redirect('admin/manage_packages');
    }
    $data['details'] = $this->Model_Admin->get_packages($id);
    $this->load->view('admin/edit_packages', $data);
  }
  
  public function delete_packages($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_packages('visa_fee', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Application Functions                           /////////////////////////////// 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

//  public function add_application()
// {
//   $this->load->model('Model_Admin');
//   $data['admin'] = $this->Model_Admin->get_admin();
//   $data['country'] = $this->Model_Admin->get_all_country();
//   $data['branch'] = $this->Model_Admin->get_all_branch();
//   $data['client'] = $this->Model_Admin->get_all_client();
//   $data['Staff'] = $this->Model_Admin-> get_all_user();
//   $this->load->view('admin/add_application', $data);
 
//   if ($this->input->post()):
//   $data = $this->input->post(); 

//     //print_r($data);
//  // $timestamp = time(); // Current timestamp
// $month = date('F'); // Get month in alphabetic form
// $year = date('Y'); // Get year
// $yearMonth = $month . $year; //

//   $serial = mt_rand(pow(10, 5), pow(10, 8)-1); // Random number within the
//   $formattedSerial = sprintf('%03d', $serial);
//   $documentNumber = "DOC_" . $yearMonth . "_" . $formattedSerial;
//   $data['Docket_No'] = $documentNumber;
  
//     if ($this->Model_Admin->insert_application($data)):
//     $this->session->set_flashdata('success', '<b> New Application Added successfully!</b>');
//     redirect('Admin/application_report');
//     else:
//       $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
//       redirect('Admin/add_application');
//     endif;

//   endif;
// }

public function add_application()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['branch'] = $this->Model_Admin->get_all_branch();
  $data['client'] = $this->Model_Admin->get_all_client();
  $data['Staff'] = $this->Model_Admin->get_all_user();
  $this->load->view('admin/add_application', $data);
 
  if ($this->input->post()):
    $data = $this->input->post(); 

    $month = date('F'); // Get month in alphabetic form
    $year = date('Y'); // Get year
    $yearMonth = $month . $year; //

    // Get the last inserted document number for the current month and year
    $lastDocumentNumber = $this->Model_Admin->get_last_document_number($yearMonth);
    $lastSerial = intval(substr($lastDocumentNumber, -3)); // Extract the last 3 digits
    $nextSerial = ($lastSerial + 1) % 1000; // Increment by 1 within 3-digit range
    $formattedSerial = sprintf('%03d', $nextSerial);
    $documentNumber = "DOC_" . $yearMonth . "_" . $formattedSerial;
    $data['Docket_No'] = $documentNumber;
  
    if ($this->Model_Admin->insert_application($data)):
      $this->session->set_flashdata('success', '<b> New Application Added successfully!</b>');
      redirect('Admin/application_report');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/add_application');
    endif;

  endif;
}


public function manage_application()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['allapplication'] = $this->Model_Admin->get_applications();
  $all['visa_application'] = $this->Model_Admin->get_all_application();
  $arrayName = array('id >' => 0);
  $this->load->view('admin/application_report', $all);
}

public function edit_application($id) {
  if ($this->input->post('submit')) {
      $data = array(
          'branch' => $this->input->post('branch'),
          'sender_Staff' => $this->input->post('sender_Staff'),
          'client' => $this->input->post('client'),
          'corporate_name' => $this->input->post('corporate_name'),
          'name' => $this->input->post('name'),
          'pasport_no' => $this->input->post('pasport_no'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'date_of_birth' => $this->input->post('date_of_birth'),
          'date_of_travel' => $this->input->post('date_of_travel'),
          'Country' => $this->input->post('Country'),
          'PNR' => $this->input->post('PNR'),
          'Ref' => $this->input->post('Ref'),
          'Staff' => $this->input->post('Staff'),
          'Fee' => $this->input->post('Fee'),
          'departure' => $this->input->post('departure'),
          'enquiry' => $this->input->post('enquiry'),
          'Facilitation' => $this->input->post('Facilitation'),
          'Charges' => $this->input->post('Charges'),
          'Dispatch' => $this->input->post('Dispatch')
      );
      $this->Model_Admin->update_application($id, $data);
      redirect('admin/application_report');
  }
  $data['allapplication'] = $this->Model_Admin->get_application($id);
  $this->load->view('admin/edit_application', $data);
}

public function delete_application($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_application('visa_application', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}

//////////////   search application   /////////

  public function search_application() {
    $docketNumber = $this->input->post('Docket_No'); // Get the docket number from the form input
    $pasportNumber = $this->input->post('pasport_no');
    $Name = $this->input->post('name');
    // Load the model
    $this->load->model('Model_Admin');

    // Call the model method to get the visa application
    $visaApplication = $this->Model_Admin->getVisaApplicationByDocketNumber($docketNumber);
   // $visaApplication = $this->Model_Admin->getVisaApplicationByPassportNumber($pasportNumber);
    //$visaApplication = $this->Model_Admin->getVisaApplicationByName($Name);
    // Pass the visa application data to the view
    $data['visaApplication'] = $visaApplication;

    // Load the view to display the search result
    $this->load->view('admin/search_application', $data);
}
  public function application_report()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['country'] = $this->Model_Admin->get_all_country();
    $data['Staff'] = $this->Model_Admin->get_all_user();
    $this->load->model(array('Model_Front'));
    // $arrayName = array('id >' => 0);
    $data['allapplication'] = $this->Model_Admin->get_all_application();
    $this->load->model(array('Model_Front'));
    // echo'<pre>';print_r($data);exit;
    $this->load->view('admin/application_report', $data);
  }
  public function export_csv(){ 
		/* file name */
		$filename = 'Application_'.date('Ymd').'.xls'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/xls; ");
	   /* get data */
		$usersData = $this->Model_Admin->getUserDetails();
		/* file creation */
    
    ob_end_clean();
    $file = fopen('php://output','w');
		$header = array("Docket_No","branch","sender_Staff","client","corporate_name","name","pasport_no","old_passport","email","phone","date_of_birth","Country","PNR","Staff","departure","FeesRemarks","coldate","Remark","Dispatch"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}

////////////   Add Client    /////////////////////

public function add_client()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['branch'] = $this->Model_Admin->get_all_branch();
  $this->load->view('admin/add_client', $data);
  if ($this->input->post()):
  $data = $this->input->post();
    //print_r($data);
  if ($this->Model_Admin->insert_client($data)):
  $this->session->set_flashdata('success', '<b> New Client Added successfully!</b>');
  redirect('Admin/client_list');
  else:
  $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
  redirect('Admin/add_client');
  endif;

  endif;
}
public function client_list()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    // $data['allclient'] = $this->Model_Admin->get_all_client();
    $data['allclient'] = $this->Model_Admin->get_clients();
    $arrayName = array('id >' => 0);
    $this->load->view('admin/client_list', $data);
  }

public function edit_client($id) {
  if ($this->input->post('submit')) {
      $data = array(
          'Organisation' => $this->input->post('Organisation'),
          'Implant' => $this->input->post('Implant'),
          'Person' => $this->input->post('Person'),
          'Address' => $this->input->post('Address'),
          'Mobile' => $this->input->post('Mobile'),
          'username' => $this->input->post('username')
      );
      $this->Model_Admin->update_client($id, $data);
      redirect('Admin');
  }
  $data['value'] = $this->Model_Admin->get_client($id);
  $this->load->view('admin/edit_client', $data);
}

public function delete_client($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_client('ivs_client', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

////////////   Add Branch    /////////////////////

public function add_branch()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $this->load->view('admin/add_branch', $data);
  if ($this->input->post()):
    $data = $this->input->post();
    //print_r($data);
    if ($this->Model_Admin->insert_branch($data)):
      $this->session->set_flashdata('success', '<b> New Branch Added successfully!</b>');
      redirect('Admin/branch_list');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/add_branch');
    endif;

  endif;
}
public function branch_list()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['items'] = $this->Model_Admin->get_items();
    $arrayName = array('id >' => 0);
    // echo'<pre>';print_r($data);exit;
    $this->load->view('admin/branch_list', $data);
  }
 
  public function edit_branch($id) {
    if ($this->input->post('submit')) {
        $data = array(
            'name' => $this->input->post('name'),
            'code' => $this->input->post('code'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city')
        );
        $this->Model_Admin->update_item($id, $data);
        redirect('Admin');
    }
    $data['item'] = $this->Model_Admin->get_item($id);
    $this->load->view('admin/edit_branch', $data);
}

  public function delete_branch($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_branch('ivs_branch', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

////////////   Add Wallet    /////////////////////

private function generateGroupCode() {
  // Generate your code here
  $codeLength = 4; // You can adjust the length of the code
  $characters = '0123456789';
  $generatedCode = '';
  for ($i = 0; $i < $codeLength; $i++) {
      $generatedCode .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $generatedCode;
}

public function add_wallet()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['branch'] = $this->Model_Admin->get_all_branch();
  $data['user'] = $this->Model_Admin->get_all_user();

  $generatedCode = $this->generateGroupCode();
  $data['generatedCode'] = $generatedCode;

  $this->load->view('admin/add_wallet', $data);
  if ($this->input->post()):
    $data = $this->input->post();
    //print_r($data);
    if ($this->Model_Admin->insert_wallet($data)):
      $this->session->set_flashdata('success', '<b> Group/Amount Added successfully!</b>');
      redirect('Admin/wallet');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Admin/add_wallet');
    endif;

  endif;
}

public function wallet()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['wallets'] = $this->Model_Admin->get_wallets();
     $arrayName = array('id >' => 0);
    // echo'<pre>';print_r($data);exit;
    $this->load->view('admin/wallet', $data);
  }
 
  public function edit_wallet($id) {
    if ($this->input->post('submit')) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'amount' => $this->input->post('amount'),
            'branch' => $this->input->post('branch')
        );
        $this->Model_Admin->update_wallet($id, $data);
        redirect('Admin');
    }
    $data['wallet'] = $this->Model_Admin->get_wallet($id);
    $this->load->view('admin/edit_wallet', $data);
}

  public function delete_wallet($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_wallet('ivs_Wallet', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }


  public function transection()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['transection'] = $this->Model_Admin->get_transections();
     $arrayName = array('id >' => 0);
    // echo'<pre>';print_r($data);exit;
    $this->load->view('admin/transection', $data);
  }
 
  public function edit_transection($id) {
    if ($this->input->post('submit')) {
        $data = array(
            'name' => $this->input->post('name'),
            'amount' => $this->input->post('amount'),
            'ledger' => $this->input->post('ledger'),
            'group' => $this->input->post('group')
            // 'bill_no' => $this->input->post('bill_no'),
            // 'total_amount' => $this->input->post('total_amount')
        );
        $this->Model_Admin->update_transection($id, $data);
        redirect('Admin');
    }
    $data['transection'] = $this->Model_Admin->get_transection($id);
    $this->load->view('admin/edit_transection', $data);
}          

  public function delete_transection($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_transection('ivs_ledger', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

////////////   Add Ledger    /////////////////////
  public function ledger()
  {
    $this->load->model('Model_Admin');
    $data['admin'] = $this->Model_Admin->get_admin();
    $data['group'] = $this->Model_Admin->get_all_ledger();

    $generatedCode = $this->generateGroupCode();
    $data['generatedCode'] = $generatedCode;

    $this->load->view('admin/ledger', $data);
    if ($this->input->post()):
      $data = $this->input->post();
      //print_r($data);
      if ($this->Model_Admin->insert_ledger($data)):
        $this->session->set_flashdata('success', '<b> Ledger Added successfully!</b>');
        redirect('Admin/transection');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/ledger');
      endif;
  
    endif;
  }


//////////////////    News Latter       ///////////////////
public function add_latter()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['add_latter'] = $this->Model_Admin->get_add_latter();
    $this->load->view('admin/add_latter', $data);
    if ($this->input->post()):
      $upload_conf = array(
        'upload_path' => realpath('upload'),
        'allowed_types' => 'png|jpg|jepg|gif|bmp|pdf',
        'max_size' => '2000',
        'quality' => '40%',
      );
      $upload_data = array();
      $image_data = array();
      $this->upload->initialize($upload_conf);
      $error = array();
      $success = array();
      $m = $_FILES['image']['name'];
      if ($m !== "") {
        $this->upload->do_upload('image');
        $upload_data = $this->upload->data();
        $image_data['image'] = $upload_data['file_name'];
      } else {
        $image_data['image'] = $this->input->post('samimg');
      }
      $data = $this->input->post();
      //$data['createdate'] = date('d-m-Y H:i:s');
      $data['modifydate'] = date('d-m-Y H:i:s');
      $data['image'] = $image_data['image'];
      //print_r($data);
      if ($this->Model_Admin->update_add_latter($data)):
        $this->session->set_flashdata('success', '<b> add_latter  Updated successfully!</b>');
        redirect('Admin/add_latter');
      else:
        $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
        redirect('Admin/add_latter');
      endif;
    endif;
  }

  public function manage_latter()
  {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['latter'] = $this->Model_Admin->get_all_latter();
    $this->load->view('admin/manage_latter', $all);
  }
  public function edit_latter($id)
  {
    $onedata['admind'] = $this->Model_Admin->get_admin();
    $onedata['details'] = $this->Model_Admin->edit_latter($id);
    $this->load->view('admin/edit_latter', $onedata);
  }
  
  public function delete_latter($id)
  {
    $con = array('id' => $id);
    if ($this->Model_Admin->delete_latter('news_latter', $con))
      $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
    else
      $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }
  public function update_latter()
  {
  
    $success = array();
    $data = $this->input->post();
    //print_r($data);
    if ($this->Model_Admin->update_latter($data)):
      $this->session->set_flashdata('success', '<b> Updated successfully!</b>');
      redirect('Admin/manage_latter');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Dashboard/edit_latter');
    endif;
  
  }
  public function admin_subscribers() {
    $all['admind'] = $this->Model_Admin->get_admin();
    $all['subscribers'] = $this->Model_Admin->getAllSubscribers();
  
    // Load subscribers management view
    $this->load->view('admin/admin_subscribers', $all);
  }

  // public function email_group()
  // {
  //   $all['admind'] = $this->Model_Admin->get_admin(); 
  //   $this->load->view('admin/email_group', $all);
  // }

  public function email_group()
	{
    $this->load->model('Model_Admin');
    $student_list = $this->Model_Admin->student_list();
		$this->load->view('admin/email_group',['student_list'=>$student_list]);
	}
  public function createGroup() {
    $groupName = $this->input->post('group_name');
    $emails = $this->input->post('emails'); // Assuming emails are submitted as an array from the form
    $groupId = $this->Model_Admin->createGroup($groupName, $emails);
    if ($groupId) {
        // Group created successfully, redirect or show a success message
        redirect('success_page');
    } else {
        // Handle error, redirect or show an error message
        redirect('error_page');
    }
}

public function add_selected_student()
{
    $student_id = $this->input->post('student_id'); //here i am getting student id from the checkbox

    for ($i=0; $i < sizeof($student_id); $i++) 
    { 
       $data = array('student_id' => $student_id[$i]);
       $this->db->insert('group_email',$data);
    }
    
    $this->session->set_flashdata('msg',"group details has been added successfully");
    $this->session->set_flashdata('msg_class','alert-success');

    return redirect('admin/email_group');
}

 
  public function admin_send_newsletter() {
    // Load send newsletter form view
    $groupData = $this->Model_Admin->get_all_group(); 
    $data['group'] = $groupData;
    $this->load->view('admin/admin_send_newsletter', $data);

}

// public function send_newsletter() {
//   $data['message'] = $this->load->view('newsletter_template', '', TRUE);

//   $config['mailtype'] = 'html';
//   $this->email->initialize($config);

//   $subject = $this->input->post('subject');
//   $Details = $this->input->post('Details');
//   $title = $this->input->post('title');
//   $date = $this->input->post('date');
//   // Fetch all subscribed subscribers' email addresses
//   $subscribers = $this->Model_Admin->getSubscribedSubscribers();

//   foreach ($subscribers as $subscriber) {
//       $email = $subscriber->email;
//       $this->email->clear();
//       $this->email->to($email);
//       $this->email->from('setukumar@jingleinfo.com', 'IVS_Visa');
//       $this->email->subject($subject);
//       $this->email->message($title,$Details,$date);
//       // $this->email->message($title);
//       // $this->email->message($date);

//       $this->email->send();
//   }
  
// }

public function send_newsletter() {
  // Retrieve the subject from the form input
  $subject = $this->input->post('subject');

  // Load the newsletter template view into a variable
  $data['message'] = $this->load->view('admin/newsletter_template', '', TRUE);

  // Email configuration
  $config['mailtype'] = 'html';
  $this->email->initialize($config);
  $this->email->from('setukumar@jingleinfo.com', 'Jingle Infosolution');
  $this->email->to('sasikumar95044@gmail.com'); // Email of the recipient
  $this->email->subject($subject); // Set the subject from the form input
  $this->email->message($data['message']);

  // Send email
  if ($this->email->send()) {
      // Email sent successfully, set a session variable
      $this->session->set_flashdata('email_sent', 'Email sent successfully');
  } else {
      show_error($this->email->print_debugger());
  }

  // Redirect to a specific URL
  redirect('admin/admin_send_newsletter');
}

// public function send_newsletter() {
//   // Retrieve the subject from the form input
//   $subject = $this->input->post('subject');
  
//   // Load the newsletter template view into a variable
//   $data['message'] = $this->load->view('admin/newsletter_template', '', TRUE);
  
//   // Get selected email addresses (you'll need to adapt this to your form input)
//   $selected_emails = $this->input->post('selected_emails'); // Assuming 'selected_emails' is an array of email addresses
  
//   // Email configuration
//   $config['mailtype'] = 'html';
//   $this->email->initialize($config);
//   $this->email->from('setukumar@jingleinfo.com', 'Jingle Infosolution');
//   $this->email->subject($subject); // Set the subject from the form input
//   $this->email->message($data['message']);
  
//   // Send email to each selected email address
//   foreach ($selected_emails as $email) {
//       $this->email->clear(); // Clear email settings before sending to a new recipient
//       $this->email->to($email); // Set recipient email address
      
//       // Send email
//       if ($this->email->send()) {
//           // Email sent successfully
//           // You may log success for each email or perform other actions
//       } else {
//           // Handle email sending failure
//           show_error($this->email->print_debugger());
//       }
//   }
  
//   // Set a flash message for successful sending
//   $this->session->set_flashdata('email_sent', 'Newsletter sent successfully');
  
//   // Redirect to a specific URL
//   redirect('admin/admin_send_newsletter');
// }



//////////    Email group   ///////////
public function groups() {
  // Fetch all groups
  $data['groups'] = $this->Model_Admin->get_groups();

  // Load view to display groups and create a new group
  $this->load->view('Admin/groups', $data);
}

public function create_group() {
  // Handle form submission to create a group
  $group_name = $this->input->post('group_name');
  $group_id = $this->Model_Admin->create_group($group_name);
  
  redirect('admin/show_emails/' . $group_id);
}


public function show_emails($group_id) {
  // Fetch emails associated with the given group ID
  $data['group_emails'] = $this->Model_Admin->get_emails_by_group($group_id);
  $data['group_id'] = $group_id;

  // Fetch all groups for the sidebar
  $data['groups'] = $this->Model_Admin->get_groups();

  // Load view to display emails for the group and all groups in the sidebar
  $this->load->view('admin/group_emails', $data);
}

public function add_email_to_group($group_id) {
  // Handle form submission to add an email to a group
  $email = $this->input->post('email');
  $this->Model_Admin->add_email_to_group($email, $group_id);

  redirect('admin/show_emails/' . $group_id);
}

///////////////     Email Group end   //////////////

////////////////////////////////////////////////////////
///////////       Role Permission      /////////////////
 
public function manage_level()
    {
      $all['admin'] = $this->Model_Admin->get_admin();
        // Get the logged-in user's role
        $role = $this->session->userdata('role');
        // Load the role model
        $this->load->model('Model_Admin');
        // Retrieve the permissions for the user's role
        $permissions = $this->Model_Admin->getPermissions($role);
        // Pass the permissions to the view or use them to control access
        $all['permissions'] = $permissions;
        $all['level'] = $this->Model_Admin->get_level();
        // Load the view
        $this->load->view('admin/manage_level', $all);
    }
    
    public function menu_view()
    {
      $this->load->model('Menu_model');
      $all['admin'] = $this->Model_Admin->get_admin();
      $all['menu_items'] = $this->Menu_model->get_menu_items();
    
    $role_id = 1; // Replace with the actual ID of the user role
    
    $all['user_permissions'] = $this->Menu_model->get_role_permissions($role_id);
     
      $this->load->view('admin/menu_view', $all);
    }

    public function menu_helper()
{
    $all['admin'] = $this->Model_Admin->get_admin();
    $this->load->model('Menu_model');
    $all['menu_items'] = $this->Menu_model->get_menu_items();
    
    $role_id = 1; // Replace with the actual ID of the user role
    
    $all['user_permissions'] = $this->Menu_model->get_role_permissions($role_id);
    $this->load->view('admin/menu_helper', $all);
}

public function getUserAccessRoleByID()
{
    $this->load->model('Model_Admin'); // Load the Model_Admin model
    $this->load->model('User_model'); // Load the User_model model

    $id = 1; // Example user ID
    $userRole = $this->User_model->getUserAccessRoleByID($id);

    // Do something with $userRole, for example, pass it to a view or perform other actions
     $this->load->view('admin/dashboard', ['userRole' => $userRole]);
}
public function login() {
  if ($this->input->post('login')) {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->User_model->get_user_by_email_password($email, $password);

      if ($user) {
          $this->session->set_userdata($user);
          redirect('dashboard');
      } else {
          $data['error_msg'] = 'Wrong email or password';
      }
  }

  $this->load->view('admin/dashboard', $data);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////                                                        ///////////////////////////////
///////////////////////////        Country FAct Finder                              /////////////////////////////// 
//////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

public function countryfact()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
 //$data['city'] = $this->Model_Admin->get_all_city();
  $this->load->view('admin/countryfact', $data);
 
  if ($this->input->post()):
  $data = $this->input->post(); 
  if ($this->Model_Admin->insert_countryfact($data)):
  $this->session->set_flashdata('success', '<b> Details Added successfully!</b>');
   redirect('Admin/countryfact_details');
    else:
    $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
     redirect('Admin/countryfact');
    endif;
  endif;
}
public function manage_countryfact()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['details'] = $this->Model_Admin->get_all_countryfact();
  $this->load->view('admin/countryfact_details', $all);
}

public function edit_countryfact($id) {
  if ($this->input->post('submit')) {
      $data = array(
         // 'country' => $this->input->post('country'),
          'name' => $this->input->post('name'),
          'area' => $this->input->post('area'),
          'location' => $this->input->post('location'),
          'population' => $this->input->post('population'),
          'time' => $this->input->post('time'),
          'currency' => $this->input->post('currency'),
          'capital' => $this->input->post('capital'),
          //'climate' => $this->input->post('climate'),
          'language' => $this->input->post('language'),
          //'airline' => $this->input->post('airline'),
          'holiday' => $this->input->post('holiday'),
          'airport' => $this->input->post('airport')
      );
      $this->Model_Admin->update_countryfact($id, $data);
      redirect('admin/countryfact_details');
  }
  $data['details'] = $this->Model_Admin->get_countryfact($id);
  $this->load->view('admin/edit_countryfact', $data);
}

public function delete_countryfact($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_countryfact('countryfact', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}


public function countryfact_details()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  // $arrayName = array('id >' => 0);
  $data['details'] = $this->Model_Admin->get_countryfacts();
  $this->load->view('admin/countryfact_details', $data);
}


public function CountryFactFinder()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['countryfact'] = $this->Model_Admin->get_all_countryfact();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/CountryFactFinder', $data);
}


public function DiplomaticRepresentations()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['diplomatic'] = $this->Model_Admin->get_all_diplomatic();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/DiplomaticRepresentations', $data);
}

/////////////////////////////////////////////////////////////////////////////
//////////////////////     Diplomatic Represantation        ///////////////
public function diplomatic()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['city'] = $this->Model_Admin->get_all_city();
  $this->load->view('admin/diplomatic', $data);
 
  if ($this->input->post()):
  $data = $this->input->post(); 
  if ($this->Model_Admin->insert_diplomatic($data)):
  $this->session->set_flashdata('success', '<b> Details Added successfully!</b>');
   redirect('Admin/diplomatic_details');
    else:
    $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
     redirect('Admin/diplomatic');
    endif;
  endif;
}
public function manage_diplomatic()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['diplomatic'] = $this->Model_Admin->get_all_diplomatic();
  $this->load->view('admin/diplomatict_details', $all);
}
// public function edit_diplomatic($id)
// {
//   $onedata['admind'] = $this->Model_Admin->get_admin();
//   $onedata['details'] = $this->Model_Admin->edit_diplomatic($id);
//   $this->load->view('admin/edit_diplomatic', $onedata);
// }
public function edit_diplomatic($id) {
  if ($this->input->post('submit')) {
      $data = array(
         // 'country' => $this->input->post('country'),
          'Name' => $this->input->post('Name'),
          'Address' => $this->input->post('Address'),
          'pin_code' => $this->input->post('pin_code'),
          'Telephone' => $this->input->post('Telephone'),
          'Fax' => $this->input->post('Fax'),
          'Email' => $this->input->post('Email'),
          'Website' => $this->input->post('Website'),
          'Office' => $this->input->post('Office'),
          // 'Visa' => $this->input->post('Visa'),
          // 'Website' => $this->input->post('Website'),
          // 'Collection' => $this->input->post('Collection'),
          //'airline' => $this->input->post('airline'),
          'Notes' => $this->input->post('Notes')
          // 'airport' => $this->input->post('airport')
      );
      $this->Model_Admin->update_diplomatic($id, $data);
      redirect('Admin/diplomatic_details');
  }
  $data['details'] = $this->Model_Admin->get_diplomatic($id);
  $this->load->view('admin/edit_diplomatic', $data);
}

public function delete_diplomatic($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_diplomatic('diplomatic', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}


public function diplomatic_details()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['diplomatic'] = $this->Model_Admin->get_all_diplomatic();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/diplomatic_details', $data);
}

//////////////////////////////////////////////////////////////////////
///////////////////////     Visa Fee & Notes     /////////////////////
public function fee_notes()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['city'] = $this->Model_Admin->get_all_city();
  $data['allvisa'] = $this->Model_Admin->get_all_visa();
  $this->load->view('admin/fee_notes', $data);
 
  if ($this->input->post()):
  $data = $this->input->post(); 
    //print_r($data);
  if ($this->Model_Admin->insert_fee_notes($data)):
  $this->session->set_flashdata('success', '<b> Details Added successfully!</b>');
   redirect('Admin/manage_fees');
    else:
    $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
     redirect('Admin/fee_notes');
    endif;
  endif;
}
public function manage_fee_notes()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['fee_notes'] = $this->Model_Admin->get_all_fee_notes();
  $this->load->view('admin/manage_fees', $all);
}

public function edit_fee_notes($id) {
  if ($this->input->post('submit')) {
      $data = array(
         // 'country' => $this->input->post('country'),
          'allvisa' => $this->input->post('allvisa'),
          'city' => $this->input->post('city'),
          'Document' => $this->input->post('Document'),
          'Processing' => $this->input->post('Processing'),
          'Fees' => $this->input->post('Fees'),
          'value' => $this->input->post('value')
         // 'capital' => $this->input->post('capital'),
          //'climate' => $this->input->post('climate'),
          //'language' => $this->input->post('language'),
          //'airline' => $this->input->post('airline'),
         // 'holiday' => $this->input->post('holiday'),
          //'airport' => $this->input->post('airport')
      );
      $this->Model_Admin->update_fee_notes($id, $data);
      redirect('admin/manage_fees');
  }
  $data['details'] = $this->Model_Admin->get_fees($id);
  $this->load->view('admin/edit_fee_notes', $data);
}

public function delete_fee_notes($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_fee_notes('fee_notes', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}

public function fee_notes_details()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['fee_notes'] = $this->Model_Admin->get_all_fee_notes();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/fee_notes_details', $data);
}

public function manage_fees()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['fee_notes'] = $this->Model_Admin->get_all_fee_notes();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/manage_fees', $data);
}

/////////////////////////////////////////////////////////
////////////////             Mission Over      /////////
public function missionover()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['missionover'] = $this->Model_Admin->get_all_missionover();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/missionover', $data);
}

public function missionover_detail()
{
  $data['admind'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $this->load->model(array('Model_Front'));
  // $arrayName = array('id >' => 0);
  $data['missionover'] = $this->Model_Admin->get_all_missionover();
  $this->load->model(array('Model_Front'));
  // echo'<pre>';print_r($data);exit;
  $this->load->view('admin/missionover_detail', $data);
}

public function add_mission()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  // $data['branch'] = $this->Model_Admin->get_all_branch();
  $this->load->view('admin/add_mission', $data);
 
  if ($this->input->post()):
  $data = $this->input->post(); 
  if ($this->Model_Admin->insert_add_mission($data)):
  $this->session->set_flashdata('success', '<b> Details Added successfully!</b>');
   redirect('Admin/missionover_detail');
    else:
    $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
     redirect('Admin/add_mission');
    endif;
  endif;
}
public function manage_add_mission()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['add_mission'] = $this->Model_Admin->get_all_add_mission();
  $this->load->view('admin/missionover_detail', $all);
}

public function edit_add_mission($id) {
  if ($this->input->post('submit')) {
      $data = array(
         // 'country' => $this->input->post('country'),
          'Name' => $this->input->post('Name'),
          'Address' => $this->input->post('Address'),
          'pin_code' => $this->input->post('pin_code'),
          'Telephone' => $this->input->post('Telephone'),
          'Fax' => $this->input->post('Fax'),
          'website' => $this->input->post('website'),
          'Notes' => $this->input->post('Notes')
          //'climate' => $this->input->post('climate'),
          //'language' => $this->input->post('language'),
          //'airline' => $this->input->post('airline'),
          //'holiday' => $this->input->post('holiday'),
          //'airport' => $this->input->post('airport')
      );
      $this->Model_Admin->update_add_mission($id, $data);
      redirect('admin/missionover_detail');
  }
  $data['details'] = $this->Model_Admin->get_mission($id);
  $this->load->view('Admin/edit_add_mission', $data);
}

public function delete_add_mission($id)
{
  $con = array('id' => $id);
  if ($this->Model_Admin->delete_add_mission('mission', $con))
    $this->session->set_flashdata('success', '<div class=" alert alert-success">Deleted successfully</div>');
  else
    $this->session->set_flashdata('error', '<div class="alert-danger alert">try again !!!</div>');
  redirect($_SERVER['HTTP_REFERER']);
}

////////////////////////.//////////////////////////////////
///////////////  Select Quey    ///////////////////////////
public function select_form() {
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['show_table'] = $this->view_table();
  $this->load->view('Admin/select_form', $data);
  }
  public function view_table(){
    $result = $this->Model_Admin->show_all_data();
    if ($result != false) {
    return $result;
    } else {
    return 'Database is empty !';
    }
    }
    
    public function select_by_id() {
    $id = $this->input->post('id');
    if ($id != "") {
    $result = $this->Model_Admin->show_data_by_id($id);
    if ($result != false) {
    $data['result_display'] = $result;
    } else {
    $data['result_display'] = "No record found !";
    }
    } else {
    $data = array(
    'id_error_message' => "Id field is required"
    );
    }
    $data['show_table'] = $this->view_table();
    $this->load->view('Admin/select_form', $data);
    }
    
    public function VisaInformation() {
    $data['country'] = $this->Model_Admin->get_all_country();
    $country = $this->input->post('country');
    if ($country != "") {
    $result = $this->Model_Admin->select_by_country($country);
    $result = $this->Model_Admin->show_data_by_country($country);
    if ($result != false) {
    $data['result_display'] = $result;
    } else {
    $data['result_display'] = "No record found !";
    }
    } else {
    $data['date_error_message'] = "country field is required";
    }
    $data['show_table'] = $this->view_table();
    $this->load->view('admin/VisaInformation', $data);
    }
    
    public function select_by_date_range() {
    $date1 = $this->input->post('date_from');
    $date2 = $this->input->post('date_to');
    $data = array(
    'date1' => $date1,
    'date2' => $date2
    );
    if ($date1 == "" || $date2 == "") {
    $data['date_range_error_message'] = "Both date fields are required";
    } else {
    $result = $this->Model_Admin->show_data_by_date_range($data);
    if ($result != false) {
    $data['result_display'] = $result;
    } else {
    $data['result_display'] = "No record found !";
    }
    }
    $data['show_table'] = $this->view_table();
    $this->load->view('Admin/select_form', $data);
    }

    /////////////////////////////    Upload subscriber CSV file   ////////////

    public function EmailSubscriber(){
      
      $data = array();
      // Get messages from the session
      if($this->session->userdata('success_msg')){
          $data['success_msg'] = $this->session->userdata('success_msg');
          $this->session->unset_userdata('success_msg');
      }
      if($this->session->userdata('error_msg')){
          $data['error_msg'] = $this->session->userdata('error_msg');
          $this->session->unset_userdata('error_msg');
      }
      
      // Get rows
      $data['Model_Admin'] = $this->Model_Admin->getRows();
      $data['subscribers'] = $this->Model_Admin->getAllSubscribers();
      // Load the list page view
      $this->load->view('Admin/EmailSubscriber', $data);
  }
  
  public function import(){
      $data = array();
      $memData = array(); 
      // If import request is submitted
      if($this->input->post('importSubmit')){
          // Form field validation rules
          $this->form_validation->set_rules('file', 'CSV file', 'callback_file_check');
          
          // Validate submitted form data
          if($this->form_validation->run() == true){
              $insertCount = $updateCount = $rowCount = $notAddCount = 0;
              
              // If file uploaded
              if(is_uploaded_file($_FILES['file']['tmp_name'])){
                  // Load CSV reader library
                  $this->load->library('CSVReader');
                  
                  // Parse data from CSV file
                  $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);
                  
                  // Insert/update CSV data into database
                  if(!empty($csvData)){
                      foreach($csvData as $row){ $rowCount++;
                          
                          // Prepare data for DB insertion
                          $memData = array(
                              'email' => $row['Email'],
                              'name' => $row['Name'],
                              'phone' => $row['Phone'],
                              'status' => $row['Status'],
                          );
                          
                          // Check whether email already exists in the database
                          $con = array(
                              'where' => array(
                                  'email' => $row['Email']
                              ),
                              'returnType' => 'count'
                          );
                          $prevCount = $this->Model_Admin->getRows($con);
                          
                          if($prevCount > 0){
                              // Update member data
                              $condition = array('email' => $row['Email']);
                              $update = $this->Model_Admin->update($memData, $condition);
                              
                              if($update){
                                  $updateCount++;
                              }
                          }else{
                              // Insert member data
                              $insert = $this->Model_Admin->insert($memData);
                              
                              if($insert){
                                  $insertCount++;
                              }
                          }
                      }
                      
                      // Status message with imported data count
                      $notAddCount = ($rowCount - ($insertCount + $updateCount));
                      $successMsg = 'Members imported successfully. Total Rows ('.$rowCount.') | Inserted ('.$insertCount.') | Updated ('.$updateCount.') | Not Inserted ('.$notAddCount.')';
                      $this->session->set_userdata('success_msg', $successMsg);
                  }
              }else{
                  $this->session->set_userdata('error_msg', 'Error on file upload, please try again.');
              }
          }else{
              $this->session->set_userdata('error_msg', 'Invalid file, please select only CSV file.');
          }
      }
      redirect('Admin/EmailSubscriber');
  }
  
  /*
   * Callback function to check file value and type during validation
   */
  public function file_check($str){
      $allowed_mime_types = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
      if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
          $mime = get_mime_by_extension($_FILES['file']['name']);
          $fileAr = explode('.', $_FILES['file']['name']);
          $ext = end($fileAr);
          if(($ext == 'csv') && in_array($mime, $allowed_mime_types)){
              return true;
          }else{
              $this->form_validation->set_message('file_check', 'Please select only CSV file to upload.');
              return false;
          }
      }else{
          $this->form_validation->set_message('file_check', 'Please select a CSV file to upload.');
          return false;
      }
  }

}
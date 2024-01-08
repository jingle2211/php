<?php
class Model_Admin extends CI_Model {
/////**********  admin Login Check  *********/////////
function  login($data){
$q = $this->db->where('email',$data['email'])
     ->where('password',$data['password'])
     ->get('admin');
if($q->row_array()):
  return $q->row_array();
else:
   return false;
endif;
}

public function fetch_datawithjoin($table,$fileds,$con,$table2,$jointxt)
{
  $this->db->select($fileds);
  $this->db->from($table);
  $this->db->join($table2, $jointxt);
  $this->db->where($con);
  $q=$this->db->get();
  $data= $q->result();
  if($q->num_rows()>0)
    return $data;
  else
    return '0';
}
public function delete_row($table,$con)
{
  if($this->db->delete($table,$con))
    return 1;
  else
  return 0;
}
public function update_data($table,$con,$data)
{
   $this->db->where($con);
  if($this->db->update($table,$data))
  return 1;
  else
  return 0; 

}
public function insert_data($table,$data)
{
  if($this->db->insert($table,$data))
    return $this->db->insert_id();
  else
  return 0;

}
function fetch_data($table,$con,$filed)
{
  $this->db->select($filed);
  if($con)
  $this->db->where($con);
  $q=$this->db->get($table);
  if($q->num_rows()):
  return  $q->result();
  else:
   return false;
  endif;

}
////////////////////////////////////////////////////////////
/////**********        admin Login Check    *********/////////
function  get_admin(){
$q = $this->db->where('email',$this->session->userdata('admin'))
		 ->get('admin');
if($q->row_array()):
return $q->row_array();
else:
 return false;
endif;

} 

function  check_current_pass($pass){
$q = $this->db->where('email',$this->session->userdata('admin'))
		 ->where('password',$pass)
		 ->get('admin');
if($q->row_array()):
return true;
else:
  return false;
endif;

}
///////////////////////////////////////////////////////////
/////////////          change password        /////////////

function change_password($co){
$data = array('password'=> $co);
 $this->db->where('email',$this->session->userdata('admin'));
 $this->db->update('admin', $data); 
if( $this->db->update('admin', $data)):
	return true;
else:
   return false;
endif;

}
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start Blogs Functions                           /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

public function create_slug($name)
{
    $count = 0;
    $slug_name = $name;             // Create temp name
    while(true) 
    {
        $this->db->where('slug', $slug_name);   // Test temp name
        $query = $this->db->get('blogs');
        if ($query->num_rows() == 0) break;
        $slug_name = $name . '-' . (++$count);  // Recreate new temp name
    }
  echo  $slug_name;      // Return temp name
}

function insert_blog($data){
	return $this->db->insert('blogs',$data);
}

function get_all_blogs(){
	$this->db->where('status','1');
	$this->db->order_by('id','DESC');
$qu =	$this->db->get('blogs');
return $qu->result_array();
}

function edit_blog($id){
	$this->db->from('blogs');
	$this->db->where('id',$id);
	//$this->db->join('category',"stories.cat_id = category.id");
	$q = $this->db->get();
	return $q->row_array();
}

function update_blog($data){
 $d = array('title' => $data['title'],
 			 'description' => $data['description'], 
 			 'metatitle' => $data['metatitle'], 
 			 'metakeywords' => $data['metakeywords'],
 			 'metades' => $data['metades'],
 			 'modifydate' => $data['modifydate'], 
 			 'slug' => $data['slug'], 
 			 'image' => $data['image']);
$this->db->where('id',$data['id']);
if($this->db->update('blogs', $d)):
	return true;
else:
   return false;
endif;
}

function unpublish_blog($id){
$this->db->where('id',$id);
if($this->db->update('blogs', ['status'=>'0'])):
	return true;
else:
 return false;
endif;
}

function get_trash_blogs(){
$this->db->where('status','0');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('blogs');
return $qu->result_array();
}
function reactive_blog($id){
$this->db->where('id',$id);
if($this->db->update('blogs', ['status'=>'1'])):
return true;
else:
return false;
endif;
}
 
function delete_blog($id){
return $this->db->delete('blogs', array('id' => $id));
 
	}// class  close
 
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////     End Blogs  Functions                               /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

public function get_comment(){
$this->db->order_by('c_id','DESC');
return $this->db->get('comments')->result_array();
}
public function view_comment($id){
  $this->db->select('slug');
  $this->db->where('id',$id);
return  $this->db->get('blogs')->row_array();
}

public function unpublish_comments($id){
$this->db->where('C_id',$id);
if($this->db->update('comments', ['status'=>'0'])):
  return true;
else:
   return false;
endif;

}

public function publish_comments($id){
$this->db->where('C_id',$id);
if($this->db->update('comments', ['status'=>'1'])):
  return true;
else:
  return false;
endif;

}
function delete_comments($id){
  return $this->db->delete('comments', array('c_id' => $id));
 
}

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start Services Functions                        /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function insert_services($data){
  return $this->db->insert('pages',$data);
}

function get_all_service(){
$this->db->where('status','1');
$this->db->where('page','service');
$this->db->order_by('id','DESC');
$qu = $this->db->get('pages');

return $qu->result_array();
}

function edit_service($id){
  $this->db->from('pages');
  $this->db->where('id',$id);
  //$this->db->join('category',"stories.cat_id = category.id");
  $q = $this->db->get();
  return $q->row_array();
}

function update_service($data){
 $d = array('name' => $data['name'],
       'description' => $data['description'], 
       'orderno' => $data['orderno'], 
       'modifydate' => $data['modifydate'],
       'image' => $data['image']
     );
$this->db->where('id',$data['id']);
if($this->db->update('pages', $d)):
  return true;
else:
   return false;
endif;
}

function unpublish_service($id){
$this->db->where('id',$id);
if($this->db->update('pages', ['status'=>'0'])):
  return true;
else:
   return false;
endif;

}

function get_trash_service(){
  $this->db->where('status','0');
  $this->db->where('page','service');
  $this->db->order_by('id','DESC');
$qu = $this->db->get('pages');
return $qu->result_array();
}

function reactive_service($id){
$this->db->where('id',$id);
if($this->db->update('pages', ['status'=>'1'])):
  return true;
else:
   return false;
endif;

} 

function delete_service($id){
  return $this->db->delete('pages', array('id' => $id));
  }// class  close

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////       Other PAge Functions                             /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function get_about(){
  $this->db->where('page','about');
 return $this->db->get('pages')->row_array();

}
 
 function update_about($data){
unset($data['samimg']);
$this->db->where('page','about');
return $this->db->update('pages',$data);
//  print_r($data);
//  exit();
 }

 function get_privacypolicy(){
  $this->db->where('page','privacypolicy');
 return $this->db->get('pages')->row_array();

}

function get_australia(){
  $this->db->where('page','australia');
 return $this->db->get('pages')->row_array();

}
 function update_privacypolicy($data){
//unset($data['samimg']);
$this->db->where('page','privacypolicy');
return $this->db->update('pages',$data);

 }

  function get_termsconditions(){
  $this->db->where('page','termsconditions');
 return $this->db->get('pages')->row_array();

}
 function update_termsconditions($data){
//unset($data['samimg']);
$this->db->where('page','termsconditions');
return $this->db->update('pages',$data);

 }

   function get_shippingpolicy(){
  $this->db->where('page','shippingpolicy');
 return $this->db->get('pages')->row_array();

}
 function update_shippingpolicy($data){
//unset($data['samimg']);
$this->db->where('page','shippingpolicy');
return $this->db->update('pages',$data);

 }
    function get_refundcancellation(){

  $this->db->where('page','refundcancellation');
 return $this->db->get('pages')->row_array();

}
 function update_refundcancellation($data){
//unset($data['samimg']);
$this->db->where('page','refundcancellation');
return $this->db->update('pages',$data);

 }

   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Start testimonials Functions                    /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function insert_testimonial($data){
  return $this->db->insert('testimonial',$data);
}

function get_all_testimonial(){
  //$this->db->where('status','1');
  $this->db->order_by('id','DESC');
$qu = $this->db->get('testimonial');

return $qu->result_array();
}

function testimonialedit($id){
  $this->db->from('testimonial');
  $this->db->where('id',$id);
  //$this->db->join('category',"stories.cat_id = category.id");
  $q = $this->db->get();
  return $q->row_array();
}

function update_testimonial($data){
 $d = array('name' => $data['name'],
       'description' => $data['description'], 
       'orderno' => $data['orderno'], 
      // 'modifydate' => $data['modifydate'],
       'position' => $data['position']
     );
$this->db->where('id',$data['id']);
if($this->db->update('testimonial', $d)):
  return true;
else:
   return false;
endif;
}
 
function delete_testimonial($id){
  return $this->db->delete('testimonial', array('id' => $id));
 
  }// class  close

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////       Country master PAge Functions                             /////////////////////////////// 
 ///////////////////////////                                                        ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function insert_page($data){
	return $this->db->insert('countries_pages',$data);
}

function get_all_pages(){
	//$this->db->where('status','1');
	$this->db->order_by('id','DESC');
$qu =	$this->db->get('countries_pages');
return $qu->result_array();
}

function edit_page($id){
	$this->db->from('countries_pages');
	$this->db->where('id',$id);
	//$this->db->join('category',"stories.cat_id = category.id");
	$q = $this->db->get();
	return $q->row_array();
}

function update_page($data){
 $d = array('country' => $data['country'],
 'visa_type' => $data['visa_type'],
       'title' => $data['title'],
 			 'short_description' => $data['short_description'], 
       'long_description' => $data['long_description'],
 			 'Notes' => $data['Notes'], 
 			 'metatitle' => $data['metatitle'],
 			 'keyword' => $data['keyword'],
       'title2' => $data['title2'],
 			// 'modifydate' => $data['modifydate'], 
 			//  'slug' => $data['slug'], 
 			 'images' => $data['images']);
$this->db->where('id',$data['id']);
if($this->db->update('countries_pages', $d)):
	return true;
else:
   return false;
endif;
}
 
function unpublish_page($id){
$this->db->where('id',$id);
if($this->db->update('countries_pages', ['status'=>'0'])):
	return true;
else:
   return false;
endif;

}

function get_trash_pages(){
	$this->db->where('status','0');
	$this->db->order_by('id','DESC');
$qu =	$this->db->get('countries_pages');
return $qu->result_array();
}
public function delete_page($table,$con)
{
if($this->db->delete($table,$con))
return 1;
else
return 0;
}


  public function getDropdownData() {
    // Fetch data from the database
    $query = $this->db->get('countries');
    // Check if any records exist
    if ($query->num_rows() > 0) {
        // Return the result as an array of objects
        return $query->result();
    } else {
        return false;
    }
}

public function getDropdown() {
  // Fetch data from the database
  $query = $this->db->get('visatype');
  // Check if any records exist
  if ($query->num_rows() > 0) {
      // Return the result as an array of objects
      return $query->result();
  } else {
      return false;
  }
}
/////////////////////////////////////////////////////////////////////
////////////////       packages model               ///////////////////

  function insert_packages($data){
    return $this->db->insert('visa_fee',$data);
  }
  
  function get_all_packages(){
    //$this->db->where('status','1');
    $this->db->order_by('id','DESC');
  $qu =	$this->db->get('visa_fee');
  
  return $qu->result_array();
  }
  
  public function update_packages($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('visa_fee', $data);
  }
  
  
  public function get_packages($id) {
    return $this->db->get_where('visa_fee', array('id' => $id))->row();
  }
  
    public function delete_packages($table,$con)
    {
    if($this->db->delete($table,$con))
    return 1;
    else
    return 0;
    }

  
//////////////////////////////////////////////////////////////////////
/////// ///////            Application model       ///////////////////
//////////////////////////////////////////////////////////////////////

function insert_application($data){
return $this->db->insert('visa_application',$data);
}

function get_all_application(){
$this->db->order_by('id','DESC');
$qu =	$this->db->get('visa_application');
return $qu->result_array();
}

public function update_application($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('visa_application', $data);
}

public function get_applications() {
  return $this->db->get('visa_application')->result();
}

public function get_application($id) {
  return $this->db->get_where('visa_application', array('id' => $id))->row();
}
  
  public function delete_application($table,$con)
  {
    if($this->db->delete($table,$con))
     return 1;
    else
      return 0;
  }

//   public function get_visa_applications() {
//     $query = $this->db->get('visa_application');
    
//     if ($query->num_rows() > 0) {
//         return $query->result(); // Returning fetched data as an array of objects
//     } else {
//         return array(); // Return an empty array if no data is found
//     }
// }

  public function get_last_document_number($yearMonth) {
    $this->db->select('Docket_No');
    $this->db->from('visa_application'); // Replace 'your_table_name' with your actual table name
    $this->db->like('Docket_No', "DOC_$yearMonth", 'after');
    $this->db->order_by('Docket_No', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->Docket_No;
    }

    // Return a default value if no document number is found for the given year and month
    //return "DOC_$yearMonth_000"; // Assuming the default starting number is 000
}

  //////////////////////    search application   ///////////////////

  public function getVisaApplicationByDocketNumber($Docket_No) {
    $this->db->where('Docket_No', $Docket_No);
    $query = $this->db->get('visa_application');
    return $query->row(); // Return a single row representing the visa application
}
public function getVisaApplicationByPassportNumber($pasport_no) {
  $this->db->where('pasport_no', $pasport_no);
  $query = $this->db->get('visa_application');
  return $query->row(); // Return a single row representing the visa application
}
  
public function getVisaApplicationByName($name) {
  $this->db->where('name', $name);
  $query = $this->db->get('visa_application');
  return $query->row(); // Return a single row representing the visa application
}

function getUserDetails(){
  $response = array();
 $this->db->select('Docket_No,branch,sender_Staff,client,corporate_name,name,pasport_no,old_passport,email,phone,date_of_birth,Country,PNR,Staff,departure,FeesRemarks,coldate,Remark,Dispatch');
 $q = $this->db->get('visa_application');
 $response = $q->result_array();
  return $response;
}

public function get_report_data($Staff) {
  // Fetch data from the database based on the selected option
  // Example query:
  $this->db->where('Staff', $Staff);
  $query = $this->db->get('visa_application');
  return $query->result();
}

///////////////////////////////////////////////////////////
////////////             Add Clients           ////////////
///////////////////////////////////////////////////////////
function insert_client($data){
	return $this->db->insert('ivs_client',$data);
}
function get_all_client(){
	//$this->db->where('status','1');
	$this->db->order_by('id','DESC');
$qu =	$this->db->get('ivs_client');

return $qu->result_array();
}
public function get_client($id) {
  return $this->db->get_where('ivs_client', array('id' => $id))->row();
}
public function get_clients() {
  return $this->db->get('ivs_client')->result();
}
function edit_client($id){
	$this->db->from('ivs_client');
	$this->db->where('id',$id);
	//$this->db->join('category',"stories.cat_id = category.id");
	$q = $this->db->get();

	return $q->row_array();
}
public function update_client($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('ivs_client', $data);
}

function get_trash_client(){
$this->db->where('status','0');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('ivs_client');
return $qu->result_array();
}
 
  public function delete_client($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
    return 0;
  }

  function get_all_visa(){
  //$this->db->where('status','1');
  $this->db->order_by('id','DESC');
  $qu =	$this->db->get('visatype');
  return $qu->result_array();
  }

  function get_all_country(){
  //$this->db->where('status','1');
  $this->db->order_by('country_id','DESC');
  $qu =	$this->db->get('countries');
  return $qu->result_array();
  }

  function get_all_city(){
  //$this->db->where('status','1');
  $this->db->order_by('id_city','DESC');
  $cu =	$this->db->get('tbl_cities');
  return $cu->result_array();
  }

  public function delete_country($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
    return 0;
  }

  public function update_visa($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('visatype', $data);
  }
  
  
  public function get_visa($id) {
    return $this->db->get_where('visatype', array('id' => $id))->row();
  }

  public function delete_visa($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
   return 0;
  }

///////////////////////////////////////////////////////////
////////////              Add Branch        ///////////////
///////////////////////////////////////////////////////////
function insert_branch($data){
return $this->db->insert('ivs_branch',$data);
}

function get_all_branch(){
	//$this->db->where('status','1');
	$this->db->order_by('id','DESC');
  $qu =	$this->db->get('ivs_branch');
return $qu->result_array();
}

public function get_items() {
  return $this->db->get('ivs_branch')->result();
}

public function get_item($id) {
  return $this->db->get_where('ivs_branch', array('id' => $id))->row();
}

public function insert_item($data) {
  $this->db->insert('ivs_branch', $data);
}

public function update_item($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('ivs_branch', $data);
}
 
public function delete_branch($table,$con)
{
  if($this->db->delete($table,$con))
 return 1;
  else
  return 0;
}
  
///////////////////////////////////////////////////////////
////////////              Add Wallet      ///////////////
///////////////////////////////////////////////////////////
function insert_wallet($data){
  return $this->db->insert('ivs_wallet',$data);
  }

  public function update_wallet($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('ivs_wallet', $data);
  }
   
  public function get_wallets() {
    return $this->db->get('ivs_wallet')->result();
  }
  public function get_wallet($id) {
    return $this->db->get_where('ivs_wallet', array('id' => $id))->row();
  }

  public function delete_wallet($table,$con)
  {
    if($this->db->delete($table,$con))
   return 1;
    else
    return 0;
  }

  public function update_transection($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('ivs_ledger', $data);
  }
   
  public function get_transections() {
    return $this->db->get('ivs_ledger')->result();
  }

  public function get_transection($id) {
    return $this->db->get_where('ivs_ledger', array('id' => $id))->row();
  }

  public function delete_transection($table,$con)
  {
    if($this->db->delete($table,$con))
   return 1;
    else
    return 0;
  }

  function insert_ledger($data){
    return $this->db->insert('ivs_ledger',$data);
    }

    function get_all_ledger(){
      $this->db->order_by('id','DESC');
      $qu =	$this->db->get('ivs_wallet');
    return $qu->result_array();
    }

//////////////////////////////////////////////////////////////////////
///////////////////////      Add User   ///////////////////////////////
function insert_user($data){
  return $this->db->insert('user_depart',$data);
  }

function get_users(){
  //$this->db->where('status','1');
  $this->db->order_by('id','DESC');
 return $this->db->get('user_depart')->result_array();
  }

function get_all_user(){
$this->db->where('status','1');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('user_depart');
return $qu->result_array();
}

/////////////////////////////////////////////////////////////////////////////
//////////////          Visa Information             ///////////////////////
//////////////           country Fact                        //// //////////
////////////////////////////////////////////////////////////////////////////
function insert_countryfact($data){
return $this->db->insert('countryfact',$data);
}

function get_all_countryfact(){
$this->db->order_by('id','DESC');
$qu =	$this->db->get('countryfact');
return $qu->result_array();
}

public function update_countryfact($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('countryfact', $data);
}

public function get_countryfacts() {
  return $this->db->get('countryfact')->result();
}

public function get_countryfact($id) {
  return $this->db->get_where('countryfact', array('id' => $id))->row();
}

  public function delete_countryfact($table,$con)
  {
  if($this->db->delete($table,$con))
  return 1;
  else
  return 0;
  }
///////////////////////////////////////////////////////////////////////
//////////////        Diplomatic Representration Fact         /////////
///////////////////////////////////////////////////////////////////////
function insert_diplomatic($data){
	return $this->db->insert('diplomatic',$data);
}

function get_all_diplomatic(){
//$this->db->where('status','1');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('diplomatic');
return $qu->result_array();
}

public function get_diplomatic($id) {
  return $this->db->get_where('diplomatic', array('id' => $id))->row();
}

function edit_diplomatic($id){
	$this->db->from('diplomatic');
	$this->db->where('id',$id);
	$q = $this->db->get();
	return $q->row_array();
}


public function update_diplomatic($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('diplomatic', $data);
}
 
function get_trash_diplomatic(){
//$this->db->where('status','0');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('diplomatic');
return $qu->result_array();
}
  
  public function delete_diplomatic($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
    return 0;
  }

///////////////////////////////////////////////////////////////////////
//////////////        Diplomatic Visa Fee & Notes         /////////
///////////////////////////////////////////////////////////////////////
function insert_fee_notes($data){
	return $this->db->insert('fee_notes',$data);
}

function get_all_fee_notes(){
//$this->db->where('status','1');
$this->db->order_by('id','DESC');
$qu =	$this->db->get('fee_notes');
return $qu->result_array();
}

function edit_fee_notes($id){
	$this->db->from('fee_notes');
	$this->db->where('id',$id);
	$q = $this->db->get();
	return $q->row_array();
}

public function get_fees($id) {
  return $this->db->get_where('fee_notes', array('id' => $id))->row();
}

public function update_fee_notes($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('fee_notes', $data);
}
 
  
  public function delete_fee_notes($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
    return 0;
  }


///////////////////////////////////////////////////////////////////////
//////////////       Indian Missions Overseas       /////////
///////////////////////////////////////////////////////////////////////

function insert_add_mission($data){
	return $this->db->insert('mission',$data);
}

function get_all_missionover(){
  //$this->db->where('status','1');
  $this->db->order_by('id','DESC');
  $qu =	$this->db->get('mission');
  return $qu->result_array();
  }

function edit_add_mission($id){
	$this->db->from('mission');
	$this->db->where('id',$id);
	$q = $this->db->get();
	return $q->row_array();
}
public function update_add_mission($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('mission', $data);
}
public function get_mission($id) {
  return $this->db->get_where('mission', array('id' => $id))->row();
}
 
  public function delete_add_mission($table,$con)
  {
    if($this->db->delete($table,$con))
    return 1;
    else
     return 0;
  }

////////////////////////////////////////////////////////////////
//////////////////          News Latter     ////////////////////
////////////////////////////////////////////////////////////////
public function getAllSubscribers() {
  $query = $this->db->get('subscribers');
  return $query->result();
}

public function getSubscribedSubscribers() {
  $this->db->where('status', 1);
  $query = $this->db->get('subscribers');
  return $query->result();
}

function get_add_latter(){
$this->db->where('page','latter');
return $this->db->get('pages')->row_array();

}
 
function update_add_latter($data){
unset($data['samimg']);
$this->db->where('page','latter');
return $this->db->update('pages',$data);

 }
 function get_all_latter(){
//$this->db->where('status','1');
$this->db->order_by('id','DESC');
$qu = $this->db->get('news_latter');
return $qu->result_array();
}


function edit_latter($id){
	$this->db->from('news_latter');
	$this->db->where('id',$id);
	$q = $this->db->get();
	return $q->row_array();
}

function update_latter($data){
 $d = array('name' => $data['name'],
 'image' => $data['image'],
 	'description' => $data['description']);
			
$this->db->where('id',$data['id']);
if($this->db->update('news_latter', $d)):
	return true;
else:
   return false;
endif;
}
 
  public function delete_latter($table,$con)
  {
    if($this->db->delete($table,$con))
     return 1;
    else
      return 0;
  }

function insert_EmailSubscriber($data){
  return $this->db->insert('subscribers',$data);
  }

  function saverecords($email,$name)
	{
		$query="insert into subscribers values('$email','$name')";
		$this->db->query($query);
	}

  public function importData($data) {
  
    $res = $this->db->insert_batch('subscribers',$data);
    if($res){
        return TRUE;
    }else{
        return FALSE;
    }

}
public function student_list()
	{
		return $this->db->select('s.*, as.student_id')
			->from('subscribers as s')
			->join('group_email as as','as.student_id = s.id','left')
		    ->get()
			->result();
	}

//   public function add_selected_student()
// {
//     $student_id = $this->input->post('student_id'); //here i am getting student id from the checkbox
//     for ($i=0; $i < sizeof($student_id); $i++) 
//     { 
//        $data = array('student_id' => $student_id[$i]);
//        $this->db->insert('group_email',$data);
//     }
//     $this->session->set_flashdata('msg',"group details has been added successfully");
//     $this->session->set_flashdata('msg_class','alert-success');
//     return redirect('students');
// }

 public function email_group($groupName, $emails) {
  // Insert the group into 'groups' table
  $this->db->insert('subscribers', array('group_name' => $groupName));
  $groupId = $this->db->insert_id();
  // Insert emails into 'group_emails' table
  foreach ($emails as $email) {
      $this->db->insert('group_emails', array('group_id' => $groupId, 'email' => $email));
  }
  return $groupId;
 }

 

///////   Email Group  ////////
public function create_group($group_name) {
  $data = array('group_name' => $group_name);
  $this->db->insert('groups', $data);
  return $this->db->insert_id();
}

public function get_groups() {
  return $this->db->get('groups')->result_array();
}

public function add_email_to_group($email, $group_id) {
  $data = array(
      'email_address' => $email, 
      'group_id' => $group_id
  );
  $this->db->insert('emails', $data);
  return $this->db->insert_id();
}


public function get_emails_by_group($group_id) {
  $this->db->where('group_id', $group_id);
  return $this->db->get('emails')->result_array();
}

function get_all_email(){
	//$this->db->where('status','1');
	$this->db->order_by('id','DESC');
  $qu =	$this->db->get('subscribers');
return $qu->result_array();
}

function get_all_group(){
	//$this->db->where('status','1');
	$this->db->order_by('id','DESC');
  $qu =	$this->db->get('groups');
return $qu->result_array();
}
//////////  Email Group End    ///////

////////////      Role Permission      ///////////////////////

public function getPermissions($role)
{
    $this->db->select('permissions');
    $this->db->where('id', $role);
    $query = $this->db->get('tbl_user_role');
    $row = $query->row();
    if ($row) {
        return json_decode($row->permissions);
    }
    return array();
}
function get_level(){
  return $this->db->get('tbl_user_role')->result_array();
   
   }
   //////////////////////////////////////////////////////////////////////
////////////////////////////    Select query      ////////////////////////
public function show_all_data() {
  $this->db->select('*');
  $this->db->from('countryfact');
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
  return $query->result();
  } else {
  return false;
  }
  }
  
  public function show_data_by_id($id) {
  $condition = "id =" . "'" . $id . "'";
  $this->db->select('*');
  $this->db->from('countryfact');
  $this->db->where($condition);
  $this->db->limit(1);
  $query = $this->db->get();
  
  if ($query->num_rows() == 1) {
  return $query->result();
  } else {
  return false;
  }
  }
  
  public function select_by_country($country) {
  $condition = "country =" . "'" . $country . "'";
  $this->db->select('*');
  $this->db->from('countryfact');
  $this->db->where($condition);
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
  return $query->result();
  } else {
  return false;
  }
  }
  
  public function show_data_by_country($country) {
    $condition = "country =" . "'" . $country . "'";
    $this->db->select('*');
    $this->db->from('countryfact');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    
    if ($query->num_rows() == 1) {
    return $query->result();
    } else {
    return false;
    }
    }

  public function show_data_by_date_range($data) {
  $condition = "emp_date_of_join BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "'";
  $this->db->select('*');
  $this->db->from('countryfact');
  $this->db->where($condition);
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
  return $query->result();
  } else {
  return false;
  }
  }  

/////////////////      Upload news later subscriber  //////////

function getRows($params = array()) {
  $this->db->select('*');
  $this->db->from('subscribers'); // This is table name

  if (array_key_exists("where", $params)) {
      foreach ($params['where'] as $key => $val) {
          $this->db->where($key, $val);
      }
  }

  if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
      $result = $this->db->count_all_results();
  } else {
      if (array_key_exists("id", $params)) {
          $this->db->where('id', $params['id']);
          $query = $this->db->get();
          $result = $query->row_array();
      } else {
          $this->db->order_by('id', 'desc');
          if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
              $this->db->limit($params['limit'], $params['start']);
          } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
              $this->db->limit($params['limit']);
          }
          $query = $this->db->get();
          if ($query->num_rows() > 0) {
              $result = $query->result_array();
          } else {
              $result = FALSE;
          }
      }
  }
  // Return fetched data
  return $result;
}


/*
* Insert members data into the database
* @param $data data to be insert based on the passed parameters
*/
public function insert($data = array()) {
  if (!empty($data)) {
      // Add created and modified date if not included
      if (!array_key_exists("created", $data)) {
          $data['created'] = date("Y-m-d H:i:s");
      }
      if (!array_key_exists("modified", $data)) {
          $data['modified'] = date("Y-m-d H:i:s");
      }

      // Insert member data
      $insert = $this->db->insert('subscribers', $data); // Replace with your table name

      // Return the status
      return $insert ? $this->db->insert_id() : false;
  }
  return false;
}


/*
* Update member data into the database
* @param $data array to be update based on the passed parameters
* @param $condition array filter data
*/
public function update($data, $condition = array()) {
  if (!empty($data)) {
      // Add modified date if not included
      if (!array_key_exists("modified", $data)) {
          $data['modified'] = date("Y-m-d H:i:s");
      }

      // Update member data
      $update = $this->db->update('subscribers', $data, $condition); // Replace with your table name

      // Return the status
      return $update ? true : false;
  }
  return false;
}


}
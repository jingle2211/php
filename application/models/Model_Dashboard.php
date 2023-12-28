<?php
class Model_Dashboard extends CI_Model
{
/// get user data 
	function get_userdata()
	{
		$this->db->from('tbl_user');
		$this->db->where('mobile',$this->session->userdata('loginnumber'));
		$query =  $this->db->get();
		if($query->num_rows())
		{
		 	return $query->row_array();
			// print_r($query->row_array());
			// exit();
		}	 
	}

// get one userdata 

	function get_userdata_edit($id){
		$this->db->from('tbl_user');
		$this->db->where('id_user',$id);
		$query =  $this->db->get();
		if($query->num_rows())
		{
			 return $query->row_array();
		}
	}

// update user user_id

	function update_users(){ 
		$date  = array(
					'name' => $this->input->post('name') ,
					//'email' => $this->input->post('email') ,
					//'mobile' => $this->input->post('mobile') 
				   );
		$this->db->where('id_user', $this->input->post('user_id'));
		$success = $this->db->update('tbl_user',$date);
		if($success)
		{
			return true;
		}
		else{
			return false;
		}	 
	}

	// delete user email 

	 function deleteuseremail(){
		$date  = array(  'email' => ' '  );
		$this->db->where('id_user', $this->input->post('id_user'));
			 return $success = $this->db->update('tbl_user',$date);
	 }


}

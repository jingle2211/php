<?php
class Model_Front extends CI_Model
{
	public function get_all_blogs()
	{
		$this->db->where('status','1');
		$this->db->order_by('modifydate','DESC');
		$quri = $this->db->get('blogs');

		return $quri->result_array();
	}
 
	function fetch_data($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("blogs");
		$this->db->order_by("id", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	function get_one_blog($slug)
	{
		$this->db->where('slug',$slug);
		$this->db->where('status','1');
		return  $q = $this->db->get('blogs')->row_array();
	}

	function get_latest_blogs(){
		$this->db->where('status','1');
		$this->db->order_by('modifydate','DESC');
		$this->db->limit(10);
		return $this->db->get('blogs')->result_array();
	}

	function add_comment($data)
	{
		return $this->db->insert('comments', $data);
	}

	function get_post_comm($id){
		$this->db->where('blog_id',$id);
		$this->db->where('status','1');
		$this->db->where('replay',0);
		$q  = $this->db->get('comments');
		return $q->result_array();
	}

	function get_post_replay($id){
		$this->db->where('blog_id',$id);
		$this->db->where('status','1');
		$this->db->where('replay !=',0);
		$qu  = $this->db->get('comments');
		return $qu->result_array();
	}

	function get_all_service()
	{
		$this->db->where('status','1');
		$this->db->where('page','service');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');
		return $qu->result_array();
	}

	function get_all_about()
	{
		//$this->db->where('status','1');
		$this->db->where('page','about');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');
		return $qu->row_array();
	}

	function get_all_privacypolicy()
	{
		//$this->db->where('status','1');
		$this->db->where('page','privacypolicy');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');

		return $qu->row_array();
	}

	function get_all_australia()
	{
		//$this->db->where('status','1');
		$this->db->where('page','australia');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');

		return $qu->row_array();
	}
	function get_all_termsconditions()
	{
		$this->db->where('page','termsconditions');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');

		return $qu->row_array();
	}
	
	function get_all_shippingpolicy()
	{
		//$this->db->where('status','1');
		$this->db->where('page','shippingpolicy');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');

		return $qu->row_array();
	}

	function get_all_refundcancellation()
	{
		$this->db->where('page','refundcancellation');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');

		return $qu->row_array();
	}

	function get_all_testimonial()
	{
		$this->db->order_by('orderno','ASC');
		$qu = $this->db->get('testimonial');

		return $qu->result_array();

	}

	function get_userdata()
	{
		$this->db->from('tbl_user');
		$this->db->where('mobile',$this->session->userdata('loginnumber'));
		$query =  $this->db->get();

		if($query->num_rows())
		{
		  return $query->row_array();

		}  
	}

/////////// country pages  /////////////////////

	public function get_all_pages()
	{
		$this->db->where('status','1');
		//$this->db->order_by('modifydate','DESC');
		$quri = $this->db->get('countries_pages');

		return $quri->result_array();
	}
 
	function fetch_pages($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("countries_pages");
		$this->db->order_by("id", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	function get_one_page($slug)
	{
		$this->db->where('slug',$slug);
		$this->db->where('status','1');
		return  $q = $this->db->get('countries_pages')->row_array();
	}

	function get_latest_pages(){
		$this->db->where('status','1');
		//$this->db->order_by('modifydate','DESC');
		$this->db->limit(10);
		return $this->db->get('countries_pages')->result_array();
	}

	public function get_all_packages()
	{
		$this->db->where('status','1');
		//$this->db->order_by('modifydate','DESC');
		$quri = $this->db->get('visa_fee');

		return $quri->result_array();
	}
 
	function fetch_packages($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("visa_fee");
		$this->db->order_by("id", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	function get_all_add_latter()
	{
		//$this->db->where('status','1');
		$this->db->where('page','latter');
		$this->db->order_by('id','DESC');
		$qu = $this->db->get('pages');
		return $qu->row_array();
	}


}
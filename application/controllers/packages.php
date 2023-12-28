<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class packages extends CI_Controller {


	function __construct() {
        parent::__construct(); 
     
       $this->load->model('Model_Front');
    }
/////////////////    Packages Function  //////////////////    
	public function index()
	{  
        $data['packages'] = $this->Model_Front->get_all_packages();
        $this->load->view('packages',$data);


	}// index
  

function fetch()
    {
        $output = '';
        $this->load->model('Model_Front');
        $data = $this->Model_Front->fetch_packages($this->input->post('limit'), $this->input->post('start'));
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
             {
                $output .= '<div class="col-md-6 col-sm-6 col-xs-6">
                <article class="post">                            
                <div class="post-content">  
                <div class="entry-meta">
                <span class="entry-date nevy-bg">'.$row->title.'</span>
                <a href="'.base_url().'pages/'.$row->title.'"><span class="entry-author red-bg">Read More..</span></a>
                </div><!-- /.entry-meta -->
                <h2 class="entry-title">
                <a href="'.base_url().'pages/'.$row->Notes.'">'.substr($row->title, 0,50). '</a>
                </h2>        
                </div> 
                </article> 
                </div> ';
            }
        }
        echo $output;
    }

public function get_all_packages(){

    if($rows['data'] = $this->Model_Front->get_all_packages()):

        // Meta Details Variable
         $rows['visa_type'] =  $rows['data']['visa_type'];
         $rows['title'] =  $rows['data']['title'];
         $rows['Notes'] =  $rows['data']['Notes'];
         // Meta Details Variable
      
    //   $rows['comm'] = $this->Model_Front->get_post_comm($rows['data']['id']);
    //    $rows['replay'] = $this->Model_Front->get_post_replay($rows['data']['id']);  
        
 $rows['pages'] = $this->Model_Front->get_latest_pages();
      $this->load->view('packages-details', $rows);
    else:
        redirect();
     endif;

}

}
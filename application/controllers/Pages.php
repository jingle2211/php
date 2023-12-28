<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	function __construct() {
        parent::__construct(); 
     
       $this->load->model('Model_Front');
    }
/////////////////    Pages Function  //////////////////    
	public function index()
	{  
        $data['pages'] = $this->Model_Front->get_all_pages();
        $this->load->view('pages',$data);


	}// index
  

function fetch()
    {
        $output = '';
        $this->load->model('Model_Front');
        $data = $this->Model_Front->fetch_pages($this->input->post('limit'), $this->input->post('start'));
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
             {
                $output .= '
                  <div class="col-md-6 col-sm-6 col-xs-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="'.base_url().'pages/'.$row->visa_type.'">
                                                    <img src="'.base_url().'upload/bpages/'.$row->visa_type. '" alt="page" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date nevy-bg">
                                                    '.$row->title.'
                                                    </span>
                                                    <a href="'.base_url().'pages/'.$row->title.'"><span class="entry-author red-bg">
                                                        
                                                       Read More..
                                                    </span></a>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="'.base_url().'pages/'.$row->Notes.'">'.substr($row->title, 0,50). '</a>
                                                </h2>        
                                            </div> 
                                        </article> 
                                    </div> 
                ';
            }
        }
        echo $output;
    }

public function get_all_page(){

    if($rows['data'] = $this->Model_Front->get_all_page()):


        // Meta Details Variable
         $rows['visa_type'] =  $rows['data']['visa_type'];
         $rows['title'] =  $rows['data']['title'];
         $rows['Notes'] =  $rows['data']['Notes'];
         // Meta Details Variable
      
    //   $rows['comm'] = $this->Model_Front->get_post_comm($rows['data']['id']);
    //    $rows['replay'] = $this->Model_Front->get_post_replay($rows['data']['id']);  
        
 $rows['pages'] = $this->Model_Front->get_latest_pages();
      $this->load->view('page-details', $rows);
    else:
        redirect();
     endif;

}


////////////////////////////

public function services(){

 $data['service']  =  $this->Model_Front->get_all_service();
    $this->load->view('service', $data);
}

public function about(){

 $data['about'] =  $this->Model_Front->get_all_about();
$this->load->view('about', $data);
}

public function add_latter(){
    $data['add_latter'] =  $this->Model_Front->get_all_add_latter();
       $this->load->view('add_latter', $data);
   }
   
 public function privacypolicy(){

     $data['privacypolicy'] =  $this->Model_Front->get_all_privacypolicy();
     $this->load->view('privacy-policy', $data);
 }

 public function australia(){

    $data['australia'] =  $this->Model_Front->get_all_australia();
    $this->load->view('australia', $data);
}

public function faq(){

     
    $this->load->view('faq');
 }

 public function termsconditions(){

     $data['termsconditions'] =  $this->Model_Front->get_all_termsconditions();
    $this->load->view('terms-condition', $data);
 }
  public function shippingpolicy(){

     $data['shippingpolicy'] =  $this->Model_Front->get_all_shippingpolicy();
    $this->load->view('delivery-shipping', $data);
 }
   public function refundcancellation(){

     $data['refundcancellation'] =  $this->Model_Front->get_all_refundcancellation();
    $this->load->view('refund', $data);
 }

}
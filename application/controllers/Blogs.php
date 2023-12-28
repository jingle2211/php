<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blogs extends CI_Controller {
	function __construct() {
        parent::__construct(); 
     
       $this->load->model('Model_Front');
    }
/////////////////    Blogs Function  //////////////////    
	public function index()
	{  
        $data['blogs'] = $this->Model_Front->get_all_blogs();
        $this->load->view('blogs',$data);

	}// index
  
function fetch()
    {
        $output = '';
        $this->load->model('Model_Front');
        $data = $this->Model_Front->fetch_data($this->input->post('limit'), $this->input->post('start'));
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
             {
                $output .= '
                  <div class="col-md-6 col-sm-6 col-xs-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="'.base_url().'blogs/'.$row->slug.'">
                                                    <img src="'.base_url().'upload/blogs/'.$row->image. '" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                    '.$row->modifydate.'
                                                    </span>
                                                    <a href="'.base_url().'blogs/'.$row->slug.'"><span class="red-bg">
                                                        
                                                       Read More..
                                                    </span></a>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="'.base_url().'blogs/'.$row->slug.'">'.substr($row->title, 0,50). '</a>
                                                </h2>        
                                            </div> 
                                        </article> 
                                    </div> 
                ';
            }
        }
        echo $output;
    }


function blog($slug){

    if($rows['data'] = $this->Model_Front->get_one_blog($slug)):
        // Meta Details Variable
         $rows['metatitle'] =  $rows['data']['metatitle'];
         $rows['metakeywords'] =  $rows['data']['metakeywords'];
         $rows['metades'] =  $rows['data']['metades'];
         // Meta Details Variable
      
      $rows['comm'] = $this->Model_Front->get_post_comm($rows['data']['id']);
       $rows['replay'] = $this->Model_Front->get_post_replay($rows['data']['id']);  
        
 $rows['blogs'] = $this->Model_Front->get_latest_blogs();
      $this->load->view('blog-details', $rows);
    else:
        redirect();
     endif;


}

////////////////////////////

public function addcomment(){
    $data = array(
                'name' => $_POST['n'] ,
                'email' => $_POST['e'],
                'blog_id' =>  $_POST['id'],
                'comments' => $_POST['c'],
                'date' => date('d-m-Y H:i:s')
             );
 if($this->Model_Front->add_comment($data)):
    return true;
else:
    return false;
endif;
}

public function addreplaycomment(){
$data = array(
                'name' => $_POST['n'] ,
                'email' => $_POST['e'],
                'blog_id' =>  $_POST['id'],
                'comments' => $_POST['c'],
                'replay' => $_POST['cid'],
                'date' => date('d-m-Y H:i:s')
             ); 
if($this->Model_Front->add_comment($data)):
    return true;
else:
    return false;
endif;

}

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
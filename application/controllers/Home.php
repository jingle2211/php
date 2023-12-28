<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct() {
        parent::__construct(); 
        $this->load->model(array('Model_Front','Model_Login', 'subscribers_model','Evisa_model','Model_Admin','visa_model','Register_model'));

    } 

	public function index()
	{
		 $rows['about'] =  $this->Model_Front->get_all_about();
		 $rows['blogs'] =  $this->Model_Front->get_latest_blogs();
		 $rows['testimonial'] = $this->Model_Front->get_all_testimonial();
		 $rows['country'] = $this->visa_model->getcountry();
		 $rows['add_latter'] =  $this->Model_Front->get_all_add_latter();
		 $this->load->view('index' ,$rows);
	}

public function curl_get($url,  array $options = array())
	{
	    $defaults = array(
	        CURLOPT_URL => $url,
	        CURLOPT_HEADER => 0,
	        CURLOPT_RETURNTRANSFER => TRUE,
	        CURLOPT_TIMEOUT => 4
	    );

	    $ch = curl_init();
	    curl_setopt_array($ch, ($options + $defaults));
	    if( ! $result = curl_exec($ch))
	    {
	        trigger_error(curl_error($ch));
	    }
	    curl_close($ch);
	    return $result;
	}

	public function work(){
	$this->load->view('work');   
	}

	public function why(){
	$this->load->view('why');
	}
	public function contact(){
	$this->load->view('contact');
	}
	
	public function user_registration(){
		
		$this->load->view('user_registration');
	}
	public function Evisa_apply(){
		
		$this->load->view('Evisa_apply');
	}
	
		public function thankyou(){

		$this->load->view('thankyou');
	}
	
	public function register(){

		$this->load->view('register');
	}
	public function login(){

		$this->load->view('login');
	}
	public function add_latter(){

		$this->load->view('add_latter');
	}
	public function success(){
		$this->load->view('success');
		}
	public function VisaInformation(){
	$this->load->view('VisaInformation');
	}
	public function invoice(){
		$this->load->view('invoice');
		}


} 
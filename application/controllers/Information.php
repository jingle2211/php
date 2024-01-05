<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('Model_Admin');
    }
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////                                                        ///////////////////////////////
  ///////////////////////////        Application Functions                           /////////////////////////////// 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

public function add_application()
{
  $this->load->model('Model_Admin');
  $data['admin'] = $this->Model_Admin->get_admin();
  $data['country'] = $this->Model_Admin->get_all_country();
  $data['branch'] = $this->Model_Admin->get_all_branch();
  $data['client'] = $this->Model_Admin->get_all_client();
  $data['Staff'] = $this->Model_Admin->get_all_user();

//$loggedInUser = $this->session->userdata('userdata'); // Change 'user_data' to the session key storing user info
//$data = $loggedInUser['user_role']; // Assuming username is stored in 'username' field

  $this->load->view('admin/header', $data);
  $this->load->view('Information/add_application', $data);
  $this->load->view('admin/footer');
 
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
      redirect('Information/application_report');
    else:
      $this->session->set_flashdata('error', '<b>error !! Please Try Again</b>');
      redirect('Information/add_application');
    endif;

  endif;
}


public function manage_application()
{
  $all['admind'] = $this->Model_Admin->get_admin();
  $all['allapplication'] = $this->Model_Admin->get_applications();
  $all['visa_application'] = $this->Model_Admin->get_all_application();
  $arrayName = array('id >' => 0);
  $this->load->view('admin/header', $all);
  $this->load->view('Information/application_report', $all);
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
      redirect('Information/application_report');
  }
  $data['allapplication'] = $this->Model_Admin->get_application($id);
  $this->load->view('admin/header', $data);
  $this->load->view('Information/edit_application', $data);
  $this->load->view('admin/footer');
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

  public function application_report()
  {
    $data['admind'] = $this->Model_Admin->get_admin();
    $data['country'] = $this->Model_Admin->get_all_country();
    $data['Staff'] = $this->Model_Admin->get_all_user();
    $Staff = $this->input->post('Staff');
        
        // For demonstration purposes, let's pass data to a view for the report
    $data['report_data'] = $this->Model_Admin->get_report_data($Staff);
    $this->load->model(array('Model_Front'));
    // $arrayName = array('id >' => 0);
    $data['allapplication'] = $this->Model_Admin->get_all_application();
    $this->load->model(array('Model_Front'));
    // echo'<pre>';print_r($data);exit;
    $this->load->view('admin/header', $data);
    $this->load->view('Information/application_report', $data);
    $this->load->view('admin/footer');
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

    // public function generate_report() {
    //     $Staff = $this->input->post('Staff');
        
    //     // For demonstration purposes, let's pass data to a view for the report
    //     $data['report_data'] = $this->Model_Admin->get_report_data($Staff);
        
    //     // Load a view to display the report
    //    // $this->load->view('Information/application_report', $data);
    // }  

    //////   Serach application ///////
    public function search_application( ) {
        $docketNumber = $this->input->post('Docket_No'); // Get the docket number from the form input
        $pasportNumber = $this->input->post('pasport_no');
        $Name = $this->input->post('name');
        // Load the model
        $this->load->model('Model_Admin');
        //$data['allapplication'] = $this->Model_Admin->get_all_application();
        // Call the model method to get the visa application
        $visaApplication = $this->Model_Admin->getVisaApplicationByDocketNumber($docketNumber);
        //$visaApplication = $this->Model_Admin->getVisaApplicationByPassportNumber($pasportNumber);
        //$visaApplication = $this->Model_Admin->getVisaApplicationByName($Name);
        // Pass the visa application data to the view
        $data['visaApplication'] = $visaApplication;
    
        // Load the view to display the search result
        $this->load->view('admin/header', $data);
        $this->load->view('Information/search_application', $data); 
        $this->load->view('admin/footer');
    }

////////  visa Information          ////////
public function select_form() {
    $data['country'] = $this->Model_Admin->get_all_country();
    $data['show_table'] = $this->view_table();
    $this->load->view('Information/select_form', $data);
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

      $this->load->view('admin/header1', $data);
      $this->load->view('Information/VisaInformation', $data);
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
      $this->load->view('Information/select_form', $data);
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

}
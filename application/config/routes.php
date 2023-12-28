<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
| 
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/// start website routes

//$route['rideEnd.php/(:any)']        = 'Home/endRide/$1'; 
$route['genrateInvoice.php/(:any)'] = 'Home/genrateInvoice/$1'; 
$route['ajaxData_price.php']        = 'Home/ajax_p';
$route['mahendraServices']          = 'Home/mrs';
$route['userinvoice']               = 'Home/userInvoice';
$route['register.php']              = 'Home/register';
$route['login.php']                 = 'Home/login';
$route['otp-verify.php']            = 'Login/otp_verify';
$route['service.php']               = 'Blogs/services';
$route['about.php']                 = 'Blogs/about';
$route['australia.php']             = 'Blogs/australia';
$route['privacy-policy.php']        = 'Blogs/privacypolicy';
$route['faq.php']                   = 'Blogs/faq';
$route['terms-and-condition.php']   = 'Blogs/termsconditions';
$route['delivery-shipping.php']     = 'Blogs/shippingpolicy';
$route['refund.php']                = 'Blogs/refundcancellation';
$route['blogs/(:any)']              = 'blogs/blog/$1';
$route['booking']                   = 'Home/booking_start';
$route['confirm/(:any)']            = 'Home/confirm/$1';
$route['work.php']                  = 'Home/work';
$route['why.php']                   = 'Home/why';
$route['contact.php']               = 'Home/contact';
$route['cancel.php/(:any)'] 	    = "home/cancle_booking/$1";
$route['myorder']					= 'dashboard/myorder';
$route['user_registration.php']     = "Home/user_registration";
$route['Evisa_apply.php']           = "Home/Evisa_apply";
$route['application_form.php']      = "Admin/application_form";
$route['index.php']                 = 'Egencia/index';
$route['visa_application.php']      = 'Egencia/visa_application';
$route['success.php']               = 'Home/success';
$route['thankyou.php']              = 'Home/thankyou';
$route['VisaInformation.php']       = 'Home/VisaInformation';
$route['add_latter.php']            = 'Blogs/add_latter';
$route['invoice.php']               = 'Home/invoice';
//////   New Admin route  /////////
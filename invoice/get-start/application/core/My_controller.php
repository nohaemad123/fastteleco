<?php defined('BASEPATH') OR exit('No direct script access allowed');
class My_controller extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	// public $data=array();
function __construct()
{
parent::__construct();
    
 
				
		
		  
		   
			$this->load->library('email');

						 $this->email->set_mailtype("html");   
						   
						   
						   
 date_default_timezone_set('Africa/Cairo');
		
 $this->load->helper('form');
		  
	
	
	
	$GLOBALS['from_email']="info@fastteleco.com";
	
	$GLOBALS['from_email_ar']="info@fastteleco.com";
	
	//$GLOBALS['from_email']=$GLOBALS['contactus_data']->contactus_email;
		$GLOBALS['email_name']='Fast Teleco';
		$GLOBALS['current_date']=date('Y-m-d');



}

 function email_sending_general($mail,$subject,$content,$admin=NULL,$name = NULL,$lang = NULL) {
 
 if($lang != NULL)
 {
 if($lang == "ar")
 {
  $tomail=$GLOBALS['from_email_ar'];
 }
 else if($lang == "english")
 {
  $tomail=$GLOBALS['from_email'];
 }
 

 }
 else
 {
 $tomail=$GLOBALS['from_email'];
 } 
 
 //var_dump($tomail);
 
		
		if($admin == true)
		{
			$this->email->from($mail, $name);
			
			
			$this->email->to($tomail); 
			
			
			
			
			
	
		}
  	else if($admin == NULL)
		{
			$this->email->from($GLOBALS['from_email'], $GLOBALS['email_name']);
			$this->email->to($mail);   
	
		}
	
	
	
	
	
	$this->email->subject($subject);
	$this->email->message($content);	
	if($this->email->send())
	{
		return true;
	}
	else
	{
		return false;
	}
  }	
  
  
  
  



}
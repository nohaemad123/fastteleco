<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends Fronted_Controller {

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

public function index()
	{
		
		
		 $GLOBALS['ress'] = "";
		 //$GLOBALS['page_name'] = 'index';
       $this->load->view('website/invoice',$GLOBALS);
	}
	
	
	
	
	public function contact()
	{
		
		
		 $GLOBALS['ress'] = "";
		 //$GLOBALS['page_name'] = 'index';
       $this->load->view('website/contact',$GLOBALS);
	}





	public function email_sending()
	{
		
		
	
			$name=$this->input->post("name");
					
					$email=$this->input->post("email");
		$phone=$this->input->post("phone");
				
		$password=$this->input->post("password");
		
		
		
		$repassword=$this->input->post("repassword");
		
		
	
			 $msg="Company name : " . $name . "<br/> E-Mail : " . $email .  "<br/> Phone No : " . $phone .  "<br/>  Password : " . $password  .  "<br/> Confirm Password : " . $repassword ;
		
		
		
		$subject="FastTeleco Payment Confirmation";
		
		
		
	
// ////////////uploadfile/////////////////////////


 // $year_month=date('Y-m',now());


// $directory_old=APPPATH.'../uploads/website_uploads/joinus' . "/" . $year_month;

			// if (!is_dir($directory_old)) {
				// $directory_old=mkdir($directory_old);
			// }

            // if (isset($_FILES["filee"]["name"]) && $_FILES["filee"]["name"] != '') {

                // $picname2 = str_replace(' ', '', $_FILES["filee"]["name"]);

                // $filenameeee='uploads/website_uploads/joinus' . "/" . $year_month . '/'  . $picname2;
                // if (file_exists($filenameeee)) {
                    // $rand=random_string('numeric', 5);
                    // $picname2 =  '+' . $rand . $picname2;
                    // // $picname=date("y-m-d-h-i-s") . $picname;
                // }




                // $dir3=APPPATH.'../uploads/website_uploads/joinus' . "/" . $year_month . '/' . $picname2;

                // $dir4='uploads/website_uploads/joinus' . "/" . $year_month . '/'  . $picname2;

                // //  $dir = 'media/sub_category/' . date("d-M-Y-H-i-s") . '-' . $picname;

                // move_uploaded_file($_FILES["filee"]["tmp_name"], $dir3);

                // // $releases_file =

            // //    $data['releases_file'] =$dir4;
// //var_dump($GLOBALS['pic']);
// //$path=base_url() . $dir4; 
		// //	$this->email->attach($path);
				// $this->email->attach($dir4);
            // }
			

            // //////////upload file//////////////////////
		
				
		
		
		
	

		$res=$this->email_sending_general($email,$subject,$msg,true,$name,"english");
		
		if($res == true)
		{
		//	echo "<script>alert('Message Sent Successfully')</script>";
		$ress="yes";
		}
		else
		{
		//echo "<script>alert('Sorry .try again Later.')</script>";
		$ress="no";
		}
		
	//	$this->index();
		//redirect('en/index');
		 $GLOBALS['ress'] = $ress;
		// $GLOBALS['page_name'] = 'index';
       $this->load->view('website/invoice',$GLOBALS);
	}
	
	
	
	


}
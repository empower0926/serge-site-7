<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
		*Created by : Amit Sharma
		*Created At : 20-6-2022 
		*Description : For Login Module
	 */
	public function __construct() {
		parent::__construct();        
			$this->load->model('login/Signin_Model');         
	}


	public function index()
	{
			$this->load->view('login/login');
	}

	public function process()
	{
	    $this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		/*If validae successfully */
		if($this->form_validation->run()){
		    
		   
		    
			$email=trim($this->input->post('email'));
			$password=trim($this->input->post('password'));
			$validate['response']=$this->Signin_Model->index($email,$password);
			
			//echo "<pre>";print_R($validate['response']);
		    //exit;
			
		
			if($validate['response']!=""){
			    //echo "Yess";
			   // exit;
				$data = array(  
					'id' => $validate['response']->id,
					'email' => $validate['response']->email,  
					'currently_logged_in' => 1  
					);    
				$this->session->set_userdata('logged_in',$data);
				$logged_in = $this->session->userdata('logged_in');
				
//				redirect('admin/dashboard');
				redirect(base_url('admin/dashboard'));
			}
			else
				{
				   
					$this->session->set_flashdata('error','Invalid login details.  Please try again.');
					return redirect()->to(base_url()); 
				}
		}
		else
		{
			$this->load->view('login/login');
		}	

	}
}

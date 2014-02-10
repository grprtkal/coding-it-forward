<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller
{
	public function index()
	{
		$this->load->view('index.php'); 
	}

//load NGO registration page & echo errors 
	public function ngo_registrationpage()
	{
		$data = array(); 

		$data['errors'] = $this->session->flashdata('errors');
		// $data['regerrors'] = $this->session->flashdata('regerrors'); 
		$this->load->view('ngoregistration.php', $data); 
	}

//load Developer registration page 
	public function dev_registrationpage()
	{
		$data = array(); 

		$data['errors'] = $this->session->flashdata('errors');
		// $data['regerrors'] = $this->session->flashdata('regerrors'); 
		$this->load->view('devregistration.php', $data);
	}

//NGO registration validation 
	public function ngoprocess_register()
	{
		$this->load->library('form_validation'); 

		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]||min_length[8]'); 
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');

		if($this->form_validation->run() === FALSE)
		{
			//if false, save errors in flashdata (will be able to use this once, and then it will disappear)
			//on NGO registration page, echo errors 
			$this->session->set_flashdata('errors', validation_errors()); 
			redirect(base_url('main/ngo_registrationpage')); 
			 
		}
		else
		{	
			//if entered correctly, enter into db 
			$this->register_user(); 
			//then redirect to profile page 
			redirect(base_url('main/profile'));  
		}
	}

//Developer registration validation 
	public function devprocess_register()
	{
		$this->load->library('form_validation'); 

		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]||min_length[8]'); 
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');

		if($this->form_validation->run() === FALSE)
		{
			//if false, save errors in flashdata (will be able to use this once, and then it will disappear)
			//on login_view page, echo errors 
			$this->session->set_flashdata('errors', validation_errors()); 
			redirect(base_url('main/dev_registrationpage')); 
			 
		}
		else
		{	
			//if entered correctly, enter into db 
			$this->register_user(); 
			//then redirect to profile page 
			redirect(base_url('main/profile'));  
		}
	}
}
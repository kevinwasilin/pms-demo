<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('form');
		$this->load->library('form_validation');


	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('user_main');
		$this->load->view('templates/footer');

	}
	public function login()
	{

		if($this->session->has_userdata('logged_in') != TRUE)
		{
			//Validation rules
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE)
			{
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
				$this->load->view('templates/header');
				$this->load->view('templates/navigation');
				$this->load->view('user_login');
				$this->load->view('templates/footer');
			}
			else
			{
				$userlogin = array('email' => $this->input->post('email'),
							  'password' => sha1($this->input->post('password'))
							);

				if($this->user_model->check_login($userlogin) === TRUE)
				{
					$userdata = array('email' => $this->input->post('email'),
							  'logged_in' => TRUE
							);

					$this->session->set_userdata($userdata);

					$data['title'] = "Login Success";
					$data['content'] = "Your have successfuly logged in. Click <a href=".base_url().">here</a> to visit the main page.";

					$this->load->view('templates/header');
					$this->load->view('templates/navigation');
					$this->load->view('user_notice',$data);
					$this->load->view('templates/footer');
				}
				else
				{
					$data['title'] = "Login Failed";
					$data['content'] = "Incorrect email or password. Click <a href=".base_url()."login>here</a> to login.";

					$this->load->view('templates/header');
					$this->load->view('templates/navigation');
					$this->load->view('user_notice',$data);
					$this->load->view('templates/footer');

				}
			}
		}	
		else
		{
			
			$data['title'] = "Login Success";
			$data['content'] = "You are currently logged in. Click <a href=".base_url().">here</a> to visit the main page.";
			$this->load->view('templates/header');
			$this->load->view('templates/navigation');
			$this->load->view('user_notice',$data);
			$this->load->view('templates/footer');

		}
		

	}
	public function logout()
	{
		if($this->session->has_userdata('logged_in') == TRUE)
		{
			$this->session->sess_destroy();
			$data['title'] = "Logout Success";
			$data['content'] = "You have successfuly logged out. Click <a href=".base_url().">here</a> to visit the main page.";
		}
		else
		{
			$data['title'] = "Logout Failed";
			$data['content'] = "You are not logged in. Click <a href=".base_url()."login>here</a> to login.";
		}

			$this->load->view('templates/header');
			$this->load->view('user_notice',$data);
			$this->load->view('templates/footer');
	}
	public function register()
	{	
		if($this->session->has_userdata('logged_in') != TRUE)
		{
			//Validation rules
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user_logins.email]',array(
	                					'required'      => 'You have not provided %s.',
	                					'is_unique'     => 'This %s already exists.'
	        ));
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
			

			if($this->form_validation->run() === FALSE)
			{
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
				$this->load->view('templates/header');
				$this->load->view('user_register');
				$this->load->view('templates/footer');
			}
			else
			{
				$userdata = array('email' => $this->input->post('email'),
								  'password' => sha1($this->input->post('password')),	
								  'fname' => $this->input->post('fname'),
								  'lname' => $this->input->post('lname')					  			  
								);

				if($this->user_model->register($userdata))
				{
					$data['title'] = "Registration Success";
					$data['content'] = "Your account is successfuly registered. Click <a href=".base_url()."login>here</a> to login.";

					$this->load->view('templates/header');
					$this->load->view('user_notice',$data);
					$this->load->view('templates/footer');

				}
				else
				{
					$data['error_msg'] = 'Your email has already been registered! Please login.';
					$this->load->view('templates/header');
					$this->load->view('user_register');
					$this->load->view('templates/footer');

				}
			}
		}
		else
		{
			$data['title'] = "Registration Not Allowed";
			$data['content'] = "You are currently logged in. Please <a href=".base_url()."logout>logout</a> before registering.";
			$this->load->view('templates/header');
			$this->load->view('user_notice',$data);
			$this->load->view('templates/footer');

		}
		
		

	}

}

/* End of file User */
/* Location: ./application/controllers/User */
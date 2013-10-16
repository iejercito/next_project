<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $view_data = array();
	protected $user_session = array();

	public function __construct()
	{
		parent::__construct();
		//for user session information
		$this->view_data['user_session'] = $this->user_session = $this->session->userdata('user_session');
		$this->output->enable_profiler(FALSE);
	}

	public function index()
	{
		$this->load->view("login");
	}
	
	public function process_login()
	{
		$user = new User();
		$post_data = $this->input->post();
		
		$check_user = $user->where(array(
							'email' => $post_data['email'],
							'password' => md5($post_data['password'])
						))->get();

		if($check_user->result_count() > 0)
		{
			
			$user = array(
					'email' => $check_user->email,  
					'first_name' => $check_user->first_name, 
					'last_name' => $check_user->last_name, 
					'is_logged_in' => TRUE
				);
				
			//this sets array $user to pass the array info to session user_session 
			$this->session->set_userdata('user_session', $user);
			//$this->session->userdata is to set particular index in another variable to use
			$this->view_data = $this->user_session = $this->session->userdata('user_session');
			
			$this->is_logged_in();
		}
		else
		{
			$data['status'] = FALSE;
			$data['message'] = "Wrong Email or Password";
		}
		
		echo json_encode($data);
	}
	
	public function is_logged_in()
	{
		if($this->user_session['is_logged_in'])
			redirect(base_url("/users/profile"));
		else
			redirect(base_url("/users"));
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
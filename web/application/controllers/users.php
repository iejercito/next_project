<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require("main.php");

class Users extends Main{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('register_user');
	}
		
	public function profile()
	{	
		$this->load->view('profile');
	}
	
	
	public function register_user()
	{
		$post_data = $this->input->post();
		$user = new User();
		
		$user->first_name = $post_data['first_name'];
		$user->last_name = $post_data['last_name'];
		$user->email = $post_data['email'];
		$user->password = $post_data['password'];

		if($user->p_save($post_data))
		{
			$data['status'] = TRUE;
			$data['message'] = "User Successfully registered";
		}
		else
		{
			$data['status'] = FALSE;
			$data['message'] = $user->error->string;
		}
		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
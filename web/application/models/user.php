<?php

class User extends DataMapper{
	
	public $has_many = array('group','group_member','workspace_member');
	
	public $validation = array(
		'first_name' => array(
			'label' => 'First Name',
			'rules' => array('required')
		),
		'last_name' => array(
			'label' => 'Last Name',
			'rules' => array('required')
		),
		'password' => array(
			'label' => 'Password',
			'rules' => array('required', 'trim', 'min_length' => 6)
		),
		'email' => array(
			'label' => 'Email',
			'rules' => array('required','valid_email')
		)
	);
	
	
	public function p_save($user)
	{
		$new_user = elements(array('first_name', 'last_name', 'email','password'), $user, NULL);
		
		$this->first_name = $new_user['first_name'];
		$this->last_name = $new_user['last_name'];
		$this->email = $new_user['email'];
		$this->password = md5($new_user['password']);
		
		return $this->save();
	}
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
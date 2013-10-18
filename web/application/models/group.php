<?php

class Group extends DataMapper{
	
<<<<<<< HEAD
	public $has_one = array('user','workspace');
	public $has_many = array('group_member');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
=======
	public $has_many = array('users');
	
	public function __construct()
	{
		parent::__construct();
>>>>>>> aee9614c0030b4bed761c3570628df9984c7900e
	}
}
//eof
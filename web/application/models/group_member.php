<?php

class Group_member extends DataMapper{
	
<<<<<<< HEAD
	public $has_one = array('user','group');
=======
	public $has_one = array('user');
>>>>>>> aee9614c0030b4bed761c3570628df9984c7900e
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
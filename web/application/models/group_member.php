<?php

class Group_member extends DataMapper{
	
	public $has_one = array('user');
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
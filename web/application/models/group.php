<?php

class Group extends DataMapper{
	
	public $has_one = array('user','workspace');
	public $has_many = array('group_member');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
//eof
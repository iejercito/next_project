<?php

class Group extends DataMapper{
	
	public $has_many = array('users');
	
	public function __construct()
	{
		parent::__construct();
	}
}
//eof
<?php

class Company extends DataMapper{
	
	public $has_many = array('workspace');
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
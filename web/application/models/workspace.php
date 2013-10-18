<?php

class Workspace extends DataMapper{
	
	public $has_one = array('company');
	public $has_many = array('workspace_member','group');
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
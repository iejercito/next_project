<?php

class Workspace_member extends DataMapper{
	
	public $has_one = array('workspace','user');

	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}
//eof
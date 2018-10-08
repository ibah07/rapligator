<?php

/**
* 
*/
class Petunjuk extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data['content_view'] = 'petunjuk/petunjuk_v';
		$this->template->admin_template($data);
	}
}
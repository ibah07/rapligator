<?php

/**
* 
*/
class Riwayat extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data['content_view'] = 'riwayat/riwayat_v';
		$this->template->admin_template($data);
	}
}

<?php

/**
* 
*/
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('Template');
	}
	function index ()
	{
		$data['content_view'] = 'home/home_v';
		$this->template->admin_template($data);

		$data['content_view'] = 'riwayat/riwayat_v';
		$this->template->admin_template($data);
	}
	function about ()
	{
		$data['content_view'] = 'home/about_v';
		$this->template->admin_template($data);
	}
	
}

?>
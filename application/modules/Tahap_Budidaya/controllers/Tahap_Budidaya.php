<?php

/**
* 
*/
class Tahap_Budidaya extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data['content_view'] = 'tahap_budidaya/tahap_budidaya_v';
		$this->template->admin_template($data);
	}
}
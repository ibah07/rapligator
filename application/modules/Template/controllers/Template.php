<?php

/**
* 
*/
class Template extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function sample_template($data = NULL)
	{
		$this->load->view("Template/sample_template_v", $data);
	}
	function admin_template($data = NULL)
	{
		$this->load->view("Template/admin_template_v", $data);
	}
}
?>
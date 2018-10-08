<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
 *
 */
class Rapli extends CI_Controller
{

function add()
{

    $a = $this->input->post('suhu');
    $b = $this->input->post('kelembaban');
  
    $this->modelnya->ard_add($a,$b);
    echo $a.' - '.$b;
  }
  
  function index()
  {
    $this->load->view('welcome_message');
  }

}


?>
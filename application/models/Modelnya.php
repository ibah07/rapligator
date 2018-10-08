<?php

/**
* 
*/
class Modelnya extends CI_Model
{
  
  function ard_add($a,$b)
  {
    $this->db->query("INSERT INTO web (suhu, kelembaban) VALUES ($a, $b)");

  }
}

?>
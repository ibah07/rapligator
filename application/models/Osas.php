<?php

/**
 *
 */
class Osas extends CI_Model
{

  function insert($suhu, $kelembaban)
  {

    $query = "INSERT INTO web (suhu, kelembaban)
              VALUES ($suhu, $kelembaban)";

    if ($this->db->query($query)) {
      return "Success";
    } else {
      return "Fail";
    }
  }
}


?>

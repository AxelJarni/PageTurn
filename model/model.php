<?php
require "dataBase.php";

abstract class Model {
  protected PDO $db;

  public function __construct() {
      $this->db = dataBase::getDB();
  }
}

 ?>
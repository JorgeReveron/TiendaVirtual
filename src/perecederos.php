<?php
require_once "productos.php";

class Perecederos extends Productos{
  protected $expirationDate;

  function __construct($name, $basePrice, $characteristics, $manufacturerName, $weigth, $bulkiness, $expirationDate) {
    parent::__construct($name, $basePrice, $characteristics, $manufacturerName, $weigth, $bulkiness);
    $this->expirationDate = New DateTime($expirationDate);
    //$this->expirationDate = $expirationDate;
  }

  function expired() {
    $now = new DateTime();
    return $now->diff($this->expirationDate)->m ? "true" : "false";
    
  }

  function daysToExpire() {
    $now = new DateTime();
    return ($this->expirationDate->diff($now))->format("%a dias para caducar");
  }

  function show() {
    // parent::show()
    echo $this->expirationDate->format("d/m/Y");
  }
}
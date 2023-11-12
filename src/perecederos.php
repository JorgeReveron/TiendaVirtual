<?php
require_once "productos.php";

class Perecederos extends Productos{
  protected $expirationDate;

  function __construct($name, $basePrice, $characteristics, $manufacturerName, $weigth, $bulkiness, $expirationDate) {
    parent::__construct($name, $basePrice, $characteristics, $manufacturerName, $weigth, $bulkiness);
    $this->expirationDate = New DateTime($expirationDate);
    $this->priceBasedOnDate();
  }

  function expired() {
    $now = new DateTime();
    if ($this->expirationDate < $now) {
      return "true";
    }else {
      return "false";
    }
    
  }

  function daysToExpire() {
    $now = new DateTime();
    if ($this->expired() == "true") {
      echo "El producto ya caduco";
    }else {
      return ($this->expirationDate->diff($now))->format("%a dias para caducar");
    }
  }

  function priceBasedOnDate() {
    $now = new DateTime();
    $dateDiff = $this->expirationDate->diff($now);
    if ($dateDiff->format("%m") == 1) {
      $discount = $this->basePrice*10/100;
      $this->basePrice = $this->basePrice-$discount;
    }
    if($dateDiff->format("%a") >= 1 && $dateDiff->format("%a") <= 10){
      $discount = $this->basePrice*25/100;
      $this->basePrice = $this->basePrice-$discount;
    }
  }

  function show() {
    // parent::show()
    echo $this->expirationDate->format("d/m/Y") . "<br>";
    echo $this->basePrice;
  }
}
<?php
require_once "tiendaVirtual.php";

class Productos extends TiendaVirtual{

  protected $manufacturerName;
  protected $weigth;
  protected $bulkiness;

  function __construct($name, $basePrice, $characteristics,$manufacturerName, $weigth, $bulkiness) {
    parent::__construct($name, $basePrice, $characteristics);
    $this->manufacturerName = $manufacturerName;
    $this->weigth = $weigth;
    $this->bulkiness = $bulkiness;
    $this->totalPrice = $this->shippingCost()+$this->basePrice;
  }

  function shippingCost() {
    $bulkinessCost = -1;
    for ($i=0; $i < $this->bulkiness; $i+=1000) { 
      $bulkinessCost++;
    }
    if($bulkinessCost != -1) {
      return round((2 + ($this->weigth * 0.0002) + $bulkinessCost),2);
    }
  }

  function show() {
    return $this->name;
  }
}
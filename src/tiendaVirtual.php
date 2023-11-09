<?php
class TiendaVirtual {

  protected $name;
  protected $basePrice;
  protected $characteristics;
  private static $tax = 7/100;

  function __construct($name, $basePrice, $characteristics) {
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->$characteristics = $characteristics;

  }

  function calculatePrice() {
    return $this->basePrice*self::$tax;
  }

  function changeTax($tax) {
    return self::$tax = $tax/100;
  }

  public function show() {
    return $this->basePrice;
  }
}
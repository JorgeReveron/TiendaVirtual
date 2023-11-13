<?php
class TiendaVirtual {

  protected $name;
  protected $basePrice;
  protected $characteristics;
  protected $totalPrice = 0;
  private static $tax = 7/100;

  function __construct($name, $basePrice, $characteristics) {
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->characteristics = $characteristics;
    $this->totalPrice = $this->calculatePrice();

  }

  function calculatePrice() {
    $tax = $this->basePrice*self::$tax;
    return round($this->basePrice+$tax,2);
  }

  function changeTax($tax) {
    return self::$tax = $tax/100;
  }

  function getName(){
    return $this->name;
  }
  function getBasePrice(){
    return $this->basePrice;
  }
  function getCharacteristics(){
    return $this->characteristics;
  }
  function getTotalPrice() {
    return $this->totalPrice;
  }

  public function show() {
    return $this->basePrice;
  }
}
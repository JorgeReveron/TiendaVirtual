<?php
require_once "tiendaVirtual.php";

class Eventos extends TiendaVirtual {

  protected $eventDay;

  function __construct($name,$basePrice,$caracteristics,$eventDay) {
    parent::__construct($name,$basePrice,$caracteristics);
    $this->eventDay = New DateTime($eventDay);
    $this->incrementByProximity();
  }

  function isFinish() {
    $now = new DateTime();
    if ($this->eventDay < $now) {
      return "true";
    }else {
      return "false";
    }
  }

  function daysForEvent() {
    $now = new DateTime();
    if ($this->isfinish() == "true") {
      echo "El evento ya paso";
    }else {
      return ($this->eventDay->diff($now))->format("%a para el evento");
    }
  }

  function incrementByProximity() {
    $now = new DateTime();
    $dateDiff = $this->eventDay->diff($now);
    if ($dateDiff->format("%a") >= 1 && $dateDiff->format("%a") <= 7) {
      $increment = $this->basePrice*20/100;
      $this->basePrice = $this->basePrice+$increment;
    }
    if($dateDiff->format("%a") == 0){
      $increment = $this->basePrice*50/100;
      $this->basePrice = $this->basePrice+$increment;
    }
  }

  function show() {
    return $this->basePrice;
  }
}
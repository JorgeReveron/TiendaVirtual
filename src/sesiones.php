<?php
require_once "tiendaVirtual.php";

class Sesiones extends TiendaVirtual {
  protected $sessions;

  function __construct($name,$basePrice,$caracteristics,$sessions) {
    parent::__construct($name,$basePrice,$caracteristics);
    $this->sessions = $sessions;
  }

  function sessionDay() {
    if ($this->sessions > 0) {
      return $this->sessions--;
    }else {
      return $this->sessions = "Sin sesiones restantes.";
    }
  }
}
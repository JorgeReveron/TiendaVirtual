<?php
require_once "tiendaVirtual.php";

class Mixtos extends TiendaVirtual {

  protected $sessions;
  protected $expiredDay;

  function __construct($name,$basePrice,$caracteristics,$sessions,$expiredDay) {
    parent::__construct($name,$basePrice,$caracteristics);
    $this->sessions = $sessions;
    $this->expiredDay = new DateTime($expiredDay);
  }

  function sessionDay() {
    if ($this->sessions > 0) {
      return $this->sessions--;
    }else {
      return $this->sessions = "Sin sesiones restantes.";
    }
  }

  function isExpired() {
    $now = new DateTime();
    $expired;
    if ($this->expiredDay < $now) {
      $expired = "true";
    }else {
      $expired = "false";
    }
    if ($expired == "true") {
      echo "Las sesiones ya caducaron";
    }else {
      if ($this->sessions == 0) {
        return "No quedan sesiones restantes";
      }else {
        return ($this->expiredDay->diff($now))->format("%a dias para que las sesiones caduquen");
      }
    }
  }
}
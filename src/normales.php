<?php
require_once "tiendaVirtual.php";
class Normales extends TiendaVirtual {

  function __construct($name,$basePrice,$caracteristics) {
    parent::__construct($name,$basePrice,$caracteristics);
  }
}
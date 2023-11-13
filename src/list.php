<?php 
require_once "tienda.php";
?>
  <p>
    <a href="enlaces.php">Listado de enlaces</a>
  </p>
<?php

$action = isset($_GET["type"]) ? $_GET["type"] : "null";

switch($action) {
  case "products" :
    foreach ($tienda as $item) {
      if ($item instanceof Productos) { ?>
        <p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>
      <?php }
    }
    break;
  case "services" :
    foreach ($tienda as $item) {
      if ($item instanceof Eventos || $item instanceof Sesiones || $item instanceof Mixtos || $item instanceof Normales) { ?>
        <p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>
      <?php }
    }
    break;
  case "date-of-expiration" :
    foreach ($tienda as $item) {
      if ($item instanceof Perecederos || $item instanceof Eventos || $item instanceof Mixtos) { ?>
        <p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>
      <?php }
    }
    break;
  case "not-expired" :
    foreach ($tienda as $item) {
      if ($item instanceof Perecederos) { 
        if ($item->expired() == "false"){
          ?>
          <p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>
          <?php }
        }
    }
    break;

  default :
    foreach ($tienda as $item) { ?>
      <p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>
    <?php }
    break;
}

<?php 
require_once "tienda.php";

$action = isset($_GET["action"]) ? $_GET["action"] : "null";



foreach ($tienda as $item) { ?>
<p><?= $item->getName() ?>: <?= $item->getCharacteristics() ?> : <?= $item->getTotalPrice() ?>€</p>

<?php } ?>